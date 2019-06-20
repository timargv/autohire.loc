@extends('layouts.app')

@section('content')
    @include('admin.black-list-tenant._nav')
    @include('admin.black-list-tenant._nav_button', ['page' => ''])




    <table class="table table-bordered bg-white table-responsive-sm">
        <thead>
        <tr>
            <th width="60px">ID</th>
            <th width="50px">{{__('fillable.Photo')}}</th>
            <th>{{__('fillable.Name')}}</th>
            <th>{{__('fillable.City')}}</th>
            <th>{{__('fillable.Author')}}</th>
            <th>{{__('fillable.Status')}}</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @include('admin.black-list-tenant._item', ['tenants' => $tenants])

        </tbody>
    </table>

    {{ $tenants->appends(request()->query())->links() }}
@endsection