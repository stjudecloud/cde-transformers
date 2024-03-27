<?php

namespace CCDI\CDE\Exception;

use Exception;

class ReadOnlyArrayAccess extends Exception
{
    protected $message = 'Setting or unsetting array not allowed';
}
