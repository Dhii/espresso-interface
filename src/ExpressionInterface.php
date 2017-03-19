<?php

namespace Dhii\Expression;

use Dhii\Evaluable\EvaluableInterface;
use Dhii\Util\String\StringableInterface;

/**
 * An expression is an evaluable construct that is made up of 1 or more evaluable terms.
 *
 * @since 0.1
 */
interface ExpressionInterface extends EvaluableInterface, StringableInterface
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
