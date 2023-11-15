<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\DiseasePhase;

/**
 * @method static DiseasePhase|string transform($permissibleValue, $key = null)
 */
class DiseasePhaseTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => DiseasePhase::UNKNOWN,
            'regex' => '/^(unknown)$/i'
        ],
        [
            'value' => DiseasePhase::NOT_REPORTED,
            'regex' => '/^(not reported)$/i'
        ],
        [
            'value' => DiseasePhase::POST_MORTEM,
            'regex' => '/^(post(\-| )mortem)$/i'
        ],
        [
            'value' => DiseasePhase::INITIAL_DIAGNOSIS,
            'regex' => '/^(initial diagnosis)$/i'
        ],
        [
            'value' => DiseasePhase::PROGRESSION,
            'regex' => '/^(progression)$/i'
        ],
        [
            'value' => DiseasePhase::REFRACTORY,
            'regex' => '/^(refactory|refractory)$/i'
        ],
        [
            'value' => DiseasePhase::RELAPSE,
            'regex' => '/^(relapse)$/i'
        ],
        [
            'value' => DiseasePhase::RELAPSE_PROGRESSION,
            'regex' => '/^(relapse(\/| )progression)$/i'
        ]
    ];
}
