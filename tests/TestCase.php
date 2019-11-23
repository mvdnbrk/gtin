<?php

namespace Mvdnbrk\Gtin\Tests;

use Mvdnbrk\Gtin\GtinServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * Get package providers.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            GtinServiceProvider::class,
        ];
    }
}
