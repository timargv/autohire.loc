<form method="POST" action="{{ route('cabinet.adverts.create.advert.store') }}">
    @csrf
    <div class="row">

        <div class="col-md-4">
            <div class="form-group @if($errors->has('car_brand'))has-error @endif">
                <label for="parent" class="col-form-label">{{ __('fillable.CarBrands') }}</label>
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
                <label for="type" class="col-form-label">{{ __('fillable.TypeRental') }}</label>
                <select id="type" class="form-control select2 {{ $errors->has('type') ? ' is-invalid' : '' }}" name="type">
                    @foreach ($types as $type => $label)
                        <option value="{{ $type }}"{{ $type == old('type') ? ' selected' : '' }}>{{ $label }}</option>
                    @endforeach;
                </select>
                @if ($errors->has('type'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('type') }}</strong></span>
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
        <label for="price" class="col-form-label">{{ __('fillable.PricePerDay') }} РУБ.</label>
        <input id="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required>
        @if ($errors->has('price'))
            <span class="invalid-feedback"><strong>{{ $errors->first('price') }}</strong></span>
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
        <label for="content" class="col-form-label">{{ __('fillable.Description') }}</label>
        <textarea id="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content" rows="5" required>{{ old('content') }}</textarea>
        @if ($errors->has('content'))
            <span class="invalid-feedback"><strong>{{ $errors->first('content') }}</strong></span>
        @endif
    </div>
</form>