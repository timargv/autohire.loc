{{--  Фильтр  --}}
<form action="?" method="GET" class="input-group input-group-sm hidden-xs" style="min-width: 250px">
    <input id="name" class="form-control form-control-sm" name="name" value="{{ request('name') }}" placeholder="{{__('fillable.CarBrands')}}">
    <div class="input-group-btn">
        <button type="submit" class="btn btn-sm btn btn-default">{{__('button.Search')}}</button>
        <a href="?" class="btn btn-sm btn btn-default"><i class="fas fa-times"></i></a>
    </div>
</form>



