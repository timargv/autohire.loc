<div class="card rounded-0 border-0 ">
    <div class="card-body p-0">
        <table class="table table-borderless table-responsive-sm bg-white">
            <thead class="thead-light">
            <tr>
                <th width="70px">ID</th>
                <th>{{__('fillable.CarModels')}}</th>
                <th width="250px">{{__('fillable.Function')}}</th>
                <th width="40px"></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($carModels as $carModel)
                <tr>
                    <td>{{ $carModel->id }}</td>
                    <td><a href="{{ route('admin.categories.car.brands.model.show', [$carBrand, $carModel]) }}">{{ $carModel->name }}</a></td>
                    <td>
                        <div class="" style="margin: 0 -5px;">
                            <form class="float-left ml-2" method="POST" action="{{ route('admin.categories.car.brand.first', $carModel) }}">
                                @csrf
                                <button class="btn btn-xs bg-gray color-palette"><i class="far fa-angle-double-up"></i></button>
                            </form>
                            <form class="float-left ml-2" method="POST" action="{{ route('admin.categories.car.brand.up', $carModel) }}">
                                @csrf
                                <button class="btn btn-xs bg-gray color-palette"><i class="far fa-angle-up"></i></button>
                            </form>
                            <form class="float-left ml-2" method="POST" action="{{ route('admin.categories.car.brand.down', $carModel) }}">
                                @csrf
                                <button class="btn btn-xs bg-gray color-palette"><i class="far fa-angle-down"></i></button>
                            </form>
                            <form class="float-left ml-2" method="POST" action="{{ route('admin.categories.car.brand.last', $carModel) }}">
                                @csrf
                                <button class="btn btn-xs bg-gray color-palette"><i class="far fa-angle-double-down"></i></button>
                            </form>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-row">
                            <a href="{{ route('admin.categories.car.brands.edit', $carModel) }}" class="btn btn-sm btn-outline-light" data-toggle="tooltip" data-placement="top" title="{{ __('button.Edit') }}"><i class="fas fa-edit text-muted"></i></a>
                            <form method="POST" action="{{ route('admin.categories.car.brands.destroy', $carModel) }}" class="mr-1">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-light" onclick="return confirm('Удалить Категорию?')" data-toggle="tooltip" data-placement="top" title="{{ __('button.Delete') }}"><i class="fas fa-trash text-muted"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>