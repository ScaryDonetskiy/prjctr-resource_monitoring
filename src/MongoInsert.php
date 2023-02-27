<?php

declare(strict_types=1);

namespace App;

use MongoDB\Client;

class MongoInsert
{
    public function __invoke(array $insertData): void
    {
        $client = new Client("mongodb://mongodb:27017");
        $collection = $client->prjctr->stress_test;
        $collection->insertOne($insertData);
    }
}
