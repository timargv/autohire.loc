<?php

namespace App\Providers;

use App\Entity\Tenant\BlackList;
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

        Gate::define('admin-panel', function (User $user) {
            return $user->isAdmin() || $user->isModerator();
        });


        Gate::define('manage-users', function (User $user) {
            return $user->isAdmin() || $user->isModerator();
        });

        Gate::define('manage-own-user', function (User $user) {
            return Auth::user()->id === $user->id;
        });

        Gate::define('manage-tickets', function (User $user) {
            return $user->isAdmin() || $user->isModerator();
        });

//        Gate::define('manage-regions', function (User $user) {
//            return $user->isAdmin();
//        });

        Gate::define('manage-adverts', function (User $user) {
            return $user->isAdmin() || $user->isModerator();
        });

        Gate::define('manage-adverts-categories', function (User $user) {
            return $user->isAdmin() || $user->isModerator();
        });



        Gate::define('manage-own-black-list', function (User $user, BlackList $blackList) {
            return $user->isAdmin() || $user->isModerator() || $blackList->author_id === $user->id;
        });

//        Gate::define('manage-banners', function (User $user) {
//            return $user->isAdmin() || $user->isModerator();
//        });



//        Gate::define('show-advert', function (User $user, Advert $advert) {
//            return $user->isAdmin() || $user->isModerator() || $advert->user_id === $user->id;
//        });

//
//        Gate::define('manage-own-advert', function (User $user, Advert $advert) {
//            return $advert->user_id === $user->id;
//        });
//
//        Gate::define('manage-own-banner', function (User $user, Banner $banner) {
//            return $banner->user_id === $user->id;
//        });
//
//        Gate::define('manage-own-ticket', function (User $user, Ticket $ticket) {
//            return $ticket->user_id === $user->id;
//        });
    }
}
