<?php

namespace Mvdnbrk\Gtin;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Mvdnbrk\Gtin\Validator as GtinValidator;

class GtinServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'gtin');

        Validator::extend('gtin', function ($attribute, $value) {
            return GtinValidator::isGtin($value);
        });

        Validator::replacer('gtin', function ($message, $attribute) {
            return str_replace(
                ':attribute',
                $attribute,
                $message === 'validation.gtin' ? Lang::get('gtin::validation.gtin') : $message
            );
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->offerPublishing();
        $this->registerBlueprintMacros();
    }

    /**
     * Setup the resource publishing.
     *
     * @return void
     */
    protected function offerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/gtin'),
            ], 'gtin-lang');
        }
    }

    /**
     * Register the blueprint macros.
     *
     * @return void
     */
    protected function registerBlueprintMacros()
    {
        if ($this->app->runningInConsole()) {
            Blueprint::macro('gtin', function ($column = 'gtin', $length = 14) {
                /* @var \Illuminate\Database\Schema\Blueprint $this */
                return $this->string($column, $length);
            });

            Blueprint::macro('dropGtin', function ($column = 'gtin') {
                /* @var \Illuminate\Database\Schema\Blueprint $this */
                return $this->dropColumn($column);
            });
        }
    }
}
