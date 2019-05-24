<?php

use Mvdnbrk\Gtin\Validator;

if (! function_exists('is_gtin')) {
    /**
     * Determine if a value is valid Global Trade Identification Number.
     *
     * @param  string  $value
     * @return bool
     */
    function is_gtin($value)
    {
        return Validator::isGtin($value);
    }
}
