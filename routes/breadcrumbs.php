<?php

use App\Entity\Tenant\BlackList;
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
    $crumbs->push(__('passwords.Change'), route('password.reset'));
});


Breadcrumbs::register('profile.show', function (Crumbs $crumbs, User $user) {
    $crumbs->parent('cabinet.home');
    $crumbs->push($user->name, route('cabinet.profile.home', $user));
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
    $crumbs->push(__('fillable.Advert'), route('cabinet.adverts.index'));
});

Breadcrumbs::register('cabinet.adverts.create', function (Crumbs $crumbs) {
    $crumbs->parent('adverts.index');
    $crumbs->push(__('fillable.Create'), route('cabinet.adverts.create'));
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

// == Admin Avatars
Breadcrumbs::register('admin.users.avatar.home', function (Crumbs $crumbs) {
    $crumbs->parent('admin.users.index');
    $crumbs->push(__('fillable.Avatars'), route('admin.users.avatar.home'));
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