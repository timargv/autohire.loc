@extends('layouts.app')

@section('content')
    @include('admin.categories._nav', ['page' => 'attributes'])


    <div class="card border-0 rounded-0 shadow-sm">
        <div class="card-header border-0">
            {{ __('fillable.Create') .' '.  __('fillable.Attribute')}}
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.categories.car.attributes.store') }}">
                @csrf

                <div class="form-group">
                    <label for="name" class="col-form-label">{{ __('fillable.Title') }}</label>
                    <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="sort" class="col-form-label">{{ __('fillable.Sort') }}</label>
                    <input id="sort" type="text" class="form-control{{ $errors->has('sort') ? ' is-invalid' : '' }}" name="sort" value="{{ old('sort', 1) }}" required>
                    @if ($errors->has('sort'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('sort') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="type" class="col-form-label">{{ __('fillable.Type') }}</label>
                    <select id="type" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type">
                        @foreach ($types as $type => $label)
                            <option value="{{ $type }}"{{ $type == old('type') ? ' selected' : '' }}>{{ $label }}</option>
                        @endforeach;
                    </select>
                    @if ($errors->has('type'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('type') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="variants" class="col-form-label">{{ __('fillable.Variants') }}</label>
                    <textarea id="variants" type="text" class="form-control{{ $errors->has('sort') ? ' is-invalid' : '' }}" name="variants" rows="5">{{ old('variants') }}</textarea>
                    @if ($errors->has('variants'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('variants') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="required" name="required" {{ old('required') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="required">{{ __('fillable.Required') }}</label>
                    </div>
                    @if ($errors->has('required'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('required') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="status" name="status" {{ old('status') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="status">{{ __('fillable.Status') }}</label>
                    </div>
                    @if ($errors->has('status'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('status') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="is_visible" name="is_visible" {{ old('is_visible') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="is_visible">{{ __('fillable.Visible') }}</label>
                    </div>
                    @if ($errors->has('is_visible'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('is_visible') }}</strong></span>
                    @endif
                </div>

                <div class="form-group d-flex">
                    <button type="submit" class="btn btn-primary">{{ __('button.Save') }}</button>
                    <a class="btn btn-danger ml-auto" href="{{ URL::previous() }}">{{ __('button.Back') }}</a>
                </div>
            </form>
        </div>
    </div>

@endsection