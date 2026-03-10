<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 * Trait HasFileIcons
 * @package ByTIC\Icons\Icons
 */
trait HasFileIcons
{
    public static function fileArchive($options = []): Icon
    {
        return static::show(Icon::FILE_ARCHIVE, $options);
    }

    public static function fileCode($options = []): Icon
    {
        return static::show(Icon::FILE_CODE, $options);
    }

    public static function fileCsv($options = []): Icon
    {
        return static::show(Icon::FILE_CSV, $options);
    }

    public static function fileExcel($options = []): Icon
    {
        return static::show(Icon::FILE_EXCEL, $options);
    }

    public static function fileImage($options = []): Icon
    {
        return static::show(Icon::FILE_IMAGE, $options);
    }

    public static function filePdf($options = []): Icon
    {
        return static::show(Icon::FILE_PDF, $options);
    }

    public static function filePowerpoint($options = []): Icon
    {
        return static::show(Icon::FILE_POWERPOINT, $options);
    }

    public static function fileWord($options = []): Icon
    {
        return static::show(Icon::FILE_WORD, $options);
    }
}
