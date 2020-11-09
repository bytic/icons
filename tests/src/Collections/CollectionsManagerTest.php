<?php

namespace ByTIC\Icons\Tests\Collections;

use ByTIC\Icons\Collections\CollectionsManager;
use ByTIC\Icons\Dist\FontAwesome5Solid;
use ByTIC\Icons\Tests\AbstractTest;

/**
 * Class CollectionsManagerTest
 * @package ByTIC\Icons\Tests\Collections
 */
class CollectionsManagerTest extends AbstractTest
{
    public function test_create_empty()
    {
        $collection = CollectionsManager::create();
        self::assertInstanceOf(FontAwesome5Solid::class, $collection);
    }
}
