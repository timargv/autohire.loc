<?php


namespace App\UseCases\CarAdverts;


use Illuminate\Contracts\Pagination\Paginator;

class SearchResult
{

    public $carAdverts;
    public $carBrandsCounts;

    public function __construct(Paginator $carAdverts, array $carBrandsCounts)
    {
        $this->carAdverts = $carAdverts;
        $this->carBrandsCounts = $carBrandsCounts;
    }

}
