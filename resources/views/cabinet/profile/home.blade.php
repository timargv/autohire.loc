@extends('layouts.app')

@section('content')
    @include('cabinet.profile._nav')

    <div class="mb-3">
        <a href="{{ route('cabinet.profile.edit') }}" class="btn btn-primary">Edit</a>
    </div>

    <table class="table table-bordered">
        <tbody>
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
            <th>О себе</th><td>{{ $user->about }}</td>
        </tr>
{{--        <tr>--}}
{{--            <th>Phone</th><td>--}}
{{--                @if ($user->phone)--}}
{{--                    {{ $user->phone }}--}}
{{--                    @if (!$user->isPhoneVerified())--}}
{{--                        <i>(is not verified)</i><br />--}}
{{--                        <form method="POST" action="{{ route('cabinet.profile.phone') }}">--}}
{{--                            @csrf--}}
{{--                            <button type="submit" class="btn btn-sm btn-success">Verify</button>--}}
{{--                        </form>--}}
{{--                    @endif--}}
{{--                @endif--}}
{{--            </td>--}}
{{--        </tr>--}}

{{--        @if ($user->phone)--}}
{{--            <tr>--}}
{{--                <th>Two Factor Auth</th><td>--}}
{{--                    <form method="POST" action="{{ route('cabinet.profile.phone.auth') }}">--}}
{{--                        @csrf--}}
{{--                        @if ($user->isPhoneAuthEnabled())--}}
{{--                            <button type="submit" class="btn btn-sm btn-success">On</button>--}}
{{--                        @else--}}
{{--                            <button type="submit" class="btn btn-sm btn-danger">Off</button>--}}
{{--                        @endif--}}
{{--                    </form>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endif--}}

        </tbody>
    </table>
@endsection