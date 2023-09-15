<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\V1\Validator\ValidatorTrait;
use CCDI\Exception\Transformer\ReadOnlyArrayAccess;

enum Gender implements ArrayAccess
{
    /**
     * Use a Trait, PHP enums cannot extend classes, a Trait is the next best approach and allows for a single
     * validate method to be shared amongst all Data enums
     */
    use ValidatorTrait;

    /**
     * PHP enums can only be strings or integers, which limits the data that can be stored against each enum.
     * Therefore, the const DATA is an array of values mapped to the
     */
    case INTERSEX;
    case NOT_REPORTED;
    case UNKNOWN;
    case UNSPECIFIED;
    case FEMALE;
    case MALE;

    private const DATA = [
        [
            'value' => self::INTERSEX,
            'permissible_value' => 'Intersex',
            'long_name' => 'Intersex',
            'public_id' => 2575558,
            'concept_code' => 'C45908'
        ],
        [
            'value' => self::NOT_REPORTED,
            'permissible_value' => 'Not Reported',
            'long_name' => 'Not Reported',
            'public_id' => 2572231,
            'concept_code' => 'C43234'
        ],
        [
            'value' => self::UNKNOWN,
            'permissible_value' => 'Unknown',
            'long_name' => 'Unknown',
            'public_id' => 2575365,
            'concept_code' => 'C17998'
        ],
        [
            'value' => self::UNSPECIFIED,
            'permissible_value' => 'Unspecified',
            'long_name' => 'Unspecified',
            'public_id' => 2573360,
            'concept_code' => 'C38046'
        ],
        [
            'value' => self::FEMALE,
            'permissible_value' => 'Female',
            'long_name' => 'Female',
            'public_id' => 2575551,
            'concept_code' => 'C46110'
        ],
        [
            'value' => self::MALE,
            'permissible_value' => 'Male',
            'long_name' => 'Male',
            'public_id' => 2575550,
            'concept_code' => 'C46109'
        ],
    ];

    public function offsetExists($offset): bool
    {
        var_dump(array_column(self::DATA, 'value'));
        return false;
        //return isset();
    }

    public function offsetGet($offset): mixed
    {
        if (!$this->offsetExists($offset)) {
            return null;
        }

        return self::DATA[$this->name][$offset];
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
