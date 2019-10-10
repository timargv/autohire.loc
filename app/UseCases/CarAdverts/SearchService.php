<?php


namespace App\UseCases\CarAdverts;


use App\Entity\Cars\Advert\Advert;
use App\Entity\Categories\Car\CarBrand;
use App\Entity\Categories\Car\Year;
use App\Http\Requests\Adverts\SearchRequest;
use App\Http\Router\AdvertsPath;
use Elasticsearch\Client;
use Illuminate\Database\Query\Expression;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class SearchService
{

    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function search (?CarBrand $carBrand, SearchRequest $request, int $perPage, int $page): SearchResult
    {
        $values = array_filter((array)$request->input('attrs'), function ($value) {
            return !empty($value['equals']);
        });

        $response = $this->client->search(
            [
                'index' => 'car_adverts',
                'body' => [
                    '_source' => ['id'],
                    'from' => ($page - 1) * $perPage,
                    'size' => $perPage,
                    'sort' => empty($request['text']) ? [
                        ['published_at' => ['order' => 'desc']],
                    ] : [],
                    'aggs' => [
                        'group_by_carBrand' => [
                            'terms' => [
                                'field' => 'car_brands',
                            ],
                        ],
                    ],
                    'query' => [
                        'bool' => [
                            'must' => array_merge(
                                [
                                    ['term' => ['status' => Advert::STATUS_ACTIVE]],
                                ],
                                array_filter([
                                    $carBrand ? ['term' => ['car_brands' => $carBrand->id]] : false,
                                    $request['car_year'] ? ['term' => ['car_year' => $request['car_year']]] : false,
                                    $request['type_rental'] ? ['term' => ['type_rental' => $request['type_rental']]] : false,
//                                !empty($request['text']) ? ['multi_match' => [
//                                    'query' => $request['text'],
//                                    'fields' => [ 'title^3', 'content' ]
//                                ]] : false,
                                ]),
                                array_map(function ($value, $id) {
                                    return [
                                        'nested' => [
                                            'path' => 'values',
                                            'query' => [
                                                'bool' => [
                                                    'must' => array_values(array_filter([
                                                        ['match' => ['values.car_attribute' => $id]],
                                                        !empty($value['equals']) ? ['match' => ['values.car_value_string' => $value['equals']]] : false
//                                                    !empty($value['from']) ? ['range' => ['values.value_int' => ['gte' => $value['from']]]] : false,
//                                                    !empty($value['to']) ? ['range' => ['values.value_int' => ['lte' => $value['to']]]] : false,
                                                    ])),
                                                ],
                                            ],
                                        ],
                                    ];
                                }, $values, array_keys($values))
                            )
                        ],
                    ],
                ],
            ]
        );

        $ids = array_column($response['hits']['hits'], '_id');
//dd($ids);

        if ($ids) {
            $items = Advert::active()
                ->with(['carBrand', 'carModel', 'carSerie', 'carYear'])
                ->whereIn('id', $ids)
                ->orderBy(new Expression('FIELD(id,' . implode(',', $ids) . ')'))
                ->get();
//            $pagination = new LengthAwarePaginator($items, $response['hits']['total']['value'], $perPage, $page);
            $pagination = new LengthAwarePaginator($items, $response['hits']['total']['value'], $perPage, $page, ['path' => Paginator::resolveCurrentPath($page)]);

//            $pagination = new LengthAwarePaginator($items->forPage($page, $perPage), $response['hits']['total']['value'], $perPage, $page, ['path'=>Paginator::resolveCurrentPath($page)]);


//            $pagination =  new LengthAwarePaginator($items. $response['hits']['total']['value'], $perPage, $page);
//
//            return view('adminexception.index', compact('admin_exceptions'))->withInput($request->all())
        } else {
            $pagination = new LengthAwarePaginator([], 0, $perPage, $page);
        }

//dd($pagination);

//        dd(Advert::active()
//            ->with(['carBrand', 'carModel', 'carSerie', 'carYear'])
//            ->whereIn('id', $ids)
//            ->orderBy(new Expression('FIELD(id,' . implode(',', $ids) . ')'))->paginate(15), $pagination2);

        return new SearchResult(
            $pagination,
            array_column($response['aggregations']['group_by_carBrand']['buckets'], 'doc_count', 'key')
        );
    }

}
