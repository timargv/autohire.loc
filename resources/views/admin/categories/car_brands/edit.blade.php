@extends('admin.layouts.app', ['page' => 'carBrands'])

@section('content')

    <div class="box box-solid">
        <div class="box-header ">
            {{ __('fillable.Create') .' '.  __('fillable.Attribute')}}
        </div>

        <div class="box-body">
            <form method="POST" action="{{ route('admin.categories.car.brands.update', $carBrand) }}">

                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class="col-form-label">{{ __('fillable.Title') }}</label>
                    <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $carBrand->name) }}" required>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="name_ru" class="col-form-label">{{ __('fillable.Title') }} на Русском</label>
                    <input id="name_ru" class="form-control{{ $errors->has('name_ru') ? ' is-invalid' : '' }}" name="name_ru" value="{{ old('name_ru', $carBrand->name_ru) }}" required>
                    @if ($errors->has('name_ru'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('name_ru') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="slug" class="col-form-label">{{ __('fillable.Slug') }} на Русском</label>
                    <input id="slug" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" value="{{ old('slug', $carBrand->slug) }}" required>
                    @if ($errors->has('slug'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('slug') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input flat-red" id="status" name="status" {{ old('status', $carBrand->status != 'off') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="status">{{ __('fillable.Status') }}</label>
                    </div>
                    @if ($errors->has('status'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('status') }}</strong></span>
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