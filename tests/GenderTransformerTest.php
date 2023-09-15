<?php

use CCDI\CDE\V1\Data\Gender;
use CCDI\Transformer\V0\GenderTransformer;
use PHPUnit\Framework\TestCase;

class GenderTransformerTest extends TestCase
{
    public function testMaleInput()
    {
        $this->assertTrue(Gender::validate('Male'));
        $this->assertTrue(Gender::validate(GenderTransformer::transform('MALE')['permissible_value']));
        $this->assertTrue(Gender::validate(GenderTransformer::transform('male')['permissible_value']));
        $this->assertTrue(Gender::validate(GenderTransformer::transform('m')['permissible_value']));
        $this->assertTrue(Gender::validate(GenderTransformer::transform('M')['permissible_value']));
    }

    public function testFemaleInput()
    {
        $this->assertTrue(Gender::validate('Female'));
        $this->assertTrue(Gender::validate(GenderTransformer::transform('FEMALE')['permissible_value']));
        $this->assertTrue(Gender::validate(GenderTransformer::transform('female')['permissible_value']));
        $this->assertTrue(Gender::validate(GenderTransformer::transform('f')['permissible_value']));
        $this->assertTrue(Gender::validate(GenderTransformer::transform('F')['permissible_value']));
    }

    public function testUnknownInput()
    {
        $this->assertFalse(Gender::validate('Dog'));
        $this->assertFalse(Gender::validate(GenderTransformer::transform('Cat')));
        $this->assertFalse(Gender::validate(GenderTransformer::transform('Hill')));
        $this->assertFalse(Gender::validate(GenderTransformer::transform('x')));
        $this->assertFalse(Gender::validate(GenderTransformer::transform('X')));
    }
}

