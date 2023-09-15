<?php

namespace CCDI\CDE\V2\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum Ethnicity implements ArrayAccess
{
    use ValidatorTrait;

    case NOT_ALLOWED_TO_COLLECT;
    case HISPANIC_OR_LATINO;
    case NOT_HISPANIC_OR_LATINO;
    case UNKNOWN;
    case NOT_REPORTED;

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
            'value' => self::NOT_HISPANIC_OR_LATINO,
            'permissible_value' => 'Not Hispanic or Latino',
            'long_name' => 'Not Hispanic or Latino',
            'public_id' => 2567110,
            'concept_code' => 'C41222'
        ],
        [
            'value' => self::HISPANIC_OR_LATINO,
            'permissible_value' => 'Hispanic or Latino',
            'long_name' => 'Hispanic or Latino',
            'public_id' => 2581176,
            'concept_code' => 'C17459'
        ]
    ];
}
