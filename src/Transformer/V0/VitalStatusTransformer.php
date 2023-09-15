<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\VitalStatus;

/**
 * @method static VitalStatus transform($permissibleValue)
 */
enum VitalStatusTransformer
{
    use TransformerTrait;

    case NOT_REPORTED;
    case UNKNOWN;
    case ALIVE;
    case DEAD;
    case UNSPECIFIED;

    public const MAPPING = [
        [
            'value' => VitalStatus::NOT_REPORTED,
            'regex' => '/^(not reported)$/i'
        ],
        [
            'value' => VitalStatus::UNKNOWN,
            'regex' => '/^(unknown)$/i'
        ],
        [
            'value' => VitalStatus::UNSPECIFIED,
            'regex' => '/^(unspecified)$/i'
        ],
        [
            'value' => VitalStatus::ALIVE,
            'regex' => '/^(alive)$/i'
        ],
        [
            'value' => VitalStatus::DEAD,
            'regex' => '/^(dead)$/i'
        ]
    ];
}
