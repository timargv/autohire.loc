@foreach ($messages as $message)
    <div class="box-footer box-comments">
        <div class="box-comment">
            <!-- User image -->
            @if($message->user->avatar && Storage::disk('public')->exists('user/avatar/medium/'.$message->user->avatar->image))
                @if($message->user->avatar->isModeration() || $message->user->avatar->isNotMatch())
                    <img src="{{ $message->user->avatar !== null ? Storage::disk('public')->url('user/avatar/blur/'.$message->user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="img-circle img-sm " alt="...">
                @else
                    <img src="{{ $message->user->avatar !== null ? Storage::disk('public')->url('user/avatar/medium/'.$message->user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="img-circle img-sm " alt="...">
                @endif
            @else
                <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="img-circle img-sm " alt="...">
            @endif

            <div class="comment-text">
                <span class="username">{{ $message->user->name }}
                    @if ($message->user->isAdmin())
                        <span class="badge bg-danger small">{{ __('fillable.Admin') }}</span>
                    @elseif($message->user->isModerator())
                        <span class="badge bg-warning">{{ __('fillable.Moderator') }}</span>
                    @endif
                    <span class="text-muted pull-right small">{{ $message->created_at->diffForHumans() }}</span>
                </span><!-- /.username -->

                {!! nl2br(e($message->message)) !!}
            </div>
            <!-- /.comment-text -->
        </div>
        <!-- /.box-comment -->
    </div>
@endforeach
