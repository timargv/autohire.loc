@extends('admin.layouts.app', ['page' => 'brands'])

@section('btnBlock')
    <a href="{{ route('admin.categories.car.brands.create') }}" class="btn-sm btn bg-light-blue color-palette mr-3 float-left">
        <i class="fal fa-plus mr-1"></i>
        {{ __('button.Add') .' '. trans_choice('fillable.CarBrand', 2) }}
    </a>
@stop


@section('content')
    <div class="box box-solid">
        <div class="box-header with-border">
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