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
                            <div class="">
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

                            @if($user->avatar)
                            <div class="d-flex flex-row ">
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
                    </div>


                </div>

                <div class="col-md-8">

                    <div class="float-right mt-1">
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{__('fillable.Edit')}}
                            </button>
                            <div class="dropdown-menu dropdown-menu-right rounded-0">
                                <a href="{{ route('admin.users.edit', $user) }}" class="dropdown-item align-middle btn-sm px-3  rounded-0"><i class="fal fa-pen mr-2"></i> {{ __('button.Edit') }}</a>

                                @if ($user->isWait())
                                <div class="form-group mb-0">
                                    <form method="POST" action="{{ route('admin.users.verify', $user) }}" class="">
                                        @csrf
                                        <button class="dropdown-item btn-sm px-3 text-success rounded-0" onclick="return confirm('Вы хотите подтвердить аккаунт?')"><i class="fal fa-check  mr-2"></i> {{__('menu.Verify')}}</button>
                                    </form>
                                </div>
                                @endif

                                <div class="form-group mb-0">
                                    <form method="POST" action="{{ route('admin.users.destroy', $user) }}" class="">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item btn-sm px-3  rounded-0" onclick="return confirm('Удалить Пользователя?')"><i class="fal fa-trash mr-2"></i> {{__('button.Delete')}}</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="p-md-4">
                        <div class="mb-3">
                            <div class="mb-2 text-muted ">
                                Ник
                                @if ($user->isWait())
                                    <span class="badge badge-warning">{{ $user->statusList()[$user->status] }}</span>
                                @endif
                                @if ($user->isActive())
                                    <span class="badge badge-primary">{{ $user->statusList()[$user->status] }}</span>
                                @endif
                                @if($groups = $user->groups)
                                    @foreach($groups as $group)
                                        <span class="badge badge-secondary font-weight-light small">{{ $group->name }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="font-weight-bold h4 ">
                                {{ $user->name }}


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
                                <div class="h6 text-muted">
                                    {{ $user->email }}
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