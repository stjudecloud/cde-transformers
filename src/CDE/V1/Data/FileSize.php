<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\PositiveNumberValidatorTrait;

enum FileSize implements ArrayAccess
{
    use PositiveNumberValidatorTrait;

    const CDE_ID = 11479876;

    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=11479876%20and%20ver_nr=1.0';

    const DESCRIPTION = 'The measure (in bytes) of how much space a data file takes up on a storage medium.';

    const CDE_VERSION = 1;

    // The permissible values for FileSize are all positive numbers and are handled by PositiveNumberValidatorTrait
    private const DATA = [];
}
