<div class="card border-0 shadow-sm mb-3">
    <div class="card-body">
        <div class="row pl-3 pr-3">
            @if(count($carAdvert->photos))
                @if($mainPhoto = $carAdvert->getMainPhotoModel($carAdvert->photos))
                    <div class="mb-1 px-0 mr-1 position-relative col-1">
                        <img class="img-responsive rounded border-0 w-100" src="{{ Storage::disk('public')->url('car-adverts/item/'. $mainPhoto->file) }}" >
                        <div class="btn-group position-absolute fixed-bottom">
                            <form method="POST" action="{{ route('cabinet.adverts.delete.photo', [$carAdvert, $mainPhoto]) }}" class="w-100">
                                @csrf
                                @method('DELETE')
                                <div class="d-flex">
                                    <div class="">
                                        <button class="btn btn-sm btn-link " data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ __('button.Delete') }}"><i class="fas fa-trash text-danger"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
                @foreach($carAdvert->photos as $photo)
                    @if($photo->type == null)
                        <div class="mb-1 mr-1 px-0 position-relative col-1">
                            <img class="img-responsive rounded border-0 w-100" src="{{ Storage::disk('public')->url('car-adverts/item/'. $photo->file) }}">
                            <div class="btn-group position-absolute fixed-bottom">
                                <form method="POST" action="{{ route('cabinet.adverts.delete.photo', [$carAdvert, $photo]) }}" class="w-100">
                                    @csrf
                                    @method('DELETE')
                                    <div class="d-flex">
                                        <div class="">
                                            <button class="btn btn-sm btn-link" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ __('button.Delete') }}"><i class="fas fa-trash text-danger"></i></button>
                                        </div>
                                        <div class="ml-auto">
                                            <a class="btn btn-sm btn-link" href="{{ route('cabinet.adverts.main.photo', [$carAdvert, $photo]) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Сделать Главным"><i class="fas fa-check-circle"></i></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif

            <a class="mb-1 px-3 pt-1 pb-1 rounded border-light shadow-sm text-white-50 bg-dark text-center d-flex align-items-center text-decoration-none" href="{{ route('cabinet.adverts.photos', $carAdvert) }}">
                <span class="align-content-center">
                    <i class="mt-1 fal fa-plus-circle fa-2x"></i><br />
                    <span class="small">Осталось {{ $carAdvert->photosCount() }} фото</span>
                </span>
            </a>
        </div>
    </div>
</div>

