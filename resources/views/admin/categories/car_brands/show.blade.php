@extends('admin.layouts.app', ['page' => 'brands'])
@section('search_header')
    @include('admin.categories.car_brands._form_search_header')
@stop

@if ($carBrand->depthCarBrand($carBrand->id)->depth == 0)
    @section('TitlePage')
        @include('admin.layouts.partials.title_page', ['titlePage' => trans_choice('fillable.CarBrand', 1) . ' ' . $carBrand->name, 'subTitlePage' => null])
    @endsection
@else
    @section('TitlePage')
        @include('admin.layouts.partials.title_page', ['titlePage' => $carBrand->depthCarBrand($carBrand->id)->depth == 1 ?  trans_choice('fillable.CarModel', 1) : __('fillable.CarSeries'), 'subTitlePage' => null])
    @endsection
@endif

@section('content')

   <div class="box box-solid">
       <div class="box-header with-border">
           @if ($carBrand->depthCarBrand($carBrand->id)->depth == 0)
               <h3 class="box-title">Марка</h3>
           @else
               <h3 class="box-title">{{ $carBrand->depthCarBrand($carBrand->id)->depth == 1 ?  __('fillable.CarModel') : __('fillable.CarSeries') }} </h3>
           @endif

           <div class="box-tools">
               <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
               </div>
           </div>
       </div>
       <!-- /.box-header -->
       <div class="box-body table-responsive no-padding">
           <table class="table table-bordered bg-white table-responsive-sm">
               <tbody>
               <tr>
                   <th width="150px">{{ __('fillable.Title') }}</th>
                   <td>{{ $carBrand->name }}</td>
               </tr>

               <tr>
                   <th width="200px">{{ __('fillable.TitleRu') }}</th>
                   <td>{{ $carBrand->name_ru }}</td>
               </tr>

               <tr>
                   <th width="150px">{{ __('fillable.Slug') }}</th>
                   <td>{{ $carBrand->slug }}</td>
               </tr>

               <tr>
                   <th width="150px">{{ __('fillable.Status') }}</th>
                   <td>{{ $carBrand->status }}</td>
               </tr>

               <tr>
                   <th width="150px">{{ __('fillable.Author') }}</th>
                   <td>{{ $carBrand->author->name }}</td>
               </tr>
               </tbody>
           </table>
       </div>
       <!-- /.box-body -->

   </div>

   <div class="box box-solid">
       <div class="box-header with-border">
           <h3 class="box-title">
               Все {{ $carBrand->depthCarBrand($carBrand->id)->depth == 1 ? trans_choice('fillable.CarSeries', 2) : trans_choice('fillable.CarModels', 2) }}
           </h3>

           <div class="box-tools">
               <div class="btn-group ">
                   <a href="{{ route('admin.categories.car.brands.create', $carBrand) }}" class="btn-sm btn bg-gray color-palette">
                       <i class="fal fa-plus mr-1"></i>
                       {{ $carBrand->depthCarBrand($carBrand->id)->depth == 1 ? __('button.Add') .' '. trans_choice('fillable.CarSeries', 10) : __('button.Add') .' '. __('fillable.CarModel') }}
                   </a>
               </div>
           </div>
       </div>
       <!-- /.box-header -->
       <div class="box-body table-responsive no-padding">
           @if (!$carModelsOrSeries)
               <div class="text-center lead pb-5 font-weight-light text-muted">
                   {{ __('text.NoEntries') }}
               </div>
           @else
               @include('.admin.categories.car_brands.models._item', ['carModels' => $carModelsOrSeries, 'carBrandDepth' => $carBrand->depthCarBrand($carBrand->id)->depth])
           @endif
       </div>
       <!-- /.box-body -->
       @if ($carModelsOrSeries)
       <div class="box-footer">
       </div>
       @endif
   </div>

{{--    {{ $tenants->appends(request()->query())->links() }}--}}
@endsection