<?php

namespace ByTIC\Icons;

use ByTIC\Icons\Icons\HasArrowIcons;
use ByTIC\Icons\Icons\HasGenericIcons;
use ByTIC\Icons\Icons\HasInterfacesIcons;

/**
 * Class Icons
 * @package ByTIC\Icons
 */
class Icons implements IconNames
{
    use HasArrowIcons;
    use HasInterfacesIcons;
    use HasGenericIcons;

    /**
     * @param $name
     * @param array $options
     */
    public static function show($name, $options = []): Icon
    {
        return static::manager()->icon($name, $options);
    }

    /**
     * @param $name
     * @return Collections\IconCollection
     */
    public static function collection($name = null): Collections\IconCollection
    {
        return static::manager()->create($name);
    }

    protected static function manager($newManager= null): IconsManager
    {
        static $manager;
        if ($newManager instanceof IconsManager) {
            $manager = $newManager;
        } elseif (!($manager instanceof IconsManager)) {
            $manager = new IconsManager();
        }
        return $manager;
    }
}
