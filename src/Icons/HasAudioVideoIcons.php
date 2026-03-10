<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasAudioVideoIcons
 * @package ByTIC\Icons\Icons
 */
trait HasAudioVideoIcons
{
    public static function audioDescription($options = []): Icon
    {
        return static::show(Icon::AUDIO_DESCRIPTION, $options);
    }

    public static function backward($options = []): Icon
    {
        return static::show(Icon::BACKWARD, $options);
    }

    public static function broadcastTower($options = []): Icon
    {
        return static::show(Icon::BROADCAST_TOWER, $options);
    }

    public static function circle($options = []): Icon
    {
        return static::show(Icon::CIRCLE, $options);
    }

    public static function closedCaptioning($options = []): Icon
    {
        return static::show(Icon::CLOSED_CAPTIONING, $options);
    }

    public static function compress($options = []): Icon
    {
        return static::show(Icon::COMPRESS, $options);
    }

    public static function eject($options = []): Icon
    {
        return static::show(Icon::EJECT, $options);
    }

    public static function expand($options = []): Icon
    {
        return static::show(Icon::EXPAND, $options);
    }

    public static function fastBackward($options = []): Icon
    {
        return static::show(Icon::FAST_BACKWARD, $options);
    }

    public static function fastForward($options = []): Icon
    {
        return static::show(Icon::FAST_FORWARD, $options);
    }

    public static function fileAudio($options = []): Icon
    {
        return static::show(Icon::FILE_AUDIO, $options);
    }

    public static function fileVideo($options = []): Icon
    {
        return static::show(Icon::FILE_VIDEO, $options);
    }

    public static function film($options = []): Icon
    {
        return static::show(Icon::FILM, $options);
    }

    public static function forward($options = []): Icon
    {
        return static::show(Icon::FORWARD, $options);
    }

    public static function headphones($options = []): Icon
    {
        return static::show(Icon::HEADPHONES, $options);
    }

    public static function microphone($options = []): Icon
    {
        return static::show(Icon::MICROPHONE, $options);
    }

    public static function microphoneAlt($options = []): Icon
    {
        return static::show(Icon::MICROPHONE_ALT, $options);
    }

    public static function microphoneAltSlash($options = []): Icon
    {
        return static::show(Icon::MICROPHONE_ALT_SLASH, $options);
    }

    public static function microphoneSlash($options = []): Icon
    {
        return static::show(Icon::MICROPHONE_SLASH, $options);
    }

    public static function music($options = []): Icon
    {
        return static::show(Icon::MUSIC, $options);
    }

    public static function pause($options = []): Icon
    {
        return static::show(Icon::PAUSE, $options);
    }

    public static function pauseCircle($options = []): Icon
    {
        return static::show(Icon::PAUSE_CIRCLE, $options);
    }

    public static function phoneVolume($options = []): Icon
    {
        return static::show(Icon::PHONE_VOLUME, $options);
    }

    public static function photoVideo($options = []): Icon
    {
        return static::show(Icon::PHOTO_VIDEO, $options);
    }

    public static function playCircle($options = []): Icon
    {
        return static::show(Icon::PLAY_CIRCLE, $options);
    }

    public static function podcast($options = []): Icon
    {
        return static::show(Icon::PODCAST, $options);
    }

    public static function rss($options = []): Icon
    {
        return static::show(Icon::RSS, $options);
    }

    public static function rssSquare($options = []): Icon
    {
        return static::show(Icon::RSS_SQUARE, $options);
    }

    public static function stepBackward($options = []): Icon
    {
        return static::show(Icon::STEP_BACKWARD, $options);
    }

    public static function stepForward($options = []): Icon
    {
        return static::show(Icon::STEP_FORWARD, $options);
    }

    public static function stop($options = []): Icon
    {
        return static::show(Icon::STOP, $options);
    }

    public static function stopCircle($options = []): Icon
    {
        return static::show(Icon::STOP_CIRCLE, $options);
    }

    public static function tv($options = []): Icon
    {
        return static::show(Icon::TV, $options);
    }

    public static function video($options = []): Icon
    {
        return static::show(Icon::VIDEO, $options);
    }

    public static function volumeDown($options = []): Icon
    {
        return static::show(Icon::VOLUME_DOWN, $options);
    }

    public static function volumeMute($options = []): Icon
    {
        return static::show(Icon::VOLUME_MUTE, $options);
    }

    public static function volumeOff($options = []): Icon
    {
        return static::show(Icon::VOLUME_OFF, $options);
    }

    public static function volumeUp($options = []): Icon
    {
        return static::show(Icon::VOLUME_UP, $options);
    }
}
