@extends('layouts.app')

@section('breadcrumbs', '')

@section('search')
    @include('layouts.partials._filter', ['carBRND' => 'true', 'route' => route('cars.adverts.index'), 'height' => true])
@endsection

@section('content')
    <div class="row">
        @include('car-adverts.item', ['carAdvert' => $carAdverts])
    </div>
    <div class=" card card-default mb-3 border-0 shadow-sm">
        <div class="card-header border-0 font-weight-bold text-muted">
            {{ __('Все Марки') }}
        </div>
        <div class="card-body pb-0 border-0">
            <div class="row">
                @foreach (array_chunk($carBrands, 3) as $chunk)
                    <div class="col-6 col-md-3">
                        <ul class="list-unstyled">
                            @foreach ($chunk as $carBrand)
                                <li><a href="{{ route('cars.adverts.index', adverts_path($carBrand)) }}">{{ $carBrand->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
