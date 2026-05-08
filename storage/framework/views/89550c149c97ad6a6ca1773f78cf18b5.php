<?php if (isset($component)) { $__componentOriginald819fa024fa6d382567c72bcf8897f25 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald819fa024fa6d382567c72bcf8897f25 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'theme::components.layout-dashboard','data' => ['title' => 'API Docs']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'API Docs']); ?>


    <style>
        .tab-content {
            margin-top: 20px;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            background-color: #fff;
            color: #333;
        }
		.tab-pane pre {
			padding: 15px;
		}
    </style>

    <!--breadcrumb-->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb breadcrumb-custom-icon">
			<li class="breadcrumb-item">
				<a href="javascript:void(0);">API</a>
				<i class="breadcrumb-icon icon-base ti tabler-chevron-right align-middle icon-xs"></i>
			</li>
			<li class="breadcrumb-item active">Documentation</li>
		</ol>
	</nav>
    <!--end breadcrumb-->

    

        <div class="row g-4">
            <div class="col-lg-3">
                <ul class="nav nav-pills flex-column" role="tablist">
                    <li class="nav-item mb-2" role="presentation">
                        <a class="nav-link active d-flex align-items-center justify-content-start" data-bs-toggle="tab" href="#sendmessage" role="tab">
                            <i class="ti tabler-message me-2"></i>
                            <span class="text-start">Send Message</span>
                        </a>
                    </li>
					<li class="nav-item mb-2" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-start" data-bs-toggle="tab" href="#sendproduct" role="tab">
                            <i class="ti tabler-apps me-2"></i>
                            <span class="text-start">Send Product</span>
                        </a>
                    </li>
					<li class="nav-item mb-2" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-start" data-bs-toggle="tab" href="#textchannel" role="tab">
                            <i class="ti tabler-speakerphone me-2"></i>
                            <span class="text-start">Send Text To Channel</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-start" data-bs-toggle="tab" href="#sendmedia" role="tab">
                            <i class="ti tabler-photo me-2"></i>
                            <span class="text-start">Send Media</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-start" data-bs-toggle="tab" href="#sendsticker" role="tab">
                            <i class="ti tabler-sticker me-2"></i>
                            <span class="text-start">Send Sticker</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-start" data-bs-toggle="tab" href="#sendpoll" role="tab">
                            <i class="ti tabler-chart-bar-popular me-2"></i>
                            <span class="text-start">Send Poll Message</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-start" data-bs-toggle="tab" href="#sendbutton" role="tab">
                            <i class="ti tabler-square-plus me-2"></i>
                            <span class="text-start">Send Button</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-start" data-bs-toggle="tab" href="#sendlist" role="tab">
                            <i class="ti tabler-list-details me-2"></i>
                            <span class="text-start">Send List Message</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-start" data-bs-toggle="tab" href="#sendlocation" role="tab">
                            <i class="ti tabler-map-pin me-2"></i>
                            <span class="text-start">Send Location</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-start" data-bs-toggle="tab" href="#sendvcard" role="tab">
                            <i class="ti tabler-id me-2"></i>
                            <span class="text-start">Send Vcard</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-start" data-bs-toggle="tab" href="#generateqr" role="tab">
                            <i class="ti tabler-qrcode me-2"></i>
                            <span class="text-start">Generate QR Code</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-start" data-bs-toggle="tab" href="#disconnectdevice" role="tab">
                            <i class="ti tabler-plug-off me-2"></i>
                            <span class="text-start">Disconnect Device</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-start" data-bs-toggle="tab" href="#createuser" role="tab">
                            <i class="ti tabler-user-plus me-2"></i>
                            <span class="text-start">Create User</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-start" data-bs-toggle="tab" href="#userinfo" role="tab">
                            <i class="ti tabler-user me-2"></i>
                            <span class="text-start">User Info</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-start" data-bs-toggle="tab" href="#deviceinfo" role="tab">
                            <i class="ti tabler-device-mobile me-2"></i>
                            <span class="text-start">Device Info</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-start" data-bs-toggle="tab" href="#checknumber" role="tab">
                            <i class="ti tabler-phone-check me-2"></i>
                            <span class="text-start">Check Number</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2" role="presentation">
                        <a class="nav-link d-flex align-items-center justify-content-start" data-bs-toggle="tab" href="#examplewebhook" role="tab">
                            <i class="ti tabler-api-app me-2"></i>
                            <span class="text-start">Example Webhook</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="tab-content py-0 mt-0">
                    <?php echo $__env->make('theme::pages.api-docs.send-message', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
					<?php echo $__env->make('theme::pages.api-docs.send-product', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
					<?php echo $__env->make('theme::pages.api-docs.send-text-channel', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('theme::pages.api-docs.send-media', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('theme::pages.api-docs.send-sticker', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('theme::pages.api-docs.send-poll', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('theme::pages.api-docs.send-button', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('theme::pages.api-docs.send-list', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('theme::pages.api-docs.send-location', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('theme::pages.api-docs.send-vcard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('theme::pages.api-docs.generateqr', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('theme::pages.api-docs.disconnectdevice', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('theme::pages.api-docs.createuser', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('theme::pages.api-docs.user-info', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('theme::pages.api-docs.device-info', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('theme::pages.api-docs.check-number', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('theme::pages.api-docs.examplewebhook', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </div>
            </div>
        </div>






 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald819fa024fa6d382567c72bcf8897f25)): ?>
<?php $attributes = $__attributesOriginald819fa024fa6d382567c72bcf8897f25; ?>
<?php unset($__attributesOriginald819fa024fa6d382567c72bcf8897f25); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald819fa024fa6d382567c72bcf8897f25)): ?>
<?php $component = $__componentOriginald819fa024fa6d382567c72bcf8897f25; ?>
<?php unset($__componentOriginald819fa024fa6d382567c72bcf8897f25); ?>
<?php endif; ?>
<?php /**PATH E:\projects\mpwa-magd-v10.0.0\resources\themes/vuexy/views/pages/api-docs/index.blade.php ENDPATH**/ ?>