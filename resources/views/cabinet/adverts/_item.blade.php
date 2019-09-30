<div class="card rounded-0 border-0 ">
    <div class="card-body p-0">
        <table class="table table-borderless table-responsive-sm bg-white">
            <thead class="thead-light">
            <tr>
                <th colspan="6">
                    <div class="row">
                        <div class="col-6">Мои объявления <span class="font-weight-light">&mdash; {{ $countCarAdvert }}</span></div>
                        <div class="col-6">
                            @include('cabinet.adverts.forms._search_form')
                        </div>
                    </div>
                </th>
            </tr>
            </thead>
            <tbody>
                @forelse($car_adverts as $car_advert)
                    <tr>
                        <td width="65px">
                            <a href="{{ route('cabinet.adverts.show', $car_advert) }}" class="w-100 position-relative">
                                @if($mainPhoto = $car_advert->getMainPhoto($car_advert->photos))
                                    @if(Storage::disk('public')->exists('car-adverts/item/'. $mainPhoto))
                                        <img src="{{ Storage::disk('public')->url('car-adverts/item/'. $mainPhoto) }}" class="rounded w-100 " alt="..." style="width: 65px !important;">
                                    @else
                                        <img src="{{ $mainPhoto }}" class="rounded w-100 " alt="...">
                                    @endif
                                @endif
                            </a>
                        </td>
                        <td>
                            <div style="width: 150px; display:block;">
                                <a href="{{ route('cabinet.adverts.show', $car_advert) }}" class="font-weight-bold">
                                    {{ $car_advert->carBrand->name }} <span class="text-muted font-weight-light">{{ $car_advert->carModel ? $car_advert->carModel->name : '' }}</span>
                                </a>
                                <div class="small">{{ $car_advert->carYear->name }}</div>
                            </div>
                        </td>
                        <td>
                            <span class="badge @if($car_advert->status == 'draft' || $car_advert->status == 'moderation') badge-warning @elseif($car_advert->status == 'closed') badge-danger @else badge-success @endif">{{ $car_advert->statusesList()[$car_advert->status] }}</span>
                        </td>
                        <td>{{ $car_advert->getTypeRental() }}</td>
                        <td><span style="width: 100px; display:block;" id="priceCarAdvert" data-toggle="tooltip" data-placement="top" title="{{ __('fillable.PricePerDay').' в рублях' }}">{{ $car_advert->price_per_day }}</span></td>
                        <td class="pr-0" width="65px">
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-sm btn-link" href="{{ route('cabinet.adverts.edit', ['carAdvert' => $car_advert]) }}"><i class="fas fa-edit text-black-50"></i></a>
                                <form method="POST" action="{{ route('cabinet.adverts.destroy', $car_advert) }}" class="mr-1">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-link" data-toggle="tooltip" data-placement="top" title=""><i class="fas fa-trash text-black-50"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>
                            @if(request('name'))
                                <div class="w-100 p-5">
                                    <div class="text-muted h5 mb-2">Ничего не найдено</div>
                                    <div class="text-black-50 mb-3">
                                        Добавьте объявление, и его увидят тысячи потенциальных покупателей.
                                    </div>
                                    <div class="display-4">
                                        <a class="btn btn-success px-3" href="{{ route('cabinet.adverts.create') }}"><i class="far fa-plus mr-2"></i> {{ __('button.Add') .' '. __('fillable.Advert') }}</a>
                                    </div>
                                </div>
                                @else
                                <div class="w-100 p-5">
                                    <div class="text-muted h5 mb-2">Сдавать  &mdash;  легко</div>
                                    <div class="text-black-50 mb-3">
                                        Добавьте объявление, и его увидят тысячи потенциальных покупателей.
                                    </div>
                                    <div class="display-4">
                                        <a class="btn btn-success px-3" href="{{ route('cabinet.adverts.create') }}"><i class="far fa-plus mr-2"></i> {{ __('button.Add') .' '. __('fillable.Advert') }}</a>
                                    </div>
                                </div>

                            @endif

                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
