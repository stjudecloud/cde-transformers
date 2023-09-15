<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum LibrarySource implements ArrayAccess
{
    use ValidatorTrait;

    case GENOMIC_DNA;
    case BULK_CELLS;
    case BULK_NUCLEI;
    case BULK_TISSUE;
    case RNA;
    case SINGLE_CELLS;
    case SINGLE_NUCLEI;
    case GEN0MIC_SINGLE_CELL;
    case OTHER;
    case METAGENOMIC;
    case METATRANSCRIPTOMIC;
    case SYNTHETIC;
    case TRANSCRIPTOMIC;
    case TRANSCRIPTOMIC_SINGLE_CELL;
    case VIRAL_RNA;

    private const DATA = [
        [
            'value' => self::GENOMIC_DNA,
            'permissible_value' => 'Genomic DNA',
            'long_name' => 'Genomic DNA',
            'public_id' => 6273408,
            'concept_code' => 'C95940'
        ],
        [
            'value' => self::BULK_CELLS,
            'permissible_value' => 'Bulk cells',
            'long_name' => 'Bulk Cell Specimen',
            'public_id' => 7592130,
            'concept_code' => 'C178223'
        ],
        [
            'value' => self::BULK_NUCLEI,
            'permissible_value' => 'Bulk nuclei',
            'long_name' => 'Bulk Nucleus Specimen',
            'public_id' => 7592129,
            'concept_code' => 'C178224'
        ],
        [
            'value' => self::BULK_TISSUE,
            'permissible_value' => 'Bulk tissue',
            'long_name' => 'Bulk Tissue Specimen',
            'public_id' => 7592128,
            'concept_code' => 'C178225'
        ],
        [
            'value' => self::RNA,
            'permissible_value' => 'RNA',
            'long_name' => 'Ribonucleic Acid',
            'public_id' => 5485589,
            'concept_code' => 'C812'
        ],
        [
            'value' => self::SINGLE_CELLS,
            'permissible_value' => 'Single-cells',
            'long_name' => 'Single Cell Specimen',
            'public_id' => 7592127,
            'concept_code' => 'C178226'
        ],
        [
            'value' => self::SINGLE_NUCLEI,
            'permissible_value' => 'Single-nuclei',
            'long_name' => 'Single Nucleus Specimen',
            'public_id' => 7592126,
            'concept_code' => 'C178227'
        ],
        [
            'value' => self::GEN0MIC_SINGLE_CELL,
            'permissible_value' => 'Genomic Single Cell',
            'long_name' => 'Genomic Single Cell',
            'public_id' => 6273400,
            'concept_code' => ''
        ],
        [
            'value' => self::OTHER,
            'permissible_value' => 'Other',
            'long_name' => 'Sequencing Library Other Source',
            'public_id' => 6287886,
            'concept_code' => 'C148073:C17649:C25683'
        ],
        [
            'value' => self::METAGENOMIC,
            'permissible_value' => 'Metagenomic',
            'long_name' => 'Metagenomic',
            'public_id' => 6273405,
            'concept_code' => ''
        ],
        [
            'value' => self::METATRANSCRIPTOMIC,
            'permissible_value' => 'Metatranscriptomic',
            'long_name' => 'Metatranscriptomic',
            'public_id' => 6273404,
            'concept_code' => ''
        ],
        [
            'value' => self::SYNTHETIC,
            'permissible_value' => 'Synthetic',
            'long_name' => 'Synthetic',
            'public_id' => 6273403,
            'concept_code' => ''
        ],
        [
            'value' => self::TRANSCRIPTOMIC,
            'permissible_value' => 'Transcriptomic',
            'long_name' => 'Transcriptomic',
            'public_id' => 6273406,
            'concept_code' => ''
        ],
        [
            'value' => self::TRANSCRIPTOMIC_SINGLE_CELL,
            'permissible_value' => 'Transcriptomic Single Cell',
            'long_name' => 'Transcriptomic Single Cell',
            'public_id' => 6273399,
            'concept_code' => ''
        ],
        [
            'value' => self::VIRAL_RNA,
            'permissible_value' => 'Viral RNA',
            'long_name' => 'Viral Small RNA',
            'public_id' => 6273402,
            'concept_code' => 'C101143'
        ]
    ];
}
