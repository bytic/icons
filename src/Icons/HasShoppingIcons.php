<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasShoppingIcons
 * @package ByTIC\Icons\Icons
 */
trait HasShoppingIcons
{
    public static function camera($options = []): Icon
    {
        return static::show(Icon::CAMERA, $options);
    }

    public static function cameraRetro($options = []): Icon
    {
        return static::show(Icon::CAMERA_RETRO, $options);
    }

    public static function cartPlus($options = []): Icon
    {
        return static::show(Icon::CART_PLUS, $options);
    }

    public static function creditCard($options = []): Icon
    {
        return static::show(Icon::CREDIT_CARD, $options);
    }

    public static function gem($options = []): Icon
    {
        return static::show(Icon::GEM, $options);
    }

    public static function moneyCheck($options = []): Icon
    {
        return static::show(Icon::MONEY_CHECK, $options);
    }

    public static function moneyCheckAlt($options = []): Icon
    {
        return static::show(Icon::MONEY_CHECK_ALT, $options);
    }

    public static function receipt($options = []): Icon
    {
        return static::show(Icon::RECEIPT, $options);
    }
}
