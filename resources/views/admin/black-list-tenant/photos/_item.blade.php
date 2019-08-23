<div class="box box-solid ">
    <div class="box-body p-0">
        <table class="table table-borderless table-responsive-sm bg-white">
            <thead class="thead-light">
            <tr>
                <th width="60px">ID</th>
                <th width="150px">Фото</th>
                <th width="400">Добавил</th>
                <th width="60px">Статус</th>
                <th width="60px">Тип</th>
                <th width="400">Тема</th>
                <th width="60px"></th>
            </tr>
            </thead>
            <tbody>


            @foreach ($photos as $key => $photo)

                <tr>
                    <td>{{ $photo->id }}</td>
                    <td>
                        <img src="{{ $photo !== null ? Storage::disk('public')->url('user/black-tenant/images/small/'. $photo->photo) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">
                        <a href="{{ $photo !== null ? Storage::disk('public')->url('user/black-tenant/images/original/'. $photo->photo) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" target="_blank">open</a>
                    </td>
                    <td>
                        @if($photo->author)
                            <a href="{{ route('admin.users.show', $photo->author) }}">{{ $photo->author->name }}</a>
                        @else
                            <span style="pointer-events: none; opacity: 0.4;">Автор удалил свою страницу</span>
                        @endif
                    </td>
                    <td>
                        @if ($photo->isNotMatch())
                            <span class="badge badge-danger">{{ $photo->statusPhoto()[$photo->status] }}</span>
                        @elseif ($photo->isModeration())
                            <span class="badge badge-warning">{{ $photo->statusPhoto()[$photo->status] }}</span>
                        @else
                            <span class="badge badge-success">{{ $photo->statusPhoto()[$photo->status] }}</span>
                        @endif
                    </td>
                    <td>
                        @if($photo->isMain())
                            <span class="badge badge-success">Основная фотография</span>
                        @else
                            -
                        @endif
                    </td>
                    <td>@if($photo->blackList)<a href="{{ route('admin.black.list.tenants.show', $photo->blackList) }}">{{ $photo->blackList->name }}</a> @else - @endif</td>
                    <td>
                        <div class="d-flex flex-row">
                            <form method="POST" action="{{ route('admin.black.list.tenants.photo.not.match', $photo) }}" class="mr-1">
                                @csrf
                                <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="{{ $statuses['not_match'] }}"><i class="fas fa-ban"></i></button>
                            </form>
                            <form method="POST" action="{{ route('admin.black.list.tenants.photo.active', $photo) }}" class="mr-1">
                                @csrf
                                <button class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="{{ $statuses['active'] }}"><i class="fas fa-check"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>