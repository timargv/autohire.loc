@section('btnBlock')
    <a href="{{ route('admin.categories.car.brands.create') }}" class="btn-sm btn bg-light-blue color-palette mr-3 float-left">
        <i class="fal fa-plus mr-1"></i>
        {{ __('button.Add') .' '. trans_choice('fillable.CarBrand', 2) }}
    </a>
@stop

@section('search_header')
    @include('admin.categories.car_brands._form_search_header')
@stop