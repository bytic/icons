<?php

use Iconify\JSONTools\Collection;

require '../vendor/autoload.php';

$collections = [
    'fa-solid' => 'fa-solid',
    'la' => 'la'
];
$dataPath = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data';

foreach ($collections as $collectionInput => $collectionOutput) {
    $collection = new Collection();
    if (!$collection->loadIconifyCollection($collectionInput)) {
        throw new \Exception('Failed to load Icons');
    }

    $path = $dataPath . DIRECTORY_SEPARATOR . $collectionOutput . DIRECTORY_SEPARATOR . 'data.php';
    $data = require $path;
//    $data['prefix'] = $collection->prefix();

    foreach ($collection->listIcons(true) as $icon) {
        $data['icons'][$icon] = $icon;
    }

    $categories = $collection->items['categories'];
    $data['categories'] = [];
    foreach ($categories as $name => $icons) {
        $data['categories'][$name] = $icons;
    }

    $content = '<?php' . "\n\n" . 'return ' . var_export($data, true) . ';';
    $path = $dataPath . DIRECTORY_SEPARATOR . $collectionOutput . DIRECTORY_SEPARATOR . 'data.php';
    file_put_contents($path, $content);
}