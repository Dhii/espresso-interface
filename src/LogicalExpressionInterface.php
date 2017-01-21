<?php

namespace Dhii\Espresso;

/**
 * A logical expression is an expression that evaluates to either true or false.
 *
 * @since [*next-version*]
 */
interface LogicalExpressionInterface extends ExpressionInterface
{
    /**
     * Gets whether or not the expression is negated.
     *
     * @since [*next-version*]
     *
     * @return bool True if the expression is negated, false if not.
     */
    public function isNegated();
}
