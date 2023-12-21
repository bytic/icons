<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasGenericIcons
 * @package ByTIC\Icons\Icons
 */
trait HasGenericIcons
{
    /**
     * @param array $options
     * @return Icon
     */
    public static function bookmark($options = []): Icon
    {
        return static::show(Icon::BOOKMARK, $options);
    }

    /**
     * @param $options
     * @return Icon
     */
    public static function building($options = []): Icon
    {
        return static::show(Icon::BUILDING, $options);
    }

    /**
     * @return Icon
     */
    public static function ok($options = []): Icon
    {
        return static::show(Icon::CHECK, $options);
    }

    /**
     * @return Icon
     */
    public static function calendar($options = []): Icon
    {
        return static::show(Icon::CALENDAR, $options);
    }

    /**
     * @return Icon
     */
    public static function check($options = []): Icon
    {
        return static::show(Icon::CHECK, $options);
    }

    /**
     * @return Icon
     */
    public static function chevronCircleDown($options = []): Icon
    {
        return static::show(Icon::CHEVRON_CIRCLE_DOWN, $options);
    }

    /**
     * @return Icon
     */
    public static function plus($options = []): Icon
    {
        return static::show(Icon::PLUS, $options);
    }

    /**
     * @return Icon
     */
    public static function edit($options = []): Icon
    {
        return static::show(Icon::EDIT, $options);
    }

    /**
     * @return Icon
     */
    public static function clone($options = []): Icon
    {
        return static::show(Icon::CLONE, $options);
    }

    /**
     * @return Icon
     */
    public static function cog($options = []): Icon
    {
        return static::show(Icon::COG, $options);
    }

    /**
     * @return Icon
     */
    public static function globe($options = []): Icon
    {
        return static::show(Icon::GLOBE, $options);
    }

    /**
     * @param $options
     * @return Icon
     */
    public static function gift($options = []): Icon
    {
        return static::show(Icon::GIFT, $options);
    }

    /**
     * @param array $options
     * @return Icon
     */
    public static function heart($options = []): Icon
    {
        return static::show(Icon::HEART, $options);
    }

    /**
     * @param array $options
     * @return Icon
     */
    public static function list_ul($options = []): Icon
    {
        return static::show(Icon::LIST_UL, $options);
    }

    /**
     * @return Icon
     */
    public static function minus($options = []): Icon
    {
        return static::show(Icon::MINUS, $options);
    }

    /**
     * @return Icon
     */
    public static function remove($options = []): Icon
    {
        return static::show(Icon::REMOVE, $options);
    }

    /**
     * @return Icon
     */
    public static function ribbon($options = []): Icon
    {
        return static::show(Icon::RIBBON, $options);
    }

    /**
     * @return Icon
     */
    public static function sort($options = []): Icon
    {
        return static::show(Icon::SORT, $options);
    }

    /**
     * @return Icon
     */
    public static function star($options = []): Icon
    {
        return static::show(Icon::STAR, $options);
    }

    /**
     * @return Icon
     */
    public static function search($options = []): Icon
    {
        return static::show(Icon::SEARCH, $options);
    }

    /**
     * @return Icon
     */
    public static function question($options = []): Icon
    {
        return static::show(Icon::QUESTION, $options);
    }

    /**
     * @return Icon
     */
    public static function questionCircle($options = []): Icon
    {
        return static::show(Icon::QUESTION_CIRCLE, $options);
    }

    /**
     * @return Icon
     */
    public static function user($options = []): Icon
    {
        return static::show(Icon::USER, $options);
    }

    /**
     * @return Icon
     */
    public static function users($options = []): Icon
    {
        return static::show(Icon::USERS, $options);
    }
}