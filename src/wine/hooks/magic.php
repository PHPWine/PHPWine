<?php 

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

/**
 * @functions
 *
 * --------------------------------------------------------------------------------------------
 * The magic method similar to value the different is the value is become
 * areguments once the filter or call back method is already defined.
 *
 * @object
 *
 * @string|callable
 *
 * @argument which is mixed
 *
 * Defined : public method filtered current value and replace/
 * @since: v1.2.8
 * DT: 10.26.2023 *
 */
function magic(
    // @param first Object nullable
    object|string $class = null,
    // @param second string call back function
    string|callable $call_back = null,
    // @param thordly arguments
    mixed ...$current_value
) : mixed {
    /**
        *  Init OptimizedHtml
        *  DT: 05.11.2023
        *  Defined: Value method function version
        *
        */
    $located = "cbm";
    $optimized = local_provider(
        [
            $located => [
                $class, // @param
                $call_back, // @param
            ],
        ],
        ...$current_value
    )[$located];
    return $optimized;
}