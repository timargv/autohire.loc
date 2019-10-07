<?php


namespace App\UseCases\CarAdverts;


use Illuminate\Contracts\Pagination\Paginator;

class SearchResult
{

    public $carAdverts;
    public $carBrandsCounts;
    public $carModelsCounts;
    public $carSeriesCounts;

    public function __construct(Paginator $carAdverts, array $carBrandsCounts, array $carModelsCounts, array $carSeriesCounts)
    {
        $this->carAdverts = $carAdverts;
        $this->carBrandsCounts = $carBrandsCounts;
        $this->carModelsCounts = $carModelsCounts;
        $this->carSeriesCounts = $carSeriesCounts;
    }

}