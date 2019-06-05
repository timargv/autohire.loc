@extends('layouts.app')

@section('content')
    @include('admin.users._nav')

    <div class="d-flex flex-row mb-3">
        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary mr-1">Edit</a>

        @if ($user->isWait())
            <form method="POST" action="{{ route('admin.users.verify', $user) }}" class="mr-1">
                @csrf
                <button class="btn btn-success">Verify</button>
            </form>
        @endif

        <form method="POST" action="{{ route('admin.users.destroy', $user) }}" class="mr-1">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>
    </div>

    <table class="table table-bordered table-striped">
        <tbody>
        <tr>
            <th width="100px">ID</th><td>{{ $user->id }}</td>
        </tr>
        <tr>
            <th>Ник</th><td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Имя</th><td>{{ $user->forename }}</td>
        </tr>
        <tr>
            <th>Фамилия</th><td>{{ $user->surname }}</td>
        </tr>
        <tr>
            <th>Отчество</th><td>{{ $user->patronymic }}</td>
        </tr>
        <tr>
            <th>Город</th><td>{{ $user->city }}</td>
        </tr>
        <tr>
            <th>Email</th><td>{{ $user->email }}</td>
        </tr>

        <tr>
            <th>Status</th>
            <td>
                @if ($user->isWait())
                    <span class="badge badge-warning">Waiting</span>
                @endif
                @if ($user->isActive())
                    <span class="badge badge-primary">Active</span>
                @endif
            </td>
        </tr>
        <tr>
            <th>Role</th>
            <td>
                @if ($user->isAdmin())
                    <span class="badge badge-danger">Admin</span>
                @elseif ($user->isModerator())
                    <span class="badge badge-success">Moderator</span>
                @else
                    <span class="badge badge-secondary">User</span>
                @endif
            </td>
        </tr>
        <tr>
            <th>О себе</th><td>{{ $user->about }}</td>
        </tr>
        <tbody>
        </tbody>
    </table>
@endsection