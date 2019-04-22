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
        $this->assertTrue($this->validator->make(
            ['field' => '14000000000003'],
            ['field' => 'gtin']
        )->passes());
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
    public function a_valid_gtin_integer_value_should_pass()
    {
        $this->assertTrue($this->validator->make(
            ['field' => 80000006],
            ['field' => 'gtin']
        )->passes());
    }

    /** @test */
    public function a_too_short_value_should_not_pass()
    {
        $this->assertFalse($this->validator->make(
            ['field' => '7000003'],
            ['field' => 'gtin']
        )->passes());
    }

    /** @test */
    public function a_too_long_value_should_not_pass()
    {
        $this->assertFalse($this->validator->make(
            ['field' => '150000000000004'],
            ['field' => 'gtin']
        )->passes());
    }

    /** @test */
    public function a_value_with_a_length_of_nine_digits_should_not_pass()
    {
        $this->assertFalse($this->validator->make(
            ['field' => '900000001'],
            ['field' => 'gtin']
        )->passes());
    }

    /** @test */
    public function a_value_with_a_length_of_ten_digits_should_not_pass()
    {
        $this->assertFalse($this->validator->make(
            ['field' => '1000000007'],
            ['field' => 'gtin']
        )->passes());
    }

    /** @test */
    public function a_value_with_a_length_of_eleven_digits_should_not_pass()
    {
        $this->assertFalse($this->validator->make(
            ['field' => '11000000006'],
            ['field' => 'gtin']
        )->passes());
    }

    /** @test */
    public function zeros_should_not_pass()
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
