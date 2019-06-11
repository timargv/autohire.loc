<table class="table table-bordered table-responsive-sm">
    <thead>
    <tr>
        <th>ID</th>
        <th width="50px">Фото</th>
        <th>Имя</th>
        <th>Email</th>
        <th>{{__('fillable.Phone')}}</th>
        <th>Статус</th>
        <th>Роль</th>
    </tr>
    </thead>
    <tbody>

    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>
                <div class="w-100 position-relative">
                    @if($user->avatar)
                        <div class="position-absolute" style="top: -10px;left: -6px;">
                            @if ($user->avatar->isNotMatch())
                                <i class="fas fa-times-circle text-danger bg-white rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="{{ $user->avatar->statusAvatar()[$user->avatar->status] }}"></i>
                            @elseif ($user->avatar->isModeration())
                                <i class="fas fa-question-circle text-warning bg-dark rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="Фото на модерации"></i>
                            @else
                                <i class="fas fa-check-circle text-success bg-white rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="Фото Подтверждено"></i>
                            @endif
                        </div>
                    @endif
                    <img src="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/small/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">
                    <a href="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/small/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" target="_blank">open</a>
                </div>
            </td>
            <td><a href="{{ route('admin.users.show', $user) }}">{{ $user->name }}</a></td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->userPhoneChar($user) }}</td>
            <td>
                @if ($user->isWait())
                    <span class="badge badge-warning">{{ $user->statusList()[$user->status] }}</span>
                @endif
                @if ($user->isActive())
                    <span class="badge badge-primary">{{ $user->statusList()[$user->status] }}</span>
                @endif
            </td>
            <td>
                @if ($user->isAdmin())
                    <span class="badge badge-danger">{{ $user->rolesList()[$user->role] }}</span>
                @elseif ($user->isModerator())
                    <span class="badge badge-success">{{ $user->rolesList()[$user->role] }}</span>
                @else
                    <span class="badge badge-secondary">{{ $user->rolesList()[$user->role] }}</span>
                @endif
            </td>
        </tr>
    @endforeach

    </tbody>
</table>