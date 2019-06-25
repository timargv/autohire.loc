@extends('layouts.app')

@section('content')
    @include('admin.black-list-tenant._nav')
    @include('admin.black-list-tenant._nav_button', ['page' => ''])


    @include('admin.black-list-tenant._item', ['tenants' => $tenants])


    {{ $tenants->appends(request()->query())->links() }}
@endsection