<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasDateTimeIcons
 * @package ByTIC\Icons\Icons
 */
trait HasDateTimeIcons
{
    public static function calendarCheck($options = []): Icon
    {
        return static::show(Icon::CALENDAR_CHECK, $options);
    }

    public static function calendarMinus($options = []): Icon
    {
        return static::show(Icon::CALENDAR_MINUS, $options);
    }

    public static function calendarPlus($options = []): Icon
    {
        return static::show(Icon::CALENDAR_PLUS, $options);
    }

    public static function calendarTimes($options = []): Icon
    {
        return static::show(Icon::CALENDAR_TIMES, $options);
    }

    public static function clock($options = []): Icon
    {
        return static::show(Icon::CLOCK, $options);
    }

    public static function hourglass($options = []): Icon
    {
        return static::show(Icon::HOURGLASS, $options);
    }

    public static function hourglassEnd($options = []): Icon
    {
        return static::show(Icon::HOURGLASS_END, $options);
    }

    public static function hourglassHalf($options = []): Icon
    {
        return static::show(Icon::HOURGLASS_HALF, $options);
    }

    public static function hourglassStart($options = []): Icon
    {
        return static::show(Icon::HOURGLASS_START, $options);
    }

    public static function stopwatch($options = []): Icon
    {
        return static::show(Icon::STOPWATCH, $options);
    }

    public static function stopwatch20($options = []): Icon
    {
        return static::show(Icon::STOPWATCH_20, $options);
    }
}
