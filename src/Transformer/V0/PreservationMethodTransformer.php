<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\PreservationMethod;

/**
 * @method static PreservationMethod transform($permissibleValue)
 */
enum PreservationMethodTransformer
{
    use TransformerTrait;

    case CRYOPRESERVED;
    case FFPE;
    case FRESH;
    case FROZEN;
    case OCT;
    case SNAP_FROZEN;

    public const MAPPING = [
        [
            'value' => PreservationMethod::CRYOPRESERVED,
            'regex' => '/^(cryopreserved)$/i'
        ],
        [
            'value' => PreservationMethod::FFPE,
            'regex' => '/^(ffpe)$/i'
        ],
        [
            'value' => PreservationMethod::FRESH,
            'regex' => '/^(fresh)$/i'
        ],
        [
            'value' => PreservationMethod::FROZEN,
            'regex' => '/^(frozen)$/i'
        ],
        [
            'value' => PreservationMethod::OCT,
            'regex' => '/^(oct)$/i'
        ],
        [
            'value' => PreservationMethod::SNAP_FROZEN,
            'regex' => '/^(snap frozen)$/i'
        ]
    ];
}
