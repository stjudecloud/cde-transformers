<?php

use CCDI\CDE\V1\Data\LibraryStrategy;
use CCDI\Transformer\V0\LibraryStrategyTransformer;
use PHPUnit\Framework\TestCase;

class LibraryStrategyTransformerTest extends TestCase
{
    public function testAMPLICONInput()
    {
        $this->assertTrue(LibraryStrategy::validate('AMPLICON'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('amplicon', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('AMPLICON', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('AMPLICON', 'permissible_value'))
        );
    }

    public function testATACseqInput()
    {
        $this->assertTrue(LibraryStrategy::validate('ATAC-seq'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('atac-seq', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('ATAC-SEQ', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('ATAC-seq', 'permissible_value'))
        );
    }

    public function testBisulfiteSeqInput()
    {
        $this->assertTrue(LibraryStrategy::validate('Bisulfite-Seq'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('bisulfite-seq', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('BISULFITE-SEQ', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('Bisulfite-Seq', 'permissible_value'))
        );
    }

    public function testChIAPETInput()
    {
        $this->assertTrue(LibraryStrategy::validate('ChIA-PET'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('chia-pet', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('CHIA-PET', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('ChIA-PET', 'permissible_value'))
        );
    }

    public function testChIPSeqInput()
    {
        $this->assertTrue(LibraryStrategy::validate('ChIP-Seq'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('chip-seq', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('CHIP-SEQ', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('ChIP-Seq', 'permissible_value'))
        );
    }

    public function testCLONEInput()
    {
        $this->assertTrue(LibraryStrategy::validate('CLONE'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('clone', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('CLONE', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('CLONE', 'permissible_value'))
        );
    }

    public function testCLONEENDInput()
    {
        $this->assertTrue(LibraryStrategy::validate('CLONEEND'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('cloneend', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('CLONEEND', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('CLONEEND', 'permissible_value'))
        );
    }

    public function testCTSInput()
    {
        $this->assertTrue(LibraryStrategy::validate('CTS'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('cts', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('CTS', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('CTS', 'permissible_value'))
        );
    }

    public function testDNaseHypersensitivityInput()
    {
        $this->assertTrue(LibraryStrategy::validate('DNase-Hypersensitivity'));
        $this->assertTrue(
            LibraryStrategy::validate(
                LibraryStrategyTransformer::transform('dnase-hypersensitivity', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibraryStrategy::validate(
                LibraryStrategyTransformer::transform('DNASE-HYPERSENSITIVITY', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibraryStrategy::validate(
                LibraryStrategyTransformer::transform('DNase-Hypersensitivity', 'permissible_value')
            )
        );
    }

    public function testESTInput()
    {
        $this->assertTrue(LibraryStrategy::validate('EST'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('est', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('EST', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('EST', 'permissible_value'))
        );
    }

    public function testFAIRESeqInput()
    {
        $this->assertTrue(LibraryStrategy::validate('FAIRE-Seq'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('faire-seq', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('FAIRE-SEQ', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('FAIRE-Seq', 'permissible_value'))
        );
    }

    public function testFINISHINGInput()
    {
        $this->assertTrue(LibraryStrategy::validate('FINISHING'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('finishing', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('FINISHING', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('FINISHING', 'permissible_value'))
        );
    }

    public function testFLcDNAInput()
    {
        $this->assertTrue(LibraryStrategy::validate('FL-cDNA'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('fl-cdna', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('FL-CDNA', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('FL-cDNA', 'permissible_value'))
        );
    }

    public function testHiCInput()
    {
        $this->assertTrue(LibraryStrategy::validate('Hi-C'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('hi-c', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('HI-C', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('Hi-C', 'permissible_value'))
        );
    }

    public function testMBDSeqInput()
    {
        $this->assertTrue(LibraryStrategy::validate('MBD-Seq'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('mbd-seq', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('MBD-SEQ', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('MBD-Seq', 'permissible_value'))
        );
    }

    public function testMeDIPSeqInput()
    {
        $this->assertTrue(LibraryStrategy::validate('MeDIP-Seq'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('medip-seq', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('MEDIP-SEQ', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('MeDIP-Seq', 'permissible_value'))
        );
    }

    public function testmiRNASeqInput()
    {
        $this->assertTrue(LibraryStrategy::validate('miRNA-Seq'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('mirna-seq', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('MIRNA-SEQ', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('miRNA-Seq', 'permissible_value'))
        );
    }

    public function testMNaseSeqInput()
    {
        $this->assertTrue(LibraryStrategy::validate('MNase-Seq'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('mnase-seq', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('MNASE-SEQ', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('MNase-Seq', 'permissible_value'))
        );
    }

    public function testMRESeqInput()
    {
        $this->assertTrue(LibraryStrategy::validate('MRE-Seq'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('mre-seq', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('MRE-SEQ', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('MRE-Seq', 'permissible_value'))
        );
    }

    public function testncRNASeqInput()
    {
        $this->assertTrue(LibraryStrategy::validate('ncRNA-Seq'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('ncrna-seq', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('NCRNA-SEQ', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('ncRNA-Seq', 'permissible_value'))
        );
    }

    public function testOtherInput()
    {
        $this->assertTrue(LibraryStrategy::validate('Other'));
        $this->assertTrue(
            LibraryStrategy::validate(
                LibraryStrategyTransformer::transform('other', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibraryStrategy::validate(
                LibraryStrategyTransformer::transform('OTHER', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibraryStrategy::validate(
                LibraryStrategyTransformer::transform('Other', 'permissible_value')
            )
        );
    }

    public function testPOOLCLONEInput()
    {
        $this->assertTrue(LibraryStrategy::validate('POOLCLONE'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('poolclone', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('POOLCLONE', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('POOLCLONE', 'permissible_value'))
        );
    }

    public function testRADSeqInput()
    {
        $this->assertTrue(LibraryStrategy::validate('RAD-Seq'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('rad-seq', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('RAD-SEQ', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('RAD-Seq', 'permissible_value'))
        );
    }

    public function testRIPSeqInput()
    {
        $this->assertTrue(LibraryStrategy::validate('RIP-Seq'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('rip-seq', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('RIP-SEQ', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('RIP-Seq', 'permissible_value'))
        );
    }

    public function testRNASeqInput()
    {
        $this->assertTrue(LibraryStrategy::validate('RNA-Seq'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('rna-seq', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('RNA-SEQ', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('RNA-Seq', 'permissible_value'))
        );
    }

    public function testSELEXInput()
    {
        $this->assertTrue(LibraryStrategy::validate('SELEX'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('selex', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('SELEX', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('SELEX', 'permissible_value'))
        );
    }

    public function testSingleNucleusATACSeqInput()
    {
        $this->assertTrue(LibraryStrategy::validate('snATAC-Seq'));
        $this->assertTrue(
            LibraryStrategy::validate(
                LibraryStrategyTransformer::transform('snatac-seq', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibraryStrategy::validate(
                LibraryStrategyTransformer::transform('SNATAC-SEQ', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibraryStrategy::validate(
                LibraryStrategyTransformer::transform('SnATAC-Seq', 'permissible_value')
            )
        );
    }

    public function testssRNAseqInput()
    {
        $this->assertTrue(LibraryStrategy::validate('ssRNA-seq'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('ssrna-seq', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('SSRNA-SEQ', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('ssRNA-seq', 'permissible_value'))
        );
    }

    public function testSyntheticLongReadInput()
    {
        $this->assertTrue(LibraryStrategy::validate('Synthetic-Long-Read'));
        $this->assertTrue(
            LibraryStrategy::validate(
                LibraryStrategyTransformer::transform('synthetic-long-read', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibraryStrategy::validate(
                LibraryStrategyTransformer::transform('SYNTHETIC-LONG-READ', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibraryStrategy::validate(
                LibraryStrategyTransformer::transform('Synthetic-Long-Read', 'permissible_value')
            )
        );
    }

    public function testTargetedCaptureInput()
    {
        $this->assertTrue(LibraryStrategy::validate('Targeted-Capture'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('targeted-capture', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('TARGETED-CAPTURE', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('Targeted-Capture', 'permissible_value'))
        );
    }

    public function testTetheredChromatinConformationCaptureInput()
    {
        $this->assertTrue(LibraryStrategy::validate('Tethered Chromatin Conformation Capture'));
        $this->assertTrue(
            LibraryStrategy::validate(
                LibraryStrategyTransformer::transform('tethered chromatin conformation capture', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibraryStrategy::validate(
                LibraryStrategyTransformer::transform('TETHERED CHROMATIN CONFORMATION CAPTURE', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibraryStrategy::validate(
                LibraryStrategyTransformer::transform('Tethered Chromatin Conformation Capture', 'permissible_value')
            )
        );
    }

    public function testTnSeqInput()
    {
        $this->assertTrue(LibraryStrategy::validate('Tn-Seq'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('tn-seq', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('TN-SEQ', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('Tn-Seq', 'permissible_value'))
        );
    }

    public function testValidationInput()
    {
        $this->assertTrue(LibraryStrategy::validate('Validation'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('validation', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('VALIDATION', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('Validation', 'permissible_value'))
        );
    }

    public function testWCSInput()
    {
        $this->assertTrue(LibraryStrategy::validate('WCS'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('wcs', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('WCS', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('Wcs', 'permissible_value'))
        );
    }

    public function testWGAInput()
    {
        $this->assertTrue(LibraryStrategy::validate('WGA'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('wga', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('WGA', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('Wga', 'permissible_value'))
        );
    }

    public function testWGSInput()
    {
        $this->assertTrue(LibraryStrategy::validate('WGS'));
        $this->assertTrue(
            LibraryStrategy::validate(
                LibraryStrategyTransformer::transform('wgs', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibraryStrategy::validate(
                LibraryStrategyTransformer::transform('WGS', 'permissible_value')
            )
        );
        $this->assertTrue(
            LibraryStrategy::validate(
                LibraryStrategyTransformer::transform('Wga', 'permissible_value')
            )
        );
    }

    public function testWXSInput()
    {
        $this->assertTrue(LibraryStrategy::validate('WXS'));
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('wxs', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('WXS', 'permissible_value'))
        );
        $this->assertTrue(
            LibraryStrategy::validate(LibraryStrategyTransformer::transform('Wxs', 'permissible_value'))
        );
    }
}
