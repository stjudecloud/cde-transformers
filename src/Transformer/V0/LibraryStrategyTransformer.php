<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\LibraryStrategy;

/**
 * @method static string|null|LibraryStrategy transform($permissibleValue, $key = null)
 */
class LibraryStrategyTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => LibraryStrategy::AMPLICON,
            'regex' => '/^(amplicon)$/i',
        ],
        [
            'value' => LibraryStrategy::ATAC_SEQ,
            'regex' => '/^(atac(-| )seq)$/i',
        ],
        [
            'value' => LibraryStrategy::BISULFITE_SEQ,
            'regex' => '/^(bisulfite(-| )seq)$/i',
        ],
        [
            'value' => LibraryStrategy::CHIA_PET,
            'regex' => '/^(chia(-| )pet)$/i',
        ],
        [
            'value' => LibraryStrategy::CHIP_SEQ,
            'regex' => '/^(chip(-| )seq)$/i',
        ],
        [
            'value' => LibraryStrategy::CLONE,
            'regex' => '/^(clone)$/i',
        ],
        [
            'value' => LibraryStrategy::CLONEEND,
            'regex' => '/^(cloneend)$/i',
        ],
        [
            'value' => LibraryStrategy::CTS,
            'regex' => '/^(cts)$/i',
        ],
        [
            'value' => LibraryStrategy::DNASE_HYPERSENSITIVITY,
            'regex' => '/^(dnase( |-)hypersensitivity)$/i',
        ],
        [
            'value' => LibraryStrategy::EST,
            'regex' => '/^(est)$/i',
        ],
        [
            'value' => LibraryStrategy::FAIRE_SEQ,
            'regex' => '/^(faire( |-)seq)$/i',
        ],
        [
            'value' => LibraryStrategy::FINISHING,
            'regex' => '/^(finishing)$/i',
        ],
        [
            'value' => LibraryStrategy::FL_CDNA,
            'regex' => '/^(fl( |-)cdna)$/i',
        ],
        [
            'value' => LibraryStrategy::HI_C,
            'regex' => '/^(hi( |-)c)$/i',
        ],
        [
            'value' => LibraryStrategy::MBD_SEQ,
            'regex' => '/^(mbd( |-)seq)$/i',
        ],
        [
            'value' => LibraryStrategy::MEDIP_SEQ,
            'regex' => '/^(medip( |-)seq)$/i',
        ],
        [
            'value' => LibraryStrategy::MIRNA_SEQ,
            'regex' => '/^(mirna( |-)seq)$/i',
        ],
        [
            'value' => LibraryStrategy::MNASE_SEQ,
            'regex' => '/^(mnase( |-)seq)$/i',
        ],
        [
            'value' => LibraryStrategy::MRE_SEQ,
            'regex' => '/^(mre( |-)seq)$/i',
        ],
        [
            'value' => LibraryStrategy::NCRNA_SEQ,
            'regex' => '/^(ncrna( |-)seq)$/i',
        ],
        [
            'value' => LibraryStrategy::OTHER,
            'regex' => '/^(other)$/i',
        ],
        [
            'value' => LibraryStrategy::POOLCLONE,
            'regex' => '/^(poolclone)$/i',
        ],
        [
            'value' => LibraryStrategy::RAD_SEQ,
            'regex' => '/^(rad( |-)seq)$/i',
        ],
        [
            'value' => LibraryStrategy::RIP_SEQ,
            'regex' => '/^(rip( |-)seq)$/i',
        ],
        [
            'value' => LibraryStrategy::RNA_SEQ,
            'regex' => '/^(rna( |-)seq)$/i',
        ],
        [
            'value' => LibraryStrategy::SELEX,
            'regex' => '/^(selex)$/i',
        ],
        [
            'value' => LibraryStrategy::SNATAC_SEQ,
            'regex' => '/^(snatac( |-)seq)$/i',
        ],
        [
            'value' => LibraryStrategy::SSRNA_SEQ,
            'regex' => '/^(ssrna( |-)seq)$/i',
        ],
        [
            'value' => LibraryStrategy::SYNTHETIC_LONG_READ,
            'regex' => '/^(synthetic( |-)long( |-)read)$/i',
        ],
        [
            'value' => LibraryStrategy::TARGETED_CAPTURE,
            'regex' => '/^(targeted( |-)capture)$/i',
        ],
        [
            'value' => LibraryStrategy::TETHERED_CHROMATIN_CONFORMATION_CAPTURE,
            'regex' => '/^(tethered chromatin conformation capture)$/i',
        ],
        [
            'value' => LibraryStrategy::TN_SEQ,
            'regex' => '/^(tn( |-)seq)$/i',
        ],
        [
            'value' => LibraryStrategy::VALIDATION,
            'regex' => '/^(validation)$/i',
        ],
        [
            'value' => LibraryStrategy::WCS,
            'regex' => '/^(wcs)$/i',
        ],
        [
            'value' => LibraryStrategy::WGA,
            'regex' => '/^(wga)$/i',
        ],
        [
            'value' => LibraryStrategy::WGS,
            'regex' => '/^(wgs)$/i',
        ],
        [
            'value' => LibraryStrategy::WXS,
            'regex' => '/^(wxs)$/i',
        ],
    ];
}
