<?php

namespace Dhii\Expression;

use Traversable;

/**
 * Something that represents an expression.
 *
 * @since 0.1
 */
interface ExpressionInterface extends TermInterface
{
    /**
     * Retrieves the terms for this expression.
     *
     * @since 0.1
     *
     * @return string[]|Stringable[]|ExpressionInterface[]|Traversable A list of term strings or sub-expressions.
     */
    public function getTerms();
}
