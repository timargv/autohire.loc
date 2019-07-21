@extends('layouts.app')

@section('content')
    @include('cabinet.adverts._nav')
    @include('cabinet.adverts._nav_button', ['page' => ''])

    <div class="card rounded-0 border-0 shadow-sm">
        <div class="card-header border-0 h5 d-flex">
            <div class=""><span class="font-weight-bold">{{ $carAdvert->carBrand->name .' '. $carAdvert->getCarAttributeModelValue($carAdvert->values) }}</span> 	&ndash;
                <a href="{{ route('cabinet.adverts.edit', $carAdvert) }}" class="small" data-toggle="tooltip" data-placement="top" title="{{ __('fillable.Edit') }}">{{ mb_strimwidth(__('fillable.Edit'), 0, 4, '.') }}</a></div>
            <div class="ml-auto font-weight-bold">
                <span id="priceCarAdvert">{{ $carAdvert->price_per_day }}</span>
            </div>
        </div>
        <div class="card-body">
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
                <div class="col-md-7 col-12">
                    <div class="images mb-4">
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

                                <a class="mb-2 col-6 col-md-3 pr-0 outline text-black-50  text-center  text-decoration-none" href="{{ route('cabinet.adverts.photos', $carAdvert) }}">
                                    <div class="bg-light py-2 h-100" data-toggle="tooltip" data-placement="top" title="" data-original-title="Добавить фото" >
                                        <i class="mt-1 fal fa-plus-circle fa-2x"></i><br />
                                        <span class="small">Осталось {{ $carAdvert->photosCount() }} фото</span>
                                    </div>
                                </a>
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
