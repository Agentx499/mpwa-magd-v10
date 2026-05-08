<?php if (isset($component)) { $__componentOriginalf7b3493c55b303ae798b28d11e814ac6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf7b3493c55b303ae798b28d11e814ac6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'index::components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('index-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <!-- Home Start -->
    <section class="hero-1-bg" style="background-image: url(<?php echo e(asset_index('images/hero-1-bg-img.png')); ?>)" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <h1 class="hero-1-title fw-bold text-shadow mb-4"><?php echo e(__index('BOOST_MPWA')); ?></h1>
                    <div class="w-75 mb-5 mb-lg-0">
                        <p class="text-muted mb-5 pb-5 font-size-17"><?php echo e(__index('BOOST_MPWA_MSG')); ?></p>
                        <p><?php echo __index('BOOST_MPWA_FOOTER'); ?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class=" mt-5 mt-lg-0">
                        <img src="<?php echo e(asset_index('images/hero-1-img.png')); ?>" alt="" class="img-fluid d-block mx-auto rounded shadow animate-float">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home End -->

    <!-- Feathers Start -->
    <section class="section" id="features">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 align-self-center">
                    <div class="mb-4 mb-lg-0">
                        <video autoplay muted loop>
						  <source src="<?php echo e(asset_index('images/autoreply.webm')); ?>" type="video/webm">
						</video>
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="wc-box rounded text-center wc-box-primary p-4 mt-md-5">
                                <div class="wc-box-icon">
                                    <i class="mdi mdi-collage"></i>
                                </div>
                                <h5 class="fw-bold mb-2 wc-title mt-4"><?php echo e(__index('AI_REPLY')); ?></h5>
                                <p class="text-muted mb-0 font-size-15 wc-subtitle"><?php echo e(__index('AI_REPLY_MSG')); ?></p>
                            </div>
                            <div class="wc-box rounded text-center wc-box-primary p-4">
                                <div class="wc-box-icon">
                                    <i class="mdi mdi-trending-up"></i>
                                </div>
                                <h5 class="fw-bold mb-2 wc-title mt-4"><?php echo e(__index('TEMPLATE_MESSAGING')); ?></h5>
                                <p class="text-muted mb-0 font-size-15 wc-subtitle"><?php echo e(__index('TEMPLATE_MESSAGING_MSG')); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="wc-box rounded text-center wc-box-primary p-4">
                                <div class="wc-box-icon">
                                    <i class="mdi mdi-security"></i>
                                </div>
                                <h5 class="fw-bold mb-2 wc-title mt-4"><?php echo e(__index('AUTO_REPLY')); ?></h5>
                                <p class="text-muted mb-0 font-size-15 wc-subtitle"><?php echo e(__index('AUTO_REPLY_MSG')); ?></p>
                            </div>
                            <div class="wc-box rounded text-center wc-box-primary p-4">
                                <div class="wc-box-icon">
                                    <i class="mdi mdi-database-lock"></i>
                                </div>
                                <h5 class="fw-bold mb-2 wc-title mt-4"><?php echo e(__index('ACTIONS_BUTTONS')); ?></h5>
                                <p class="text-muted mb-0 font-size-15 wc-subtitle"><?php echo e(__index('ACTIONS_BUTTONS_MSG')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feathers End -->

    <!-- Pricing Start -->
    <section class="section bg-light" id="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h3 class="title mb-3"><?php echo e(__index('CHOOSE_PLAN')); ?></h3>
                        <p class="text-muted font-size-15"><?php echo e(__index('CHOOSE_PLAN_MSG')); ?></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
				<?php $__currentLoopData = $plans ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($index != 0 && $index % 3 == 0): ?>
						</div>
						<div class="row justify-content-center mt-4">
					<?php endif; ?>
					<div class="col-lg-4 <?php echo e(count($plans) > 3 && $index >= 3 ? 'col-lg-4 mx-auto' : ''); ?>">
						<div class="pricing-box rounded text-center <?php echo e($plan->is_recommended == 1 ? 'border border-4 active' : 'border border-1'); ?> p-4">
							<div class="pricing-icon-bg my-4">
								<i class="mdi mdi-account-group h1"></i>
							</div>
							<h4 class="title mb-3"><?php echo e($plan->title); ?></h4>
							<h1 class="fw-bold mb-0"><b><sup class="h4 me-2 fw-bold"><?php echo e($plan->symbol); ?></sup><?php echo e(number_format($plan->price)); ?></b></h1>
							<p class="text-muted font-weight-semibold"><?php echo e(__index('USER_MONTH')); ?></p>
							<ul class="list-unstyled pricing-item m-0 mb-3 p-0 text-start px-0">
								<?php $__currentLoopData = $plan->data ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li class="d-flex align-items-center m-0 p-0">
									<i class="mdi <?php echo e($data == false ? 'mdi-cancel text-danger' : 'mdi-check-circle text-success'); ?> me-2"></i> 
									<?php echo e(__index(strtoupper($key))); ?> <?php echo e($key == 'messages_limit' || $key == 'device_limit' ? "(".number_format($data).")" : ""); ?>

								</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
							<?php if($plan->is_trial != 1): ?>
								<a href="<?php echo e(route('payments.checkout', $plan->id)); ?>" class="btn <?php echo e($plan->is_recommended == 1 ? 'btn-primary' : 'btn-outline-primary'); ?> pr-btn w-100"><?php echo e(__index('BUY_NOW')); ?></a>
							<?php else: ?>
								<a href="<?php echo e(route('payments.checkout', $plan->id)); ?>" class="btn <?php echo e($plan->is_recommended == 1 ? 'btn-primary' : 'btn-outline-primary'); ?> pr-btn w-100"><?php echo e(__index('BUY_NOW')); ?></a>
								<a href="<?php echo e(route('payments.trial', $plan->id)); ?>" class="mt-2 btn <?php echo e($plan->is_recommended == 1 ? 'btn-danger' : 'btn-outline-primary'); ?> pr-btn w-100"><?php echo e(__index('TRIAL_DAYS', ['trial_days' => $plan->trial_days])); ?></a>
							<?php endif; ?>
							<div class="mt-4">
								<div class="hero-bottom-img">
									<img src="<?php echo e(asset_index('images/pricing-bottom-bg.png')); ?>" alt="" class="img-fluid d-block mx-auto">
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
        </div>
    </section>
    <!-- Pricing End -->

    <!-- Contact Us Start -->
    <section class="section bg-light" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h3 class="title mb-3"><?php echo e(__index('CONTACT_US')); ?></h3>
                        <p class="text-muted font-size-15"><?php echo e(__index('CONTACT_US_MSG')); ?></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7 align-self-center">
                    <div class="custom-form mb-5 mb-lg-0">
                        <form method="post" name="myForm" onsubmit="return validateForm()">
                            <p id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"><?php echo e(__index('NAME')); ?>*</label>
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="<?php echo e(__index('NAME')); ?>...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email"><?php echo e(__index('EMAIL')); ?>*</label>
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="<?php echo e(__index('EMAIL')); ?>...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="comments"><?php echo e(__index('MESSAGE')); ?>*</label>
                                        <textarea name="comments" id="comments" rows="4" class="form-control"
                                            placeholder="<?php echo e(__index('MESSAGE')); ?>..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" id="submit" name="send" class="btn btn-primary"><?php echo e(__index('SEND_MESSAGE')); ?>

                                        <i class="icon-size-15 ms-2 icon" data-feather="send"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="contact-detail text-muted ms-lg-5">
                        <p class=""><i class="icon-xs icon me-1" data-feather="mail"></i> :
                            <span><?php echo e(__index('FOOTER_EMAIL')); ?></span>
                        </p>
                        <p class=""><i class="icon-xs icon me-1" data-feather="link"></i> : <span><?php echo e(__index('FOOTER_LINK')); ?></span>
                        </p>
                        <p class=""><i class="icon-xs icon me-1" data-feather="phone-call"></i> : <span dir="ltr"><?php echo e(__index('FOOTER_PHONE')); ?></span></p>
                        <p class=""><i class="icon-xs icon me-1" data-feather="clock"></i> : <span><?php echo e(__index('FOOTER_CLOCK')); ?></span></p>
                        <p class=""><i class="icon-xs icon me-1" data-feather="map-pin"></i> : <span><?php echo e(__index('FOOTER_MAP')); ?></span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us End -->

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf7b3493c55b303ae798b28d11e814ac6)): ?>
<?php $attributes = $__attributesOriginalf7b3493c55b303ae798b28d11e814ac6; ?>
<?php unset($__attributesOriginalf7b3493c55b303ae798b28d11e814ac6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf7b3493c55b303ae798b28d11e814ac6)): ?>
<?php $component = $__componentOriginalf7b3493c55b303ae798b28d11e814ac6; ?>
<?php unset($__componentOriginalf7b3493c55b303ae798b28d11e814ac6); ?>
<?php endif; ?><?php /**PATH E:\projects\mpwa-magd-v10.0.0\resources\index/lezir/views/home.blade.php ENDPATH**/ ?>