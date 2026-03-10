<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasStatusIcons
 * @package ByTIC\Icons\Icons
 */
trait HasStatusIcons
{
    public static function batteryEmpty($options = []): Icon
    {
        return static::show(Icon::BATTERY_EMPTY, $options);
    }

    public static function batteryFull($options = []): Icon
    {
        return static::show(Icon::BATTERY_FULL, $options);
    }

    public static function batteryHalf($options = []): Icon
    {
        return static::show(Icon::BATTERY_HALF, $options);
    }

    public static function batteryQuarter($options = []): Icon
    {
        return static::show(Icon::BATTERY_QUARTER, $options);
    }

    public static function batteryThreeQuarters($options = []): Icon
    {
        return static::show(Icon::BATTERY_THREE_QUARTERS, $options);
    }

    public static function calendarDay($options = []): Icon
    {
        return static::show(Icon::CALENDAR_DAY, $options);
    }

    public static function calendarWeek($options = []): Icon
    {
        return static::show(Icon::CALENDAR_WEEK, $options);
    }

    public static function comment($options = []): Icon
    {
        return static::show(Icon::COMMENT, $options);
    }

    public static function commentAlt($options = []): Icon
    {
        return static::show(Icon::COMMENT_ALT, $options);
    }

    public static function commentSlash($options = []): Icon
    {
        return static::show(Icon::COMMENT_SLASH, $options);
    }

    public static function doorClosed($options = []): Icon
    {
        return static::show(Icon::DOOR_CLOSED, $options);
    }

    public static function doorOpen($options = []): Icon
    {
        return static::show(Icon::DOOR_OPEN, $options);
    }

    public static function gasPump($options = []): Icon
    {
        return static::show(Icon::GAS_PUMP, $options);
    }

    public static function lock($options = []): Icon
    {
        return static::show(Icon::LOCK, $options);
    }

    public static function lockOpen($options = []): Icon
    {
        return static::show(Icon::LOCK_OPEN, $options);
    }

    public static function starHalfAlt($options = []): Icon
    {
        return static::show(Icon::STAR_HALF_ALT, $options);
    }

    public static function thermometerEmpty($options = []): Icon
    {
        return static::show(Icon::THERMOMETER_EMPTY, $options);
    }

    public static function thermometerFull($options = []): Icon
    {
        return static::show(Icon::THERMOMETER_FULL, $options);
    }

    public static function thermometerHalf($options = []): Icon
    {
        return static::show(Icon::THERMOMETER_HALF, $options);
    }

    public static function thermometerQuarter($options = []): Icon
    {
        return static::show(Icon::THERMOMETER_QUARTER, $options);
    }

    public static function thermometerThreeQuarters($options = []): Icon
    {
        return static::show(Icon::THERMOMETER_THREE_QUARTERS, $options);
    }

    public static function tintSlash($options = []): Icon
    {
        return static::show(Icon::TINT_SLASH, $options);
    }

    public static function unlock($options = []): Icon
    {
        return static::show(Icon::UNLOCK, $options);
    }

    public static function unlockAlt($options = []): Icon
    {
        return static::show(Icon::UNLOCK_ALT, $options);
    }

    public static function videoSlash($options = []): Icon
    {
        return static::show(Icon::VIDEO_SLASH, $options);
    }
}
