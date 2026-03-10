<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasCommunicationIcons
 * @package ByTIC\Icons\Icons
 */
trait HasCommunicationIcons
{
    public static function americanSignLanguageInterpreting($options = []): Icon
    {
        return static::show(Icon::AMERICAN_SIGN_LANGUAGE_INTERPRETING, $options);
    }

    public static function assistiveListeningSystems($options = []): Icon
    {
        return static::show(Icon::ASSISTIVE_LISTENING_SYSTEMS, $options);
    }

    public static function at($options = []): Icon
    {
        return static::show(Icon::AT, $options);
    }

    public static function chalkboard($options = []): Icon
    {
        return static::show(Icon::CHALKBOARD, $options);
    }

    public static function comments($options = []): Icon
    {
        return static::show(Icon::COMMENTS, $options);
    }

    public static function inbox($options = []): Icon
    {
        return static::show(Icon::INBOX, $options);
    }

    public static function voicemail($options = []): Icon
    {
        return static::show(Icon::VOICEMAIL, $options);
    }
}
