<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum Race implements ArrayAccess
{
    use ValidatorTrait;

    case NOT_ALLOWED_TO_COLLECT;
    case UNKNOWN;
    case NOT_REPORTED;
    case WHITE;
    case ASIAN;
    case BLACK_OR_AFRICAN_AMERICAN;
    case NATIVE_HAWAIIAN_OR_OTHER_PACIFIC_ISLANDER;
    case AMERICAN_INDIAN_OR_ALASKA_NATIVE;

    const CDE_ID = 2192199;

    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=2192199%20and%20ver_nr=1.0';

    const DESCRIPTION = 'The text for reporting information about race based on the Office of Management and Budget (OMB) categories.';

    const CDE_VERSION = 1;

    private const DATA = [
        [
            'value' => self::NOT_ALLOWED_TO_COLLECT,
            'permissible_value' => 'Not allowed to collect',
            'long_name' => 'Not Allowed To Collect',
            'public_id' => 6662191,
            'concept_code' => ['C141478'],
            'description' => 'An indicator that specifies that a collection event was not permitted.',
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
            'value' => self::UNKNOWN,
            'permissible_value' => 'Unknown',
            'long_name' => 'Unknown',
            'public_id' => 2572577,
            'concept_code' => ['C17998'],
            'description' => 'Not known, not observed, not recorded, or refused.',
        ],
        [
            'value' => self::ASIAN,
            'permissible_value' => 'Asian',
            'long_name' => 'Asian',
            'public_id' => 2572233,
            'concept_code' => ['C41260'],
            'description' => 'A person having origins in any of the original peoples of the Far East, 
Southeast Asia, or the Indian subcontinent, including for example, 
Cambodia, China, India, Japan, Korea, Malaysia, Pakistan, the Philippine 
Islands, Thailand, and Vietnam. (OMB)',
        ],
        [
            'value' => self::WHITE,
            'permissible_value' => 'White',
            'long_name' => 'White',
            'public_id' => 2572236,
            'concept_code' => ['C41261'],
            'description' => 'Denotes person with European, Middle Eastern, or North African ancestral 
origin who identifies, or is identified, as White.',
        ],
        [
            'value' => self::BLACK_OR_AFRICAN_AMERICAN,
            'permissible_value' => 'Black or African American',
            'long_name' => 'Black or African American',
            'public_id' => 2572313,
            'concept_code' => ['C16352'],
            'description' => 'A person having origins in any of the Black racial groups of Africa. Terms 
such as ""Haitian"" or ""Negro"" can be used in addition to ""Black or African 
American"". (OMB)',
        ],
        [
            'value' => self::AMERICAN_INDIAN_OR_ALASKA_NATIVE,
            'permissible_value' => 'American Indian or Alaska Native',
            'long_name' => 'American Indian or Alaska Native',
            'public_id' => 2572232,
            'concept_code' => ['C41259'],
            'description' => 'A person having origins in any of the original peoples of North and South 
America (including Central America) and who maintains tribal affiliation or 
community attachment. (OMB)',
        ],
        [
            'value' => self::NATIVE_HAWAIIAN_OR_OTHER_PACIFIC_ISLANDER,
            'permissible_value' => 'Native Hawaiian or other Pacific Islander',
            'long_name' => 'Native Hawaiian or Other Pacific Islander',
            'public_id' => 2572235,
            'concept_code' => ['C41219'],
            'description' => 'Denotes a person having origins in any of the original peoples of Hawaii, 
Guam, Samoa, or other Pacific Islands. The term covers particularly people 
who identify themselves as part-Hawaiian, Native Hawaiian, Guamanian or 
Chamorro, Carolinian, Samoan, Chuukese (Trukese), Fijian, Kosraean, 
Melanesian, Micronesian, Northern Mariana Islander, Palauan, Papua New 
Guinean, Pohnpeian, Polynesian, Solomon Islander, Tahitian, Tokelauan, 
Tongan, Yapese, or Pacific Islander, not specified.',
        ],
    ];
}
