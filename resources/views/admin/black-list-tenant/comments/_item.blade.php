<div class="mb-3">
    <div class="mb-3 text-muted ">
        {{ __('fillable.Comments') }}
    </div>

    <ul class="list-unstyled">
        @foreach($comments as $comment)
            <li class="media mb-4 ">

                @if($comment->author)
                    @if($comment->author->avatar && Storage::disk('public')->exists('user/avatar/medium/'.$comment->author->image))
                        @if($comment->author->avatar->isModeration() || $comment->author->avatar->isNotMatch())
                            <img src="{{ $comment->author->avatar !== null ? Storage::disk('public')->url('user/avatar/blur/'.$comment->author->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded mr-3 " alt="..." width="50px">
                        @else
                            <img src="{{ $comment->author->avatar !== null ? Storage::disk('public')->url('user/avatar/medium/'.$comment->author->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded mr-3 " alt="..." width="50px">
                        @endif
                    @else
                        <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="rounded mr-3 " alt="..." width="50px">
                    @endif
                @else
                    <img style=" pointer-events: none; opacity: 0.4;" src="https://vk.com/images/dquestion_app_widget_1_b.png" class="rounded mr-3 " alt="..." width="50px">
                @endif
                <div class="media-body">
                    <h6 class="mt-0 mb-2 font-weight-bold mt-1 w-100">
                        @if($comment->author)
                        <a href="{{ route('admin.users.show', $comment->author) }}">{{ $comment->author->name }}</a>
                        @else
                            <span style=" pointer-events: none; opacity: 0.4;">Автор удалил свою страницу</span>
                        @endif
                        <div class="float-right mt-0">
                            <div class="btn-group">
                                @if($comment->isActive())
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ $comment->statusComment()[$comment->status] }}
                                    </button>
                                @elseif($comment->isModeration())
                                    <button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ $comment->statusComment()[$comment->status] }}
                                    </button>
                                @elseif($comment->isNotMatch())
                                    <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ $comment->statusComment()[$comment->status] }}
                                    </button>
                                @endif

                                <div class="dropdown-menu dropdown-menu-right rounded-0">
                                    {{--                                <a href="{{ route('admin.users.edit', $user) }}" class="dropdown-item align-middle btn-sm px-3  rounded-0"><i class="fal fa-pen mr-2"></i> {{ __('button.Edit') }}</a>--}}

                                    <div class="form-group mb-0">
                                        <form method="POST" action="{{ route('admin.black.list.tenants.comment.active', $comment) }}" class="">
                                            @csrf
                                            <button class="dropdown-item btn-sm px-3 text-success rounded-0" data-toggle="tooltip" data-placement="top" title="{{ $comment->statusComment()[$comment->status] }}"><i class="fas fa-check mr-2"></i> {{ $comment->statusComment()['active'] }}</button>
                                        </form>

                                    </div>

                                    <div class="form-group mb-0">
                                        <form method="POST" action="{{ route('admin.black.list.tenants.comment.not.match', $comment) }}" class="">
                                            @csrf
                                            <button class="dropdown-item btn-sm px-3  rounded-0" data-toggle="tooltip" data-placement="top" title="{{ $comment->statusComment()[$comment->status] }}"><i class="fas fa-ban mr-2"></i> {{ $comment->statusComment()['not_match'] }}</button>
                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </h6>
                    <p class="mb-2" @if(!$comment->author)style=" pointer-events: none; opacity: 0.4;"@endif>{{ $comment->comment }}</p>
                    <div class="small text-muted">
                        <span>{{ $comment->created_at }} к арендатору <a href="{{ route('admin.black.list.tenants.show', $comment->blackList) }}">{{ $comment->blackList->name }}</a></span>
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