@extends('layouts.app')

@section('search')
    @include('layouts.partials._filter', ['carBRND' => 'true', 'route' => '?', 'height' => null])
@endsection

@section('content')
    <div class="row ">
        <div class="col-md-8 col-12 mb-3">
            <div class="row">
                @include('car-adverts.item', ['carAdvert' => $carAdverts, 'col_1' => true])
            </div>
            <div class="mt-4">
                {{ $carAdverts->appends(request()->all())->links() }}
            </div>
        </div>
        @if ($carBrands)
        <div class="col-md-4">
            <div class="bg-white shadow-sm p-3 mb-3 rounded">
                <div class="brand-readme row clearfix overflow-hidden mx-0">
                    @foreach (array_chunk($carBrands, 3) as $chunk)
                        <ul class="list-group list-unstyled col-md-6 mb-md-3">
                            @foreach ($chunk as $carBrand)
                                <li class="d-flex"><a class="mr-auto" href="{{ route('cars.adverts.index', array_merge(['adverts_path' => adverts_path($carBrand)], request()->all())) }}">{{ $carBrand->name }}</a> <span class="d-block">{{ $carBrandsCounts[$carBrand->id] ?? 0 }}</span></li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>
@endsection
