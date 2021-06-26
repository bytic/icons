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

    $data['aliases'] = is_array($data['aliases']) ? $data['aliases'] : $data;

    $content = "<?php

namespace ByTIC\Icons\Dist;

use ByTIC\Icons\Collections\IconCollection;

/**
 * Class {$data['info']['class']}
 * @package ByTIC\Icons\Dist
 */
class {$data['info']['class']} extends IconCollection
{
    protected \$rootPrefix = '{$data['info']['rootPrefix']}';
    
    protected \$prefix = '{$data['info']['prefix']}';  
     
    protected \$aliases = ".var_export($data['aliases'], true).";
    
    protected \$categories = ".var_export($data['categories'], true).";
}";
    file_put_contents(
        $distPath . DIRECTORY_SEPARATOR . $data['info']['class'] . '.php',
        $content
    );
}