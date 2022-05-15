<?php

namespace Danny50610\TestbenchAutoDiscoveryTest\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Danny50610\TestbenchAutoDiscoveryTest\PackageServiceProvider;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            PackageServiceProvider::class,
        ];
    }
}
