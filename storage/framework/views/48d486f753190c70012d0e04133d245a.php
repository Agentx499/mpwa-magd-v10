<?php if (isset($component)) { $__componentOriginald819fa024fa6d382567c72bcf8897f25 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald819fa024fa6d382567c72bcf8897f25 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'theme::components.layout-dashboard','data' => ['title' => ''.e(__('Manage Tickets')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Manage Tickets')).'']); ?>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb breadcrumb-custom-icon">
			<li class="breadcrumb-item">
				<a href="javascript:void(0);"><?php echo e(__('Admin')); ?></a>
				<i class="breadcrumb-icon icon-base ti tabler-chevron-right align-middle icon-xs"></i>
			</li>
			<li class="breadcrumb-item active"><?php echo e(__('Manage Tickets')); ?></li>
		</ol>
	</nav>

    <div class="card mb-6">
        <div class="card-widget-separator-wrapper">
            <div class="card-body card-widget-separator">
                <div class="row gy-4 gy-sm-1">
                    <div class="col-sm-6 col-lg-4">
                        <div class="d-flex justify-content-between align-items-center card-widget-1 border-end pb-4 pb-sm-0">
                            <div>
                                <h4 class="mb-0"><?php echo e($tickets->total()); ?></h4>
                                <p class="mb-0"><?php echo e(__('Total Tickets')); ?></p>
                            </div>
                            <div class="avatar me-sm-6">
                                <span class="avatar-initial rounded bg-label-secondary text-heading">
                                    <i class="icon-base ti tabler-ticket icon-26px"></i>
                                </span>
                            </div>
                        </div>
                        <hr class="d-none d-sm-block d-lg-none me-6" />
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="d-flex justify-content-between align-items-center card-widget-2 border-end pb-4 pb-sm-0">
                            <div>
                                <h4 class="mb-0"><?php echo e($tickets->where('status', 'open')->count()); ?></h4>
                                <p class="mb-0"><?php echo e(__('Open Tickets')); ?></p>
                            </div>
                            <div class="avatar me-lg-6">
                                <span class="avatar-initial rounded bg-label-secondary text-heading">
                                    <i class="icon-base ti tabler-lock-open-2 icon-26px"></i>
                                </span>
                            </div>
                        </div>
                        <hr class="d-none d-sm-block d-lg-none" />
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="mb-0"><?php echo e($tickets->where('status', 'closed')->count()); ?></h4>
                                <p class="mb-0"><?php echo e(__('Closed Tickets')); ?></p>
                            </div>
                            <div class="avatar">
                                <span class="avatar-initial rounded bg-label-secondary text-heading">
                                    <i class="icon-base ti tabler-check icon-26px"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-header">
            <h5 class="card-title mb-0"><?php echo e(__('All Tickets')); ?></h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th><?php echo e(__('ID')); ?></th>
                            <th><?php echo e(__('User')); ?></th>
                            <th><?php echo e(__('Title')); ?></th>
                            <th><?php echo e(__('Status')); ?></th>
                            <th><?php echo e(__('Priority')); ?></th>
                            <th><?php echo e(__('Last Update')); ?></th>
                            <th><?php echo e(__('Created')); ?></th>
                            <th><?php echo e(__('Action')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td>#<?php echo e($ticket->id); ?></td>
                                <td><?php echo e($ticket->user->username ?? __('Deleted')); ?></td>
                                <td><?php echo e($ticket->title); ?></td>
                                <td>
                                    <span class="badge bg-<?php echo e($ticket->status === 'open' ? 'success' : 'secondary'); ?>-subtle text-<?php echo e($ticket->status === 'open' ? 'success' : 'secondary'); ?>">
                                        <?php echo e(__(ucfirst($ticket->status))); ?>

                                    </span>
                                </td>
                                <td>
                                    <span class="badge bg-<?php echo e($ticket->priority === 'high' ? 'danger' : 
                                        ($ticket->priority === 'medium' ? 'warning' : 'info')); ?>-subtle text-<?php echo e($ticket->priority === 'high' ? 'danger' : 
                                        ($ticket->priority === 'medium' ? 'warning' : 'info')); ?>">
                                        <?php echo e(__(ucfirst($ticket->priority))); ?>

                                    </span>
                                </td>
                                <td><?php echo e($ticket->updated_at->format('Y-m-d H:i')); ?></td>
                                <td><?php echo e($ticket->created_at->format('Y-m-d H:i')); ?></td>
                                <td>
                                    <a href="<?php echo e(route('admin.tickets.show', $ticket)); ?>" class="btn btn-sm btn-outline-primary">
                                        <i class="ti tabler-eye"></i> <?php echo e(__('View')); ?>

                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="8" class="text-center text-muted"><?php echo e(__('No tickets found')); ?></td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                <?php echo e($tickets->links()); ?>

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
<?php /**PATH E:\projects\mpwa-magd-v10.0.0\resources\themes/vuexy/views/pages/admin/tickets/index.blade.php ENDPATH**/ ?>