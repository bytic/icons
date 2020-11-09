<?php

namespace ByTIC\Icons\Tests;

use ByTIC\Icons\Icon;
use ByTIC\Icons\Icons;

/**
 * Class IconsTest
 * @package ByTIC\Icons\Tests
 */
class IconsTest extends AbstractTest
{
    public function test_show()
    {
        $icon = Icons::show('user');
        self::assertInstanceOf(Icon::class, $icon);
        self::assertSame('<i class="fas fa-user"></i>', (string) $icon);
    }
}