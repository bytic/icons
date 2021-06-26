<?= "<?php\n" ?>

namespace <?= $namespace ?>;

use ByTIC\Icons\Collections\IconCollection;

/**
 * Class <?= $class_name ?>
 * @package ByTIC\Icons\Dist
 */
class <?= $class_name ?> extends IconCollection
{
    protected $rootPrefix = '<?= $rootPrefix ?>';

    protected $prefix = '<?= $prefix ?>';

    protected $aliases = <?= var_export($aliases, true) ?>;

    protected $categories = <?= var_export($categories, true) ?>;
}