<?php

namespace Mvdnbrk\Gtin\Tests;

use Mvdnbrk\Gtin\Validator;

class GtinValidationTest extends TestCase
{
    protected $validator;

    public function setUp(): void
    {
        parent::setUp();

        $this->validator = $this->app['validator'];
    }

    /** @test */
    public function a_valid_gtin8_should_pass()
    {
        $this->assertTrue($this->validator->make(
            ['field' => '80000006'],
            ['field' => 'gtin']
        )->passes());
    }

    /** @test */
    public function an_invalid_gtin8_should_not_pass()
    {
        $this->assertFalse($this->validator->make(
            ['field' => '80000000'],
            ['field' => 'gtin']
        )->passes());
    }

    /** @test */
    public function a_valid_gtin12_should_pass()
    {
        $this->assertTrue($this->validator->make(
            ['field' => '120000000005'],
            ['field' => 'gtin']
        )->passes());
    }

    /** @test */
    public function an_invalid_gtin12_should_not_pass()
    {
        $this->assertFalse($this->validator->make(
            ['field' => '120000000000'],
            ['field' => 'gtin']
        )->passes());
    }

    /** @test */
    public function a_valid_gtin13_should_pass()
    {
        $this->assertTrue($this->validator->make(
            ['field' => '1300000000000'],
            ['field' => 'gtin']
        )->passes());
    }

    /** @test */
    public function an_invalid_gtin13_should_not_pass()
    {
        $this->assertFalse($this->validator->make(
            ['field' => '1300000000001'],
            ['field' => 'gtin']
        )->passes());
    }

    /** @test */
    public function a_valid_gtin14_should_pass()
    {
        $valid = '14000000000003';
        $this->assertTrue(Validator::isGtin($valid));
    }

    /** @test */
    public function an_invalid_gtin14_should_not_pass()
    {
        $this->assertFalse($this->validator->make(
            ['field' => '14000000000000'],
            ['field' => 'gtin']
        )->passes());
    }

    /** @test */
    public function zeors_should_not_pass()
    {
        $this->assertFalse($this->validator->make(
            ['field' => '0000000000000'],
            ['field' => 'gtin']
        )->passes());
    }

    /** @test */
    public function a_string_should_not_pass()
    {
        $this->assertFalse($this->validator->make(
            ['field' => 'string'],
            ['field' => 'gtin']
        )->passes());
    }

    /** @test */
    public function an_array_should_not_pass()
    {
        $this->assertFalse($this->validator->make(
            ['field' => []],
            ['field' => 'gtin']
        )->passes());
    }

    /** @test */
    public function it_returns_the_correct_error_message()
    {
        $validation = $this->validator->make(
            ['field' => 'invalid-gtin'],
            ['field' => 'gtin']
        );

        $this->assertEquals(
            'The field must be a valid Global Trade Item Number (GTIN).',
            $validation->errors()->first('field')
        );
    }
}
