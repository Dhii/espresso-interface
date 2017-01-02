<?php

namespace Dhii\Espresso;

/**
 * A Boolean expression is an expression that evaluates to either true or false.
*
 * @since [*next-version*]
 */
interface BooleanExpressionInterface extends ExpressionInterface
{
    /**
     * Gets whether or not the expression is negated.
     *
     * @return bool True if the expression is negated, false if not.
     */
    public function isNegated();
}
