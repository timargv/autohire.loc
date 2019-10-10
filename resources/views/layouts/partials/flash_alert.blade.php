@if (session('status_alert'))
    <div class="alert alert-success mt-3" role="alert">
        {{ session('status_alert') }}
    </div>
@endif

@if (session('danger_alert'))
    <div class="alert alert-danger mt-3" role="alert">
        {{ session('danger_alert') }}
    </div>
@endif

@if (session('success_alert'))
    <div class="alert alert-success mt-3" role="alert">
        {{ session('success_alert') }}
    </div>
@endif

@if (session('error_alert'))
    <div class="alert alert-danger mt-3" role="alert">
        {{ session('error_alert') }}
    </div>
@endif

@if (session('info_alert'))
    <div class="alert alert-info mt-3" role="alert">
        {{ session('info_alert') }}
    </div>
@endif
