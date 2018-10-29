<?php

namespace Mvdnbrk\Gtin;

class ValidatorExtension extends \Illuminate\Validation\Validator
{
    /**
     * Proved 'gtin' validation rule for Laravel.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function validateGtin($attribute, $value, $parameters)
    {
        return Validator::isGtin($value);
    }
}
