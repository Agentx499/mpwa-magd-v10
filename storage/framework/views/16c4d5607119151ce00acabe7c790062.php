<?php if (isset($component)) { $__componentOriginald15a047437633666527fa2baf930ea39 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald15a047437633666527fa2baf930ea39 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'theme::components.layout-auth','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout-auth'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php $__env->slot('title', __("Installation")); ?>

<style>
    .glass-header {
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.85);
        border-bottom: 1px solid #e0e0e0;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
        position: sticky;
        top: 0;
        z-index: 100;
    }
    .step-icon {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
        background: linear-gradient(135deg, #7367F0, #A16EFF);
        color: white;
        transition: transform 0.3s ease;
    }
    .step-icon:hover {
        transform: scale(1.1);
    }
    .step.active .step-icon {
        box-shadow: 0 0 0 4px rgba(115, 103, 240, 0.2);
    }
    .step-transition {
        transition: opacity 0.4s ease, transform 0.4s ease;
    }
    .step-transition.d-none {
        opacity: 0;
        transform: translateY(10px);
    }
    .card.install-card {
        background: #fff;
        border-radius: 1rem;
        border: 1px solid #dee2e6;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
    }
    input.is-invalid {
        border-color: #dc3545 !important;
    }
    #intro-screen {
        position: fixed;
        inset: 0;
        background: #fff;
        z-index: 9999;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 2rem;
        animation: fadeIn 1s ease forwards;
    }
    #intro-screen h1 {
        font-size: 2.4rem;
        color: #7367F0;
        margin-bottom: 1rem;
        animation: slideDown 1s ease forwards;
    }
    #intro-screen p {
        font-size: 1.2rem;
        color: #6c757d;
        animation: fadeIn 1.5s ease forwards;
    }
    #intro-screen button {
        margin-top: 2rem;
        animation: fadeIn 2s ease forwards;
    }
    @keyframes slideDown {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
</style>

<div id="intro-screen">
    <h1><?php echo e(__('Welcome to')); ?></h1><div class="text-center" style="width: 250px;"><?php if (isset($component)) { $__componentOriginal987d96ec78ed1cf75b349e2e5981978f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'theme::components.logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal987d96ec78ed1cf75b349e2e5981978f)): ?>
<?php $attributes = $__attributesOriginal987d96ec78ed1cf75b349e2e5981978f; ?>
<?php unset($__attributesOriginal987d96ec78ed1cf75b349e2e5981978f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal987d96ec78ed1cf75b349e2e5981978f)): ?>
<?php $component = $__componentOriginal987d96ec78ed1cf75b349e2e5981978f; ?>
<?php unset($__componentOriginal987d96ec78ed1cf75b349e2e5981978f); ?>
<?php endif; ?></div>
    <p><?php echo e(__('The powerful open-source platform to send and manage WhatsApp messages.')); ?></p>
    <button class="btn btn-primary px-4 py-2" onclick="hideIntro()"><?php echo e(__('Get Started')); ?></button>
</div>

<script>
    function hideIntro() {
        const intro = document.getElementById('intro-screen');
        intro.style.opacity = '0';
        intro.style.transform = 'scale(1.02)';
        setTimeout(() => intro.remove(), 600);
    }
</script>

<div class="container py-2 d-flex justify-content-center align-items-center min-vh-100" style="border-radius: 1rem;">
    <div class="card install-card w-100" style="max-width: 800px">
        <div class="glass-header px-4 py-3 d-flex align-items-center justify-content-between" style="border-radius: 1rem;">
            <h4 class="mb-0 text-primary">
                <i class="ti tabler-settings-cog me-2"></i> <?php echo e(__('System Installation')); ?>

            </h4>
            <span class="badge bg-gradient rounded-pill text-white px-3">MPWA v<?php echo e(config('app.version')); ?></span>
        </div>

        <div class="card-body p-5">
            <div class="mb-5">
			<div class="row text-center">
				<div class="col step" data-step="1">
					<div class="step-icon mx-auto"><i class="ti tabler-checklist"></i></div>
					<small class="d-block mt-2"><?php echo e(__('Requirements')); ?></small>
				</div>
				<div class="col step" data-step="2">
					<div class="step-icon mx-auto"><i class="ti tabler-key"></i></div>
					<small class="d-block mt-2"><?php echo e(__('License')); ?></small>
				</div>
				<div class="col step" data-step="3">
					<div class="step-icon mx-auto"><i class="ti tabler-database"></i></div>
					<small class="d-block mt-2"><?php echo e(__('Database')); ?></small>
				</div>
				<div class="col step" data-step="4">
					<div class="step-icon mx-auto"><i class="ti tabler-user-shield"></i></div>
					<small class="d-block mt-2"><?php echo e(__('Admin')); ?></small>
				</div>
				<div class="col step" data-step="5">
					<div class="step-icon mx-auto"><i class="ti tabler-settings-cog"></i></div>
					<small class="d-block mt-2"><?php echo e(__('Server')); ?></small>
				</div>
			</div>
		</div>

            <form method="POST" action="<?php echo e(route('settings.install_app')); ?>" id="installForm">
                <?php echo csrf_field(); ?>
                <div class="step-content step-transition step-1">
                    <h5 class="text-muted mb-3"><?php echo e(__('Checking Requirements')); ?></h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between">
                            PHP >= <?php echo e($requirements['php']['version']); ?>

                            <span class="badge bg-<?php echo e($requirements['php']['version'] <= $requirements['php']['current'] ? 'success' : 'danger'); ?>">
                                <?php echo e($requirements['php']['current']); ?>

                            </span>
                        </li>
                        <?php $__currentLoopData = $requirements['php_extensions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $enabled): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item d-flex justify-content-between">
                                <?php echo e(ucfirst($name)); ?>

                                <i class="ti <?php echo e($enabled ? 'tabler-circle-check text-success' : 'tabler-circle-x text-danger'); ?>"></i>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

                <div class="step-content step-transition d-none step-2">
                    <h5 class="text-muted mb-3"><?php echo e(__('License Validation')); ?></h5>
                    <input type="hidden" name="licensekey" value="MagdAlmuntaser">
                    <input type="hidden" name="buyeremail" value="admin@admin.com">
                    <div class="alert alert-light border text-center text-light">
                        <strong>Developed by Magd Almuntaser</strong><br>www.OneXGen.com
                    </div>
                </div>

                <div class="step-content step-transition d-none step-3">
                    <h5 class="text-muted mb-3"><?php echo e(__('Database Configuration')); ?></h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label"><?php echo e(__('Host')); ?></label>
                            <input type="text" name="database[host]" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><?php echo e(__('Database')); ?></label>
                            <input type="text" name="database[database]" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><?php echo e(__('Username')); ?></label>
                            <input type="text" name="database[username]" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><?php echo e(__('Password')); ?></label>
                            <input type="text" name="database[password]" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="step-content step-transition d-none step-4">
                    <h5 class="text-muted mb-3"><?php echo e(__('Admin Account')); ?></h5>
                    <div class="mb-3">
                        <label><?php echo e(__('Username')); ?></label>
                        <input type="text" name="admin[username]" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label><?php echo e(__('Email')); ?></label>
                        <input type="email" name="admin[email]" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label><?php echo e(__('Password')); ?></label>
                        <input type="text" name="admin[password]" class="form-control" required>
                    </div>
                </div>
				
				<div class="step-content step-transition d-none step-5">
					<h5 class="text-muted mb-3"><?php echo e(__('Server Configuration')); ?></h5>

					<div class="row g-3">
						<div class="col-md-6">
							<label for="typeServer" class="form-label"><?php echo e(__('Server Type')); ?></label>
							<select name="typeServer" id="typeServer" class="form-select" required>
								<option value="localhost"><?php echo e(__('Localhost')); ?></option>
								<option value="hosting" selected><?php echo e(__('Hosting Shared')); ?></option>
								<option value="other"><?php echo e(__('Other')); ?></option>
							</select>
						</div>
						<div class="col-md-6">
							<label for="portnode" class="form-label"><?php echo e(__('Port Node JS')); ?></label>
							<input type="number" name="portnode" id="portnode" class="form-control" value="3100" required>
						</div>
					</div>

					<div class="row g-3 mt-2 d-none formUrlNode">
						<div class="col-md-12">
							<label class="form-label"><?php echo e(__('URL Node')); ?></label>
							<div class="input-group">
								<span class="input-group-text"><?php echo e(__('URL')); ?></span>
								<input type="text" name="urlnode" class="form-control" value="<?php echo e(preg_replace('/:\d+$/', '', request()->getSchemeAndHttpHost())); ?>">
							</div>
						</div>
					</div>
				</div>

                <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-outline-secondary" id="prevBtn"><i class="ti tabler-arrow-left me-1"></i><?php echo e(__('Back')); ?></button>
                    <button type="button" class="btn btn-primary" id="nextBtn"><?php echo e(__('Next')); ?> <i class="ti tabler-arrow-right ms-1"></i></button>
                    <button type="submit" class="btn btn-success d-none" id="submitBtn"><i class="ti tabler-player-play me-1"></i><?php echo e(__('Install')); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<link rel="stylesheet" href="<?php echo e(asset('vendor/libs/notyf/notyf.css')); ?>" />
<script src="<?php echo e(asset('vendor/libs/notyf/notyf.js')); ?>"></script>
<script>
    let currentStep = 1;
    const totalSteps = 5;
	
	var notyf = new Notyf({duration: 3000,position: {x: 'right',y: 'top',}});
	
	function isStep1Valid() {
		const failedVersion = document.querySelector('.step-1 .badge.bg-danger');
		const failedExtensions = document.querySelectorAll('.step-1 .tabler-circle-x');
		return !failedVersion && failedExtensions.length === 0;
	}

    function updateUI() {
		document.querySelectorAll('.step-content').forEach(el => el.classList.add('d-none'));
		document.querySelector('.step-' + currentStep).classList.remove('d-none');
		document.querySelectorAll('.step').forEach(s => s.classList.remove('active'));
		document.querySelector('.step[data-step="' + currentStep + '"]').classList.add('active');
		document.getElementById('prevBtn').disabled = currentStep === 1;
		const nextBtn = document.getElementById('nextBtn');
		nextBtn.classList.toggle('d-none', currentStep === totalSteps);
		document.getElementById('submitBtn').classList.toggle('d-none', currentStep !== totalSteps);

		if (currentStep === 1 && !isStep1Valid()) {
			nextBtn.disabled = true;
		} else {
			nextBtn.disabled = false;
		}
	}
	
        const serverSelect = document.querySelector('#typeServer');
        const portInput = document.querySelector('#portnode');
        const formUrlNode = document.querySelector('.formUrlNode');
        const urlInput = document.querySelector('input[name="urlnode"]');

        function autoSetPortAndToggleURL(value) {
            if (value === 'other') {
                formUrlNode.classList.remove('d-none');
                portInput.value = isCloudflare() ? 8443 : 3100;
            } else {
                formUrlNode.classList.add('d-none');
                portInput.value = (value === 'localhost' || value === 'hosting') ? 3100 : '';
            }
        }

        function isCloudflare() {
            return '<?php echo e(request()->header("CF-Connecting-IP")); ?>' !== '';
        }

        serverSelect.addEventListener('change', function () {
            autoSetPortAndToggleURL(this.value);
        });

        autoSetPortAndToggleURL(serverSelect.value);


    document.getElementById('nextBtn').onclick = () => {
		const currentStepEl = document.querySelector('.step-' + currentStep);
		const inputs = currentStepEl.querySelectorAll('input[required]');
		let valid = true;

		inputs.forEach(input => {
			if (!input.value.trim()) {
				input.classList.add('is-invalid');
				valid = false;
			} else {
				input.classList.remove('is-invalid');
			}
		});

		if (currentStep === 1 && !isStep1Valid()) {
			notyf.error('<?php echo e(__("Some server requirements are not met")); ?>');
			return;
		}

		if (!valid) {
			notyf.error('<?php echo e(__("Please fill all required fields")); ?>');
			return;
		}

		if (currentStep === 3) {
			const formData = new FormData(document.getElementById('installForm'));
			const connectUrl = '<?php echo e(route("connectDB")); ?>'.replace(/^http:/, location.protocol);

			document.getElementById('nextBtn').disabled = true;
			document.getElementById('nextBtn').innerText = '<?php echo e(__("Testing...")); ?>';

			fetch(connectUrl, {
				method: 'POST',
				headers: { 'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' },
				body: formData
			})
			.then(res => res.json())
			.then(data => {
				if (!data.error) {
					currentStep++;
					updateUI();
					notyf.success('<?php echo e(__("Success")); ?>');
				} else {
					notyf.error(data.status);
				}
			})
			.catch(() => notyf.error('<?php echo e(__("Connection failed")); ?>'))
			.finally(() => {
				document.getElementById('nextBtn').disabled = false;
				document.getElementById('nextBtn').innerHTML = '<?php echo e(__("Next")); ?> <i class="ti tabler-arrow-right ms-1"></i>';
			});
		} else {
			if (currentStep < totalSteps) currentStep++;
			updateUI();
		}
	};

    document.getElementById('prevBtn').onclick = () => { if (currentStep > 1) currentStep--; updateUI(); };

    function testDB(button) {
        button.disabled = true;
        button.innerText = '<?php echo e(__("Testing...")); ?>';
        const formData = new FormData(document.getElementById('installForm'));
		const connectUrl = '<?php echo e(route("connectDB")); ?>'.replace(/^http:/, location.protocol);

        fetch(connectUrl, {
            method: 'POST',
            headers: { 'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' },
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (!data.error) {
				notyf.success('<?php echo e(__("Success")); ?>');
                currentStep = 4;
                updateUI();
            }else{
				notyf.error(data.status);
			}
        })
        .catch(() => notyf.error('<?php echo e(__("Connection failed")); ?>'))
        .finally(() => {
            button.disabled = false;
            button.innerText = '<?php echo e(__("Test connection")); ?>';
        });
    }

    updateUI();
	autoSetPortAndToggleURL(serverSelect.value);
</script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald15a047437633666527fa2baf930ea39)): ?>
<?php $attributes = $__attributesOriginald15a047437633666527fa2baf930ea39; ?>
<?php unset($__attributesOriginald15a047437633666527fa2baf930ea39); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald15a047437633666527fa2baf930ea39)): ?>
<?php $component = $__componentOriginald15a047437633666527fa2baf930ea39; ?>
<?php unset($__componentOriginald15a047437633666527fa2baf930ea39); ?>
<?php endif; ?>
<?php /**PATH E:\projects\mpwa-magd-v10.0.0\resources\themes/vuexy/views/install.blade.php ENDPATH**/ ?>