<div class="card border-0 shadow-sm">
    <div class="card-header border-0">
        Легковые автомобили
    </div>

    <div class="card-body">
        {{--  Фильтр  --}}
       <form action="?" method="GET" class="input-group input-group-sm w-100">

       <div class="form-group w-100">
            <select id="car_year" class="form-control select2 w-100 {{ $errors->has('car_year') ? ' is-invalid' : '' }}" name="car_year" data-placeholder="{{ trans_choice('fillable.CarYears', 1) }}">
                <option value="">{{ trans_choice('fillable.CarYears', 1) }}</option>
                @foreach ($car_years as $car_year)
                    <option value="{{ $car_year->id }}"{{ $car_year->id == old('car_year') ? ' selected' : '' }}>
                        @for ($i = 0; $i < $car_year->depth; $i++) &mdash; @endfor
                        {{ $car_year->name }}
                    </option>
                @endforeach;
            </select>
        </div>

        <div class="form-group w-100">
            <select id="type_rental" class="form-control select2 {{ $errors->has('type_rental') ? ' is-invalid' : '' }}" name="type_rental" data-placeholder="{{ trans_choice('fillable.TypeRental', 1) }}">
                <option value="">{{ trans_choice('fillable.TypeRental', 1) }} </option>
                @foreach ($types as $type => $label)
                    <option value="{{ $type }}"{{ $type == old('type_rental') ? ' selected' : '' }}>{{ $label }}</option>
                @endforeach;
            </select>
        </div>

        <div class="form-group">
            <div class="row">
                @foreach ($attributes as $attribute)
                    <div class="col-12">
                        <div class="form-group">
                            @if ($attribute->isSelect())
                                <select id="attribute_{{ $attribute->id }}" class="form-control select2 select2-search--hide {{ $errors->has('attributes.' . $attribute->id) ? ' is-invalid' : '' }}" name="attributes[{{ $attribute->id }}]" data-placeholder="{{ $attribute->name }}">
                                    <option value="">&mdash; {{ $attribute->name }} </option>
                                    @foreach ($attribute->variants as $variant)
                                        <option value="{{ $variant }}"{{ $variant == old('attributes.' . $attribute->id) ? ' selected' : '' }}>
                                            {{ $variant }}
                                        </option>
                                    @endforeach
                                </select>

                            @elseif ($attribute->isNumber())

                                <input id="attribute_{{ $attribute->id }}" type="number" class="form-control{{ $errors->has('attributes.' . $attribute->id) ? ' is-invalid' : '' }}" name="attributes[{{ $attribute->id }}]" value="{{ old('attributes.' . $attribute->id) }}" placeholder="{{ $attribute->name }}">

                            @else

                                <input id="attribute_{{ $attribute->id }}" type="text" class="form-control{{ $errors->has('attributes.' . $attribute->id) ? ' is-invalid' : '' }}" name="attributes[{{ $attribute->id }}]" value="{{ old('attributes.' . $attribute->id) }}" placeholder="{{ $attribute->name }}">

                            @endif

                            @if ($errors->has('parent'))
                                <span class="invalid-feedback"><strong>{{ $errors->first('attributes.' . $attribute->id) }}</strong></span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


       
        <div class="form-group  w-100">
            <button type="submit" class="btn btn-light">{{__('button.Search')}}</button>
            <a href="?" class="btn btn-light"><i class="fas fa-times"></i></a>
        </div>

        </form>
    </div>
</div>