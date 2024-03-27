<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum Sex implements ArrayAccess
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
    case INTERSEX;
    case FEMALE;
    case MALE;

    const CDE_ID = 6343385;

    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=6343385%20and%20ver_nr=1.0';

    const DESCRIPTION = 'Sex of the subject as determined by the investigator.';

    const CDE_VERSION = 1;

    /**
     * An array containing all data for each enum case, the value should always be mapped to an enum case
     */
    private const DATA = [
        [
            'value' => self::UNKNOWN,
            'permissible_value' => 'U',
            'long_name' => 'Unknown',
            'public_id' => 5682944,
            'concept_code' => ['C17998'],
            'description' => 'Not known, not observed, not recorded, or refused.',
        ],
        [
            'value' => self::INTERSEX,
            'permissible_value' => 'UNDIFFERENTIATED',
            'long_name' => 'Intersex',
            'public_id' => 2575558,
            'concept_code' => ['C45908'],
            'description' => 'A person (one of unisexual specimens) who is born with genitalia and/or secondary sexual characteristics of indeterminate sex, or which combine features of both sexes.',
        ],
        [
            'value' => self::FEMALE,
            'permissible_value' => 'F',
            'long_name' => 'Female',
            'public_id' => 2567172,
            'concept_code' => ['C16576'],
            'description' => 'A person who belongs to the sex that normally produces ova. The term is used to indicate biological sex distinctions, or cultural gender role distinctions, or both.',
        ],
        [
            'value' => self::MALE,
            'permissible_value' => 'M',
            'long_name' => 'Male',
            'public_id' => 2567171,
            'concept_code' => ['C20197'],
            'description' => 'A person who belongs to the sex that normally produces sperm. The term is used to indicate biological sex distinctions, cultural gender role distinctions, or both.',
        ],
    ];
}
