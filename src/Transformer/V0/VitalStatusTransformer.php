<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\VitalStatus;

/**
 * @method static string|null|VitalStatus transform($permissibleValue, $key = null)
 */
class VitalStatusTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => VitalStatus::NOT_REPORTED,
            'regex' => '/^(not reported)$/i',
        ],
        [
            'value' => VitalStatus::UNKNOWN,
            'regex' => '/^(unknown)$/i',
        ],
        [
            'value' => VitalStatus::UNSPECIFIED,
            'regex' => '/^(unspecified)$/i',
        ],
        [
            'value' => VitalStatus::ALIVE,
            'regex' => '/^(alive)$/i',
        ],
        [
            'value' => VitalStatus::DEAD,
            'regex' => '/^(dead)$/i',
        ],
    ];
}
