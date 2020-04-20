<?php

namespace HugoJF\ModelWarnings\Tests;

use HugoJF\ModelWarnings\Exceptions\InvalidWarningException;
use HugoJF\ModelWarnings\Exceptions\InvalidWarningsListException;
use Orchestra\Testbench\TestCase;

class WarningsTest extends TestCase
{
    public function test_missing_warnings_list_will_return_empty_array()
    {
        $subject = new SubjectWithNoWarning;

        $warnings = $subject->warnings();

        $this->assertEquals([], $warnings);
    }
    public function test_invalid_warnings_list_will_throw_exception()
    {
        $subject = new SubjectWithInvalidWarningsList;

        $this->expectException(InvalidWarningsListException::class);

        $subject->warnings();
    }

    public function test_invalid_warnings_will_throw_exception()
    {
        $subject = new SubjectWithInvalidWarning;

        $this->expectException(InvalidWarningException::class);

        $subject->warnings();
    }

    public function test_triggered_warning_will_be_added_to_message_list()
    {
        $subject = new SubjectWithValidWarning;

        $warnings = $subject->warnings();

        $this->assertEquals([
            ValidWarning::class => (new ValidWarning)->buildMessage(),
        ], $warnings);
    }
}
