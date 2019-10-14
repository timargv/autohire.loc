@extends('admin.layouts.app', ['page' => 'users'])


@section('TitlePage')
    @include('admin.layouts.partials.title_page', ['titlePage' => null, 'subTitlePage' => null])
@endsection

@section('content')

    {{--  Фильтр по пользователям  --}}
    <div class="box box-solid">
{{--        <div class="card-header">Фильтр</div>--}}
        <div class="box-body">
            <form action="?" method="GET">
                <div class="row">
                    <div class="col-sm-1">
                        <div class="form-group  mb-3 mb-md-0">
{{--                            <label for="id" class="col-form-label">ID</label>--}}
                            <input id="id" class="form-control form-control-sm" name="id" value="{{ request('id') }}" placeholder="ID">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group  mb-3 mb-md-0">
{{--                            <label for="name" class="col-form-label">Имя</label>--}}
                            <input id="name" class="form-control form-control-sm" name="name" value="{{ request('name') }}" placeholder="{{__('fillable.Name')}}">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group  mb-3 mb-md-0">
{{--                            <label for="email" class="col-form-label">Email</label>--}}
                            <input id="email" class="form-control form-control-sm" name="email" value="{{ request('email') }}" placeholder="{{__('register.EMailAddress')}}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group input-group-sm mb-3 mb-md-0">
{{--                            <label for="status" class="col-form-label">Статус</label>--}}
                            <select id="status" class="form-control form-control-sm select2" name="status">
                                <option value="" class="text-muted" disabled selected>Выберите статус</option>
                                @foreach ($statuses as $value => $label)
                                    <option value="{{ $value }}" {{ $value === request('status') ? ' selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group input-group-sm mb-3 mb-md-0">
{{--                            <label for="role" class="col-form-label">Роль</label>--}}
                            <select id="role" class="form-control form-control-sm select2" name="role">
                                <option value="" class="text-muted" disabled selected>Выберите Роль</option>
                                @foreach ($roles as $value => $label)
                                    <option value="{{ $value }}" {{ $value === request('role') ? ' selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-2 pr-0">
                        <div class="form-group mb-3 mb-md-0">
{{--                            <label class="col-form-label">&nbsp;</label><br />--}}
                            <button type="submit" class="btn  btn-default">{{__('button.Search')}}</button>
                            <a href="?" class="btn  btn-default"><i class="fas fa-times"></i></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Все Пользователи</h3>

            <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="min-width: 150px;">

                </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            @include('admin.users._item', ['users' => $users])
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            {{ $users->appends(request()->query())->links() }}
        </div>
    </div>




@endsection
