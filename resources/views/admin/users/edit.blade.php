@extends('layouts.app')

@section('content')
    @include('admin.users._nav')
    @include ('admin.users._nav_user', ['page' => ''])

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="row">

                <div class="col-md-4">
                    <div class="card border-0 text-white mb-3">
                        @if($user->avatar && Storage::disk('public')->exists('user/avatar/medium/'.$user->avatar->image))
                            @if($user->avatar->isModeration() || $user->avatar->isNotMatch())
                                <img src="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/blur/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">
                            @else
                                <img src="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/medium/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">
                            @endif
                        @else
                            <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="rounded w-100 " alt="...">
                        @endif

                        <div class="card-img-overlay">
                            @if($user->avatar)
                                @if($user->avatar->isActive())
                                    <h5><span class="badge badge-success">
                                {{ $user->avatar->statusAvatar()[$user->avatar->status] }}
                            </span></h5>
                                @elseif($user->avatar->isModeration())
                                    <h5><span class="badge badge-warning">
                                {{ $user->avatar->statusAvatar()[$user->avatar->status] }}
                            </span></h5>
                                @elseif($user->avatar->isNotMatch())
                                    <h5><span class="badge badge-danger">
                                {{ $user->avatar->statusAvatar()[$user->avatar->status] }}
                            </span></h5>
                                @endif
                            @endif
                        </div>
                    </div>

                    @if($user->avatar)
                    <div class="d-flex flex-row">
                        <form method="POST" action="{{ route('admin.users.avatar.not.match', $user->avatar) }}" class="mr-1">
                            @csrf
                            <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="{{ $user->avatar->statusAvatar()['not_match'] }}"><i class="fas fa-ban"></i></button>
                        </form>
                        <form method="POST" action="{{ route('admin.users.avatar.active', $user->avatar) }}" class="mr-1">
                            @csrf
                            <button class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="{{ $user->avatar->statusAvatar()['active'] }}"><i class="fas fa-check"></i></button>
                        </form>
                    </div>
                    @endif


                </div>

                <div class="col-md-8">
                <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="phone" class="col-form-label">{{__('fillable.Phone')}}</label>
                        <input id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone', $user->phone) }}" required>
                        @if ($errors->has('phone'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('phone') }}</strong></span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-form-label">{{ __('register.EMailAddress') }} *</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email', $user->email) }}" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-form-label">{{ __('fillable.NickName') }} *</label>
                        <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $user->name) }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="forename" class="col-form-label">{{ __('fillable.Name') }}</label>
                        <input id="forename" class="form-control{{ $errors->has('forename') ? ' is-invalid' : '' }}" name="forename" value="{{ old('forename', $user->forename) }}" >
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
                        <label for="city" class="col-form-label">{{ __('fillable.City') }}</label>
                        <input id="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city', $user->city) }}" >
                        @if ($errors->has('city'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('city') }}</strong></span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="about" class="col-form-label">{{ __('fillable.About') }}</label>
                        <textarea id="about" class="form-control{{ $errors->has('about') ? ' is-invalid' : '' }}" name="about" rows="10">{{ old('about', $user->about) }}</textarea>
                        @if ($errors->has('about'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('about') }}</strong></span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="status" class="col-form-label">{{ __('fillable.Status') }}</label>
                        <select id="status" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status">
                            @foreach ($statuses as $value => $label)
                                <option value="{{ $value }}"{{ $value === old('status', $user->status) ? ' selected' : '' }}>{{ $label }}</option>
                            @endforeach;
                        </select>
                        @if ($errors->has('status'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('status') }}</strong></span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="groups" class="col-form-label">{{ __('fillable.Groups') }}</label>
                        <select id="groups" class="form-control select2 w-100 {{ $errors->has('groups') ? ' is-invalid' : '' }}" name="groups[]"  multiple="multiple">

                        @foreach ($groups as $parent)

                                <option value="{{ $parent->id }}"
                                @foreach ($user_groups as $item)
                                    {{ $parent->id == $item ? ' selected' : '' }}
                                        @endforeach
                                >
                                    {{ $parent->name }}
                                </option>
                            @endforeach;
                        </select>

                    @if ($errors->has('groups'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('groups') }}</strong></span>
                        @endif
                    </div>


                    <div class="form-group">
                        <label for="role" class="col-form-label">{{ __('fillable.Role') }}</label>
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
                        <button type="submit" class="btn btn-primary">{{ __('button.Save') }}</button>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
@endsection