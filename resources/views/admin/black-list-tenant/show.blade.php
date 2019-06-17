@extends('layouts.app')

@section('content')
    @include('admin.black-list-tenant._nav')
    @include('admin.black-list-tenant._nav_button', ['page' => ''])


    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="row">

                <div class="col-md-3">
                    <div class="card border-0 text-white mb-3">

                    @if(count($tenant->photos))
                        <div class="w-100 position-relative mb-5">
                            @foreach($tenant->photos as $photo)
                                <div class="position-absolute" style="top: -10px;left: -6px;">
                                    @if ($photo->isNotMatch())
                                        <i class="fas fa-times-circle text-danger bg-white rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="{{ $photo->statusPhoto()[$photo->status] }}"></i>
                                    @elseif ($photo->isModeration())
                                        <i class="fas fa-question-circle text-warning bg-dark rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="{{ $photo->statusPhoto()[$photo->status] }}"></i>
                                    @else
                                        <i class="fas fa-check-circle text-success bg-white rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="{{ $photo->statusPhoto()[$photo->status] }}"></i>
                                    @endif
                                </div>
                                @if($photo->photo && Storage::disk('public')->exists('user/black-tenant/images/medium/'.$photo->photo))
                                    @if($photo->isModeration() || $photo->isNotMatch())
                                        <img src="{{ $photo->photo !== null ? Storage::disk('public')->url('user/black-tenant/images/blur/'.$photo->photo) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">
                                    @else
                                        <img src="{{ $photo->photo !== null ? Storage::disk('public')->url('user/black-tenant/images/medium/'.$photo->photo) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">
                                    @endif
                                @else
                                    <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="rounded w-100 " alt="...">
                                @endif
                                @break($photo->is_manin != null)
                            @endforeach

                                <div class="card-img-overlay">
                                    <div class="d-flex flex-row">
                                        <form method="POST" action="{{ route('admin.black.list.tenants.photo.not.match', $photo) }}" class="mr-1">
                                            @csrf
                                            <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="{{ $statuses['not_match'] }}"><i class="fas fa-ban"></i></button>
                                        </form>
                                        <form method="POST" action="{{ route('admin.black.list.tenants.photo.active', $photo) }}" class="mr-1">
                                            @csrf
                                            <button class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="{{ $statuses['active'] }}"><i class="fas fa-check"></i></button>
                                        </form>
                                    </div>
                                </div>
                            <a href="{{ $photo->photo !== null ? Storage::disk('public')->url('user/black-tenant/images/medium/'.$photo->photo) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" target="_blank">open</a>
                        </div>
                        @else
                            <div class="w-100 position-relative mb-5">
                                <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="rounded w-100 " alt="...">
                            </div>
                    @endif
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="float-md-right mb-md-0 mb-3 mt-1">
                        <div class="btn-group">
                            @if($tenant->isActive())
                                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ $tenant->statusTenant()[$tenant->status] }}
                                </button>
                            @elseif($tenant->isModeration())
                                <button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ $tenant->statusTenant()[$tenant->status] }}
                                </button>
                            @elseif($tenant->isNotMatch())
                                <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ $tenant->statusTenant()[$tenant->status] }}
                                </button>
                            @endif

                            <div class="dropdown-menu dropdown-menu-right rounded-0">
{{--                                <a href="{{ route('admin.users.edit', $user) }}" class="dropdown-item align-middle btn-sm px-3  rounded-0"><i class="fal fa-pen mr-2"></i> {{ __('button.Edit') }}</a>--}}

                                <div class="form-group mb-0">
                                    <form method="POST" action="{{ route('admin.black.list.tenants.active', $tenant) }}" class="">
                                        @csrf
                                        <button class="dropdown-item btn-sm px-3 text-success rounded-0" data-toggle="tooltip" data-placement="top" title="{{ $statuses['active'] }}"><i class="fas fa-check mr-2"></i> {{ $tenant->statusTenant()['active'] }}</button>
                                    </form>
                                </div>

                                <div class="form-group mb-0">
                                    <form method="POST" action="{{ route('admin.black.list.tenants.not.match', $tenant) }}" class="">
                                        @csrf
                                        <button class="dropdown-item btn-sm px-3  rounded-0" data-toggle="tooltip" data-placement="top" title="{{ $statuses['not_match'] }}"><i class="fas fa-ban mr-2"></i> {{ $tenant->statusTenant()['not_match'] }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="p-md-4">
                        <div class="mb-3">
                            <div class="mb-2 text-muted ">
                                {{ __('fillable.Name') }}
                            </div>
                            <div class="font-weight-bold h4 ">
                                {{ $tenant->name??'—' }}
                            </div>
                        </div>

                        <div class="all-docs my-4 py-4">
                            <div class="mb-4 pb-3">
                                <div class="mb-2 text-muted ">
                                    {{ __('fillable.Passport') }}
                                </div>
                                <div class="font-weight-bold h4 ">
                                    {{ $tenant->type??'—' }}
                                </div>
                            </div>


                            <div class="mb-4 pb-3">
                                <div class="mb-2 text-muted ">
                                    {{ __('fillable.DriverLicense') }}
                                </div>
                                <div class="font-weight-bold h4 ">
                                    {{ $tenant->type??'—' }}
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="mb-2 text-muted ">
                                    {{ __('fillable.OtherDocuments') }}
                                </div>
                                <div class="font-weight-bold h4 ">
                                    {{ $tenant->type??'—' }}
                                </div>
                            </div>
                        </div>


                        @include('admin.black-list-tenant._comments', ['comments' => $tenant->comments])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection