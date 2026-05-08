<?php if (isset($component)) { $__componentOriginald819fa024fa6d382567c72bcf8897f25 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald819fa024fa6d382567c72bcf8897f25 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'theme::components.layout-dashboard','data' => ['title' => ''.e(__('Orders')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Orders')).'']); ?>
	<!--breadcrumb-->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb breadcrumb-custom-icon">
			<li class="breadcrumb-item">
				<a href="javascript:void(0);"><?php echo e(__('Admin')); ?></a>
				<i class="breadcrumb-icon icon-base ti tabler-chevron-right align-middle icon-xs"></i>
			</li>
			<li class="breadcrumb-item active"><?php echo e(__('Orders')); ?></li>
		</ol>
	</nav>
	<!--end breadcrumb-->
	<?php if(session()->has('alert')): ?>
        <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'theme::components.alert','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php $__env->slot('type', session('alert')['type']); ?>
            <?php $__env->slot('msg', session('alert')['msg']); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $attributes = $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $component = $__componentOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
    <?php endif; ?>
    <?php if($errors->any()): ?>
		<div class="alert alert-danger alert-dismissible" role="alert">
			<h4 class="alert-heading d-flex align-items-center">
				<span class="alert-icon rounded">
					<i class="icon-base ti tabler-face-id-error icon-md"></i>
				</span>
				<?php echo e(__('Oh Error :(')); ?>

			</h4>
			<hr>
			<p class="mb-0">
				<p><?php echo e(__('The given data was invalid.')); ?></p>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
			</p>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
    <?php endif; ?>
<div class="card mb-6">
        <div class="card-widget-separator-wrapper">
            <div class="card-body card-widget-separator">
                <div class="row gy-4 gy-sm-1">
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-center border-end pb-4 pb-sm-0">
                            <div>
                                <h4 class="mb-0"><?php echo e($stats['total']); ?></h4>
                                <p class="mb-0"><?php echo e(__('Total Orders')); ?></p>
                            </div>
                            <div class="avatar me-sm-6">
                                <span class="avatar-initial rounded bg-label-secondary text-heading">
                                    <i class="icon-base ti tabler-shopping-cart icon-26px"></i>
                                </span>
                            </div>
                        </div>
                        <hr class="d-none d-sm-block d-lg-none me-6" />
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-center border-end pb-4 pb-sm-0">
                            <div>
                                <h4 class="mb-0"><?php echo e($stats['completed']); ?></h4>
                                <p class="mb-0"><?php echo e(__('Completed')); ?></p>
                            </div>
                            <div class="avatar me-lg-6">
                                <span class="avatar-initial rounded bg-label-success text-heading">
                                    <i class="icon-base ti tabler-check icon-26px"></i>
                                </span>
                            </div>
                        </div>
                        <hr class="d-none d-sm-block d-lg-none" />
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-center border-end pb-4 pb-sm-0">
                            <div>
                                <h4 class="mb-0"><?php echo e($stats['pending']); ?></h4>
                                <p class="mb-0"><?php echo e(__('Pending')); ?></p>
                            </div>
                            <div class="avatar me-sm-6">
                                <span class="avatar-initial rounded bg-label-warning text-heading">
                                    <i class="icon-base ti tabler-hourglass icon-26px"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="mb-0"><?php echo e(number_format($stats['totalAmount'])); ?></h4>
                                <p class="mb-0"><?php echo e(__('Total Paid')); ?></p>
                            </div>
                            <div class="avatar">
                                <span class="avatar-initial rounded bg-label-info text-heading">
                                    <i class="icon-base ti tabler-currency-dollar icon-26px"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5><?php echo e(__('Orders')); ?></h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
				<table class="table align-middle table-bordered table-hover">
                    <thead class="border-top">
                        <tr>
                            <th>#</th>
                            <th><?php echo e(__('User')); ?></th>
                            <th><?php echo e(__('Plan')); ?></th>
                            <th><?php echo e(__('Order ID')); ?></th>
                            <th><?php echo e(__('Amount')); ?></th>
                            <th><?php echo e(__('Gateway')); ?></th>
                            <th><?php echo e(__('Status')); ?></th>
                            <th><?php echo e(__('Created At')); ?></th>
                            <th><?php echo e(__('Action')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($order->user->username); ?></td>
                                <td><?php echo e($order->plan->title); ?></td>
                                <td><?php echo e($order->order_id); ?></td>
                                <td><?php echo e(number_format($order->amount)); ?></td>
                                <td><?php echo e(ucfirst($order->payment_gateway ?? __('Unknown'))); ?></td>
                                <td>
                                    <span class="badge bg-<?php echo e($order->status === 'completed' ? 'success' : ($order->status === 'failed' ? 'danger' : 'primary')); ?>-subtle text-<?php echo e($order->status === 'completed' ? 'success' : ($order->status === 'failed' ? 'danger' : 'primary')); ?>" id="status-<?php echo e($order->id); ?>">
                                        <?php echo e(__(ucfirst($order->status))); ?>

                                    </span>
                                </td>
                                <td dir="ltr" class="text-start"><?php echo e($order->created_at->format('Y-m-d H:i')); ?></td>
                                <td>
                                    <?php if($order->payment_gateway == 'custom'): ?>
                                        <select 
                                            class="form-select form-select-sm status-select" 
                                            name="status"
                                            data-order-id="<?php echo e($order->id); ?>">
                                            <option value="pending" class="text-primary" <?php if($order->status == 'pending'): echo 'selected'; endif; ?>><?php echo e(__('Pending')); ?></option>
                                            <option value="failed" class="text-danger" <?php if($order->status == 'failed'): echo 'selected'; endif; ?>><?php echo e(__('Failed')); ?></option>
                                            <option value="completed" class="text-success" <?php if($order->status == 'completed'): echo 'selected'; endif; ?>><?php echo e(__('Completed')); ?></option>
                                        </select>
                                    <?php else: ?>
                                        <span class="text-muted">---</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="9" class="text-center"><?php echo e(__('No orders')); ?></td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

			<div class="row mx-3 justify-content-between">
				<?php echo e($orders->links('pagination::bootstrap-5')); ?>

			</div>
        </div>
    </div>
<script>
	document.querySelectorAll('.status-select').forEach(function(select) {
		const translations = {
		pending: '<?php echo e(__("Pending")); ?>',
		failed: '<?php echo e(__("Failed")); ?>',
		completed: '<?php echo e(__("Completed")); ?>'
	};

    select.addEventListener('change', function() {
        const status = this.value;
        const orderId = this.getAttribute('data-order-id'); 
        const url = '<?php echo e(route("admin.orders.status")); ?>';

        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
            },
            body: JSON.stringify({ status, order_id: orderId })
        })
        .then(response => response.json())
        .then(data => {
			if (!data.error) {
				notyf.success(data.msg);
				const statusSpan = document.getElementById('status-' + orderId);
				statusSpan.textContent = translations[status] || status;
				statusSpan.className = 'badge';
				statusSpan.classList.remove('bg-success', 'bg-danger', 'bg-primary');

				if (status === 'completed') {
					statusSpan.classList.add('bg-success');
				} else if (status === 'failed') {
					statusSpan.classList.add('bg-danger');
				} else if (status === 'pending') {
					statusSpan.classList.add('bg-primary');
				}
			} else {
				notyf.error(data.msg);
			}
		});
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
<?php endif; ?><?php /**PATH E:\projects\mpwa-magd-v10.0.0\resources\themes/vuexy/views/pages/admin/orders/index.blade.php ENDPATH**/ ?>