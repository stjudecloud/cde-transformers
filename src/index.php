<?php

use CCDI\CDE\V1\Data\Sex;
use CCDI\CDE\V1\Data\Race;
use CCDI\Demo\AcmeHospital\AcmeSexAtBirthTransformer;
use CCDI\Transformer\V0\SexAtBirthTransformer;
use CCDI\Transformer\V0\RaceTransformer;

require_once 'vendor/autoload.php';

// Check if the exact value 'Black or African American' is valid against the default Race CDE Class
if (Race::validate('Black or African American')) {
    echo "Valid\n";
} else {
    echo "Invalid\n";
}

// Check that the transformation of 'Black' is valid against the default Race CDE Class
if (Race::validate(RaceTransformer::transform('Black', 'permissible_value'))) {
    echo "Valid\n";
} else {
    echo "Invalid\n";
}

// Check 'Female' against the default Sex CDE Class
if (SexAtBirth::validate('Female')) {
    echo "Valid\n";
} else {
    echo "Invalid\n";
}

// Check array access to 'concept_code' for 'Female' from the default Sex CDE Class
if ('C46110' == SexAtBirth::FEMALE['concept_code'][0]) {
    echo "Valid\n";
} else {
    echo "Invalid\n";
}

// Check array access to 'permissible_value' for 'Female' from the default SexAtBirthTransformer
if ('Female' == SexAtBirthTransformer::transform('FEMALE')['permissible_value']) {
    echo "Valid\n";
} else {
    echo "Invalid\n";
}

// Check array access to 'permissible_value' for 'f' from the default SexAtBirthTransformer
if ('Female' == SexAtBirthTransformer::transform('f')['permissible_value']) {
    echo "Valid\n";
} else {
    echo "Invalid\n";
}

// Check access via passed key when transforming 'Boy' to 'Male' on the custom AcmeSexAtBirthTransformer
if ('Male' == AcmeSexAtBirthTransformer::transform('Boy', 'permissible_value')) {
    echo "Valid\n";
} else {
    echo "Invalid\n";
}
