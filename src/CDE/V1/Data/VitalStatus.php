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

    const CDE_ID = 2847330;

    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=2847330%20and%20ver_nr=1.0';

    const DESCRIPTION = 'The response to a question that describes a participant\'s survival status.';

    const CDE_VERSION = 1;

    private const DATA = [
        [
            'value' => self::NOT_REPORTED,
            'permissible_value' => 'Not reported',
            'long_name' => 'Not Reported',
            'public_id' => 2572231,
            'concept_code' => ['C43234'],
            'description' => 'Not provided or available.',
        ],
        [
            'value' => self::UNKNOWN,
            'permissible_value' => 'Unknown',
            'long_name' => 'Unknown',
            'public_id' => 2575365,
            'concept_code' => ['C17998'],
            'description' => 'Not known, not observed, not recorded, or refused.',
        ],
        [
            'value' => self::ALIVE,
            'permissible_value' => 'Alive',
            'long_name' => 'Alive',
            'public_id' => 2580948,
            'concept_code' => ['C37987'],
            'description' => 'Showing characteristics of life; displaying signs of life.',
        ],
        [
            'value' => self::DEAD,
            'permissible_value' => 'Dead',
            'long_name' => 'Death',
            'public_id' => 2847328,
            'concept_code' => ['C28554'],
            'description' => 'The absence of life or state of being dead.',
        ],
        [
            'value' => self::UNSPECIFIED,
            'permissible_value' => 'Unspecified',
            'long_name' => 'Unspecified',
            'public_id' => 2573360,
            'concept_code' => ['C38046'],
            'description' => 'Not stated explicitly or in detail.',
        ],
    ];
}
