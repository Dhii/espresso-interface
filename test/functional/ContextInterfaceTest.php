<?php

namespace Dhii\Expression\FuncTest;

use Dhii\Expression\ContextInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Expression\ContextInterface}.
 *
 * @since 0.1
 */
class ContextInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = '\\Dhii\\Expression\\ContextInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return ContextInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getValue()
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
        $this->assertInstanceOf('Dhii\\Data\\ValueAwareInterface', $subject);
    }
}
