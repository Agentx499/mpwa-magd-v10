#!/bin/bash

# MPWA WhatsApp Gateway - Automated AWS Ubuntu Setup Script
# Run this script with sudo: sudo bash aws-deploy.sh

set -e

echo "=========================================================="
echo "   MPWA Automated Deployment Script (Ubuntu 22.04 LTS)    "
echo "=========================================================="

if [ "$EUID" -ne 0 ]; then
  echo "Please run as root (use sudo bash aws-deploy.sh)"
  exit 1
fi

# 1. Prompt for GitHub Credentials
read -p "Enter your GitHub Username: " GITHUB_USER
read -s -p "Enter your GitHub Personal Access Token (PAT): " GITHUB_TOKEN
echo ""
read -p "Enter your GitHub Repository URL (e.g., https://github.com/YourUsername/mpwa-magd-v10.git): " REPO_URL

# Construct clone URL with PAT
CLONE_URL="https://${GITHUB_USER}:${GITHUB_TOKEN}@${REPO_URL#https://}"

# Set the exact IP explicitly
PUBLIC_IP="13.233.227.158"
echo "Target AWS Public IP: $PUBLIC_IP"

echo "=========================================================="
echo " Installing Prerequisites (PHP 8.2, Node 20, Nginx, MySQL)"
echo "=========================================================="

# Update System
apt update && DEBIAN_FRONTEND=noninteractive apt upgrade -y

# Install base packages
DEBIAN_FRONTEND=noninteractive apt install -y software-properties-common curl git unzip zip nginx mysql-server

# Add PHP Repository and install PHP 8.2
add-apt-repository ppa:ondrej/php -y
apt update
DEBIAN_FRONTEND=noninteractive apt install -y php8.2-fpm php8.2-mysql php8.2-xml php8.2-curl php8.2-zip php8.2-mbstring php8.2-gd php8.2-bcmath

# Install Node.js 20 & PM2
curl -fsSL https://deb.nodesource.com/setup_20.x | bash -
DEBIAN_FRONTEND=noninteractive apt install -y nodejs
npm install -g pm2

# Install Composer
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

echo "=========================================================="
echo " Configuring Database"
echo "=========================================================="
# Generate random DB password
DB_PASS=$(openssl rand -base64 12)

# Setup MySQL
mysql -u root -e "CREATE DATABASE IF NOT EXISTS mpwa;"
mysql -u root -e "CREATE USER IF NOT EXISTS 'mpwa_user'@'localhost' IDENTIFIED BY '${DB_PASS}';"
mysql -u root -e "GRANT ALL PRIVILEGES ON mpwa.* TO 'mpwa_user'@'localhost';"
mysql -u root -e "FLUSH PRIVILEGES;"

echo "=========================================================="
echo " Cloning Project & Setting Up App"
echo "=========================================================="
# Remove default nginx folder if it exists
rm -rf /var/www/html

# Clone repository
git clone $CLONE_URL /var/www/mpwa
cd /var/www/mpwa

# Copy .env and replace configuration
cp .env.example .env
sed -i "s/APP_URL=.*/APP_URL=http:\/\/${PUBLIC_IP}/g" .env
sed -i "s/DB_DATABASE=.*/DB_DATABASE=mpwa/g" .env
sed -i "s/DB_USERNAME=.*/DB_USERNAME=mpwa_user/g" .env
sed -i "s/DB_PASSWORD=.*/DB_PASSWORD=${DB_PASS}/g" .env
sed -i "s/WA_URL_SERVER=.*/WA_URL_SERVER=http:\/\/${PUBLIC_IP}:3100/g" .env
sed -i "s/TYPE_SERVER=.*/TYPE_SERVER=other/g" .env
sed -i "s/APP_INSTALLED=.*/APP_INSTALLED=true/g" .env

# Install Dependencies
export COMPOSER_ALLOW_SUPERUSER=1
composer install --optimize-autoloader --no-dev
npm install

# Laravel setup commands
php artisan key:generate
php artisan storage:link
php artisan migrate --force
php artisan db:seed --force

echo "=========================================================="
echo " Starting Servers & Setting Permissions"
echo "=========================================================="
# Permissions
chown -R www-data:www-data /var/www/mpwa
chmod -R 775 /var/www/mpwa/storage /var/www/mpwa/bootstrap/cache

# Start Node WhatsApp Engine
pm2 start server.js --name "mpwa-node"
pm2 save
pm2 startup systemd -u root --hp /root

# Configure Nginx
cat <<EOF > /etc/nginx/sites-available/mpwa
server {
    listen 80;
    server_name $PUBLIC_IP;
    root /var/www/mpwa/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files \$uri \$uri/ /index.php?\$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME \$realpath_root\$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
EOF

# Enable Nginx Site
rm -f /etc/nginx/sites-enabled/default
ln -s /etc/nginx/sites-available/mpwa /etc/nginx/sites-enabled/
nginx -t
systemctl restart nginx

echo "=========================================================="
echo " Deployment Complete! "
echo "=========================================================="
echo "Website URL: http://${PUBLIC_IP}"
echo "WhatsApp Node Server is running on Port 3100 via PM2"
echo "Database Password (Save this!): ${DB_PASS}"
echo "Default Admin Login: Check your DB or use the test@gmail.com account created locally."
echo "Make sure your AWS Security Group allows Port 80 (HTTP) and Port 3100 (Custom TCP)."
echo "=========================================================="
