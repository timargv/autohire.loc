<?php


namespace App\Providers;


use App\Entity\Cars\Advert\Advert;
use App\Entity\Cars\Advert\Dialog\Dialog;
use App\Entity\Categories\Car\CarBrand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class CacheServiceProvider extends ServiceProvider
{

    private $classes = [
        CarBrand::class,
    ];

    public function boot(): void
    {
        foreach ($this->classes as $class) {
            $this->registerFlusher($class);
        }
    }

    private function registerFlusher($class): void
    {
        $flush = function() use ($class) {
            Cache::tags($class)->flush();
        };

        /** @var Model $class */
        $class::created($flush);
        $class::saved($flush);
        $class::updated($flush);
        $class::deleted($flush);
    }
}