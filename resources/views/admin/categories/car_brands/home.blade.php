@extends('admin.layouts.app', ['page' => 'brands'])


@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Все Марки </h3>

            <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                    @include('admin.categories.car_brands._search_form')

                </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            @include('admin.categories.car_brands._item', ['carBrands' => $carBrands])
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            {{ $carBrands->appends(request()->query())->links() }}
        </div>
    </div>
@endsection