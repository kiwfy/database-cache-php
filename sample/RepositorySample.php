<?php

require_once __DIR__ . '/../vendor/autoload.php';

use DatabaseCache\Repository;

$repository = new Repository();

$data = [
	'test' => true,
];

$repository->setQuery(
    'table:id',
    json_encode($data)
);

$getQuery = $repository->getQuery('table:id');

print_r($getQuery);
echo PHP_EOL;
