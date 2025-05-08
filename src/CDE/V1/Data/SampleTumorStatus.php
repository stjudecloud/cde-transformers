<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum SampleTumorStatus implements ArrayAccess
{
    use ValidatorTrait;

    case NOT_REPORTED;
    case NORMAL;
    case PERITUMORAL;
    case TUMOR;
    case UNKNOWN;

    const CDE_ID = 14688604;

    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=14688604%20and%20ver_nr=1.0';

    const DESCRIPTION = 'The category assigned to the cytologic atypia found in cellular molecules, cells, tissues, organs, body fluids, or body excretory products.';

    const CDE_VERSION = 1;

    private const DATA = [
        [
            'value' => self::NOT_REPORTED,
            'permissible_value' => 'Not Reported',
            'long_name' => 'Not Reported',
            'public_id' => 5612322,
            'concept_code' => ['C43234'],
            'description' => 'Not provided or available.',
        ],
        [
            'value' => self::NORMAL,
            'permissible_value' => 'Normal',
            'long_name' => 'Normal',
            'public_id' => 14741231,
            'concept_code' => ['C162623'],
            'description' => 'Tissue sample with cellular composition and architectural patterns expected for the particular anatomic site in which it belongs. There is no evidence of abnormal cellular infiltrates or tumor mass formation.',
        ],
        [
            'value' => self::PERITUMORAL,
            'permissible_value' => 'Peritumoral',
            'long_name' => 'Tumor-Adjacent Normal Specimen',
            'public_id' => 13332906,
            'concept_code' => ['C164032'],
            'description' => 'A specimen comprised of morphologically normal tissue collected from the area immediately surrounding a tumor in an experimental subject.',
        ],
        [
            'value' => self::TUMOR,
            'permissible_value' => 'Tumor',
            'long_name' => 'Tumor Tissue',
            'public_id' => 3184945,
            'concept_code' => ['C18009'],
            'description' => 'A tissue sample, or entire tumor that is removed for microscopic examination.',
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
