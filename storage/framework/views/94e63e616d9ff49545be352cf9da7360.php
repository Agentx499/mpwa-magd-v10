<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="<?php echo e(in_array(app()->getLocale(), ['ar', 'he', 'fa']) ? 'rtl' : 'ltr'); ?>">

<head>
    <meta charset="utf-8" />
    <title><?php echo e(config('config.site_name')); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset_index('images/favicon.png')); ?>">
    <!-- css -->
    <link href="<?php echo e(asset_index('css/bootstrap.' . (in_array(app()->getLocale(), ['ar', 'he', 'fa']) ? 'rtl' : 'ltr') . '.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset_index('css/materialdesignicons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset_index('css/style.' . (in_array(app()->getLocale(), ['ar', 'he', 'fa']) ? 'rtl' : 'ltr') . '.min.css')); ?>" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
</head>

<body>


	<?php if (isset($component)) { $__componentOriginalb3e736cbd97dce84339f214192337fea = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb3e736cbd97dce84339f214192337fea = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'index::components.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('index-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb3e736cbd97dce84339f214192337fea)): ?>
<?php $attributes = $__attributesOriginalb3e736cbd97dce84339f214192337fea; ?>
<?php unset($__attributesOriginalb3e736cbd97dce84339f214192337fea); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb3e736cbd97dce84339f214192337fea)): ?>
<?php $component = $__componentOriginalb3e736cbd97dce84339f214192337fea; ?>
<?php unset($__componentOriginalb3e736cbd97dce84339f214192337fea); ?>
<?php endif; ?>
	
	<?php echo e($slot); ?>

	
	<?php if (isset($component)) { $__componentOriginal170118df4e1fb8a1766198f7d923b904 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal170118df4e1fb8a1766198f7d923b904 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'index::components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('index-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal170118df4e1fb8a1766198f7d923b904)): ?>
<?php $attributes = $__attributesOriginal170118df4e1fb8a1766198f7d923b904; ?>
<?php unset($__attributesOriginal170118df4e1fb8a1766198f7d923b904); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal170118df4e1fb8a1766198f7d923b904)): ?>
<?php $component = $__componentOriginal170118df4e1fb8a1766198f7d923b904; ?>
<?php unset($__componentOriginal170118df4e1fb8a1766198f7d923b904); ?>
<?php endif; ?>


    <!-- login Modal Start -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content login-page">
                <div class="modal-body">
                    <div class="text-center">
                        <h3 class="title mb-4"><?php echo e(__index('HI_WELCOME', ['site_name' => config('config.site_name')])); ?></h3>
                        <h4 class="text-uppercase text-primary"><b><?php echo e(__index('SIGN_IN')); ?></b></h4>
                    </div>
                    <div class="login-form mt-4">
                        <form class="form-body" action="<?php echo e(route('login')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="username"><?php echo e(__index('USERNAME')); ?></label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="<?php echo e(__index('USERNAME')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="password"><?php echo e(__index('ENTER_PASSWORD')); ?></label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="<?php echo e(__index('Enter Password')); ?>">
                            </div>
                            <a href="<?php echo e(route('password.request')); ?>" class="float-end text-muted font-size-15"><?php echo e(__index('RESET_PASSWORD')); ?></a>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label font-size-15" for="customCheck1"><?php echo e(__index('REMEMBER_ME')); ?></label>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary"><?php echo e(__index('SIGN_IN')); ?> <i class="icon-size-15 icon ms-1"
                                        data-feather="arrow-right-circle"></i></button>
                            </div>
                        </form>
                        <div class="text-center mt-4">
                            <p class="text-muted mb-0"><?php echo e(__index("DONT_HAVE_ACCOUNT")); ?> <a href="<?php echo e(route('register')); ?>" class="text-primary"><?php echo e(__index('SIGN_UP_HERE')); ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login Modal End -->

    <!-- Register Modal Start-->
    <div class="modal fade" id="exampleModalCenter-1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content login-page">
                <div class="modal-body">
                    <div class="text-center">
                        <h3 class="title mb-4"><?php echo e(__index('HI_WELCOME', ['site_name' => config('config.site_name')])); ?></h3>
                        <h4 class="text-uppercase text-primary"><b><?php echo e(__index('REGISTER')); ?></b></h4>
                    </div>
                    <div class="login-form mt-4">
                        <form class="form-body" action="<?php echo e(route('register')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="username"><?php echo e(__index('USERNAME')); ?></label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="<?php echo e(__index('USERNAME')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="email"><?php echo e(__index('EMAIL')); ?></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo e(__index('Email')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="password"><?php echo e(__index('ENTER_PASSWORD')); ?></label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="<?php echo e(__index('ENTER_PASSWORD')); ?>">
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary"><?php echo e(__index('REGISTER')); ?> <i class="icon-size-15 icon ms-1" data-feather="arrow-right-circle"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Modal Start-->


    <!-- javascript -->
    <script src="<?php echo e(asset_index('js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset_index('js/smooth-scroll.polyfills.min.js')); ?>"></script>
    <script src="<?php echo e(asset_index('js/gumshoe.polyfills.min.js')); ?>"></script>
    <!-- feather icon -->
    <script src="<?php echo e(asset_index('js/feather.js')); ?>"></script>
    <!-- unicons icon -->
    <script src="<?php echo e(asset_index('js/unicons.js')); ?>"></script>
    <!-- Main Js -->
    <script src="<?php echo e(asset_index('js/app.js')); ?>"></script>

</body>

</html><?php /**PATH E:\projects\mpwa-magd-v10.0.0\resources\index/lezir/views/components/layout.blade.php ENDPATH**/ ?>