<?php

namespace Mvdnbrk\Gtin\Tests;

class TranslationTest extends TestCase
{
    /**
     * @var \Illuminate\Validation\Factory
     */
    protected $validator;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = $this->app['validator'];
        dd(get_class($this->validator));
    }

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
        $validation = $this->validator->make(
            ['field' => 'invalid-gtin'],
            ['field' => 'gtin']
        );

        $this->assertEquals(
            'Het veld field moet een geldig Global Trade Item Number (GTIN) zijn.',
            $validation->errors()->first('field')
        );
    }
}
