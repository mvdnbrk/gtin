<?php

namespace Mvdnbrk\Gtin\Tests;

use Illuminate\Support\Facades\Validator;

class GtinValidationTest extends TestCase
{
    /** @test */
    public function a_valid_gtin8_should_pass()
    {
        $validator = Validator::make(
            ['field' => '80000006'],
            ['field' => 'gtin']
        );

        $this->assertTrue($validator->passes());
    }

    /** @test */
    public function an_invalid_gtin8_should_not_pass()
    {
        $validator = Validator::make(
            ['field' => '80000000'],
            ['field' => 'gtin']
        );

        $this->assertFalse($validator->passes());
    }

    /** @test */
    public function a_valid_gtin12_should_pass()
    {
        $validator = Validator::make(
            ['field' => '120000000005'],
            ['field' => 'gtin']
        );

        $this->assertTrue($validator->passes());
    }

    /** @test */
    public function an_invalid_gtin12_should_not_pass()
    {
        $validator = Validator::make(
            ['field' => '120000000000'],
            ['field' => 'gtin']
        );

        $this->assertFalse($validator->passes());
    }

    /** @test */
    public function a_valid_gtin13_should_pass()
    {
        $validator = Validator::make(
            ['field' => '1300000000000'],
            ['field' => 'gtin']
        );

        $this->assertTrue($validator->passes());
    }

    /** @test */
    public function an_invalid_gtin13_should_not_pass()
    {
        $validator = Validator::make(
            ['field' => '1300000000001'],
            ['field' => 'gtin']
        );

        $this->assertFalse($validator->passes());
    }

    /** @test */
    public function a_valid_gtin14_should_pass()
    {
        $validator = Validator::make(
            ['field' => '14000000000003'],
            ['field' => 'gtin']
        );

        $this->assertTrue($validator->passes());
    }

    /** @test */
    public function an_invalid_gtin14_should_not_pass()
    {
        $validator = Validator::make(
            ['field' => '14000000000000'],
            ['field' => 'gtin']
        );

        $this->assertFalse($validator->passes());
    }

    /** @test */
    public function a_valid_gtin_integer_value_should_pass()
    {
        $validator = Validator::make(
            ['field' => 80000006],
            ['field' => 'gtin']
        );

        $this->assertTrue($validator->passes());
    }

    /** @test */
    public function a_too_short_value_should_not_pass()
    {
        $validator = Validator::make(
            ['field' => '7000003'],
            ['field' => 'gtin']
        );

        $this->assertFalse($validator->passes());
    }

    /** @test */
    public function a_too_long_value_should_not_pass()
    {
        $validator = Validator::make(
            ['field' => '150000000000004'],
            ['field' => 'gtin']
        );

        $this->assertFalse($validator->passes());
    }

    /** @test */
    public function a_value_with_a_length_of_nine_digits_should_not_pass()
    {
        $validator = Validator::make(
            ['field' => '900000001'],
            ['field' => 'gtin']
        );

        $this->assertFalse($validator->passes());
    }

    /** @test */
    public function a_value_with_a_length_of_ten_digits_should_not_pass()
    {
        $validator = Validator::make(
            ['field' => '1000000007'],
            ['field' => 'gtin']
        );

        $this->assertFalse($validator->passes());
    }

    /** @test */
    public function a_value_with_a_length_of_eleven_digits_should_not_pass()
    {
        $validator = Validator::make(
            ['field' => '11000000006'],
            ['field' => 'gtin']
        );

        $this->assertFalse($validator->passes());
    }

    /** @test */
    public function zeros_should_not_pass()
    {
        $validator = Validator::make(
            ['field' => '0000000000000'],
            ['field' => 'gtin']
        );

        $this->assertFalse($validator->passes());
    }

    /** @test */
    public function a_string_should_not_pass()
    {
        $validator = Validator::make(
            ['field' => 'string'],
            ['field' => 'gtin']
        );

        $this->assertFalse($validator->passes());
    }

    /** @test */
    public function an_array_should_not_pass()
    {
        $validator = Validator::make(
            ['field' => []],
            ['field' => 'gtin']
        );

        $this->assertFalse($validator->passes());
    }

    /** @test */
    public function it_returns_the_correct_error_message()
    {
        $validator = Validator::make(
            ['field' => 'invalid-gtin'],
            ['field' => 'gtin']
        );

        $this->assertEquals(
            'The field must be a valid Global Trade Item Number (GTIN).',
            $validator->errors()->first('field')
        );
    }

    /** @test */
    public function it_has_a_helper_function()
    {
        $this->assertTrue(is_gtin('1300000000000'));
    }

    /** @test */
    public function it_validates_the_same_values_against_a_cache()
    {
        $this->assertFalse(is_gtin('12345678'));
        $this->assertFalse(is_gtin('12345678'));

        $this->assertTrue(is_gtin('1300000000000'));
        $this->assertTrue(is_gtin('1300000000000'));
    }
}
