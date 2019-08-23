<div class="box box-solid">
    {{--        <div class="card-header">Фильтр</div>--}}
    <div class="box-body">
        <form action="?" method="GET">
            <div class="row">
                <div class="col-sm-1">
                    <div class="form-group mb-3 mb-md-0">
                        <input id="id" class="form-control form-control-sm" name="id" value="{{ request('id') }}" placeholder="ID">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group mb-3 mb-md-0">
                        <select id="status" class="form-control form-control-sm" name="status">
                            <option value="" class="text-muted" disabled selected>Выберите статус</option>
                            @foreach ($statuses as $value => $label)
                                <option value="{{ $value }}"{{ $value === request('status') ? ' selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group mb-3 mb-md-0">
                        <button type="submit" class="btn btn-md btn-primary">Найти</button>
                        <a href="?" class="btn btn-md btn-outline-danger"><i class="fas fa-times"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>