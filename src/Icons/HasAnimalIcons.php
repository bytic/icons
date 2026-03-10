<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasAnimalIcons
 * @package ByTIC\Icons\Icons
 */
trait HasAnimalIcons
{
    public static function cat($options = []): Icon
    {
        return static::show(Icon::CAT, $options);
    }

    public static function crow($options = []): Icon
    {
        return static::show(Icon::CROW, $options);
    }

    public static function dog($options = []): Icon
    {
        return static::show(Icon::DOG, $options);
    }

    public static function dove($options = []): Icon
    {
        return static::show(Icon::DOVE, $options);
    }

    public static function dragon($options = []): Icon
    {
        return static::show(Icon::DRAGON, $options);
    }

    public static function feather($options = []): Icon
    {
        return static::show(Icon::FEATHER, $options);
    }

    public static function featherAlt($options = []): Icon
    {
        return static::show(Icon::FEATHER_ALT, $options);
    }

    public static function fish($options = []): Icon
    {
        return static::show(Icon::FISH, $options);
    }

    public static function frog($options = []): Icon
    {
        return static::show(Icon::FROG, $options);
    }

    public static function hippo($options = []): Icon
    {
        return static::show(Icon::HIPPO, $options);
    }

    public static function horse($options = []): Icon
    {
        return static::show(Icon::HORSE, $options);
    }

    public static function horseHead($options = []): Icon
    {
        return static::show(Icon::HORSE_HEAD, $options);
    }

    public static function kiwiBird($options = []): Icon
    {
        return static::show(Icon::KIWI_BIRD, $options);
    }

    public static function otter($options = []): Icon
    {
        return static::show(Icon::OTTER, $options);
    }

    public static function paw($options = []): Icon
    {
        return static::show(Icon::PAW, $options);
    }

    public static function spider($options = []): Icon
    {
        return static::show(Icon::SPIDER, $options);
    }
}
