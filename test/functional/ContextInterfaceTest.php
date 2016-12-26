<?php

namespace Dhii\Espresso\Test;

/**
 * Tests {@see \Dhii\Espresso\ContextInterface}.
 *
 * @since [*next-version*]
 */
class ContextInterfaceTest extends \Xpmock\TestCase
{

    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = '\\Dhii\\Espresso\\ContextInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Espresso\ContextInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getValue()
            ->hasValue()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @covers \Dhii\Espresso\ContextInterface
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }

}
