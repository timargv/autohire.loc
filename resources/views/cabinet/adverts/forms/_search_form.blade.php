<div class="">
    <form action="?" method="GET" class="">
        <div class="d-flex justify-content-end">
            <div class="">
                <div class="form-group mb-3 mb-md-0">
                    <input id="name" class="form-control form-control-sm" name="name" value="{{ request('name') }}" placeholder="{{ __('fillable.Search').' '. __('fillable.Adverts') }}">
                </div>
            </div>
            <div class="ml-3">
                <div class="form-group mb-3 mb-md-0">
                    <button type="submit" class="btn btn-sm btn-primary">{{__('button.Search')}}</button>
{{--                    <a href="?" class="btn btn-sm btn-outline-danger"><i class="fas fa-times"></i></a>--}}
                </div>
            </div>
        </div>
    </form>
</div>