<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasBuildingIcons
 * @package ByTIC\Icons\Icons
 */
trait HasBuildingIcons
{
    public static function archway($options = []): Icon
    {
        return static::show(Icon::ARCHWAY, $options);
    }

    public static function building($options = []): Icon
    {
        return static::show(Icon::BUILDING, $options);
    }

    public static function campground($options = []): Icon
    {
        return static::show(Icon::CAMPGROUND, $options);
    }

    public static function church($options = []): Icon
    {
        return static::show(Icon::CHURCH, $options);
    }

    public static function city($options = []): Icon
    {
        return static::show(Icon::CITY, $options);
    }

    public static function clinicMedical($options = []): Icon
    {
        return static::show(Icon::CLINIC_MEDICAL, $options);
    }

    public static function dungeon($options = []): Icon
    {
        return static::show(Icon::DUNGEON, $options);
    }

    public static function gopuram($options = []): Icon
    {
        return static::show(Icon::GOPURAM, $options);
    }

    public static function home($options = []): Icon
    {
        return static::show(Icon::HOME, $options);
    }

    public static function hospital($options = []): Icon
    {
        return static::show(Icon::HOSPITAL, $options);
    }

    public static function hospitalAlt($options = []): Icon
    {
        return static::show(Icon::HOSPITAL_ALT, $options);
    }

    public static function hospitalUser($options = []): Icon
    {
        return static::show(Icon::HOSPITAL_USER, $options);
    }

    public static function hotel($options = []): Icon
    {
        return static::show(Icon::HOTEL, $options);
    }

    public static function houseDamage($options = []): Icon
    {
        return static::show(Icon::HOUSE_DAMAGE, $options);
    }

    public static function igloo($options = []): Icon
    {
        return static::show(Icon::IGLOO, $options);
    }

    public static function industry($options = []): Icon
    {
        return static::show(Icon::INDUSTRY, $options);
    }

    public static function kaaba($options = []): Icon
    {
        return static::show(Icon::KAABA, $options);
    }

    public static function landmark($options = []): Icon
    {
        return static::show(Icon::LANDMARK, $options);
    }

    public static function monument($options = []): Icon
    {
        return static::show(Icon::MONUMENT, $options);
    }

    public static function mosque($options = []): Icon
    {
        return static::show(Icon::MOSQUE, $options);
    }

    public static function placeOfWorship($options = []): Icon
    {
        return static::show(Icon::PLACE_OF_WORSHIP, $options);
    }

    public static function school($options = []): Icon
    {
        return static::show(Icon::SCHOOL, $options);
    }

    public static function store($options = []): Icon
    {
        return static::show(Icon::STORE, $options);
    }

    public static function storeAlt($options = []): Icon
    {
        return static::show(Icon::STORE_ALT, $options);
    }

    public static function synagogue($options = []): Icon
    {
        return static::show(Icon::SYNAGOGUE, $options);
    }

    public static function toriiGate($options = []): Icon
    {
        return static::show(Icon::TORII_GATE, $options);
    }

    public static function university($options = []): Icon
    {
        return static::show(Icon::UNIVERSITY, $options);
    }

    public static function vihara($options = []): Icon
    {
        return static::show(Icon::VIHARA, $options);
    }

    public static function warehouse($options = []): Icon
    {
        return static::show(Icon::WAREHOUSE, $options);
    }
}
