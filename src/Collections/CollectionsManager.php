<?php

namespace ByTIC\Icons\Collections;

use ByTIC\Icons\Dist\FontAwesome5Solid;

/**
 * Class CollectionsManager
 * @package ByTIC\Icons
 */
class CollectionsManager
{
    const FONT_AWESOME_SOLID = 'fa-solid';
    const BOOTSTRAP = 'bi';

    protected static $collections = [
        'fa-solid' => FontAwesome5Solid::class
    ];

    /**
     * @param string $collection
     * @return mixed
     */
    public static function create($collection = self::FONT_AWESOME_SOLID)
    {
        $class = static::$collections[$collection];
        return call_user_func($class . '::instance');
    }
}
