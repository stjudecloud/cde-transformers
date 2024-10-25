<?php

use CCDI\CDE\V1\Data\SpecimenMolecular;
use CCDI\Transformer\V0\SpecimenMolecularTransformer;
use PHPUnit\Framework\TestCase;

class SpecimenMolecularTransformerTest extends TestCase
{
    public function testCFDNAInput()
    {
        $string = 'cfDNA';
        $this->assertTrue(SpecimenMolecular::validate($string));
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtolower($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtoupper($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform($string, 'permissible_value'))
        );
    }

    public function testCTDNAInput()
    {
        $string = 'ctDNA';
        $this->assertTrue(SpecimenMolecular::validate($string));
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtolower($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtoupper($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform($string, 'permissible_value'))
        );
    }

    public function testDNAInput()
    {
        $string = 'DNA';
        $this->assertTrue(SpecimenMolecular::validate($string));
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtolower($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtoupper($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform($string, 'permissible_value'))
        );
    }

    public function testMIRNAInput()
    {
        $string = 'miRNA';
        $this->assertTrue(SpecimenMolecular::validate($string));
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtolower($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtoupper($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform($string, 'permissible_value'))
        );
    }

    public function testMRNAInput()
    {
        $string = 'mRNA';
        $this->assertTrue(SpecimenMolecular::validate($string));
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtolower($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtoupper($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform($string, 'permissible_value'))
        );
    }

    public function testNotreportedInput()
    {
        $string = 'Not Reported';
        $this->assertTrue(SpecimenMolecular::validate($string));
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtolower($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtoupper($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform($string, 'permissible_value'))
        );
    }

    public function testNuclericRNAInput()
    {
        $string = 'Nucleic RNA';
        $this->assertTrue(SpecimenMolecular::validate($string));
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtolower($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtoupper($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform($string, 'permissible_value'))
        );
    }

    public function testProtetinInput()
    {
        $string = 'Protein';
        $this->assertTrue(SpecimenMolecular::validate($string));
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtolower($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtoupper($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform($string, 'permissible_value'))
        );
    }

    public function testRNAInput()
    {
        $string = 'RNA';
        $this->assertTrue(SpecimenMolecular::validate($string));
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtolower($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtoupper($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform($string, 'permissible_value'))
        );
    }

    public function testTotalRNAInput()
    {
        $string = 'Total RNA';
        $this->assertTrue(SpecimenMolecular::validate($string));
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtolower($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtoupper($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform($string, 'permissible_value'))
        );
    }

    public function testUnknownInput()
    {
        $string = 'Unknown';
        $this->assertTrue(SpecimenMolecular::validate($string));
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtolower($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform(strtoupper($string), 'permissible_value'))
        );
        $this->assertTrue(
            SpecimenMolecular::validate(SpecimenMolecularTransformer::transform($string, 'permissible_value'))
        );
    }
}
