@extends('layouts.app')


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
        @if ($carBrands)
        <div class="col-md-4">
            <div class="bg-white shadow-sm p-3 mb-3 rounded">
                <div class="brand-readme row clearfix overflow-hidden mx-0">
                    @foreach (array_chunk($carBrands, 3) as $chunk)
                        <ul class="list-group list-unstyled col-md-6 mb-md-3">
                            @foreach ($chunk as $carBrand)
                                <li><a href="{{ route('cars.adverts.index', adverts_path($carBrand)) }}">{{ $carBrand->name }}</a></li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
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



@endsection
