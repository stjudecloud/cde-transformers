<?php

use CCDI\CDE\V1\Data\VitalStatus;
use CCDI\Transformer\V0\VitalStatusTransformer;
use PHPUnit\Framework\TestCase;

class VitalStatusTransformerTest extends TestCase
{
    public function testNotReportedInput()
    {
        $this->assertTrue(VitalStatus::validate('Not reported'));
        $this->assertTrue(VitalStatus::validate(VitalStatusTransformer::transform('not reported', 'permissible_value')));
        $this->assertTrue(VitalStatus::validate(VitalStatusTransformer::transform('NOT REPORTED', 'permissible_value')));
        $this->assertTrue(VitalStatus::validate(VitalStatusTransformer::transform('Not reported', 'permissible_value')));
    }

    public function testAliveInput()
    {
        $this->assertTrue(VitalStatus::validate('Alive'));
        $this->assertTrue(VitalStatus::validate(VitalStatusTransformer::transform('alive', 'permissible_value')));
        $this->assertTrue(VitalStatus::validate(VitalStatusTransformer::transform('ALIVE', 'permissible_value')));
        $this->assertTrue(VitalStatus::validate(VitalStatusTransformer::transform('Alive', 'permissible_value')));
    }

    public function testDeadInput()
    {
        $this->assertTrue(VitalStatus::validate('Dead'));
        $this->assertTrue(VitalStatus::validate(VitalStatusTransformer::transform('dead', 'permissible_value')));
        $this->assertTrue(VitalStatus::validate(VitalStatusTransformer::transform('DEAD', 'permissible_value')));
        $this->assertTrue(VitalStatus::validate(VitalStatusTransformer::transform('Dead', 'permissible_value')));
    }

    public function testUnknownInput()
    {
        $this->assertTrue(VitalStatus::validate('Unknown'));
        $this->assertTrue(VitalStatus::validate(VitalStatusTransformer::transform('unknown', 'permissible_value')));
        $this->assertTrue(VitalStatus::validate(VitalStatusTransformer::transform('UNKNOWN', 'permissible_value')));
        $this->assertTrue(VitalStatus::validate(VitalStatusTransformer::transform('Unknown', 'permissible_value')));
    }

    public function testUnspecifiedInput()
    {
        $this->assertTrue(VitalStatus::validate('Unspecified'));
        $this->assertTrue(VitalStatus::validate(VitalStatusTransformer::transform('unspecified', 'permissible_value')));
        $this->assertTrue(VitalStatus::validate(VitalStatusTransformer::transform('UNSPECIFIED', 'permissible_value')));
        $this->assertTrue(VitalStatus::validate(VitalStatusTransformer::transform('Unspecified', 'permissible_value')));
    }
}
