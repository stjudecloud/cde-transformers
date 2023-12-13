<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum TumorClassification implements ArrayAccess
{
    use ValidatorTrait;

    case METASTATIC;
    case UNKNOWN;
    case NOT_REPORTED;
    case PRIMARY;
    case REGIONAL;

    const CDE_ID = 12922545;
    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=12922545%20and%20ver_nr=1.0';
    const DESCRIPTION = 'The classification of a tumor based primarily on histopathological characteristics.';
    const CDE_VERSION = 1;

    private const DATA = [
        [
            'value' => self::METASTATIC,
            'permissible_value' => 'Metastatic',
            'long_name' => 'Metastatic',
            'public_id' => 5189148,
            'concept_code' => ['C14174'],
            'description' => 'A term referring to the clinical or pathologic observation of a tumor 
extension from its original site of growth to another anatomic site.'
        ],
        [
            'value' => self::NOT_REPORTED,
            'permissible_value' => 'Not Reported',
            'long_name' => 'Not Stated',
            'public_id' => 5612322,
            'concept_code' => ['C43234'],
            'description' => 'Not provided or available.'
        ],
        [
            'value' => self::UNKNOWN,
            'permissible_value' => 'Unknown',
            'long_name' => 'Unknown',
            'public_id' => 4266671,
            'concept_code' => ['C17998'],
            'description' => 'Not known, not observed, not recorded, or refused.'
        ],
        [
            'value' => self::PRIMARY,
            'permissible_value' => 'Primary',
            'long_name' => 'Primary tumor',
            'public_id' => 5189150,
            'concept_code' => ['C8509'],
            'description' => 'A tumor at the original site of origin.'
        ],
        [
            'value' => self::REGIONAL,
            'permissible_value' => 'Regional',
            'long_name' => 'Regional Disease',
            'public_id' => 2971661,
            'concept_code' => ['C41844'],
            'description' => 'A disease or condition that extends beyond the site and spreads into 
adjacent tissues and regional lymph nodes.'
        ]
    ];
}