<form method="POST" action="{{ route('cabinet.adverts.update', $carAdvert) }}">
    @csrf
    @method('PUT')

    <div class="card border-0 shadow-sm mb-3">
        <div class="card-header border-0 h5">
            {{ __('fillable.Update') .' '. __('fillable.Advert') }}
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group @if($errors->has('car_brand'))has-error @endif">
                        <label for="parent" class="col-form-label">{{ __('fillable.CarBrands') }}</label>
                        <select id="car_brand" class="form-control select2 w-100 {{ $errors->has('car_brand') ? ' is-invalid' : '' }}" name="car_brand">
                            <option value="">&mdash; Выберите марку автомобиля</option>
                            @foreach ($car_brands as $car_brand)
                                <option value="{{ $car_brand->id }}"{{ $car_brand->id == old('car_brand', $carAdvert->carBrand->id) ? ' selected' : '' }}>
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
                        <label for="parent" class="col-form-label">{{ __('fillable.CarModel') }}</label>
                        <select id="car_model" class="form-control select2 w-100 {{ $errors->has('car_model') ? ' is-invalid' : '' }}" name="car_model">
                            <option value="">&mdash; Выберите {{ __('fillable.CarModel') }}</option>
                            @if ($carAdvert->carBrand->children)
                                @foreach ($carAdvert->carBrand->children as $car_model)
                                    <option value="{{ $car_model->id }}"{{ $car_model->id == old('car_model', $carAdvert->carModel ? $carAdvert->carModel->id : null) ? ' selected' : '' }}>
                                        @for ($i = 0; $i < $car_model->depth; $i++) &mdash; @endfor
                                        {{ $car_model->name }}
                                    </option>
                                @endforeach;
                            @endif
                        </select>
                        @if ($errors->has('car_model'))
                            <span class="help-block"><strong>{{ $errors->first('car_model') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group @if($errors->has('car_series'))has-error @endif">
                        <label for="parent" class="col-form-label">{{ trans_choice('fillable.CarSeries', 1) }}</label>
                        <select id="car_series" class="form-control select2 w-100 {{ $errors->has('car_series') ? ' is-invalid' : '' }}" name="car_series" {{ $carAdvert->carModel ? '' : 'disabled' }}>
                            <option value="">&mdash; Выберите {{ trans_choice('fillable.CarSeries', 10) }}</option>
                            @if ($carAdvert->carModel)
                                @foreach ($carAdvert->carModel->children as $car_series)
                                    <option value="{{ $car_series->id }}" {{ $car_series->id == old('car_series', $carAdvert->carSerie ? $carAdvert->carSerie->id : null) ? ' selected' : '' }}>
                                        @for ($i = 0; $i < $car_series->depth; $i++) &mdash; @endfor
                                        {{ $car_series->name }}
                                    </option>
                                @endforeach;
                            @endif
                        </select>
                        @if ($errors->has('car_series'))
                            <span class="help-block"><strong>{{ $errors->first('car_series') }}</strong></span>
                        @endif
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group @if($errors->has('car_year'))has-error @endif">
                        <label for="parent" class="col-form-label">{{ trans_choice('fillable.CarYears', 1) }}</label>
                        <select id="car_year" class="form-control select2 w-100 {{ $errors->has('car_year') ? ' is-invalid' : '' }}" name="car_year">
                            <option value="">&mdash; {{ trans_choice('fillable.CarYears', 1) }} автомобиля</option>
                            @foreach ($car_years as $car_year)
                                <option value="{{ $car_year->id }}"{{ $car_year->id == old('car_year', $carAdvert->carYear->id) ? ' selected' : '' }}>
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
                                <option value="{{ $type }}"{{ $type == old('type_rental', $carAdvert->type_rental) ? ' selected' : '' }}>{{ $label }}</option>
                            @endforeach;
                        </select>
                        @if ($errors->has('type_rental'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('type_rental') }}</strong></span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm mb-3">
        <div class="card-header border-0 h5">
            {{ __('fillable.Attributes') }}
        </div>
        <div class="card-body">
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
                                            <option value="{{ $variant }}"{{ $variant == old('attributes.' . $attribute->id, $carAdvert->getValue($attribute->id)) ? ' selected' : '' }}>
                                                {{ $variant }}
                                            </option>
                                        @endforeach
                                    </select>

                                @elseif ($attribute->isNumber())

                                    <input id="attribute_{{ $attribute->id }}" type="number" class="form-control{{ $errors->has('attributes.' . $attribute->id) ? ' is-invalid' : '' }}" name="attributes[{{ $attribute->id }}]" value="{{ old('attributes.' . $attribute->id, $carAdvert->getValue($attribute->id)) }}">

                                @else

                                    <input id="attribute_{{ $attribute->id }}" type="text" class="form-control{{ $errors->has('attributes.' . $attribute->id) ? ' is-invalid' : '' }}" name="attributes[{{ $attribute->id }}]" value="{{ old('attributes.' . $attribute->id, $carAdvert->getValue($attribute->id)) }}">

                                @endif

                                @if ($errors->has('parent'))
                                    <span class="invalid-feedback"><strong>{{ $errors->first('attributes.' . $attribute->id, $carAdvert->getValue($attribute->id)) }}</strong></span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm mb-3">
        <div class="card-body">
            <div class="form-group">
                <label for="priceCarAdver" class="col-form-label">{{ __('fillable.PricePerDay') }} РУБ.</label>
                <input id="priceCarAdver" type="number" class="form-control{{ $errors->has('price_per_day') ? ' is-invalid' : '' }}" name="price_per_day" value="{{ old('price_per_day', $carAdvert->price_per_day) }}" required>
                @if ($errors->has('price_per_day'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('price_per_day') }}</strong></span>
                @endif
            </div>

            <div class="form-group">
                <label for="address" class="col-form-label">{{ __('fillable.Address') }}</label>
                <div class="row">
                    <div class="col-md-12">
                        <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address', $carAdvert->address) }}" required>
                        @if ($errors->has('address'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('address') }}</strong></span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="col-form-label">{{ __('fillable.Description') }}</label>
                <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" rows="5" required>{{ old('description', $carAdvert->description) }}</textarea>
                @if ($errors->has('description'))
                    <span class="invalid-feedback"><strong>{{ $errors->first('description') }}</strong></span>
                @endif
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">{{__('button.Save')}}</button>
            </div>
        </div>
    </div>
</form>