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

    const CDE_ID = 2192217 ;
    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=2192217 %20and%20ver_nr=2.0';
    const DESCRIPTION = 'The text for reporting information about ethnicity based on the Office of Management and Budget (OMB) categories.';

    private const DATA = [
        [
            'value' => self::NOT_ALLOWED_TO_COLLECT,
            'permissible_value' => 'Not allowed to collect',
            'long_name' => 'Not Allowed To Collect',
            'public_id' => 6662191,
            'concept_code' => ['C141478'],
            'description' => 'An indicator that specifies that a collection event was not permitted.'
        ],
        [
            'value' => self::NOT_REPORTED,
            'permissible_value' => 'Not reported',
            'long_name' => 'Not Reported',
            'public_id' => 2572578,
            'concept_code' => ['C43234'],
            'description' => 'Not provided or available.'
        ],
        [
            'value' => self::UNKNOWN,
            'permissible_value' => 'Unknown',
            'long_name' => 'Unknown',
            'public_id' => 2572577,
            'concept_code' => ['C17998'],
            'description' => 'Not known, not observed, not recorded, or refused.'
        ],
        [
            'value' => self::NOT_HISPANIC_OR_LATINO,
            'permissible_value' => 'Not Hispanic or Latino',
            'long_name' => 'Not Hispanic or Latino',
            'public_id' => 2567110,
            'concept_code' => ['C41222'],
            'description' => 'A person not of Cuban, Mexican, Puerto Rican, South or Central American, or 
other Spanish culture or origin, regardless of race.'
        ],
        [
            'value' => self::HISPANIC_OR_LATINO,
            'permissible_value' => 'Hispanic or Latino',
            'long_name' => 'Hispanic or Latino',
            'public_id' => 2581176,
            'concept_code' => ['C17459'],
            'description' => 'A person of Cuban, Mexican, Puerto Rican, South or Central American, or 
other Spanish culture or origin, regardless of race. The term, ""Spanish 
origin,"" can be used in addition to ""Hispanic or Latino."" (OMB)'
        ]
    ];
}
