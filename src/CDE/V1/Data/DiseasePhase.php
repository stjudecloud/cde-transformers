<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum DiseasePhase implements ArrayAccess
{
    use ValidatorTrait;

    case UNKNOWN;
    case NOT_REPORTED;
    case POST_MORTEM;
    case INITIAL_DIAGNOSIS;
    case PROGRESSION;
    case REFACTORY;
    case RELAPSE;
    case RELAPSE_PROGRESSION;

    private const DATA = [
        [
            'value' => self::UNKNOWN,
            'permissible_value' => 'Unknown',
            'long_name' => 'Unknown',
            'public_id' => 4266671,
            'concept_code' => 'C17998'
        ],
        [
            'value' => self::NOT_REPORTED,
            'permissible_value' => 'Not Reported',
            'long_name' => 'Not Stated',
            'public_id' => 5612322,
            'concept_code' => 'C43234'
        ],
        [
            'value' => self::POST_MORTEM,
            'permissible_value' => 'Post-Mortem',
            'long_name' => 'Postmortem',
            'public_id' => 5236215,
            'concept_code' => 'C94193'
        ],
        [
            'value' => self::INITIAL_DIAGNOSIS,
            'permissible_value' => 'Initial Diagnosis',
            'long_name' => 'Initial Diagnosis',
            'public_id' => 8002761,
            'concept_code' => 'C156813'
        ],
        [
            'value' => self::PROGRESSION,
            'permissible_value' => 'Progression',
            'long_name' => 'Disease Progression',
            'public_id' => 2816916,
            'concept_code' => 'C17747'
        ],
        [
            'value' => self::REFACTORY,
            'permissible_value' => 'Refactory',
            'long_name' => 'Refractory',
            'public_id' => 2566882,
            'concept_code' => 'C38014'
        ],
        [
            'value' => self::RELAPSE,
            'permissible_value' => 'Relapse',
            'long_name' => 'Recurrent Disease',
            'public_id' => 3828963,
            'concept_code' => 'C38155'
        ],
        [
            'value' => self::RELAPSE_PROGRESSION,
            'permissible_value' => 'Relapse/Progression',
            'long_name' => 'Disease Relapse/Progression',
            'public_id' => 12217248,
            'concept_code' => 'C174991'
        ]
    ];
}
