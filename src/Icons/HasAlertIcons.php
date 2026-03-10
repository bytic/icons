<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasAlertIcons
 * @package ByTIC\Icons\Icons
 */
trait HasAlertIcons
{
    public static function bell($options = []): Icon
    {
        return static::show(Icon::BELL, $options);
    }

    public static function bellSlash($options = []): Icon
    {
        return static::show(Icon::BELL_SLASH, $options);
    }

    public static function exclamation($options = []): Icon
    {
        return static::show(Icon::EXCLAMATION, $options);
    }

    public static function exclamationCircle($options = []): Icon
    {
        return static::show(Icon::EXCLAMATION_CIRCLE, $options);
    }

    public static function exclamationTriangle($options = []): Icon
    {
        return static::show(Icon::EXCLAMATION_TRIANGLE, $options);
    }

    public static function radiation($options = []): Icon
    {
        return static::show(Icon::RADIATION, $options);
    }

    public static function radiationAlt($options = []): Icon
    {
        return static::show(Icon::RADIATION_ALT, $options);
    }

    public static function skullCrossbones($options = []): Icon
    {
        return static::show(Icon::SKULL_CROSSBONES, $options);
    }
}
