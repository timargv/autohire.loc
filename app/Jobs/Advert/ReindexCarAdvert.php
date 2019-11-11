<?php

namespace App\Jobs\Advert;

use App\Entity\Cars\Advert\Advert;
use App\Services\Search\CarAdvertIndexer;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ReindexCarAdvert implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    private $carAdvert;

    public function __construct(Advert $carAdvert)
    {
        $this->carAdvert = $carAdvert;
    }


    public function handle(CarAdvertIndexer $indexer)
    {
        $indexer->index($this->carAdvert);
    }
}
