<?php

namespace Dhii\Expression;

use Dhii\Data\ValueAwareInterface;

/**
 * Something that represents a literal value term.
 *
 * @since [*next-version*]
 */
interface LiteralTermInterface extends
    TermInterface,
    ValueAwareInterface
{
}
