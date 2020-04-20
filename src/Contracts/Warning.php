<?php

namespace HugoJF\ModelWarnings\Contracts;

abstract class Warning
{
    /**
     * The class instance that triggered the warning.
     *
     * @var null
     */
    protected $context;

    /**
     * Warning constructor.
     *
     * @param null $context
     */
    public function __construct($context = null)
    {
        $this->context = $context;
    }

    /**
     * Verifies if this warning instance is triggered.
     *
     * @return bool
     */
    public abstract function triggered();

    /**
     * Information about the warning that will be used to build the warning messages array.
     *
     * @return array
     */
    public abstract function buildMessage();

    /**
     * The key to be used when building the warning message array.
     *
     * @return string
     */
    public function getKey()
    {
        return static::class;
    }
}
