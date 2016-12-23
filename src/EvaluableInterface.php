<?php

namespace Dhii\Espresso;

/**
 * An evaluable is an object that can be evaluated, given a context.
 *
 * @since [*next-version*]
 */
interface EvaluableInterface
{
    /**
     * Gets the evaluated result.
     *
     * @param ContextInterface $ctx [optional] The context. Default: null
     *
     * @return mixed The evaluated result.
     */
    public function evaluate(ContextInterface $ctx = null);
}
