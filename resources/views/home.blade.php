@extends('layouts.app')

@section('breadcrumbs', '')

@section('filter')
    @include('car-adverts._filter')
@stop

@section('content')
    <div class="row">
        @include('car-adverts.item', ['carAdvert' => $carAdverts])
    </div>
    <div class="d-none card card-default mb-3 border-0 shadow-sm">
        <div class="card-header border-0 font-weight-bold text-muted">
            {{ __('Все Марки') }}
        </div>
        <div class="card-body pb-0 border-0">
            <div class="row">
                @foreach (array_chunk($carBrands, 3) as $chunk)
                    <div class="col-md-3">
                        <ul class="list-unstyled">
                            @foreach ($chunk as $current)
                                <li><a href="{{ route('cars.adverts.brand', $current->slug ? $current->slug : $current->id) }}">{{ $current->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
