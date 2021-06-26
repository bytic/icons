<?php

namespace ByTIC\Icons\Tests\Icons;

use ByTIC\Icons\Icons;
use ByTIC\Icons\Tests\AbstractTest;

/**
 * Class HasGenericIconsTest
 * @package ByTIC\Icons\Tests\Icons
 */
class HasGenericIconsTest extends AbstractTest
{
    public function test_show()
    {
        $icon = Icons::ok();
        self::assertSame('<i class="fas fa-ok"></i>', (string)$icon);
    }
}