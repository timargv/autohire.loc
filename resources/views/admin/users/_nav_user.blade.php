<p class="input-group-sm">
    <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-{{ $page === 'create' ? 'primary' : 'default' }} btn-sm mb-2 mb-md-0"><i class="fal fa-plus mr-1"></i> Добавить</a>
    <a href="{{ route('admin.users.avatar.home') }}" class="btn btn-sm btn-{{ $page === 'avatars' ? 'primary' : 'default' }} btn-sm mb-2 mb-md-0"><i class="fal fa-images mr-1"></i>Аватарки @if($countModerationAvatars)<span class="badge badge-primary">{{ $countModerationAvatars }}</span>@endif</a>
    <a href="{{ route('admin.users.groups.index') }}" class="btn btn-sm btn-{{ $page === 'groups' ? 'primary' : 'default' }} btn-sm mb-2 mb-md-0"><i class="fal fa-users-class mr-1"></i> {{ __('fillable.Groups') }}</a>
</p>