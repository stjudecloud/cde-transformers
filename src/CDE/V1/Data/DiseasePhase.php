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
    case REFRACTORY;
    case RELAPSE;
    case RELAPSE_PROGRESSION;

    const CDE_ID = 12217251;
    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=12217251%20and%20ver_nr=1.0';
    const DESCRIPTION = 'The stage or period of an individual\'s treatment process during which relevant observations were recorded.';
    const CDE_VERSION = 1;

    private const DATA = [
        [
            'value' => self::UNKNOWN,
            'permissible_value' => 'Unknown',
            'long_name' => 'Unknown',
            'public_id' => 4266671,
            'concept_code' => ['C17998'],
            'description' => 'Not known, not observed, not recorded, or refused.'
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
            'value' => self::POST_MORTEM,
            'permissible_value' => 'Post-Mortem',
            'long_name' => 'Postmortem',
            'public_id' => 5236215,
            'concept_code' => ['C94193'],
            'description' => 'After death. Often used to describe an autopsy.'
        ],
        [
            'value' => self::INITIAL_DIAGNOSIS,
            'permissible_value' => 'Initial Diagnosis',
            'long_name' => 'Initial Diagnosis',
            'public_id' => 8002761,
            'concept_code' => ['C156813'],
            'description' => 'The first diagnosis of the individual\'s condition.'
        ],
        [
            'value' => self::PROGRESSION,
            'permissible_value' => 'Progression',
            'long_name' => 'Disease Progression',
            'public_id' => 2816916,
            'concept_code' => ['C17747'],
            'description' => 'The worsening of a disease over time'
        ],
        [
            'value' => self::REFRACTORY,
            'permissible_value' => 'Refractory',
            'long_name' => 'Refractory',
            'public_id' => 2566882,
            'concept_code' => ['C38014'],
            'description' => 'Not responding to treatment.'
        ],
        [
            'value' => self::RELAPSE,
            'permissible_value' => 'Relapse',
            'long_name' => 'Recurrent Disease',
            'public_id' => 3828963,
            'concept_code' => ['C38155'],
            'description' => 'The return of a disease after a period of remission.'
        ],
        [
            'value' => self::RELAPSE_PROGRESSION,
            'permissible_value' => 'Relapse/Progression',
            'long_name' => 'Disease Relapse/Progression',
            'public_id' => 12217248,
            'concept_code' => ['C174991'],
            'description' => 'Either the return of the disease or the progression of the disease.'
        ]
    ];
}
