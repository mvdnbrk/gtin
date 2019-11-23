<?php

namespace Mvdnbrk\Gtin\Tests;

use Illuminate\Support\Facades\Validator;

class TranslationTest extends TestCase
{
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application   $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('app.locale', 'nl');
    }

    /** @test */
    public function an_error_message_gets_translated()
    {
        $validator = Validator::make(
            ['field' => 'invalid-gtin'],
            ['field' => 'gtin']
        );

        $this->assertEquals(
            'Het veld field moet een geldig Global Trade Item Number (GTIN) zijn.',
            $validator->errors()->first('field')
        );
    }
}
