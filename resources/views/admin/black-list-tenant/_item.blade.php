<div class="box box-solid">
    <div class="box-body no-padding">
        <table class="table table-borderless table-responsive-sm bg-white">
            <thead class="thead-light">
            <tr>
                <th width="60px">ID</th>
                <th width="50px">{{__('fillable.Photo')}}</th>
                <th>{{__('fillable.Name')}}</th>
{{--                <th>{{__('fillable.City')}}</th>--}}
{{--                <th>{{__('fillable.Author')}}</th>--}}
                <th>{{__('fillable.Status')}}</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($tenants as $tenant)
            <tr>
                <td>{{ $tenant->id }}</td>
                <td>
                    @if(count($tenant->photos))
                    <div class="w-100 position-relative">
                        @foreach($tenant->photos as $photo)

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
                            <a href="{{ $photo->photo !== null ? Storage::disk('public')->url('user/black-tenant/images/small/'.$photo->photo) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" target="_blank">open</a>
                    </div>
                    @else
                        <div class="w-100 position-relative">
                            <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="rounded w-100 " alt="...">
                        </div>
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.black.list.tenants.show', $tenant) }}">{{ $tenant->name }} </a>
                    <div class="small text-muted mb-2">
                        @if($tenant->author) {{-- __('fillable.Author') --}} <a data-toggle="tooltip" data-placement="top" title="{{__('fillable.Author')}}" class="text-dark" href="{{ route('admin.users.show', $tenant->author) }}">{{ $tenant->author->name }}</a>, @else - @endif
                        @if($tenant->city) {{-- __('fillable.City') --}} <a data-toggle="tooltip" data-placement="top" title="{{__('fillable.City')}}" class="text-dark" href="#">{{ $tenant->city }}</a>, @endif
                            {{ $tenant->created_at->diffForHumans()}}</div>
                    @foreach($tenant->comments as $comment)
                        <div class="text-muted mt-1 mb-2 small">{{ $comment->comment }}</div>
                        @break($loop->first)
                    @endforeach
                </td>
{{--                <td class="small"><a href="#">{{ $tenant->city }}</a></td>--}}
{{--                <td class="small">@if($tenant->author) <a href="{{ route('admin.users.show', $tenant->author) }}">{{ $tenant->author->name }}</a> @else - @endif</td>--}}
                <td>
                    @if($tenant->isActive())
                        <div><span class="badge bg-success">{{ $tenant->statusTenant()[$tenant->status] }}</span></div>
                    @elseif($tenant->isModeration())
                        <div><span class="badge bg-warning">{{ $tenant->statusTenant()[$tenant->status] }}</span></div>
                    @elseif($tenant->isNotMatch())
                        <div><span class="badge bg-danger">{{ $tenant->statusTenant()[$tenant->status] }}</span></div>
                    @endif
                </td>
                <td class="pr-0">
                    <div class="d-flex flex-row-reverse justify-content-end">
                        <form method="POST" action="{{ route('admin.black.list.tenants.not.match', $tenant) }}" class="mr-1">
                            @csrf
                            <button class="btn btn-sm btn-link" data-toggle="tooltip" data-placement="top" title="{{ $statuses['not_match'] }}"><i class="fas fa-ban text-danger"></i></button>
                        </form>
                        <form method="POST" action="{{ route('admin.black.list.tenants.active', $tenant) }}" class="mr-1">
                            @csrf
                            <button class="btn btn-sm btn-link" data-toggle="tooltip" data-placement="top" title="{{ $statuses['active'] }}"><i class="fas fa-check"></i></button>
                        </form>
                        <form method="POST" action="{{ route('admin.black.list.tenants.destroy', $tenant) }}" class="w-100">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-link" data-toggle="tooltip" onclick="return confirm('Удалить Категорию?')" data-placement="top" title="Удалить"><i class="fal fa-trash-alt fa-1x px-2 text-gray" ></i></button>

                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>