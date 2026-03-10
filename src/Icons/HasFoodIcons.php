<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasFoodIcons
 * @package ByTIC\Icons\Icons
 */
trait HasFoodIcons
{
    public static function appleAlt($options = []): Icon
    {
        return static::show(Icon::APPLE_ALT, $options);
    }

    public static function bacon($options = []): Icon
    {
        return static::show(Icon::BACON, $options);
    }

    public static function breadSlice($options = []): Icon
    {
        return static::show(Icon::BREAD_SLICE, $options);
    }

    public static function candyCane($options = []): Icon
    {
        return static::show(Icon::CANDY_CANE, $options);
    }

    public static function carrot($options = []): Icon
    {
        return static::show(Icon::CARROT, $options);
    }

    public static function cheese($options = []): Icon
    {
        return static::show(Icon::CHEESE, $options);
    }

    public static function cookie($options = []): Icon
    {
        return static::show(Icon::COOKIE, $options);
    }

    public static function drumstickBite($options = []): Icon
    {
        return static::show(Icon::DRUMSTICK_BITE, $options);
    }

    public static function egg($options = []): Icon
    {
        return static::show(Icon::EGG, $options);
    }

    public static function hamburger($options = []): Icon
    {
        return static::show(Icon::HAMBURGER, $options);
    }

    public static function hotdog($options = []): Icon
    {
        return static::show(Icon::HOTDOG, $options);
    }

    public static function iceCream($options = []): Icon
    {
        return static::show(Icon::ICE_CREAM, $options);
    }

    public static function pepperHot($options = []): Icon
    {
        return static::show(Icon::PEPPER_HOT, $options);
    }

    public static function pizzaSlice($options = []): Icon
    {
        return static::show(Icon::PIZZA_SLICE, $options);
    }

    public static function seedling($options = []): Icon
    {
        return static::show(Icon::SEEDLING, $options);
    }

    public static function stroopwafel($options = []): Icon
    {
        return static::show(Icon::STROOPWAFEL, $options);
    }
}
