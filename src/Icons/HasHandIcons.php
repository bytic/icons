<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasHandIcons
 * @package ByTIC\Icons\Icons
 */
trait HasHandIcons
{
    public static function allergies($options = []): Icon
    {
        return static::show(Icon::ALLERGIES, $options);
    }

    public static function fistRaised($options = []): Icon
    {
        return static::show(Icon::FIST_RAISED, $options);
    }

    public static function handHolding($options = []): Icon
    {
        return static::show(Icon::HAND_HOLDING, $options);
    }

    public static function handHoldingHeart($options = []): Icon
    {
        return static::show(Icon::HAND_HOLDING_HEART, $options);
    }

    public static function handHoldingMedical($options = []): Icon
    {
        return static::show(Icon::HAND_HOLDING_MEDICAL, $options);
    }

    public static function handHoldingUsd($options = []): Icon
    {
        return static::show(Icon::HAND_HOLDING_USD, $options);
    }

    public static function handHoldingWater($options = []): Icon
    {
        return static::show(Icon::HAND_HOLDING_WATER, $options);
    }

    public static function handLizard($options = []): Icon
    {
        return static::show(Icon::HAND_LIZARD, $options);
    }

    public static function handMiddleFinger($options = []): Icon
    {
        return static::show(Icon::HAND_MIDDLE_FINGER, $options);
    }

    public static function handPaper($options = []): Icon
    {
        return static::show(Icon::HAND_PAPER, $options);
    }

    public static function handPeace($options = []): Icon
    {
        return static::show(Icon::HAND_PEACE, $options);
    }

    public static function handRock($options = []): Icon
    {
        return static::show(Icon::HAND_ROCK, $options);
    }

    public static function handScissors($options = []): Icon
    {
        return static::show(Icon::HAND_SCISSORS, $options);
    }

    public static function handSparkles($options = []): Icon
    {
        return static::show(Icon::HAND_SPARKLES, $options);
    }

    public static function handSpock($options = []): Icon
    {
        return static::show(Icon::HAND_SPOCK, $options);
    }

    public static function hands($options = []): Icon
    {
        return static::show(Icon::HANDS, $options);
    }

    public static function handsHelping($options = []): Icon
    {
        return static::show(Icon::HANDS_HELPING, $options);
    }

    public static function handsWash($options = []): Icon
    {
        return static::show(Icon::HANDS_WASH, $options);
    }

    public static function handshake($options = []): Icon
    {
        return static::show(Icon::HANDSHAKE, $options);
    }

    public static function handshakeAltSlash($options = []): Icon
    {
        return static::show(Icon::HANDSHAKE_ALT_SLASH, $options);
    }

    public static function handshakeSlash($options = []): Icon
    {
        return static::show(Icon::HANDSHAKE_SLASH, $options);
    }

    public static function prayingHands($options = []): Icon
    {
        return static::show(Icon::PRAYING_HANDS, $options);
    }

    public static function thumbsDown($options = []): Icon
    {
        return static::show(Icon::THUMBS_DOWN, $options);
    }

    public static function thumbsUp($options = []): Icon
    {
        return static::show(Icon::THUMBS_UP, $options);
    }
}
