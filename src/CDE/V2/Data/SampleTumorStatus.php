<?php

namespace CCDI\CDE\V2\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum SampleTumorStatus implements ArrayAccess
{
    use ValidatorTrait;

    case ABNORMAL;
    case NORMAL;
    case PERITUMORAL;
    case TUMOR;

    private const DATA = [
        [
            'value' => self::ABNORMAL,
            'permissible_value' => 'Abnormal',
            'long_name' => 'Abnormal',
            'public_id' => 4265117,
            'concept_code' => 'C25401'
        ],
        [
            'value' => self::NORMAL,
            'permissible_value' => 'Normal',
            'long_name' => 'Normal',
            'public_id' => 4494160,
            'concept_code' => 'C14165'
        ],
        [
            'value' => self::PERITUMORAL,
            'permissible_value' => 'Peritumoral',
            'long_name' => 'Peritumoral',
            'public_id' => 4633527,
            'concept_code' => 'C119010'
        ],
        [
            'value' => self::TUMOR,
            'permissible_value' => 'Tumor',
            'long_name' => 'Malignant Neoplasm',
            'public_id' => 2749852,
            'concept_code' => 'C9305'
        ]
    ];
}
