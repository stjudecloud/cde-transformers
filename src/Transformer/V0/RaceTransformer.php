<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\Race;

/**
 * @method static string|null|Race transform($permissibleValue, $key = null)
 */
class RaceTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => Race::NOT_ALLOWED_TO_COLLECT,
            'regex' => '/^(not allowed( to collect)?)$/i'
        ],
        [
            'value' => Race::UNKNOWN,
            'regex' => '/^(unknown)$/i'
        ],
        [
            'value' => Race::NOT_REPORTED,
            'regex' => '/^(not reported)$/i'
        ],
        [
            'value' => Race::WHITE,
            'regex' => '/^(white)$/i'
        ],
        [
            'value' => Race::ASIAN,
            'regex' => '/^(asian)$/i'
        ],
        [
            'value' => Race::BLACK_OR_AFRICAN_AMERICAN,
            'regex' => '/^(black or african american|black|african american)$/i'
        ],
        [
            'value' => Race::NATIVE_HAWAIIAN_OR_OTHER_PACIFIC_ISLANDER,
            'regex' => '/^(native hawaiian|native hawaiian or other pacific islander|other pacific islander|pacific islander)$/i'
        ],
        [
            'value' => Race::AMERICAN_INDIAN_OR_ALASKA_NATIVE,
            'regex' => '/^(american indian|american indian or alaska native|alaska native)$/i'
        ]
    ];
}
