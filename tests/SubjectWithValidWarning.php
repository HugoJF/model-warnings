<?php

namespace HugoJF\ModelWarnings\Tests;

use HugoJF\ModelWarnings\Traits\HasWarnings;

class SubjectWithValidWarning
{
    use HasWarnings;

    public $warnings = [
        ValidWarning::class,
    ];
}
