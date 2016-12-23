<?php

namespace Dhii\Espresso;

/**
 * An expression is an evaluable construct that is made up of 1 or more evaluable terms.
 *
 * @since [*next-version*]
 */
interface ExpressionInterface extends EvaluableInterface
{
    /**
     * Gets the expression terms.
     *
     * @return EvaluableInterface[] An array of evaluable instances.
     */
    public function getTerms();

    /**
     * Gets whether or not the expression is negated.
     *
     * @return bool True if the expression is negated, false if not.
     */
    public function isNegated();
}
