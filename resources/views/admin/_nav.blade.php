<ul class="nav nav-tabs mb-3">
    <li class="nav-item "><a class="nav-link{{ $page === '' ? ' active bg-danger text-white' : '' }} " href="{{ route('admin.home') }}">Dashboard</a></li>
    @can ('manage-adverts')
        <li class="nav-item"><a class="nav-link{{ $page === 'adverts' ? ' active bg-danger text-white' : '' }}" href="{{ route('admin.cars.adverts.index') }}">Объявления</a></li>
    @endcan
    @can ('manage-adverts-categories')
        <li class="nav-item"><a class="nav-link{{ $page === 'categories' ? ' active bg-danger text-white' : '' }}" href="{{ route('admin.categories.home') }}">Категория</a></li>
    @endcan
    @can ('manage-users')
        <li class="nav-item"><a class="nav-link{{ $page === 'users' ? ' active bg-danger text-white' : '' }}" href="{{ route('admin.users.index') }}">Пользователи</a></li>
        <li class="nav-item"><a class="nav-link {{ $page === 'black-list-tenant' ? ' active bg-danger text-white' : '' }}" href="{{ route('admin.black.list.tenants.index') }}">Черный список Арендаторов</a></li>
    @endcan
</ul>