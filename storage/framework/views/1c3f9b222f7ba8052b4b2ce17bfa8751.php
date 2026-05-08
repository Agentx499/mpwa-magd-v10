<?php if (isset($component)) { $__componentOriginald819fa024fa6d382567c72bcf8897f25 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald819fa024fa6d382567c72bcf8897f25 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'theme::components.layout-dashboard','data' => ['title' => ''.e(__('Payment Gateways')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Payment Gateways')).'']); ?>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

    <nav aria-label="breadcrumb">
		<ol class="breadcrumb breadcrumb-custom-icon">
			<li class="breadcrumb-item">
				<a href="javascript:void(0);"><?php echo e(__('Admin')); ?></a>
				<i class="breadcrumb-icon icon-base ti tabler-chevron-right align-middle icon-xs"></i>
			</li>
			<li class="breadcrumb-item active"><?php echo e(__('Payment Gateways')); ?></li>
		</ol>
	</nav>
<form action="<?php echo e(route('admin.payments.update')); ?>" method="POST">
    <div class="card shadow-sm border-0 mb-4">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h5 class="card-title mb-0">
				<?php echo e(__('Payment Gateways')); ?>

			</h5>
			<div>
				<button type="submit" class="btn btn-sm btn-primary">
                        <i class="ti tabler-device-floppy me-1"></i> <?php echo e(__('Save Changes')); ?>

                </button>
			</div>
		</div>
	</div>
        <div class="card-body">
                <?php echo csrf_field(); ?>
                <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card border shadow-sm mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0"><?php echo e(ucfirst($gateway['name'])); ?></h6>
                            <i class="ti tabler-wallet"></i>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <?php $__currentLoopData = $gateway['config']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($key != 'html'): ?>
                                        <div class="col-md-6">
                                            <label for="<?php echo e($key); ?>" class="form-label fw-semibold"><?php echo e(str_replace('_', ' ', ucfirst($key))); ?></label>
                                            <?php if($key == 'status'): ?>
                                                <select name="gateway[<?php echo e($gateway['name']); ?>][<?php echo e($key); ?>]" class="form-select">
                                                    <option value="disable">Disable</option>
                                                    <option value="enable" <?php if($option == 'enable'): ?> selected <?php endif; ?>>Enable</option>
                                                </select>
                                            <?php elseif($key == 'is_production'): ?>
                                                <select name="gateway[<?php echo e($gateway['name']); ?>][<?php echo e($key); ?>]" class="form-select">
                                                    <option value="false">No</option>
                                                    <option value="true" <?php if($option == 'true'): ?> selected <?php endif; ?>>Yes</option>
                                                </select>
                                            <?php else: ?>
                                                <input name="gateway[<?php echo e($gateway['name']); ?>][<?php echo e($key); ?>]" id="<?php echo e($key); ?>" class="form-control" value="<?php echo e($option); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    <?php else: ?>
                                        <div class="col-md-12">
                                            <label for="<?php echo e($key); ?>" class="form-label fw-semibold"><?php echo e(str_replace('_', ' ', ucfirst($key))); ?></label>
                                            <div id="editor-container" style="height: 200px; background: white;"><?php echo base64_decode($option); ?></div>
                                            <input type="hidden" id="htmlcrypt" name="gateway[<?php echo e($gateway['name']); ?>][<?php echo e($key); ?>]">
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
</form>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var quill = new Quill('#editor-container', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'underline', 'strike'],
                        ['blockquote', 'code-block'],
                        [{ 'header': 1 }, { 'header': 2 }],
                        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                        [{ 'indent': '-1'}, { 'indent': '+1' }],
                        [{ 'direction': 'rtl' }],
                        [{ 'size': ['small', false, 'large', 'huge'] }],
                        [{ 'color': [] }, { 'background': [] }],
                        [{ 'align': [] }],
                        ['link'],
                        ['clean']
                    ]
                }
            });

            document.querySelector('form[action="<?php echo e(route('admin.payments.update')); ?>"]').addEventListener('submit', function () {
                document.getElementById('htmlcrypt').value = quill.root.innerHTML;
            });
        });
    </script>
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
<?php /**PATH E:\projects\mpwa-magd-v10.0.0\resources\themes/vuexy/views/pages/admin/payments/index.blade.php ENDPATH**/ ?>