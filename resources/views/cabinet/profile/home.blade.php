@extends('layouts.app')

@section('content')
    @include('cabinet.profile._nav')

    <div class="mb-3">
    </div>

    <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="row">

                <div class="col-md-4">

                    <div class="card border-0 text-white mb-3">
                        <img src="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/medium/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">

                        <div class="card-img-overlay">
                            @if($user->avatar)
                                @if($user->avatar->isActive())
                                    <h5><span class="badge badge-success">
                                {{ $user->avatar->statusAvatar()[$user->avatar->status] }}
                            </span></h5>
                                @elseif($user->avatar->isModeration())
                                    <h5><span class="badge badge-warning" data-toggle="tooltip" data-placement="top" title="Фото на модерации">
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
                </div>

                <div class="col-md-8">
                    <div class="float-right mt-1">
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Изменить
                            </button>
                            <div class="dropdown-menu dropdown-menu-right rounded-0">
                                <a href="{{ route('cabinet.profile.edit') }}" class="dropdown-item align-middle btn-sm px-3 rounded-0"><i class="fal fa-pen mr-2"></i> {{ __('button.Edit') }}</a>
                            </div>
                        </div>

                    </div>

                    <div class="p-md-4">
                        <div class="mb-3">
                            <div class="mb-2 text-muted ">
                                Ник
                            </div>
                            <div class="font-weight-bold h4 ">
                                {{ $user->name??'—' }}
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="mb-3 col-md-4">
                                <div class="mb-2 text-muted ">
                                    Имя
                                </div>
                                <div class="h5 text-muted">
                                    {{ $user->forename??'—' }}
                                </div>
                            </div>

                            <div class="mb-3 col-md-4">
                                <div class="mb-2 text-muted ">
                                    Фамилия
                                </div>
                                <div class="h5 text-muted">
                                    {{ $user->surname??'—' }}
                                </div>
                            </div>

                            <div class="mb-3 col-md-4">
                                <div class="mb-2 text-muted ">
                                    Отчество
                                </div>
                                <div class="h5 text-muted">
                                    {{ $user->patronymic??'—' }}
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="mb-3 col-md-4">
                                <div class="mb-2 text-muted ">
                                    Город
                                </div>
                                <div class="h5 text-muted">
                                    {{ $user->city??'—' }}
                                </div>
                            </div>

                            <div class="mb-3 col-md-4">
                                <div class="mb-2 text-muted">
                                    {{__('register.EMailAddress')}}
                                </div>
                                <div class="h5 text-muted">
                                    {{ $user->email??'—' }}
                                </div>
                            </div>

                            <div class="mb-3 col-md-4">
                                <div class="mb-2 text-muted">
                                    {{__('fillable.Phone')}}
                                </div>
                                <div class="h5 text-muted">
                                    {{ $user->userPhoneChar($user) }}
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="mb-2 text-muted ">
                                О себе
                            </div>
                            <div class="text-muted">
                                {{ $user->about??'—' }}
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


@endsection