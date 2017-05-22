<?php

namespace Heyhoo\Gtin;

class Validator
{
    public static function isGtin($value)
    {
        if (!is_numeric($value) || empty((int) $value)) {
            return false;
        }

        $lastDigit = (int) substr($value, -1);

        $sum = collect(str_split($value))
            ->slice(0, -1)
            ->map(function ($digit, $key) {
                return $key % 2 === 0 ? $digit : 3 * $digit;
            })
            ->sum();

        $nearestTen = ceil($sum / 10) * 10;
        $checksum = (int) $nearestTen - $sum;

        return $lastDigit === $checksum;
    }
}
