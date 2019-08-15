<form method="POST" action="{{ route('cabinet.adverts.create.advert.store') }}">
    @csrf
    <div class="row">

        <div class="col-md-4">
            <div class="form-group @if($errors->has('car_brand'))has-error @endif">
                <label for="car_brand" class="col-form-label">{{ __('fillable.CarBrands') }}</label>
                <select id="car_brand" class="form-control select2 w-100 {{ $errors->has('car_brand') ? ' is-invalid' : '' }}" name="car_brand">
                    <option value="">&mdash; Выберите марку автомобиля</option>
                    @foreach ($car_brands as $car_brand)
                        <option value="{{ $car_brand->id }}"{{ $car_brand->id == old('car_brand') ? ' selected' : '' }}>
                            @for ($i = 0; $i < $car_brand->depth; $i++) &mdash; @endfor
                            {{ $car_brand->name }}
                        </option>
                    @endforeach;
                </select>
                @if ($errors->has('car_brand'))
                    <span class="help-block"><strong>{{ $errors->first('car_brand') }}</strong></span>
                @endif
            </div>
        </div>


        <div class="col-md-4">
            <div class="form-group @if($errors->has('car_model'))has-error @endif">
                <label for="car_model" class="col-form-label">{{ __('fillable.CarModels') }}</label>
                <select id="car_model" class="form-control select2 w-100 {{ $errors->has('car_model') ? ' is-invalid' : '' }}" name="car_model">
                    <option value="">&mdash; Выберите марку автомобиля</option>
                </select>
                @if ($errors->has('car_model'))
                    <span class="help-block"><strong>{{ $errors->first('car_model') }}</strong></span>
                @endif
            </div>
        </div>


        <div class="col-md-4">
            <div class="form-group @if($errors->has('car_series'))has-error @endif">
                <label for="car_series" class="col-form-label">{{ __('fillable.CarSeries') }}</label>
                <select id="car_series" class="form-control select2 w-100 {{ $errors->has('car_series') ? ' is-invalid' : '' }}" name="car_series">
                    <option value="">&mdash; Выберите модель автомобиля</option>
                </select>
                @if ($errors->has('car_series'))
                    <span class="help-block"><strong>{{ $errors->first('car_series') }}</strong></span>
                @endif
            </div>
        </div>



        <div class="col-md-4">
            <div class="form-group @if($errors->has('car_year'))has-error @endif">
                <label for="parent" class="col-form-label">{{ __('fillable.CarYears') }}</label>
                <select id="car_year" class="form-control select2 w-100 {{ $errors->has('car_year') ? ' is-invalid' : '' }}" name="car_year">
                    <option value="">&mdash; {{ __('fillable.CarYears') }} автомобиля</option>
                    @foreach ($car_years as $car_year)
                        <option value="{{ $car_year->id }}"{{ $car_year->id == old('car_year') ? ' selected' : '' }}>
                            @for ($i = 0; $i < $car_year->depth; $i++) &mdash; @endfor
                            {{ $car_year->name }}
                        </option>
                    @endforeach;
                </select>
                @if ($errors->has('car_year'))
                    <span class="help-block"><strong>{{ $errors->first('car_year') }}</strong></span>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="type_rental" class="col-form-label">{{ __('fillable.TypeRental') }}</label>
                <select id="type_rental" class="form-control select2 {{ $errors->has('type_rental') ? ' is-invalid' : '' }}" name="type_rental">
                    @foreach ($types as $type => $label)
                        <option value="{{ $type }}"{{ $type == old('type_rental') ? ' selected' : '' }}>{{ $label }}</option>
                    @endforeach;
                </select>
                @if ($errors->has('type_rental'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('type_rental') }}</strong></span>
                @endif
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            @foreach ($attributes as $attribute)
                <div class="col-6">
                    <div class="form-group">
                        <label for=attribute_{{ $attribute->id }}" class="col-form-label">{{ $attribute->name }}</label>

                        @if ($attribute->isSelect())

                            <select id="attribute_{{ $attribute->id }}" class="form-control select2 select2-search--hide {{ $errors->has('attributes.' . $attribute->id) ? ' is-invalid' : '' }}" name="attributes[{{ $attribute->id }}]">
                                <option value=""> &mdash; </option>
                                @foreach ($attribute->variants as $variant)
                                    <option value="{{ $variant }}"{{ $variant == old('attributes.' . $attribute->id) ? ' selected' : '' }}>
                                        {{ $variant }}
                                    </option>
                                @endforeach
                            </select>

                        @elseif ($attribute->isNumber())

                            <input id="attribute_{{ $attribute->id }}" type="number" class="form-control{{ $errors->has('attributes.' . $attribute->id) ? ' is-invalid' : '' }}" name="attributes[{{ $attribute->id }}]" value="{{ old('attributes.' . $attribute->id) }}">

                        @else

                            <input id="attribute_{{ $attribute->id }}" type="text" class="form-control{{ $errors->has('attributes.' . $attribute->id) ? ' is-invalid' : '' }}" name="attributes[{{ $attribute->id }}]" value="{{ old('attributes.' . $attribute->id) }}">

                        @endif

                        @if ($errors->has('parent'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('attributes.' . $attribute->id) }}</strong></span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="form-group">
        <label for="price_per_day" class="col-form-label">{{ __('fillable.PricePerDay') }} РУБ.</label>
        <input id="price_per_day" type="number" class="form-control{{ $errors->has('price_per_day') ? ' is-invalid' : '' }}" name="price_per_day" value="{{ old('price_per_day') }}" required>
        @if ($errors->has('price_per_day'))
            <span class="invalid-feedback"><strong>{{ $errors->first('price_per_day') }}</strong></span>
        @endif
    </div>

    <div class="form-group">
        <label for="address" class="col-form-label">{{ __('fillable.Address') }}</label>
        <div class="row">
            <div class="col-md-12">
                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>
                @if ($errors->has('address'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('address') }}</strong></span>
                @endif
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="description" class="col-form-label">{{ __('fillable.Description') }}</label>
        <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" rows="5" required>{{ old('description') }}</textarea>
        @if ($errors->has('description'))
            <span class="invalid-feedback"><strong>{{ $errors->first('description') }}</strong></span>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{__('button.Save')}}</button>
    </div>
</form>

