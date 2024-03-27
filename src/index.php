<?php

use CCDI\CDE\V1\Data\Race;
use CCDI\CDE\V1\Data\SexAtBirth;
use CCDI\Demo\AcmeHospital\AcmeSexTransformer;
use CCDI\Transformer\V0\RaceTransformer;
use CCDI\Transformer\V0\SexAtBirthTransformer;

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
if (SexAtBirth::FEMALE['concept_code'][0] == 'C46110') {
    echo "Valid\n";
} else {
    echo "Invalid\n";
}

// Check array access to 'permissible_value' for 'Female' from the default SexAtBirthTransformer
if (SexAtBirthTransformer::transform('FEMALE')['permissible_value'] == 'Female') {
    echo "Valid\n";
} else {
    echo "Invalid\n";
}

// Check array access to 'permissible_value' for 'f' from the default SexAtBirthTransformer
if (SexAtBirthTransformer::transform('f')['permissible_value'] == 'Female') {
    echo "Valid\n";
} else {
    echo "Invalid\n";
}

// Check access via passed key when transforming 'Boy' to 'Male' on the custom AcmeSexAtBirthTransformer
//@phpstan-ignore-next-line
if (AcmeSexTransformer::transform('Boy', 'permissible_value') == 'Male') {
    echo "Valid\n";
} else {
    echo "Invalid\n";
}
