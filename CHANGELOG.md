# Changelog

All notable changes to `gtin` will be documented in this file.

## [Unreleased]

## [v2.8.0] - 2022-03-07

### Added
- Support for Laravel 9. [`#11`](https://github.com/mvdnbrk/gtin/pull/15)

## [v2.7.0] - 2020-12-01

### Added
- Support for PHP 8. [`#11`](https://github.com/mvdnbrk/gtin/pull/13)

## [v2.6.0] - 2020-08-07

### Added
- Support for Laravel 8. [`#11`](https://github.com/mvdnbrk/gtin/pull/11)

## [v2.5.1] - 2020-03-25

### Added
- Added return type declarations. [`8099676`](https://github.com/mvdnbrk/gtin/commit/80996768bdcc2f08dd66113d8675294afdcf52dd)

## [v2.5.0] - 2020-03-03

### Added
- Support for Laravel 7. [`#10`](https://github.com/mvdnbrk/gtin/pull/10)

## [v2.4.2] - 2019-11-23

### Fixed
- Fixed ability to specify a custom error message. [`#8`](https://github.com/mvdnbrk/gtin/pull/8)

## [v2.4.1] - 2019-11-23

### Fixed
- Make macro chainable. [`a471b31`](https://github.com/mvdnbrk/gtin/commit/a471b31d3290462a8755b3019e3f73ddc35888b5)

## [v2.4.0] - 2019-11-23

### Added
- Added blueprint macros.  [`18a096e`](https://github.com/mvdnbrk/gtin/commit/18a096e60198813d75c8427e3f85cfa41273a24b), [`75f7166`](https://github.com/mvdnbrk/gtin/commit/75f7166abf6b4a2c961fc5687911292c6f0424ae)

## [v2.3.3] - 2019-08-24

### Changed
- Updated matrix to test against Laravel 6.0 [`#7`](https://github.com/mvdnbrk/gtin/pull/7)
- Replaced helper function with `Lang::get()`. [`a150709`](https://github.com/mvdnbrk/gtin/commit/a150709b7ca7028b469b260a197fb000421ab034)

## [v2.3.2] - 2019-07-31

### Added
- Added a cache for validated values. [`392e838`](https://github.com/mvdnbrk/gtin/commit/392e838e26c196d6d5e3d9076b5d74866c529713)

### Changed
- Moved the check digit calculation to it's own method. [`74d477e`](https://github.com/mvdnbrk/gtin/commit/74d477e5bfd8298e7a0a109ca45e637e2e1181ea)

## [v2.3.1] - 2019-07-31

### Changed
- Updated version contraints to support Laravel 6.0. [`33cb9a8`](https://github.com/mvdnbrk/gtin/commit/33cb9a82907e63d1a1819b7248ede1334b3923e5)

## [v2.3.0] - 2019-06-03

### Added
- Added translations. [`e66ac04`](https://github.com/mvdnbrk/gtin/commit/e66ac04a7deffdd887ee4ec1a0a427229a52dad7)
- Added ability to publish translations. [`e5fd1a5`](https://github.com/mvdnbrk/gtin/commit/e5fd1a536fa67c922c535f9f2aad662de000c96ca)

### Fixed
- Removed unused parameters.  [`c0ec5f5`](https://github.com/mvdnbrk/gtin/commit/c0ec5f5986d304fbba99551fbc98a7cfdc7b6a42), [`1f9c5aa`](https://github.com/mvdnbrk/gtin/commit/1f9c5aa8f4dda06239d747f0953990d8bf009798), [`13b598c`](https://github.com/mvdnbrk/gtin/commit/13b598c58be904c717b12752a80242309e755054), [`8993154`](https://github.com/mvdnbrk/gtin/commit/899315496c2876382aa75d4769b1868299535db8)

## [v2.2.1] - 2019-05-24

### Fixed
- Fixed autoloading. [`ef607b1`](https://github.com/mvdnbrk/gtin/commit/ef607b13edaa7d9e375b66c711c02918148b199a)

## [v2.2.0] - 2019-05-24

### Added
- Added an `isGtin()` helper function. [`4994e1d`](https://github.com/mvdnbrk/gtin/commit/4994e1df4ff506a0bda18a422537afae7ed18962)

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

[Unreleased]: https://github.com/mvdnbrk/gtin/compare/v2.8.0...HEAD
[v2.8.0]: https://github.com/mvdnbrk/gtin/compare/v2.7.0...v2.8.0
[v2.7.0]: https://github.com/mvdnbrk/gtin/compare/v2.6.0...v2.7.0
[v2.6.0]: https://github.com/mvdnbrk/gtin/compare/v2.5.1...v2.6.0
[v2.5.1]: https://github.com/mvdnbrk/gtin/compare/v2.5.0...v2.5.1
[v2.5.0]: https://github.com/mvdnbrk/gtin/compare/v2.4.2...v2.5.0
[v2.4.2]: https://github.com/mvdnbrk/gtin/compare/v2.4.1...v2.4.2
[v2.4.1]: https://github.com/mvdnbrk/gtin/compare/v2.4.0...v2.4.1
[v2.4.0]: https://github.com/mvdnbrk/gtin/compare/v2.3.3...v2.4.0
[v2.3.3]: https://github.com/mvdnbrk/gtin/compare/v2.3.2...v2.3.3
[v2.3.2]: https://github.com/mvdnbrk/gtin/compare/v2.3.1...v2.3.2
[v2.3.1]: https://github.com/mvdnbrk/gtin/compare/v2.3.0...v2.3.1
[v2.3.0]: https://github.com/mvdnbrk/gtin/compare/v2.2.1...v2.3.0
[v2.2.1]: https://github.com/mvdnbrk/gtin/compare/v2.2.0...v2.2.1
[v2.2.0]: https://github.com/mvdnbrk/gtin/compare/v2.1.2...v2.2.0
[v2.1.2]: https://github.com/mvdnbrk/gtin/compare/v2.1.1...v2.1.2
[v2.1.1]: https://github.com/mvdnbrk/gtin/compare/v2.1.0...v2.1.1
[v2.1.0]: https://github.com/mvdnbrk/gtin/compare/v2.0.6...v2.1.0
[v2.0.6]: https://github.com/mvdnbrk/gtin/compare/v2.0.5...v2.0.6
