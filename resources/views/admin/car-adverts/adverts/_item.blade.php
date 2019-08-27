<table class="table table-hover table-responsive-sm bg-white">
    <thead class="thead-light">
    <tr>
        <th width="60px">ID</th>
        <th>{{__('fillable.CarBrands')}}</th>
        <th>{{__('Обновлено')}}</th>
        <th>{{__('fillable.Author')}}</th>
        <th>{{__('fillable.Status')}}</th>
        {{--                    <th width="40px"></th>--}}
    </tr>
    </thead>
    @include('admin.car-adverts.adverts._form_search')

    <tbody>
    @foreach ($car_adverts as $car_advert)
        <tr>
            <td>{{ $car_advert->id }}</td>
            <td>
                <div class="d-flex">
                    <a href="{{ route('cars.adverts.show', $car_advert) }}" target="_blank">{{ $car_advert->carBrand->name }}</a>
                    <a class="ml-auto text-muted" href="{{ route('cars.adverts.show', $car_advert) }}" target="_blank" data-toggle="tooltip" data-placement="left" title="Смотреть на сайте">
                        <i class="far fa-external-link"></i>
                    </a>
                </div>
            </td>
            <td>{{ $car_advert->updated_at->diffForHumans() }}</td>
            <td>{{ $car_advert->author->id }} - {{ $car_advert->author->name }}</td>

            <td>
                @if ($car_advert->isDraft())
                    <span class="badge bg-gray">{{ $car_advert->statusesList()[$car_advert->status] }}</span>
                @elseif ($car_advert->isOnModeration())
                    <span class="badge bg-light-blue">{{ $car_advert->statusesList()[$car_advert->status] }}</span>
                @elseif ($car_advert->isActive())
                    <span class="badge bg-light-blue">{{ $car_advert->statusesList()[$car_advert->status] }}</span>
                @elseif ($car_advert->isClosed())
                    <span class="badge bg-gray">{{ $car_advert->statusesList()[$car_advert->status] }}</span>
                @endif
            </td>
            <td>
                {{--                            <div class="d-flex flex-row">--}}
                {{--                                <a href="{{ route('admin.categories.car.years.edit', $year) }}" class="btn btn-sm btn-outline-light" data-toggle="tooltip" data-placement="top" title="{{ __('button.Edit') }}"><i class="fas fa-edit text-muted"></i></a>--}}
                {{--                                <form method="POST" action="{{ route('admin.categories.car.years.destroy', $year) }}" class="mr-1">--}}
                {{--                                    @csrf--}}
                {{--                                    @method('DELETE')--}}
                {{--                                    <button class="btn btn-sm btn-outline-light" onclick="return confirm('Удалить Категорию?')" data-toggle="tooltip" data-placement="top" title="{{ __('button.Delete') }}"><i class="fas fa-trash text-muted"></i></button>--}}
                {{--                                </form>--}}
                {{--                            </div>--}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
