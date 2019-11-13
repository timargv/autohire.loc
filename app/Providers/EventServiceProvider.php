<?php

namespace App\Providers;

use App\Events\Advert\ModerationPassed;
use App\Listeners\Advert\AdvertChangedListener;
use App\Listeners\Advert\ModerationNotPassedListener;
use App\Listeners\Advert\ModerationPassedListener;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ModerationPassed::class => [
            AdvertChangedListener::class,
            ModerationPassedListener::class,
            ModerationNotPassedListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
