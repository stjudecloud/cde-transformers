<?php

use CCDI\CDE\V1\Data\LibrarySelection;
use CCDI\Transformer\V0\LibrarySelectionTransformer;
use PHPUnit\Framework\TestCase;

class LibrarySelectionTransformerTest extends TestCase
{
    public function testMNaseInput()
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

    public function testNotapplicableInput()
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

    public function testAffinityEnrichmentInput()
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

    public function testmiRNASizeFractionationInput()
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

    public function testPolyTEnrichmentInput()
    {
        $this->assertTrue(LibrarySelection::validate('Poly-T Enrichment'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('poly-t enrichment', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('POLY-T ENRICHMENT', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('Poly-T Enrichment', 'permissible_value'))
        );
    }

    public function testrRNADepletionInput()
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

    public function test5methylcytidineantibodyInput()
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

    public function testCAGEInput()
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

    public function testcDNAInput()
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

    public function testcDNAoligo_dTInput()
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

    public function testcDNArandomprimingInput()
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

    public function testCFHInput()
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

    public function testCFMInput()
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

    public function testCFSInput()
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

    public function testCFTInput()
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

    public function testChIPInput()
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

    public function testDNAseInput()
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

    public function testHMPRInput()
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

    public function testHybridSelectionInput()
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

    public function testInverserRNAInput()
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

    public function testMBD2proteinmethylCpGbindingdomainInput()
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

    public function testMDAInput()
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

    public function testMFInput()
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

    public function testMSLLInput()
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

    public function testOligodTInput()
    {
        $this->assertTrue(LibrarySelection::validate('Oligo-dT'));
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('oligo-dt', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('OLIGO-DT', 'permissible_value'))
        );
        $this->assertTrue(
            LibrarySelection::validate(LibrarySelectionTransformer::transform('Oligo-dT', 'permissible_value'))
        );
    }

    public function testOtherInput()
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

    public function testPadlockprobescapturemethodInput()
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

    public function testPCRInput()
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

    public function testPolyAInput()
    {
        $this->assertTrue(LibrarySelection::validate('PolyA'));
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('polyA', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('POLYA', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibrarySelection::validate(
                LibrarySelectionTransformer::transform('PolyA', 'permissible_value')
            )
        );
    }

    public function testRACEInput()
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

    public function testRandomInput()
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

    public function testRandomPCRInput()
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

    public function testReducedRepresentationInput()
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

    public function testRepeatfractionationInput()
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

    public function testRestrictionDigestInput()
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

    public function testRTPCRInput()
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

    public function testSizefractionationInput()
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

    public function testUnspecifiedInput()
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
