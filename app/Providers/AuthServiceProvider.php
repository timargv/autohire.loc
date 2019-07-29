<?php

namespace App\Providers;

use App\Entity\Cars\Advert\Advert;
use App\Entity\Tenant\BlackList;
use App\Entity\Tenant\BlackListComment;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
//        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    public function boot(): void
    {
        $this->registerPolicies();
        $this->registerPermissions();
    }


    private function registerPermissions(): void
    {
        Gate::define('horizon', function (User $user) {
            return $user->isAdmin() || $user->isModerator();
        });


        // Доступ только Администратору
        Gate::define('admin', function (User $user) {
            return $user->isAdmin();
        });


        // Доступ к админ панели имеет МОДЕРАТОР И АДМИН
        Gate::define('admin-panel', function (User $user) {
            return $user->isAdmin() || $user->isModerator();
        });


        // Админ и модератор может имеет доступ к пользователям
        Gate::define('manage-users', function (User $user) {
            return $user->isAdmin() || $user->isModerator();
        });


        // Управлять своим профилем
        Gate::define('manage-own-user', function (User $user) {
            return Auth::user()->id === $user->id;
        });


        // Доступ к тикету только у МОДЕРАТОРА И АДМИНА
        Gate::define('manage-tickets', function (User $user) {
            return $user->isAdmin() || $user->isModerator();
        });


        // Разрешение на добавление арендателей в черный список
        Gate::define('manage-add-tenant', function (User $user) {
            return $user->isAdmin() || $user->isModerator() || $user->isLandLord();
        });


        /*
         * Доступ к администрированию объявлении [Админ или Модератор]
        */
        Gate::define('manage-adverts', function (User $user) {
            return $user->isAdmin() || $user->isModerator();
        });


        /*
         *  Доступ к атрибутам авто
        */
        Gate::define('manage-adverts-categories', function (User $user) {
            return $user->isAdmin() || $user->isModerator();
        });


        /*
         *  Показать свои объявления администратору, модератору, пользователю
        */
        Gate::define('show-advert', function (User $user, Advert $carAdvert) {
            return $user->isAdmin() || $user->isModerator() || $carAdvert->author_id === $user->id;
        });



        /*
         *  Доступ к своим добавленым в черный список арендателей Автор, Админ, Модератор
        */
        Gate::define('manage-own-black-list', function (User $user, BlackList $blackList) {
            return $user->isAdmin() || $user->isModerator() || $blackList->author_id === $user->id || $blackList->isActive() || $blackList->isModeration();
        });


        /*
         *  Доступ к своим добавленым комментариям к арендателю в черном списке Автор, Админ, Модератор
        */
        Gate::define('manage-own-black-list-comment', function (User $user, BlackListComment $blackListComment) {
            return $user->isAdmin() || $user->isModerator() || $blackListComment->author_id === $user->id || $blackListComment->isActive();
        });


        /*
         *  Доступ к своим объявлениям
        */
        Gate::define('manage-own-advert', function (User $user, Advert $carAdvert) {
            return $carAdvert->author_id === $user->id;
        });

    }
}
