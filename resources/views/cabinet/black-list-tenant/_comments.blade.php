<div class="mb-3">
    <div class="mb-3 text-muted ">
        {{ __('fillable.Comments') }}
    </div>

    <ul class="list-unstyled">
        @foreach($comments as $comment)
            <li class="media mb-4 ">
                @if($comment->author->avatar && Storage::disk('public')->exists('user/avatar/medium/'.$comment->author->image))
                    @if($comment->author->avatar->isModeration() || $comment->author->avatar->isNotMatch())
                        <img src="{{ $comment->author->avatar !== null ? Storage::disk('public')->url('user/avatar/blur/'.$comment->author->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded mr-3 " alt="..." width="50px">
                    @else
                        <img src="{{ $comment->author->avatar !== null ? Storage::disk('public')->url('user/avatar/medium/'.$comment->author->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded mr-3 " alt="..." width="50px">
                    @endif
                @else
                    <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="rounded mr-3 " alt="..." width="50px">
                @endif

                <div class="media-body">
                    <h6 class="mt-0 mb-2 font-weight-bold mt-1 w-100">{{ $comment->author->name }}</h6>
                    <p class="mb-2">
                        @can('manage-own-black-list-comment', $comment)
                            {{ $comment->comment }}
                        @else
                            <span class="text-muted">Комментарий в модерации</span>
                        @endcan
                    </p>
                    <div class="small text-muted">
                        <span>{{ $comment->created_at }}</span>
                        <span class="">
                            @if($comment->isActive())
                                <span class="badge badge-success">{{ $comment->statusComment()[$comment->status] }}</span>
                            @elseif($comment->isModeration())
                                <span class="badge badge-warning">{{ $comment->statusComment()[$comment->status] }}</span>
                            @elseif($comment->isNotMatch())
                                <span class="badge badge-danger">{{ $comment->statusComment()[$comment->status] }}</span>
                            @endif
                        </span>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

</div>