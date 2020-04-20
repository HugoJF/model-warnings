<?php

namespace HugoJF\ModelWarnings\Tests;

use HugoJF\ModelWarnings\Traits\HasWarnings;

class SubjectWithInvalidWarning
{
    use HasWarnings;

    public $warnings = [
        InvalidWarning::class,
    ];
}
