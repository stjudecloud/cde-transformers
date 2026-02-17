<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V2\Data\PreservationMethod;

/**
 * @method static string|null|PreservationMethod transform($permissibleValue, $key = null)
 */
class PreservationMethodTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => PreservationMethod::MINUS_20_DEGREES_CELSIUS,
            'regex' => '/^(\-20 degrees c)$/i',
        ],
        [
            'value' => PreservationMethod::MINUS_80_DEGREES_CELSIUS,
            'regex' => '/^(\-80 degrees c)$/i',
        ],
        [
            'value' => PreservationMethod::CRYOPRESERVED,
            'regex' => '/^(cryopreserved)$/i',
        ],
        [
            'value' => PreservationMethod::CYTOSPIN_SLIDE,
            'regex' => '/^(cytospin slide)$/i',
        ],
        [
            'value' => PreservationMethod::EDTA,
            'regex' => '/^(edta)$/i',
        ],
        [
            'value' => PreservationMethod::FFPE,
            'regex' => '/^(ffpe)$/i',
        ],
        [
            'value' => PreservationMethod::FORMALIN_FIXED_BUFFERED,
            'regex' => '/^(formalin fixed - buffered)$/i',
        ],

        [
            'value' => PreservationMethod::FORMALIN_FIXED_UNBUFFERED,
            'regex' => '/^(formalin fixed - unbuffered)$/i',
        ],
        [
            'value' => PreservationMethod::FORMALIN_FIXED_TISSUE,
            'regex' => '/^(formalin fixed tissue)$/i',
        ],
        [
            'value' => PreservationMethod::FRESH,
            'regex' => '/^(fresh)$/i',
        ],
        [
            'value' => PreservationMethod::FRESH_DISSOCIATED,
            'regex' => '/^(fresh dissociated)$/i',
        ],
        [
            'value' => PreservationMethod::FRESH_DISSOCIATED_SINGLE_CELL_SORTED,
            'regex' => '/^(fresh dissociated and single cell sorted)$/i',
        ],
        [
            'value' => PreservationMethod::FRESH_DISSOCIATED_SINGLE_CELL_SORTED_PLATES,
            'regex' => '/^(fresh dissociated and single cell sorted into plates)$/i',
        ],
        [
            'value' => PreservationMethod::FROZEN,
            'regex' => '/^(frozen)$/i',
        ],
        [
            'value' => PreservationMethod::ISOPENTANE,
            'regex' => '/^(isopentane)$/i',
        ],
        [
            'value' => PreservationMethod::LIQUID_NITROGEN,
            'regex' => '/^(liquid nitrogen)$/i',
        ],
        [
            'value' => PreservationMethod::NOT_APPLICABLE,
            'regex' => '/^(not applicable)$/i',
        ],
        [
            'value' => PreservationMethod::NOT_REPORTED,
            'regex' => '/^(not reported)$/i',
        ],
        [
            'value' => PreservationMethod::OCT,
            'regex' => '/^(oct)$/i',
        ],
        [
            'value' => PreservationMethod::RNALATER,
            'regex' => '/^(rnalater)$/i',
        ],
        [
            'value' => PreservationMethod::SNAP_FROZEN,
            'regex' => '/^(snap frozen)$/i',
        ],
        [
            'value' => PreservationMethod::TRIZOL,
            'regex' => '/^(trizol)$/i',
        ],
        [
            'value' => PreservationMethod::UNKNOWN,
            'regex' => '/^(unknown)$/i',
        ],
    ];
}
