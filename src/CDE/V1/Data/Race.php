<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum Race implements ArrayAccess
{
    use ValidatorTrait;

    case NOT_ALLOWED_TO_COLLECT;
    case UNKNOWN;
    case NOT_REPORTED;
    case WHITE;
    case ASIAN;
    case BLACK_OR_AFRICAN_AMERICAN;
    case NATIVE_HAWAIIAN_OR_OTHER_PACIFIC_ISLANDER;
    case AMERICAN_INDIAN_OR_ALASKA_NATIVE;

    private const DATA = [
        [
            'value' => self::NOT_ALLOWED_TO_COLLECT,
            'permissible_value' => 'Not allowed to collect',
            'long_name' => 'Not Allowed To Collect',
            'public_id' => 6662191,
            'concept_code' => 'C141478'
        ],
        [
            'value' => self::NOT_REPORTED,
            'permissible_value' => 'Not reported',
            'long_name' => 'Not Reported',
            'public_id' => 2572578,
            'concept_code' => 'C43234'
        ],
        [
            'value' => self::UNKNOWN,
            'permissible_value' => 'Unknown',
            'long_name' => 'Unknown',
            'public_id' => 2572577,
            'concept_code' => 'C17998'
        ],
        [
            'value' => self::ASIAN,
            'permissible_value' => 'Asian',
            'long_name' => 'Asian',
            'public_id' => 2572233,
            'concept_code' => 'C41260'
        ],
        [
            'value' => self::WHITE,
            'permissible_value' => 'White',
            'long_name' => 'White',
            'public_id' => 2572236,
            'concept_code' => 'C41261'
        ],
        [
            'value' => self::BLACK_OR_AFRICAN_AMERICAN,
            'permissible_value' => 'Black or African American',
            'long_name' => 'Black or African American',
            'public_id' => 2572313,
            'concept_code' => 'C16352'
        ],
        [
            'value' => self::AMERICAN_INDIAN_OR_ALASKA_NATIVE,
            'permissible_value' => 'American Indian or Alaska Native',
            'long_name' => 'American Indian or Alaska Native',
            'public_id' => 2572232,
            'concept_code' => 'C41259'
        ],
        [
            'value' => self::NATIVE_HAWAIIAN_OR_OTHER_PACIFIC_ISLANDER,
            'permissible_value' => 'Native Hawaiian or other Pacific Islander',
            'long_name' => 'Native Hawaiian or Other Pacific Islander',
            'public_id' => 2572235,
            'concept_code' => 'C41219'
        ]
    ];
}
