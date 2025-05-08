<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V2\Data\TumorGrade;

/**
 * @method static string|null|TumorGrade transform($permissibleValue, $key = null)
 */
class TumorGradeTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => TumorGrade::G1_LOW_GRADE,
            'regex' => '/^(g1 low grade)$/i',
        ],
        [
            'value' => TumorGrade::G2_INTERMEDIATE_GRADE,
            'regex' => '/^(g2 intermediate grade)$/i',
        ],
        [
            'value' => TumorGrade::G3_HIGH_GRADE,
            'regex' => '/^(g3 high grade)$/i',
        ],
        [
            'value' => TumorGrade::G4_ANAPLASTIC,
            'regex' => '/^(g4 anaplastic)$/i',
        ],
        [
            'value' => TumorGrade::GB_BORDERLINE,
            'regex' => '/^(gb borderline)$/i',
        ],
        [
            'value' => TumorGrade::GX_GRADE_CANNOT_BE_ASSESSED,
            'regex' => '/^(gx grade cannot be assessed)$/i',
        ],
        [
            'value' => TumorGrade::NOT_APPLICABLE,
            'regex' => '/^(not applicable)$/i',
        ],
        [
            'value' => TumorGrade::NOT_REPORTED,
            'regex' => '/^(not reported)$/i',
        ],
        [
            'value' => TumorGrade::UNKNOWN,
            'regex' => '/^(unknown)$/i',
        ],
    ];
}
