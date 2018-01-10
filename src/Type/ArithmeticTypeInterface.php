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
    const T_ADDITION = 'addition';

    /**
     * Type constant for expressions and terms that represent subtract.
     *
     * @since [*next-version*]
     */
    const T_SUBTRACTION = 'subtract';

    /**
     * Type constant for expressions and terms that represent multiplication.
     *
     * @since [*next-version*]
     */
    const T_MULTIPLICATION = 'multiplication';

    /**
     * Type constant for expressions and terms that represent division.
     *
     * @since [*next-version*]
     */
    const T_DIVISION = 'division';

    /**
     * Type constant for expressions and terms that represent modulo.
     *
     * @since [*next-version*]
     */
    const T_MODULO = 'modulo';

    /**
     * Type constant for expressions and terms that represent percentage.
     *
     * @since [*next-version*]
     */
    const T_PERCENTAGE = 'percentage';

    /**
     * Type constant for expressions and terms that represent absolute.
     *
     * @since [*next-version*]
     */
    const T_ABSOLUTE = 'absolute';

    /**
     * Type constant for expressions and terms that represent ceiling.
     *
     * @since [*next-version*]
     */
    const T_CEILING = 'ceiling';

    /**
     * Type constant for expressions and terms that represent floor.
     *
     * @since [*next-version*]
     */
    const T_FLOOR = 'floor';

    /**
     * Type constant for expressions and terms that represent round.
     *
     * @since [*next-version*]
     */
    const T_ROUND = 'round';

    /**
     * Type constant for expressions and terms that represent power.
     *
     * @since [*next-version*]
     */
    const T_POWER = 'power';

    /**
     * Type constant for expressions and terms that represent logarithm.
     *
     * @since [*next-version*]
     */
    const T_LOGARITHM = 'logarithm';

    /**
     * Type constant for expressions and terms that represent factorial.
     *
     * @since [*next-version*]
     */
    const T_FACTORIAL = 'factorial';

    /**
     * Type constant for expressions and terms that represent derivative.
     *
     * @since [*next-version*]
     */
    const T_DERIVATIVE = 'derivative';

    /**
     * Type constant for expressions and terms that represent integral.
     *
     * @since [*next-version*]
     */
    const T_INTEGRAL = 'integral';

    /**
     * Type constant for expressions and terms that represent bitwise "and".
     *
     * @since [*next-version*]
     */
    const T_BITWISE_AND = 'bitwise_and';

    /**
     * Type constant for expressions and terms that represent bitwise "or".
     *
     * @since [*next-version*]
     */
    const T_BITWISE_OR = 'bitwise_or';
}
