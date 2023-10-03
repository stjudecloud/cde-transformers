<?php

use CCDI\CDE\V1\Data\Race;
use CCDI\Transformer\V0\RaceTransformer;
use PHPUnit\Framework\TestCase;

class RaceTransformerTest extends TestCase
{
    public function testNotAllowedInput()
    {
        $this->assertTrue(Race::validate('Not allowed to collect'));
        $this->assertTrue(Race::validate(RaceTransformer::transform('not allowed', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('NOT ALLOWED', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Not Allowed', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Not Allowed To Collect', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('not allowed to collect', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('NOT ALLOWED TO COLLECT', 'permissible_value')));
    }

    public function testNotReportedInput()
    {
        $this->assertTrue(Race::validate('Not Reported'));
        $this->assertTrue(Race::validate(RaceTransformer::transform('not reported', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('NOT REPORTED', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Not reported', 'permissible_value')));
    }

    public function testUnknownInput()
    {
        $this->assertTrue(Race::validate('Unknown'));
        $this->assertTrue(Race::validate(RaceTransformer::transform('unknown', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('UNKNOWN', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Unknown', 'permissible_value')));
    }

    public function testWhiteInput()
    {
        $this->assertTrue(Race::validate('White'));
        $this->assertTrue(Race::validate(RaceTransformer::transform('white', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('WHITE', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('White', 'permissible_value')));
    }

    public function testBlackAfricanInput()
    {
        $this->assertTrue(Race::validate('Black or African American'));
        $this->assertTrue(Race::validate(RaceTransformer::transform('black or african american', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('BLACK OR AFRICAN AMERICAN', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Black or African American', 'permissible_value')));
    }

    public function testBlackInput()
    {
        $this->assertTrue(Race::validate(RaceTransformer::transform('black', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('BLACK', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Black', 'permissible_value')));
    }

    public function testAfricanAmericanInput()
    {
        $this->assertTrue(Race::validate(RaceTransformer::transform('african american', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('AFRICAN AMERICAN', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('African American', 'permissible_value')));
    }

    public function testAsianInput()
    {
        $this->assertTrue(Race::validate('Asian'));
        $this->assertTrue(Race::validate(RaceTransformer::transform('asian', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('ASIAN', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Asian', 'permissible_value')));
    }

    public function testNativeHawaiianPacificIslanderInput()
    {
        $this->assertTrue(Race::validate('Native Hawaiian or other Pacific Islander'));
        $this->assertTrue(Race::validate(RaceTransformer::transform('native hawaiian or other pacific islander', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('NATIVE HAWAIIAN OR OTHER PACIFIC ISLANDER', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Native Hawaiian or other Pacific Islander', 'permissible_value')));
    }

    public function testOtherPacificIslanderInput()
    {
        $this->assertTrue(Race::validate(RaceTransformer::transform('other pacific islander', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('OTHER PACIFIC ISLANDER', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('other Pacific Islander', 'permissible_value')));
    }

    public function testPacificIslanderInput()
    {
        $this->assertTrue(Race::validate(RaceTransformer::transform('pacific islander', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('PACIFIC ISLANDER', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Pacific Islander', 'permissible_value')));
    }

    public function testNativeHawaiianInput()
    {
        $this->assertTrue(Race::validate(RaceTransformer::transform('native hawaiian', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('NATIVE HAWAIIAN', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Native Hawaiian', 'permissible_value')));
    }

    public function testAmericanIndianAlaskaNativeInput()
    {
        $this->assertTrue(Race::validate('American Indian or Alaska Native'));
        $this->assertTrue(Race::validate(RaceTransformer::transform('american indian or alaska native', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('AMERICAN INDIAN OR ALASKA NATIVE', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('American Indian or Alaska Native', 'permissible_value')));
    }

    public function testAmericanIndianInput()
    {
        $this->assertTrue(Race::validate(RaceTransformer::transform('american indian', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('AMERICAN INDIAN', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('American Indian', 'permissible_value')));
    }

    public function testAlaskaNativeInput()
    {
        $this->assertTrue(Race::validate(RaceTransformer::transform('alaska native', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('ALASKA NATIVE', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Alaska Native', 'permissible_value')));
    }
}

