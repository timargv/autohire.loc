@extends('layouts.app')

@section('content')
    @include('admin.categories._nav', ['page' => 'years'])


    <div class="card border-0 rounded-0 shadow-sm">
        <div class="card-header border-0">
            {{ __('fillable.Create') .' '.  __('fillable.Attribute')}}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.categories.car.years.update', $year) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class="col-form-label">{{ __('fillable.Title') }}</label>
                    <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $year->name) }}" required>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="slug" class="col-form-label">{{ __('fillable.Slug') }} на Русском</label>
                    <input id="slug" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" value="{{ old('slug', $year->slug) }}" required>
                    @if ($errors->has('slug'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('slug') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="status" name="status" {{ old('status', $year->status != 'off') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="status">{{ __('fillable.Status') }}</label>
                    </div>
                    @if ($errors->has('status'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('status') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{ __('button.Save') }}</button>
                </div>

            </form>
        </div>
    </div>
@endsection