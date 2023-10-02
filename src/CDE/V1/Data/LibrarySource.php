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
    case GENOMIC_SINGLE_CELL;
    case OTHER;
    case METAGENOMIC;
    case METATRANSCRIPTOMIC;
    case SYNTHETIC;
    case TRANSCRIPTOMIC;
    case TRANSCRIPTOMIC_SINGLE_CELL;
    case VIRAL_RNA;

    const CDE_ID = 6285979;
    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=6285979%20and%20ver_nr=1.0';
    const DESCRIPTION = 'The source of a sample collection of double stranded DNA fragments analyzed by high-throughput sequencing.';

    private const DATA = [
        [
            'value' => self::GENOMIC_DNA,
            'permissible_value' => 'Genomic DNA',
            'long_name' => 'Genomic DNA',
            'public_id' => 6273408,
            'concept_code' => 'C95940',
            'description' => 'The DNA that is part of the normal chromosomal complement of an organism.'
        ],
        [
            'value' => self::BULK_CELLS,
            'permissible_value' => 'Bulk cells',
            'long_name' => 'Bulk Cell Specimen',
            'public_id' => 7592130,
            'concept_code' => 'C178223',
            'description' => 'A biospecimen consisting of multiple cells as a pool.'
        ],
        [
            'value' => self::BULK_NUCLEI,
            'permissible_value' => 'Bulk nuclei',
            'long_name' => 'Bulk Nucleus Specimen',
            'public_id' => 7592129,
            'concept_code' => 'C178224',
            'description' => 'A biospecimen consisting of multiple nuclei as a pool.'
        ],
        [
            'value' => self::BULK_TISSUE,
            'permissible_value' => 'Bulk tissue',
            'long_name' => 'Bulk Tissue Specimen',
            'public_id' => 7592128,
            'concept_code' => 'C178225',
            'description' => 'A biospecimen either derived from a whole tissue specimen or tissue 
section, which may consist of heterogeneous cells or tissues.'
        ],
        [
            'value' => self::RNA,
            'permissible_value' => 'RNA',
            'long_name' => 'Ribonucleic Acid',
            'public_id' => 5485589,
            'concept_code' => 'C812',
            'description' => 'Single-stranded long chain of nucleotides containing ribose. It is the end 
product of DNA transcription by the enzyme RNA polymerase. It is essential 
in protein synthesis.'
        ],
        [
            'value' => self::SINGLE_CELLS,
            'permissible_value' => 'Single-cells',
            'long_name' => 'Single Cell Specimen',
            'public_id' => 7592127,
            'concept_code' => 'C178226',
            'description' => 'A biospecimen that contains the contents of a single cell.'
        ],
        [
            'value' => self::SINGLE_NUCLEI,
            'permissible_value' => 'Single-nuclei',
            'long_name' => 'Single Nucleus Specimen',
            'public_id' => 7592126,
            'concept_code' => 'C178227',
            'description' => 'A biospecimen that contains the contents of a single nucleus.'
        ],
        [
            'value' => self::GENOMIC_SINGLE_CELL,
            'permissible_value' => 'Genomic Single Cell',
            'long_name' => 'Genomic Single Cell',
            'public_id' => 6273400,
            'concept_code' => '',
            'description' => 'Genomic DNA from individual cells'
        ],
        [
            'value' => self::OTHER,
            'permissible_value' => 'Other',
            'long_name' => 'Sequencing Library Other Source',
            'public_id' => 6287886,
            'concept_code' => 'C148073:C17649:C25683',
            'description' => 'A collection of double stranded DNA fragments flanked by oligonucleotide 
sequence adapters to enable their analysis by high-throughput sequencing.: 
Different than the one(s) previously specified or mentioned.: Where 
something is available or from where it originates.'
        ],
        [
            'value' => self::METAGENOMIC,
            'permissible_value' => 'Metagenomic',
            'long_name' => 'Metagenomic',
            'public_id' => 6273405,
            'concept_code' => '',
            'description' => 'Mixed material from metagenome'
        ],
        [
            'value' => self::METATRANSCRIPTOMIC,
            'permissible_value' => 'Metatranscriptomic',
            'long_name' => 'Metatranscriptomic',
            'public_id' => 6273404,
            'concept_code' => '',
            'description' => 'Transcription products from community targets'
        ],
        [
            'value' => self::SYNTHETIC,
            'permissible_value' => 'Synthetic',
            'long_name' => 'Synthetic',
            'public_id' => 6273403,
            'concept_code' => '',
            'description' => 'Synthetic DNA'
        ],
        [
            'value' => self::TRANSCRIPTOMIC,
            'permissible_value' => 'Transcriptomic',
            'long_name' => 'Transcriptomic',
            'public_id' => 6273406,
            'concept_code' => '',
            'description' => 'Transcription products or non genomic DNA (EST, cDNA, RT-PCR, screened 
libraries)'
        ],
        [
            'value' => self::TRANSCRIPTOMIC_SINGLE_CELL,
            'permissible_value' => 'Transcriptomic Single Cell',
            'long_name' => 'Transcriptomic Single Cell',
            'public_id' => 6273399,
            'concept_code' => '',
            'description' => 'Transcription products from individual cells'
        ],
        [
            'value' => self::VIRAL_RNA,
            'permissible_value' => 'Viral RNA',
            'long_name' => 'Viral Small RNA',
            'public_id' => 6273402,
            'concept_code' => 'C101143',
            'description' => 'Small non-coding RNA that is encoded by viral DNA and transcribed by 
virally-infected cells.'
        ]
    ];
}
