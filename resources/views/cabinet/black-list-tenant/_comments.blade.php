<div class="mb-3">
    <div class="mb-3 text-muted ">
        {{ __('fillable.Comments') }}
    </div>

    <ul class="list-unstyled">
        @foreach($comments as $comment)
            <li class="media mb-4 ">
                <img src="{{ $comment->author->avatar !== null ? Storage::disk('public')->url('user/avatar/small/'.$comment->author->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded mr-3" alt="..." width="50px">

                <div class="media-body">
                    <h6 class="mt-0 mb-2 font-weight-bold mt-1 w-100">{{ $comment->author->name }}</h6>
                    <p class="mb-2">{{ $comment->comment }}</p>
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