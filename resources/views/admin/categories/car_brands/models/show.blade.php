@extends('layouts.app')

@section('content')
    @include('admin.categories._nav', ['page' => 'brands'])


    <table class="table table-bordered bg-white table-responsive-sm">
        <tbody>
        <tr>
            <th width="150px">{{ __('fillable.Title') }}</th>
            <td>{{ $carModel->name }}</td>
        </tr>

        <tr>
            <th width="200px">{{ __('fillable.TitleRu') }}</th>
            <td>{{ $carModel->name_ru }}</td>
        </tr>

        <tr>
            <th width="150px">{{ __('fillable.Slug') }}</th>
            <td>{{ $carModel->slug }}</td>
        </tr>

        <tr>
            <th width="150px">{{ __('fillable.Status') }}</th>
            <td>{{ $carModel->status }}</td>
        </tr>

        <tr>
            <th width="150px">{{ __('fillable.Author') }}</th>
            <td>{{ $carModel->author->name }}</td>
        </tr>


        {{--        @include('admin.black-list-tenant._item', ['tenants' => $tenants])--}}

        </tbody>
    </table>

    <div class="btn-group mr-2 my-2 mt-4">
        <a href="{{ route('admin.categories.car.brands.create', $carModel) }}" class="btn-sm btn btn-outline-primary"><i class="fal fa-plus mr-1"></i> {{ __('button.Add') .' '. __('fillable.CarModels') }} </a>
    </div>

    @include('.admin.categories.car_brands.models.series._item', ['carSeries' => $carModel->children])


{{--    {{ $tenants->appends(request()->query())->links() }}--}}
@endsection