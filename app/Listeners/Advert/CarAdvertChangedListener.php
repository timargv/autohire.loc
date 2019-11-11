<?php

namespace App\Listeners\Advert;

use App\Jobs\Advert\ReindexCarAdvert;

class AdvertChangedListener
{
    public function handle($event): void
    {
        ReindexCarAdvert::dispatch($event->carAdvert);
    }
}
