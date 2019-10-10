@extends('layouts.app')

@section('content')

    @include('car-adverts._nav_button_cabinet', ['page' => ''])

    <div class="card rounded-0 border-0  shadow-sm row mx-md-0">
        <div class="card-header border-0 h5 py-4 d-flex">
            <div class="">
                <span class="font-weight-bold">{{ $carAdvert->carBrand->name }} {{  $carAdvert->carModel ? $carAdvert->carModel->name : '' }}</span>
                @canany(['manage-own-advert', 'manage-adverts'], $carAdvert)
                    &ndash;
                    <span class="badge @if($carAdvert->status == 'draft' || $carAdvert->status == 'moderation') badge-warning @elseif($carAdvert->status == 'closed') badge-danger @else badge-success @endif">{{ $carAdvert->statusesList()[$carAdvert->status] }}</span>
                @endcanany
            </div>
            <div class="ml-auto font-weight-bold text-right">
                <span id="priceCarAdvert">{{ $carAdvert->price_per_day }}</span>
                <span class="font-weight-light text-muted small">/ {{ $carAdvert->getTypeRental() }}</span>
            </div>
        </div>
        <div class="card-body">
            <div class="">
                @if ($carAdvert->isDraft())
                    @if ($carAdvert->reject_reason)
                        <div class="alert alert-danger">
                            {{ $carAdvert->reject_reason }}
                        </div>
                    @endif
                @endif
            </div>
            <div class="d-flex row flex-wrap flex-sm-row flex-column-reverse">
                <div class="col-md-4 col-12 pb-4">
                    <div class="favorite text-left mr-0 mb-3">
                        <div class="btn-group ">
                            @if($user && $user->hasInFavorites($carAdvert->id))
                                <form method="POST" action="{{ route('cabinet.favorites.remove', $carAdvert) }}" class="d-inline-block" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm bg-transparent border rounded-left"
                                            data-toggle="tooltip" data-placement="top" title="Удалил из закладок" style="border-radius: 0px"><i class="fas fa-heart text-danger"></i></button>
                                </form>
                            @else
                                <form method="POST" action="{{ route('cars.adverts.favorites', $carAdvert) }}" class="d-inline-block">
                                    @csrf
                                    <button type="submit" class="btn btn-sm bg-transparent border rounded-left"
                                            data-toggle="tooltip" data-placement="top" title="Добавить в закладки" style="border-radius: 0px"><i class="fal fa-heart "></i></button>
                                </form>
                            @endif
                                <button type="submit" class="btn btn-sm bg-transparent border-top border-bottom  "
                                        data-toggle="tooltip" data-placement="top" title="Оставить заметку" style="border-radius: 0px"><i class="far fa-edit text-black-50"></i></button>

                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" class="btn btn-sm bg-transparent border border-bottom  rounded-right"
                                            type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            data-toggle="tooltip" data-placement="top" title="Пожаловаться" style="border-radius: 0px"><i class="fas fa-ban  text-black-50"></i></button>
                                    <div class="dropdown-menu dropdown-menu-center animate slideIn shadow-md border-0" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                    </div>
                                </div>

                        </div>
                    </div>
                    @include('car-adverts.user', ['user' => $carAdvert->author, 'carAdvert' => $carAdvert])
                    <div class="character-car px-0 px-md-3">
                        <table class="table table-responsive-sm table-borderless table-sm">
                            <tr>
                                <td width="130px" class="pl-0 text-black-50">{{ __('Год выпуска') }}</td>
                                <th>{{ $carAdvert->carYear->name }}</th>
                            </tr>

                            @foreach($carAttributes as $key => $carAttribute)
                                @continue($key === 'Модель')
                                <tr>
                                    <td width="130px" class="pl-0 text-black-50">{{ $key }}</td>
                                    <td>{{ $carAttribute }} </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
                <div class="col-md-8 col-12">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="images mb-md-4 mb-2">
                                @if(count($carAdvert->photos))
                                    <a href="{{ Storage::disk('public')->url('car-adverts/original/'. $mainCarImage) }}" data-fancybox="images" class="main-photo mb-3 d-block overflow-hidden" style="max-height: 450px;">
                                        <img src="{{ Storage::disk('public')->url('car-adverts/large/'. $mainCarImage) }}" class="w-100" />
                                    </a>
                                @else
                                    <a href="{{ $mainCarImage }}" data-fancybox="images" class="main-photo mb-3 d-block overflow-hidden" style="max-height: 450px;">
                                        <img src="{{ $mainCarImage }}" class="h-100" />
                                    </a>
                                @endif

                                <div class="row mr-0">
                                    @foreach($carAdvert->photos as $photo)
                                        @continue($photo->type)
                                        <a href="{{ Storage::disk('public')->url('car-adverts/original/'. $photo->file) }}" data-fancybox="images" class="mb-2 col-4 col-md-2 pr-0 outline">
                                            <img src="{{ Storage::disk('public')->url('car-adverts/small/'. $photo->file) }}" class="w-100" />
                                        </a>
                                    @endforeach

                                    @can ('manage-own-advert', $carAdvert )
                                        <a class="mb-2 col-3 col-md-3 pr-0 outline text-black-50  text-center  text-decoration-none" href="{{ route('cabinet.adverts.photos', $carAdvert) }}">
                                            <div class="bg-light py-2 h-100" data-toggle="tooltip" data-placement="top" title="" data-original-title="Добавить фото" >
                                                <div class="d-flex align-items-center h-100">
                                                    <div class="flex-column w-100">
                                                        <div class="w-100"><i class="mt-1 fal fa-plus-circle fa-2x"></i><br /></div>
                                                        <div class="w-100"><span class="small">Осталось {{ $carAdvert->photosCount() }} фото</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endcan
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="d-flex row flex-wrap">
                <div class="col-md-4"></div>
                <div class="col-md-7">
                    <div class="description mb-4">
                        <div class="h4 font-weight-bold">{{ __('fillable.CommentSeller') }}</div>
                        <div class="description">
                            {!! nl2br(str_replace(" ", " &nbsp;", $carAdvert->description)) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
