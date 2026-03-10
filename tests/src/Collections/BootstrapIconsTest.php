<?php

namespace ByTIC\Icons\Tests\Collections;

use ByTIC\Icons\Collections\CollectionsManager;
use ByTIC\Icons\Dist\BootstrapIcons;
use ByTIC\Icons\Icon;
use ByTIC\Icons\Icons;
use ByTIC\Icons\Tests\AbstractTest;

/**
 * Class BootstrapIconsTest
 * @package ByTIC\Icons\Tests\Collections
 */
class BootstrapIconsTest extends AbstractTest
{
    public function test_create_bootstrap_collection()
    {
        $collection = CollectionsManager::create(CollectionsManager::BOOTSTRAP);
        self::assertInstanceOf(BootstrapIcons::class, $collection);
    }

    public function test_bootstrap_icon_renders_correctly()
    {
        $collection = CollectionsManager::create(CollectionsManager::BOOTSTRAP);
        $icon = $collection->icon('bookmark');
        self::assertInstanceOf(Icon::class, $icon);
        self::assertSame('<i class="bi bi-bookmark"></i>', (string) $icon);
    }

    public function test_bootstrap_icon_user_alias()
    {
        $collection = CollectionsManager::create(CollectionsManager::BOOTSTRAP);
        $icon = $collection->icon('user');
        self::assertSame('<i class="bi bi-person"></i>', (string) $icon);
    }

    public function test_bootstrap_icon_users_alias()
    {
        $collection = CollectionsManager::create(CollectionsManager::BOOTSTRAP);
        $icon = $collection->icon('users');
        self::assertSame('<i class="bi bi-people"></i>', (string) $icon);
    }

    public function test_bootstrap_icon_remove_alias()
    {
        $collection = CollectionsManager::create(CollectionsManager::BOOTSTRAP);
        $icon = $collection->icon('remove');
        self::assertSame('<i class="bi bi-trash"></i>', (string) $icon);
    }

    public function test_bootstrap_icon_cog_alias()
    {
        $collection = CollectionsManager::create(CollectionsManager::BOOTSTRAP);
        $icon = $collection->icon('cog');
        self::assertSame('<i class="bi bi-gear"></i>', (string) $icon);
    }

    public function test_bootstrap_icon_edit_alias()
    {
        $collection = CollectionsManager::create(CollectionsManager::BOOTSTRAP);
        $icon = $collection->icon('edit');
        self::assertSame('<i class="bi bi-pencil-square"></i>', (string) $icon);
    }

    public function test_bootstrap_icon_minus_alias()
    {
        $collection = CollectionsManager::create(CollectionsManager::BOOTSTRAP);
        $icon = $collection->icon('minus');
        self::assertSame('<i class="bi bi-dash"></i>', (string) $icon);
    }

    public function test_bootstrap_collection_categories()
    {
        $collection = CollectionsManager::create(CollectionsManager::BOOTSTRAP);
        $categories = $collection->categories();
        self::assertIsArray($categories);
        self::assertNotEmpty($categories);
        self::assertArrayHasKey('Arrows', $categories);
        self::assertArrayHasKey('People', $categories);
    }
}
