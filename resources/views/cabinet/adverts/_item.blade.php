<div class="card rounded-0 border-0 ">
    <div class="card-body p-0">
        <table class="table table-borderless table-responsive-sm bg-white">
            <thead class="thead-light">
            <tr>
                <th colspan="5">
                    <div class="row">
                        <div class="col-6">Мои объявления</div>
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
                            <div class="w-100 position-relative">
                                <img src="{{ $car_advert->getMainPhoto($car_advert->photos) }}" class="rounded w-100 " alt="...">
                            </div>
                        </td>
                        <td>
                            <div class="font-weight-bold">
                                {{ $car_advert->carBrand->name }}<span class="text-muted font-weight-light">{{ $car_advert->getCarAttributeModelValue($car_advert->values) }}</span>
                            </div>
                            <div class="small">{{ $car_advert->carYear->name }}</div>
{{--                            @if($car_advert->values)--}}
{{--                                <div class="text-black-50">--}}
{{--                                    @foreach($car_advert->values as $value)--}}
{{--                                        {{ $value->value }}@if(!$loop->last), @endif--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                            @forelse($car_advert->attributes as $attribute)--}}
{{--                                {{ $attribute->name }}--}}
{{--                            @empty--}}

{{--                            @endforelse--}}
                        </td>
                        <td>{{ $car_advert->getTypeRental() }}</td>
                        <td>{{ $car_advert->price_per_day }} ₽</td>
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
                            <div class="w-100 p-5">
                                <div class="text-muted h5 mb-2">Сдавать  &mdash;  легко</div>
                                <div class="text-black-50 mb-3">
                                    Добавьте объявление, и его увидят тысячи потенциальных покупателей.
                                </div>
                                <div class="display-4">
                                    <a class="btn btn-success px-3" href="{{ route('cabinet.adverts.create') }}"><i class="far fa-plus mr-2"></i> {{ __('button.Add') .' '. __('fillable.Advert') }}</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>