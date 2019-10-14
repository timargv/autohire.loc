<div class="box-header with-border">
    <div class="user-block">
        @if($user->avatar && Storage::disk('public')->exists('user/avatar/medium/'.$user->avatar->image))
            @if($user->avatar->isModeration() || $user->avatar->isNotMatch())
                <img src="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/blur/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="img-circle " alt="...">
            @else
                <img src="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/medium/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="img-circle " alt="...">
            @endif
        @else
            <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="img-circle " alt="...">
        @endif
        <span class="username">
            <a href="#">
                {{ $user->name }}

            </a>
        </span>
        <span class="description">Отправил - {{ $date }}</span>
    </div>
    <!-- /.user-block -->
    <div class="box-tools">
        @if ($user->isAdmin())
            <span class="badge bg-danger">{{ __('fillable.Admin') }}</span>
        @elseif($user->isModerator())
            <span class="badge bg-warning">{{ __('fillable.Moderator') }}</span>
        @endif

        <button type="button" class="btn btn-box-tool d-none" data-toggle="tooltip" title="" data-original-title="Mark as read">
            <i class="fa fa-circle-o"></i></button>
        <button type="button" class="btn btn-box-tool d-none" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool d-none" data-widget="remove"><i class="fa fa-times"></i></button>
    </div>
    <!-- /.box-tools -->
</div>