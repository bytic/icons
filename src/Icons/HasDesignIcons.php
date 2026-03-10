<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasDesignIcons
 * @package ByTIC\Icons\Icons
 */
trait HasDesignIcons
{
    public static function adjust($options = []): Icon
    {
        return static::show(Icon::ADJUST, $options);
    }

    public static function bezierCurve($options = []): Icon
    {
        return static::show(Icon::BEZIER_CURVE, $options);
    }

    public static function brush($options = []): Icon
    {
        return static::show(Icon::BRUSH, $options);
    }

    public static function crop($options = []): Icon
    {
        return static::show(Icon::CROP, $options);
    }

    public static function cropAlt($options = []): Icon
    {
        return static::show(Icon::CROP_ALT, $options);
    }

    public static function draftingCompass($options = []): Icon
    {
        return static::show(Icon::DRAFTING_COMPASS, $options);
    }

    public static function eyeDropper($options = []): Icon
    {
        return static::show(Icon::EYE_DROPPER, $options);
    }

    public static function fill($options = []): Icon
    {
        return static::show(Icon::FILL, $options);
    }

    public static function fillDrip($options = []): Icon
    {
        return static::show(Icon::FILL_DRIP, $options);
    }

    public static function objectGroup($options = []): Icon
    {
        return static::show(Icon::OBJECT_GROUP, $options);
    }

    public static function objectUngroup($options = []): Icon
    {
        return static::show(Icon::OBJECT_UNGROUP, $options);
    }

    public static function paintBrush($options = []): Icon
    {
        return static::show(Icon::PAINT_BRUSH, $options);
    }

    public static function paintRoller($options = []): Icon
    {
        return static::show(Icon::PAINT_ROLLER, $options);
    }

    public static function palette($options = []): Icon
    {
        return static::show(Icon::PALETTE, $options);
    }

    public static function pencilRuler($options = []): Icon
    {
        return static::show(Icon::PENCIL_RULER, $options);
    }

    public static function rulerCombined($options = []): Icon
    {
        return static::show(Icon::RULER_COMBINED, $options);
    }

    public static function rulerHorizontal($options = []): Icon
    {
        return static::show(Icon::RULER_HORIZONTAL, $options);
    }

    public static function rulerVertical($options = []): Icon
    {
        return static::show(Icon::RULER_VERTICAL, $options);
    }

    public static function splotch($options = []): Icon
    {
        return static::show(Icon::SPLOTCH, $options);
    }

    public static function sprayCan($options = []): Icon
    {
        return static::show(Icon::SPRAY_CAN, $options);
    }

    public static function stamp($options = []): Icon
    {
        return static::show(Icon::STAMP, $options);
    }

    public static function swatchbook($options = []): Icon
    {
        return static::show(Icon::SWATCHBOOK, $options);
    }

    public static function vectorSquare($options = []): Icon
    {
        return static::show(Icon::VECTOR_SQUARE, $options);
    }
}
