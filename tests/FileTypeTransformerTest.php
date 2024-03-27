<?php

use CCDI\CDE\V1\Data\FileType;
use CCDI\Transformer\V0\FileTypeTransformer;
use PHPUnit\Framework\TestCase;

class FileTypeTransformerTest extends TestCase
{
    public function testBedpeFormatInput()
    {
        $this->assertTrue(FileType::validate('BEDPE Format'));
        $this->assertTrue(FileType::validate(FileTypeTransformer::transform('bedpe format', 'permissible_value')));
        $this->assertTrue(FileType::validate(FileTypeTransformer::transform('BEDPE FORMAT', 'permissible_value')));
        $this->assertTrue(FileType::validate(FileTypeTransformer::transform('BEDPE Format', 'permissible_value')));
    }

    public function testPlainTextInput()
    {
        $this->assertTrue(FileType::validate('TXT'));
        $this->assertTrue(FileType::validate(FileTypeTransformer::transform('plain text data format', 'permissible_value')));
        $this->assertTrue(FileType::validate(FileTypeTransformer::transform('PLAIN TEXT DATA FORMAT', 'permissible_value')));
        $this->assertTrue(FileType::validate(FileTypeTransformer::transform('Plain Text Data Format', 'permissible_value')));
        $this->assertTrue(FileType::validate(FileTypeTransformer::transform('txt', 'permissible_value')));
    }

    public function testVCFInput()
    {
        $this->assertTrue(FileType::validate('VCF'));
        $this->assertTrue(FileType::validate(FileTypeTransformer::transform('vcf', 'permissible_value')));
        $this->assertTrue(FileType::validate(FileTypeTransformer::transform('VCF', 'permissible_value')));
        $this->assertTrue(FileType::validate(FileTypeTransformer::transform('vCf', 'permissible_value')));
    }
}
