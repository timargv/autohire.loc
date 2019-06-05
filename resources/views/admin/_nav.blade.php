<ul class="nav nav-tabs mb-3">
    <li class="nav-item"><a class="nav-link{{ $page === '' ? ' active' : '' }}" href="{{ route('admin.home') }}">Dashboard</a></li>
    @can ('manage-adverts')
        <li class="nav-item"><a class="nav-link{{ $page === 'adverts' ? ' active' : '' }}" href="{{ route('admin.home') }}">Объявления</a></li>
    @endcan
    @can ('manage-adverts-categories')
        <li class="nav-item"><a class="nav-link{{ $page === 'adverts_categories' ? ' active' : '' }}" href="{{ route('admin.home') }}">Категория</a></li>
    @endcan
    @can ('manage-users')
        <li class="nav-item"><a class="nav-link{{ $page === 'users' ? ' active' : '' }}" href="{{ route('admin.users.index') }}">Пользователи</a></li>
    @endcan
</ul>