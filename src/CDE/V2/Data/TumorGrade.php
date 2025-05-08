<?php

namespace CCDI\CDE\V2\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum TumorGrade implements ArrayAccess
{
    use ValidatorTrait;

    case G1_LOW_GRADE;
    case G2_INTERMEDIATE_GRADE;
    case G3_HIGH_GRADE;
    case G4_ANAPLASTIC;
    case GB_BORDERLINE;
    case GX_GRADE_CANNOT_BE_ASSESSED;
    case NOT_APPLICABLE;
    case NOT_REPORTED;
    case UNKNOWN;

    const CDE_ID = 11325685;

    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=11325685%20and%20ver_nr=2.0';

    const DESCRIPTION = 'A text term to express the degree of abnormality of cancer cells as a measure of differentiation and aggressiveness.';

    const CDE_VERSION = 2;

    private const DATA = [
        [
            'value' => self::G1_LOW_GRADE,
            'permissible_value' => 'G1 Low Grade',
            'long_name' => 'Grade 1',
            'public_id' => 3270009,
            'concept_code' => ['C28077'],
            'description' => 'A morphologic qualifier indicating that a cancerous lesion is well differentiated.',
        ],
        [
            'value' => self::G2_INTERMEDIATE_GRADE,
            'permissible_value' => 'G2 Intermediate Grade',
            'long_name' => 'Grade 2',
            'public_id' => 5622672,
            'concept_code' => ['C28078'],
            'description' => 'A morphologic qualifier indicating that a cancerous lesion is moderately differentiated.',
        ],
        [
            'value' => self::G3_HIGH_GRADE,
            'permissible_value' => 'G3 High Grade',
            'long_name' => 'Grade 3',
            'public_id' => 5622671,
            'concept_code' => ['C28079'],
            'description' => 'A morphologic qualifier indicating that a cancerous lesion is poorly differentiated.',
        ],
        [
            'value' => self::G4_ANAPLASTIC,
            'permissible_value' => 'G4 Anaplastic',
            'long_name' => 'Grade 4',
            'public_id' => 15872601,
            'concept_code' => ['C28082'],
            'description' => 'A morphologic qualifier indicating that a cancerous lesion is undifferentiated.',
        ],
        [
            'value' => self::GB_BORDERLINE,
            'permissible_value' => 'GB Borderline',
            'long_name' => 'Grade B',
            'public_id' => 6050322,
            'concept_code' => ['C113729'],
            'description' => 'A morphologic qualifier indicating that a neoplasm is of borderline malignancy.',
        ],
        [
            'value' => self::GX_GRADE_CANNOT_BE_ASSESSED,
            'permissible_value' => 'GX Grade Cannot Be Assessed',
            'long_name' => 'Grade X',
            'public_id' => 10987209,
            'concept_code' => ['C113730'],
            'description' => 'A morphologic qualifier indicating that the grade of a neoplasm cannot be assessed.',
        ],
        [
            'value' => self::NOT_APPLICABLE,
            'permissible_value' => 'Not Applicable',
            'long_name' => 'Not Applicable',
            'public_id' => 7590024,
            'concept_code' => ['C48660'],
            'description' => 'Determination of a value is not relevant in the current context.',
        ],
        [
            'value' => self::NOT_REPORTED,
            'permissible_value' => 'Not Reported',
            'long_name' => 'Not Reported',
            'public_id' => 5612322,
            'concept_code' => ['C43234'],
            'description' => 'Not provided or available.',
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
