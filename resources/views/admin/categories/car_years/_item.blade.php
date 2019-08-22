<table class="table table-hover table-responsive-sm bg-white">
    <thead class="thead-light">
    <tr>
        <th width="60px">ID</th>
        <th>{{ trans_choice('fillable.CarYears', 1) }}</th>
        <th width="250px">{{__('fillable.Function')}}</th>
        <th width="40px"></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($years as $year)
        <tr>
            <td>{{ $year->id }}</td>
            <td>{{ $year->name }}</td>
            <td>
                <div class="" style="margin: 0 -5px;">
                    <form class="float-left ml-2" method="POST" action="{{ route('admin.categories.car.year.first', $year) }}">
                        @csrf
                        <button class="btn btn-xs bg-gray color-palette"><i class="far fa-angle-double-up"></i></button>
                    </form>
                    <form class="float-left ml-2" method="POST" action="{{ route('admin.categories.car.year.up', $year) }}">
                        @csrf
                        <button class="btn btn-xs bg-gray color-palette"><i class="far fa-angle-up"></i></button>
                    </form>
                    <form class="float-left ml-2" method="POST" action="{{ route('admin.categories.car.year.down', $year) }}">
                        @csrf
                        <button class="btn btn-xs bg-gray color-palette"><i class="far fa-angle-down"></i></button>
                    </form>
                    <form class="float-left ml-2" method="POST" action="{{ route('admin.categories.car.year.last', $year) }}">
                        @csrf
                        <button class="btn btn-xs bg-gray color-palette"><i class="far fa-angle-double-down"></i></button>
                    </form>
                </div>
            </td>
            <td>
                <div class="d-flex flex-row">
                    <a href="{{ route('admin.categories.car.years.edit', $year) }}" class="btn btn-xs bg-transparent" data-toggle="tooltip" data-placement="top" title="{{ __('button.Edit') }}"><i class="fas fa-edit text-muted"></i></a>
                    <form method="POST" action="{{ route('admin.categories.car.years.destroy', $year) }}" class="mx-3">
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
