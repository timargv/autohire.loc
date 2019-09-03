@extends('layouts.app')

@section('bgColor', '#f3f3f3')
@include('cabinet.adverts._nav')

@section('content')
    @include('cabinet.adverts._nav_button_cabinet', ['page' => 'create'])
    @include('cabinet.adverts.forms._edit_form', ['carAdvert' => $carAdvert, 'car_years' => $car_years, 'car_brands' => $car_brands])
@endsection