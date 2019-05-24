# GTIN / EAN / UPC Validation for Laravel

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![StyleCI][ico-styleci]][link-styleci]
[![Total Downloads][ico-downloads]][link-downloads]

Extension for the Laravel validation class.

## Installation

This package requires PHP 7 and Laravel 5.5 or higher.

Require the package via Composer:

``` bash
$ composer require mvdnbrk/gtin
```

## Usage

Now you can use the `gtin` validation to validate a GTIN-8, GTIN-12, GTIN-13 or GTIN-14:

```php
$this->validate($request, [
    'somefield' => 'gtin',
]);
```

### Specifying custom error message in language files

To customize the error message add your messages to the `custom` array in the `resources/lang/<language>/validation.php` language file.

```php
'custom' => [
    'somefield' => [
        'gtin' => 'Please enter a valid GTIN!',
    ],
],
```

 Or in the JSON file stored in `resources/lang/<language>.json`

```javascript
{
    "validation.custom.somefield.gtin": "Please enter a valid GTIN!"
}
```

Or you may pass custom messages as the third argument to the `Validator::make` method as [described in the docs](https://laravel.com/docs/validation#custom-error-messages).

### Helper function

This package exposes a `is_gtin()` helper function to quickly validate a GTIN.  
It will return a `boolean` whether the given value is a valid GTIN or not:

```php
is_gtin('1300000000000')    // returns true
is_gtin('1234567891234')    // returns false
```

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email mvdnbrk@gmail.com instead of using the issue tracker.

## Credits

- [Mark van den Broek](https://github.com/mvdnbrk)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/mvdnbrk/gtin.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/mvdnbrk/gtin/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/mvdnbrk/gtin.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/mvdnbrk/gtin.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/mvdnbrk/gtin.svg?style=flat-square
[ico-styleci]: https://github.styleci.io/repos/91986121/shield?style=flat-square&branch=master

[link-packagist]: https://packagist.org/packages/mvdnbrk/gtin
[link-travis]: https://travis-ci.org/mvdnbrk/gtin
[link-scrutinizer]: https://scrutinizer-ci.com/g/mvdnbrk/gtin/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/mvdnbrk/gtin
[link-downloads]: https://packagist.org/packages/mvdnbrk/gtin
[link-styleci]: https://github.styleci.io/repos/91986121
[link-author]: https://github.com/mvdnbrk
