<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum PreservationMethod implements ArrayAccess
{
    use ValidatorTrait;

    case MINUS_80_DEGREES_CELSIUS;
    case FFPE;
    case FROZEN;
    case LN2;
    const CDE_ID = 7351590;
    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=7351590%20and%20ver_nr=1.0';
    const DESCRIPTION = 'The method used to preserve the specimen.';
    const CDE_VERSION = 1;

    private const DATA = [
        [
            'value' => self::MINUS_80_DEGREES_CELSIUS,
            'permissible_value' => '-80 Deg C',
            'long_name' => '-80 Degrees Celsius',
            'public_id' => 2571459,
            'concept_code' => ['C81022', 'C105788', 'C42559'],
            'description' => "A quantity having a value less than zero.::1: A natural number greater than 
            seventy-nine and less than eighty-one and the quantity that it denotes.::2: 
            A unit of temperature of the temperature scale designed so that the 
            freezing point of water is 0 degrees and the boiling point is 100 degrees 
            at standard atmospheric pressure. The current official definition of the 
            Celsius sets 0.01 C to be at the triple point of water and a degree to be 
            1/273.16 of the difference in temperature between the triple point of water 
            and absolute zero. One degree Celsius represents the same temperature 
            difference as one Kelvin."
        ],
        [
            'value' => self::FFPE,
            'permissible_value' => 'FFPE',
            'long_name' => 'Formalin-Fixed Paraffin-Embedded',
            'public_id' => 5118538,
            'concept_code' => ['C29744', 'C84514', 'C19597'],
            'description' => "A colorless poisonous gas synthesized by the oxidation of methanol and used 
            as an antiseptic, disinfectant, histologic fixative, and general-purpose 
            chemical reagent for laboratory applications. Formaldehyde is readily 
            soluble in water and is commonly distributed as a 37% solution in water; 
            formalin, a 10% solution of formaldehyde in water, is used as a 
            disinfectant and to preserve biological specimens. Environmentally, 
            formaldehyde may be found in the atmosphere, smoke from fires, automobile 
            exhaust and cigarette smoke. Small amounts are produced during normal 
            metabolic processes in most organisms, including humans.: Tissue which is 
            preserved in a fixative solution, usually formalin.: Tissue that is 
            preserved and embedded in paraffin."
        ],
        [
            'value' => self::FROZEN,
            'permissible_value' => 'Frozen',
            'long_name' => 'Frozen Specimen',
            'public_id' => 3167629,
            'concept_code' => ['C70717'],
            'description' => "A specimen that has been subjected to and immobilized by severe cold."
        ],
        [
            'value' => self::LN2,
            'permissible_value' => 'LN2',
            'long_name' => 'Liquid nitrogen',
            'public_id' => 2567308,
            'concept_code' => ['C45298', 'C61863'],
            'description' => "A substance in the fluid state of matter having no fixed shape but a fixed 
            volume.: Nitrogen"
        ]
    ];
}
