@extends('layouts.app')


@section('content')
    <div class="row my-5">
        <div class="col-md-3 mb-3">
            filter
        </div>
        <div class="col-md-9 mb-3">
            @foreach($carAdverts as $carAdvert)
                <div id="carAdvertSh" class="carAdvertSh card border-0 rounded-0 ">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            @if(count($carAdvert->photos))
                                <img src="{{ Storage::disk('public')->url('car-adverts/large/'. $carAdvert->getMainPhoto($carAdvert->photos)) }}" class="card-img rounded-0" />
                            @else
                                <img src="{{ $carAdvert->getMainPhoto($carAdvert->photos) }}" class="card-img rounded-0" />
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="d-flex">
                                    <a href="{{ route('cars.adverts.show', $carAdvert) }}" class="card-title font-weight-bold">{{ $carAdvert->carBrand->name }} {{  $carAdvert->carModel ? $carAdvert->carModel->name : '' }}, {{ $carAdvert->carYear->name }}</a>
                                    <div class="ml-auto font-weight-bold">
                                        <span id="priceCarAdvert">{{ $carAdvert->price_per_day }}</span>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row mx-0 mb-3">
                                        @foreach ($carAdvert->values as $value)
                                            @continue($carAdvert->isCarAttributeModel($value))
                                            <div class="col-12 col-sm-6 px-0">{{ $value->value }} </div>
                                        @endforeach
                                    </div>
                                </div>
                                <p class="card-text text-muted mb-0">{{ $carAdvert->address }}</p>
                                <p class="card-text"><small class="text-muted">{{ $carAdvert->updated_at->diffForHumans() }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 pb-4 border-bottom mb-4"></div>
            @endforeach
            <div class="">
                {{ $carAdverts->links() }}
            </div>
        </div>
    </div>
    <div class="">
    </div>
@endsection
