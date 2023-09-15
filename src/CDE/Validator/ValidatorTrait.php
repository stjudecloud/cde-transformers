<?php

namespace CCDI\CDE\Validator;

use CCDI\Exception\Transformer\ReadOnlyArrayAccess;

trait ValidatorTrait
{
    /**
     * Given a possible permissible value, check that it is valid against the permissible values given in Trait's child
     */
    public static function validate(mixed $permissibleValue, string $permissibleValueKey = 'permissible_value'): bool
    {
        foreach (self::getPermissibleValues() as $data) {
            if (isset($data[$permissibleValueKey])) {
                if ($permissibleValue === $data[$permissibleValueKey]) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * By default, we assume an Enum is being used and self::cases() is used to obtain an error of permissible values.
     * The Trait's child could overwrite this method and use some a different array, other than the one provided from
     * self::cases()
     */
    public static function getPermissibleValues(): array
    {
        if (self::DATA) {
            return self::DATA;
        }

        return [];
    }


    public function offsetExists($offset): bool
    {
        return $this->offsetGet($offset) ?? false;
    }

    public function offsetGet($offset): mixed
    {
        return array_reduce(self::DATA, function ($carry, $item) use ($offset) {
            if ($carry) {
                return $carry;
            }

            if ($item['value']->name === $this->name) {
                return $item[$offset] ?? null;
            }

            return null;
        });
    }

    /**
     * The const DATA cannot be modified
     *
     * @throws ReadOnlyArrayAccess
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        throw new ReadOnlyArrayAccess();
    }

    /**
     * The const DATA cannot be modified
     * @throws ReadOnlyArrayAccess
     */
    public function offsetUnset(mixed $offset): void
    {
        throw new ReadOnlyArrayAccess();
    }
}