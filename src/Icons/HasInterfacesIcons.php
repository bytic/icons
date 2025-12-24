<?php

declare(strict_types=1);

namespace ByTIC\Icons\Icons;

use ByTIC\Icons\Icon;

/**
 *
 */
trait HasInterfacesIcons
{
    /**
     * @param $options
     * @return Icon
     */
    public static function ellipsisV($options = []): Icon
    {
        return static::show(Icon::ELLIPSIS_V, $options);
    }

    /**
     * @param $options
     * @return Icon
     */
    public static function ellipsisH($options = []): Icon
    {
        return static::show(Icon::ELLIPSIS_H, $options);
    }
}
