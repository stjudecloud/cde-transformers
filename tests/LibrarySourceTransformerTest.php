<?php

use CCDI\CDE\V1\Data\LibrarySource;
use CCDI\Transformer\V0\LibrarySourceTransformer;
use PHPUnit\Framework\TestCase;

class LibrarySourceTransformerTest extends TestCase
{
    public function testGenomicDNAInput()
    {
        $this->assertTrue(LibrarySource::validate('Genomic DNA'));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('genomic dna', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('GENOMIC DNA', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('Genomic DNA', 'permissible_value')));
    }

    public function testBulkCellsInput()
    {
        $this->assertTrue(LibrarySource::validate('Bulk cells'));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('bulk cells', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('BULK CELLS', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('Bulk Cells', 'permissible_value')));
    }

    public function testBulkNucleiInput()
    {
        $this->assertTrue(LibrarySource::validate('Bulk nuclei'));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('bulk nuclei', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('BULK NUCLEI', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('Bulk Nuclei', 'permissible_value')));
    }

    public function testBulkTissueInput()
    {
        $this->assertTrue(LibrarySource::validate('Bulk tissue'));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('bulk tissue', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('BULK TISSUE', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('Bulk Tissue', 'permissible_value')));
    }

    public function testRNAInput()
    {
        $this->assertTrue(LibrarySource::validate('RNA'));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('rna', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('RNA', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('Rna', 'permissible_value')));
    }

    public function testSingleCellsInput()
    {
        $this->assertTrue(LibrarySource::validate('Single-cells'));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('single-cells', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('SINGLE-Cells', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('Single-cells', 'permissible_value')));
    }

    public function testSingleNucleiInput()
    {
        $this->assertTrue(LibrarySource::validate('Single-nuclei'));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('single-nuclei', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('SINGLE-NUCLEI', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('Single-Nuclei', 'permissible_value')));
    }

    public function testGenomicSingleCellInput()
    {
        $this->assertTrue(LibrarySource::validate('Genomic Single Cell'));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('genomic single cell', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('GENOMIC SINGLE CELL', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('Genomic Single Cell', 'permissible_value')));
    }

    public function testOtherInput()
    {
        $this->assertTrue(LibrarySource::validate('Other'));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('other', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('OTHER', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('Other', 'permissible_value')));
    }

    public function testMetagenomicInput()
    {
        $this->assertTrue(LibrarySource::validate('Metagenomic'));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('metagenomic', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('METAGENOMIC', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('Metagenomic', 'permissible_value')));
    }

    public function testMetatranscriptomicInput()
    {
        $this->assertTrue(LibrarySource::validate('Metatranscriptomic'));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('metatranscriptomic', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('METATRANSCRIPTOMIC', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('Metatranscriptomic', 'permissible_value')));
    }

    public function testSyntheticInput()
    {
        $this->assertTrue(LibrarySource::validate('Synthetic'));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('synthetic', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('SYNTHETIC', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('Synthetic', 'permissible_value')));
    }

    public function testTranscriptomicInput()
    {
        $this->assertTrue(LibrarySource::validate('Transcriptomic'));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('transcriptomic', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('TRANSCRIPTOMIC', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('Transcriptomic', 'permissible_value')));
    }

    public function testTranscriptomicSingleCellInput()
    {
        $this->assertTrue(LibrarySource::validate('Transcriptomic Single Cell'));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('transcriptomic single cell', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('TRANSCRIPTOMIC SINGLE CELL', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('Transcriptomic Single Cell', 'permissible_value')));
    }

    public function testViralRNAInput()
    {
        $this->assertTrue(LibrarySource::validate('Viral RNA'));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('viral rna', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('Viral RNA', 'permissible_value')));
        $this->assertTrue(LibrarySource::validate(LibrarySourceTransformer::transform('VIRAL RNA', 'permissible_value')));
    }
}
