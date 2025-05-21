<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\StringValidatorTrait;

enum SampleId implements ArrayAccess
{
    use StringValidatorTrait;

    const CDE_ID = 15100774;

    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=15100774%20and%20ver_nr=1.0';

    const DESCRIPTION = 'A unique string of characters used to identify a specimen.';

    const CDE_VERSION = 1;

    // The permissible values for SampleId are a string of characters
    private const DATA = [];
}
