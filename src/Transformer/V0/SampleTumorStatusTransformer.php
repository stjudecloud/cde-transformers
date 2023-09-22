<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V2\Data\SampleTumorStatus;

/**
 * @method static SampleTumorStatus transform($permissibleValue, $key = null)
 */
class SampleTumorStatusTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => SampleTumorStatus::ABNORMAL,
            'regex' => '/^(abnormal)$/i'
        ],
        [
            'value' => SampleTumorStatus::NORMAL,
            'regex' => '/^(normal)$/i'
        ],
        [
            'value' => SampleTumorStatus::PERITUMORAL,
            'regex' => '/^(peritumoral)$/i'
        ],
        [
            'value' => SampleTumorStatus::TUMOR,
            'regex' => '/^(tumor|tumour)$/i'
        ]
    ];
}
