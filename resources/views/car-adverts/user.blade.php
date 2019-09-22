
<div class="mb-md-4 mb-3">
<div class="p-0 rounded shadow-md overflow-hidden position-relative" style="z-index: 1">
    <div class="row">
        <div class="col-12">
            <div class="p-3">
                <div class="row">
                    <div class="col-2 pr-0">
                        @if($user->avatar && Storage::disk('public')->exists('user/avatar/medium/'.$user->avatar->image))
                            @if($user->avatar->isModeration() || $user->avatar->isNotMatch())
                                <img src="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/blur/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">
                            @else
                                <img src="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/medium/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">
                            @endif
                        @else
                            <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="rounded w-100 " alt="...">
                        @endif
                    </div>
                    <div class="col-10 pl-3 " style="height: 40px;">
                        <span class="font-weight-light pt-0 d-block">
                            @if ($user->forename)
                                {{ $user->forename ?? '' }} {{ $user->surname ?? '' }}
                            @else
                                {{ $user->name }}
                            @endif
                            @if(!empty($user->isVerifiedOwner()))
                                <i class="fas fa-shield-check text-success pl-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Владелец проверен"></i>
                            @endif
                        </span>
                        <span class="text-black-50 small">
{{--                            <i class="fad fa-map-marker-alt invisible pr-1 mr-1"></i>--}}
                            {{ $user->city }}
                        </span>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 align-content-stretch">
            <div class="d-flex flex-row h-100 text-center" style="background: #f7f7f7;">
                <div class="btn-user-message-car-advert text-decoration-none w-50"
                     data-toggle="tooltip" data-placement="top" title="Написать сообщение">
                     <div class="d-flex align-content-center flex-wrap px-3 py-2 h-100 text-center">
                         <div class="m-auto ">
                             <i class="fad fa-envelope pr-1 fa-1x"></i>
                             <span class=" my-auto ">Написать</span>
                         </div>
                     </div>
                </div>
                <div class="btn-user-telephone-car-advert text-decoration-none phone-button w-50"
                     data-toggle="tooltip" data-placement="top" title="Показать телефон"
                     data-source="{{ route('cars.adverts.phone', $carAdvert) }}">
                     <div class="d-flex align-content-center bg-indigo text-white flex-wrap px-3 py-2 h-100 text-center text-center">
                         <div class="m-auto">
                             <i class="fad fa-phone-alt pr-1 fa-1x"></i>
                             <span class=" my-auto">{{ trans_choice('button.VisibilityPhone', 1) }}</span>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-silver-lite mx-2 p-3 rounded-bottom d-none number-block font-weight-bold text-center">
    <i class="fad fa-phone-volume mr-1"></i>
    <span id="phone-input" class="number"></span>
</div>
</div>