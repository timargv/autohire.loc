@section('search_header')
    @include('admin.categories.car_years._form_search_header')
@stop

@section('btnBlock')
    <a href="{{ route('admin.categories.car.years.create') }}" class="btn-sm btn bg-light-blue color-palette mr-3 float-left">
        <i class="fal fa-plus mr-1"></i>
        {{ __('button.Add') .' '. trans_choice('fillable.CarYears', 1) }}
    </a>
@stop