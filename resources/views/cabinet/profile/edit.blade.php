@extends('layouts.app')

@section('content')
    @include('cabinet.profile._nav')
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">


                    <div class="card border-0 text-white mb-3">
                        <img src="{{ $user->avatar !== null ? Storage::disk('public')->url($user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">

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

                    <form method="POST" action="{{ route('cabinet.profile.add.avatar', $user) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="input-group mb-3">

                            <div class="custom-file">
                                <input name="avatar" type="file" class="custom-file-input" id="avatar" aria-describedby="avatar">
                                <label class="custom-file-label" for="avatar">Добавьте фотографию</label>
                            </div>

                        </div>

                        <div class="text-muted mb-3">
                            Это повысит доверие покупателей и сделает ваши объявления привлекательнее.
                        </div>

                        @if ($errors->has('avatar'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('avatar') }}</strong></span>
                        @endif

                        <div class="form-group mb-4">
                            <button type="submit" class="btn btn-primary">{{ __('Загрузить') }}</button>
                        </div>
                    </form>


                </div>
                <div class="col-md-8">
                    <form method="POST" action="{{ route('cabinet.profile.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group ">
                            <label for="phone" class="col-form-label">Phone</label>
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+7</span>
                                </div>
                                <input id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone', $user->phone) }}" placeholder="Только цифры без пробелов и знаков" required>
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback"><strong>{{ $errors->first('phone') }}</strong></span>
                                @endif
                            </div>


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
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection