<?php

use CCDI\CDE\V1\Data\DiseasePhase;
use CCDI\Transformer\V0\DiseasePhaseTransformer;
use PHPUnit\Framework\TestCase;

class DiseasePhaseTransformerTest extends TestCase
{
    public function testPostMortemInput()
    {
        $this->assertTrue(DiseasePhase::validate('Post-Mortem'));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('post-mortem', 'permissible_value')));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('POST-MORTEM', 'permissible_value')));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('Post-Mortem', 'permissible_value')));
    }

    public function testInitialDiagnosisInput()
    {
        $this->assertTrue(DiseasePhase::validate('Initial Diagnosis'));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('initial diagnosis', 'permissible_value')));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('INITIAL DIAGNOSIS', 'permissible_value')));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('Initial Diagnosis', 'permissible_value')));
    }

    public function testProgressionInput()
    {
        $this->assertTrue(DiseasePhase::validate('Progression'));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('progression', 'permissible_value')));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('PROGRESSION', 'permissible_value')));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('Progression', 'permissible_value')));
    }

    public function testRefractoryInput()
    {
        $this->assertTrue(DiseasePhase::validate('Refractory'));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('refractory', 'permissible_value')));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('REFRACTORY', 'permissible_value')));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('Refractory', 'permissible_value')));
    }

    public function testRelapseInput()
    {
        $this->assertTrue(DiseasePhase::validate('Relapse'));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('relapse', 'permissible_value')));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('RELAPSE', 'permissible_value')));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('Relapse', 'permissible_value')));
    }

    public function testRelapseProgressionInput()
    {
        $this->assertTrue(DiseasePhase::validate('Relapse/Progression'));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('relapse/progression', 'permissible_value')));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('RELAPSE/PROGRESSION', 'permissible_value')));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('Relapse/Progression', 'permissible_value')));
    }

    public function testNotReportedInput()
    {
        $this->assertTrue(DiseasePhase::validate('Not Reported'));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('not reported', 'permissible_value')));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('NOT REPORTED', 'permissible_value')));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('Not reported', 'permissible_value')));
    }

    public function testUnknownInput()
    {
        $this->assertTrue(DiseasePhase::validate('Unknown'));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('unknown', 'permissible_value')));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('UNKNOWN', 'permissible_value')));
        $this->assertTrue(DiseasePhase::validate(DiseasePhaseTransformer::transform('Unknown', 'permissible_value')));
    }
}
