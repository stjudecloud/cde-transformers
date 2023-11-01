<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\Gender;

/**
 * @method static Gender|string transform($permissibleValue, $key = null)
 */
class GenderTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => Gender::UNKNOWN,
            'regex' => '/^(unknown)$/i'
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
