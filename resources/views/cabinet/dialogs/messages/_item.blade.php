@foreach ($messages as $message)
    <div class="card mb-3
{{--        @if(!$message->isMessageOwn() && ($message->user->isAdmin() || $message->user->isModerator()))--}}
{{--            border-info--}}
{{--        @else--}}
{{--            border-0--}}
{{--        @endif--}}
{{--            w-md-75--}}
{{--        @if($message->isMessageOwn())--}}
{{--            ml-md-auto--}}
{{--        @else--}}
{{--            mr-md-auto--}}
{{--        @endif--}}
            ">

        <div class="card-body">
            {!! nl2br(e($message->message)) !!}
        </div>
        <div class="card-header border-0 text-right text-muted small">
            {{ $message->created_at->diffForHumans() }}
            <span class="pl-3">{{ $message->user->name }}</span>
        </div>
    </div>
@endforeach
