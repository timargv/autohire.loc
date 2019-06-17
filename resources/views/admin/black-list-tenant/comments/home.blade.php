@extends('layouts.app')

@section('content')
    @include('admin.black-list-tenant._nav')
    @include('admin.black-list-tenant._nav_button', ['page' => 'comments'])

    @include('admin.black-list-tenant.comments._item', ['comments' => $comments])
@endsection