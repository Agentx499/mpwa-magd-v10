<?php if (isset($component)) { $__componentOriginald819fa024fa6d382567c72bcf8897f25 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald819fa024fa6d382567c72bcf8897f25 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'theme::components.layout-dashboard','data' => ['title' => ''.e(__('Scan')).' '.e($number->body).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Scan')).' '.e($number->body).'']); ?>
<style>
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.spin {
  animation: spin 1s linear infinite;
}
</style>
  <div class="card mb-4">
    <div class="card-header py-4 d-flex flex-wrap justify-content-between align-items-center gap-2">
      <h5 class="card-title mb-0">
        <?php echo e(__('Whatsapp Account :number', ['number' => $number->body])); ?>

      </h5>
	  <div class="buttonup">
      <?php if($number->status != 'Connected'): ?>
        <button class="btn btn-sm btn-label-danger" disabled>
          <i class="ti tabler-clock me-1"></i>
          <?php echo e(__('Disconnected')); ?>

        </button>
	  <?php else: ?>
		<button class="btn btn-sm btn-label-success" disabled>
          <i class="ti tabler-clock me-1"></i>
          <?php echo e(__('Connencted')); ?>

        </button>
      <?php endif; ?>
	  </div>
    </div>
  </div>

  <div class="alert alert-info d-flex align-items-center shadow-sm">
    <i class="ti tabler-info-circle me-2 fs-4"></i>
    <div><?php echo e(__('Dont leave your phone before connencted')); ?></div>
  </div>

  <div class="row g-4">
    <div class="col-xl-8">
      <div class="card h-100 border shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0"><?php echo e(__('Connection Status')); ?></h5>
          <div class="logoutbutton"></div>
        </div>
        <div class="card-body d-flex flex-column align-items-center justify-content-center gap-3">
          <div class="imageee text-center">
            <?php if(Auth::user()->is_expired_subscription): ?>
              <i class="ti tabler-ban fs-1 text-danger"></i>
            <?php else: ?>
              <i class="ti tabler-loader-2 fs-1 text-warning spin"></i>
            <?php endif; ?>
          </div>
          <div class="statusss text-center">
            <?php if(Auth::user()->is_expired_subscription): ?>
              <span class="badge bg-danger fs-6 py-2 px-3"><?php echo e(__('Your subscription is expired. Please renew your subscription.')); ?></span>
            <?php else: ?>
              <span class="badge bg-primary fs-6 py-2 px-3">
                <i class="ti tabler-loader me-1"></i>
                <?php echo e(__('Witing For node server..')); ?>

              </span>
            <?php endif; ?>
          </div>
        </div>
        <div class="card-footer bg-light">
          <pre id="logOutput" class="text-muted small m-0 mt-3" style="height: 100px; overflow-y: auto;"><?php echo e(__('Waiting for logs...')); ?></pre>
        </div>
      </div>
    </div>

    <div class="col-xl-4">
      <div class="card h-100 border shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0"><?php echo e(__('Whatsapp Info')); ?></h5>
          <span class="badge bg-label-info"><?php echo e(__('Updated 5 min ago')); ?></span>
        </div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex align-items-center">
              <i class="ti tabler-user me-2 text-secondary"></i>
              <span class="name"><?php echo e(__('Name :')); ?></span>
            </li>
            <li class="list-group-item d-flex align-items-center">
              <i class="ti tabler-device-mobile me-2 text-secondary"></i>
              <span class="device"><?php echo e(__('Number :')); ?></span>
            </li>
          </ul>
        </div>
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

<script src="https://cdn.socket.io/4.8.1/socket.io.min.js" crossorigin="anonymous"></script>
<script>
  const isExpired = '<?php echo e(Auth::user()->is_expired_subscription); ?>';
  if (!isExpired) {
    let socket;
    let device = '<?php echo e($number->body); ?>';
    if ('<?php echo e(env('TYPE_SERVER')); ?>' === 'hosting') {
      socket = io();
    } else {
      socket = io('<?php echo e(env("WA_URL_SERVER")); ?>', {
        transports: ['websocket', 'polling', 'flashsocket']
      });
    }

    if(socket.emit('StartConnection', device)){
		appendLog('<?php echo e(__("Start Connection.")); ?>');
	}

    socket.on('qrcode', function(response) {
      if (response.token === device) {
        let url = response.data;
        document.querySelector('.imageee').innerHTML = '<img src="' + url + '" height="300" alt="QR">';
        document.querySelector('.statusss').innerHTML = '<button class="btn btn-sm btn-warning" type="button" disabled>' + response.message + '</button>';
        appendLog('QR code received.');
      }
    });

    socket.on('connection-open', function(response) {
      if (response.token === device) {
        document.querySelector('.name').innerHTML = '<?php echo e(__('Name :')); ?> ' + response.user.name;
        document.querySelector('.device').innerHTML = '<?php echo e(__('Device :')); ?> ' + response.token;
        document.querySelector('.imageee').innerHTML = '<img src="' + response.ppUrl + '" height="300" alt="Profile">';
        document.querySelector('.buttonup').innerHTML = '<button class="btn btn-sm btn-label-success" id="buttonup" disabled> <i class="ti tabler-clock me-1"></i> <?php echo e(__('Connencted')); ?> </button>';
		document.querySelector('.statusss').innerHTML = '<button class="btn btn-sm btn-success" type="button" disabled><?php echo e(__('Connected')); ?></button>';
        document.querySelector('.logoutbutton').innerHTML = '<button class="btn btn-sm bg-danger-subtle text-danger" onclick="logout(' + device + ')"><?php echo e(__('Logout')); ?></button>';
        appendLog('Device connected.');
      }
    });

    socket.on('Unauthorized', function(response) {
      if (response.token === device) {
        document.querySelector('.statusss').innerHTML = '<button class="btn btn-sm btn-danger" type="button" disabled><?php echo e(__('Unauthorized')); ?></button>';
        appendLog('Unauthorized access.');
      }
    });

    socket.on('message', function(response) {
      if (response.token === device) {
        document.querySelector('.statusss').innerHTML = '<button class="btn btn-sm btn-success" type="button" disabled>' + response.message + '</button>';
        appendLog(response.message);

        if (response.message.includes('Connection closed')) {
          let count = 5;
          let interval = setInterval(function() {
            if (count === 0) {
              clearInterval(interval);
              location.reload();
            }
            document.querySelector('.statusss').innerHTML =
              '<button class="btn btn-success" type="button" disabled>' +
              response.message + ' <?php echo e(__('in')); ?> ' + count + ' <?php echo e(__('second')); ?>' +
              '</button>';
            count--;
          }, 1000);
        }
      }
    });

    function logout(device) {
	  document.querySelector('.logoutbutton').innerHTML = '<button class="btn btn-sm bg-danger-subtle text-danger" onclick="logout(' + device + ')" disabled><?php echo e(__('Logout')); ?></button>';
      socket.emit('LogoutDevice', device);
      appendLog('Logout triggered.');
    }

    function appendLog(text) {
      let output = document.getElementById('logOutput');
      output.textContent += '\n' + new Date().toLocaleTimeString() + ' - ' + text;
      output.scrollTop = output.scrollHeight;
    }
  }
</script>
<?php /**PATH E:\projects\mpwa-magd-v10.0.0\resources\themes/vuexy/views/scan.blade.php ENDPATH**/ ?>