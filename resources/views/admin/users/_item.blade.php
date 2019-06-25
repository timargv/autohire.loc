<div class="card rounded-0 border-0 ">
    <div class="card-body p-0">
        <table class="table table-borderless table-responsive-sm bg-white">
            <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th width="50px">Фото</th>
                <th>Имя</th>
                <th width="150px">Email</th>
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
                            @if($user->avatar && Storage::disk('public')->exists('user/avatar/medium/'.$user->avatar->image))
                                @if($user->avatar->isModeration() || $user->avatar->isNotMatch())
                                    <img src="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/blur/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">
                                @else
                                    <img src="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/medium/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">
                                @endif
                            @else
                                <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="rounded w-100 " alt="...">
                            @endif
                            <a href="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/small/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" target="_blank">open</a>
                        </div>
                    </td>
                    <td><a href="{{ route('admin.users.show', $user) }}">{{ $user->name }}</a></td>
                    <td width="150px">{{ $user->email }}</td>
                    <td width="170px">{{ $user->userPhoneChar($user) }}</td>
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
                            <span class="badge badge-danger font-weight-light">{{ $user->rolesList()[$user->role] }}</span>
                        @elseif ($user->isModerator())
                            <span class="badge badge-success font-weight-light">{{ $user->rolesList()[$user->role] }}</span>
                        @else
                            <span class="badge badge-secondary font-weight-light">{{ $user->rolesList()[$user->role] }}</span>
                        @endif

                        @if($groups = $user->groups)
                            @foreach($groups as $group)
                                <div><span class="badge badge-info text-white font-weight-light small">{{ $group->name }}</span></div>
                            @endforeach
                        @endif
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>