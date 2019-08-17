@include ('admin.layouts._sidebar', ['page' => 'categories'])

<p>
    <div class="btn-group mr-2 my-2">
        <a href="{{ route('admin.categories.car.brands.index') }}" class="btn-sm btn btn-{{ $page == 'brands' ? 'primary active' : 'outline-primary' }}"><i class="fal fa-car mr-1"></i> {{ __('fillable.CarBrands') }} </a>
        <a href="{{ route('admin.categories.car.brands.create') }}" class="btn-sm btn btn-{{ $page == 'brands' ? 'primary ' : 'outline-primary' }}" data-toggle="tooltip" data-placement="top" title="{{ __('button.Add') }}"><i class="fal fa-plus"></i></a>
    </div>
    <div class="btn-group mr-2 my-2">
        <a href="{{ route('admin.categories.car.years.index') }}" class="btn-sm btn btn-{{ $page == 'years' ? 'primary active' : 'outline-primary' }}"><i class="fal fa-calendar-alt mr-1"></i> {{ __('fillable.CarYears') }} </a>
        <a href="{{ route('admin.categories.car.years.index') }}" class="btn-sm btn btn-{{ $page == 'years' ? 'primary ' : 'outline-primary' }}" data-toggle="tooltip" data-placement="top" title="{{ __('button.Add') }}"><i class="fal fa-plus"></i></a>
    </div>

    <div class="btn-group mr-2 my-2">
        <a href="{{ route('admin.categories.car.attributes.index') }}" class="btn-sm btn btn-{{ $page == 'attributes' ? 'primary active' : 'outline-primary' }}"><i class="fal fa-calendar-alt mr-1"></i> {{ __('fillable.Attributes') }} </a>
        <a href="{{ route('admin.categories.car.attributes.create') }}" class="btn-sm btn btn-{{ $page == 'attributes' ? 'primary ' : 'outline-primary' }}" data-toggle="tooltip" data-placement="top" title="{{ __('button.Add') }}"><i class="fal fa-plus"></i></a>
    </div>

</p>