<?php

require '../vendor/autoload.php';

$collections = [
    'fa-solid'
];
$dataPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data';
$distPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'dist';

foreach ($collections as $collection) {
    $path = $dataPath . DIRECTORY_SEPARATOR . $collection . DIRECTORY_SEPARATOR . 'data.php';
    $data = require $path;

    \ByTIC\Icons\Build\MakeIconCollection::build($data);
}