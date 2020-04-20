<?php

namespace HugoJF\ModelWarnings\Traits;

use HugoJF\ModelWarnings\Contracts\Warning;
use HugoJF\ModelWarnings\Exceptions\InvalidWarningException;
use HugoJF\ModelWarnings\Exceptions\InvalidWarningsListException;

trait HasWarnings
{
    /**
     * Checks warnings and build the warning message array.
     *
     * @return array
     * @throws InvalidWarningException
     * @throws InvalidWarningsListException
     */
    public function warnings()
    {
        $messages = [];

        if (!isset($this->warnings) || !$this->warnings) {
            return [];
        }

        if (!is_array($this->warnings)) {
            throw new InvalidWarningsListException(static::class);
        }

        foreach ($this->warnings as $class) {
            /** @var Warning $warning */
            $warning = new $class($this);

            if (!($warning instanceof Warning)) {
                throw new InvalidWarningException($class);
            }

            if ($warning->triggered()) {
                $messages[ $warning->getKey() ] = $warning->buildMessage();
            }
        }

        return $messages;
    }
}
