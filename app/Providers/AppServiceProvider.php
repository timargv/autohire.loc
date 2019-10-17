<?php

namespace App\Providers;

use App\Entity\Cars\Advert\Dialog\Dialog;
use App\Entity\Tenant\BlackList;
use App\Entity\Tenant\BlackListComment;
use App\Entity\Tenant\BlackListPhoto;
use App\Entity\User\Avatar;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\Faker\Generator::class, function () {
            return \Faker\Factory::create('ru_RU');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('admin.users._nav_user', function($view){
            $view->with('countModerationAvatars', Avatar::countModerationAvatars());
        });

        view()->composer('layouts.navbar.navright', function($view){
            $view->with('newMessage', Dialog::getNewMessagesDialogCount());
        });

        view()->composer('admin.black-list-tenant._nav_button', function($view){
            $view->with('countModerationTenants', BlackList::countModerationTenants());
            $view->with('countModerationTenantPhotos', BlackListPhoto::countModerationPhotos());
            $view->with('countModerationTenantComments', BlackListComment::countModerationComments());
        });

    }
}
