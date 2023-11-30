<?php

use CCDI\CDE\V1\Data\SexAtBirth;
use CCDI\Transformer\V0\SexAtBirthTransformer;
use PHPUnit\Framework\TestCase;

class SexAtBirthTransformerTest extends TestCase
{
    public function testMaleInput()
    {
        $this->assertTrue(SexAtBirth::validate('M'));
        $this->assertTrue(SexAtBirth::validate(SexAtBirthTransformer::transform('MALE', 'permissible_value')));
        $this->assertTrue(SexAtBirth::validate(SexAtBirthTransformer::transform('male', 'permissible_value')));
        $this->assertTrue(SexAtBirth::validate(SexAtBirthTransformer::transform('m', 'permissible_value')));
        $this->assertTrue(SexAtBirth::validate(SexAtBirthTransformer::transform('M', 'permissible_value')));
    }

    public function testFemaleInput()
    {
        $this->assertTrue(SexAtBirth::validate('F'));
        $this->assertTrue(SexAtBirth::validate(SexAtBirthTransformer::transform('FEMALE', 'permissible_value')));
        $this->assertTrue(SexAtBirth::validate(SexAtBirthTransformer::transform('female', 'permissible_value')));
        $this->assertTrue(SexAtBirth::validate(SexAtBirthTransformer::transform('f', 'permissible_value')));
        $this->assertTrue(SexAtBirth::validate(SexAtBirthTransformer::transform('F', 'permissible_value')));
    }

    public function testUnknownInput()
    {
        $this->assertFalse(SexAtBirth::validate('Dog'));
        $this->assertFalse(SexAtBirth::validate(SexAtBirthTransformer::transform('Cat')));
        $this->assertFalse(SexAtBirth::validate(SexAtBirthTransformer::transform('Hill')));
        $this->assertFalse(SexAtBirth::validate(SexAtBirthTransformer::transform('x')));
        $this->assertFalse(SexAtBirth::validate(SexAtBirthTransformer::transform('X')));
    }
}

