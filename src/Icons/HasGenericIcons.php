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
    public static function ok()
    {
        return static::show(Icon::CHECK);
    }

    /**
     * @return Icon
     */
    public static function check()
    {
        return static::show(Icon::CHECK);
    }

    /**
     * @return Icon
     */
    public static function plus()
    {
        return static::show(Icon::PLUS);
    }

    /**
     * @return Icon
     */
    public static function edit()
    {
        return static::show(Icon::EDIT);
    }

    /**
     * @return Icon
     */
    public static function clone()
    {
        return static::show(Icon::CLONE);
    }

    /**
     * @return Icon
     */
    public static function cog()
    {
        return static::show(Icon::COG);
    }

    /**
     * @return Icon
     */
    public static function list_ul()
    {
        return static::show(Icon::LIST_UL);
    }

    /**
     * @return Icon
     */
    public static function remove()
    {
        return static::show(Icon::REMOVE);
    }

    /**
     * @return Icon
     */
    public static function sort()
    {
        return static::show(Icon::SORT);
    }

    /**
     * @return Icon
     */
    public static function star()
    {
        return static::show(Icon::STAR);
    }

    /**
     * @return Icon
     */
    public static function user()
    {
        return static::show(Icon::USER);
    }
}