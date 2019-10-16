@if($page)
    <div class="include_cabinet_menu mb-3 mb-md-0" style="    background-color: #e9ecef;">
        <div class="container">
            <div class="row">
                <ul class="d-block nav cabinet_nav overflow-auto text-nowrap">
                    <li class="nav-item d-inline-block"><a class="nav-link{{ $page === 'home' ? ' active' : '' }}" href="{{ route('cabinet.home') }}">
                            <i class="far fa-chart-line pr-md-1"></i> <span class="{{ $page === 'home' ? '' : 'd-none' }} d-md-inline-block">{{ __('fillable.Dashboard') }}</span></a>
                    </li>
                    <li class="nav-item d-inline-block"><a class="nav-link{{ $page === 'adverts' ? ' active' : '' }}" href="{{ route('cabinet.adverts.index') }}">
                            <i class="fal fa-ad pr-md-1"></i> <span class="{{ $page === 'adverts' ? '' : 'd-none' }} d-md-inline-block">{{ __('fillable.Adverts') }}</span></a>
                    </li>
                    <li class="nav-item d-inline-block"><a class="nav-link{{ $page === 'dialogs' ? ' active' : '' }}" href="{{ route('cabinet.dialogs.index') }}">
                            <i class="fad fa-comments-alt pr-md-1"></i> <span class="{{ $page === 'dialogs' ? '' : 'd-none' }} d-md-inline-block">{{ trans_choice('fillable.Message', 2) }}</span></a>
                    </li>
                    <li class="nav-item d-inline-block"><a class="nav-link{{ $page === 'favorites' ? ' active' : '' }}" href="{{ route('cabinet.favorites.index') }}">
                            <i class="far fa-heart pr-md-1"></i> <span class="{{ $page === 'favorites' ? '' : 'd-none' }} d-md-inline-block">{{ trans_choice('title.favorite', 1) }}</span></a>
                    </li>
                    <li class="nav-item d-inline-block"><a class="nav-link{{ $page === 'profile' ? ' active' : '' }}" href="{{ route('cabinet.profile.home') }}">
                            <i class="far fa-id-badge pr-md-1"></i> <span class="{{ $page === 'profile' ? '' : 'd-none' }} d-md-inline-block">{{ __('menu.Profile') }}</span></a>
                    </li>
                    <li class="nav-item d-inline-block"><a class="nav-link{{ $page === 'tickets' ? ' active' : '' }}" href="{{ route('cabinet.tickets.index') }}">
                            <i class="far fa-ticket pr-md-1"></i> <span class="{{ $page === 'tickets' ? '' : 'd-none' }} d-md-inline-block">{{ __('fillable.Tickets') }}</span></a>
                    </li>
                    <li class="nav-item d-inline-block"><a class="nav-link {{ $page === 'black-list-tenant' ? ' active' : '' }}" href="{{ route('cabinet.black.list.tenants.home') }}">
                            <i class="fad fa-user-slash pr-md-1"></i> <span class="{{ $page === 'black-list-tenant' ? '' : 'd-none' }} d-md-inline-block">Черный список Арендаторов</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endif
