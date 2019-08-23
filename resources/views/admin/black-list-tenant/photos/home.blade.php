@extends('admin.layouts.app', ['page' => 'black-list-tenant'])
@section('btnBlock')
    @include('admin.black-list-tenant._nav_button', ['page' => 'photos'])
@stop


@section('content')

    @include('admin.black-list-tenant.photos._form_search', ['statuses' => $statuses])

    @include('admin.black-list-tenant.photos._item', ['photos' => $photos])

    {{ $photos->appends(request()->query())->links() }}
@endsection