@include ('admin._nav', ['page' => 'categories'])

<p>
    <div class="btn-group mr-2 my-2">
        <a href="{{ route('admin.categories.car.models.index') }}" class="btn-sm btn btn-{{ $page == 'models' ? 'primary active' : 'outline-primary' }}"><i class="fal fa-car mr-1"></i> {{ __('fillable.CarModels') }} </a>
        <a href="{{ route('admin.categories.car.models.index') }}" class="btn-sm btn btn-{{ $page == 'models' ? 'primary ' : 'outline-primary' }}" data-toggle="tooltip" data-placement="top" title="{{ __('button.Add') }}"><i class="fal fa-plus"></i></a>
    </div>
    <div class="btn-group mr-2 my-2">
        <a href="{{ route('admin.categories.car.years.index') }}" class="btn-sm btn btn-{{ $page == 'years' ? 'primary active' : 'outline-primary' }}"><i class="fal fa-calendar-alt mr-1"></i> {{ __('fillable.CarYears') }} </a>
        <a href="{{ route('admin.categories.car.models.index') }}" class="btn-sm btn btn-{{ $page == 'years' ? 'primary ' : 'outline-primary' }}" data-toggle="tooltip" data-placement="top" title="{{ __('button.Add') }}"><i class="fal fa-plus"></i></a>
    </div>

    <div class="btn-group mr-2 my-2">
        <a href="{{ route('admin.categories.car.attributes.index') }}" class="btn-sm btn btn-{{ $page == 'attributes' ? 'primary active' : 'outline-primary' }}"><i class="fal fa-calendar-alt mr-1"></i> {{ __('fillable.Attributes') }} </a>
        <a href="{{ route('admin.categories.car.attributes.create') }}" class="btn-sm btn btn-{{ $page == 'attributes' ? 'primary ' : 'outline-primary' }}" data-toggle="tooltip" data-placement="top" title="{{ __('button.Add') }}"><i class="fal fa-plus"></i></a>
    </div>

</p>