<table class="table table-bordered table-responsive-sm">
    <thead>
    <tr>
        <th>ID</th>
        <th width="150px">Фото</th>
        <th>Имя</th>
        <th>Статус</th>
        <th></th>
    </tr>
    </thead>
    <tbody>


    @foreach ($avatars as $avatar)
        <tr>
            <td>{{ $avatar->id }}</td>
            <td><img src="{{ $avatar !== null ? Storage::disk('public')->url('user/avatar/small/'. $avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="..."></td>
            <td><a href="{{ route('admin.users.show', $avatar->author) }}">{{ $avatar->author->name }}</a></td>
            <td>
                @if ($avatar->isNotMatch())
                    <span class="badge badge-danger">{{ $statuses['not_match'] }}</span>
                @elseif ($avatar->isModeration())
                    <span class="badge badge-warning">{{ $statuses['moderation'] }}</span>
                @else
                    <span class="badge badge-success">{{ $statuses['active'] }}</span>
                @endif
            </td>
            <td>
                <div class="d-flex flex-row">
                    <form method="POST" action="{{ route('admin.users.avatar.not.match', $avatar) }}" class="mr-1">
                        @csrf
                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="{{ $statuses['not_match'] }}"><i class="fas fa-ban"></i></button>
                    </form>
                    <form method="POST" action="{{ route('admin.users.avatar.active', $avatar) }}" class="mr-1">
                        @csrf
                        <button class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="{{ $statuses['active'] }}"><i class="fas fa-check"></i></button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
