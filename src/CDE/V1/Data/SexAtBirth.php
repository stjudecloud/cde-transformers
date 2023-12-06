<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\ValidatorTrait;

enum SexAtBirth implements ArrayAccess
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
    case X;
    case DONT_KNOW;
    case DECLINE_TO_ANSWER;
    case FEMALE;
    case MALE;
    case UNKNOWN;
    case INTERSEX;
    case NONE_OF_THESE_DESCRIBE_ME;
    case PREFER_NOT_TO_ANSWER;
    const CDE_ID = 7572817;
    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=7572817%20and%20ver_nr=1.0';
    const DESCRIPTION = 'A textual description of a person\'s sex at birth.';

    /**
     * An array containing all data for each enum case, the value should always be mapped to an enum case
     */
    private const DATA = [
        [
            'value' => self::X,
            'permissible_value' => 'X',
            'long_name' => 'Gender Identifier X',
            'public_id' => 14305179,
            'concept_code' => ['C200588'],
            'description' => 'A gender designation for individuals who identify themselves as not exclusively male nor female, such as non-binary, intersex or gender-non-conforming.'
        ],
        [
            'value' => self::DONT_KNOW,
            'permissible_value' => 'Don\'t know',
            'long_name' => 'Does Not Know',
            'public_id' => 3361449,
            'concept_code' => ['C67142'],
            'description' => 'The answer is not known by the person answering.'
        ],
        [
            'value' => self::DECLINE_TO_ANSWER,
            'permissible_value' => 'Decline to answer',
            'long_name' => 'Response Declined',
            'public_id' => 2577233,
            'concept_code' => ['C51024'],
            'description' => 'Used to indicate when a respondent makes a decision to not answer a question.'
        ],
        [
            'value' => self::FEMALE,
            'permissible_value' => 'Female',
            'long_name' => 'Female',
            'public_id' => 2567172,
            'concept_code' => ['C16576'],
            'description' => 'A person who belongs to the sex that normally produces ova. The term is used to indicate biological sex distinctions, or cultural gender role distinctions, or both.'
        ],
        [
            'value' => self::MALE,
            'permissible_value' => 'M',
            'long_name' => 'Male',
            'public_id' => 2567171,
            'concept_code' => ['C20197'],
            'description' => 'A person who belongs to the sex that normally produces sperm. The term is used to indicate biological sex distinctions, cultural gender role distinctions, or both.'
        ],
        [
            'value' => self::UNKNOWN,
            'permissible_value' => 'Unknown',
            'long_name' => 'Unknown',
            'public_id' => 2960664,
            'concept_code' => ['C17998'],
            'description' => 'Not known, not observed, not recorded, or refused.'
        ],
        [
            'value' => self::INTERSEX,
            'permissible_value' => 'Intersex',
            'long_name' => 'Intersex',
            'public_id' => 2575558,
            'concept_code' => ['C45908'],
            'description' => 'A person (one of unisexual specimens) who is born with genitalia and/or secondary sexual characteristics of indeterminate sex, or which combine features of both sexes.'
        ],
        [
            'value' => self::NONE_OF_THESE_DESCRIBE_ME,
            'permissible_value' => 'None of these describe me',
            'long_name' => 'None of These Describe Me',
            'public_id' => 7554789,
            'concept_code' => ['C177109'],
            'description' => 'A response indicating that an individual feels that no option listed is a good description for them.'
        ],
        [
            'value' => self::PREFER_NOT_TO_ANSWER,
            'permissible_value' => 'Prefer not to answer',
            'long_name' => 'Prefer Not to Answer',
            'public_id' => 5684650,
            'concept_code' => ['C132222'],
            'description' => 'A response indicating that an individual prefers or preferred not to answer.'
        ],
    ];
}
