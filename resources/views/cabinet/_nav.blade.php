<ul class="nav nav-tabs mb-3">
    <li class="nav-item"><a class="nav-link{{ $page === '' ? ' active' : '' }}" href="{{ route('cabinet.home') }}">{{ __('fillable.Dashboard') }}</a></li>
    <li class="nav-item"><a class="nav-link{{ $page === 'adverts' ? ' active' : '' }}" href="{{-- route('cabinet.adverts.index') --}}">{{ __('fillable.Adverts') }}</a></li>
    <li class="nav-item"><a class="nav-link{{ $page === 'favorites' ? ' active' : '' }}" href="{{-- route('cabinet.favorites.index') --}}">Favorites</a></li>
    <li class="nav-item"><a class="nav-link{{ $page === 'profile' ? ' active' : '' }}" href="{{ route('cabinet.profile.home') }}">{{ __('menu.Profile') }}</a></li>
    <li class="nav-item"><a class="nav-link{{ $page === 'tickets' ? ' active' : '' }}" href="{{-- route('cabinet.tickets.index') --}}">{{ __('fillable.Tickets') }}</a></li>
</ul>