<?php

namespace ByTIC\Icons;

/**
 * Class Icons
 * @package ByTIC\Icons
 */
class Icons
{
    /**
     * @param $name
     * @param array $options
     */
    public static function show($name, $options = []): Icon
    {
        return static::manager()->icon($name, $options);
    }

    protected static function manager($newManager= null)
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
