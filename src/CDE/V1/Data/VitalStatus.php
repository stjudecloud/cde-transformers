<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum VitalStatus implements ArrayAccess
{
    use ValidatorTrait;

    case NOT_REPORTED;
    case UNKNOWN;
    case ALIVE;
    case DEAD;
    case UNSPECIFIED;

    private const DATA = [
        [
            'value' => self::NOT_REPORTED,
            'permissible_value' => 'Not reported',
            'long_name' => 'Not Reported',
            'public_id' => 2572231,
            'concept_code' => 'C43234'
        ],
        [
            'value' => self::UNKNOWN,
            'permissible_value' => 'Unknown',
            'long_name' => 'Unknown',
            'public_id' => 2575365,
            'concept_code' => 'C17998'
        ],
        [
            'value' => self::ALIVE,
            'permissible_value' => 'Alive',
            'long_name' => 'Alive',
            'public_id' => 2580948,
            'concept_code' => 'C37987'
        ],
        [
            'value' => self::DEAD,
            'permissible_value' => 'Dead',
            'long_name' => 'Death',
            'public_id' => 2847328,
            'concept_code' => 'C28554'
        ],
        [
            'value' => self::UNSPECIFIED,
            'permissible_value' => 'Unspecified',
            'long_name' => 'Unspecified',
            'public_id' => 2573360,
            'concept_code' => 'C38046'
        ]
    ];
}
