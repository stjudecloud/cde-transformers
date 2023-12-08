<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\LibrarySelection;

/**
 * @method static string|null|LibrarySelection transform($permissibleValue, $key = null)
 */
class LibrarySelectionTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => LibrarySelection::MNASE,
            'regex' => '/^(mnase)$/i'
        ],
        [
            'value' => LibrarySelection::NOT_APPLICABLE,
            'regex' => '/^(not applicable)$/i'
        ],
        [
            'value' => LibrarySelection::AFFINITY_ENRICHMENT,
            'regex' => '/^(affinity enrichment)$/i'
        ],
        [
            'value' => LibrarySelection::MIRNA_SIZE_FRACTIONATION,
            'regex' => '/^(mirna size fractionation)$/i'
        ],
        [
            'value' => LibrarySelection::POLY_T_ENRICHMENT,
            'regex' => '/^(poly(-| )t enrichment)$/i'
        ],
        [
            'value' => LibrarySelection::RRNA_DEPLETION,
            'regex' => '/^(rrna depletion)$/i'
        ],
        [
            'value' => LibrarySelection::FIVE_METHYLCYTIDINE_ANTIBODY,
            'regex' => '/^(5(-| )methylcytidine antibody)$/i'
        ],
        [
            'value' => LibrarySelection::CAGE,
            'regex' => '/^(cage)$/i'
        ],
        [
            'value' => LibrarySelection::CDNA,
            'regex' => '/^(cdna)$/i'
        ],
        [
            'value' => LibrarySelection::CDNA_OLIGO_DT,
            'regex' => '/^(cdna oligo_dt)$/i'
        ],
        [
            'value' => LibrarySelection::CDNA_RANDOM_PRIMING,
            'regex' => '/^(cdna random priming)$/i'
        ],
        [
            'value' => LibrarySelection::CF_H,
            'regex' => '/^(cf(-| )h)$/i'
        ],
        [
            'value' => LibrarySelection::CF_M,
            'regex' => '/^(cf(-| )m)$/i'
        ],
        [
            'value' => LibrarySelection::CF_S,
            'regex' => '/^(cf(-| )s)$/i'
        ],
        [
            'value' => LibrarySelection::CF_T,
            'regex' => '/^(cf(-| )t)$/i'
        ],
        [
            'value' => LibrarySelection::CHIP,
            'regex' => '/^(chip)$/i'
        ],
        [
            'value' => LibrarySelection::DNASE,
            'regex' => '/^(dnase)$/i'
        ],
        [
            'value' => LibrarySelection::HMPR,
            'regex' => '/^(hmpr)$/i'
        ],
        [
            'value' => LibrarySelection::HYBRID_SELECTION,
            'regex' => '/^(hybrid selection)$/i'
        ],
        [
            'value' => LibrarySelection::INVERSE_RRNA,
            'regex' => '/^(inverse rrna)$/i'
        ],
        [
            'value' => LibrarySelection::MBD2_PROTEIN_METHYL_CPG_BINDING_DOMAIN,
            'regex' => '/^(mbd2 protein methyl(-| )cpg binding domain)$/i'
        ],
        [
            'value' => LibrarySelection::MDA,
            'regex' => '/^(mda)$/i'
        ],
        [
            'value' => LibrarySelection::MF,
            'regex' => '/^(mf)$/i'
        ],
        [
            'value' => LibrarySelection::MSLL,
            'regex' => '/^(msll)$/i'
        ],
        [
            'value' => LibrarySelection::OLIGO_DT,
            'regex' => '/^(oligo(-| )dt)$/i'
        ],
        [
            'value' => LibrarySelection::OTHER,
            'regex' => '/^(other)$/i'
        ],
        [
            'value' => LibrarySelection::PADLOCK_PROBES_CAPTURE_METHOD,
            'regex' => '/^(padlock probes capture method)$/i'
        ],
        [
            'value' => LibrarySelection::PCR,
            'regex' => '/^(pcr)$/i'
        ],
        [
            'value' => LibrarySelection::POLYA,
            'regex' => '/^(polya)$/i'
        ],
        [
            'value' => LibrarySelection::RACE,
            'regex' => '/^(race)$/i'
        ],
        [
            'value' => LibrarySelection::RANDOM,
            'regex' => '/^(random)$/i'
        ],
        [
            'value' => LibrarySelection::RANDOM_PCR,
            'regex' => '/^(random pcr)$/i'
        ],
        [
            'value' => LibrarySelection::REDUCED_REPRESENTATION,
            'regex' => '/^(reduced representation)$/i'
        ],
        [
            'value' => LibrarySelection::REPEAT_FRACTIONATION,
            'regex' => '/^(repeat fractionation)$/i'
        ],
        [
            'value' => LibrarySelection::RESTRICTION_DIGEST,
            'regex' => '/^(restriction digest)$/i'
        ],
        [
            'value' => LibrarySelection::RT_PCR,
            'regex' => '/^(rt(-| )pcr)$/i'
        ],
        [
            'value' => LibrarySelection::SIZE_FRACTIONATION,
            'regex' => '/^(size fractionation)$/i'
        ],
        [
            'value' => LibrarySelection::UNSPECIFIED,
            'regex' => '/^(unspecified)$/i'
        ]
    ];

}
