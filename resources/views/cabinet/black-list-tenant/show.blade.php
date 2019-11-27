@extends('layouts.app')

@section('content')
    @include('cabinet.black-list-tenant._nav')
    @include('cabinet.black-list-tenant._nav_button', ['page' => ''])
    <a href="{{ route('cabinet.black.list.tenants.photos', $tenant) }}" class="mb-2 mb-md-3 btn-sm btn btn-primary"><i class="fal fa-images mr-1"></i> Добавить фото</a>



    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="row">

                <div class="col-md-3 mb-3 mb-md-5">
                    @if(count($tenant->photos))
                        <div class="w-100 position-relative mb-0">
                            @foreach($tenant->photos as $photo)
                                @continue(!$photo->isMain())
                                <div class="position-absolute" style="top: -10px;left: -6px;">
                                    @if ($photo->isNotMatch())
                                        <i class="fas fa-times-circle text-danger bg-white rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="{{ $photo->statusPhoto()[$photo->status] }}"></i>
                                    @elseif ($photo->isModeration())
                                        <i class="fas fa-question-circle text-warning bg-dark rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="Фото на модерации"></i>
                                    @else
                                        <i class="fas fa-check-circle text-success bg-white rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="Фото Подтверждено"></i>
                                    @endif
                                </div>

                                @if($photo->photo && Storage::disk('public')->exists('user/black-tenant/images/medium/'.$photo->photo))
                                    @if($photo->isModeration() || $photo->isNotMatch())
                                        <img src="{{ $photo->photo !== null ? Storage::disk('public')->url('user/black-tenant/images/blur/'.$photo->photo) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">
                                    @else
                                        <a href="{{ $photo->photo !== null ? Storage::disk('public')->url('user/black-tenant/images/original/'.$photo->photo) : 'https://vk.com/images/dquestion_app_widget_1_b.png' }}" data-fancybox="images" class="main-photo mb-3 d-block overflow-hidden" >
                                            <img src="{{ $photo->photo !== null ? Storage::disk('public')->url('user/black-tenant/images/medium/'.$photo->photo) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">
                                        </a>
                                    @endif
                                @else
                                    <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="rounded w-100 " alt="...">
                                @endif


                            @endforeach
                        </div>
                    @else
                        <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="rounded w-100 " alt="...">
                    @endif

                    <a href="{{ route('cabinet.black.list.tenants.photos', $tenant) }}" class="my-3 btn-md btn btn-outline-secondary d-block"><i class="fal fa-images mr-1"></i> Добавить фото</a>
                </div>

                <div class="col-md-9">
                    <div class="float-right mt-0">
                        @if($tenant->isActive())
                            <div><span class="badge badge-success">{{ $tenant->statusTenant()[$tenant->status] }}</span></div>
                        @elseif($tenant->isModeration())
                            <div><span class="badge badge-warning">{{ $tenant->statusTenant()[$tenant->status] }}</span></div>
                        @elseif($tenant->isNotMatch())
                            <div><span class="badge badge-danger">{{ $tenant->statusTenant()[$tenant->status] }}</span></div>
                        @endif
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

                        <div class="all-docs my-4 py-4 ">
                            <div class="mb-4 pb-3 ">
                                <div class="mb-2 text-muted ">
                                    {{ __('fillable.City') }}
                                </div>
                                <div class="font-weight-bold h4 ">
                                    {{ $tenant->city??'—' }}
                                </div>
                            </div>

                            <div class="mb-4 pb-3 d-none">
                                <div class="mb-2 text-muted ">
                                    {{ __('fillable.Passport') }}
                                </div>
                                <div class="font-weight-bold h4 ">
                                    {{ $tenant->type??'—' }}
                                </div>
                            </div>


                            <div class="mb-4 pb-3 d-none">
                                <div class="mb-2 text-muted ">
                                    {{ __('fillable.DriverLicense') }}
                                </div>
                                <div class="font-weight-bold h4 ">
                                    {{ $tenant->type??'—' }}
                                </div>
                            </div>

                            <div class="mb-3 d-none">
                                <div class="mb-2 text-muted ">
                                    {{ __('fillable.OtherDocuments') }}
                                </div>
                                <div class="font-weight-bold h4 ">
                                    {{ $tenant->type??'—' }}
                                </div>
                            </div>
                        </div>


                        @include('.cabinet.black-list-tenant._comments', ['comments' => $tenant->comments])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
