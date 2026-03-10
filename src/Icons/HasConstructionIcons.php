<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasConstructionIcons
 * @package ByTIC\Icons\Icons
 */
trait HasConstructionIcons
{
    public static function dumpster($options = []): Icon
    {
        return static::show(Icon::DUMPSTER, $options);
    }

    public static function hammer($options = []): Icon
    {
        return static::show(Icon::HAMMER, $options);
    }

    public static function hardHat($options = []): Icon
    {
        return static::show(Icon::HARD_HAT, $options);
    }

    public static function ruler($options = []): Icon
    {
        return static::show(Icon::RULER, $options);
    }

    public static function toolbox($options = []): Icon
    {
        return static::show(Icon::TOOLBOX, $options);
    }
}
