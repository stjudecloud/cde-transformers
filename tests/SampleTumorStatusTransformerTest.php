<?php

use CCDI\CDE\V1\Data\SampleTumorStatus;
use CCDI\Transformer\V0\SampleTumorStatusTransformer;
use PHPUnit\Framework\TestCase;

class SampleTumorStatusTransformerTest extends TestCase
{
    public function test_normal_input()
    {
        $this->assertTrue(SampleTumorStatus::validate('Normal'));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('normal', 'permissible_value')));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('NORMAL', 'permissible_value')));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('Normal', 'permissible_value')));
    }

    public function test_peritumoral_input()
    {
        $this->assertTrue(SampleTumorStatus::validate('Peritumoral'));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('peritumoral', 'permissible_value')));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('PERITUMORAL', 'permissible_value')));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('Peritumoral', 'permissible_value')));
    }

    public function test_tumor_input()
    {
        $this->assertTrue(SampleTumorStatus::validate('Tumor'));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('tumor', 'permissible_value')));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('TUMOR', 'permissible_value')));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('Tumor', 'permissible_value')));
    }
}
