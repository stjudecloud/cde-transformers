<?php

namespace CCDI\Demo\AcmeHospital;

use CCDI\CDE\V1\Data\Sex;
use CCDI\Transformer\V0\SexTransformer;

/**
 * @method static Sex transform($permissibleValue, $key = null)
 */
class AcmeSexTransformer extends SexTransformer
{
    public static function getMappings(): array
    {
        $mappings = SexTransformer::$MAPPINGS;

        $mappings[] =
            [
                'value' => Sex::MALE,
                'regex' => '/^(boy)$/i'
            ];

        $mappings[] =
            [
                'value' => Sex::FEMALE,
                'regex' => '/^(girl)$/i'
            ];

        return $mappings;
    }
}
