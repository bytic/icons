<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasComputerIcons
 * @package ByTIC\Icons\Icons
 */
trait HasComputerIcons
{
    public static function backspace($options = []): Icon
    {
        return static::show(Icon::BACKSPACE, $options);
    }

    public static function compactDisc($options = []): Icon
    {
        return static::show(Icon::COMPACT_DISC, $options);
    }

    public static function desktop($options = []): Icon
    {
        return static::show(Icon::DESKTOP, $options);
    }

    public static function ethernet($options = []): Icon
    {
        return static::show(Icon::ETHERNET, $options);
    }

    public static function hdd($options = []): Icon
    {
        return static::show(Icon::HDD, $options);
    }

    public static function keyboard($options = []): Icon
    {
        return static::show(Icon::KEYBOARD, $options);
    }

    public static function laptop($options = []): Icon
    {
        return static::show(Icon::LAPTOP, $options);
    }

    public static function memory($options = []): Icon
    {
        return static::show(Icon::MEMORY, $options);
    }

    public static function microchip($options = []): Icon
    {
        return static::show(Icon::MICROCHIP, $options);
    }

    public static function mobile($options = []): Icon
    {
        return static::show(Icon::MOBILE, $options);
    }

    public static function mobileAlt($options = []): Icon
    {
        return static::show(Icon::MOBILE_ALT, $options);
    }

    public static function mouse($options = []): Icon
    {
        return static::show(Icon::MOUSE, $options);
    }

    public static function satellite($options = []): Icon
    {
        return static::show(Icon::SATELLITE, $options);
    }

    public static function satelliteDish($options = []): Icon
    {
        return static::show(Icon::SATELLITE_DISH, $options);
    }

    public static function sdCard($options = []): Icon
    {
        return static::show(Icon::SD_CARD, $options);
    }

    public static function server($options = []): Icon
    {
        return static::show(Icon::SERVER, $options);
    }

    public static function simCard($options = []): Icon
    {
        return static::show(Icon::SIM_CARD, $options);
    }

    public static function tablet($options = []): Icon
    {
        return static::show(Icon::TABLET, $options);
    }

    public static function tabletAlt($options = []): Icon
    {
        return static::show(Icon::TABLET_ALT, $options);
    }
}
