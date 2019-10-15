@extends('layouts.app')

@section('content')
    @include('cabinet.profile._nav', ['page' => 'tickets'])

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('cabinet.tickets.store') }}">
                @csrf

                <div class="form-group">
                    <label for="subject" class="col-form-label">{{ __('fillable.Subject') }}</label>
                    <input id="subject" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" value="{{ old('subject') }}" required>
                    @if ($errors->has('subject'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('subject') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="content" class="col-form-label">{{ __('fillable.Message') }}</label>
                    <textarea id="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content" rows="10" required>{{ old('content') }}</textarea>
                    @if ($errors->has('content'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('content') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn bg-siran text-white"><i class="fad fa-paper-plane"></i> {{ __('button.SendMessage') }}</button>
                </div>
            </form>
        </div>
    </div>

@endsection
