<?php

namespace Dhii\Expression\Test;

/**
 * Tests {@see \Dhii\ExpressionInterface}.
 *
 * @since 0.1
 */
class ExpressionInterfaceTest extends \Xpmock\TestCase
{

    /**
     * The name of the test subject.
     *
     * @since 0.1
     */
    const TEST_SUBJECT_CLASSNAME = '\\Dhii\\Expression\\ExpressionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return \Dhii\Expression\ExpressionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getTerms()
            ->evaluate()
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
        $this->assertInstanceOf('Dhii\\Evaluable\\EvaluableInterface', $subject);
    }

}
