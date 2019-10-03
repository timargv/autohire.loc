<?php

use App\Entity\Cars\Advert\Advert;
use App\Entity\Cars\Attribute;
use App\Entity\Categories\Car\CarBrand;
use App\Entity\Categories\Car\Year;
use App\Entity\Tenant\BlackList;
use App\Entity\User\Group;
use App\Http\Router\AdvertsPath;
use App\User;
use DaveJamesMiller\Breadcrumbs\BreadcrumbsGenerator as Crumbs;

Breadcrumbs::register('home', function (Crumbs $crumbs) {
    $crumbs->push('Главная', route('home'));
});

Breadcrumbs::register('login', function (Crumbs $crumbs) {
    $crumbs->parent('home');
    $crumbs->push(__('auth.Login'), route('login'));
});

Breadcrumbs::register('login.phone', function (Crumbs $crumbs) {
    $crumbs->parent('home');
    $crumbs->push(__('auth.Login'), route('login.phone'));
});

Breadcrumbs::register('register', function (Crumbs $crumbs) {
    $crumbs->parent('home');
    $crumbs->push(__('register.Register'), route('register'));
});

Breadcrumbs::register('password.request', function (Crumbs $crumbs) {
    $crumbs->parent('login');
    $crumbs->push(__('auth.ResetPassword'), route('password.request'));
});

Breadcrumbs::register('password.reset', function (Crumbs $crumbs) {
    $crumbs->parent('password.request');
    $crumbs->push(__('passwords.Change'));
});


Breadcrumbs::register('profile.show', function (Crumbs $crumbs, User $user) {
    $crumbs->parent('cabinet.home');
    $crumbs->push($user->name, route('cabinet.profile.home', $user));
});




// Car Advert
Breadcrumbs::register('cars.adverts.index', function (Crumbs $crumbs, AdvertsPath $path = null) {
    $path = $path ?: adverts_path(null);
    $crumbs->parent('cars.adverts.brand', $path);
});

Breadcrumbs::register('cars.adverts.show', function (Crumbs $crumbs, Advert $carAdvert) {

    $carBrandPath = $carAdvert->carBrand;

    if ($carSerie = $carAdvert->carSerie) {
        $carBrandPath = $carSerie;
    } else if ($carModel = $carAdvert->carModel) {
        $carBrandPath = $carModel;
    }
    $crumbs->parent('cars.adverts.brand', adverts_path($carBrandPath));
    $crumbs->push('Актуально', route('cars.adverts.show', $carAdvert));
});

// Car Brand
Breadcrumbs::register('cars.adverts.brand', function (Crumbs $crumbs, AdvertsPath $path) {
    if ($path->carBrand && $parent = $path->carBrand->parent) {
        $crumbs->parent('cars.adverts.brand', $path->withCarAdvert($parent));
    } else {
        $crumbs->parent('home');
        $crumbs->push(trans_choice('fillable.CarsLite', 1), route('cars.adverts.index'));
    }
    if ($path->carBrand) {
        $crumbs->push($path->carBrand->name, route('cars.adverts.index', $path));
    }
});



// Cabinet

Breadcrumbs::register('cabinet.home', function (Crumbs $crumbs) {
    $crumbs->parent('home');
    $crumbs->push(__('menu.Cabinet'), route('cabinet.home'));
});

Breadcrumbs::register('cabinet.profile.home', function (Crumbs $crumbs) {
    $crumbs->parent('cabinet.home');
    $crumbs->push(__('menu.Profile'), route('cabinet.profile.home'));
});

Breadcrumbs::register('cabinet.profile.edit', function (Crumbs $crumbs) {
    $crumbs->parent('cabinet.profile.home');
    $crumbs->push(__('button.Edit'), route('cabinet.profile.edit'));
});

Breadcrumbs::register('cabinet.profile.phone', function (Crumbs $crumbs) {
    $crumbs->parent('cabinet.profile.home');
    $crumbs->push(__('fillable.Phone'), route('cabinet.profile.phone'));
});


// Cabinet Adverts
Breadcrumbs::register('cabinet.adverts.index', function (Crumbs $crumbs) {
    $crumbs->parent('cabinet.home');
    $crumbs->push(__('fillable.Adverts'), route('cabinet.adverts.index'));
});

Breadcrumbs::register('cabinet.adverts.create', function (Crumbs $crumbs) {
    $crumbs->parent('cabinet.adverts.index');
    $crumbs->push(__('fillable.Create'), route('cabinet.adverts.create'));
});

Breadcrumbs::register('cabinet.adverts.edit', function (Crumbs $crumbs, Advert $carAdvert) {
    $crumbs->parent('cabinet.adverts.show', $carAdvert);
    $crumbs->push(__('fillable.Edit'), route('cabinet.adverts.edit', $carAdvert));
});

Breadcrumbs::register('cabinet.adverts.show', function (Crumbs $crumbs, Advert $carAdvert) {
    $crumbs->parent('cabinet.adverts.index');
    $crumbs->push($carAdvert->carBrand->name, route('cabinet.adverts.show', $carAdvert));
});


