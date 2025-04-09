<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\TissueType;

/**
 * @method static string|null|TissueType transform($permissibleValue, $key = null)
 */
class TissueTypeTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => TissueType::NOT_REPORTED,
            'regex' => '/^(not reported)$/i',
        ],
        [
            'value' => TissueType::NORMAL,
            'regex' => '/^(normal)$/i',
        ],
        [
            'value' => TissueType::PERITUMORAL,
            'regex' => '/^(peritumoral|peritumoural)$/i',
        ],
        [
            'value' => TissueType::TUMOR,
            'regex' => '/^(tumor|tumour)$/i',
        ],
        [
            'value' => TissueType::UNKNOWN,
            'regex' => '/^(unknown)$/i',
        ],
    ];
}
