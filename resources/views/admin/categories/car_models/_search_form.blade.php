{{--  Фильтр  --}}
<div class="card mb-3">
    <div class="card-body">
        <form action="?" method="GET">
            <div class="row">
                <div class="col-sm-1">
                    <div class="form-group mb-3 mb-md-0">
                        <input id="id" class="form-control form-control-sm" name="id" value="{{ request('id') }}" placeholder="ID">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-3 mb-md-0">
                        <input id="name" class="form-control form-control-sm" name="name" value="{{ request('name') }}" placeholder="{{__('fillable.CarModels')}}">
                    </div>
                </div>

                <div class="col-sm-2 pr-0">
                    <div class="form-group mb-3 mb-md-0">
                        <button type="submit" class="btn btn-sm btn-primary">{{__('button.Search')}}</button>
                        <a href="?" class="btn btn-sm btn-outline-danger"><i class="fas fa-times"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
