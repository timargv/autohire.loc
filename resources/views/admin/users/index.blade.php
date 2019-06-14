@extends('layouts.app')

@section('content')
    @include('admin.users._nav')
    @include ('admin.users._nav_user', ['page' => ''])

    {{--  Фильтр по пользователям  --}}
    <div class="card mb-3">
{{--        <div class="card-header">Фильтр</div>--}}
        <div class="card-body">
            <form action="?" method="GET">
                <div class="row">
                    <div class="col-sm-1">
                        <div class="form-group mb-3 mb-md-0">
{{--                            <label for="id" class="col-form-label">ID</label>--}}
                            <input id="id" class="form-control form-control-sm" name="id" value="{{ request('id') }}" placeholder="ID">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group mb-3 mb-md-0">
{{--                            <label for="name" class="col-form-label">Имя</label>--}}
                            <input id="name" class="form-control form-control-sm" name="name" value="{{ request('name') }}" placeholder="{{__('fillable.Name')}}">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group mb-3 mb-md-0">
{{--                            <label for="email" class="col-form-label">Email</label>--}}
                            <input id="email" class="form-control form-control-sm" name="email" value="{{ request('email') }}" placeholder="{{__('register.EMailAddress')}}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group mb-3 mb-md-0">
{{--                            <label for="status" class="col-form-label">Статус</label>--}}
                            <select id="status" class="form-control form-control-sm" name="status">
                                <option value="" class="text-muted" disabled selected>Выберите статус</option>
                                @foreach ($statuses as $value => $label)
                                    <option value="{{ $value }}"{{ $value === request('status') ? ' selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group mb-3 mb-md-0">
{{--                            <label for="role" class="col-form-label">Роль</label>--}}
                            <select id="role" class="form-control form-control-sm" name="role">
                                <option value="" class="text-muted" disabled selected>Выберите Роль</option>
                                @foreach ($roles as $value => $label)
                                    <option value="{{ $value }}"{{ $value === request('role') ? ' selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-2 pr-0">
                        <div class="form-group mb-3 mb-md-0">
{{--                            <label class="col-form-label">&nbsp;</label><br />--}}
                            <button type="submit" class="btn btn-sm btn-primary">{{__('button.Search')}}</button>
                            <a href="?" class="btn btn-sm btn-outline-danger"><i class="fas fa-times"></i></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    @include('admin.users._item', ['users' => $users])

    {{ $users->appends(request()->query())->links() }}
@endsection