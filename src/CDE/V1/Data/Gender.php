<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum Gender implements ArrayAccess
{
    /**
     * Use a Trait, PHP enums cannot extend classes, a Trait is the next best approach and allows for a single
     * validate method to be shared amongst all Data enums
     */
    use ValidatorTrait;

    /**
     * PHP enums can only be strings or integers, which limits the data that can be stored against each enum.
     * Therefore, the const DATA is an array of values mapped to the
     */
    case UNKNOWN;
    case NOT_REPORTED;
    case UNSPECIFIED;
    case INTERSEX;
    case FEMALE;
    case MALE;

    const CDE_ID = 6343385;
    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=6343385%20and%20ver_nr=1.0';
    const DESCRIPTION = 'Sex of the subject as determined by the investigator.';

    /**
     * An array containing all data for each enum case, the value should always be mapped to an enum case
     */
    private const DATA = [
        [
            'value' => self::UNKNOWN,
            'permissible_value' => 'Unknown',
            'long_name' => 'Unknown',
            'public_id' => 2575365,
            'concept_code' => ['C17998'],
            'description' => 'Not known, not observed, not recorded, or refused.'
        ],
        [
            'value' => self::NOT_REPORTED,
            'permissible_value' => 'Not Reported',
            'long_name' => 'Not Reported',
            'public_id' => 2572231,
            'concept_code' => ['C43234'],
            'description' => 'Not provided or available.'
        ],
        [
            'value' => self::UNSPECIFIED,
            'permissible_value' => 'Unspecified',
            'long_name' => 'Unspecified',
            'public_id' => 2573360,
            'concept_code' => ['C38046'],
            'description' => 'Not stated explicitly or in detail.'
        ],
        [
            'value' => self::INTERSEX,
            'permissible_value' => 'Intersex',
            'long_name' => 'Intersex',
            'public_id' => 2575558,
            'concept_code' => ['C45908'],
            'description' => 'A person (one of unisexual specimens) who is born with genitalia and/or secondary sexual characteristics of indeterminate sex, or which combine features of both sexes.'
        ],
        [
            'value' => self::FEMALE,
            'permissible_value' => 'Female',
            'long_name' => 'Female',
            'public_id' => 2575551,
            'concept_code' => ['C46110'],
            'description' => 'An individual who reports belonging to the cultural gender role distinction of male.'
        ],
        [
            'value' => self::MALE,
            'permissible_value' => 'Male',
            'long_name' => 'Male',
            'public_id' => 2575550,
            'concept_code' => ['C46109'],
            'description' => 'An individual who reports belonging to the cultural gender role distinction of female.'
        ],
    ];
}
