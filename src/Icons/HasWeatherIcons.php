<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasWeatherIcons
 * @package ByTIC\Icons\Icons
 */
trait HasWeatherIcons
{
    public static function bolt($options = []): Icon
    {
        return static::show(Icon::BOLT, $options);
    }

    public static function cloudMeatball($options = []): Icon
    {
        return static::show(Icon::CLOUD_MEATBALL, $options);
    }

    public static function cloudMoon($options = []): Icon
    {
        return static::show(Icon::CLOUD_MOON, $options);
    }

    public static function cloudMoonRain($options = []): Icon
    {
        return static::show(Icon::CLOUD_MOON_RAIN, $options);
    }

    public static function cloudRain($options = []): Icon
    {
        return static::show(Icon::CLOUD_RAIN, $options);
    }

    public static function cloudShowersHeavy($options = []): Icon
    {
        return static::show(Icon::CLOUD_SHOWERS_HEAVY, $options);
    }

    public static function cloudSun($options = []): Icon
    {
        return static::show(Icon::CLOUD_SUN, $options);
    }

    public static function cloudSunRain($options = []): Icon
    {
        return static::show(Icon::CLOUD_SUN_RAIN, $options);
    }

    public static function meteor($options = []): Icon
    {
        return static::show(Icon::METEOR, $options);
    }

    public static function moon($options = []): Icon
    {
        return static::show(Icon::MOON, $options);
    }

    public static function pooStorm($options = []): Icon
    {
        return static::show(Icon::POO_STORM, $options);
    }

    public static function rainbow($options = []): Icon
    {
        return static::show(Icon::RAINBOW, $options);
    }

    public static function smog($options = []): Icon
    {
        return static::show(Icon::SMOG, $options);
    }

    public static function snowflake($options = []): Icon
    {
        return static::show(Icon::SNOWFLAKE, $options);
    }

    public static function sun($options = []): Icon
    {
        return static::show(Icon::SUN, $options);
    }

    public static function temperatureHigh($options = []): Icon
    {
        return static::show(Icon::TEMPERATURE_HIGH, $options);
    }

    public static function temperatureLow($options = []): Icon
    {
        return static::show(Icon::TEMPERATURE_LOW, $options);
    }

    public static function water($options = []): Icon
    {
        return static::show(Icon::WATER, $options);
    }

    public static function wind($options = []): Icon
    {
        return static::show(Icon::WIND, $options);
    }
}
