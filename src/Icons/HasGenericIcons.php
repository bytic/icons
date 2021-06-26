<?php

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasGenericIcons
 * @package ByTIC\Icons\Icons
 */
trait HasGenericIcons
{
    /**
     * @return Icon
     */
    public static function ok()
    {
        return static::show(Icon::CHECK);
    }

    /**
     * @return Icon
     */
    public static function check()
    {
        return static::show(Icon::CHECK);
    }
}