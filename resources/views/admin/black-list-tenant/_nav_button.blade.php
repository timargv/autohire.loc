<p>
    <a href="{{ route('admin.black.list.tenants.create') }}" class="btn-sm btn btn-outline-primary"><i class="fal fa-plus mr-1"></i> Добавить</a>
    <a href="{{ route('admin.black.list.tenants.comments.index') }}" class="btn-sm btn btn-{{ $page == 'comments' ? 'primary' : 'outline-primary' }}"><i class="fal fa-comments mr-1"></i> {{ __('fillable.Comments') }} @if($countModerationTenantComments)<span class="badge badge-primary">{{ $countModerationTenantComments }}</span>@endif</a>
    <a href="{{ route('admin.black.list.tenants.photos.index') }}" class="btn-sm btn btn-{{ $page == 'photos' ? 'primary' : 'outline-primary' }}"><i class="fal fa-images mr-1"></i> {{ __('fillable.Photos') }} @if($countModerationTenantPhotos)<span class="badge badge-primary">{{ $countModerationTenantPhotos }}</span>@endif</a>
    <a href="{{ route('admin.black.list.tenants.create') }}" class="btn-sm btn btn-outline-primary"><i class="fal fa-file-alt mr-1"></i> {{ __('fillable.Documents') }}</a>
</p>