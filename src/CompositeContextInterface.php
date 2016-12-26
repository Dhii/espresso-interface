<?php

namespace Dhii\Espresso;

/**
 * A context with multiple values.
 *
 * @since [*next-version*]
 */
interface CompositeContextInterface extends ContextInterface
{
    /**
     * Gets the context-specific value or a sub-value.
     *
     * @param string $key [optional] A string key - used if the context contains multiple values. Default: null
     *
     * @return mixed The contextual value.
     */
    public function getValue($key = null);

    /**
     * Checks if the context has a value with a specific key.
     *
     * @since [*next-version*]
     *
     * @param string $key The key of the value to check for.
     *
     * @return bool True if the context has a value with the given key, false if not.
     */
    public function hasValue($key);
}
