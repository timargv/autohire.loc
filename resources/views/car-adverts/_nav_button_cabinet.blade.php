<div class="d-flex flex-row">
    @can ('manage-own-advert', $carAdvert )
    <div class="form-group">
        <div class="text-muted small">
            <span>Мое объявление</span>
        </div>
        <a href="{{ route('cabinet.adverts.create') }}" class="btn-sm btn btn-{{ $page == 'create' ? 'primary ' : 'primary' }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('button.Add') .' '. __('fillable.New') .' '. __('fillable.Advert')}}"><i class="fal fa-plus"></i></a>

        <div class="d-inline-block">
            <div class="d-flex flex-row ">
                <a href="{{ route('cabinet.adverts.edit', $carAdvert) }}" class="btn btn-sm btn-outline-primary mr-1 mb-2 mb-md-0" data-toggle="tooltip" data-placement="top" data-title="{{ __('button.Edit') }}"><i class="fal fa-pen"></i></a>
                <a href="{{ route('cabinet.adverts.photos', $carAdvert) }}" class="btn btn-sm btn-outline-primary mr-1 mb-2 mb-md-0" data-toggle="tooltip" data-placement="top" data-title="{{ __('button.AddPhotos') }}"><i class="fal fa-images"></i></a>

                @if ($carAdvert->isDraft() || $carAdvert->isClosed())
                    <form method="POST" action="{{ route('cabinet.adverts.send', $carAdvert) }}" class="mr-1">
                        @csrf
                        <button class="btn btn-sm btn-success mb-2 mb-md-0" data-toggle="tooltip" data-placement="top" data-title="{{ __('button.Activate') }}"><i class="fad fa-check" style="font-style: normal !important;"></i></button>
                    </form>
                @endif
                @if ($carAdvert->isActive())
                    <form method="POST" action="{{ route('cabinet.adverts.close', $carAdvert) }}" class="mr-1">
                        @csrf
                        <button class="btn btn-sm btn-warning mb-2 mb-md-0" data-toggle="tooltip" data-placement="top" data-title="{{ __('button.RentedOut') }}"><i class="fal fa-times"></i></button>
                    </form>
                @endif

                <form method="POST" action="{{ route('cabinet.adverts.destroy', $carAdvert) }}" class="mr-1">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger mb-2 mb-md-0" data-toggle="tooltip" data-placement="top" data-title="{{ __('button.Delete') }}"><i class="fad fa-trash" style="font-style: normal !important;"></i></button>
                </form>
            </div>
        </div>
    </div>
    @endcan

    <div class="ml-auto">
        @can ('manage-adverts')
            @if ($carAdvert->isOnModeration() || $carAdvert->isActive())
                <div class="text-muted small w-100 text-md-right">
                    <span>{{ __('Панель модерации') }}</span>
                </div>
            @endif

            <div class="d-flex flex-row mb-3 ">
                @if ($carAdvert->isOnModeration())
                    <form method="POST" action="{{ route('admin.cars.adverts.moderate', $carAdvert) }}" class="mr-1">
                        @csrf
                        <button class="btn btn-sm btn-success "><i class="fal fa-check d-md-none d-inline-block"></i><span class="d-md-inline-block d-none">{{ __('button.Accept') }}</span></button>
                    </form>
                @endif

                @if ($carAdvert->isOnModeration() || $carAdvert->isActive())
                    <a href="{{ route('admin.cars.adverts.reject', $carAdvert) }}" class="btn btn-sm btn-danger ml-auto">{{ __('button.Reject') }}</a>
                @endif
            </div>
        @endcan
    </div>
</div>
