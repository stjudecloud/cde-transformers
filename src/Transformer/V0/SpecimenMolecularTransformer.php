<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\SpecimenMolecular;

/**
 * @method static string|null|SpecimenMolecular transform($permissibleValue, $key = null)
 */
class SpecimenMolecularTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => SpecimenMolecular::CFDNA,
            'regex' => '/^(cfdna)$/i',
        ],
        [
            'value' => SpecimenMolecular::CTDNA,
            'regex' => '/^(ctdna)$/i',
        ],
        [
            'value' => SpecimenMolecular::DNA,
            'regex' => '/^(dna)$/i',
        ],
        [
            'value' => SpecimenMolecular::MIRNA,
            'regex' => '/^(mirna)$/i',
        ],
        [
            'value' => SpecimenMolecular::MESSENGER_RNA,
            'regex' => '/^(mrna)$/i',
        ],
        [
            'value' => SpecimenMolecular::NOT_REPORTED,
            'regex' => '/^(not reported)$/i',
        ],
        [
            'value' => SpecimenMolecular::NUCLEIC_RNA,
            'regex' => '/^(nucleic rna)$/i',
        ],
        [
            'value' => SpecimenMolecular::PROTEIN,
            'regex' => '/^(protein)$/i',
        ],
        [
            'value' => SpecimenMolecular::RNA,
            'regex' => '/^(rna)$/i',
        ],
        [
            'value' => SpecimenMolecular::TOTAL_RNA,
            'regex' => '/^(total rna)$/i',
        ],
        [
            'value' => SpecimenMolecular::UNKNOWN,
            'regex' => '/^(unknown)$/i',
        ],
    ];
}
