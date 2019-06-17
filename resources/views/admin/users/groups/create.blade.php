<div class="card border-0 shadow-sm">
    <div class="card-body">
        <form method="POST" action="{{ route('admin.users.groups.store') }}">
            @csrf

            <div class="form-group">
                <label for="name" class="col-form-label">{{ __('Название группы') }}</label>
                <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                @endif
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">{{__('button.Add')}}</button>
            </div>
        </form>
    </div>
</div>