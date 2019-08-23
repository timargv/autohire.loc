@extends('admin.layouts.app', ['page' => 'black-list-tenant'])
@section('btnBlock')
    @include('admin.black-list-tenant._nav_button', ['page' => ''])
@stop


@section('content')

    @include('admin.black-list-tenant._search_form')
    @include('admin.black-list-tenant._item', ['tenants' => $tenants])


    {{ $tenants->appends(request()->query())->links() }}
@endsection