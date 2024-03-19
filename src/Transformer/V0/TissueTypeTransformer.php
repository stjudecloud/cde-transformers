<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V2\Data\TissueType;

/**
 * @method static string|null|TissueType transform($permissibleValue, $key = null)
 */
class TissueTypeTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => TissueType::NOT_REPORTED,
            'regex' => '/^(not reported)$/i'
        ],
        [
            'value' => TissueType::ABNORMAL,
            'regex' => '/^(abnormal)$/i'
        ],
        [
            'value' => TissueType::NORMAL,
            'regex' => '/^(normal)$/i'
        ],
        [
            'value' => TissueType::PERITUMORAL,
            'regex' => '/^(peritumoral|peritumoural)$/i'
        ],
        [
            'value' => TissueType::TUMOR,
            'regex' => '/^(tumor|tumour)$/i'
        ],
        [
            'value' => TissueType::NON_NEOPLASTIC,
            'regex' => '/^(non(-| )neoplastic)$/i'
        ],
        [
            'value' => TissueType::UNAVAILABLE,
            'regex' => '/^(unavailable)$/i'
        ],
        [
            'value' => TissueType::UNKNOWN,
            'regex' => '/^(unknown)$/i'
        ],
        [
            'value' => TissueType::UNSPECIFIED,
            'regex' => '/^(unspecified)$/i'
        ]
    ];
}
