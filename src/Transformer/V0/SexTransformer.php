<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\Sex;

/**
 * @method static Sex|string transform($permissibleValue, $key = null)
 */
class SexTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => Sex::UNKNOWN,
            'regex' => '/^(unknown)$/i'
        ],
        [
            'value' => Sex::FEMALE,
            'regex' => '/^(f|female)$/i'
        ],
        [
            'value' => Sex::MALE,
            'regex' => '/^(m|male)$/i'
        ],
        [
            'value' => Sex::INTERSEX,
            'regex' => '/^(intersex)$/i'
        ]
    ];
}
