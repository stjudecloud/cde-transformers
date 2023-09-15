<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\TumorClassification;

/**
 * @method static TumorClassification transform($permissibleValue)
 */
enum TumorClassificationTransformer
{
    use TransformerTrait;

    case METASTATIC;
    case UNKNOWN;
    case NOT_REPORTED;
    case PRIMARY;
    case REGIONAL;

    public const MAPPING = [
        [
            'value' => TumorClassification::METASTATIC,
            'regex' => '/^(metastatic)?)$/i'
        ],
        [
            'value' => TumorClassification::UNKNOWN,
            'regex' => '/^(unknown)$/i'
        ],
        [
            'value' => TumorClassification::NOT_REPORTED,
            'regex' => '/^(not reported)$/i'
        ],
        [
            'value' => TumorClassification::PRIMARY,
            'regex' => '/^(primary)$/i'
        ],
        [
            'value' => TumorClassification::REGIONAL,
            'regex' => '/^(regional)$/i'
        ]
    ];
}
