<?php

namespace Dhii\Expression\Test;

use Dhii\Expression\CompositeContextInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Expression\CompositeContextInterface}.
 *
 * @since 0.1
 */
class CompositeContextInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = '\\Dhii\\Expression\\CompositeContextInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return CompositeContextInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getValue()
            ->hasValue()
            ->getValueOf()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since 0.1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
        $this->assertInstanceOf('Dhii\\Expression\\ContextInterface', $subject);
    }
}
