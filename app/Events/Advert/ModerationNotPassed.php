<?php

namespace App\Events\Advert;

use App\Entity\Cars\Advert\Advert;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class ModerationNotPassed
{
    use Dispatchable, SerializesModels;

    public $carAdvert;

    public function __construct(Advert $carAdvert)
    {
        $this->carAdvert = $carAdvert;
    }

}
