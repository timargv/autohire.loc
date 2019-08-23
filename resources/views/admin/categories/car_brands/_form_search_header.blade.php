{{--  Фильтр  --}}
<form action="?" method="GET" class="navbar-form navbar-left" role="search">
    <div class="form-group">
        <input id="navbar-search-input" class="form-control " name="name" value="{{ request('name') }}" placeholder="{{ __('fillable.Search') .' '. trans_choice('fillable.CarBrand', 4)}}">
        {{--<button type="submit" class="btn  bg-gray color-palette">{{__('button.Search')}}</button>--}}
        {{--<a href="?" class="btn  bg-gray color-palette"><i class="fas fa-times"></i></a>--}}
    </div>
</form>

