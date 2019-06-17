<p>
    <a href="{{ route('admin.users.create') }}" class="btn btn-{{ $page === 'create' ? 'primary' : 'outline-primary' }} btn-sm mb-2 mb-md-0"><i class="fal fa-plus mr-1"></i> Добавить</a>
    <a href="{{ route('admin.users.avatar.home') }}" class="btn btn-{{ $page === 'avatars' ? 'primary' : 'outline-primary' }} btn-sm mb-2 mb-md-0"><i class="fal fa-images mr-1"></i>Аватарки @if($countModerationPhotos)<span class="badge badge-primary">{{ $countModerationPhotos }}</span>@endif</a>
    <a href="{{ route('admin.users.groups.index') }}" class="btn btn-{{ $page === 'groups' ? 'primary' : 'outline-primary' }} btn-sm mb-2 mb-md-0"><i class="fal fa-users-class mr-1"></i> {{ __('fillable.Groups') }}</a>
</p>