<?php

declare(strict_types=1);

namespace App;

use Elastic\Elasticsearch\ClientBuilder;

class ElasticLoader
{
    public function __invoke(): void
    {
        $client = ClientBuilder::create()
            ->setHosts(['http://elasticsearch:9200'])
            ->setBasicAuthentication('elastic', 'password')
            ->build();

        $params = [
            'index' => 'resource_monitoring',
            'id'    => uniqid(),
            'body'  => ['testField' => 'abc']
        ];

        $client->index($params);
    }
}
