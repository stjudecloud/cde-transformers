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

    private const DATA = [
        [
            'value' => self::METASTATIC,
            'permissible_value' => 'Metastatic',
            'long_name' => 'Metastatic',
            'public_id' => 5189148,
            'concept_code' => 'C14174'
        ],
        [
            'value' => self::NOT_REPORTED,
            'permissible_value' => 'Not Reported',
            'long_name' => 'Not Stated',
            'public_id' => 5612322,
            'concept_code' => 'C43234'
        ],
        [
            'value' => self::UNKNOWN,
            'permissible_value' => 'Unknown',
            'long_name' => 'Unknown',
            'public_id' => 4266671,
            'concept_code' => 'C17998'
        ],
        [
            'value' => self::PRIMARY,
            'permissible_value' => 'Primary',
            'long_name' => 'Primary tumor',
            'public_id' => 5189150,
            'concept_code' => 'C8509'
        ],
        [
            'value' => self::REGIONAL,
            'permissible_value' => 'Regional',
            'long_name' => 'Regional Disease',
            'public_id' => 2971661,
            'concept_code' => 'C41844'
        ]
    ];
}
