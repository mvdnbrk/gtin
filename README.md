# GTIN / EAN / UPC Validation for Laravel

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Tests][ico-tests]][link-tests]
[![StyleCI][ico-styleci]][link-styleci]
[![Total Downloads][ico-downloads]][link-downloads]

Extension for the Laravel validation class.

## Installation

You can install the package via composer:

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

### Specifying a custom error message

You may publish the language files with the following `artisan` command:

```bash
php artisan vendor:publish --tag=gtin-lang
```

Now you can customize the error message in `resources/lang/vendor/gtin/{loale}/validation.php`.

Another option is to define the error message by adding your message to the `custom` array in the `resources/lang/{locale}/validation.php` language file.

```php
'custom' => [
    'somefield' => [
        'gtin' => 'Please enter a valid GTIN!',
    ],
],
```

 Or with a JSON file stored in `resources/lang/{locale}.json`

```javascript
{
    "validation.custom.somefield.gtin": "Please enter a valid GTIN!"
}
```

Or you may pass custom messages as the third argument to the `Validator::make` method as described in the [Laravel documentation](https://laravel.com/docs/validation#custom-error-messages).

### Helper function

This package exposes a `is_gtin()` helper function to quickly validate a GTIN.  
It will return a `boolean` whether the given value is a valid GTIN or not:

```php
is_gtin('1300000000000')    // returns true
is_gtin('1234567891234')    // returns false
```

### Migrations

This package contains a helper method to create a GTIN column in your database table:

```php
Schema::table('products', function (Blueprint $table) {
    $table->gtin();
});
```

If you would like to customize the column name and/or length you may pass these as parameters:

```php
$table->gtin('ean13', 13);
```

To drop the column you may use the `dropGtin` method:

```php
Schema::table('products', function (Blueprint $table) {
    $table->dropGtin();
    
    // $table->dropGtin('ean13');
});
```

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email mvdnbrk@gmail.com instead of using the issue tracker.

## Credits

- [Mark van den Broek](https://github.com/mvdnbrk)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/mvdnbrk/gtin.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-tests]: https://img.shields.io/travis/mvdnbrk/gtin/master.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/mvdnbrk/gtin.svg?style=flat-square
[ico-styleci]: https://github.styleci.io/repos/91986121/shield?style=flat-square&branch=master

[link-packagist]: https://packagist.org/packages/mvdnbrk/gtin
[link-tests]: https://travis-ci.org/mvdnbrk/gtin
[link-downloads]: https://packagist.org/packages/mvdnbrk/gtin
[link-styleci]: https://github.styleci.io/repos/91986121
[link-author]: https://github.com/mvdnbrk
