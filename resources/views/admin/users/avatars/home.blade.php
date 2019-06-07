@extends('layouts.app')

@section('content')
    @include('admin.users._nav')
    @include('admin.users._nav_user')

    <div class="card mb-3">
        <div class="card-header">Фильтр</div>
        <div class="card-body">
            <form action="?" method="GET">
                <div class="row">
                    <div class="col-sm-1">
                        <div class="form-group">
                            <label for="id" class="col-form-label">ID</label>
                            <input id="id" class="form-control" name="id" value="{{ request('id') }}">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="status" class="col-form-label">Статус</label>
                            <select id="status" class="form-control" name="status">
                                <option value=""></option>
                                @foreach ($statuses as $value => $label)
                                    <option value="{{ $value }}"{{ $value === request('status') ? ' selected' : '' }}>{{ $label }}</option>
                                @endforeach;
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="col-form-label">&nbsp;</label><br />
                            <button type="submit" class="btn btn-primary">Найти</button>
                            <a href="?" class="btn btn-outline-danger"><i class="fas fa-times"></i></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-bordered table-striped table-responsive-sm">
        <thead>
        <tr>
            <th>ID</th>
            <th width="150px">Фото</th>
            <th>Имя</th>
            <th>Статус</th>
            <th></th>
        </tr>
        </thead>
        <tbody>


        @foreach ($avatars as $avatar)
            <tr>
                <td>{{ $avatar->id }}</td>
                <td><img src="{{ $avatar !== null ? Storage::disk('public')->url('user/avatar/small/'. $avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="..."></td>
                <td><a href="{{ route('admin.users.show', $avatar->author) }}">{{ $avatar->author->name }}</a></td>
                <td>
                    @if ($avatar->isNotMatch())
                        <span class="badge badge-danger">{{ $statuses['not_match'] }}</span>
                    @elseif ($avatar->isModeration())
                        <span class="badge badge-warning">{{ $statuses['moderation'] }}</span>
                    @else
                        <span class="badge badge-success">{{ $statuses['active'] }}</span>
                    @endif
                </td>
                <td>
                    <div class="d-flex flex-row">
                        <form method="POST" action="{{ route('admin.users.avatar.not.match', $avatar) }}" class="mr-1">
                            @csrf
                            <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="{{ $statuses['not_match'] }}"><i class="fas fa-ban"></i></button>
                        </form>
                        <form method="POST" action="{{ route('admin.users.avatar.active', $avatar) }}" class="mr-1">
                            @csrf
                            <button class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="{{ $statuses['active'] }}"><i class="fas fa-check"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>


    {{ $avatars->links() }}
@endsection