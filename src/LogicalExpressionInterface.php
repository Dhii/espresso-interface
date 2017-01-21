<?php

namespace Dhii\Espresso;

/**
 * A logical expression is an expression that evaluates to either true or false.
 *
 * @since 0.1
 */
interface LogicalExpressionInterface extends ExpressionInterface
{
    /**
     * Gets whether or not the expression is negated.
     *
     * @since 0.1
     *
     * @return bool True if the expression is negated, false if not.
     */
    public function isNegated();
}
