<div class="box box-solid">
    <div class="box-header with-border">
        Группы
    </div>
    <div class="box-body no-padding">
        <table class="table table-borderless table-responsive-sm bg-white">
            <thead class="thead-light">
            <tr>
                <th width="50px">ID</th>
                <th>Назвавние</th>
                <th width="50px"></th>
            </tr>
            </thead>
            <tbody>

            @foreach ($groups as $group)
                <tr>
                    <td>{{ $group->id }}</td>
                    <td>{{ $group->name }}</td>
                    <td>
                        <div class="d-flex flex-row">
                            <a href="{{ route('admin.users.groups.edit', $group) }}" class="btn btn-xs bg-transparent" data-toggle="tooltip" data-placement="top" title="{{ __('button.Edit') }}"><i class="fas fa-edit text-muted"></i></a>
                            <form method="POST" action="{{ route('admin.users.groups.destroy', $group) }}" class="mx-3">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-xs bg-transparent" onclick="return confirm('Удалить Группу?')" data-toggle="tooltip" data-placement="top" title="{{ __('button.Delete') }}"><i class="fas fa-trash text-muted"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>