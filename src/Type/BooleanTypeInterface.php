<?php

namespace Dhii\Expression\Type;

/**
 * Boolean expression and term types.
 *
 * @since [*next-version*]
 */
interface BooleanTypeInterface
{
    /**
     * Type constant for expressions that represent a boolean "and".
     *
     * @since [*next-version*]
     */
    const TYPE_AND = 'and';

    /**
     * Type constant for expressions that represent a boolean "or".
     *
     * @since [*next-version*]
     */
    const TYPE_OR = 'or';
}
