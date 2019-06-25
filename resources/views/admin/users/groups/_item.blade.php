<div class="card rounded-0 border-0 ">
    <div class="card-body p-0">
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
                            <a href="{{ route('admin.users.groups.edit', $group) }}" class="btn btn-sm btn-outline-light" data-toggle="tooltip" data-placement="top" title="{{ __('button.Edit') }}"><i class="fas fa-edit text-muted"></i></a>
                            <form method="POST" action="{{ route('admin.users.groups.destroy', $group) }}" class="mr-1">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-light" onclick="return confirm('Удалить Группу?')" data-toggle="tooltip" data-placement="top" title="{{ __('button.Delete') }}"><i class="fas fa-trash text-muted"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>