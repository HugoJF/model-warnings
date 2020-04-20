<?php

namespace HugoJF\ModelWarnings\Tests;

use HugoJF\ModelWarnings\Traits\HasWarnings;

class SubjectWithInvalidWarningsList
{
    use HasWarnings;

    public $warnings = 'im not a valid warnings list';
}
