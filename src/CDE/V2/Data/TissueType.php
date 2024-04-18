<?php

namespace CCDI\CDE\V2\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum TissueType implements ArrayAccess
{
    use ValidatorTrait;

    case NOT_REPORTED;
    case ABNORMAL;
    case NORMAL;
    case PERITUMORAL;
    case TUMOR;
    case NON_NEOPLASTIC;
    case UNAVAILABLE;
    case UNKNOWN;
    case UNSPECIFIED;

    const CDE_ID = 5432687;

    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=5432687%20and%20ver_nr=2.0';

    const DESCRIPTION = 'Text term that represents a description of the kind of tissue collected with respect to disease status or proximity to tumor tissue.';

    const CDE_VERSION = 2;

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
            'value' => self::ABNORMAL,
            'permissible_value' => 'Abnormal',
            'long_name' => 'Abnormal',
            'public_id' => 4265117,
            'concept_code' => ['C25401'],
            'description' => 'Deviating in any way from the state, position, structure, condition, 
behavior, or rule which is considered a norm.',
        ],
        [
            'value' => self::NORMAL,
            'permissible_value' => 'Normal',
            'long_name' => 'Normal',
            'public_id' => 4494160,
            'concept_code' => ['C14165'],
            'description' => 'Being approximately average or within certain limits; conforming with or 
constituting a norm or standard or level or type or social norm.',
        ],
        [
            'value' => self::PERITUMORAL,
            'permissible_value' => 'Peritumoral',
            'long_name' => 'Peritumoral',
            'public_id' => 4633527,
            'concept_code' => ['C119010'],
            'description' => 'Located in tissues surrounding a tumor.',
        ],
        [
            'value' => self::TUMOR,
            'permissible_value' => 'Tumor',
            'long_name' => 'Malignant Neoplasm',
            'public_id' => 2749852,
            'concept_code' => ['C9305'],
            'description' => 'A tumor composed of atypical neoplastic, often pleomorphic cells that 
invade other tissues. Malignant neoplasms usually metastasize to distant 
anatomic sites and may recur after excision. The most common malignant 
neoplasms are carcinomas (adenocarcinomas or squamous cell carcinomas), 
Hodgkin\'s and non-Hodgkin\'s lymphomas, leukemias, melanomas, and sarcomas. 
-- 2004',
        ],
        [
            'value' => self::NON_NEOPLASTIC,
            'permissible_value' => 'Non-neoplastic',
            'long_name' => 'Non-neoplastic',
            'public_id' => 5828001,
            'concept_code' => ['C25594', 'C45315'],
            'description' => 'An operation in which a term denies or inverts the meaning of another term or construction.: Exhibiting characteristics of independently proliferating cells, notably altered morphology, growth characteristics, and/or biochemical and molecular properties.',
        ],
        [
            'value' => self::UNAVAILABLE,
            'permissible_value' => 'Unavailable',
            'long_name' => 'Unavailable',
            'public_id' => 5828000,
            'concept_code' => ['C126101'],
            'description' => 'The desired information is not available.',
        ],
        [
            'value' => self::UNKNOWN,
            'permissible_value' => 'Unknown',
            'long_name' => 'Unknown',
            'public_id' => 2572577,
            'concept_code' => ['C17998'],
            'description' => 'Not known, not observed, not recorded, or refused.',
        ],
        [
            'value' => self::UNSPECIFIED,
            'permissible_value' => 'Unspecified',
            'long_name' => 'Unspecified',
            'public_id' => 2573360,
            'concept_code' => ['C38046'],
            'description' => 'Not stated explicitly or in detail.',
        ],
    ];
}
