<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasTravelIcons
 * @package ByTIC\Icons\Icons
 */
trait HasTravelIcons
{
    public static function atlas($options = []): Icon
    {
        return static::show(Icon::ATLAS, $options);
    }

    public static function caravan($options = []): Icon
    {
        return static::show(Icon::CARAVAN, $options);
    }

    public static function cocktail($options = []): Icon
    {
        return static::show(Icon::COCKTAIL, $options);
    }

    public static function conciergeBell($options = []): Icon
    {
        return static::show(Icon::CONCIERGE_BELL, $options);
    }

    public static function glassMartiniAlt($options = []): Icon
    {
        return static::show(Icon::GLASS_MARTINI_ALT, $options);
    }

    public static function globeAfrica($options = []): Icon
    {
        return static::show(Icon::GLOBE_AFRICA, $options);
    }

    public static function globeAmericas($options = []): Icon
    {
        return static::show(Icon::GLOBE_AMERICAS, $options);
    }

    public static function globeAsia($options = []): Icon
    {
        return static::show(Icon::GLOBE_ASIA, $options);
    }

    public static function globeEurope($options = []): Icon
    {
        return static::show(Icon::GLOBE_EUROPE, $options);
    }

    public static function hotTub($options = []): Icon
    {
        return static::show(Icon::HOT_TUB, $options);
    }

    public static function luggageCart($options = []): Icon
    {
        return static::show(Icon::LUGGAGE_CART, $options);
    }

    public static function mapMarked($options = []): Icon
    {
        return static::show(Icon::MAP_MARKED, $options);
    }

    public static function mapMarkedAlt($options = []): Icon
    {
        return static::show(Icon::MAP_MARKED_ALT, $options);
    }

    public static function passport($options = []): Icon
    {
        return static::show(Icon::PASSPORT, $options);
    }

    public static function planeArrival($options = []): Icon
    {
        return static::show(Icon::PLANE_ARRIVAL, $options);
    }

    public static function planeDeparture($options = []): Icon
    {
        return static::show(Icon::PLANE_DEPARTURE, $options);
    }

    public static function spa($options = []): Icon
    {
        return static::show(Icon::SPA, $options);
    }

    public static function suitcaseRolling($options = []): Icon
    {
        return static::show(Icon::SUITCASE_ROLLING, $options);
    }

    public static function swimmingPool($options = []): Icon
    {
        return static::show(Icon::SWIMMING_POOL, $options);
    }

    public static function umbrellaBeach($options = []): Icon
    {
        return static::show(Icon::UMBRELLA_BEACH, $options);
    }

    public static function wineGlassAlt($options = []): Icon
    {
        return static::show(Icon::WINE_GLASS_ALT, $options);
    }
}
