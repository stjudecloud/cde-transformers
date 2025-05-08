<?php

use CCDI\CDE\V2\Data\TumorGrade;
use CCDI\Transformer\V0\TumorGradeTransformer;
use PHPUnit\Framework\TestCase;

class TumorGradeTransformerTest extends TestCase
{
    public function test_not_allowed_input()
    {
        $this->assertTrue(TumorGrade::validate('Not Applicable'));
        $this->assertTrue(TumorGrade::validate(TumorGradeTransformer::transform('not applicable', 'permissible_value')));
        $this->assertTrue(TumorGrade::validate(TumorGradeTransformer::transform('NOT APPLICABLE', 'permissible_value')));
        $this->assertTrue(TumorGrade::validate(TumorGradeTransformer::transform('Not Applicable', 'permissible_value')));
        $this->assertTrue(TumorGrade::validate(TumorGradeTransformer::transform('Not applicable', 'permissible_value')));
        $this->assertTrue(TumorGrade::validate(TumorGradeTransformer::transform('not applicable', 'permissible_value')));
        $this->assertTrue(TumorGrade::validate(TumorGradeTransformer::transform('NOT applicable', 'permissible_value')));
    }

    public function test_g1_low_grade_input()
    {
        $this->assertTrue(TumorGrade::validate('G1 Low Grade'));
        $this->assertTrue(TumorGrade::validate(TumorGradeTransformer::transform('G1 low grade', 'permissible_value')));
        $this->assertTrue(TumorGrade::validate(TumorGradeTransformer::transform('G1 LOW GRADE', 'permissible_value')));
        $this->assertTrue(TumorGrade::validate(TumorGradeTransformer::transform('G1 Low Grade', 'permissible_value')));
    }

    public function test_not_reported_input()
    {
        $this->assertTrue(TumorGrade::validate('Not Reported'));
        $this->assertTrue(TumorGrade::validate(TumorGradeTransformer::transform('not reported', 'permissible_value')));
        $this->assertTrue(TumorGrade::validate(TumorGradeTransformer::transform('NOT REPORTED', 'permissible_value')));
        $this->assertTrue(TumorGrade::validate(TumorGradeTransformer::transform('Not Reported', 'permissible_value')));
    }

    public function test_unknown_input()
    {
        $this->assertTrue(TumorGrade::validate('Unknown'));
        $this->assertTrue(TumorGrade::validate(TumorGradeTransformer::transform('unknown', 'permissible_value')));
        $this->assertTrue(TumorGrade::validate(TumorGradeTransformer::transform('UNKNOWN', 'permissible_value')));
        $this->assertTrue(TumorGrade::validate(TumorGradeTransformer::transform('Unknown', 'permissible_value')));
    }
}
