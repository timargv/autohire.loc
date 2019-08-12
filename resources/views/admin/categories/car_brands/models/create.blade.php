@extends('layouts.app')

@section('content')
    @include('admin.categories._nav', ['page' => 'brands'])


    <div class="card border-0 rounded-0 shadow-sm">
        <div class="card-header border-0">
            {{ __('fillable.Create') .' '.  __('fillable.CarModels')}}
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.categories.car.brands.store') }}">
                @csrf
                <input hidden id="parent" class="form-control{{ $errors->has('parent') ? ' is-invalid' : '' }}" name="parent" value="{{ $carBrand }}" required>

                <div class="form-group">
                    <label for="name" class="col-form-label">{{ __('fillable.Title') }}</label>
                    <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="name_ru" class="col-form-label">{{ __('fillable.TitleRu') }}</label>
                    <input id="name_ru" class="form-control{{ $errors->has('name_ru') ? ' is-invalid' : '' }}" name="name_ru" value="{{ old('name_ru') }}" required>
                    @if ($errors->has('name_ru'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('name_ru') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{ __('button.Save') }}</button>
                </div>
            </form>
        </div>
    </div>

@endsection