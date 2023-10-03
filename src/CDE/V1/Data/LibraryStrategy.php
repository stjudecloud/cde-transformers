<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum LibraryStrategy implements ArrayAccess
{
    use ValidatorTrait;

    case AMPLICON;
    case ATAC_SEQ;
    case BISULFITE_SEQ;
    case CHIA_PET;
    case CHIP_SEQ;
    case CLONE;
    case CLONEEND;
    case CTS;
    case DNASE_HYPERSENSITIVITY;
    case EST;
    case FAIRE_SEQ;
    case FINISHING;
    case FL_CDNA;
    case HI_C;
    case MBD_SEQ;
    case MEDIP_SEQ;
    case MIRNA_SEQ;
    case MNASE_SEQ;
    case MRE_SEQ;
    case NCRNA_SEQ;
    case OTHER;
    case POOLCLONE;
    case RAD_SEQ;
    case RIP_SEQ;
    case RNA_SEQ;
    case SELEX;
    case SNATAC_SEQ;
    case SSRNA_SEQ;
    case SYNTHETIC_LONG_READ;
    case TARGETED_CAPTURE;
    case TETHERED_CHROMATIN_CONFORMATION_CAPTURE;
    case TN_SEQ;
    case VALIDATION;
    case WCS;
    case WGA;
    case WGS;
    case WXS;

    const CDE_ID = 6273393;
    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=6273393%20and%20ver_nr=1.0';
    const DESCRIPTION = 'The overall strategy for the collection of double stranded DNA fragments flanked by oligonucleotide sequence adapters to enable their analysis by high-throughput sequencing.';

    private const DATA = [
        [
            'value' => self::AMPLICON,
            'permissible_value' => 'AMPLICON',
            'long_name' => 'AMPLICON',
            'public_id' => 6273354,
            'concept_code' => [],
            'description' => 'Sequencing of overlapping or distinct PCR or RT-PCR products.'
        ],
        [
            'value' => self::ATAC_SEQ,
            'permissible_value' => 'ATAC-seq',
            'long_name' => 'ATAC-seq',
            'public_id' => 6273353,
            'concept_code' => [],
            'description' => 'Assay for Transposase-Accessible Chromatin (ATAC) strategy is used to study genome-wide chromatin accessibility. An alternative method to DNase-seq that uses an engineered Tn5 transposase to cleave DNA and to integrate primer DNA sequences into the cleaved genomic DNA.'
        ],
        [
            'value' => self::BISULFITE_SEQ,
            'permissible_value' => 'Bisulfite-Seq',
            'long_name' => 'Bisulfite-Seq',
            'public_id' => 6273352,
            'concept_code' => [],
            'description' => 'Sequencing following treatment of DNA with bisulfite to convert cytosine residues to uracil depending on methylation status.'
        ],
        [
            'value' => self::CHIA_PET,
            'permissible_value' => 'ChIA-PET',
            'long_name' => 'ChIA-PET',
            'public_id' => 6273351,
            'concept_code' => [],
            'description' => 'Direct sequencing of proximity-ligated chromatin immunoprecipitates.'
        ],
        [
            'value' => self::CHIP_SEQ,
            'permissible_value' => 'ChIP-Seq',
            'long_name' => 'ChIP-Seq',
            'public_id' => 6273350,
            'concept_code' => ['C106049'],
            'description' => 'A molecular genetic technique that combines chromatin immunoprecipitation (ChIP) with massively parallel DNA sequencing to map the binding sites of DNA-associated proteins in a sample of cells. First, crosslinked protein-DNA complexes are isolated using ChIP. Next, the crosslinks are broken, the proteins are removed and the purified DNA is modified with adaptor oligonucleotides to facilitate massively parallel DNA sequencing. Following sequencing, the DNA sequences that are obtained can be mapped to their genomic locations.'
        ],[
            'value' => self::CLONE,
            'permissible_value' => 'CLONE',
            'long_name' => 'CLONE',
            'public_id' => 6273348,
            'concept_code' => [],
            'description' => 'Genomic clone based (hierarchical) sequencing.'
        ],
        [
            'value' => self::CLONEEND,
            'permissible_value' => 'CLONEEND',
            'long_name' => 'CLONEEND',
            'public_id' => 6273347,
            'concept_code' => [],
            'description' => 'Clone end (5\', 3\', or both) sequencing.'
        ],
        [
            'value' => self::CTS,
            'permissible_value' => 'CTS',
            'long_name' => 'CTS',
            'public_id' => 6273361,
            'concept_code' => [],
            'description' => 'Concatenated Tag Sequencing'
        ],
        [
            'value' => self::DNASE_HYPERSENSITIVITY,
            'permissible_value' => 'DNase-Hypersensitivity',
            'long_name' => 'DNase-Hypersensitivity',
            'public_id' => 6273360,
            'concept_code' => [],
            'description' => 'Sequencing of hypersensitive sites, or segments of open chromatin that are more readily cleaved by DNaseI.'
        ],
        [
            'value' => self::EST,
            'permissible_value' => 'EST',
            'long_name' => 'EST',
            'public_id' => 6273359,
            'concept_code' => [],
            'description' => 'Single pass sequencing of cDNA templates'
        ],
        [
            'value' => self::FAIRE_SEQ,
            'permissible_value' => 'FAIRE-Seq',
            'long_name' => 'FAIRE-seq',
            'public_id' => 6273358,
            'concept_code' => ['C106051'],
            'description' => 'A molecular genetic technique that depletes a biological sample of nucleosomal DNA and then subjects the non-nucleosome-associated DNA to next-generation sequencing. Since nucleosome disruption of chromatin is indicative of active sites of DNA transcription, this technique can isolate DNA sequences that are involved in transcriptional regulation. First, a sample is treated with formaldehyde to form DNA-protein crosslinks, followed by sample lysis and sonication. The processed sample is subjected to phenol/chloroform extraction and the DNA in the aqueous phase is analyzed using next-generation sequencing techniques.'
        ],
        [
            'value' => self::FINISHING,
            'permissible_value' => 'FINISHING',
            'long_name' => 'FINISHING',
            'public_id' => 6273356,
            'concept_code' => [],
            'description' => 'Sequencing intended to finish (close) gaps in existing coverage.'
        ],
        [
            'value' => self::FL_CDNA,
            'permissible_value' => 'FL-cDNA',
            'long_name' => 'FL-cDNA',
            'public_id' => 6273392,
            'concept_code' => [],
            'description' => 'Full-length sequencing of cDNA templates.'
        ],
        [
            'value' => self::HI_C,
            'permissible_value' => 'Hi-C',
            'long_name' => 'Hi-C',
            'public_id' => 6273391,
            'concept_code' => [],
            'description' => 'Chromosome Conformation Capture technique where a biotin-labeled nucleotide is incorporated at the ligation junction, enabling selective purification of chimeric DNA ligation junctions followed by deep sequencing.'
        ],
        [
            'value' => self::MBD_SEQ,
            'permissible_value' => 'MBD-Seq',
            'long_name' => 'MBD-Seq',
            'public_id' => 6273390,
            'concept_code' => [],
            'description' => 'Direct sequencing of methylated fractions sequencing strategy.'
        ],
        [
            'value' => self::MEDIP_SEQ,
            'permissible_value' => 'MeDIP-Seq',
            'long_name' => 'MeDIP-Seq',
            'public_id' => 6273389,
            'concept_code' => [],
            'description' => 'Methylated DNA Immunoprecipitation Sequencing strategy'
        ],
        [
            'value' => self::MIRNA_SEQ,
            'permissible_value' => 'miRNA-Seq',
            'long_name' => 'miRNA-Seq',
            'public_id' => 6273388,
            'concept_code' => [],
            'description' => 'Random sequencing of small miRNAs'
        ],
        [
            'value' => self::MNASE_SEQ,
            'permissible_value' => 'MNase-Seq',
            'long_name' => 'MNase-Seq',
            'public_id' => 6273387,
            'concept_code' => [],
            'description' => 'Direct sequencing following MNase digestion'
        ],
        [
            'value' => self::MRE_SEQ,
            'permissible_value' => 'MRE-Seq',
            'long_name' => 'MRE-Seq',
            'public_id' => 6273386,
            'concept_code' => [],
            'description' => 'Methylation-Sensitive Restriction Enzyme Sequencing strategy'
        ],
        [
            'value' => self::NCRNA_SEQ,
            'permissible_value' => 'ncRNA-Seq',
            'long_name' => 'ncRNA-Seq',
            'public_id' => 6273385,
            'concept_code' => [],
            'description' => 'Capture of other non-coding RNA types, including post-translation modification types such as snRNA (small nuclear RNA) or snoRNA (small nucleolar RNA), or expression regulation types such as siRNA (small interfering RNA) or piRNA/piwi/RNA (piwi-interacting RNA).'
        ],
        [
            'value' => self::OTHER,
            'permissible_value' => 'Other',
            'long_name' => 'Other Library strategy',
            'public_id' => 6273371,
            'concept_code' => [],
            'description' => 'Library strategy not listed (please include additional info in the design description )'
        ],
        [
            'value' => self::POOLCLONE,
            'permissible_value' => 'POOLCLONE',
            'long_name' => 'POOLCLONE',
            'public_id' => 6273384,
            'concept_code' => [],
            'description' => 'Shotgun of pooled clones (usually BACs and Fosmids)'
        ],
        [
            'value' => self::RAD_SEQ,
            'permissible_value' => 'RAD-Seq',
            'long_name' => 'RAD-Seq',
            'public_id' => 6273383,
            'concept_code' => [],
            'description' => 'Restriction site Associated DNA Sequencing'
        ],
        [
            'value' => self::RIP_SEQ,
            'permissible_value' => 'RIP-Seq',
            'long_name' => 'RIP-Seq',
            'public_id' => 6273382,
            'concept_code' => [],
            'description' => 'Direct sequencing of RNA immunoprecipitates (includes CLIP-Seq, HITS-CLIP and PAR-CLIP).'
        ],
        [
            'value' => self::RNA_SEQ,
            'permissible_value' => 'RNA-Seq',
            'long_name' => 'RNA-Seq',
            'public_id' => 6273381,
            'concept_code' => [],
            'description' => 'Random sequencing of whole transcriptome'
        ],
        [
            'value' => self::SELEX,
            'permissible_value' => 'SELEX',
            'long_name' => 'SELEX',
            'public_id' => 6273380,
            'concept_code' => [],
            'description' => 'Systematic Evolution of Ligands by EXponential enrichment'
        ],
        [
            'value' => self::SNATAC_SEQ,
            'permissible_value' => 'snATAC-Seq',
            'long_name' => 'Single Nucleus ATAC-Seq',
            'public_id' => 13260568,
            'concept_code' => ['C198496'],
            'description' => 'A molecular genetic technique where DNA is harvested from a single cell nucleus (sn) samples and amplified to create a genomic library. Then the library is subjected to ATAC-seq, which isolates and sequences regions rich in open chromatin.'
        ],
        [
            'value' => self::SSRNA_SEQ,
            'permissible_value' => 'ssRNA-seq',
            'long_name' => 'ssRNA-seq',
            'public_id' => 6273379,
            'concept_code' => [],
            'description' => 'Strand-specific RNA sequencing'
        ],
        [
            'value' => self::SYNTHETIC_LONG_READ,
            'permissible_value' => 'Synthetic-Long-Read',
            'long_name' => 'Synthetic-Long-Read',
            'public_id' => 6273378,
            'concept_code' => [],
            'description' => 'Reconstruction of fragments into long reads'
        ],
        [
            'value' => self::TARGETED_CAPTURE,
            'permissible_value' => 'Targeted-Capture',
            'long_name' => 'Targeted-Capture',
            'public_id' => 6273377,
            'concept_code' => [],
            'description' => 'Sequencing specific genomic regions in a high-throughput manner.'
        ],
        [
            'value' => self::TETHERED_CHROMATIN_CONFORMATION_CAPTURE,
            'permissible_value' => 'Tethered Chromatin Conformation Capture',
            'long_name' => 'Tethered Chromatin Conformation Capture',
            'public_id' => 6273376,
            'concept_code' => [],
            'description' => 'Method for genome-wide mapping of chromatin interactions.'
        ],
        [
            'value' => self::TN_SEQ,
            'permissible_value' => 'Tn-Seq',
            'long_name' => 'Tn-Seq',
            'public_id' => 6273375,
            'concept_code' => [],
            'description' => 'Sequencing from transposon insertion sites.'
        ],
        [
            'value' => self::VALIDATION,
            'permissible_value' => 'Validation',
            'long_name' => 'Validation',
            'public_id' => 7537126,
            'concept_code' => ['C16237'],
            'description' => 'The act of validating; finding or testing the truth of something.'
        ],
        [
            'value' => self::WCS,
            'permissible_value' => 'WCS',
            'long_name' => 'WCS',
            'public_id' => 6273374,
            'concept_code' => [],
            'description' => 'Random sequencing of a whole chromosome or other replicon isolated from a genome.'
        ],
        [
            'value' => self::WGA,
            'permissible_value' => 'WGA',
            'long_name' => 'WGA',
            'public_id' => 6273373,
            'concept_code' => [],
            'description' => 'Random sequencing of the whole genome following non-pcr amplification.'
        ],
        [
            'value' => self::WGS,
            'permissible_value' => 'WGS',
            'long_name' => 'Whole Genome Sequencing',
            'public_id' => 3463244,
            'concept_code' => ['C101294'],
            'description' => 'A procedure that can determine the DNA sequence for nearly the entire genome of an individual.'
        ],
        [
            'value' => self::WXS,
            'permissible_value' => 'WXS',
            'long_name' => 'WXS',
            'public_id' => 6273372,
            'concept_code' => [],
            'description' => 'Random sequencing of exonic regions selected from the genome.'
        ],
    ];
}
