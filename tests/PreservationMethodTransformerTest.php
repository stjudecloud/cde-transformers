<?php

use CCDI\CDE\V1\Data\PreservationMethod;
use CCDI\Transformer\V0\PreservationMethodTransformer;
use PHPUnit\Framework\TestCase;

class PreservationMethodTransformerTest extends TestCase
{
    public function testMinus80DegCInput()
    {
        $this->assertTrue(PreservationMethod::validate('-80 Deg C'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('-80 deg c', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('-80 DEG C', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('-80 Deg C', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('-80', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('-80°', 'permissible_value')));
    }

    public function testFfpeInput()
    {
        $this->assertTrue(PreservationMethod::validate('FFPE'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('ffpe', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('FFPE', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Ffpe', 'permissible_value')));
    }

    public function testFrozenInput()
    {
        $this->assertTrue(PreservationMethod::validate('Frozen'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('frozen', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('FROZEN', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Frozen', 'permissible_value')));
    }

    public function testLNTwoInput()
    {
        $this->assertTrue(PreservationMethod::validate('LN2'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('ln2', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('LN2', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('lN2', 'permissible_value')));
    }
}
