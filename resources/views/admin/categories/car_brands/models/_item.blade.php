<table class="table table-borderless table-responsive-sm bg-white">
    <thead class="thead-light">
    <tr>
        <th width="70px">ID</th>
        <th>{{$carBrandDepth == 1 ? trans_choice('fillable.CarSeries', 1) : __('fillable.CarModel')}}</th>
        <th width="250px">{{__('fillable.Function')}}</th>
        <th width="40px"></th>
    </tr>
    </thead>
    <tbody>

    @foreach($carModels as $carBrand)

        <tr>
            <td>{{ $carBrand->id }}</td>
            @if ($carBrandDepth == 1)
                <td>{{ $carBrand->name }}</td>
            @else
                <td><a href="{{ route('admin.categories.car.brands.show', $carBrand) }}">{{ $carBrand->name }}</a></td>
            @endif
            <td>
                <div class="" style="margin: 0 -5px;">
                    <form class="float-left ml-2" method="POST" action="{{ route('admin.categories.car.brand.first', $carBrand) }}">
                        @csrf
                        <button class="btn btn-xs bg-gray color-palette"><i class="far fa-angle-double-up"></i></button>
                    </form>
                    <form class="float-left ml-2" method="POST" action="{{ route('admin.categories.car.brand.up', $carBrand) }}">
                        @csrf
                        <button class="btn btn-xs bg-gray color-palette"><i class="far fa-angle-up"></i></button>
                    </form>
                    <form class="float-left ml-2" method="POST" action="{{ route('admin.categories.car.brand.down', $carBrand) }}">
                        @csrf
                        <button class="btn btn-xs bg-gray color-palette"><i class="far fa-angle-down"></i></button>
                    </form>
                    <form class="float-left ml-2" method="POST" action="{{ route('admin.categories.car.brand.last', $carBrand) }}">
                        @csrf
                        <button class="btn btn-xs bg-gray color-palette"><i class="far fa-angle-double-down"></i></button>
                    </form>
                </div>
            </td>
            <td>
                <div class="d-flex flex-row">
                    <a href="{{ route('admin.categories.car.brands.edit', $carBrand) }}" class="btn btn-xs bg-transparent" data-toggle="tooltip" data-placement="top" title="{{ __('button.Edit') }}"><i class="fas fa-edit text-muted"></i></a>
                    <form method="POST" action="{{ route('admin.categories.car.brands.destroy', $carBrand) }}" class="mx-3">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-xs bg-transparent" onclick="return confirm('Удалить Категорию?')" data-toggle="tooltip" data-placement="top" title="{{ __('button.Delete') }}"><i class="fas fa-trash text-muted"></i></button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
