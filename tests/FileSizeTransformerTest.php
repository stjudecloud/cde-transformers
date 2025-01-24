<?php

use CCDI\CDE\V1\Data\FileSize;
use CCDI\Transformer\V0\FileSizeTransformer;
use PHPUnit\Framework\TestCase;

class FileSizeTransformerTest extends TestCase
{
    public function test_file_size_input()
    {
        $this->assertTrue(FileSize::validate(1234234234));
        $this->assertTrue(FileSize::validate(1));
        $this->assertTrue(FileSize::validate(FileSizeTransformer::transform(99999)));
        $this->assertTrue(FileSize::validate(FileSizeTransformer::transform('123123')));
        $this->assertFalse(FileSize::validate(FileSizeTransformer::transform('123a123')));
        $this->assertFalse(FileSize::validate(FileSizeTransformer::transform('XXXX')));
        $this->assertFalse(FileSize::validate(-11));
        $this->assertFalse(FileSize::validate('-4545411'));
    }
}
