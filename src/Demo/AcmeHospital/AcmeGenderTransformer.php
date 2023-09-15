<?php

namespace CCDI\Demo\AcmeHospital;

use CCDI\CDE\V1\Data\Gender;
use CCDI\Transformer\V0\GenderTransformer;
use CCDI\Transformer\V0\TransformerTrait;

/**
 * @method static Gender transform($permissibleValue)
 */
enum AcmeGenderTransformer
{
    use TransformerTrait;

    case UNKNOWN;
    case NOT_REPORTED;
    case UNSPECIFIED;
    case INTERSEX;
    case FEMALE;
    case MALE;
    case CAT;

    public static function getMappings()
    {
        $mappings = GenderTransformer::MAPPING;

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
