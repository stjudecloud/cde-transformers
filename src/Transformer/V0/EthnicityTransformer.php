<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V2\Data\Ethnicity;

/**
 * @method static Ethnicity transform($permissibleValue)
 */
enum EthnicityTransformer
{
    use TransformerTrait;

    case NOT_ALLOWED_TO_COLLECT;
    case HISPANIC_OR_LATINO;
    case NOT_HISPANIC_OR_LATINO;
    case UNKNOWN;
    case NOT_REPORTED;

    public const MAPPING = [
        [
            'value' => Ethnicity::NOT_ALLOWED_TO_COLLECT,
            'regex' => '/^(not allowed( to collect)?)$/i'
        ],
        [
            'value' => Ethnicity::UNKNOWN,
            'regex' => '/^(unknown)$/i'
        ],
        [
            'value' => Ethnicity::NOT_REPORTED,
            'regex' => '/^(not reported)$/i'
        ],
        [
            'value' => Ethnicity::HISPANIC_OR_LATINO,
            'regex' => '/^(hispanic or latino)$/i'
        ],
        [
            'value' => Ethnicity::NOT_HISPANIC_OR_LATINO,
            'regex' => '/^(not hispanic or latino)$/i'
        ]
    ];
}
