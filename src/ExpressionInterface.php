<?php

namespace Dhii\Expression;

use Dhii\Evaluable\EvaluableInterface;

/**
 * An expression is an evaluable construct that is made up of 1 or more evaluable terms.
 *
 * @since 0.1
 */
interface ExpressionInterface extends EvaluableInterface
{
    /**
     * Gets the expression terms.
     *
     * @since 0.1
     *
     * @return EvaluableInterface[] An array of evaluable instances.
     */
    public function getTerms();
}
