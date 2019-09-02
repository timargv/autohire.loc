@extends('layouts.app')


@section('content')
    <div class="row my-5">
        <div class="col-md-3 mb-3">
            filter
        </div>
        <div class="col-md-9 mb-3">
            @foreach($carAdverts as $carAdvert)
                <div  id="carAdvertSh" class="p-3 card rounded text-decoration-none">
                    <div  class="carAdvertSh">
                        <div class="row no-gutters">
                            <div class="d-block col-md-11">
                                <a href="{{ route('cars.adverts.show', $carAdvert) }}" class="row text-decoration-none">
                                    <div class="col-md-4">
                                    @if(count($carAdvert->photos))
                                        <img src="{{ Storage::disk('public')->url('car-adverts/large/'. $carAdvert->getMainPhoto($carAdvert->photos)) }}" class="card-img rounded-0" />
                                    @else
                                        <img src="{{ $carAdvert->getMainPhoto($carAdvert->photos) }}" class="card-img rounded-0" />
                                    @endif
                                </div>
                                    <div class="col-md-8">
                                    <div class="card-body p-0 pt-2">
                                        <div class="d-flex pt-1">
                                            <div class="card-title font-weight-bold">{{ $carAdvert->carBrand->name }} {{  $carAdvert->carModel ? $carAdvert->carModel->name : '' }}, {{ $carAdvert->carYear->name }}</div>
                                            <div class="ml-auto font-weight-bold">
                                                <span id="priceCarAdvert">{{ $carAdvert->price_per_day }}</span>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="row mx-0 mb-3">
                                                @foreach ($carAdvert->values as $value)
                                                    <div class="col-12 col-sm-6 px-0">{{ $value->value }} </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <p class="card-text text-muted mb-0">{{ $carAdvert->address }}</p>
                                        <p class="card-text"><small class="text-muted">{{ $carAdvert->updated_at->diffForHumans() }}</small></p>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <div class="col-md-1 my-md-2 text-right position-relative pr-1" style="z-index: 99">
                                <div class="list_menu_item_car_advert">
                                    <div class="btn-group-vertical btn-group-sm" role="group">
                                        @if($user && $user->hasInFavorites($carAdvert->id))
                                            <form method="POST" action="{{ route('cabinet.favorites.remove', $carAdvert) }}" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm bg-transparent border border-bottom  rounded"
                                                        data-toggle="tooltip" data-placement="left" title="Удалил из закладок" style="border-radius: 0px"><i class="fas fa-heart text-danger"></i></button>
                                            </form>
                                        @else
                                            <form method="POST" action="{{ route('cars.adverts.favorites', $carAdvert) }}" class="d-inline-block">
                                                @csrf
                                                <button type="submit" class="btn btn-sm bg-transparent border border-bottom  rounded"
                                                        data-toggle="tooltip" data-placement="left" title="Добавить в закладки" style="border-radius: 0px"><i class="fal fa-heart "></i></button>
                                            </form>
                                        @endif
{{--                                        <button type="button" class="btn btn-sm bg-transparent border"><i class="fas fa-heart "></i></button>--}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="">
                {{ $carAdverts->links() }}
            </div>
        </div>
    </div>
    <div class="">
    </div>
@endsection
