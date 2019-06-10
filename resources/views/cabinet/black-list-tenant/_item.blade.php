

@foreach ($tenants as $tenant)
{{--    <tr>--}}
{{--        <td>{{ $tenant->id }}</td>--}}
{{--        <td>--}}
{{--            <div class="w-100 position-relative">--}}
{{--                @if($item->photo)--}}
{{--                    <div class="position-absolute" style="top: -10px;left: -6px;">--}}
{{--                        @if ($user->avatar->isNotMatch())--}}
{{--                            <i class="fas fa-times-circle text-danger bg-white rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="{{ $user->avatar->statusAvatar()[$user->avatar->status] }}"></i>--}}
{{--                        @elseif ($user->avatar->isModeration())--}}
{{--                            <i class="fas fa-question-circle text-warning bg-dark rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="Фото на модерации"></i>--}}
{{--                        @else--}}
{{--                            <i class="fas fa-check-circle text-success bg-white rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="Фото Подтверждено"></i>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--                <img src="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/small/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">--}}
{{--                <a href="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/small/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" target="_blank">open</a>--}}
{{--            </div>--}}
{{--        </td>--}}
{{--        <td><a href="{{ route('admin.users.show', $user) }}">{{ $user->name }}</a></td>--}}
{{--        <td>{{ $user->email }}</td>--}}
{{--        <td>{{ $user->userPhoneChar($user) }}</td>--}}
{{--        <td>--}}
{{--            @if ($user->isWait())--}}
{{--                <span class="badge badge-warning">Waiting</span>--}}
{{--            @endif--}}
{{--            @if ($user->isActive())--}}
{{--                <span class="badge badge-primary">Active</span>--}}
{{--            @endif--}}
{{--        </td>--}}
{{--        <td>--}}
{{--            @if ($user->isAdmin())--}}
{{--                <span class="badge badge-danger">Admin</span>--}}
{{--            @elseif ($user->isModerator())--}}
{{--                <span class="badge badge-success">Moderator</span>--}}
{{--            @else--}}
{{--                <span class="badge badge-secondary">User</span>--}}
{{--            @endif--}}
{{--        </td>--}}
{{--    </tr>--}}



    <tr>
        <td>{{ $tenant->id }}</td>
        <td>
            @if(count($tenant->photos))
            <div class="w-100 position-relative">
                @foreach($tenant->photos as $photo)

                    <div class="position-absolute" style="top: -10px;left: -6px;">
                        @if ($photo->isNotMatch())
                            <i class="fas fa-times-circle text-danger bg-white rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="{{ $photo->statusPhoto()[$photo->status] }}"></i>
                        @elseif ($photo->isModeration())
                            <i class="fas fa-question-circle text-warning bg-dark rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="Фото на модерации"></i>
                        @else
                            <i class="fas fa-check-circle text-success bg-white rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="Фото Подтверждено"></i>
                        @endif
                    </div>
                    @break($photo->is_manin != null)
                @endforeach
                    <img src="{{ $photo->photo !== null ? Storage::disk('public')->url('user/black-tenant/images/small/'.$photo->photo) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">
                    <a href="{{ $photo->photo !== null ? Storage::disk('public')->url('user/black-tenant/images/small/'.$photo->photo) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" target="_blank">open</a>

            </div>
            @endif

        </td>
{{--        <td>--}}
{{--            <div class="w-100 position-relative">--}}
{{--                @if($item->photo)--}}
{{--                    <div class="position-absolute" style="top: -10px;left: -6px;">--}}
{{--                        @if ($tenant->photo->isNotMatch())--}}
{{--                            <i class="fas fa-times-circle text-danger bg-white rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="{{ $user->avatar->statusAvatar()[$user->avatar->status] }}"></i>--}}
{{--                        @elseif ($user->avatar->isModeration())--}}
{{--                            <i class="fas fa-question-circle text-warning bg-dark rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="Фото на модерации"></i>--}}
{{--                        @else--}}
{{--                            <i class="fas fa-check-circle text-success bg-white rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="Фото Подтверждено"></i>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--                <img src="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/small/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">--}}
{{--                <a href="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/small/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" target="_blank">open</a>--}}
{{--            </div>--}}
{{--        </td>--}}
        <td><a href="#">{{ $tenant->name }}</a>
            @foreach($tenant->comments as $comment)
                <div class="text-muted mt-1 mb-2">{{ $comment->comment }}</div>
                @break($loop->first)
            @endforeach
        </td>
        <td><a href="#">{{ $tenant->city }}</a></td>
        <td><a href="{{ route('profile.show', $tenant->author) }}">{{ $tenant->author->name }}</a></td>
        <td>
            @if($tenant->isActive())
                <div><span class="badge badge-success">{{ $tenant->statusTenant()[$tenant->status] }}</span></div>
            @elseif($tenant->isModeration())
                <div><span class="badge badge-warning">{{ $tenant->statusTenant()[$tenant->status] }}</span></div>
            @elseif($tenant->isNotMatch())
                <div><span class="badge badge-danger">{{ $tenant->statusTenant()[$tenant->status] }}</span></div>
            @endif
        </td>

    </tr>
@endforeach