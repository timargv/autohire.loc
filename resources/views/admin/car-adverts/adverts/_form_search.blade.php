{{--  Фильтр  --}}
<div class="card mb-3">
    <div class="card-body">
        <form action="?" method="GET">
            <div class="row">
                <div class="col-sm-1">
                    <div class="form-group mb-3 mb-sm-0 mb-sm-0">
                        <input id="id" class="form-control form-control-sm" name="id" value="{{ request('id') }}" placeholder="ID">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group mb-3 mb-sm-0">
                        <input id="name" class="form-control form-control-sm" name="name" value="{{ request('name') }}" placeholder="{{__('fillable.CarBrands')}}">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group mb-3 mb-sm-0">
                        <input id="author" class="form-control form-control-sm" name="author" value="{{  request('author') }}" placeholder="{{ __('fillable.User') }}">
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group mb-3 mb-sm-0">
                        <select id="status" class="form-control form-control-sm" name="status">
                            <option value="">{{ __('fillable.Status') }}</option>
                            @foreach ($statuses as $value => $label)
                                <option value="{{ $value }}"{{ $value === request('status') ? ' selected' : '' }}>{{ $label }}</option>
                            @endforeach;
                        </select>
                    </div>
                </div>

                <div class="col-sm-2 pr-0">
                    <div class="form-group mb-0 mb-sm-0">
                        <button type="submit" class="btn btn-sm btn-primary">{{__('button.Search')}}</button>
                        <a href="?" class="btn btn-sm btn-outline-danger"><i class="fas fa-times"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
