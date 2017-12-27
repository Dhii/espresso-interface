<?php

namespace Dhii\Expression;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that represents an expression term.
 *
 * @since [*next-version*]
 */
interface TermInterface
{
    /**
     * Retrieves the expression term type.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The type code.
     */
    public function getType();
}
