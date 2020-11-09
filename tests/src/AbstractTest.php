<?php

namespace ByTIC\Icons\Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractTest
 * @package ByTIC\Icons\Tests
 */
abstract class AbstractTest extends TestCase
{
    protected function tearDown(): void
    {
        parent::tearDown();
        m::close();
    }
}