// Cabinet Adverts Photos
Breadcrumbs::register('cabinet.adverts.photos', function (Crumbs $crumbs, Advert $carAdvert) {
    $crumbs->parent('cabinet.adverts.show', $carAdvert);
    $crumbs->push(__('fillable.Photos'), route('cabinet.adverts.photos', $carAdvert));
});

//Breadcrumbs::register('cabinet.adverts.create.region', function (Crumbs $crumbs, Category $category, Region $region = null) {
//    $crumbs->parent('cabinet.adverts.create');
//    $crumbs->push($category->name, route('cabinet.adverts.create.region', [$category, $region]));
//});
//
//Breadcrumbs::register('cabinet.adverts.create.advert', function (Crumbs $crumbs, Category $category, Region $region = null) {
//    $crumbs->parent('cabinet.adverts.create.region', $category, $region);
//    $crumbs->push($region ? $region->name : 'All', route('cabinet.adverts.create.advert', [$category, $region]));
//});



// Cabinet Tenant
Breadcrumbs::register('cabinet.black.list.tenants.home', function (Crumbs $crumbs) {
    $crumbs->parent('cabinet.home');
    $crumbs->push(__('fillable.BlackListTenants'), route('cabinet.black.list.tenants.home'));
});

Breadcrumbs::register('cabinet.black.list.tenants.create', function (Crumbs $crumbs) {
    $crumbs->parent('cabinet.black.list.tenants.home');
    $crumbs->push(__('fillable.Create'), route('cabinet.black.list.tenants.create'));
});

Breadcrumbs::register('cabinet.black.list.tenants.show', function (Crumbs $crumbs, BlackList $tenant) {
    $crumbs->parent('cabinet.black.list.tenants.home');
    $crumbs->push($tenant->name, route('cabinet.black.list.tenants.show', $tenant));
});



// Favorites

Breadcrumbs::register('cabinet.favorites.index', function (Crumbs $crumbs) {
    $crumbs->parent('cabinet.home');
    $crumbs->push(__('fillable.Adverts'), route('cabinet.favorites.index'));
});

// Cabinet Tickets

Breadcrumbs::register('cabinet.tickets.index', function (Crumbs $crumbs) {
    $crumbs->parent('cabinet.home');
    $crumbs->push(__('fillable.Tickets'), route('cabinet.tickets.index'));
});

Breadcrumbs::register('cabinet.tickets.create', function (Crumbs $crumbs) {
    $crumbs->parent('cabinet.tickets.index');
    $crumbs->push(__('fillable.Create'), route('cabinet.tickets.create'));
});

Breadcrumbs::register('cabinet.tickets.show', function (Crumbs $crumbs, Ticket $ticket) {
    $crumbs->parent('cabinet.tickets.index');
    $crumbs->push($ticket->subject, route('cabinet.tickets.show', $ticket));
});



// ======= Admin

Breadcrumbs::register('admin.home', function (Crumbs $crumbs) {
    $crumbs->parent('home');
    $crumbs->push(__('fillable.Admin'), route('admin.home'));
});


// === Admin Users
Breadcrumbs::register('admin.users.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.home');
    $crumbs->push(__('fillable.Users'), route('admin.users.index'));
});

Breadcrumbs::register('admin.users.create', function (Crumbs $crumbs) {
    $crumbs->parent('admin.users.index');
    $crumbs->push(__('fillable.Create'), route('admin.users.create'));
});

Breadcrumbs::register('admin.users.show', function (Crumbs $crumbs, User $user) {
    $crumbs->parent('admin.users.index');
    $crumbs->push($user->name, route('admin.users.show', $user));
});

Breadcrumbs::register('admin.users.edit', function (Crumbs $crumbs, User $user) {
    $crumbs->parent('admin.users.show', $user);
    $crumbs->push(__('fillable.Edit'), route('admin.users.edit', $user));
});

// == Admin User Avatars
Breadcrumbs::register('admin.users.avatar.home', function (Crumbs $crumbs) {
    $crumbs->parent('admin.users.index');
    $crumbs->push(__('fillable.Avatars'), route('admin.users.avatar.home'));
});


// == Admin User Groups
Breadcrumbs::register('admin.users.groups.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.users.index');
    $crumbs->push(__('fillable.Groups'), route('admin.users.groups.index'));
});

Breadcrumbs::register('admin.users.groups.edit', function (Crumbs $crumbs, Group $group) {
    $crumbs->parent('admin.users.groups.index');
    $crumbs->push($group->name, route('admin.users.groups.edit', $group));
});


// === Admin Tenants
Breadcrumbs::register('admin.black.list.tenants.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.home');
    $crumbs->push(__('fillable.BlackListTenants'), route('admin.black.list.tenants.index'));
});

Breadcrumbs::register('admin.black.list.tenants.show', function (Crumbs $crumbs, BlackList $tenant) {
    $crumbs->parent('admin.black.list.tenants.index');
    $crumbs->push($tenant->name, route('admin.black.list.tenants.show', $tenant));
});

