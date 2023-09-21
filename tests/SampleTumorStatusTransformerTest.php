<?php

use CCDI\CDE\V2\Data\SampleTumorStatus;
use CCDI\Transformer\V0\SampleTumorStatusTransformer;
use PHPUnit\Framework\TestCase;

class SampleTumorStatusTransformerTest extends TestCase
{
    public function testAbnormalInput()
    {
        $this->assertTrue(SampleTumorStatus::validate('Abnormal'));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('abnormal')['permissible_value']));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('ABNORMAL')['permissible_value']));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('Abnormal')['permissible_value']));
    }

    public function testNormalInput()
    {
        $this->assertTrue(SampleTumorStatus::validate('Normal'));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('normal')['permissible_value']));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('NORMAL')['permissible_value']));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('Normal')['permissible_value']));
    }

    public function testPeritumoralInput()
    {
        $this->assertTrue(SampleTumorStatus::validate('Peritumoral'));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('peritumoral')['permissible_value']));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('PERITUMORAL')['permissible_value']));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('Peritumoral')['permissible_value']));
    }

    public function testTumorInput()
    {
        $this->assertTrue(SampleTumorStatus::validate('Tumor'));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('tumor')['permissible_value']));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('TUMOR')['permissible_value']));
        $this->assertTrue(SampleTumorStatus::validate(SampleTumorStatusTransformer::transform('Tumor')['permissible_value']));
    }
}
