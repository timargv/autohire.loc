<?php

namespace App\Listeners\Advert;

use App\Events\Advert\ModerationPassed;
use App\Notifications\Advert\ModerationPassedNotification;

class ModerationPassedListener
{
    public function handle(ModerationPassed $event): void
    {
        $carAdvert = $event->carAdvert;
        $carAdvert->author->notify(new ModerationPassedNotification($carAdvert));
    }
}
