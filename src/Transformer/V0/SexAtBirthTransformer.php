<?php

namespace CCDI\Transformer\V0;

use CCDI\CDE\V1\Data\SexAtBirth;

/**
 * @method static string|null|SexAtBirth transform($permissibleValue, $key = null)
 */
class SexAtBirthTransformer extends AbstractTransformer
{
    protected static array $MAPPINGS = [
        [
            'value' => SexAtBirth::UNKNOWN,
            'regex' => '/^(unknown)$/i',
        ],
        [
            'value' => SexAtBirth::FEMALE,
            'regex' => '/^(f|female)$/i',
        ],
        [
            'value' => SexAtBirth::MALE,
            'regex' => '/^(m|male)$/i',
        ],
        [
            'value' => SexAtBirth::INTERSEX,
            'regex' => '/^(intersex)$/i',
        ],
        [
            'value' => SexAtBirth::X,
            'regex' => '/^(x)$/i',
        ],
        [
            'value' => SexAtBirth::DONT_KNOW,
            'regex' => '/^(does not know|doesn\'t know)$/i',
        ],
        [
            'value' => SexAtBirth::DECLINE_TO_ANSWER,
            'regex' => '/^(response declined|decline to answer|declined to answer)$/i',
        ],
        [
            'value' => SexAtBirth::NONE_OF_THESE_DESCRIBE_ME,
            'regex' => '/^(none of these describe me)$/i',
        ],
        [
            'value' => SexAtBirth::PREFER_NOT_TO_ANSWER,
            'regex' => '/^(prefer not to answer)$/i',
        ],
    ];
}
