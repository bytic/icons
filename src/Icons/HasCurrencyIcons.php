<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasCurrencyIcons
 * @package ByTIC\Icons\Icons
 */
trait HasCurrencyIcons
{
    public static function euroSign($options = []): Icon
    {
        return static::show(Icon::EURO_SIGN, $options);
    }

    public static function hryvnia($options = []): Icon
    {
        return static::show(Icon::HRYVNIA, $options);
    }

    public static function liraSign($options = []): Icon
    {
        return static::show(Icon::LIRA_SIGN, $options);
    }

    public static function moneyBillWave($options = []): Icon
    {
        return static::show(Icon::MONEY_BILL_WAVE, $options);
    }

    public static function moneyBillWaveAlt($options = []): Icon
    {
        return static::show(Icon::MONEY_BILL_WAVE_ALT, $options);
    }

    public static function poundSign($options = []): Icon
    {
        return static::show(Icon::POUND_SIGN, $options);
    }

    public static function rubleSign($options = []): Icon
    {
        return static::show(Icon::RUBLE_SIGN, $options);
    }

    public static function rupeeSign($options = []): Icon
    {
        return static::show(Icon::RUPEE_SIGN, $options);
    }

    public static function shekelSign($options = []): Icon
    {
        return static::show(Icon::SHEKEL_SIGN, $options);
    }

    public static function tenge($options = []): Icon
    {
        return static::show(Icon::TENGE, $options);
    }

    public static function wonSign($options = []): Icon
    {
        return static::show(Icon::WON_SIGN, $options);
    }

    public static function yenSign($options = []): Icon
    {
        return static::show(Icon::YEN_SIGN, $options);
    }
}
