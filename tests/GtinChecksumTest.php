<?php

namespace Heyhoo\Gtin;

use PHPUnit\Framework\TestCase;

class GtinChecksumTest extends TestCase
{
    /** @test */
    public function a_valid_ean_should_pass()
    {
        $valid = '1000000000009';
        $this->assertTrue(Validator::isGtin($valid));
    }

    /** @test */
    public function an_invalid_ean_should_not_pass()
    {
        $invalid = '0000000000001';
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
