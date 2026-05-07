<x-layout-dashboard title="{{ __('Payment Gateways') }}">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

    <nav aria-label="breadcrumb">
		<ol class="breadcrumb breadcrumb-custom-icon">
			<li class="breadcrumb-item">
				<a href="javascript:void(0);">{{__('Admin')}}</a>
				<i class="breadcrumb-icon icon-base ti tabler-chevron-right align-middle icon-xs"></i>
			</li>
			<li class="breadcrumb-item active">{{__('Payment Gateways')}}</li>
		</ol>
	</nav>
<form action="{{ route('admin.payments.update') }}" method="POST">
    <div class="card shadow-sm border-0 mb-4">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h5 class="card-title mb-0">
				{{ __('Payment Gateways') }}
			</h5>
			<div>
				<button type="submit" class="btn btn-sm btn-primary">
                        <i class="ti tabler-device-floppy me-1"></i> {{ __('Save Changes') }}
                </button>
			</div>
		</div>
	</div>
        <div class="card-body">
                @csrf
                @foreach ($gateways as $gateway)
                    <div class="card border shadow-sm mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">{{ ucfirst($gateway['name']) }}</h6>
                            <i class="ti tabler-wallet"></i>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                @foreach ($gateway['config'] as $key => $option)
                                    @if ($key != 'html')
                                        <div class="col-md-6">
                                            <label for="{{$key}}" class="form-label fw-semibold">{{ str_replace('_', ' ', ucfirst($key)) }}</label>
                                            @if ($key == 'status')
                                                <select name="gateway[{{$gateway['name']}}][{{$key}}]" class="form-select">
                                                    <option value="disable">Disable</option>
                                                    <option value="enable" @if($option == 'enable') selected @endif>Enable</option>
                                                </select>
                                            @elseif ($key == 'is_production')
                                                <select name="gateway[{{$gateway['name']}}][{{$key}}]" class="form-select">
                                                    <option value="false">No</option>
                                                    <option value="true" @if($option == 'true') selected @endif>Yes</option>
                                                </select>
                                            @else
                                                <input name="gateway[{{$gateway['name']}}][{{$key}}]" id="{{$key}}" class="form-control" value="{{$option}}" />
                                            @endif
                                        </div>
                                    @else
                                        <div class="col-md-12">
                                            <label for="{{$key}}" class="form-label fw-semibold">{{ str_replace('_', ' ', ucfirst($key)) }}</label>
                                            <div id="editor-container" style="height: 200px; background: white;">{!! base64_decode($option) !!}</div>
                                            <input type="hidden" id="htmlcrypt" name="gateway[{{$gateway['name']}}][{{$key}}]">
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach

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

            document.querySelector('form[action="{{ route('admin.payments.update') }}"]').addEventListener('submit', function () {
                document.getElementById('htmlcrypt').value = quill.root.innerHTML;
            });
        });
    </script>
</x-layout-dashboard>
