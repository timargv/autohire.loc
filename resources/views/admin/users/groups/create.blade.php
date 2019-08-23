<div class="box box-solid">
    <div class="box-header with-border">
        Добавить группу
    </div>
    <div class="box-body">
        <form method="POST" action="{{ route('admin.users.groups.store') }}">
            @csrf

            <div class="form-group">
{{--                <label for="name" class="col-form-label">{{ __('Название группы') }}</label>--}}
                <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="{{ __('Название группы') }}" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                @endif
            </div>

            <div class="form-group mb-0">
                <button type="submit" class="btn btn-sm btn-outline-primary"><i class="fal fa-plus mr-1"></i> {{__('button.Add')}}</button>
            </div>
        </form>
    </div>
</div>