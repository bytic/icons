<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasReligionIcons
 * @package ByTIC\Icons\Icons
 */
trait HasReligionIcons
{
    public static function ankh($options = []): Icon
    {
        return static::show(Icon::ANKH, $options);
    }

    public static function atom($options = []): Icon
    {
        return static::show(Icon::ATOM, $options);
    }

    public static function bahai($options = []): Icon
    {
        return static::show(Icon::BAHAI, $options);
    }

    public static function bible($options = []): Icon
    {
        return static::show(Icon::BIBLE, $options);
    }

    public static function cross($options = []): Icon
    {
        return static::show(Icon::CROSS, $options);
    }

    public static function dharmachakra($options = []): Icon
    {
        return static::show(Icon::DHARMACHAKRA, $options);
    }

    public static function hamsa($options = []): Icon
    {
        return static::show(Icon::HAMSA, $options);
    }

    public static function hanukiah($options = []): Icon
    {
        return static::show(Icon::HANUKIAH, $options);
    }

    public static function jedi($options = []): Icon
    {
        return static::show(Icon::JEDI, $options);
    }

    public static function journalWhills($options = []): Icon
    {
        return static::show(Icon::JOURNAL_WHILLS, $options);
    }

    public static function khanda($options = []): Icon
    {
        return static::show(Icon::KHANDA, $options);
    }

    public static function menorah($options = []): Icon
    {
        return static::show(Icon::MENORAH, $options);
    }

    public static function om($options = []): Icon
    {
        return static::show(Icon::OM, $options);
    }

    public static function pastafarianism($options = []): Icon
    {
        return static::show(Icon::PASTAFARIANISM, $options);
    }

    public static function peace($options = []): Icon
    {
        return static::show(Icon::PEACE, $options);
    }

    public static function quran($options = []): Icon
    {
        return static::show(Icon::QURAN, $options);
    }

    public static function starAndCrescent($options = []): Icon
    {
        return static::show(Icon::STAR_AND_CRESCENT, $options);
    }

    public static function starOfDavid($options = []): Icon
    {
        return static::show(Icon::STAR_OF_DAVID, $options);
    }

    public static function torah($options = []): Icon
    {
        return static::show(Icon::TORAH, $options);
    }

    public static function yinYang($options = []): Icon
    {
        return static::show(Icon::YIN_YANG, $options);
    }
}
