@extends('admin.layouts.app', ['page' => 'years'])

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Все года </h3>

            <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                    @include('admin.categories.car_years._search_form')
                </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            @include('admin.categories.car_years._item', ['years' => $years])
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            {{ $years->appends(request()->query())->links() }}
        </div>
    </div>
@endsection