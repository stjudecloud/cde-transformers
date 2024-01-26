# St Jude - CDE Transformers

## Overview

A PHP package to transform your gnomics values into permissible values for commonly used CDEs within the CCDI API.

The values you have within your system may not match the permissible values for the CDEs. This package provides a way to transform your values into permissible values for the CDEs. As well as providing an `AbstractTransformer` class that can be extended to prodice custom transformations.

## Requirements

This package requires the following to work as expected:

- PHP 8.2.7

Optional:   

- PHPUnit ^10.3

## Installation

Install the package via composer:

```bash
composer require stjude/cde-transformers
```

## Usage

```php
<?php   
require_once __DIR__ . '/vendor/autoload.php';
use CCDI\Transformer\V0\SexTransformer;
$femalePermissibleValue = SexTransformer::transform('FEMALE')['permissible_value'];
?>
```

Also see `index.php` for more examples.

## Custom Tranformers

A demo Customer Transform exists in `src/Demo/AcmeHospital/AcmeSexTransformer.php`. This can be used as a starting point for creating your own custom transformers.

This demo transformer has been created to transform the values of `boy` to the CDE value for `Male` and `girl` to the CDE value for `Female`.

Another example follows for transforming Swedish spelling of `Normal`:

```php
class AcmeSampleTumorStatusTransformer extends SampleTumorStatusTransformer
{
    public static function getMappings(): array
    {
        $mappings = SampleTumorStatusTransformer::$MAPPINGS;

        $mappings[] =
            [
                'value' => SampleTumorStatus::NORMAL,
                'regex' => '/^(vanligt)$/i'
            ];

        return $mappings;
    }
}
```

## CDE Versions

Each CDE's permissible value, long name, concept code, description and public_id are harded coded into a Data class, e.g. `src/CDE/V1/Data/Sex.php`. This is to ensure that the permissible values are always up to date with the CDEs.

Once a CDE is released, a new version of the package can be released with the new permissible values.

Feel free to create a pull request to add new CDEs.

## Tests

Run tests in `tests/` using

`vendor/bin/phpunit tests/`

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.