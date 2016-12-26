<?php

namespace Dhii\Espresso;

/**
 * Any object that is capable of providing a contextual value for an evaluable entity.
 *
 * @since [*next-version*]
 */
interface ContextInterface
{
    /**
     * Gets the context-specific value.
     *
     * @param string $key [optional] A string key - used if the context contains multiple values. Default: null
     *
     * @return mixed The contextual value.
     */
    public function getValue($key = null);
}
