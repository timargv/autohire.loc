@extends('layouts.app')

@section('content')
    @include('admin.categories._nav', ['page' => 'models'])
    @include('admin.categories.car_models._search_form')

    <table class="table table-bordered bg-white table-responsive-sm">
        <thead>
        <tr>
            <th width="40px">ID</th>
            <th width="200px">{{__('fillable.CarModels')}}</th>
            <th width="60px">{{__('fillable.Function')}}</th>
            <th width="60px"></th>
        </tr>
        </thead>
        <tbody>

        @include('admin.categories.car_models._item', ['models' => $car_models])

        </tbody>
    </table>

    {{ $car_models->appends(request()->query())->links() }}
@endsection