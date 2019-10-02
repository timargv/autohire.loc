@forelse ($carAdverts as $carAdvert)
    <div class="@if(!empty($col_1)) col-12 @else col-12 col-lg-6 @endif border-bottom mb-md-3 mb-2">
        <div class="car_sh card border-0 shadow-sm overflow-hidden rounded-0">
            <a href="#" class="car_sh_href position-absolute w-100 h-100"></a>
            <div class="row d-flex align-items-stretch h-100">
                <div class="col-6 col-md-5 pr-0">
                    <div class="car_sh_img w-100 h-100"
                         @if(count($carAdvert->photos))
                         style="background-image: url('{{ Storage::disk('public')->url('car-adverts/large/'. $carAdvert->getMainPhoto($carAdvert->photos)) }}')"
                         @else
                         style="background-image: url('{{ $carAdvert->getMainPhoto($carAdvert->photos) }}')"
                            @endif
                    ></div>

                </div>
                <div class="col-6 col-md-7">
                    <div class="py-3 pl-3 pr-2 p-md-3 h-100">
                        <div class="car_sh_info pr-3 py-0 h-100">
                            <div class="car_sh_model">
                                <div class="title_block">Модель</div>
                                <div class="title_model">Mercedes Benz A250 AMG</div>
                            </div>

                            <div class="car_sh_price mb-3">
                                <div class="price_block">Цена за сутки</div>
                                <div class="price">1 700 <i class="fal fa-ruble-sign"></i></div>
                            </div>

                            <div class="d-none d-md-flex car_sh_btn-group clearfix">
                                <div class="car_sh_address_data">
                                    <div class="card-text text-muted mb-0 ">{{ $carAdvert->address }}</div>
                                    <div class="card-text"><small class="text-muted">{{ $carAdvert->updated_at->diffForHumans() }}</small></div>
                                </div>
                                <div class="clearfix ml-auto">
                                    <button class="btn bg-siran btn-sm text-white float-right ml-2"><i class="fal fa-phone-alt"></i></button>
                                    <button class="btn bg-silver-lite-filter btn-sm text-siran float-right"><i class="fal fa-comments"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@empty
    <div class="d-flex h-100">
        <div class="row justify-content-center align-self-center mx-auto h4 font-weight-light text-black-50">
            Ничего не найдено
        </div>
    </div>
@endforelse
