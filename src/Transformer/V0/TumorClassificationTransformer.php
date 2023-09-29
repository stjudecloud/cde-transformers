<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\TumorClassification;

/**
 * @method static TumorClassification|string transform($permissibleValue, $key = null)
 */
class TumorClassificationTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => TumorClassification::METASTATIC,
            'regex' => '/^(metastatic)$/i'
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
