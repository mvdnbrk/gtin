<?php

namespace Heyhoo\Gtin;

use PHPUnit\Framework\TestCase;

class GtinChecksumTest extends TestCase
{
    /** @test */
    public function a_valid_gtin8_should_pass()
    {
        $valid = '80000006';
        $this->assertTrue(Validator::isGtin($valid));
    }

    /** @test */
    public function an_invalid_gtin8_should_not_pass()
    {
        $valid = '80000000';
        $this->assertFalse(Validator::isGtin($valid));
    }

    /** @test */
    public function a_valid_gtin12_should_pass()
    {
        $valid = '120000000005';
        $this->assertTrue(Validator::isGtin($valid));
    }

    /** @test */
    public function an_invalid_gtin12_should_not_pass()
    {
        $valid = '120000000000';
        $this->assertFalse(Validator::isGtin($valid));
    }

    /** @test */
    public function a_valid_gtin13_should_pass()
    {
        $valid = '1300000000000';
        $this->assertTrue(Validator::isGtin($valid));
    }

    /** @test */
    public function an_invalid_gtin13_should_not_pass()
    {
        $invalid = '1300000000001';
        $this->assertFalse(Validator::isGtin($invalid));
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
        $invalid = '14000000000000';
        $this->assertFalse(Validator::isGtin($invalid));
    }

    /** @test */
    public function zeors_should_not_pass()
    {
        $invalid = '0000000000000';
        $this->assertFalse(Validator::isGtin($invalid));
    }

    /** @test */
    public function a_string_should_not_pass()
    {
        $invalid = 'string';
        $this->assertFalse(Validator::isGtin($invalid));
    }

    /** @test */
    public function an_empty_string_should_not_pass()
    {
        $invalid = '';
        $this->assertFalse(Validator::isGtin($invalid));
    }
}
