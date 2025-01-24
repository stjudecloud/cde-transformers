<?php

use CCDI\CDE\V1\Data\LibrarySelection;
use CCDI\Transformer\V0\LibrarySelectionTransformer;
use PHPUnit\Framework\TestCase;

class LibrarySelectionTransformerTest extends TestCase
{
    public function test_m_nase_input()
    {
        $this->assertTrue(LibrarySelection::validate('MNase'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('mnase', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('MNASE', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('MNase', 'permissible_value'))
        );
    }

    public function test_notapplicable_input()
    {
        $this->assertTrue(LibrarySelection::validate('Not applicable'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('not applicable', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('NOT APPLICABLE', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('Not applicable', 'permissible_value'))
        );
    }

    public function test_affinity_enrichment_input()
    {
        $this->assertTrue(LibrarySelection::validate('Affinity Enrichment'));
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('affinity enrichment', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('AFFINITY ENRICHMENT', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('Affinity Enrichment', 'permissible_value')
            )
        );
    }

    public function testmi_rna_size_fractionation_input()
    {
        $this->assertTrue(LibrarySelection::validate('miRNA Size Fractionation'));
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('mirna size fractionation', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('MIRNA SIZE FRACTIONATION', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('miRNA Size Fractionation', 'permissible_value')
            )
        );
    }

    public function test_poly_a_enriched_input()
    {
        $this->assertTrue(LibrarySelection::validate('Poly-A Enriched Genomic Library'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('Poly-a Enriched Genomic Library', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('Poly-A Enriched Genomic Library', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('POLY-A ENRICHED Genomic Library', 'permissible_value'))
        );
    }

    public function testr_rna_depletion_input()
    {
        $this->assertTrue(LibrarySelection::validate('rRNA Depletion'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('rrna depletion', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('RRNA DEPLETION', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('rRNA Depletion', 'permissible_value'))
        );
    }

    public function test5methylcytidineantibody_input()
    {
        $this->assertTrue(LibrarySelection::validate('5-methylcytidine antibody'));
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('5-methylcytidine antibody', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('5-METHYLCYTIDINE ANTIBODY', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('5-methylcytidine antibody', 'permissible_value')
            )
        );
    }

    public function test_cage_input()
    {
        $this->assertTrue(LibrarySelection::validate('CAGE'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('cage', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('CAGE', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('CAGE', 'permissible_value'))
        );
    }

    public function testc_dna_input()
    {
        $this->assertTrue(LibrarySelection::validate('cDNA'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('cdna', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('CDNA', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('cDNA', 'permissible_value'))
        );
    }

    public function testc_dn_aoligo_d_t_input()
    {
        $this->assertTrue(LibrarySelection::validate('cDNA oligo_dT'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('cdna oligo_dt', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('CDNA OLIGO_DT', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('cDNA oligo_dT', 'permissible_value'))
        );
    }

    public function testc_dn_arandompriming_input()
    {
        $this->assertTrue(LibrarySelection::validate('cDNA random priming'));
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('cdna random priming', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('CDNA RANDOM PRIMING', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('cDNA random priming', 'permissible_value')
            )
        );
    }

    public function test_cfh_input()
    {
        $this->assertTrue(LibrarySelection::validate('CF-H'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('cf-h', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('CF-H', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('CF-H', 'permissible_value'))
        );
    }

    public function test_cfm_input()
    {
        $this->assertTrue(LibrarySelection::validate('CF-M'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('cf-m', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('CF-M', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('CF-M', 'permissible_value'))
        );
    }

    public function test_cfs_input()
    {
        $this->assertTrue(LibrarySelection::validate('CF-S'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('cf-s', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('CF-S', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('CF-S', 'permissible_value'))
        );
    }

    public function test_cft_input()
    {
        $this->assertTrue(LibrarySelection::validate('CF-T'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('cf-t', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('CF-T', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('CF-T', 'permissible_value'))
        );
    }

    public function test_ch_ip_input()
    {
        $this->assertTrue(LibrarySelection::validate('ChIP'));
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('chip', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('CHIP', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('ChIP', 'permissible_value')
            )
        );
    }

    public function test_dn_ase_input()
    {
        $this->assertTrue(LibrarySelection::validate('DNAse'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('dnase', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('DNASE', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('DNAse', 'permissible_value'))
        );
    }

    public function test_hmpr_input()
    {
        $this->assertTrue(LibrarySelection::validate('HMPR'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('hmpr', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('HMPR', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('HMPR', 'permissible_value'))
        );
    }

    public function test_hybrid_selection_input()
    {
        $this->assertTrue(LibrarySelection::validate('Hybrid Selection'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('hybrid selection', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('HYBRID SELECTION', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('Hybrid Selection', 'permissible_value'))
        );
    }

    public function test_inverser_rna_input()
    {
        $this->assertTrue(LibrarySelection::validate('Inverse rRNA'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('inverse rrna', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('INVERSE RRNA', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('Inverse rRNA', 'permissible_value'))
        );
    }

    public function test_mb_d2proteinmethyl_cp_gbindingdomain_input()
    {
        $this->assertTrue(LibrarySelection::validate('MBD2 protein methyl-CpG binding domain'));
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('mbd2 protein methyl-cpg binding domain', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('MBD2 PROTEIN METHYL-CPG BINDING DOMAIN', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('MBD2 protein methyl-CpG binding domain', 'permissible_value')
            )
        );
    }

    public function test_mda_input()
    {
        $this->assertTrue(LibrarySelection::validate('MDA'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('mda', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('MDA', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('MDA', 'permissible_value'))
        );
    }

    public function test_mf_input()
    {
        $this->assertTrue(LibrarySelection::validate('MF'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('mf', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('Mf', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('MF', 'permissible_value'))
        );
    }

    public function test_msll_input()
    {
        $this->assertTrue(LibrarySelection::validate('MSLL'));
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('msll', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('Msll', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('MSLL', 'permissible_value')
            )
        );
    }

    public function test_other_input()
    {
        $this->assertTrue(LibrarySelection::validate('Other'));
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('other', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('OTHER', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('Other', 'permissible_value')
            )
        );
    }

    public function test_padlockprobescapturemethod_input()
    {
        $this->assertTrue(LibrarySelection::validate('Padlock probes capture method'));
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('padlock probes capture method', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('PADLOCK PROBES CAPTURE METHOD', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('Padlock probes capture method', 'permissible_value')
            )
        );
    }

    public function test_pcr_input()
    {
        $this->assertTrue(LibrarySelection::validate('PCR'));
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('pcr', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('PCR', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('Pcr', 'permissible_value')
            )
        );
    }

    public function test_race_input()
    {
        $this->assertTrue(LibrarySelection::validate('RACE'));
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('race', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('RACE', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('Race', 'permissible_value')
            )
        );
    }

    public function test_random_input()
    {
        $this->assertTrue(LibrarySelection::validate('Random'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('random', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('RANDOM', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('Random', 'permissible_value'))
        );
    }

    public function test_random_pcr_input()
    {
        $this->assertTrue(LibrarySelection::validate('Random PCR'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('random pcr', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('RANDOM PCR', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('Random PCR', 'permissible_value'))
        );
    }

    public function test_reduced_representation_input()
    {
        $this->assertTrue(LibrarySelection::validate('Reduced Representation'));
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('reduced representation', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('REDUCED REPRESENTATION', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('Reduced Representation', 'permissible_value')
            )
        );
    }

    public function test_repeatfractionation_input()
    {
        $this->assertTrue(LibrarySelection::validate('Repeat fractionation'));
        $this->assertTrue(
            LibrarySelection::validate(
                \CCDI\Transformer\V0\LibrarySelectionTransformer::transform('repeat fractionation', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('REPEAT FRACTIONATION', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('Repeat fractionation', 'permissible_value')
            )
        );
    }

    public function test_restriction_digest_input()
    {
        $this->assertTrue(LibrarySelection::validate('Restriction Digest'));
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform(
                    'restriction digest',
                    'permissible_value'
                )
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform(
                    'RESTRICTION DIGEST',
                    'permissible_value'
                )
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform(
                    'Restriction Digest',
                    'permissible_value'
                )
            )
        );
    }

    public function test_rtpcr_input()
    {
        $this->assertTrue(LibrarySelection::validate('RT-PCR'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('rt-pcr', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('RT-PCR', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('RT-PCR', 'permissible_value'))
        );
    }

    public function test_sizefractionation_input()
    {
        $this->assertTrue(LibrarySelection::validate('Size fractionation'));
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('size fractionation', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('SIZE FRACTIONATION', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('Size fractionation', 'permissible_value')
            )
        );
    }

    public function test_unspecified_input()
    {
        $this->assertTrue(LibrarySelection::validate('Unspecified'));
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('unspecified', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('UNSPECIFIED', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('Unspecified', 'permissible_value')
            )
        );
    }
}
