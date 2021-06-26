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
    public function test_ok()
    {
        $icon = Icons::ok();
        self::assertEquals('<i class="fas fa-check"></i>', $icon);
    }

    public function test_remove()
    {
        $icon = Icons::remove();
        self::assertEquals('<i class="fas fa-trash-alt"></i>', $icon);
    }
}