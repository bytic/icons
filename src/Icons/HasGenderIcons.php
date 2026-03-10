<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasGenderIcons
 * @package ByTIC\Icons\Icons
 */
trait HasGenderIcons
{
    public static function genderless($options = []): Icon
    {
        return static::show(Icon::GENDERLESS, $options);
    }

    public static function mars($options = []): Icon
    {
        return static::show(Icon::MARS, $options);
    }

    public static function marsDouble($options = []): Icon
    {
        return static::show(Icon::MARS_DOUBLE, $options);
    }

    public static function marsStroke($options = []): Icon
    {
        return static::show(Icon::MARS_STROKE, $options);
    }

    public static function marsStrokeH($options = []): Icon
    {
        return static::show(Icon::MARS_STROKE_H, $options);
    }

    public static function marsStrokeV($options = []): Icon
    {
        return static::show(Icon::MARS_STROKE_V, $options);
    }

    public static function mercury($options = []): Icon
    {
        return static::show(Icon::MERCURY, $options);
    }

    public static function neuter($options = []): Icon
    {
        return static::show(Icon::NEUTER, $options);
    }

    public static function transgender($options = []): Icon
    {
        return static::show(Icon::TRANSGENDER, $options);
    }

    public static function transgenderAlt($options = []): Icon
    {
        return static::show(Icon::TRANSGENDER_ALT, $options);
    }

    public static function venus($options = []): Icon
    {
        return static::show(Icon::VENUS, $options);
    }

    public static function venusDouble($options = []): Icon
    {
        return static::show(Icon::VENUS_DOUBLE, $options);
    }

    public static function venusMars($options = []): Icon
    {
        return static::show(Icon::VENUS_MARS, $options);
    }
}
