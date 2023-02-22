<?php

declare(strict_types=1);

namespace App;

use League\Monga;

class MongoLoader
{
    public function __invoke(): void
    {
        $connection = Monga::connection('mongodb://mongodb:27017/?connect=direct');
        $database = $connection->database('prjctr');
        $collection = $database->collection('resource_monitoring');
        $collection->insert([
            [
                'name' => 'John',
                'surname' => 'Doe',
                'nick' => 'The Unknown Man',
                'age' => 20,
            ],
            [
                'name' => 'Frank',
                'surname' => 'de Jonge',
                'nick' => 'Unknown',
                'nik' => 'No Man',
                'age' => 23,
            ],
        ]);
    }
}
