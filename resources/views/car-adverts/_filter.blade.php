<div class="filter-header_top bg-white">
    <div class="p-3">
        <div class="filter_header px-3 pb-3 pt-3">
            <div class="filter_title">Выбери свой автомобиль</div>
            <div class="filter-form">
                <form action="?" method="GET" class="input-group input-group-sm ">

                    <div class="row ml-0"   >
                        <div class="form-group pr-3 filter-7">
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

                        <div class="form-group pr-3 filter-7">
                            <select id="type_rental" class="form-control select2 {{ $errors->has('type_rental') ? ' is-invalid' : '' }}" name="type_rental" data-placeholder="{{ trans_choice('fillable.TypeRental', 1) }}">
                                <option value="">{{ trans_choice('fillable.TypeRental', 1) }} </option>
                                @foreach ($types as $type => $label)
                                    <option value="{{ $type }}"{{ $type == old('type_rental') ? ' selected' : '' }}>{{ $label }}</option>
                                @endforeach;
                            </select>
                        </div>

                        @foreach ($attributes as $attribute)
                            <div class="form-group pr-3 filter-7">
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
                        @endforeach
                    </div>

                    <div class="w-100">
                        <div class="form-group"></div>
                        <div class="form-group ml-auto">
                            <button type="submit" class="btn btn-light">{{__('button.Search')}}</button>
                            <a href="?" class="btn btn-light"><i class="fas fa-times"></i></a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="p-3 filter_footer bg-gray-lite">
        <div class="p-3">
            <div class="title_filter_footer"></div>
            <div class="body_filter_footer">
                <ul class="clearfix list-unstyled m-0">
                    <li class="float-left mr-3">
                        <a href="#" class="clearfix d-block rounded-pill text-decoration-none p-1 overflow-hidden bg-silver-lite-filter">
                            <div class="logo_model_filter_popular rounded-pill d-inline-block align-middle overflow-hidden" style="background-image: url('http://pngimg.com/uploads/bmw_logo/bmw_logo_PNG19705.png')"></div>
                            <div class="title_model_filter_popular d-inline-block align-middle"><span class="pl-2 pr-3 text-black-50">BMW</span></div>
                        </a>
                    </li>
                    <li class="float-left mr-3">
                        <a href="#" class="clearfix d-block rounded-pill text-decoration-none p-1 overflow-hidden bg-silver-lite-filter">
                            <div class="logo_model_filter_popular rounded-pill d-inline-block align-middle overflow-hidden" style="background-image: url('http://pngimg.com/uploads/bmw_logo/bmw_logo_PNG19705.png')"></div>
                            <div class="title_model_filter_popular d-inline-block align-middle"><span class="pl-2 pr-3 text-black-50">BMW</span></div>
                        </a>
                    </li>
                    <li class="float-left mr-3">
                        <a href="#" class="clearfix d-block rounded-pill text-decoration-none p-1 overflow-hidden bg-silver-lite-filter">
                            <div class="logo_model_filter_popular rounded-pill d-inline-block align-middle overflow-hidden" style="background-image: url('http://pngimg.com/uploads/bmw_logo/bmw_logo_PNG19705.png')"></div>
                            <div class="title_model_filter_popular d-inline-block align-middle"><span class="pl-2 pr-3 text-black-50">BMW</span></div>
                        </a>
                    </li>
                    <li class="float-left mr-3">
                        <a href="#" class="clearfix d-block rounded-pill text-decoration-none p-1 overflow-hidden bg-silver-lite-filter">
                            <div class="logo_model_filter_popular rounded-pill d-inline-block align-middle overflow-hidden" style="background-image: url('http://pngimg.com/uploads/bmw_logo/bmw_logo_PNG19705.png')"></div>
                            <div class="title_model_filter_popular d-inline-block align-middle"><span class="pl-2 pr-3 text-black-50">BMW</span></div>
                        </a>
                    </li>
                    <li class="float-left mr-3">
                        <a href="#" class="clearfix d-block rounded-pill text-decoration-none p-1 overflow-hidden bg-silver-lite-filter">
                            <div class="logo_model_filter_popular rounded-pill d-inline-block align-middle overflow-hidden" style="background-image: url('http://pngimg.com/uploads/bmw_logo/bmw_logo_PNG19705.png')"></div>
                            <div class="title_model_filter_popular d-inline-block align-middle"><span class="pl-2 pr-3 text-black-50">BMW</span></div>
                        </a>
                    </li>
                    <li class="float-left mr-3">
                        <a href="#" class="clearfix d-block rounded-pill text-decoration-none p-1 overflow-hidden bg-silver-lite-filter">
                            <div class="logo_model_filter_popular rounded-pill d-inline-block align-middle overflow-hidden" style="background-image: url('http://pngimg.com/uploads/bmw_logo/bmw_logo_PNG19705.png')"></div>
                            <div class="title_model_filter_popular d-inline-block align-middle"><span class="pl-2 pr-3 text-black-50">BMW</span></div>
                        </a>
                    </li>
                    <li class="float-left mr-3">
                        <a href="#" class="clearfix d-block rounded-pill text-decoration-none p-1 overflow-hidden bg-silver-lite-filter">
                            <div class="logo_model_filter_popular rounded-pill d-inline-block align-middle overflow-hidden" style="background-image: url('http://pngimg.com/uploads/bmw_logo/bmw_logo_PNG19705.png')"></div>
                            <div class="title_model_filter_popular d-inline-block align-middle"><span class="pl-2 pr-3 text-black-50">BMW</span></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="visible-filter">Паказать фильтр</div>
