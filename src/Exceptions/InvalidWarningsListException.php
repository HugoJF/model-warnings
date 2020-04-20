<?php

namespace HugoJF\ModelWarnings\Exceptions;

use Exception;
use HugoJF\ModelWarnings\Contracts\Warning;

class InvalidWarningsListException extends Exception
{
    public function __construct($subject)
    {
        parent::__construct("The warning list for $subject is not an array!");
    }
}
