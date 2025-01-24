<?php

use CCDI\CDE\V1\Data\Race;
use CCDI\Transformer\V0\RaceTransformer;
use PHPUnit\Framework\TestCase;

class RaceTransformerTest extends TestCase
{
    public function test_not_allowed_input()
    {
        $this->assertTrue(Race::validate('Not allowed to collect'));
        $this->assertTrue(Race::validate(RaceTransformer::transform('not allowed', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('NOT ALLOWED', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Not Allowed', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Not Allowed To Collect', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('not allowed to collect', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('NOT ALLOWED TO COLLECT', 'permissible_value')));
    }

    public function test_not_reported_input()
    {
        $this->assertTrue(Race::validate('Not Reported'));
        $this->assertTrue(Race::validate(RaceTransformer::transform('not reported', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('NOT REPORTED', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Not reported', 'permissible_value')));
    }

    public function test_unknown_input()
    {
        $this->assertTrue(Race::validate('Unknown'));
        $this->assertTrue(Race::validate(RaceTransformer::transform('unknown', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('UNKNOWN', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Unknown', 'permissible_value')));
    }

    public function test_white_input()
    {
        $this->assertTrue(Race::validate('White'));
        $this->assertTrue(Race::validate(RaceTransformer::transform('white', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('WHITE', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('White', 'permissible_value')));
    }

    public function test_black_african_input()
    {
        $this->assertTrue(Race::validate('Black or African American'));
        $this->assertTrue(Race::validate(RaceTransformer::transform('black or african american', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('BLACK OR AFRICAN AMERICAN', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Black or African American', 'permissible_value')));
    }

    public function test_black_input()
    {
        $this->assertTrue(Race::validate(RaceTransformer::transform('black', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('BLACK', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Black', 'permissible_value')));
    }

    public function test_african_american_input()
    {
        $this->assertTrue(Race::validate(RaceTransformer::transform('african american', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('AFRICAN AMERICAN', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('African American', 'permissible_value')));
    }

    public function test_asian_input()
    {
        $this->assertTrue(Race::validate('Asian'));
        $this->assertTrue(Race::validate(RaceTransformer::transform('asian', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('ASIAN', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Asian', 'permissible_value')));
    }

    public function test_native_hawaiian_pacific_islander_input()
    {
        $this->assertTrue(Race::validate('Native Hawaiian or other Pacific Islander'));
        $this->assertTrue(Race::validate(RaceTransformer::transform('native hawaiian or other pacific islander', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('NATIVE HAWAIIAN OR OTHER PACIFIC ISLANDER', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Native Hawaiian or other Pacific Islander', 'permissible_value')));
    }

    public function test_other_pacific_islander_input()
    {
        $this->assertTrue(Race::validate(RaceTransformer::transform('other pacific islander', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('OTHER PACIFIC ISLANDER', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('other Pacific Islander', 'permissible_value')));
    }

    public function test_pacific_islander_input()
    {
        $this->assertTrue(Race::validate(RaceTransformer::transform('pacific islander', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('PACIFIC ISLANDER', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Pacific Islander', 'permissible_value')));
    }

    public function test_native_hawaiian_input()
    {
        $this->assertTrue(Race::validate(RaceTransformer::transform('native hawaiian', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('NATIVE HAWAIIAN', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Native Hawaiian', 'permissible_value')));
    }

    public function test_american_indian_alaska_native_input()
    {
        $this->assertTrue(Race::validate('American Indian or Alaska Native'));
        $this->assertTrue(Race::validate(RaceTransformer::transform('american indian or alaska native', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('AMERICAN INDIAN OR ALASKA NATIVE', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('American Indian or Alaska Native', 'permissible_value')));
    }

    public function test_american_indian_input()
    {
        $this->assertTrue(Race::validate(RaceTransformer::transform('american indian', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('AMERICAN INDIAN', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('American Indian', 'permissible_value')));
    }

    public function test_alaska_native_input()
    {
        $this->assertTrue(Race::validate(RaceTransformer::transform('alaska native', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('ALASKA NATIVE', 'permissible_value')));
        $this->assertTrue(Race::validate(RaceTransformer::transform('Alaska Native', 'permissible_value')));
    }
}
