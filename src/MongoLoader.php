<?php

declare(strict_types=1);

namespace App;

use MongoDB\Client;

class MongoLoader
{
    public function __invoke(): void
    {
        $client = new Client("mongodb://mongodb:27017");
        $collection = $client->prjctr->resource_monitoring;
        $collection->insertOne( [ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );
    }
}
