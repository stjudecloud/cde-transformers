<?php

namespace CCDI\CDE\V2\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum PreservationMethod implements ArrayAccess
{
    use ValidatorTrait;

    case MINUS_20_DEGREES_CELSIUS;
    case MINUS_80_DEGREES_CELSIUS;
    case CRYOPRESERVED;
    case CYTOSPIN_SLIDE;
    case EDTA;
    case FFPE;
    case FORMALIN_FIXED_BUFFERED;
    case FORMALIN_FIXED_UNBUFFERED;
    case FORMALIN_FIXED_TISSUE;
    case FRESH;
    case FRESH_DISSOCIATED;
    case FRESH_DISSOCIATED_SINGLE_CELL_SORTED;
    case FRESH_DISSOCIATED_SINGLE_CELL_SORTED_PLATES;
    case FROZEN;
    case ISOPENTANE;
    case LIQUID_NITROGEN;
    case NOT_APPLICABLE;
    case NOT_REPORTED;
    case OCT;
    case RNALATER;
    case SNAP_FROZEN;
    case TRIZOL;
    case UNKNOWN;

    const CDE_ID = 8028962;

    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=8028962%20and%20ver_nr=2';

    const DESCRIPTION = 'The term which describes the method used to maintain the specimen in a viable state.';

    const CDE_VERSION = 2;

