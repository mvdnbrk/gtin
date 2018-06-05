<?php

namespace Mvdnbrk\Gtin\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return ['Mvdnbrk\Gtin\GtinValidationServiceProvider'];
    }
}
