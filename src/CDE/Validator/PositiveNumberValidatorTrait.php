<?php

namespace CCDI\CDE\Validator;

use CCDI\CDE\Exception\ReadOnlyArrayAccess;

trait PositiveNumberValidatorTrait
{
    /**
     * Given a possible permissible value, check that it is a positive number
     */
    public static function validate(mixed $value): bool
    {
        return is_numeric($value) && $value >= 0;
    }

    public static function getPermissibleValues(): array
    {
        return self::DATA;
    }
    
    public function offsetGet($offset): mixed
    {
        return null;
    }

    public function offsetExists($offset): bool
    {
        return false;
    }

    /**
     * @throws ReadOnlyArrayAccess
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        throw new ReadOnlyArrayAccess();
    }

    /**
     * @throws ReadOnlyArrayAccess
     */
    public function offsetUnset(mixed $offset): void
    {
        throw new ReadOnlyArrayAccess();
    }
}
