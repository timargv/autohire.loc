<div class="card rounded-0 border-0 ">
    <div class="card-body p-0">
        <table class="table table-borderless table-responsive-sm bg-white">
            <thead class="thead-light">
            <tr>
                <th rowspan="5">
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
                        <td>{{ $car_advert->getMainImage() }}</td>
                        <td>{{ $car_advert->carBrand->name }}</td>
                        <td>{{ $car_advert->carYear->name }}</td>
                        <td class="pr-0">
                            <div class="d-flex flex-row-reverse justify-content-end">
                                <a href="{{ route('cabinet.adverts.edit', $car_advert) }}"><i class="fas fa-edit text-black-50"></i></a>
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