<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum LibrarySelection implements ArrayAccess
{
    use ValidatorTrait;

    case MNASE;
    case NOT_APPLICABLE;
    case AFFINITY_ENRICHMENT;
    case MIRNA_SIZE_FRACTIONATION;
    case POLY_T_ENRICHMENT;
    case RRNA_DEPLETION;
    case FIVE_METHYLCYTIDINE_ANTIBODY;
    case CAGE;
    case CDNA;
    case CDNA_OLIGO_DT;
    case CDNA_RANDOM_PRIMING;
    case CF_H;
    case CF_M;
    case CF_S;
    case CF_T;
    case CHIP;
    case DNASE;
    case HMPR;
    case HYBRID_SELECTION;
    case INVERSE_RRNA;
    case MBD2_PROTEIN_METHYL_CPG_BINDING_DOMAIN;
    case MDA;
    case MF;
    case MSLL;
    case OLIGO_DT;
    case OTHER;
    case PADLOCK_PROBES_CAPTURE_METHOD;
    case PCR;
    case POLYA;
    case RACE;
    case RANDOM;
    case RANDOM_PCR;
    case REDUCED_REPRESENTATION;
    case REPEAT_FRACTIONATION;
    case RESTRICTION_DIGEST;
    case RT_PCR;
    case SIZE_FRACTIONATION;
    case UNSPECIFIED;

    const CDE_ID = 6347743;

    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=6347743%20and%20ver_nr=1.0';

    const DESCRIPTION = 'The type of systematic actions performed to select or enrich DNA fragments used in analysis by high-throughput sequencing.';

    const CDE_VERSION = 1;

    private const DATA = [
        [
            'value' => self::MNASE,
            'permissible_value' => 'MNase',
            'long_name' => 'MNase Sequencing',
            'public_id' => 6287911,
            'concept_code' => ['C106056'],
            'description' => 'A molecular genetic technique where genome-wide sequencing is performed on chromosomal DNA that is resistant to treatment with micrococcal nuclease. This technique identifies nucleosomal DNA sequences.',
        ],
        [
            'value' => self::NOT_APPLICABLE,
            'permissible_value' => 'Not applicable',
            'long_name' => 'Not Applicable',
            'public_id' => 5682946,
            'concept_code' => ['C48660'],
            'description' => 'Determination of a value is not relevant in the current context.',
        ],
        [
            'value' => self::AFFINITY_ENRICHMENT,
            'permissible_value' => 'Affinity Enrichment',
            'long_name' => 'Affinity Enrichment',
            'public_id' => 7601843,
            'concept_code' => ['C20604', 'C154307'],
            'description' => 'The strength of noncovalent chemical binding between two substances as measured by the dissociation constant of the complex. Any of various techniques designed to select or increase a target item in a mixed sample.',
        ],
        [
            'value' => self::MIRNA_SIZE_FRACTIONATION,
            'permissible_value' => 'miRNA Size Fractionation',
            'long_name' => 'miRNA Size Fractionated Genomic Library',
            'public_id' => 7537067,
            'concept_code' => ['C163991'],
            'description' => 'A RNA library that has been fractionated by size exclusion methods to enrich for microRNAs.',
        ],
        [
            'value' => self::POLY_T_ENRICHMENT,
            'permissible_value' => 'Poly-T Enrichment',
            'long_name' => 'Poly-T Enriched Genomic Library',
            'public_id' => 7537071,
            'concept_code' => ['C163988'],
            'description' => 'A genomic library where the sample has been subjected to enrichment via binding to immobilized poly-T oligonucleotides, which will preferentially isolate polyadenylated (poly-A) RNAs.',
        ],
        [
            'value' => self::RRNA_DEPLETION,
            'permissible_value' => 'rRNA Depletion',
            'long_name' => 'rRNA Depleted Genomic Library',
            'public_id' => 7537069,
            'concept_code' => ['C163990'],
            'description' => 'A genomic library where the sample has been subjected to a ribosomal RNA depletion step before it is amplified.',
        ],
        [
            'value' => self::FIVE_METHYLCYTIDINE_ANTIBODY,
            'permissible_value' => '5-methylcytidine antibody',
            'long_name' => '5-methylcytidine antibody',
            'public_id' => 6287905,
            'concept_code' => [],
            'description' => 'Selection of methylated DNA fragments using an antibody raised against 5-methylcytosine or 5-methylcytidine (m5C).',
        ],
        [
            'value' => self::CAGE,
            'permissible_value' => 'CAGE',
            'long_name' => 'Cap-analysis gene expression',
            'public_id' => 6287903,
            'concept_code' => [],
            'description' => 'Cap-analysis gene expression',
        ],
        [
            'value' => self::CDNA,
            'permissible_value' => 'cDNA',
            'long_name' => 'cDNA',
            'public_id' => 2581950,
            'concept_code' => ['C324'],
            'description' => 'Single-stranded complementary DNA synthesized from an RNA template by the action of RNA-dependent DNA polymerase. cDNA (i.e., complementary DNA, not circular DNA, not C-DNA) is used in a variety of molecular cloning experiments as well as serving as a specific hybridization probe.',
        ],
        [
            'value' => self::CDNA_OLIGO_DT,
            'permissible_value' => 'cDNA oligo_dT',
            'long_name' => 'cDNA_oligo_dT',
            'public_id' => 6287899,
            'concept_code' => [],
            'description' => 'Primers consist of a stretch of 12 18 deoxythymidines that anneal to poly(A) tails of eukaryotic mRNA.',
        ],
        [
            'value' => self::CDNA_RANDOM_PRIMING,
            'permissible_value' => 'cDNA random priming',
            'long_name' => 'cDNA random priming',
            'public_id' => 6287898,
            'concept_code' => [],
            'description' => 'Oligodeoxyribonucleotides (mostly hexamers) used to prepare labeled DNA probes.',
        ],
        [
            'value' => self::CF_H,
            'permissible_value' => 'CF-H',
            'long_name' => 'Cot-filtered highly repetitive',
            'public_id' => 6287871,
            'concept_code' => [],
            'description' => 'Cot-filtered highly repetitive genomic DNA',
        ],
        [
            'value' => self::CF_M,
            'permissible_value' => 'CF-M',
            'long_name' => 'Cot-filtered moderately repetitive',
            'public_id' => 6287018,
            'concept_code' => [],
            'description' => 'Cot-filtered moderately repetitive genomic DNA',
        ],
        [
            'value' => self::CF_S,
            'permissible_value' => 'CF-S',
            'long_name' => 'Cot-filtered single',
            'public_id' => 6287019,
            'concept_code' => [],
            'description' => 'Cot-filtered single/low-copy genomic DNA',
        ],
        [
            'value' => self::CF_T,
            'permissible_value' => 'CF-T',
            'long_name' => 'Cot-filtered theoretical single-copy',
            'public_id' => 6287870,
            'concept_code' => [],
            'description' => 'Cot-filtered theoretical single-copy genomic DNA',
        ],
        [
            'value' => self::CHIP,
            'permissible_value' => 'ChIP',
            'long_name' => 'Chromatin Immunoprecipitation',
            'public_id' => 6287017,
            'concept_code' => ['C106048'],
            'description' => 'A technique that utilizes immunoprecipitation to find protein-DNA interactions in a biological sample. First, the sample is treated causing the formation of protein-chromatin crosslinks. Then, the sample is sheared to separate individual protein-DNA complexes. Finally, an antibody directed against a protein of interest is applied and the protein-DNA complexes are immunoprecipitated.',
        ],
        [
            'value' => self::DNASE,
            'permissible_value' => 'DNAse',
            'long_name' => 'MNase Sequencing',
            'public_id' => 6287911,
            'concept_code' => ['C106056'],
            'description' => 'A molecular genetic technique where genome-wide sequencing is performed on chromosomal DNA that is resistant to treatment with micrococcal nuclease. This technique identifies nucleosomal DNA sequences.',
        ],
        [
            'value' => self::HMPR,
            'permissible_value' => 'HMPR',
            'long_name' => 'HMPR',
            'public_id' => 6287021,
            'concept_code' => [],
            'description' => 'Hypo-methylated partial restriction digest',
        ],
        [
            'value' => self::HYBRID_SELECTION,
            'permissible_value' => 'Hybrid Selection',
            'long_name' => 'Hybrid Selection',
            'public_id' => 6287909,
            'concept_code' => [],
            'description' => 'Selection by hybridization in array or solution.',
        ],
        [
            'value' => self::INVERSE_RRNA,
            'permissible_value' => 'Inverse rRNA',
            'long_name' => 'Inverse rRNA',
            'public_id' => 6287897,
            'concept_code' => [],
            'description' => 'Depletion of ribosomal RNA by oligo hybridization.',
        ],
        [
            'value' => self::MBD2_PROTEIN_METHYL_CPG_BINDING_DOMAIN,
            'permissible_value' => 'MBD2 protein methyl-CpG binding domain',
            'long_name' => 'MBD2 protein methyl-CpG binding domain',
            'public_id' => 6287904,
            'concept_code' => [],
            'description' => 'Enrichment by methyl-CpG binding domain.',
        ],
        [
            'value' => self::MDA,
            'permissible_value' => 'MDA',
            'long_name' => 'MDA',
            'public_id' => 6287869,
            'concept_code' => [],
            'description' => 'Multiple displacement amplification',
        ],
        [
            'value' => self::MF,
            'permissible_value' => 'MF',
            'long_name' => 'Methyl Filtrated',
            'public_id' => 6287020,
            'concept_code' => [],
            'description' => 'Methyl Filtrated',
        ],
        [
            'value' => self::MSLL,
            'permissible_value' => 'MSLL',
            'long_name' => 'Methylation Spanning Linking Library',
            'public_id' => 6287868,
            'concept_code' => [],
            'description' => 'Methylation Spanning Linking Library',
        ],
        [
            'value' => self::OLIGO_DT,
            'permissible_value' => 'Oligo-dT',
            'long_name' => 'Oligo-dT',
            'public_id' => 6287896,
            'concept_code' => [],
            'description' => 'Enrichment of messenger RNA (mRNA) by hybridization to Oligo-dT.',
        ],
        [
            'value' => self::OTHER,
            'permissible_value' => 'Other',
            'long_name' => 'Other Sequencing Library Method',
            'public_id' => 6287874,
            'concept_code' => ['C17649', 'C148073', 'C71460'],
            'description' => 'Different than the one(s) previously specified or mentioned.: A collection of double stranded DNA fragments flanked by oligonucleotide sequence adapters to enable their analysis by high-throughput sequencing.: A means, manner of procedure, or systematic course of actions that have to be performed in order to accomplish a particular goal.',
        ],
        [
            'value' => self::PADLOCK_PROBES_CAPTURE_METHOD,
            'permissible_value' => 'Padlock probes capture method',
            'long_name' => 'Padlock probes capture method',
            'public_id' => 6287900,
            'concept_code' => [],
            'description' => 'Circularized oligonucleotide probes',
        ],
        [
            'value' => self::PCR,
            'permissible_value' => 'PCR',
            'long_name' => 'Polymerase Chain Reaction',
            'public_id' => 3234683,
            'concept_code' => ['C17003'],
            'description' => 'A method for amplifying a DNA base sequence using multiple rounds of heat denaturation of the DNA and annealing of oligonucleotide primers complementary to flanking regions in the presence of a heat-stable polymerase. This results in duplication of the targeted DNA region. Newly synthesized DNA strands can subsequently serve as additional templates for the same primer sequences, so that successive rounds of primer annealing, strand elongation, and dissociation produce rapid and highly specific amplification of the desired sequence. PCR also can be used to detect the existence of the defined sequence in a DNA sample.',
        ],
        [
            'value' => self::POLYA,
            'permissible_value' => 'PolyA',
            'long_name' => 'RNA Polyadenylation',
            'public_id' => 2581947,
            'concept_code' => ['C18947'],
            'description' => '1. The process of formation of poly(adenylic acid). 2. The covalent modification of a macromolecule (e.g., mRNA) by the formation of a polyadenylyl moiety covalently linked to the macromolecule.',
        ],
        [
            'value' => self::RACE,
            'permissible_value' => 'RACE',
            'long_name' => 'Rapid Amplification of cDNA Ends',
            'public_id' => 6287902,
            'concept_code' => [],
            'description' => 'Rapid amplification of cDNA ends.',
        ],  [
            'value' => self::RANDOM,
            'permissible_value' => 'Random',
            'long_name' => 'Random',
            'public_id' => 6287023,
            'concept_code' => [],
            'description' => 'Random selection by shearing or other method',
        ],
        [
            'value' => self::RANDOM_PCR,
            'permissible_value' => 'Random PCR',
            'long_name' => 'Random PCR',
            'public_id' => 6287022,
            'concept_code' => [],
            'description' => 'Source material was selected by randomly generated primers',
        ],
        [
            'value' => self::REDUCED_REPRESENTATION,
            'permissible_value' => 'Reduced Representation',
            'long_name' => 'Reduced Representation',
            'public_id' => 6287908,
            'concept_code' => [],
            'description' => 'Reproducible genomic subsets, often generated by restriction fragment size selection, containing a manageable number of loci to facilitate re-sampling.',
        ],
        [
            'value' => self::REPEAT_FRACTIONATION,
            'permissible_value' => 'Repeat fractionation',
            'long_name' => 'Repeat fractionation',
            'public_id' => 6287912,
            'concept_code' => [],
            'description' => 'Selection for less repetitive (and more gene rich) sequence through Cot filtration (CF) or other fractionation techniques based on DNA kinetics.',
        ],
        [
            'value' => self::RESTRICTION_DIGEST,
            'permissible_value' => 'Restriction Digest',
            'long_name' => 'Multiple Complete Digest Restriction Fragment Mapping',
            'public_id' => 6287907,
            'concept_code' => ['C116160'],
            'description' => 'A DNA mapping technique based on complete restriction enzyme digestion of a set of overlapping clones that provides highly redundant coverage of the mapping target.',
        ],
        [
            'value' => self::RT_PCR,
            'permissible_value' => 'RT-PCR',
            'long_name' => 'RT-PCR',
            'public_id' => 3121570,
            'concept_code' => ['C18136'],
            'description' => 'RT-PCR is short for reverse transcriptase-polymerase chain reaction. It is a technique in which an RNA strand is first transcribed into a DNA complement and then subjected to PCR amplification. Transcribing an RNA strand into a DNA complement is termed reverse transcription and is done by the enzyme reverse transcriptase.',
        ],
        [
            'value' => self::SIZE_FRACTIONATION,
            'permissible_value' => 'Size fractionation',
            'long_name' => 'Size fractionation',
            'public_id' => 6287901,
            'concept_code' => [],
            'description' => 'Physical selection of size appropriate targets.',
        ],
        [
            'value' => self::UNSPECIFIED,
            'permissible_value' => 'Unspecified',
            'long_name' => 'Unspecified',
            'public_id' => 6287913,
            'concept_code' => ['C38046', 'C148073', 'C71460'],
            'description' => 'Not stated explicitly or in detail.: A collection of double stranded DNA fragments flanked by oligonucleotide sequence adapters to enable their analysis by high-throughput sequencing.: A means, manner of procedure, or systematic course of actions that have to be performed in order to accomplish a particular goal.',
        ],
    ];
}
