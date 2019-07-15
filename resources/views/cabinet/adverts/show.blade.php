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
                        @foreach($carAdvert->values as $value)
                            @php
                                $attributeName = $value->getCarAttribute($value->car_attribute_id)->name;
                            @endphp

                            @continue($attributeName === 'Модель')
                            <tr>
                                <td width="130px" class="pl-0 text-black-50">{{ $attributeName }}</td>
                                <th>{{ $value->value }} @if($attributeName === 'Объем') л. @endif</th>
                            </tr>
                        @endforeach

                    </table>
                </div>
                <div class="col-md-7 col-12">
                    <div class="images mb-4">
{{--                        @foreach($carAdvert->photos as $photo)--}}
{{--                            {{ $photo }}--}}
{{--                        @endforeach--}}
                            <a href="https://avatars.mds.yandex.net/get-autoru-vos/2141545/d6c8ada114d07f95eb39f8aa3f6563ef/1200x900n" data-fancybox="images"  class="main-photo mb-3 d-block">
                                <img src="https://avatars.mds.yandex.net/get-autoru-vos/2141545/d6c8ada114d07f95eb39f8aa3f6563ef/1200x900n" class="w-100" />
                            </a>

                            <div class="row mr-0">
                                <a href="https://source.unsplash.com/93Cn9VXuFIM/1500x1000" data-fancybox="images" class="mb-2 col-6 col-md-2 pr-0 outline">
                                    <img src="https://source.unsplash.com/93Cn9VXuFIM/180x120" class="w-100" />
                                </a>

                                <a href="https://source.unsplash.com/random/1500x1000" data-fancybox="images" class="mb-2 col-6 col-md-2 pr-0">
                                    <img src="https://source.unsplash.com/random/180x120"  class="w-100" />
                                </a>

                                <a href="https://source.unsplash.com/6SLdXXVYQpo/1500x1000" data-fancybox="images" class="mb-2 col-6 col-md-2 pr-0">
                                    <img src="https://source.unsplash.com/6SLdXXVYQpo/180x120" class="w-100" />
                                </a>

                                <a href="https://source.unsplash.com/t7_nn4rHsRA/1500x1000" data-fancybox="images" class="mb-2 col-6 col-md-2 pr-0">
                                    <img src="https://source.unsplash.com/t7_nn4rHsRA/180x120" class="w-100" />
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