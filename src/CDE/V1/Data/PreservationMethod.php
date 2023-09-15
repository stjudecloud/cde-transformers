<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum PreservationMethod implements ArrayAccess
{
    use ValidatorTrait;

    case CRYOPRESERVED;
    case FFPE;
    case FRESH;
    case FROZEN;
    case OCT;
    case SNAP_FROZEN;

    private const DATA = [
        [
            'value' => self::CRYOPRESERVED,
            'permissible_value' => 'Cryopreserved',
            'long_name' => 'Cryopreservation',
            'public_id' => 2568180,
            'concept_code' => 'C16475'
        ],
        [
            'value' => self::FFPE,
            'permissible_value' => 'FFPE',
            'long_name' => 'Formalin-Fixed Paraffin-Embedded',
            'public_id' => 5118538,
            'concept_code' => 'C29744:C84514:C19597'
        ],
        [
            'value' => self::FRESH,
            'permissible_value' => 'Fresh',
            'long_name' => 'Fresh Specimen',
            'public_id' => 3210685,
            'concept_code' => 'C84517'
        ],
        [
            'value' => self::FROZEN,
            'permissible_value' => 'Frozen',
            'long_name' => 'Frozen Specimen',
            'public_id' => 3167629,
            'concept_code' => 'C70717'
        ],
        [
            'value' => self::OCT,
            'permissible_value' => 'OCT',
            'long_name' => 'Optimal Cutting Temperature Compound',
            'public_id' => 5428812,
            'concept_code' => 'C63523'
        ],
        [
            'value' => self::SNAP_FROZEN,
            'permissible_value' => 'Snap Frozen',
            'long_name' => 'Quick Freeze',
            'public_id' => 4399755,
            'concept_code' => 'C63521'
        ]
    ];
}
