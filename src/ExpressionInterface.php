<?php

namespace Dhii\Expression;

use Traversable;

/**
 * Something that represents an expression.
 *
 * @since 0.1
 */
interface ExpressionInterface
{
    /**
     * Retrieves the terms for this expression.
     *
     * @since 0.1
     *
     * @return ExpressionInterface[]|Traversable A list of expressions.
     */
    public function getTerms();
}
