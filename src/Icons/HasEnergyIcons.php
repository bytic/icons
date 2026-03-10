<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasEnergyIcons
 * @package ByTIC\Icons\Icons
 */
trait HasEnergyIcons
{
    public static function chargingStation($options = []): Icon
    {
        return static::show(Icon::CHARGING_STATION, $options);
    }

    public static function solarPanel($options = []): Icon
    {
        return static::show(Icon::SOLAR_PANEL, $options);
    }
}
