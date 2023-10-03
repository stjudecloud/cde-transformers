<?php

namespace CCDI\CDE\Validator;

use CCDI\CDE\Exception\ReadOnlyArrayAccess;

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
     * Return private const DATA if it's present, there is no way of guaranteeing a class using this Trait has the DATA
     * const, so we must first check for self:DATA before attempting to return DATA.
     */
    public static function getPermissibleValues(): array
    {
        if (self::DATA) {
            return self::DATA;
        }

        return [];
    }

    /**
     * All Data classes (src/CDE/Vx/Data/) implement ArrayAccess, this enables array access against the Object's DATA
     * const directly, without the need to use DATA.
     *
     * E.g. this is possible to directly access the long_name for FEMALE from Data Gender::FEMALE['long_name']
     *
     * The alternative would be need to use Gender::Data and iterate over the elements to find Gender::FEMALE
     *
     * @param $offset
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
        return array_reduce(self::getPermissibleValues(), function ($carry, $item) use ($offset) {
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
     * As offsetGet(), but returns a boolean based on if the $offset is present
     */
    public function offsetExists($offset): bool
    {
        return $this->offsetGet($offset) ?? false;
    }

    /**
     * The const DATA cannot be modified
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