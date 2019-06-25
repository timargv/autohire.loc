@extends('layouts.app')

@section('content')
    @include('admin.categories._nav', ['page' => 'models'])
    @include('admin.categories.car_models._search_form')


    @include('admin.categories.car_models._item', ['models' => $car_models])

    {{ $car_models->appends(request()->query())->links() }}
@endsection