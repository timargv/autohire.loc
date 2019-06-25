@extends('layouts.app')

@section('content')
    @include('admin.categories._nav', ['page' => 'years'])
    @include('admin.categories.car_years._search_form')


    @include('admin.categories.car_years._item', ['years' => $years])


    {{ $years->appends(request()->query())->links() }}
@endsection