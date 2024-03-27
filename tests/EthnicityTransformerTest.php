<?php

use CCDI\CDE\V2\Data\Ethnicity;
use CCDI\Transformer\V0\EthnicityTransformer;
use PHPUnit\Framework\TestCase;

class EthnicityTransformerTest extends TestCase
{
    public function testNotAllowedInput()
    {
        $this->assertTrue(Ethnicity::validate('Not allowed to collect'));
        $this->assertTrue(Ethnicity::validate(EthnicityTransformer::transform('not allowed', 'permissible_value')));
        $this->assertTrue(Ethnicity::validate(EthnicityTransformer::transform('NOT ALLOWED', 'permissible_value')));
        $this->assertTrue(Ethnicity::validate(EthnicityTransformer::transform('Not Allowed', 'permissible_value')));
        $this->assertTrue(Ethnicity::validate(EthnicityTransformer::transform('Not Allowed To Collect', 'permissible_value')));
        $this->assertTrue(Ethnicity::validate(EthnicityTransformer::transform('not allowed to collect', 'permissible_value')));
        $this->assertTrue(Ethnicity::validate(EthnicityTransformer::transform('NOT ALLOWED TO COLLECT', 'permissible_value')));
    }

    public function testHispanicOrLatinoInput()
    {
        $this->assertTrue(Ethnicity::validate('Hispanic or Latino'));
        $this->assertTrue(Ethnicity::validate(EthnicityTransformer::transform('hispanic or latino', 'permissible_value')));
        $this->assertTrue(Ethnicity::validate(EthnicityTransformer::transform('HISPANIC OR LATINO', 'permissible_value')));
        $this->assertTrue(Ethnicity::validate(EthnicityTransformer::transform('Hispanic or Latino', 'permissible_value')));
    }

    public function testNotHispanicOrLatinoInput()
    {
        $this->assertTrue(Ethnicity::validate('Not Hispanic or Latino'));
        $this->assertTrue(Ethnicity::validate(EthnicityTransformer::transform('not hispanic or latino', 'permissible_value')));
        $this->assertTrue(Ethnicity::validate(EthnicityTransformer::transform('NOT HISPANIC OR LATINO', 'permissible_value')));
        $this->assertTrue(Ethnicity::validate(EthnicityTransformer::transform('Not Hispanic or Latino', 'permissible_value')));
    }

    public function testNotReportedInput()
    {
        $this->assertTrue(Ethnicity::validate('Not reported'));
        $this->assertTrue(Ethnicity::validate(EthnicityTransformer::transform('not reported', 'permissible_value')));
        $this->assertTrue(Ethnicity::validate(EthnicityTransformer::transform('NOT REPORTED', 'permissible_value')));
        $this->assertTrue(Ethnicity::validate(EthnicityTransformer::transform('Not reported', 'permissible_value')));
    }

    public function testUnknownInput()
    {
        $this->assertTrue(Ethnicity::validate('Unknown'));
        $this->assertTrue(Ethnicity::validate(EthnicityTransformer::transform('unknown', 'permissible_value')));
        $this->assertTrue(Ethnicity::validate(EthnicityTransformer::transform('UNKNOWN', 'permissible_value')));
        $this->assertTrue(Ethnicity::validate(EthnicityTransformer::transform('Unknown', 'permissible_value')));
    }
}
