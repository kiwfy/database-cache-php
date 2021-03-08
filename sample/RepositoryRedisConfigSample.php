<?php

require_once __DIR__ . '/../vendor/autoload.php';

use DatabaseCache\Repository;

$redisConfig = [
    'host' => 'localhost',
    'port' => 6379,
];

$repository = new Repository($redisConfig);

$repository->setQuery(
    'table:id',
    json_encode($data)
);

$getCredential = $repository->getQuery('table:id');

print_r($getCredential);
echo PHP_EOL;
