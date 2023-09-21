<?php

use CCDI\CDE\V1\Data\PreservationMethod;
use CCDI\Transformer\V0\PreservationMethodTransformer;
use PHPUnit\Framework\TestCase;

class PreservationMethodTransformerTest extends TestCase
{
    public function testCryopreservedInput()
    {
        $this->assertTrue(PreservationMethod::validate('Cryopreserved'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('cryopreserved')['permissible_value']));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('CRYOPRESERVED')['permissible_value']));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Cryopreserved')['permissible_value']));
    }

    public function testFfpeInput()
    {
        $this->assertTrue(PreservationMethod::validate('FFPE'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('ffpe')['permissible_value']));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('FFPE')['permissible_value']));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Ffpe')['permissible_value']));
    }

    public function testFreshInput()
    {
        $this->assertTrue(PreservationMethod::validate('Fresh'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('fresh')['permissible_value']));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('FRESH')['permissible_value']));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Fresh')['permissible_value']));
    }

    public function testFrozenInput()
    {
        $this->assertTrue(PreservationMethod::validate('Frozen'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('frozen')['permissible_value']));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('FROZEN')['permissible_value']));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Frozen')['permissible_value']));
    }

    public function testOctInput()
    {
        $this->assertTrue(PreservationMethod::validate('OCT'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('oct')['permissible_value']));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('OCT')['permissible_value']));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Oct')['permissible_value']));
    }

    public function testSnapFrozenInput()
    {
        $this->assertTrue(PreservationMethod::validate('Snap Frozen'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('snap frozen')['permissible_value']));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('SNAP FROZEN')['permissible_value']));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Snap Frozen')['permissible_value']));
    }
}
