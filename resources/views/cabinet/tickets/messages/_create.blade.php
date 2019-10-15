<form method="POST" action="{{ route('cabinet.tickets.message', $ticket) }}">
    @csrf

    <div class="form-group">
        <textarea class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }} " name="message" rows="3" required>{{ old('message') }}</textarea>
        @if ($errors->has('message'))
            <span class="invalid-feedback"><strong>{{ $errors->first('message') }}</strong></span>
        @endif
    </div>

    <div class="form-group mb-0">
        <button type="submit" class="btn bg-siran text-white"><i class="fad fa-paper-plane"></i> {{ __('button.SendMessage') }}</button>
    </div>
</form>