<?php

namespace App\Listeners\Advert;

use App\Events\Advert\ModerationNotPassed;
use App\Notifications\Advert\ModerationNotPassedNotification;

class ModerationNotPassedListener
{
    public function handle(ModerationNotPassed $eventNotPassedModeration): void
    {
        $carAdvert = $eventNotPassedModeration->carAdvert;
        $carAdvert->author->notify(new ModerationNotPassedNotification($carAdvert));
    }
}
