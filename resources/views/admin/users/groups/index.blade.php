@extends('layouts.app')

@section('content')
    @include('admin.users._nav')
    @include ('admin.users._nav_user', ['page' => 'groups'])


    <div class="row">
        <div class="col-md-6">
            @include('admin.users.groups._item', ['groups' => $groups])
        </div>
        <div class="col-md-6">
            @include('admin.users.groups.create')
        </div>
    </div>

@endsection