<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\Gender;

/**
 * @method static Gender transform($permissibleValue)
 */
enum GenderTransformer
{
    use TransformerTrait;

    case UNKNOWN;
    case NOT_REPORTED;
    case UNSPECIFIED;
    case INTERSEX;
    case FEMALE;
    case MALE;

    public const MAPPING = [
        [
            'value' => Gender::UNKNOWN,
            'regex' => '/^(unknown)$/i'
        ],
        [
            'value' => Gender::NOT_REPORTED,
            'regex' => '/^(not reported)$/i'
        ],
        [
            'value' => Gender::UNSPECIFIED,
            'regex' => '/^(unspecified)$/i'
        ],
        [
            'value' => Gender::FEMALE,
            'regex' => '/^(f|female)$/i'
        ],
        [
            'value' => Gender::MALE,
            'regex' => '/^(m|male)$/i'
        ],
        [
            'value' => Gender::INTERSEX,
            'regex' => '/^(intersex)$/i'
        ]
    ];
}
