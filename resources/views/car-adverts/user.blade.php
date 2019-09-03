<div class="p-0 rounded shadow-md mb-3 overflow-hidden">
    <div class="row">
        <div class="col-7 col-md-8 pr-0">
            <div class="p-3">
                <div class="row">
                <div class="d-none d-md-block col-md-3 pr-0">
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
                <div class="col-12 col-md-9 pr-0">
                    <span class="font-weight-light pt-0 d-block">
                        @if ($user->forename)
                            {{ $user->forename ?? '' }} {{ $user->surname ?? '' }}
                        @else
                            {{ $user->name }}
                        @endif
                    </span>
                    <span class="text-muted">{{ $user->city }}</span>
                </div>
            </div>
            </div>
        </div>
        <div class="col-5 col-md-4 pl-0 align-content-stretch">
            <div class="d-flex flex-row h-100 text-center">
                <a class="link-user-message-car-advert w-50 text-decoration-none" data-toggle="tooltip" data-placement="top" title="Написать сообщение"
                   href="#"><div class="d-flex align-content-center flex-wrap h-100"><i class="fad fa-comment-alt-smile mx-auto fa-2x"></i></div></a>
                <a class="link-user-telephone-car-advert w-50 text-decoration-none" data-toggle="tooltip" data-placement="top" title="Показать телефон"
                   href="#"><div class="d-flex align-content-center flex-wrap h-100"><i class="fad fa-mobile mx-auto fa-2x"></i></div></a>
            </div>
        </div>
    </div>
</div>