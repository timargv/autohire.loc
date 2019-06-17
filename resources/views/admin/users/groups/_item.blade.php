<table class="table table-bordered ">
    <thead>
    <tr>
        <th width="50px">ID</th>
        <th>Назвавние</th>
        <th></th>
    </tr>
    </thead>
    <tbody>

    @foreach ($groups as $group)
        <tr>
            <td>{{ $group->id }}</td>
            <td>{{ $group->name }}</td>
            <td>
                <div class="d-flex flex-row">
                    <a href="{{ route('admin.users.groups.edit', $group) }}" class="btn btn-outline-primary btn-sm mr-1"><i class="fal fa-edit"></i></a>
                    <form method="POST" action="{{ route('admin.users.groups.destroy', $group) }}" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-primary btn-sm"><i class="fal fa-trash"></i></button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>