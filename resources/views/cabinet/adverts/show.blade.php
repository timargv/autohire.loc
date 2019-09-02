@extends('layouts.app')

@section('content')
    @include('cabinet.adverts._nav')
    @include('cabinet.adverts._nav_button', ['page' => ''])

    @can ('manage-adverts')
        @if ($carAdvert->isOnModeration() || $carAdvert->isActive())
        <div class="text-muted small">
          <span>{{ __('Панель модерации') }}</span>
        </div>
        @endif

        <div class="d-flex flex-row mb-3">
            @if ($carAdvert->isOnModeration() || $carAdvert->isActive())
                <a href="{{ route('admin.cars.adverts.reject', $carAdvert) }}" class="btn btn-danger mr-1">{{ __('button.Reject') }}</a>
            @endif

            @if ($carAdvert->isOnModeration())
                <form method="POST" action="{{ route('admin.cars.adverts.moderate', $carAdvert) }}" class="mr-1">
                    @csrf
                    <button class="btn btn-success">{{ __('button.Accept') }}</button>
                </form>
            @endif
        </div>
    @endcan

    @can ('manage-own-advert', $carAdvert )
        <div class="text-muted small">
          <span>Мое объявление</span>
        </div>
        <div class="d-flex flex-row mb-3">
            <a href="{{ route('cabinet.adverts.edit', $carAdvert) }}" class="btn btn-primary mr-1">{{ __('button.Edit') }}</a>
            <a href="{{ route('cabinet.adverts.photos', $carAdvert) }}" class="btn btn-primary mr-1">{{ __('button.AddPhotos') }}</a>

            @if ($carAdvert->isDraft() || $carAdvert->isClosed())
                <form method="POST" action="{{ route('cabinet.adverts.send', $carAdvert) }}" class="mr-1">
                    @csrf
                    <button class="btn btn-success">{{ __('button.Activate') }}</button>
                </form>
            @endif
            @if ($carAdvert->isActive())
                <form method="POST" action="{{ route('cabinet.adverts.close', $carAdvert) }}" class="mr-1">
                    @csrf
                    <button class="btn btn-success">{{ __('button.RentedOut') }}</button>
                </form>
            @endif

            <form method="POST" action="{{ route('cabinet.adverts.destroy', $carAdvert) }}" class="mr-1">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">{{ __('button.Delete') }}</button>
            </form>
        </div>
    @endcan


    @if (!count($carAdvert->photos))
        {{ session()->flash('error_alert', 'Добавьте Фотогорафию авто') }}
    @endif

    <div class="card rounded-0 border-0 shadow-sm">
        <div class="card-header border-0 h5 d-flex">
            <div class="">
                <span class="font-weight-bold">{{ $carAdvert->carBrand->name }} {{  $carAdvert->carModel ? $carAdvert->carModel->name : '' }}</span>

{{--                {{ dd($carAdvert->carBrand) }}--}}
                @canany(['manage-own-advert', 'manage-adverts'], $carAdvert)
                &ndash;
                <span class="badge @if($carAdvert->status == 'draft' || $carAdvert->status == 'moderation') badge-warning @elseif($carAdvert->status == 'closed') badge-danger @else badge-success @endif">{{ $carAdvert->statusesList()[$carAdvert->status] }}</span>
                @endcanany
            </div>
            <div class="ml-auto font-weight-bold">
                <span id="priceCarAdvert">{{ $carAdvert->price_per_day }}</span>
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
                <div class="col-md-3 col-12 pb-4">
                    <table class="table table-responsive-sm table-borderless table-sm">
                        <tr>
                            <td width="130px" class="pl-0 text-black-50">{{ __('Год выпуска') }}</td>
                            <th>{{ $carAdvert->carYear->name }}</th>
                        </tr>

                        @foreach($carAttributes as $carAttribute)
                            @continue($carAttribute->name === 'Модель')
                            <tr>
                                <td width="130px" class="pl-0 text-black-50">{{ $carAttribute->name }}</td>
                                <th>{{ $carAttribute->value }} </th>
                            </tr>
                        @endforeach

                    </table>
                </div>
                <div class="col-md-9 col-12">
                    <div class="row">
                        <div class="col-md-11 col-12">
                            <div class="images mb-md-4 mb-2">
                        @if(count($carAdvert->photos))
                            <a href="{{ Storage::disk('public')->url('car-adverts/original/'. $mainCarImage) }}" data-fancybox="images"  class="main-photo mb-3 d-block overflow-hidden" style="max-height: 450px;">
                                <img src="{{ Storage::disk('public')->url('car-adverts/large/'. $mainCarImage) }}" class="w-100" />
                            </a>
                        @else
                            <a href="{{ $mainCarImage }}" data-fancybox="images"  class="main-photo mb-3 d-block overflow-hidden" style="max-height: 450px;">
                                <img src="{{ $mainCarImage }}" class="h-100" />
                            </a>
                        @endif

                        <div class="row mr-0">
                            @foreach($carAdvert->photos as $photo)
                                @continue($photo->type)
                                <a href="{{ Storage::disk('public')->url('car-adverts/original/'. $photo->file) }}" data-fancybox="images" class="mb-2 col-6 col-md-2 pr-0 outline">
                                    <img src="{{ Storage::disk('public')->url('car-adverts/small/'. $photo->file) }}" class="w-100" />
                                </a>
                            @endforeach

                            @can ('manage-own-advert', $carAdvert )
                            <a class="mb-2 col-6 col-md-3 pr-0 outline text-black-50  text-center  text-decoration-none" href="{{ route('cabinet.adverts.photos', $carAdvert) }}">
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
                        <div class="col-md-1 col-12 mb-md-4 mb-2">
                            <div class="favorite text-md-center text-left mr-0 mb-2 mb-md-0">
                                @if($user && $user->hasInFavorites($carAdvert->id))
                                    <form method="POST" action="{{ route('cabinet.favorites.remove', $carAdvert) }}" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn  bg-transparent border border-bottom  rounded"
                                                data-toggle="tooltip" data-placement="left" title="Удалил из закладок" style="border-radius: 0px"><i class="fas fa-heart text-danger"></i></button>
                                    </form>
                                @else
                                    <form method="POST" action="{{ route('cars.adverts.favorites', $carAdvert) }}" class="d-inline-block">
                                        @csrf
                                        <button type="submit" class="btn  bg-transparent border border-bottom  rounded"
                                                data-toggle="tooltip" data-placement="left" title="Добавить в закладки" style="border-radius: 0px"><i class="fal fa-heart "></i></button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex row flex-wrap">
                <div class="col-md-3"></div>
                <div class="col-md-7">
                    <div class="description mb-4">
                        <div class="h4 font-weight-bold">{{ __('fillable.CommentSeller') }}</div>
                        <div class="description">
                            {{ $carAdvert->description }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
