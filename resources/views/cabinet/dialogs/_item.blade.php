<div class="w-100 w-md-50">
    <div class="card shadow-sm mt-3 rounded border-0 ">
        <div class="card-header border-0">
            {{ trans_choice('fillable.Message', 2)  }}
        </div>
        <div class="card-body px-0">


            <ul class="list-unstyled dialogs_list">
                @forelse($dialogs as $dialog)
                    <a href="{{  $dialog->carAdvert ? route('cabinet.dialogs.show', [$dialog->carAdvert, $dialog]) : '#' }}" class="position-relative media text-decoration-none bg-light-blue border-bottom py-3 px-3">
                        <div class="mr-3 dialog_list_car_advert_image">
                            <div class="dialog_car_advert_image overflow-hidden" style="
                                 @if($dialog->carAdvert && count($dialog->carAdvert->photos))
                                    background-image: url('{{ Storage::disk('public')->url('car-adverts/large/'. $dialog->carAdvert->getMainPhoto($dialog->carAdvert->photos)) }}');
                                 @else
                                    background-image: url('{{ $dialog->carAdvert ?  $dialog->carAdvert->getMainPhoto($dialog->carAdvert->photos) : 'https://vk.com/images/dquestion_app_widget_1_b.png' }}');
                                 @endif
                                    ">
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="mt-0 mb-1 h6">
                                        @if ($dialog->user_id === Auth::id())
                                            <div class="d-inline-block rounded-circle overflow-hidden align-middle mr-1" style="width: 20px;height: 20px;">
                                                @if($dialog->client->avatar && Storage::disk('public')->exists('user/avatar/medium/'.$dialog->client->avatar->image))
                                                    @if($dialog->client->avatar->isModeration() || $dialog->client->avatar->isNotMatch())
                                                        <img src="{{ $dialog->client->avatar !== null ? Storage::disk('public')->url('user/avatar/blur/'.$dialog->client->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded-circle w-100 " alt="...">
                                                    @else
                                                        <img src="{{ $dialog->client->avatar !== null ? Storage::disk('public')->url('user/avatar/medium/'.$dialog->client->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded-circle w-100 " alt="...">
                                                    @endif
                                                @else
                                                    <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="rounded w-100 " alt="...">
                                                @endif
                                            </div>
                                            {{ $dialog->client->name }}
                                        @else
                                            <div class="d-inline-block rounded-circle overflow-hidden align-middle mr-1" style="width: 20px;height: 20px;">
                                                @if($dialog->carAdvert && $dialog->carAdvert->author->avatar && Storage::disk('public')->exists('user/avatar/medium/'.$dialog->carAdvert->author->avatar->image))
                                                    @if($dialog->carAdvert->author->avatar->isModeration() || $dialog->carAdvert->author->avatar->isNotMatch())
                                                        <img src="{{ $dialog->carAdvert->author->avatar !== null ? Storage::disk('public')->url('user/avatar/blur/'.$dialog->carAdvert->author->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded-circle w-100 " alt="...">
                                                    @else
                                                        <img src="{{ $dialog->carAdvert->author->avatar !== null ? Storage::disk('public')->url('user/avatar/medium/'.$dialog->carAdvert->author->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded-circle w-100 " alt="...">
                                                    @endif
                                                @else
                                                    <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="rounded w-100 " alt="...">
                                                @endif
                                            </div>
                                            {{ $dialog->carAdvert ? $dialog->carAdvert->author->name : 'Объявление удалено' }}
                                        @endif
                                            <span class="badge bg-siran text-white">{{ $dialog->getNewMessagesCount() != 0 ? $dialog->getNewMessagesCount() : '' }}</span>
                                    </h5>
                                    <div class="pb-1">{{ $dialog->carAdvert ? $dialog->carAdvert->carBrand->name : 'Объявление удалено' }}</div>
                                    <div class="small">
{{--                                        @if ($dialog->messages)--}}
{{--                                            @foreach ($dialog->messages()->orderByDesc('created_at')->limit(1)->get('message') as $message)--}}
{{--                                                {{ $message->message }}--}}
{{--                                            @endforeach--}}
{{--                                        @else--}}
{{--                                            Нет сообщений--}}
{{--                                        @endif--}}
                                    </div>
                                </div>
                                <div class="col text-right">
                                    <div class="small">{{ $dialog->updated_at->diffForHumans() }}</div>
                                </div>

                            </div>
                        </div>
                        @if (!$dialog->carAdvert)
                            <div class="w-100 position-absolute  h-100 d-flex" style="top: 0; left: 0; background: #fffffff2 !important; z-index: 1;">
                                <div class="text-center align-self-center w-100 h4 font-weight-light text-muted" disabled="">Автомобиль удален</div>
                            </div>
                        @endif
                    </a>
                @empty
                    <div class="w-100 p-5">
                        <div class="text-muted h5 mb-2">Сообщения</div>
                        <div class="text-black-50 mb-3 ">
                            У Вас нет Сообщений.
                        </div>

                    </div>
                @endforelse
            </ul>
        </div>
    </div>
</div>