<?php

namespace App\Providers;

use App\Entity\User\Avatar;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('admin.users._nav_user', function($view){
            $view->with('countModerationPhotos', Avatar::countModerationPhotos());
        });
    }
}
