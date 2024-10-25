<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum SpecimenMolecular implements ArrayAccess
{
    use ValidatorTrait;

    case CFDNA;

    case CTDNA;

    case DNA;

    case MIRNA;

    case MESSENGER_RNA;

    case NOT_REPORTED;

    case NUCLEIC_RNA;

    case PROTEIN;

    case RNA;

    case TOTAL_RNA;

    case UNKNOWN;

    /**
     * @var int
     */
    const CDE_ID = 15063661;

    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=15063661%20and%20ver_nr=1';

    const DESCRIPTION = 'The sample or material being subjected to analysis.';

    const CDE_VERSION = 1;

    private const DATA = [
        [
            'value' => self::CFDNA,
            'permissible_value' => 'cfDNA',
            'long_name' => 'Circulating cell-free DNA',
            'public_id' => 2578098,
            'concept_code' => ['C128274'],
            'description' => 'DNA found in blood plasma and other bodily fluids that is not associated with cells.',
        ],
        [
            'value' => self::CTDNA,
            'permissible_value' => 'ctDNA',
            'long_name' => 'Circulating Tumor-Derived DNA',
            'public_id' => 4061103,
            'concept_code' => ['C113243'],
            'description' => 'Neoplasm-derived DNA found in blood plasma and other bodily fluids that is not associated with cells.',
        ],
        [
            'value' => self::DNA,
            'permissible_value' => 'DNA',
            'long_name' => 'DNA',
            'public_id' => 2581946,
            'concept_code' => ['C449'],
            'description' => 'A long linear double-stranded polymer formed from nucleotides attached to a deoxyribose backbone and found in the nucleus of a cell; associated with the transmission of genetic information.',
        ],
        [
            'value' => self::MIRNA,
            'permissible_value' => 'miRNA',
            'long_name' => 'MicroRNA',
            'public_id' => 2938123,
            'concept_code' => ['C25966'],
            'description' => 'A sequence of single-stranded RNA, that is 20-25 nucleotides in length, which is transcribed from DNA but is not translated into a protein. This nucleic acid may regulate the transcription or translation of other genes.',
        ],
        [
            'value' => self::MESSENGER_RNA,
            'permissible_value' => 'mRNA',
            'long_name' => 'Messenger RNA',
            'public_id' => 2756502,
            'concept_code' => ['C813'],
            'description' => 'A class of RNA molecule containing protein-coding information in its nucleotide sequence that can be translated into the amino acid sequence of a protein.',
        ],
        [
            'value' => self::NOT_REPORTED,
            'permissible_value' => 'Not Reported',
            'long_name' => 'Not Reported',
            'public_id' => 2572578,
            'concept_code' => ['C43234'],
            'description' => 'Not provided or available.',
        ],
        [
            'value' => self::NUCLEIC_RNA,
            'permissible_value' => 'Nucleic RNA',
            'long_name' => 'Nucleic RNA Sample',
            'public_id' => 15063892,
            'concept_code' => ['C174108'],
            'description' => 'A biological specimen comprised of the RNA isolated from the nuclei of cells.',
        ],
        [
            'value' => self::PROTEIN,
            'permissible_value' => 'Protein',
            'long_name' => 'Protein',
            'public_id' => 2581951,
            'concept_code' => ['C17021'],
            'description' => 'Any of a group of complex organic macromolecules that contain carbon, hydrogen, oxygen, nitrogen, and usually sulfur and are composed of one or more chains of amino acids. Proteins are fundamental components of all living cells and include many substances, such as enzymes, hormones, and antibodies, that are necessary for the proper functioning of an organism.',
        ],
        [
            'value' => self::RNA,
            'permissible_value' => 'RNA',
            'long_name' => 'RNA Specimen',
            'public_id' => 14239169,
            'concept_code' => ['C198568'],
            'description' => 'A biospecimen created to contain an isolated or enriched RNA sample.',
        ],
        [
            'value' => self::TOTAL_RNA,
            'permissible_value' => 'Total RNA',
            'long_name' => 'Total RNA',
            'public_id' => 10811966,
            'concept_code' => ['C163995'],
            'description' => 'A biological sample comprised of all of the RNA collected from an experimental subject.',
        ],
        [
            'value' => self::UNKNOWN,
            'permissible_value' => 'Unknown',
            'long_name' => 'Unknown',
            'public_id' => 5682944,
            'concept_code' => ['C17998'],
            'description' => 'Not known, not observed, not recorded, or refused.',
        ],
    ];
}
