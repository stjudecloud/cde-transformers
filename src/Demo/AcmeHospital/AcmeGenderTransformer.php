<?php

namespace CCDI\Demo\AcmeHospital;

use CCDI\CDE\V1\Data\Gender;
use CCDI\Transformer\V0\GenderTransformer;

/**
 * @method static Gender transform($permissibleValue, $key = null)
 */
class AcmeGenderTransformer extends GenderTransformer
{
    public static function getMappings(): array
    {
        $mappings = GenderTransformer::$MAPPINGS;

        $mappings[] =
            [
                'value' => Gender::MALE,
                'regex' => '/^(boy)$/i'
            ];

        $mappings[] =
            [
                'value' => Gender::FEMALE,
                'regex' => '/^(girl)$/i'
            ];

        return $mappings;
    }
}
