
<div class="box-body">
    <ul class="products-list product-list-in-box">
        @foreach ($messages as $message)
            <li class="item">
                <div class="product-img">
                    @if($message->user->avatar && Storage::disk('public')->exists('user/avatar/medium/'.$message->user->avatar->image))
                        @if($message->user->avatar->isModeration() || $message->user->avatar->isNotMatch())
                            <img src="{{ $message->user->avatar !== null ? Storage::disk('public')->url('user/avatar/blur/'.$message->user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="" alt="...">
                        @else
                            <img src="{{ $message->user->avatar !== null ? Storage::disk('public')->url('user/avatar/medium/'.$message->user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="" alt="...">
                        @endif
                    @else
                        <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="" alt="...">
                    @endif
                </div>
                <div class="product-info">
                    <div href="javascript:void(0)" class="product-title">
                        {{ $message->user->name }}
                        <div class="d-none">
                            @if ($message->user->isAdmin())
                                <span class="label label-danger ">{{ __('fillable.Admin') }}</span>
                            @elseif($message->user->isModerator())
                                <span class="label label-warning ">{{ __('fillable.Moderator') }}</span>
                            @endif
                        </div>
                        <span class="text-muted pull-right small">{{ $message->created_at->diffForHumans() }}</span>
                    </div>
                    <span class="product-description">
                {!! nl2br(e($message->message)) !!}
            </span>
                </div>
            </li>
            <!-- /.item -->
        @endforeach
    </ul>
</div>