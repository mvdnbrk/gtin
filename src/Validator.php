<?php

namespace Mvdnbrk\Gtin;

class Validator
{
    /**
     * The cache of validated gtin values.
     *
     * @var array
     */
    protected static array $cache = [];

    /**
     * Determine whether the given value is a valid
     * Global Trade Item Number (GTIN).
     *
     * @param  string|int  $value
     * @return bool
     */
    public static function isGtin($value): bool
    {
        if (! is_numeric($value)) {
            return false;
        }

        if (isset(static::$cache[$value])) {
            return static::$cache[$value];
        }

        if (! preg_match('/^\d{8}(?:\d{4,6})?$/', $value)) {
            return false;
        }

        return static::$cache[$value] = static::calculate($value);
    }

    /**
     * Calculate if the given value has
     * a correct check digit.
     *
     * @param  string|int  $value
     * @return bool
     */
    protected static function calculate($value): bool
    {
        return substr($value, 0, -1).collect(str_split($value))
            ->slice(0, -1)
            ->pipe(function ($collection) {
                return $collection->sum() === 0 ? collect(1) : $collection;
            })
            ->reverse()
            ->values()
            ->map(function ($digit, $key) {
                return $key % 2 === 0 ? $digit * 3 : $digit;
            })
            ->pipe(function ($collection) {
                return ceil($collection->sum() / 10) * 10 - $collection->sum();
            }) == $value;
    }
}
