<?php

namespace Mvdnbrk\Gtin;

use Illuminate\Support\ServiceProvider;

class GtinValidationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'validation');

        $this->app['validator']->resolver(function ($translator, $data, $rules) {
            return new ValidatorExtension($translator, $data, $rules, [
                'gtin' => $this->getErrorMessage($rules, 'gtin'),
            ]);
        });
    }

    /**
     * Return the matching error message for the key.
     *
     * @param  array  $rules
     * @param  string  $key
     * @return string
     */
    private function getErrorMessage($rules, $key)
    {
        return collect($this->getPackageDefaultErrorMessage($key))
            ->merge($this->getValidationErrorMessage($key))
            ->merge(
                collect($rules)->map(function ($rule, $attribute) use ($key) {
                    return $this->getCustomErrorMessage($attribute, $key);
                })->filter()
            )
            ->last();
    }

    /**
     * Get the default error message for a given key.
     *
     * @param  string  $rule
     * @return string
     */
    private function getPackageDefaultErrorMessage($rule)
    {
        return __("validation::validation.{$rule}");
    }

    /**
     * Get the validation error message for a given key.
     *
     * @param  string  $rule
     * @return string|null
     */
    private function getValidationErrorMessage($rule)
    {
        return collect(__("validation.{$rule}"))
            ->reject("validation.{$rule}")
            ->first();
    }

    /**
     * Get the custom error message for a given key.
     *
     * @param  string  $attribute
     * @param  string  $rule
     * @return string|null
     */
    private function getCustomErrorMessage($attribute, $rule)
    {
        return collect(__("validation.custom.{$attribute}.{$rule}"))
            ->reject("validation.custom.{$attribute}.{$rule}")
            ->first();
    }
}
