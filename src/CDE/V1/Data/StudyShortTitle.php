<?php

namespace CCDI\CDE\V1\Data;

use ArrayAccess;
use CCDI\CDE\Validator\StringValidatorTrait;

enum StudyShortTitle implements ArrayAccess
{
    use StringValidatorTrait;

    const CDE_ID = 11459812;

    const URL = 'https://cadsr.cancer.gov/onedata/dmdirect/NIH/NCI/CO/CDEDD?filter=CDEDD.ITEM_ID=11459812%20and%20ver_nr=1.0';

    const DESCRIPTION = 'The acronym or abbreviated form of the title for a research data collection.';

    const CDE_VERSION = 1;

    // No permissible values for StudyShortTitle
    private const DATA = [];
}
