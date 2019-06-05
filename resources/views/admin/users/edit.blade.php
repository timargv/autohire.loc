@extends('layouts.app')

@section('content')
    @include('admin.users._nav')


    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="phone" class="col-form-label">Phone</label>
            <input id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone', $user->phone) }}" required>
            @if ($errors->has('phone'))
                <span class="invalid-feedback"><strong>{{ $errors->first('phone') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="name" class="col-form-label">Ник *</label>
            <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $user->name) }}" required>
            @if ($errors->has('name'))
                <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="forename" class="col-form-label">Имя</label>
            <input id="forename" class="form-control{{ $errors->has('forename') ? ' is-invalid' : '' }}" name="name" value="{{ old('forename', $user->forename) }}" >
            @if ($errors->has('forename'))
                <span class="invalid-feedback"><strong>{{ $errors->first('forename') }}</strong></span>
            @endif
        </div>


        <div class="form-group">
            <label for="surname" class="col-form-label">Фамилия</label>
            <input id="surname" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname', $user->surname) }}" >
            @if ($errors->has('surname'))
                <span class="invalid-feedback"><strong>{{ $errors->first('surname') }}</strong></span>
            @endif
        </div>


        <div class="form-group">
            <label for="patronymic" class="col-form-label">Отчество</label>
            <input id="patronymic" class="form-control{{ $errors->has('patronymic') ? ' is-invalid' : '' }}" name="patronymic" value="{{ old('patronymic', $user->patronymic) }}" >
            @if ($errors->has('patronymic'))
                <span class="invalid-feedback"><strong>{{ $errors->first('patronymic') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="city" class="col-form-label">Город</label>
            <input id="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city', $user->city) }}" >
            @if ($errors->has('city'))
                <span class="invalid-feedback"><strong>{{ $errors->first('city') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="about" class="col-form-label">О себе</label>
            <textarea id="about" class="form-control{{ $errors->has('about') ? ' is-invalid' : '' }}" name="about" rows="10">{{ old('about', $user->about) }}</textarea>
            @if ($errors->has('about'))
                <span class="invalid-feedback"><strong>{{ $errors->first('about') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="role" class="col-form-label">Role</label>
            <select id="role" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="role">
                @foreach ($roles as $value => $label)
                    <option value="{{ $value }}"{{ $value === old('role', $user->role) ? ' selected' : '' }}>{{ $label }}</option>
                @endforeach;
            </select>
            @if ($errors->has('role'))
                <span class="invalid-feedback"><strong>{{ $errors->first('role') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection