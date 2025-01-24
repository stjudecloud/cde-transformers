<?php

use CCDI\CDE\V1\Data\TumorClassification;
use CCDI\Transformer\V0\TumorClassificationTransformer;
use PHPUnit\Framework\TestCase;

class TumorClassificationTransformerTest extends TestCase
{
    public function test_metastatic_input()
    {
        $this->assertTrue(TumorClassification::validate('Metastatic'));
        $this->assertTrue(TumorClassification::validate(TumorClassificationTransformer::transform('metastatic', 'permissible_value')));
        $this->assertTrue(TumorClassification::validate(TumorClassificationTransformer::transform('METASTATIC', 'permissible_value')));
        $this->assertTrue(TumorClassification::validate(TumorClassificationTransformer::transform('Metastatic', 'permissible_value')));
    }

    public function test_primary_input()
    {
        $this->assertTrue(TumorClassification::validate('Primary'));
        $this->assertTrue(TumorClassification::validate(TumorClassificationTransformer::transform('primary', 'permissible_value')));
        $this->assertTrue(TumorClassification::validate(TumorClassificationTransformer::transform('PRIMARY', 'permissible_value')));
        $this->assertTrue(TumorClassification::validate(TumorClassificationTransformer::transform('Primary', 'permissible_value')));
    }

    public function test_regional_input()
    {
        $this->assertTrue(TumorClassification::validate('Regional'));
        $this->assertTrue(TumorClassification::validate(TumorClassificationTransformer::transform('regional', 'permissible_value')));
        $this->assertTrue(TumorClassification::validate(TumorClassificationTransformer::transform('REGIONAL', 'permissible_value')));
        $this->assertTrue(TumorClassification::validate(TumorClassificationTransformer::transform('Regional', 'permissible_value')));
    }

    public function test_not_reported_input()
    {
        $this->assertTrue(TumorClassification::validate('Not Reported'));
        $this->assertTrue(TumorClassification::validate(TumorClassificationTransformer::transform('not reported', 'permissible_value')));
        $this->assertTrue(TumorClassification::validate(TumorClassificationTransformer::transform('NOT REPORTED', 'permissible_value')));
        $this->assertTrue(TumorClassification::validate(TumorClassificationTransformer::transform('Not reported', 'permissible_value')));
    }

    public function test_unknown_input()
    {
        $this->assertTrue(TumorClassification::validate('Unknown'));
        $this->assertTrue(TumorClassification::validate(TumorClassificationTransformer::transform('unknown', 'permissible_value')));
        $this->assertTrue(TumorClassification::validate(TumorClassificationTransformer::transform('UNKNOWN', 'permissible_value')));
        $this->assertTrue(TumorClassification::validate(TumorClassificationTransformer::transform('Unknown', 'permissible_value')));
    }
}
