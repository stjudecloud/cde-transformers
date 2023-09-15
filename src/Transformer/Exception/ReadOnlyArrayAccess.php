<?php

namespace CCDI\Exception\Transformer;

use Exception;

class ReadOnlyArrayAccess extends Exception
{
    protected $message = 'Setting or unsetting array not allowed';
}