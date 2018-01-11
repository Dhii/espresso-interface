<?php

namespace Dhii\Expression;

use Dhii\Data\KeyAwareInterface;

/**
 * Something that represents a term whose value is unknown or varies depending on context.
 *
 * @since [*next-version*]
 */
interface VariableTermInterface extends
    TermInterface,
    KeyAwareInterface
{
}
