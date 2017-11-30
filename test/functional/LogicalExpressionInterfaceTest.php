<?php

namespace Dhii\Expression\Test;
use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Expression\LogicalExpressionInterface}.
 *
 * @since 0.1
 */
class LogicalExpressionInterfaceTest extends TestCase
{

    /**
     * The name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Expression\\LogicalExpressionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return \Dhii\Expression\LogicalExpressionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getTerms()
            ->isNegated()
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
        $this->assertInstanceOf('Dhii\\Expression\\ExpressionInterface', $subject);
    }

}
