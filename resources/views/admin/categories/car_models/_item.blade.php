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
            @foreach ($models as $model)
                <tr>
                    <td>{{ $model->id }}</td>
                    <td>{{ $model->name }}</td>
                    <td>
                        <div class="" style="margin: 0 -5px;">
                            <form class="float-left ml-2" method="POST" action="{{ route('admin.categories.car.model.first', $model) }}">
                                @csrf
                                <button class="btn btn-xs bg-gray color-palette"><i class="far fa-angle-double-up"></i></button>
                            </form>
                            <form class="float-left ml-2" method="POST" action="{{ route('admin.categories.car.model.up', $model) }}">
                                @csrf
                                <button class="btn btn-xs bg-gray color-palette"><i class="far fa-angle-up"></i></button>
                            </form>
                            <form class="float-left ml-2" method="POST" action="{{ route('admin.categories.car.model.down', $model) }}">
                                @csrf
                                <button class="btn btn-xs bg-gray color-palette"><i class="far fa-angle-down"></i></button>
                            </form>
                            <form class="float-left ml-2" method="POST" action="{{ route('admin.categories.car.model.last', $model) }}">
                                @csrf
                                <button class="btn btn-xs bg-gray color-palette"><i class="far fa-angle-double-down"></i></button>
                            </form>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex flex-row">
                            <a href="{{ route('admin.categories.car.models.edit', $model) }}" class="btn btn-sm btn-outline-light" data-toggle="tooltip" data-placement="top" title="{{ __('button.Edit') }}"><i class="fas fa-edit text-muted"></i></a>
                            <form method="POST" action="{{ route('admin.categories.car.models.destroy', $model) }}" class="mr-1">
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