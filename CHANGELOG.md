# Changelog

All notable changes to `gtin` will be documented in this file.

## [Unreleased]

## [v2.1.2] - 2019-05-06

### Changed
- Changed `isGtin` to a static method. [`08acf40`](https://github.com/mvdnbrk/gtin/commit/08acf40807e1c6ee699111fafb4025417fee6e52)

## [v2.1.1] - 2019-04-22

### Fixed
- Fixed validation. Only allow GTIN-8, GTIN-12, GTIN-13, GTIN-14 values. [`02266f1`](https://github.com/mvdnbrk/gtin/commit/02266f1bf85d018209548322cc942cf25afab439)

## [v2.1.0] - 2019-04-22

### Fixed
- Fixed validation of integer values. [`aef5f4c`](https://github.com/mvdnbrk/gtin/commit/aef5f4c68c621701055026dc14c91efbb6e50860)
- Fixed validation for non numeric values. [`7a31b4b`](https://github.com/mvdnbrk/gtin/commit/7a31b4b11342a712b6b752373654283b401c3e7a)

### Removed
- Removed support for PHP 7.0. [`614dffe`](https://github.com/mvdnbrk/gtin/commit/614dffec69eaa60ab4eacaf471a05ad2f0253ec3)

## [v2.0.6] - 2019-02-03

### Added
- Added support for Laravel 5.8.

[Unreleased]: https://github.com/mvdnbrk/gtin/compare/v2.1.2...HEAD
[v2.1.2]: https://github.com/mvdnbrk/gtin/compare/v2.1.1...v2.1.2
[v2.1.1]: https://github.com/mvdnbrk/gtin/compare/v2.1.0...v2.1.1
[v2.1.0]: https://github.com/mvdnbrk/gtin/compare/v2.0.6...v2.1.0
[v2.0.6]: https://github.com/mvdnbrk/gtin/compare/v2.0.5...v2.0.6
