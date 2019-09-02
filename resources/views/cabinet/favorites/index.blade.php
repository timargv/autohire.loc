@extends('layouts.app')

@section('content')
    @include('cabinet.favorites._nav')

    @include('cabinet.favorites._item', ['car_adverts' => $car_adverts])

    {{ $car_adverts->links() }}
@endsection