    private const DATA = [
        [
            'value' => self::MINUS_20_DEGREES_CELSIUS,
            'permissible_value' => '-20 degrees C',
            'long_name' => 'Minus 20 Degrees Celsius',
            'public_id' => 15063207,
            'concept_code' => ['C185334'],
            'description' => 'A temperature of minus 20 celsius.',
        ],
        [
            'value' => self::MINUS_80_DEGREES_CELSIUS,
            'permissible_value' => '-80 degrees C',
            'long_name' => 'Minus 80 Degrees Celsius',
            'public_id' => 14758216,
            'concept_code' => ['C185336'],
            'description' => 'A temperature of minus 80 celsius.',
        ],
        [
            'value' => self::CRYOPRESERVED,
            'permissible_value' => 'Cryopreserved',
            'long_name' => 'Cryopreservation',
            'public_id' => 2568180,
            'concept_code' => ['C16475'],
            'description' => 'Preservation of cells, tissues, organs, or embryos by storage at low temperatures.',
        ],
        [
            'value' => self::CYTOSPIN_SLIDE,
            'permissible_value' => 'Cytospin Slide',
            'long_name' => 'Cytospin Slide',
            'public_id' => 4319866,
            'concept_code' => ['C115350'],
            'description' => 'A microscope slide prepared by depositing cells directly onto a slide by centrifugation. The cytocentrifuge spins at an angle, at low speeds, allowing the cells to adhere to the slide in a monolayer format.',
        ],
        [
            'value' => self::EDTA,
            'permissible_value' => 'EDTA',
            'long_name' => 'Edetic Acid',
            'public_id' => 3232500,
            'concept_code' => ['C61742'],
            'description' => 'The acid form of edetate, a chelating agent with anti-hypercalcemic and anticoagulant properties. Edetic acid binds calcium and heavy metal ions, forming soluble stable complexes which are readily excreted by the kidneys. This results in a decrease in serum calcium levels. This agent is also used as an anticoagulant for blood specimens and is applied as a treatment of lead poisoning.',
        ],
        [
            'value' => self::FFPE,
            'permissible_value' => 'FFPE',
            'long_name' => 'Formalin-Fixed Paraffin-Embedded',
            'public_id' => 6050873,
            'concept_code' => ['C143028'],
            'description' => 'Refers to samples that have been preserved with formalin and then embedded into a paraffin block for sectioning.',
        ],
        [
            'value' => self::FORMALIN_FIXED_BUFFERED,
            'permissible_value' => 'Formalin Fixed - Buffered',
            'long_name' => 'Buffered Formalin Fixation',
            'public_id' => 8031346,
            'concept_code' => ['C185403'],
            'description' => 'The use of buffered formalin for preservation of tissue samples.',
        ],
        [
            'value' => self::FORMALIN_FIXED_UNBUFFERED,
            'permissible_value' => 'Formalin Fixed - Unbuffered',
            'long_name' => 'Unbuffered Formalin Fixation',
            'public_id' => 8031347,
            'concept_code' => ['C185402'],
            'description' => 'The use of unbuffered formalin for preservation of tissue samples.',
        ],
        [
            'value' => self::FORMALIN_FIXED_TISSUE,
            'permissible_value' => 'Formalin Fixed Tissue',
            'long_name' => 'Formalin-Fixed Tissue',
            'public_id' => 14429661,
            'concept_code' => ['C200862'],
            'description' => 'A tissue sample that has been fixed with formalin.',
        ],
        [
            'value' => self::FRESH,
            'permissible_value' => 'Fresh',
            'long_name' => 'Fresh Specimen',
            'public_id' => 3210685,
            'concept_code' => ['C84517'],
            'description' => 'Tissue which has not been exposed to a fixative solution.',
        ],
        [
            'value' => self::FRESH_DISSOCIATED,
            'permissible_value' => 'Fresh Dissociated',
            'long_name' => 'Fresh Dissociated Tissue Preparation',
            'public_id' => 8031345,
            'concept_code' => ['C185404'],
            'description' => 'A tissue preparation process that takes fresh tissue and dissociates it into single cell suspensions.',
        ],
        [
            'value' => self::FRESH_DISSOCIATED_SINGLE_CELL_SORTED,
            'permissible_value' => 'Fresh Dissociated and Single Cell Sorted',
            'long_name' => 'Fresh Dissociated Tissue Preparation, Single Cell Sorted',
            'public_id' => 8031344,
            'concept_code' => ['C185405'],
            'description' => 'A tissue preparation process that separates fresh dissociated tissue cells into cell populations by single cell sorting.',
        ],
        [
            'value' => self::FRESH_DISSOCIATED_SINGLE_CELL_SORTED_PLATES,
            'permissible_value' => 'Fresh Dissociated and Single Cell Sorted into Plates',
            'long_name' => 'Fresh Dissociated Tissue Preparation, Single Cell Sorted into Plates',
            'public_id' => 8031343,
            'concept_code' => ['C185406'],
            'description' => 'A tissue preparation process that takes dissociated, sorted cells and distributes them into cell propagation plates.',
        ],
        [
            'value' => self::FROZEN,
            'permissible_value' => 'Frozen',
            'long_name' => 'Frozen Specimen',
            'public_id' => 3167629,
            'concept_code' => ['C70717'],
            'description' => 'A specimen that has been subjected to and immobilized by severe cold.',
        ],
        [
            'value' => self::ISOPENTANE,
            'permissible_value' => 'Isopentane',
            'long_name' => 'Isopentane',
            'public_id' => 15063211,
            'concept_code' => ['C63387'],
            'description' => 'An organic, branched-chain alkane with five carbon atoms.',
        ],
        [
            'value' => self::LIQUID_NITROGEN,
            'permissible_value' => 'Liquid Nitrogen',
            'long_name' => 'Liquid Nitrogen Storage',
            'public_id' => 8015821,
            'concept_code' => ['C185338'],
            'description' => 'An indication that a material has been stored in liquid nitrogen.',
        ],
        [
            'value' => self::NOT_APPLICABLE,
            'permissible_value' => 'Not Applicable',
            'long_name' => 'Not applicable',
            'public_id' => 2581003,
            'concept_code' => ['C48660'],
            'description' => 'Determination of a value is not relevant in the current context.',
        ],
        [
            'value' => self::OCT,
            'permissible_value' => 'OCT',
            'long_name' => 'Optimal Cutting Temperature Compound',
            'public_id' => 5428812,
            'concept_code' => ['C63523'],
            'description' => 'A solution of water soluble glycols and resins that provide a specimen support matrix for cryostat sectioning at temperatures of -10 degrees C and below.',
        ],
        [
            'value' => self::RNALATER,
            'permissible_value' => 'RNALater',
            'long_name' => 'RNALater',
            'public_id' => 5680788,
            'concept_code' => ['C63348'],
            'description' => 'Trade name for an aqueous, non-toxic tissue storage reagent that rapidly permeates tissues to stabilize and protect cellular RNA.',
        ],
        [
            'value' => self::SNAP_FROZEN,
            'permissible_value' => 'Snap Frozen',
            'long_name' => 'Quick Freeze',
            'public_id' => 4399755,
            'concept_code' => ['C63521'],
            'description' => 'To freeze rapidly so as to preserve structure and prevent ice crystal formation.',
        ],
        [
            'value' => self::TRIZOL,
            'permissible_value' => 'TRIzol',
            'long_name' => 'Phenol and Guanidine Isothiocyanate Solution',
            'public_id' => 15736809,
            'concept_code' => ['C213680'],
            'description' => 'A ready-to-use reagent for the isolation of high-quality total RNA or the simultaneous isolation of RNA, DNA, and protein from biological samples. It is a monophasic solution of phenol and guanidine isothiocyanate.',
        ],
        [
            'value' => self::UNKNOWN,
            'permissible_value' => 'Unknown',
            'long_name' => 'Unknown',
            'public_id' => 5682953,
            'concept_code' => ['C17998'],
            'description' => 'Not known, not observed, not recorded, or refused.',
        ],
    ];
}
