# GTIN Validation Class

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Extension for the Laravel validation class

## Install

Require the package via Composer:

``` bash
$ composer require mvdnbrk/gtin
```

## Usage

Laravel 5.5 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

If you don't use auto-discovery, open your `config/app.php` file and add the ServiceProvider to the providers array:

```
'providers' => [
	...

	Mvdnbrk\Gtin\ValidationServiceProvider::class,

	...
],
```

Now you can use the `gtin` validation:

```
$this->validate($request, [
    'somefield' => 'gtin',
]);
```

## Specifying custom error message in language files

To customize the error message add your messages to the `custom` array in the `resources/lang/<language>/validation.php` language file.

```
'custom' => [
    'somefield' => [
        'gtin' => 'Please enter a valid GTIN!',
    ],
],
```

 Or in the JSON file stored in `resources/lang/<language>.json`

```
{
    "validation.custom.somefield.gtin": "Please enter a valid GTIN!"
}
```

Or you may pass the custom messages as the third argument to the `Validator::make` method like [described in the docs](https://laravel.com/docs/5.4/validation#custom-error-messages).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/mvdnbrk/gtin.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/mvdnbrk/gtin/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/mvdnbrk/gtin.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/mvdnbrk/gtin.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/gtin/model.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/mvdnbrk/gtin
[link-travis]: https://travis-ci.org/mvdnbrk/gtin
[link-scrutinizer]: https://scrutinizer-ci.com/g/mvdnbrk/gtin/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/mvdnbrk/gtin
[link-downloads]: https://packagist.org/packages/mvdnbrk/gtin
[link-author]: https://github.com/mvdnbrk
