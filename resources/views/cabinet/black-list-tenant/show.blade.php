@extends('layouts.app')

@section('content')
    @include('cabinet.black-list-tenant._nav')
    @include('cabinet.black-list-tenant._nav_button')


    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="row">

                <div class="col-md-3">
                    @if(count($tenant->photos))
                        <div class="w-100 position-relative mb-5">
                            @foreach($tenant->photos as $photo)

                                <div class="position-absolute" style="top: -10px;left: -6px;">
                                    @if ($photo->isNotMatch())
                                        <i class="fas fa-times-circle text-danger bg-white rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="{{ $photo->statusPhoto()[$photo->status] }}"></i>
                                    @elseif ($photo->isModeration())
                                        <i class="fas fa-question-circle text-warning bg-dark rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="Фото на модерации"></i>
                                    @else
                                        <i class="fas fa-check-circle text-success bg-white rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="Фото Подтверждено"></i>
                                    @endif
                                </div>
                                @break($photo->is_manin != null)
                            @endforeach
                            <img src="{{ $photo->photo !== null ? Storage::disk('public')->url('user/black-tenant/images/medium/'.$photo->photo) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">
                            <a href="{{ $photo->photo !== null ? Storage::disk('public')->url('user/black-tenant/images/medium/'.$photo->photo) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" target="_blank">open</a>
                        </div>
                    @endif
                </div>

                <div class="col-md-9">
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


                        <div class="mb-3">
                            <div class="mb-3 text-muted ">
                                {{ __('fillable.Comments') }}
                            </div>

                            <ul class="list-unstyled">
                                @foreach($tenant->comments as $comment)
                                <li class="media mb-4 ">
                                    <img src="{{ $comment->author->avatar !== null ? Storage::disk('public')->url('user/avatar/small/'.$comment->author->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded-circle mr-3" alt="..." width="50px">


                                    <div class="media-body">
                                        <h6 class="mt-0 mb-2 font-weight-bold mt-1">{{ $comment->author->name }}</h6>
                                        <p class="mb-2">{{ $comment->comment }}</p>
                                        <div class="small text-muted">{{ $comment->created_at }}</div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection