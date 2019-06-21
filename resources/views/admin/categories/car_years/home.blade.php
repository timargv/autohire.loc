@extends('layouts.app')

@section('content')
    @include('admin.categories._nav', ['page' => 'years'])
    @include('admin.categories.car_years._search_form')


    <table class="table table-bordered bg-white table-responsive-sm ">
        <thead>
        <tr>
            <th width="60px">ID</th>
            <th>{{__('fillable.CarYears')}}</th>
            <th width="100px"></th>
        </tr>
        </thead>
        <tbody>

        @include('admin.categories.car_years._item', ['years' => $years])

        </tbody>
    </table>

    {{ $years->appends(request()->query())->links() }}
@endsection