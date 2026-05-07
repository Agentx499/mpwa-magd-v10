# AWS Deployment Plan - MPWA WhatsApp Gateway

## 1. Prerequisites
- AWS Account with billing configured.
- Domain name (Route 53 or external registrar).
- SSL Certificate (AWS Certificate Manager or Let's Encrypt).

## 2. Recommended Infrastructure (Architecture)
To ensure stability for the Node.js WhatsApp engine and the Laravel backend:
- **EC2 Instance Size**: `t3.medium` or `t3.small` (Node.js WhatsApp engine uses high memory for encryption; 4GB RAM recommended).
- **Operating System**: Ubuntu 22.04 LTS (Required for compatibility with Node 20 and PHP 8.2).
- **Storage**: Minimum 20GB General Purpose SSD (gp3).
- **Security Groups (Firewall settings)**:
  - Allow Port `80` (HTTP - For Laravel Website)
  - Allow Port `443` (HTTPS - Optional, for SSL)
  - Allow Port `22` (SSH - For terminal access)
  - Allow Port `3100` (Custom TCP - For the Node.js Socket server connection)

## 3. Step-by-Step Implementation

### Automated Installation (Recommended)
An automated deployment script `aws-deploy.sh` has been created in the root of the project. This script handles installing all prerequisites, cloning the repo, building the database, and starting the servers automatically.

**Steps to use the script:**
1. Connect to your AWS Ubuntu EC2 instance via SSH.
2. Transfer the `aws-deploy.sh` script to your server (using SCP or copy-pasting it).
3. Run the script as root:
   ```bash
   sudo bash aws-deploy.sh
   ```
4. Follow the prompts to provide your GitHub Username, Personal Access Token (PAT), and Repository URL.

### Manual Installation Steps (If script is not used)

#### Phase 1: EC2 Setup
1. Launch an Ubuntu 22.04 LTS EC2 Instance.
2. Install dependencies:
   - PHP 8.2 + extensions (bcmath, xml, curl, zip, mbstring, gd).
   - Node.js (v20+).
   - Nginx & MySQL.
   - PM2 (Process Manager for Node.js).
   - Composer.

#### Phase 2: Code Deployment & Specific Configurations
1. Clone the repository.
2. Install dependencies: `composer install --no-dev --optimize-autoloader` and `npm install`.
3. Configure `.env` with critical settings discovered during local testing:
   - Set `APP_ENV=production`.
   - Set `TYPE_SERVER=other`.
   - Set `WA_URL_SERVER=http://<YOUR_AWS_PUBLIC_IP>:3100` (Crucial for fixing the "Waiting for node server" issue).
   - Set `APP_INSTALLED=true`.
4. Run `php artisan migrate --force` and `php artisan db:seed --force` (The seeder sets up the default plans).

### Phase 3: Process Management
1. **Laravel**: Setup Nginx server blocks and configure a Systemd unit for Laravel Queue workers (if used).
2. **Node.js**: Start the WhatsApp engine using PM2: `pm2 start server.js --name "whatsapp-engine"`.

### Phase 4: Networking & Security
1. Configure Security Groups:
   - Allow Port 80, 443 (Web).
   - Allow Port 22 (SSH).
   - Allow Node.js port (e.g., 3000) if not behind Nginx reverse proxy.
2. Point Domain DNS to EC2 Elastic IP or Load Balancer.

## 4. Maintenance
- Set up AWS Backup for RDS and EBS volumes.
- Use GitHub Actions for CI/CD to auto-deploy changes from the `main` branch.
