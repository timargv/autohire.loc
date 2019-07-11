@extends('layouts.app')

@section('content')
    @include('cabinet.adverts._nav')
    @include('cabinet.adverts._nav_button', ['page' => 'create'])

    <div class="card rounded-0 border-0 shadow-sm">
        <div class="card-header border-0 h5">
            {{ __('fillable.Update') .' '. __('fillable.Advert') }}
        </div>
        <div class="card-body">
            @include('cabinet.adverts.forms._edit_form', ['carAdvert' => $carAdvert, 'car_years' => $car_years, 'car_brands' => $car_brands])
        </div>
    </div>

@endsection