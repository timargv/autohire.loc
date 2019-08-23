@extends('admin.layouts.app', ['page' => 'years'])
@include('admin.categories.car_years._header_panel')


@section('content')
    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Все года </h3>

            <div class="box-tools">

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