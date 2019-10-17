@foreach ($messages as $message)
    <div class="card border-0 shadow-sm mb-3 w-75 @if($message->isMessageOwn()) ml-auto @else mr-auto @endif">
        <div class="card-body">
            {!! nl2br(e($message->message)) !!}
        </div>
        <div class="card-header border-0 text-right text-muted small">
            {{ $message->created_at->diffForHumans() }}
            <span class="pl-3">{{ $message->user->name }}</span>
        </div>
    </div>
@endforeach
