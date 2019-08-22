@extends('admin.layouts.app', ['page' => 'brands'])
@if (!empty($carBrand))
    @section('TitlePage', $carBrand->depthCarBrand($carBrand->id)->depth == 1 ? __('button.Add') .' '. __('fillable.CarSeries') : __('button.Add') .' '. __('fillable.CarModel') )
@else
    @section('TitlePage', __('button.Add') .' '. trans_choice('fillable.CarBrand', 10) )
@endif

@section('content')

    <div class="row">
        <div class="col-12 col-md-6">
            <div class="box box-solid">
                <div class="box-header">
                    @if (!empty($carBrand))
                        {{ $carBrand->depthCarBrand($carBrand->id)->depth == 1 ? __('button.Add') .' '. __('fillable.CarSeries') : __('button.Add') .' '. __('fillable.CarModel') }}
                    @else
                        {{ __('button.Add') .' '. trans_choice('fillable.CarBrand', 10) }}
                    @endif
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ route('admin.categories.car.brands.store') }}">
                        @csrf

                        @if ($carBrand)
                            <input id="parent" class="hidden form-control{{ $errors->has('parent') ? ' is-invalid' : '' }}" name="parent" value="{{ $carBrand->id }}" required>
                        @endif

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