<?php

use CCDI\CDE\V1\Data\SpecimenMolecular;
use CCDI\Transformer\V0\SpecimenMolecularTransformer;
use PHPUnit\Framework\TestCase;

class SpecimenMolecularTransformerTest extends TestCase
{
    public function test_cfdna_input()
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

    public function test_ctdna_input()
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

    public function test_dna_input()
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

    public function test_mirna_input()
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

    public function test_mrna_input()
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

    public function test_notreported_input()
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

    public function test_nucleric_rna_input()
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

    public function test_protetin_input()
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

    public function test_rna_input()
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

    public function test_total_rna_input()
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

    public function test_unknown_input()
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
