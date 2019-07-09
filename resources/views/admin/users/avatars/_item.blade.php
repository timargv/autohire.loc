<div class="card rounded-0 border-0 ">
    <div class="card-body p-0">
        <table class="table table-borderless table-responsive-sm bg-white">
            <thead class="thead-light">
            <tr>
                <th width="60px">ID</th>
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
                    <td>
                        <img src="{{ $avatar !== null ? Storage::disk('public')->url('user/avatar/small/'. $avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">
                        <a href="{{ $avatar !== null ? Storage::disk('public')->url('user/avatar/original/'.$avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" target="_blank">open</a>
                    </td>
                    <td>
                        @if($avatar->author)
                            <a href="{{ route('admin.users.show', $avatar->author) }}">{{ $avatar->author->name }}</a>
                        @else
                            <span style="pointer-events: none; opacity: 0.4;">Автор удалил свою страницу</span>
                        @endif
                    </td>
                    <td>
                        @if ($avatar->isNotMatch())
                            <span class="badge badge-danger">{{ $statuses['not_match'] }}</span>
                        @elseif ($avatar->isModeration())
                            <span class="badge badge-warning">{{ $statuses['moderation'] }}</span>
                        @else
                            <span class="badge badge-success">{{ $statuses['active'] }}</span>
                        @endif
                    </td>
                    <td class="pr-0">
                        <div class="d-flex  justify-content-end">
                            <form method="POST" action="{{ route('admin.users.avatar.active', $avatar) }}" class="">
                                @csrf
                                <button class="btn btn-sm btn-link" data-toggle="tooltip" data-placement="top" title="{{ $statuses['active'] }}"><i class="fas fa-check text-primary"></i></button>
                            </form>
                            <form method="POST" action="{{ route('admin.users.avatar.not.match', $avatar) }}" class="">
                                @csrf
                                <button class="btn btn-sm btn-link" data-toggle="tooltip" data-placement="top" title="{{ $statuses['not_match'] }}"><i class="fas fa-ban text-danger"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>
