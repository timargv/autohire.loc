@extends('layouts.app')


@section('content')

    @include('admin.categories._nav', ['page' => 'brands'])
    @include('admin.categories.car_brands._search_form')


    @include('admin.categories.car_brands._item', ['carBrands' => $carBrands])

    {{ $carBrands->appends(request()->query())->links() }}
@endsection