    <!-- light-dark mode -->

    <a href="javascript: void(0);" id="light-dark-mode" class="mode-btn text-white rounded-end">
        <i class="mdi mdi-sun-compass bx-spin mode-light"></i>
        <i class="mdi mdi-moon-waning-crescent mode-dark"></i>
    </a>

    <!--Navbar Start-->

    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark" id="navbar">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="<?php echo e(url('/')); ?>">
                <?php if (isset($component)) { $__componentOriginal071044510095d4acf83d2e74ee967609 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal071044510095d4acf83d2e74ee967609 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'index::components.logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('index-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal071044510095d4acf83d2e74ee967609)): ?>
<?php $attributes = $__attributesOriginal071044510095d4acf83d2e74ee967609; ?>
<?php unset($__attributesOriginal071044510095d4acf83d2e74ee967609); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal071044510095d4acf83d2e74ee967609)): ?>
<?php $component = $__componentOriginal071044510095d4acf83d2e74ee967609; ?>
<?php unset($__componentOriginal071044510095d4acf83d2e74ee967609); ?>
<?php endif; ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto navbar-center" id="navbar-navlist">
                    <li class="nav-item">
                        <a data-scroll href="#home" class="nav-link"><?php echo e(__index('HOME')); ?></a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#features" class="nav-link"><?php echo e(__index('FEATURES')); ?></a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#pricing" class="nav-link"><?php echo e(__index('PRICING')); ?></a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#contact" class="nav-link"><?php echo e(__index('CONTACT_US')); ?></a>
                    </li>
                </ul>
				<ul class="navbar-nav dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-globe"></i>
						<?php echo e(__('Language')); ?>

					</a>
					<ul class="dropdown-menu" aria-labelledby="languageDropdown">
						<?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li>
								<a class="dropdown-item" rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
									<span class="flag-icon flag-icon-<?php echo e(strtolower($localeCode)); ?>"></span>
									<?php echo e($properties['native']); ?>

								</a>
							</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</ul>
			<?php if(auth()->check()): ?>
				<ul class="navbar-nav navbar-center">
                    <li class="nav-item dropdown dropdown-user-setting">
						<a class="nav-link dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
						  <div class="user-setting d-flex align-items-center">
							<img src="<?php echo e(asset_index('images/avatar-1.png')); ?>" class="user-img" alt="">
						  </div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end dropdown-user">
						  <li>
							 <a class="dropdown-item" href="#">
							   <div class="d-flex align-items-center">
								  <img src="<?php echo e(asset_index('images/avatar-1.png')); ?>" alt="" class="rounded-circle" width="54" height="54">
								  <div class="ms-3">
									<h6 class="mb-0 dropdown-user-name"><?php echo e(Auth::user()->username); ?></h6>
									<small class="mb-0 dropdown-user-designation text-secondary"><?php echo e(__(Auth::user()->level)); ?></small>
								  </div>
							   </div>
							 </a>
						   </li>
						   <li><hr class="dropdown-divider"></li>
						   
							<li>
							  <a class="dropdown-item" href="<?php echo e(route('home')); ?>">
								 <div class="d-flex align-items-center">
								   <div class=""><i class="bi bi-house-fill"></i></div>
								   <div class="ms-3"><span><?php echo e(__('Dashboard')); ?></span></div>
								 </div>
							   </a>
							</li>
						   <li><hr class="dropdown-divider"></li>
						   
							<li>
							  <a class="dropdown-item" href="<?php echo e(route('user.settings')); ?>">
								 <div class="d-flex align-items-center">
								   <div class=""><i class="bi bi-gear-fill"></i></div>
								   <div class="ms-3"><span><?php echo e(__('Setting')); ?></span></div>
								 </div>
							   </a>
							</li>
							
							<li><hr class="dropdown-divider"></li>
							<li>
							  <form action="<?php echo e(route('logout')); ?>" method="post">
								<?php echo csrf_field(); ?>
								<button class="dropdown-item" type="submit">
								 <div class="d-flex align-items-center">
								   <div class=""><i class="bi bi-lock-fill"></i></div>
								   <div class="ms-3"><span><?php echo e(__('Logout')); ?></span></div>
								 </div>
							   </button>
							  </form>
							</li>
						</ul>
					  </li>
				</ul>
			<?php else: ?>
                <ul class="navbar-nav navbar-center">
                    <li class="nav-item">
                        <a href="#login" class="nav-link" data-bs-toggle="modal"
                            data-bs-target="#exampleModalCenter"><?php echo e(__index('SIGN_IN')); ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="#login" class="nav-link" data-bs-toggle="modal"
                            data-bs-target="#exampleModalCenter-1"><?php echo e(__index('REGISTER')); ?></a>
                    </li>
                </ul>
			<?php endif; ?>
            </div>
        </div>
    </nav>
    <!-- Navbar End --><?php /**PATH E:\projects\mpwa-magd-v10.0.0\resources\index/lezir/views/components/header.blade.php ENDPATH**/ ?>