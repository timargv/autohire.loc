<?php


namespace App\Services\Search;


use App\Entity\Cars\Advert\Advert;
use App\Entity\Cars\Advert\Value;
use Elasticsearch\Client;

class CarAdvertIndexer
{

    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function clear () : void
    {
        $this->client->deleteByQuery([
            'index' => 'car_adverts',
            'body' => [
                'query' => [
                    'match_all' => new \stdClass(),
                ],
            ],
        ]);
    }

    public function index (Advert $carAdvert) : void
    {
        $this->client->index([
            'index' =>'car_adverts',
            'id' => $carAdvert->id,
            'body' => [
                'id' => $carAdvert->id,
                'published_at' => $carAdvert->published_at ? $carAdvert->published_at->format(DATE_ATOM) : null,
                'price_per_day' => $carAdvert->price_per_day,
                'status' => $carAdvert->status,
                'type_rental' => $carAdvert->type_rental,
                'car_brands' => array_filter(array(
                    $carAdvert->carBrand ? $carAdvert->carBrand->id : '',
                    $carAdvert->carModel ? $carAdvert->carModel->id : '',
                    $carAdvert->carSerie ? $carAdvert->carSerie->id : '')),
                'car_year' => $carAdvert->carYear ? $carAdvert->carYear->id : '',
                'values' => array_map(function (Value $value) {
                    return [
                        'car_attribute' => $value->car_attribute_id,
                        'car_value_string' => (string)$value->value,
                        'car_value_int' => (int)$value->value,
                    ];
                }, $carAdvert->values()->getModels()),
            ]

        ]);
    }

    public function remove(Advert $carAdvert): void
    {
        $this->client->delete([
            'index' => 'car_adverts',
            'id' => $carAdvert->id,
        ]);
    }

}
