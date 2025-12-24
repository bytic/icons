<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasGenericIcons
 * @package ByTIC\Icons\Icons
 */
trait HasArrowIcons
{

    public static function arrowsAlt($options = []): Icon
    {
        return static::show(Icon::ARROWS_ALT, $options);
    }

    public static function arrowsAltH($options = []): Icon
    {
        return static::show(Icon::ARROWS_ALT_H, $options);
    }

    public static function arrowsAltV($options = []): Icon
    {
        return static::show(Icon::ARROWS_ALT_V, $options);
    }

    public static function arrowUp($options = []): Icon
    {
        return static::show(Icon::ARROW_UP, $options);
    }

    public static function arrowDown($options = []): Icon
    {
        return static::show(Icon::ARROW_DOWN, $options);
    }

    public static function arrowLeft($options = []): Icon
    {
        return static::show(Icon::ARROW_LEFT, $options);
    }

    public static function arrowRight($options = []): Icon
    {
        return static::show(Icon::ARROW_RIGHT, $options);
    }
}