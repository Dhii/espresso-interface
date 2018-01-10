<?php

namespace Dhii\Expression\Type\UnitTest;

use Xpmock\TestCase;
use Dhii\Expression\Type\LogicalTypeInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since [*next-version*]
 */
class LogicalTypeInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Expression\Type\LogicalTypeInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TestSubject
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                     ->getKey()
                     ->validate()
                     ->__toString();

        return $mock->new();
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME,
            $subject,
            'A valid instance of the test subject could not be created.'
        );

        $this->assertInstanceOf(
            'Dhii\Expression\Type\BooleanTypeInterface',
            $subject,
            'Test subject does not implement expected parent interface.'
        );

        $this->assertInstanceOf(
            'Dhii\Expression\Type\RelationalTypeInterface',
            $subject,
            'Test subject does not implement expected parent interface.'
        );
    }
}
