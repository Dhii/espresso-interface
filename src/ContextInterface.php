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
     * @since [*next-version*]
     *
     * @return mixed The contextual value.
     */
    public function getValue();
}
