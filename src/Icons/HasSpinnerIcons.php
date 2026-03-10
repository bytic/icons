<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasSpinnerIcons
 * @package ByTIC\Icons\Icons
 */
trait HasSpinnerIcons
{
    public static function asterisk($options = []): Icon
    {
        return static::show(Icon::ASTERISK, $options);
    }

    public static function circleNotch($options = []): Icon
    {
        return static::show(Icon::CIRCLE_NOTCH, $options);
    }

    public static function fan($options = []): Icon
    {
        return static::show(Icon::FAN, $options);
    }

    public static function ring($options = []): Icon
    {
        return static::show(Icon::RING, $options);
    }

    public static function slash($options = []): Icon
    {
        return static::show(Icon::SLASH, $options);
    }

    public static function spinner($options = []): Icon
    {
        return static::show(Icon::SPINNER, $options);
    }
}
