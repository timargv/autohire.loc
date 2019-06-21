@extends('layouts.app')

@section('content')
    @include('admin.categories._nav', ['page' => 'years'])


    <table class="table table-bordered bg-white table-responsive-sm">
        <thead>
        <tr>
            <th width="60px">ID</th>
            <th width="50px">{{__('fillable.Name')}}</th>
            <th>{{__('fillable.Function')}}</th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @include('admin.black-list-tenant._item', ['tenants' => $tenants])

        </tbody>
    </table>

    {{ $tenants->appends(request()->query())->links() }}
@endsection