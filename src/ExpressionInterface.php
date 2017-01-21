<?php

namespace Dhii\Espresso;

use Dhii\Evaluable\EvaluableInterface;

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
     * @since [*next-version*]
     *
     * @return EvaluableInterface[] An array of evaluable instances.
     */
    public function getTerms();
}
