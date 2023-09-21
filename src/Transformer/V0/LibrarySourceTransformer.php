<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\LibrarySource;

/**
 * @method static LibrarySource transform($permissibleValue)
 */
class LibrarySourceTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => LibrarySource::GENOMIC_DNA,
            'regex' => '/^(genomic dna)$/i'
        ],
        [
            'value' => LibrarySource::BULK_CELLS,
            'regex' => '/^(bulk cells)$/i'
        ],
        [
            'value' => LibrarySource::BULK_NUCLEI,
            'regex' => '/^(bulk nuclei)$/i'
        ],
        [
            'value' => LibrarySource::BULK_TISSUE,
            'regex' => '/^(bulk tissue)$/i'
        ],
        [
            'value' => LibrarySource::RNA,
            'regex' => '/^(rna)$/i'
        ],
        [
            'value' => LibrarySource::SINGLE_CELLS,
            'regex' => '/^(single(-| )?cells)$/i'
        ],
        [
            'value' => LibrarySource::SINGLE_NUCLEI,
            'regex' => '/^(single(-| )?nuclei)$/i'
        ],
        [
            'value' => LibrarySource::GEN0MIC_SINGLE_CELL,
            'regex' => '/^(genomic single cell)$/i'
        ],
        [
            'value' => LibrarySource::OTHER,
            'regex' => '/^(other)$/i'
        ],
        [
            'value' => LibrarySource::METAGENOMIC,
            'regex' => '/^(metagenomic)$/i'
        ],
        [
            'value' => LibrarySource::METATRANSCRIPTOMIC,
            'regex' => '/^(metatranscriptomic)$/i'
        ],
        [
            'value' => LibrarySource::SYNTHETIC,
            'regex' => '/^(synthetic)$/i'
        ],
        [
            'value' => LibrarySource::TRANSCRIPTOMIC,
            'regex' => '/^(transcriptomic)$/i'
        ],
        [
            'value' => LibrarySource::TRANSCRIPTOMIC_SINGLE_CELL,
            'regex' => '/^(transcriptomic single cell)$/i'
        ],
        [
            'value' => LibrarySource::VIRAL_RNA,
            'regex' => '/^(viral rna)$/i'
        ]
    ];
}
