@extends('admin.layouts.app', ['page' => 'adverts'])

@section('search_header')
    @include('admin.car-adverts.adverts._form_search_header')
@stop

@section('content')
    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Все {{ __('fillable.Adverts') }} </h3>

            <div class="box-tools">
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding" style="min-height: 450px">
            @include('admin.car-adverts.adverts._item', $car_adverts)
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            {{ $car_adverts->appends(request()->query())->links() }}
        </div>
    </div>
@endsection