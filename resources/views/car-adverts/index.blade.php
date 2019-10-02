@extends('layouts.app')

@section('breadcrumbs', '')

@section('filter')
    @include('car-adverts._filter')
@stop

@section('content')
    <div class="row ">
        <div class="col-md-8 col-12 mb-3">
            <div class="row">
                @include('car-adverts.item', ['carAdvert' => $carAdverts, 'col_1' => true])
            </div>
            <div class="mt-4">
                {{ $carAdverts->links() }}
            </div>
        </div>
        <div class="col-md-4">
            @if (!empty($carBrands) || !empty($carModelsOrSeries) )
                <div class="bg-white shadow-sm p-3 mb-3 rounded">
                    <div class="brand-readme row clearfix overflow-hidden mx-0">
                        @if (!empty($carModelsOrSeries))
                            @foreach (array_chunk($carModelsOrSeries, 3) as $chunk)
                                <ul class="list-group list-unstyled col-md-6 mb-md-3">
                                    @foreach ($chunk as $current)
                                        <li class="list-item"><a class="" href="{{ route('cars.adverts.brand', $current->slug ? $current->slug : $current->id) }}">{{ $current->name }}</a></li>
                                    @endforeach
                                </ul>
                            @endforeach
                        @endif
                        @if (!empty($carBrands))
                            @foreach (array_chunk($carBrands, 3) as $chunk)
                                <ul class="list-group list-unstyled col-md-6 mb-md-3">
                                    @foreach ($chunk as $current)
                                        <li class="list-item"><a class="" href="{{ route('cars.adverts.brand', $current->slug ? $current->slug : $current->id) }}">{{ $current->name }}</a></li>
                                    @endforeach
                                </ul>
                            @endforeach
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="mb-2">
                            <div>Номер телефона</div>
                        </div>
                        <span class="h5 pb-1"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-none">
        @forelse($carAdverts as $carAdvert)
            <div  id="carAdvertSh" class="p-3 card rounded text-decoration-none">
                <div  class="carAdvertSh">
                    <div class="row no-gutters">
                        <div class="d-block col-md-10">
                            <a href="{{ route('cars.adverts.show', $carAdvert) }}" class="row text-decoration-none">
                                <div class="col-md-5">
                                    @if(count($carAdvert->photos))
                                        <img src="{{ Storage::disk('public')->url('car-adverts/large/'. $carAdvert->getMainPhoto($carAdvert->photos)) }}" class="card-img rounded" />
                                    @else
                                        <img src="{{ $carAdvert->getMainPhoto($carAdvert->photos) }}" class="card-img rounded-0" />
                                    @endif
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body p-0 pt-2">
                                        <div class="d-flex">
                                            <div class="card-title font-weight-bold text-dark">{{ $carAdvert->carBrand->name }} {{  $carAdvert->carModel ? $carAdvert->carModel->name : '' }}, {{ $carAdvert->carYear->name }} @if($user && $user->isAdmin()) <span class="badge badge-warning align-top mt-1">{{ $carAdvert->status }}</span> @endif</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="">
                                                    <div class="row mx-0 mb-3 text-muted">
                                                        @foreach ($carAdvert->values as $value)
                                                            <div class="col-6 px-0">{{ $value->value }} </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <p class="card-text text-muted mb-0 ">{{ $carAdvert->address }}</p>
                                                <p class="card-text"><small class="text-muted">{{ $carAdvert->updated_at->diffForHumans() }}</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 mt-3 mt-md-0">
                            <div class="d-flex align-items-end flex-md-column flex-row  h-100">
                                <div class="ml-md-auto text-left text-md-right my-auto my-md-0 w-50 w-md-100 font-weight-bold cursor-default " data-toggle="tooltip" data-placement="top" title="Тип Аренды">
                                    <span id="priceCarAdvert" style="font-size: 1rem;">{{ $carAdvert->price_per_day }}</span>
                                    <span class="font-weight-light text-muted small" >/ {{ $carAdvert->getTypeRental() }}</span>
                                </div>
                                <button type="button" class="btn-phone btn bg-indigo-lite mt-md-auto w-50 w-md-100 text-white rounded-lg mr-md-0"
                                        data-source="{{ route('cars.adverts.phone', $carAdvert) }}">
                                    <i class="fas fa-phone mr-2 d-inline-block d-md-none"></i>
                                    <span class=" d-md-inline-block">Позвонить</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty

            <div class="d-flex h-100">
                <div class="row justify-content-center align-self-center mx-auto h4 font-weight-light text-black-50">
                    Ничего не найдено
                </div>
            </div>
        @endforelse
    </div>
@endsection
