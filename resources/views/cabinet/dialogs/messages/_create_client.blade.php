@extends('layouts.app')
@section('breadcrumbs', '')

@section('content')
    @include('cabinet.dialogs._nav', ['page' => 'dialogs'])

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('cabinet.dialogs.message_client.store', $carAdvert) }}">
                @csrf

                <div class="form-group">
                    <textarea class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }} " name="message" rows="3" required>{{ old('message') }}</textarea>
                    @if ($errors->has('message'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('message') }}</strong></span>
                    @endif
                </div>

                <div class="form-group mb-0">
                    <button type="submit" class="btn bg-siran text-white"><i class="fad fa-paper-plane"></i> {{ __('button.SendMessage') }}</button>
                </div>
            </form>
        </div>
    </div>

@endsection
