<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasSportIcons
 * @package ByTIC\Icons\Icons
 */
trait HasSportIcons
{
    public static function baseballBall($options = []): Icon
    {
        return static::show(Icon::BASEBALL_BALL, $options);
    }

    public static function basketballBall($options = []): Icon
    {
        return static::show(Icon::BASKETBALL_BALL, $options);
    }

    public static function bowlingBall($options = []): Icon
    {
        return static::show(Icon::BOWLING_BALL, $options);
    }

    public static function dumbbell($options = []): Icon
    {
        return static::show(Icon::DUMBBELL, $options);
    }

    public static function footballBall($options = []): Icon
    {
        return static::show(Icon::FOOTBALL_BALL, $options);
    }

    public static function futbol($options = []): Icon
    {
        return static::show(Icon::FUTBOL, $options);
    }

    public static function golfBall($options = []): Icon
    {
        return static::show(Icon::GOLF_BALL, $options);
    }

    public static function hockeyPuck($options = []): Icon
    {
        return static::show(Icon::HOCKEY_PUCK, $options);
    }

    public static function quidditch($options = []): Icon
    {
        return static::show(Icon::QUIDDITCH, $options);
    }

    public static function tableTennis($options = []): Icon
    {
        return static::show(Icon::TABLE_TENNIS, $options);
    }

    public static function volleyballBall($options = []): Icon
    {
        return static::show(Icon::VOLLEYBALL_BALL, $options);
    }
}
