{{--  Фильтр  --}}
<form action="?" method="GET" class="input-group input-group-sm " style="min-width: 250px">
    <thead class="thead-light">
    <tr>
        <th width="60px">
            <input id="id" class="form-control form-control-sm" name="id" value="{{ request('id') }}" placeholder="ID">
        </th>
        <th>
            <input id="name" class="form-control form-control-sm" name="name" value="{{ request('name') }}" placeholder="{{__('fillable.CarBrands')}}" style="min-width: 150px;">
        </th>
        <th>
        </th>
        <th>
            <input id="author" class="form-control form-control-sm" name="author" value="{{  request('author') }}" placeholder="{{ __('fillable.User') }}" style="min-width: 150px;">
        </th>
        <th>
            <select id="status" class="form-control form-control-sm" name="status"  style="min-width: 150px;">
                <option value="">{{ __('fillable.Status') }}</option>
                @foreach ($statuses as $value => $label)
                    <option value="{{ $value }}"{{ $value === request('status') ? ' selected' : '' }}>{{ $label }}</option>
                @endforeach;
            </select>
        </th>
        <th>
            <div class="form-group mb-0 mb-sm-0">
                <button type="submit" class="btn  bg-gray color-palette">{{__('button.Search')}}</button>
                <a href="?" class="btn  bg-gray color-palette"><i class="fas fa-times"></i></a>
            </div>
        </th>
        {{--                    <th width="40px"></th>--}}
    </tr>
    </thead>
</form>

