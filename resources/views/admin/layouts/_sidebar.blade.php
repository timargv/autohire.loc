<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../../img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>

            <li class="{{ $page === '' ? 'active' : '' }}"><a href="{{ route('admin.home') }}"><i class="fal fa-analytics mr-3"></i> <span>Dashboards</span></a></li>
            <li ><a href="{{ route('home') }}"><i class="far fa-link mr-3"></i> <span>На Сайт</span></a></li>


            <li class="header">Объявления</li>
            @can ('manage-adverts')
                <li class="{{ $page === 'adverts' ? 'active' : '' }}"><a href="{{ route('admin.cars.adverts.index') }}"><i class="fas fa-clipboard-list-check mr-3"></i> <span>Все объявления</span></a></li>
            @endcan

            @can ('manage-adverts-categories')
                <li class="{{ $page === 'brands' ? 'active' : '' }}"><a href="{{ route('admin.categories.car.brands.index') }}"><i class="fal fa-clipboard-list-check mr-3"></i> <span>Марка</span></a></li>
                <li class="{{ $page === 'years' ? 'active' : '' }}"><a href="{{ route('admin.categories.car.years.index') }}"><i class="fal fa-clipboard-list-check mr-3"></i> <span>Год</span></a></li>
                <li class="{{ $page === 'attributes' ? 'active' : '' }}"><a href="{{ route('admin.categories.car.attributes.index') }}"><i class="fal fa-clipboard-list-check mr-3"></i> <span>Атрибуты</span></a></li>
            @endcan

            <li class="header">Пользователи</li>
            @can ('manage-users')
                <li class="{{ $page === 'users' ? 'active' : '' }}"><a href="{{ route('admin.users.index') }}"><i class="fa fa-user"></i> <span>Пользователи</span></a></li>
                <li class="{{ $page === 'black-list-tenant' ? 'active' : '' }}"><a href="{{ route('admin.black.list.tenants.index') }}"><i class="fa fa-users"></i> <span>ЧС Арендаторов</span></a></li>
            @endcan


            <li class="header">Другое</li>
            <!-- Optionally, you can add icons to the links -->
{{--            <li class=""><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>--}}
{{--            <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>--}}
{{--            <li class="treeview">--}}
{{--                <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>--}}
{{--                    <span class="pull-right-container">--}}
{{--                <i class="fa fa-angle-left pull-right"></i>--}}
{{--              </span>--}}
{{--                </a>--}}
{{--                <ul class="treeview-menu">--}}
{{--                    <li><a href="#">Link in level 2</a></li>--}}
{{--                    <li><a href="#">Link in level 2</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>