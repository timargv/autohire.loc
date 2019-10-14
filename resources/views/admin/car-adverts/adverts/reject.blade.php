@extends('layouts.app')

@section('content')

    <div class="card border-0 shadow-sm w-md-75 w-100">
        <div class="card-header border-0">
            <div for="reason" class="h4 font-weight-light pt-2">{{ __('title.Reason') }}</div>
        </div>
        <div class="card-body">
            <form method="POST" action="?">
                @csrf

                <div class="form-group">
                    <textarea id="reason" class="form-control{{ $errors->has('reason') ? ' is-invalid' : '' }}" name="reason" rows="5" placeholder="{{ __('Напишите причина отклонения') }}" required>{{ old('reason', $carAdvert->reject_reason) }}</textarea>
                    @if ($errors->has('reason'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('reason') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{ __('button.Reject') }}</button>
                </div>
            </form>
        </div>
    </div>

@endsection
