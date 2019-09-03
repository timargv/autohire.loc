@extends('layouts.app')

@section('bgColor', '#f3f3f3')

@section('content')
    @include('cabinet.adverts._nav')
    @include('cabinet.adverts._nav_button', ['page' => 'create'])
    @include('cabinet.adverts.forms._create_form', ['car_years' => $car_years, 'car_brands' => $car_brands])
@endsection