@foreach ($messages->orderBy('id')->with('user')->get() as $message)
    <div class="card mb-3  border-0">

        <div class="card-body">
            {!! nl2br(e($message->message)) !!}
        </div>
        <div class="card-header border-0 text-right text-muted small">
            {{ $message->created_at->diffForHumans() }} <span class="pl-3">{{ $message->user->name }}</span>
        </div>
    </div>
@endforeach
