<?php

namespace Dhii\Expression\Type;

/**
 * Something that represents an arithmetic term type.
 *
 * @since [*next-version*]
 */
interface ArithmeticTypeInterface extends TermTypeInterface
{
    /**
     * Type constant for expressions and terms that represent addition.
     *
     * @since [*next-version*]
     */
    const TYPE_ADDITION = 'addition';

    /**
     * Type constant for expressions and terms that represent subtract.
     *
     * @since [*next-version*]
     */
    const TYPE_SUBTRACTION = 'subtract';

    /**
     * Type constant for expressions and terms that represent multiplication.
     *
     * @since [*next-version*]
     */
    const TYPE_MULTIPLICATION = 'multiplication';

    /**
     * Type constant for expressions and terms that represent division.
     *
     * @since [*next-version*]
     */
    const TYPE_DIVISION = 'division';

    /**
     * Type constant for expressions and terms that represent modulo.
     *
     * @since [*next-version*]
     */
    const TYPE_MODULO = 'modulo';

    /**
     * Type constant for expressions and terms that represent percentage.
     *
     * @since [*next-version*]
     */
    const TYPE_PERCENTAGE = 'percentage';

    /**
     * Type constant for expressions and terms that represent absolute.
     *
     * @since [*next-version*]
     */
    const TYPE_ABSOLUTE = 'absolute';

    /**
     * Type constant for expressions and terms that represent ceiling.
     *
     * @since [*next-version*]
     */
    const TYPE_CEILING = 'ceiling';

    /**
     * Type constant for expressions and terms that represent floor.
     *
     * @since [*next-version*]
     */
    const TYPE_FLOOR = 'floor';

    /**
     * Type constant for expressions and terms that represent round.
     *
     * @since [*next-version*]
     */
    const TYPE_ROUND = 'round';

    /**
     * Type constant for expressions and terms that represent power.
     *
     * @since [*next-version*]
     */
    const TYPE_POWER = 'power';

    /**
     * Type constant for expressions and terms that represent logarithm.
     *
     * @since [*next-version*]
     */
    const TYPE_LOGARITHM = 'logarithm';

    /**
     * Type constant for expressions and terms that represent factorial.
     *
     * @since [*next-version*]
     */
    const TYPE_FACTORIAL = 'factorial';

    /**
     * Type constant for expressions and terms that represent derivative.
     *
     * @since [*next-version*]
     */
    const TYPE_DERIVATIVE = 'derivative';

    /**
     * Type constant for expressions and terms that represent integral.
     *
     * @since [*next-version*]
     */
    const TYPE_INTEGRAL = 'integral';

    /**
     * Type constant for expressions and terms that represent bitwise "and".
     *
     * @since [*next-version*]
     */
    const TYPE_BITWISE_AND = 'bitwise_and';

    /**
     * Type constant for expressions and terms that represent bitwise "or".
     *
     * @since [*next-version*]
     */
    const TYPE_BITWISE_OR = 'bitwise_or';
}
