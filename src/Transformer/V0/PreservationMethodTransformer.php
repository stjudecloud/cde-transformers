<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\PreservationMethod;

/**
 * @method static string|null|PreservationMethod transform($permissibleValue, $key = null)
 */
class PreservationMethodTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => PreservationMethod::MINUS_80_DEGREES_CELSIUS,
            'regex' => '/^(\-80 deg c|-80|-80°)$/i',
        ],
        [
            'value' => PreservationMethod::FFPE,
            'regex' => '/^(ffpe)$/i',
        ],
        [
            'value' => PreservationMethod::FROZEN,
            'regex' => '/^(frozen)$/i',
        ],
        [
            'value' => PreservationMethod::LN2,
            'regex' => '/^(ln2)$/i',
        ],
    ];
}
