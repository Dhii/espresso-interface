<?php

namespace Dhii\Expression;

/**
 * Something that represents a logical expression.
 *
 * @since 0.1
 */
interface LogicalExpressionInterface extends ExpressionInterface
{
    /**
     * Retrieves whether the expression is negated.
     *
     * @since 0.1
     *
     * @return bool True if the expression is negated, false if not.
     */
    public function isNegated();
}
