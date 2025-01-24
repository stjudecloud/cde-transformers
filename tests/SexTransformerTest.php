<?php

use CCDI\CDE\V1\Data\Sex;
use CCDI\Transformer\V0\SexTransformer;
use PHPUnit\Framework\TestCase;

class SexTransformerTest extends TestCase
{
    public function test_male_input()
    {
        $this->assertTrue(Sex::validate('M'));
        $this->assertTrue(Sex::validate(SexTransformer::transform('MALE', 'permissible_value')));
        $this->assertTrue(Sex::validate(SexTransformer::transform('male', 'permissible_value')));
        $this->assertTrue(Sex::validate(SexTransformer::transform('m', 'permissible_value')));
        $this->assertTrue(Sex::validate(SexTransformer::transform('M', 'permissible_value')));
    }

    public function test_female_input()
    {
        $this->assertTrue(Sex::validate('F'));
        $this->assertTrue(Sex::validate(SexTransformer::transform('FEMALE', 'permissible_value')));
        $this->assertTrue(Sex::validate(SexTransformer::transform('female', 'permissible_value')));
        $this->assertTrue(Sex::validate(SexTransformer::transform('f', 'permissible_value')));
        $this->assertTrue(Sex::validate(SexTransformer::transform('F', 'permissible_value')));
    }

    public function test_unknown_input()
    {
        $this->assertFalse(Sex::validate('Dog'));
        $this->assertFalse(Sex::validate(SexTransformer::transform('Cat')));
        $this->assertFalse(Sex::validate(SexTransformer::transform('Hill')));
        $this->assertFalse(Sex::validate(SexTransformer::transform('x')));
        $this->assertFalse(Sex::validate(SexTransformer::transform('X')));
    }
}
