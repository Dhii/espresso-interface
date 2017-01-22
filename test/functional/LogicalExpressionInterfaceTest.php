<?php

namespace Dhii\Espresso\Test;

/**
 * Tests {@see \Dhii\Espresso\LogicalExpressionInterface}.
 *
 * @since [*next-version*]
 */
class LogicalExpressionInterfaceTest extends \Xpmock\TestCase
{

    /**
     * The name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Espresso\\LogicalExpressionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return \Dhii\Espresso\LogicalExpressionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getTerms()
            ->evaluate()
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
        $this->assertInstanceOf('Dhii\\Espresso\\ExpressionInterface', $subject);
        $this->assertInstanceOf('Dhii\\Evaluable\\EvaluableInterface', $subject);
    }

}
