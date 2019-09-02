<div class="card rounded-0 border-0 ">
    <div class="card-body p-0">
        <table class="table table-borderless table-responsive-sm bg-white">
            <thead class="thead-light">
            <tr>
                <th colspan="5">
                    <div class="row">
                        <div class="col-6">{{ trans_choice('title.favorite', 1) }} <span class="font-weight-light">&mdash; {{ count($car_adverts) }}</span></div>
                        <div class="col-6">
                        </div>
                    </div>
                </th>
            </tr>
            </thead>
            <tbody>
                @forelse($car_adverts as $car_advert)
                    <tr>
                        <td width="65px">
                            <a href="{{ route('cars.adverts.show', $car_advert) }}" class="w-100 position-relative">
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
                                <a href="{{ route('cars.adverts.show', $car_advert) }}" class="font-weight-bold">
                                    {{ $car_advert->carBrand->name }} <span class="text-muted font-weight-light">{{ $car_advert->carModel->name }}</span>
                                </a>
                                <div class="small">{{ $car_advert->carYear->name }}</div>
                            </div>
                        </td>
                        <td>{{ $car_advert->getTypeRental() }}</td>
                        <td><span style="width: 100px; display:block;" id="priceCarAdvert" data-toggle="tooltip" data-placement="top" title="{{ __('fillable.PricePerDay').' в рублях' }}">{{ $car_advert->price_per_day }}</span></td>
                        <td class="pr-0" width="65px">
                            <div class="d-flex justify-content-end">
                                <form method="POST" action="{{ route('cabinet.favorites.remove', $car_advert) }}" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm bg-transparent border border-bottom  rounded"
                                            data-toggle="tooltip" data-placement="left" title="Удалил из закладок" style="border-radius: 0px"><i class="fas fa-heart text-danger"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>
                            <div class="w-100 p-5">
                                <div class="text-muted h5 mb-2">Объявления</div>
                                <div class="text-black-50 mb-3">
                                    Сохраняйте понравившиеся объявления, узнавайте
                                    об изменении цен.
                                </div>

                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
