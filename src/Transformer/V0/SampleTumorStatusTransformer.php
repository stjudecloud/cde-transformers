<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V2\Data\SampleTumorStatus;

/**
 * @method static SampleTumorStatus|string transform($permissibleValue, $key = null)
 */
class SampleTumorStatusTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => SampleTumorStatus::NOT_REPORTED,
            'regex' => '/^(not reported)$/i'
        ],
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
            'regex' => '/^(peritumoral|peritumoural)$/i'
        ],
        [
            'value' => SampleTumorStatus::TUMOR,
            'regex' => '/^(tumor|tumour)$/i'
        ],
        [
            'value' => SampleTumorStatus::NON_NEOPLASTIC,
            'regex' => '/^(non(-| )neoplastic)$/i'
        ],
        [
            'value' => SampleTumorStatus::UNAVAILABLE,
            'regex' => '/^(unavailable)$/i'
        ],
        [
            'value' => SampleTumorStatus::UNKNOWN,
            'regex' => '/^(unknown)$/i'
        ],
        [
            'value' => SampleTumorStatus::UNSPECIFIED,
            'regex' => '/^(unspecified)$/i'
        ]
    ];
}