Breadcrumbs::register('admin.black.list.tenants.create', function (Crumbs $crumbs) {
    $crumbs->parent('admin.black.list.tenants.index');
    $crumbs->push(__('fillable.Create'), route('admin.black.list.tenants.create'));
});


// == Admin Tenants Comments
Breadcrumbs::register('admin.black.list.tenants.comments.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.black.list.tenants.index');
    $crumbs->push(__('fillable.Comments'), route('admin.black.list.tenants.comments.index'));
});


// == Admin Tenants PHOTOS
Breadcrumbs::register('admin.black.list.tenants.photos.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.black.list.tenants.index');
    $crumbs->push(__('fillable.Photos'), route('admin.black.list.tenants.photos.index'));
});




// === Admin Category
Breadcrumbs::register('admin.categories.home', function (Crumbs $crumbs) {
    $crumbs->parent('admin.home');
    $crumbs->push(__('fillable.Categories'), route('admin.categories.home'));
});


// == Admin Category Car Brand Model Series
Breadcrumbs::register('admin.categories.car.brands.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.categories.home');
    $crumbs->push(__('fillable.CarBrands'), route('admin.categories.car.brands.index'));
});

Breadcrumbs::register('admin.categories.car.brands.create', function (Crumbs $crumbs) {
    $crumbs->parent('admin.categories.car.brands.index');
    $crumbs->push(__('fillable.Create'), route('admin.categories.car.brands.create'));
});

Breadcrumbs::register('admin.categories.car.brands.edit', function (Crumbs $crumbs, $carBrand) {
    $carBrand = CarBrand::findOrFail($carBrand);
    if ($parent = $carBrand->parent) {
        $crumbs->parent('admin.categories.car.brands.show', $parent->id);
    } else {
        $crumbs->parent('admin.categories.car.brands.index');
    }
    $crumbs->push(__('fillable.Edit') .' '. $carBrand->name, route('admin.categories.car.brands.edit', $carBrand));
});


Breadcrumbs::register('admin.categories.car.brands.show', function (Crumbs $crumbs, $carBrand) {
    $carBrand = CarBrand::findOrFail($carBrand);
    if ($parent = $carBrand->parent) {
        $crumbs->parent('admin.categories.car.brands.show', $parent->id);
    } else {
        $crumbs->parent('admin.categories.car.brands.index');
    }
    $crumbs->push($carBrand->name, route('admin.categories.car.brands.show', $carBrand));
});




//Breadcrumbs::register('admin.categories.car.brands.model.create', function (Crumbs $crumbs, CarBrand $carBrand) {
//    if ($parent = $carBrand->parent) {
//        $crumbs->parent('admin.categories.car.brands.show', $parent);
//    } else {
//        $crumbs->parent('admin.categories.car.brands.show', $carBrand->id);
//    }
//    $crumbs->push(__('fillable.Create') .' '. __('fillable.CarModels'), route('admin.categories.car.brands.model.create', $carBrand));
//});


//Breadcrumbs::register('admin.categories.car.brands.show', function (Crumbs $crumbs, CarBrand $car_brand) {
//
//    $crumbs->push('ss'  );
//});
//


// == Admin Category Car Years
Breadcrumbs::register('admin.categories.car.years.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.categories.home');
    $crumbs->push(trans_choice('fillable.CarYears', 8), route('admin.categories.car.years.index'));
});

Breadcrumbs::register('admin.categories.car.years.create', function (Crumbs $crumbs) {
    $crumbs->parent('admin.categories.car.years.index');
    $crumbs->push(__('fillable.Create'), route('admin.categories.car.years.create'));
});


Breadcrumbs::register('admin.categories.car.years.edit', function (Crumbs $crumbs, Year $year) {
    $crumbs->parent('admin.categories.car.years.index');
    $crumbs->push($year->name, route('admin.categories.car.years.edit', $year));
});


// == Admin Category Car Attributes
Breadcrumbs::register('admin.categories.car.attributes.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.categories.home');
    $crumbs->push(__('fillable.Attributes'), route('admin.categories.car.attributes.index'));
});

Breadcrumbs::register('admin.categories.car.attributes.create', function (Crumbs $crumbs) {
    $crumbs->parent('admin.categories.car.attributes.index');
    $crumbs->push(__('fillable.Create'), route('admin.categories.car.attributes.create'));
});

Breadcrumbs::register('admin.categories.car.attributes.edit', function (Crumbs $crumbs, Attribute $attribute) {
    $crumbs->parent('admin.categories.car.attributes.index');
    $crumbs->push($attribute->name, route('admin.categories.car.attributes.edit', $attribute));
});


// == Admin CarAdverts
Breadcrumbs::register('admin.cars.adverts.index', function (Crumbs $crumbs) {
    $crumbs->parent('admin.home');
    $crumbs->push(__('fillable.Adverts'), route('admin.cars.adverts.index'));
});

Breadcrumbs::register('admin.cars.adverts.reject', function (Crumbs $crumbs, Advert $carAdvert) {
    $crumbs->parent('admin.home');
    $crumbs->push($carAdvert->carBrand->name, route('admin.cars.adverts.reject', $carAdvert));
});