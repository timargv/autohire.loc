@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if (session('success'))
    <div class="toast border-0 shadow-sm" role="alert" aria-live="polite" aria-atomic="true" data-delay="3000">
        <div class="toast-body alert-success"  role="alert" aria-live="assertive" aria-atomic="true">
            {{ session('success') }}
        </div>
    </div>
@endif

@if (session('error'))
    <div class="toast border-0 shadow-sm" role="alert" aria-live="polite" aria-atomic="true" data-delay="3000">
        <div class="toast-body alert-danger"  role="alert" aria-live="assertive" aria-atomic="true">
            {{ session('error') }}
        </div>
    </div>
@endif

@if (session('info'))
    <div class="toast border-0 shadow-sm" role="alert" aria-live="polite" aria-atomic="true" data-delay="3000">
        <div class="toast-body alert-info"  role="alert" aria-live="assertive" aria-atomic="true">
            {{ session('info') }}
        </div>
    </div>
@endif

@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="toast border-0 shadow-sm" role="alert" aria-live="polite" aria-atomic="true" data-delay="10000">
            <div class="toast-body alert-danger"  role="alert" aria-live="assertive" aria-atomic="true">
                {{ $error }}
            </div>
        </div>
    @endforeach
@endif