<?php

namespace App\Console\Commands\Search;

use App\Entity\Cars\Advert\Advert;
use App\Services\Search\CarAdvertIndexer;
use Illuminate\Console\Command;

class ReindexCommand extends Command
{
    protected $signature = 'search:reindex';

    private $carAdverts;

    public function __construct(CarAdvertIndexer $carAdverts)
    {
        parent::__construct();
        $this->carAdverts = $carAdverts;
    }

    public function handle(): bool
    {
        $this->carAdverts->clear();

        foreach (Advert::active()->orderBy('id')->cursor() as $carAdverts) {
            $this->carAdverts->index($carAdverts);
        }

        return true;
    }
}
