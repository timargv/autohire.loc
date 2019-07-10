@extends('layouts.app')

@section('content')
    @include('cabinet.adverts._nav')
    @include('cabinet.adverts._nav_button', ['page' => ''])

    @include('cabinet.adverts._item', ['car_adverts' => $car_adverts])

    {{ $car_adverts->appends(request()->query())->links() }}
@endsection