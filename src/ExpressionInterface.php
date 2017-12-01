<?php

namespace Dhii\Expression;

use Dhii\Util\String\StringableInterface as Stringable;
use Traversable;

/**
 * Something that represents an expression.
 *
 * @since 0.1
 */
interface ExpressionInterface
{
    /**
     * Retrieves the expression type.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The expression type code.
     */
    public function getType();

    /**
     * Retrieves the terms for this expression.
     *
     * @since 0.1
     *
     * @return string[]|Stringable[]|ExpressionInterface[]|Traversable A list of term strings or sub-expressions.
     */
    public function getTerms();
}
