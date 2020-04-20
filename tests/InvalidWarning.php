<?php

namespace HugoJF\ModelWarnings\Tests;

class InvalidWarning
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
