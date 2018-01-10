<?php

namespace Dhii\Expression\Type;

/**
 * Something that represents a boolean term type.
 *
 * @since [*next-version*]
 */
interface BooleanTypeInterface extends TermTypeInterface
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
