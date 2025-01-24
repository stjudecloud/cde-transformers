<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum AnatomicalSite implements ArrayAccess
{
    use ValidatorTrait;

    case UNKNOWN;

    const CDE_ID = 0;

    const URL = '';

    const DESCRIPTION = '';

    const CDE_VERSION = 0;

    private const DATA = [
        [
            'value' => self::UNKNOWN,
            'permissible_value' => 'Unknown',
            'long_name' => 'Unknown',
            'public_id' => 0,
            'concept_code' => [''],
            'description' => '',
        ],
    ];
}
