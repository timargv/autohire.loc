<p class="input-group-sm">
    <a href="{{ route('admin.users.create') }}" class="btn btn-sm bg-{{ $page === 'create' ? 'light-blue-active' : 'gray' }}  color-palette mr-2 float-left"><i class="fal fa-plus mr-1"></i> Добавить</a>
    <a href="{{ route('admin.users.avatar.home') }}" class="btn btn-sm bg-{{ $page === 'avatars' ? 'light-blue-active' : 'gray' }}  color-palette mr-2 float-left"><i class="fal fa-images mr-1"></i>Аватарки @if($countModerationAvatars)<span class="badge badge-primary">{{ $countModerationAvatars }}</span>@endif</a>
    <a href="{{ route('admin.users.groups.index') }}" class="btn btn-sm bg-{{ $page === 'groups' ? 'light-blue-active' : 'gray' }}  color-palette mr-2 float-left"><i class="fal fa-users-class mr-1"></i> {{ __('fillable.Groups') }}</a>
</p>