<?php

use CCDI\CDE\V2\Data\TissueType;
use CCDI\Transformer\V0\TissueTypeTransformer;
use PHPUnit\Framework\TestCase;

class TissueTypeTransformerTest extends TestCase
{
    public function test_abnormal_input()
    {
        $this->assertTrue(TissueType::validate('Abnormal'));
        $this->assertTrue(TissueType::validate(TissueTypeTransformer::transform('abnormal', 'permissible_value')));
        $this->assertTrue(TissueType::validate(TissueTypeTransformer::transform('ABNORMAL', 'permissible_value')));
        $this->assertTrue(TissueType::validate(TissueTypeTransformer::transform('Abnormal', 'permissible_value')));
    }

    public function test_normal_input()
    {
        $this->assertTrue(TissueType::validate('Normal'));
        $this->assertTrue(TissueType::validate(TissueTypeTransformer::transform('normal', 'permissible_value')));
        $this->assertTrue(TissueType::validate(TissueTypeTransformer::transform('NORMAL', 'permissible_value')));
        $this->assertTrue(TissueType::validate(TissueTypeTransformer::transform('Normal', 'permissible_value')));
    }

    public function test_peritumoral_input()
    {
        $this->assertTrue(TissueType::validate('Peritumoral'));
        $this->assertTrue(TissueType::validate(TissueTypeTransformer::transform('peritumoral', 'permissible_value')));
        $this->assertTrue(TissueType::validate(TissueTypeTransformer::transform('PERITUMORAL', 'permissible_value')));
        $this->assertTrue(TissueType::validate(TissueTypeTransformer::transform('Peritumoral', 'permissible_value')));
    }

    public function test_tumor_input()
    {
        $this->assertTrue(TissueType::validate('Tumor'));
        $this->assertTrue(TissueType::validate(TissueTypeTransformer::transform('tumor', 'permissible_value')));
        $this->assertTrue(TissueType::validate(TissueTypeTransformer::transform('TUMOR', 'permissible_value')));
        $this->assertTrue(TissueType::validate(TissueTypeTransformer::transform('Tumor', 'permissible_value')));
    }
}
