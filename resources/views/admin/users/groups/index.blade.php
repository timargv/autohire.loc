@extends('admin.layouts.app', ['page' => 'users'])
@section('btnBlock')
    @include ('admin.users._nav_user', ['page' => 'groups'])
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            @include('admin.users.groups._item', ['groups' => $groups])
        </div>
        <div class="col-md-6">
            @include('admin.users.groups.create')
        </div>
    </div>

@endsection