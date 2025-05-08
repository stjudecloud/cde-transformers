<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\SampleTumorStatus;

/**
 * @method static string|null|SampleTumorStatus transform($permissibleValue, $key = null)
 */
class SampleTumorStatusTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => SampleTumorStatus::NOT_REPORTED,
            'regex' => '/^(not reported)$/i',
        ],
        [
            'value' => SampleTumorStatus::NORMAL,
            'regex' => '/^(normal)$/i',
        ],
        [
            'value' => SampleTumorStatus::PERITUMORAL,
            'regex' => '/^(peritumoral|peritumoural)$/i',
        ],
        [
            'value' => SampleTumorStatus::TUMOR,
            'regex' => '/^(tumor|tumour)$/i',
        ],
        [
            'value' => SampleTumorStatus::UNKNOWN,
            'regex' => '/^(unknown)$/i',
        ],
    ];
}
