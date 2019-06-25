@extends('layouts.app')

@section('content')
    @include('admin.categories._nav', ['page' => 'attributes'])
    @include('admin.categories.car_attributes._search_form')


    @include('admin.categories.car_attributes._item', ['attributes' => $attributes])

    {{ $attributes->appends(request()->query())->links() }}
@endsection