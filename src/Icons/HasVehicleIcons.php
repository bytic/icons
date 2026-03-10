<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasVehicleIcons
 * @package ByTIC\Icons\Icons
 */
trait HasVehicleIcons
{
    public static function babyCarriage($options = []): Icon
    {
        return static::show(Icon::BABY_CARRIAGE, $options);
    }

    public static function bus($options = []): Icon
    {
        return static::show(Icon::BUS, $options);
    }

    public static function busAlt($options = []): Icon
    {
        return static::show(Icon::BUS_ALT, $options);
    }

    public static function carAlt($options = []): Icon
    {
        return static::show(Icon::CAR_ALT, $options);
    }

    public static function carCrash($options = []): Icon
    {
        return static::show(Icon::CAR_CRASH, $options);
    }

    public static function carSide($options = []): Icon
    {
        return static::show(Icon::CAR_SIDE, $options);
    }

    public static function shuttleVan($options = []): Icon
    {
        return static::show(Icon::SHUTTLE_VAN, $options);
    }

    public static function sleigh($options = []): Icon
    {
        return static::show(Icon::SLEIGH, $options);
    }

    public static function spaceShuttle($options = []): Icon
    {
        return static::show(Icon::SPACE_SHUTTLE, $options);
    }

    public static function tractor($options = []): Icon
    {
        return static::show(Icon::TRACTOR, $options);
    }

    public static function truckMonster($options = []): Icon
    {
        return static::show(Icon::TRUCK_MONSTER, $options);
    }

    public static function truckPickup($options = []): Icon
    {
        return static::show(Icon::TRUCK_PICKUP, $options);
    }
}
