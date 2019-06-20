@extends('layouts.app')

@section('content')
    @include('admin.black-list-tenant._nav')
    @include('admin.black-list-tenant.photos._nav')

    @include('admin.black-list-tenant.photos._form_search', ['statuses' => $statuses])

    @include('admin.black-list-tenant.photos._item', ['photos' => $photos])

    {{ $photos->appends(request()->query())->links() }}
@endsection