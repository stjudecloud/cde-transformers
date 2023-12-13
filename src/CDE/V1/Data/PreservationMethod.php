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

    const CDE_ID = 5432521;
    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=5432521%20and%20ver_nr=1.0';
    const DESCRIPTION = 'Text term that represents the method used to preserve the sample.';
    const CDE_VERSION = 1;

    private const DATA = [
        [
            'value' => self::CRYOPRESERVED,
            'permissible_value' => 'Cryopreserved',
            'long_name' => 'Cryopreservation',
            'public_id' => 2568180,
            'concept_code' => ['C16475'],
            'description' => 'Preservation of cells, tissues, organs, or embryos by storage at low 
temperatures.'
        ],
        [
            'value' => self::FFPE,
            'permissible_value' => 'FFPE',
            'long_name' => 'Formalin-Fixed Paraffin-Embedded',
            'public_id' => 5118538,
            'concept_code' => ['C29744','C84514','C19597'],
            'description' => 'A colorless poisonous gas synthesized by the oxidation of methanol and used 
as an antiseptic, disinfectant, histologic fixative, and general-purpose 
chemical reagent for laboratory applications. Formaldehyde is readily 
soluble in water and is commonly distributed as a 37% solution in water; 
formalin, a 10% solution of formaldehyde in water, is used as a 
disinfectant and to preserve biological specimens. Environmentally, 
formaldehyde may be found in the atmosphere, smoke from fires, automobile 
exhaust and cigarette smoke. Small amounts are produced during normal 
metabolic processes in most organisms, including humans.: Tissue which is 
preserved in a fixative solution, usually formalin.: Tissue that is 
preserved and embedded in paraffin.'
        ],
        [
            'value' => self::FRESH,
            'permissible_value' => 'Fresh',
            'long_name' => 'Fresh Specimen',
            'public_id' => 3210685,
            'concept_code' => ['C84517'],
            'description' => 'Tissue which has not been exposed to a fixative solution.'
        ],
        [
            'value' => self::FROZEN,
            'permissible_value' => 'Frozen',
            'long_name' => 'Frozen Specimen',
            'public_id' => 3167629,
            'concept_code' => ['C70717'],
            'description' => 'A specimen that has been subjected to and immobilized by severe cold.'
        ],
        [
            'value' => self::OCT,
            'permissible_value' => 'OCT',
            'long_name' => 'Optimal Cutting Temperature Compound',
            'public_id' => 5428812,
            'concept_code' => ['C63523'],
            'description' => 'A solution of water soluble glycols and resins that provide a specimen 
support matrix for cryostat sectioning at temperatures of -10 degrees C and 
below.'
        ],
        [
            'value' => self::SNAP_FROZEN,
            'permissible_value' => 'Snap Frozen',
            'long_name' => 'Quick Freeze',
            'public_id' => 4399755,
            'concept_code' => ['C63521'],
            'description' => 'To freeze rapidly so as to preserve structure and prevent ice crystal 
formation.'
        ]
    ];
}
