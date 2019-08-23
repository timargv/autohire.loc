@extends('admin.layouts.app', ['page' => 'years'])
@include('admin.categories.car_years._header_panel')
@section('TitlePage', __('fillable.Create') .' '. trans_choice('fillable.CarYears', 1))

@section('content')
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    {{ __('fillable.Create') .' '.  trans_choice('fillable.CarYears', 1)}}
                </div>

                <div class="box-body">
                    <form method="POST" action="{{ route('admin.categories.car.years.store') }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name" class="col-form-label">{{ __('fillable.Title') }}</label>
                            <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="slug" class="col-form-label">{{ __('fillable.Slug') }} на Русском</label>
                            <input id="slug" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}" name="slug" value="{{ old('slug') }}" required>
                            @if ($errors->has('slug'))
                                <span class="invalid-feedback"><strong>{{ $errors->first('slug') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input flat-red" id="status" name="status" {{ old('status') ? 'checked' : '' }}>
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
        </div>
    </div>
@endsection