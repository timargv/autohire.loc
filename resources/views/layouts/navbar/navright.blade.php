<ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('auth.Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('register.Register') }}</a>
            </li>
        @endif
    @else
        @can ('admin-panel')
            <li class="nav-item">
                <a class="nav-link font-weight-bold" href="{{ route('admin.home') }}" target="_blank">{{ __('menu.Admin') }}</a>
            </li>
        @endcan
        <li class="nav-item">
            <a class="nav-link font-weight-light px-2 py-1 mt-1 rounded bg-success  text-white" href="{{ route('cabinet.adverts.create') }}"><i style="font-size: 18px; position:relative; top: 2px" class="fal fa-plus-circle mr-1"></i>{{ __('menu.AddAdvert') }}</a>
        </li>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('cabinet.home') }}">{{ __('menu.Cabinet') }}</a>
                <a class="dropdown-item" href="{{ route('cabinet.adverts.index') }}">{{ __('menu.MyAdverts') }}</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('auth.Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>