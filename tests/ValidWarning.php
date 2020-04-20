<?php

namespace HugoJF\ModelWarnings\Tests;

use HugoJF\ModelWarnings\Contracts\Warning;

class ValidWarning extends Warning
{
    /**
     * @inheritDoc
     */
    public function triggered()
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    public function buildMessage()
    {
        return [
            'message' => 'A cool warning!',
        ];
    }
}
