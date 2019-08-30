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
                    <span class="badge bg-orange">{{ $car_advert->statusesList()[$car_advert->status] }}</span>
                @elseif ($car_advert->isActive())
                    <span class="badge bg-green-active">{{ $car_advert->statusesList()[$car_advert->status] }}</span>
                @elseif ($car_advert->isClosed())
                    <span class="badge bg-red-active">{{ $car_advert->statusesList()[$car_advert->status] }}</span>
                @endif
            </td>
            <td>
                <div class="btn-group">
                    <button type="button" class="no-icon-dropdown-toggle py-0 btn btn-sm bg-transparent shadow-none text-center color-palette dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fal fa-ellipsis-v fa-2x" style="font-size: 1.4em;"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right border-0 shadow">

                        @if ($car_advert->isDraft() || $car_advert->isClosed())
                        <li>
                            <form method="POST" action="{{ route('admin.cars.adverts.send', $car_advert) }}" class="w-100">
                                @csrf
                                <button class="btn py-1 bg-transparent pl-2 w-100 text-left shadow-none text-light-blue"  style="text-align: left !important;">
                                    <i class="fal fa-check fa-1x px-2 text-gray" style="width: 23px;"></i> {{ __('button.Activate') }}
                                </button>
                            </form>
                        </li>
                        @endif

                        <li><a href="#" class=" pl-2"><i class="fal fa-pen fa-1x px-2 text-gray" style="width: 25px;"></i> Изменить</a></li>

                        @if ($car_advert->isOnModeration())
                        <li>
                            <form method="POST" action="{{ route('admin.cars.adverts.moderate', $car_advert) }}" class="mr-1">
                                @csrf
                                <button  class="btn py-1 bg-transparent pl-2 w-100 text-left shadow-none text-green"  style="text-align: left !important;">
                                    <i class="fal fa-check fa-1x px-2 text-gray" style="width: 25px;"></i>
                                    {{ __('button.Accept') }}
                                </button>
                            </form>
                        </li>
                        @endif

                        @if ($car_advert->isOnModeration() || $car_advert->isActive())
                        <li><a href="{{ route('admin.cars.adverts.reject', $car_advert) }}" class="text-red pl-2"><i class="fal fa-times fa-1x px-2 text-gray" style="width: 25px;"></i> Отклонить</a></li>
                        @endif

                        <li>
                            <form method="POST" action="{{ route('admin.cars.adverts.destroy', $car_advert) }}" class="w-100">
                                @csrf
                                @method('DELETE')
                                <button class="btn py-1 bg-transparent pl-2 w-100 text-left shadow-none" style="text-align: left !important;">
                                    <i class="fal fa-trash-alt fa-1x px-2 text-gray" style="width: 25px;"></i>
                                    {{ __('button.Delete') }}
                                </button>
                            </form>
                        </li>

                    </ul>
                </div>
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
