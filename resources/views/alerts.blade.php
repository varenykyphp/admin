<div class="container">
    @if (session('success'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <strong>{{ __('varenyky::labels.success') }}!</strong> {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <strong>{{ __('varenyky::labels.error') }}!</strong> {{ session('error') }}
        </div>
    @endif

    @if ($errors->all())
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
