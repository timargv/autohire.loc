@extends('layouts.app')

@section('content')
    @include('cabinet.black-list-tenant._nav')
    @include('.cabinet.black-list-tenant._nav_button')


    <div class="card mb-3">
{{--        <div class="card-header">Фильтр</div>--}}
        <div class="card-body">
            <form action="?" method="GET" class="">
                <div class="row">
                    <div class="col-sm-1">
                        <div class="form-group mb-3 mb-md-0">
{{--                            <label for="id" class="col-form-label">ID</label>--}}
                            <input id="id" class="form-control form-control-sm" name="id" value="{{ request('id') }}" placeholder="ID">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group mb-3 mb-md-0">
                            <input id="name" class="form-control form-control-sm" name="name" value="{{ request('name') }}" placeholder="{{ __('fillable.Name') }}">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group mb-3 mb-md-0">
                            <select id="status" class="form-control form-control-sm" name="status">
                                <option value="" class="text-muted" disabled selected>Выберите статус</option>
                                @foreach ($statuses as $value => $label)
                                    <option value="{{ $value }}"{{ $value === request('status') ? ' selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="custom-control custom-switch " data-toggle="tooltip" data-placement="top" title="Показать только мои">
                        <input type="checkbox" class="custom-control-input" id="onlyMy" name="onlyMy" {{ request('onlyMy') ? ' checked' : '' }}>
                        <label class="custom-control-label" for="onlyMy" ></label>
                    </div>

                    <div class="col-sm-2 pr-0">
                        <div class="form-group mb-3 mb-md-0">
                            <button type="submit" class="btn btn-sm btn-primary">{{__('button.Search')}}</button>
                            <a href="?" class="btn btn-sm btn-outline-danger"><i class="fas fa-times"></i></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

        <table class="table table-bordered bg-white table-responsive">
        <thead>
        <tr>
            <th width="60px">ID</th>
            <th width="50px">{{__('fillable.Photo')}}</th>
            <th>{{__('fillable.Name')}}</th>
            <th>{{__('fillable.City')}}</th>
            <th>{{__('fillable.Author')}}</th>
            <th>{{__('fillable.Status')}}</th>
        </tr>
        </thead>
        <tbody>

        @include('cabinet.black-list-tenant._item', ['tenants' => $tenants])

        </tbody>
    </table>

    {{ $tenants->appends(request()->query())->links() }}
@endsection