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
     * @return mixed
     */
    public static function ok()
    {
        return static::show(Icon::OK);
    }
}