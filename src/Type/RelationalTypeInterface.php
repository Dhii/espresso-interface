<?php

namespace Dhii\Expression\Type;

/**
 * Something that represents a relational term type.
 *
 * @since [*next-version*]
 */
interface RelationalTypeInterface extends TermTypeInterface
{
    /**
     * Type constant for expressions and terms that represent an "equivalence" relation.
     */
    const T_EQUAL_TO = 'equal_to';

    /**
     * Type constant for expressions and terms that represent a "greater than" relation.
     */
    const T_GREATER_THAN = 'greater_than';

    /**
     * Type constant for expressions and terms that represent a "greater than or equal" to relation.
     */
    const T_GREATER_EQUAL_TO = 'greater_equal_to';

    /**
     * Type constant for expressions and terms that represent a "less than" relation.
     */
    const T_LESS_THAN = 'less_than';

    /**
     * Type constant for expressions and terms that represent a "less than or equal to" relation.
     */
    const T_LESS_EQUAL_TO = 'less_equal_to';

    /**
     * Type constant for expressions and terms that represent an "approximately equal to" relation.
     */
    const T_APPROX_EQUAL_TO = 'approx_equal_to';
}
