<?php

namespace CCDI\CDE\V1\Validator;

trait ValidatorTrait
{
    public static function validate($permissibleValue): bool
    {
        foreach (self::cases() as $case) {
            if (isset(self::DATA[$case->name]['permissible_value'])) {
                if ($permissibleValue === self::DATA[$case->name]['permissible_value']) {
                    return true;
                }
            }
        }

        return false;
    }
}