<?php

namespace CCDI\Demo\AcmeHospital;

use CCDI\CDE\V1\Data\SexAtBirth;
use CCDI\Transformer\V0\SexAtBirthTransformer;

/**
 * @method static Sex transform($permissibleValue, $key = null)
 */
class AcmeSexSexAtBirthTransformer extends SexAtBirthTransformer
{
    public static function getMappings(): array
    {
        $mappings = SexSexAtBirthTransformer::$MAPPINGS;

        $mappings[] =
            [
                'value' => SexAtBirth::MALE,
                'regex' => '/^(boy)$/i'
            ];

        $mappings[] =
            [
                'value' => SexAtBirth::FEMALE,
                'regex' => '/^(girl)$/i'
            ];

        return $mappings;
    }
}
