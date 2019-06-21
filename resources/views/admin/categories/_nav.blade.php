@include ('admin._nav', ['page' => 'categories'])

<p>
    <div class="btn-group mr-2">
        <a href="{{ route('admin.categories.car.models.index') }}" class="btn-sm btn btn-{{ $page == 'models' ? 'primary' : 'outline-primary' }}"><i class="fal fa-car mr-1"></i> {{ __('fillable.CarModels') }} </a>
        <a href="{{ route('admin.categories.car.models.index') }}" class="btn-sm btn btn-{{ $page == 'models' ? 'secondary' : 'outline-secondary' }}"><i class="fal fa-plus"></i></a>
    </div>
    <div class="btn-group mr-2">
        <a href="{{ route('admin.categories.car.years.index') }}" class="btn-sm btn btn-{{ $page == 'years' ? 'primary' : 'outline-primary' }}"><i class="fal fa-calendar-alt mr-1"></i> {{ __('fillable.CarYears') }} </a>
        <a href="{{ route('admin.categories.car.models.index') }}" class="btn-sm btn btn-{{ $page == 'years' ? 'secondary' : 'outline-primary' }}"><i class="fal fa-plus"></i></a>
    </div>

</p>