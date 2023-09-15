<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\Gender;

enum GenderTransformer
{
    use TransformerTrait;

    case INTERSEX;
    case NOT_REPORTED;
    case UNKNOWN;
    case UNSPECIFIED;
    case FEMALE;
    case MALE;

    public const MAPPING = [
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
        ],
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
        ]
    ];
}
