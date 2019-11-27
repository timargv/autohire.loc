<div class="card rounded-0 border-0 shadow-sm">
    <div class="card-body p-0">
        <table class="table table-borderless table-responsive-sm bg-white">
            <thead class="thead-light d-none">
            <tr>
{{--                <th width="60px">ID</th>--}}
                <th width="50px">{{__('fillable.Photo')}}</th>
                <th>{{__('fillable.Name')}}</th>
{{--                <th>{{__('fillable.City')}}</th>--}}
{{--                <th>{{__('fillable.Author')}}</th>--}}
                <th>{{__('fillable.Status')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($tenants as $tenant)
            @can('manage-own-black-list', $tenant)
                <tr>
{{--                <td>{{ $tenant->id }}</td>--}}
                <td style="max-width: 80px;min-width: 80px;">
                    @if(count($tenant->photos))
                    <div class="w-100 position-relative">
                        @foreach($tenant->photos as $photo)
                            @continue(!$photo->isMain())
                            <div class="position-absolute" style="top: -10px;left: -6px;">
                                @if ($photo->isNotMatch())
                                    <i class="fas fa-times-circle text-danger bg-white rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="{{ $photo->statusPhoto()[$photo->status] }}"></i>
                                @elseif ($photo->isModeration())
                                    <i class="fas fa-question-circle text-warning bg-dark rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="Фото на модерации"></i>
                                @else
                                    <i class="fas fa-check-circle text-success bg-white rounded-circle overflow-hidden" data-toggle="tooltip" data-placement="top" title="Фото Подтверждено"></i>
                                @endif
                            </div>
                            @if($photo->photo && Storage::disk('public')->exists('user/black-tenant/images/medium/'.$photo->photo))
                                @if($photo->isModeration() || $photo->isNotMatch())
                                    <img src="{{ $photo->photo !== null ? Storage::disk('public')->url('user/black-tenant/images/blur/'.$photo->photo) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">
                                @else
                                    <img src="{{ $photo->photo !== null ? Storage::disk('public')->url('user/black-tenant/images/medium/'.$photo->photo) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="rounded w-100 " alt="...">
                                @endif
                            @else
                                <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="rounded w-100 " alt="...">
                            @endif
                            @break($photo->isMain())
                        @endforeach
                    </div>
                    @else
                        <div class="w-100 position-relative">
                            <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="rounded w-100 " alt="...">
                        </div>
                    @endif

                </td>
                <td><a href="{{ route('cabinet.black.list.tenants.show', $tenant) }}">{{ $tenant->name }}</a>
                    <div class="small text-muted mb-2">
                        @if($tenant->author->isAdmin())
                            @if($tenant->author) {{-- __('fillable.Author') --}} <a data-toggle="tooltip" data-placement="top" title="{{__('fillable.Author')}}" class="text-dark" href="{{ route('admin.users.show', $tenant->author) }}">{{ $tenant->author->name }}</a>, @else - @endif
                        @else
                            @if($tenant->author) {{ $tenant->author->name }}, @else - @endif
                        @endif
                        @if($tenant->city) {{-- __('fillable.City') --}} <a data-toggle="tooltip" data-placement="top" title="{{__('fillable.City')}}" class="text-dark" href="#">{{ $tenant->city }}</a>, @endif
                        {{ $tenant->created_at->diffForHumans()}}</div>
                    @foreach($tenant->comments as $comment)
                        <div class="text-muted mt-1 mb-2">
                            @can('manage-own-black-list-comment', $comment)
                                {{ $comment->comment }}
                            @else
                                <span class="text-muted small">Комментарий в модерации</span>
                            @endcan
                        </div>
                        @break($loop->first)
                    @endforeach
                </td>
{{--                <td><a href="#">{{ $tenant->city }}</a></td>--}}
{{--                <td>@if($tenant->author) <a href="{{ route('profile.show', $tenant->author) }}">{{ $tenant->author->name }}</a> @else - @endif</td>--}}
                <td>
                    @if($tenant->isActive())
                        <div><span class="badge badge-success">{{ $tenant->statusTenant()[$tenant->status] }}</span></div>
                    @elseif($tenant->isModeration())
                        <div><span class="badge badge-warning">{{ $tenant->statusTenant()[$tenant->status] }}</span></div>
                    @elseif($tenant->isNotMatch())
                        <div><span class="badge badge-danger">{{ $tenant->statusTenant()[$tenant->status] }}</span></div>
                    @endif
                </td>
                <td>

                </td>
            </tr>
                @continue
            @endcan
            @endforeach
            </tbody>
        </table>
    </div>
</div>