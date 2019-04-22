<?php

namespace Mvdnbrk\Gtin;

class ValidatorExtension extends \Illuminate\Validation\Validator
{
    /**
     * Proved 'gtin' validation rule for Laravel.
     *
     * @param  string  $attribute
     * @param  string|int  $value
     * @param  array  $parameters
     * @return bool
     */
    public function validateGtin($attribute, $value, $parameters)
    {
        return Validator::isGtin($value);
    }
}
