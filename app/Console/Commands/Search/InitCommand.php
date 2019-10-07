<?php

namespace App\Console\Commands\Search;

use Elasticsearch\Client;
use Elasticsearch\Common\Exceptions\Missing404Exception;
use Illuminate\Console\Command;

class InitCommand extends Command
{

    protected $signature = 'search:init';

    private $client;

    public function __construct(Client $client)
    {
        parent::__construct();
        $this->client = $client;
    }

    public function handle() : bool
    {
        $this->initAdverts();
        return true;
    }

    private function initAdverts(): void
    {
        try {
            $this->client->indices()->delete([
                'index' => 'car_adverts'
            ]);
        } catch (Missing404Exception $e) {
        }

        $params = [
            'index' => 'car_adverts',
            'body' => [
                'settings' => [
                    'analysis' => [
                        'char_filter' => [
                            'replace' => [
                                'type' => 'mapping',
                                'mappings' => [
                                    '&=> and '
                                ],
                            ],
                        ],
                        'filter' => [
                            'word_delimiter' => [
                                'type' => 'word_delimiter',
                                'split_on_numerics' => false,
                                'split_on_case_change' => true,
                                'generate_word_parts' => true,
                                'generate_number_parts' => true,
                                'catenate_all' => true,
                                'preserve_original' => true,
                                'catenate_numbers' => true,
                            ],
                        ],
                        'analyzer' => [
                            'default' => [
                                'type' => 'custom',
                                'char_filter' => [
                                    'html_strip',
                                    'replace',
                                ],
                                'tokenizer' => 'whitespace',
                                'filter' => [
                                    'lowercase',
                                    'word_delimiter',
                                ],
                            ],
                        ],
                    ],
                    'number_of_shards' => 3,
                    'number_of_replicas' => 2
                ],
                'mappings' => [
                        '_source' => [
                            'enabled' => true,
                        ],
                        'properties' => [
                            'id' => [
                                'type' => 'integer',
                            ],
                            'published_at' => [
                                'type' => 'date',
                            ],
                            'price_per_day' => [
                                'type' => 'integer',
                            ],
                            'status' => [
                                'type' => 'keyword',
                            ],
                            'type_rental' => [
                                'type' => 'keyword',
                            ],
                            'car_brand' => [
                                'type' => 'integer',
                            ],
                            'car_model' => [
                                'type' => 'integer',
                            ],
                            'car_series' => [
                                'type' => 'integer',
                            ],
                            'car_year' => [
                                'type' => 'integer',
                            ],
                            'value' => [
                                'type' => 'nested',
                                'properties' => [
                                    'attribute' => [
                                        'type' => 'integer',
                                    ],
                                    'value_string' => [
                                        'type' => 'keyword',
                                    ],
                                    'value_number' => [
                                        'type' => 'integer',
                                    ],
                                ],
                            ],
                        ],
                ],
            ],
        ];

        $this->client->indices()->create($params);
    }
}
