<?php

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasGenericIcons
 * @package ByTIC\Icons\Icons
 */
trait HasGenericIcons
{
    /**
     * @return Icon
     */
    public static function ok(): Icon
    {
        return static::show(Icon::CHECK);
    }

    /**
     * @return Icon
     */
    public static function calendar(): Icon
    {
        return static::show(Icon::CALENDAR);
    }

    /**
     * @return Icon
     */
    public static function check(): Icon
    {
        return static::show(Icon::CHECK);
    }

    /**
     * @return Icon
     */
    public static function plus(): Icon
    {
        return static::show(Icon::PLUS);
    }

    /**
     * @return Icon
     */
    public static function edit(): Icon
    {
        return static::show(Icon::EDIT);
    }

    /**
     * @return Icon
     */
    public static function clone(): Icon
    {
        return static::show(Icon::CLONE);
    }

    /**
     * @return Icon
     */
    public static function cog(): Icon
    {
        return static::show(Icon::COG);
    }


    /**
     * @return Icon
     */
    public static function globe(): Icon
    {
        return static::show(Icon::GLOBE);
    }

    /**
     * @return Icon
     */
    public static function list_ul(): Icon
    {
        return static::show(Icon::LIST_UL);
    }

    /**
     * @return Icon
     */
    public static function remove(): Icon
    {
        return static::show(Icon::REMOVE);
    }

    /**
     * @return Icon
     */
    public static function sort(): Icon
    {
        return static::show(Icon::SORT);
    }

    /**
     * @return Icon
     */
    public static function star(): Icon
    {
        return static::show(Icon::STAR);
    }

    /**
     * @return Icon
     */
    public static function search(): Icon
    {
        return static::show(Icon::SEARCH);
    }

    /**
     * @return Icon
     */
    public static function user(): Icon
    {
        return static::show(Icon::USER);
    }
}