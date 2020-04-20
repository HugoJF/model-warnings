<?php

namespace HugoJF\ModelWarnings\Exceptions;

use Exception;
use HugoJF\ModelWarnings\Contracts\Warning;

class InvalidWarningException extends Exception
{
    public function __construct($warning)
    {
        $correct = Warning::class;

        parent::__construct("$warning is not an instance of $correct");
    }
}
