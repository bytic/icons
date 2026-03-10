<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasMathIcons
 * @package ByTIC\Icons\Icons
 */
trait HasMathIcons
{
    public static function divide($options = []): Icon
    {
        return static::show(Icon::DIVIDE, $options);
    }

    public static function equals($options = []): Icon
    {
        return static::show(Icon::EQUALS, $options);
    }

    public static function greaterThan($options = []): Icon
    {
        return static::show(Icon::GREATER_THAN, $options);
    }

    public static function greaterThanEqual($options = []): Icon
    {
        return static::show(Icon::GREATER_THAN_EQUAL, $options);
    }

    public static function infinity($options = []): Icon
    {
        return static::show(Icon::INFINITY, $options);
    }

    public static function lessThan($options = []): Icon
    {
        return static::show(Icon::LESS_THAN, $options);
    }

    public static function lessThanEqual($options = []): Icon
    {
        return static::show(Icon::LESS_THAN_EQUAL, $options);
    }

    public static function notEqual($options = []): Icon
    {
        return static::show(Icon::NOT_EQUAL, $options);
    }

    public static function percentage($options = []): Icon
    {
        return static::show(Icon::PERCENTAGE, $options);
    }

    public static function squareRootAlt($options = []): Icon
    {
        return static::show(Icon::SQUARE_ROOT_ALT, $options);
    }

    public static function waveSquare($options = []): Icon
    {
        return static::show(Icon::WAVE_SQUARE, $options);
    }
}
