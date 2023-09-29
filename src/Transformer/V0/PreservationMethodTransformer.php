<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\PreservationMethod;

/**
 * @method static PreservationMethod|string transform($permissibleValue, $key = null)
 */
class PreservationMethodTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
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
