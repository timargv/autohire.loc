@if ($ticket->allowsMessages())
    <form method="POST" action="{{ route('admin.tickets.message', $ticket) }}">
        @csrf

        @if($user->avatar && Storage::disk('public')->exists('user/avatar/medium/'.$user->avatar->image))
            @if($user->avatar->isModeration() || $user->avatar->isNotMatch())
                <img src="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/blur/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="img-responsive img-circle img-sm " alt="...">
            @else
                <img src="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/medium/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="img-responsive img-circle img-sm " alt="...">
            @endif
        @else
            <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="img-responsive img-circle img-sm " alt="...">
        @endif

        <div class="img-push">
            <input name="message" type="text" class="form-control input-sm {{ $errors->has('message') ? ' is-invalid' : '' }}" placeholder="Ответить на сообщение в тикете" value="{{ old('message') }}" required>
            @if ($errors->has('message'))
                <span class="invalid-feedback"><strong>{{ $errors->first('message') }}</strong></span>
            @endif
        </div>

        <div class="form-group mb-0 d-none">
            <button type="submit" class="btn btn-primary">{{ __('button.SendMessage')}}</button>
        </div>
    </form>
@endif