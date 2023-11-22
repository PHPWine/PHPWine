<?php 

 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);

/**
 * @function
 *
 * --------------------------------------------------------------------------------------------
 * Do you remember we have a call_back in wine? are you wonder why we need this?
 * you can actually use this to your array value child when you have create a html template
 * or your html is overload on inside the method with this you can extract the inner html
 * inside the method you created
 * Like sample: https://github.com/PHPWine/documents/tree/main/Demo
 *
 * The param first is
 * @class which is the object itself
 *
 * @string || Callable
 *
 * @arguments which is mixed
 *
 * Defined : public method use value /instead value => []/
 * @since: v1.2.6
 * DT: 10.26.2023 *
 */
function value(
    // @param first Object nullable
    object|string|null $class = null,
    // @param second string call back function
    string|callable|null $call_back = null,
    // @param thordly arguments
    mixed ...$args
) : mixed {
    $located = "cbv";
    $optimized = local_provider(
        [
            $located => [
                $class, // @param
                $call_back, // @param
            ],
        ],
        ...$args
    )[$located];
    return $optimized;
}
   