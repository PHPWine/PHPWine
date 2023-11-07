<?php

 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);

 use PHPWineOptimizedHtml\OptimizedHtml;

 $require_file = dirname(__DIR__) . "/OptimizedHtml.php";

/**
 * @copyright (c) 2023 Optimized Html Cooked by nielsoffice
 *
 * MIT License
 *
 * Optimized Html free software: you can redistribute it and/or modify.
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @category   PHPLibrary Optimized HTML
 *
 *
 * @author    Leinner Zednanref <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/PHPWine/PHPWine/tree/main
 * @link      https://github.com/PHPWine/PHPWine/README.md
 * @link      https://phpwine.github.io/documents/
 * @version   v1.3.7
 * @since     10.26.2023
 * @since     11.05.2023
 *
 */
if (file_exists($require_file)) {
    // require the file class
    require_once $require_file;

    /**
     * @init
     * Defined : Check if the main file is exits!
     * @since: v1.3.4
     * DT: 11.05.2023 *
     */
    if (!class_exists("wine")) {
        /**
         * @init
         * Defined : function wine
         * @since: v1.3.4
         * DT: 11.06.2023 *
         */
        function local_provider(array $__w = [], mixed ...$vm)
        {
            $wine = new class extends \PHPWineOptimizedHtml\OptimizedHtml {
                public $wine;
                public const LP = ["dp", "init", "cbv", "cbm", "attr"];
                /**
                 *  Init local provider wine
                 *  DT: 06.11.2023
                 *  Defined: constract access main wine optimizedHtml
                 *
                 */
                public function __construct()
                {
                    $this->wine = new OptimizedHtml();
                }
                // get section
                public $array_count = 111;
                /**
                 *  Init local provider wine
                 *  DT: 06.11.2023
                 *  Defined: publi function set section
                 *
                 */
                public function get_section_element_from_provider()
                {
                    return $this->providers[$this->array_count];
                }
                /**
                 *  Init local provider wine
                 *  DT: 06.11.2023
                 *  Defined: wine method
                 *
                 */
                public function wine_generate_optimized_element_method(
                    string $t = null,
                    string|callable|array $c = null,
                    string|array $a = null,
                    bool $e = false
                ) {
                    return $this->wine->optimized_html($t, $a, $c, $e);
                }
                /**
                 *  Init local provider value /content
                 *  DT: 06.11.2023
                 *  Defined: wine method ***/
                public function wine_local_provider_assigned_hook(
                    object $t = null,
                    string|callable $c = null,
                    mixed ...$a
                ) {
                    return $this->wine->optimized_html(
                        __,
                        null,
                        $this->wine->wine_attribute_hook(false, $t, $c, ...$a)
                    );
                }
                /**
                 *  Init local provider magic filter
                 *  DT: 06.11.2023
                 *  Defined: wine method ***/
                public function wine_local_provider_filter_hook(
                    object $t = null,
                    string|callable $c = null,
                    mixed ...$a
                ) {
                    if (method_exists($t, $c)) {
                        /**
                         * @method
                         * Defined : call back value from method if exist and current value as argument
                         * @since: v1.0
                         * DT: 10.30.2023 *
                         */
                        return $this->optimized_html(
                            __,
                            null,
                            $this->wine->wine_attribute_hook(
                                false,
                                $t,
                                $c,
                                ...$a
                            )
                        );
                    } else {
                        /**
                         * @method
                         * Defined : Only if the emthod is not exist then this is the current value
                         * @since: v1.0
                         * DT: 10.30.2023 *
                         */
                        return $this->optimized_html(__, null, ...$a);
                    }
                }
                /**
                 *  Init local provider magic filter
                 *  DT: 06.11.2023
                 *  Defined: wine method ***/
                public function wine_local_provider_attr_hook(
                    object $t = null,
                    string|callable $c = null,
                    mixed ...$a
                ) {
                    if (method_exists($t, $c)) {
                        /**
                         * @method
                         * Defined : call back value from method if exist and current value as argument
                         * @since: v1.0
                         * DT: 10.30.2023 *
                         */
                        return $this->wine->wine_attribute_hook(
                            true,
                            $t,
                            $c,
                            ...$a
                        );
                    } elseif (function_exists($c)) {
                        /**
                         * @condition
                         * Defined : call back value from function if exist and current value as argument
                         * @since: v1.3.7
                         * DT: 11.08.2023 *
                         */
                        return call_user_func($c, ...$a);
                    } else {
                        /**
                         * @method
                         * Defined : Only if the emthod is not exist then this is the current value
                         * @since: v1.0
                         * DT: 10.30.2023 *
                         * If the attribute in hook is a string then print as is
                         */
                        if (is_string(...$a)) {
                            return implode("", $a);
                        } elseif (is_array($a[0])) {
                            return $this->set_attributes_html($a[0]);
                        }
                    }
                }
            };
            if (array_key_exists($wine::LP[2], $__w)) {
                $cbv = $wine->wine_local_provider_assigned_hook(
                    $__w[$wine::LP[2]][0] ?? "",
                    $__w[$wine::LP[2]][1] ?? "",
                    ...$vm
                );
            }
            if (array_key_exists($wine::LP[3], $__w)) {
                $cbm = $wine->wine_local_provider_filter_hook(
                    $__w[$wine::LP[3]][0] ?? "",
                    $__w[$wine::LP[3]][1] ?? "",
                    ...$vm
                );
            }
            if (array_key_exists($wine::LP[4], $__w)) {
                $cba = $wine->wine_local_provider_attr_hook(
                    $__w[$wine::LP[4]][0] ?? "",
                    $__w[$wine::LP[4]][1] ?? "",
                    ...$vm
                );
            }
            return [
                $wine::LP[0] => $wine->get_section_element_from_provider(),
                $wine::LP[1] => $wine->wine_generate_optimized_element_method(
                    __,
                    [
                        child => [
                            please => function () use ($wine, $__w) {
                                $init = [];
                                if (array_key_exists($wine::LP[1], $__w)) {
                                    $init[] = $wine->wine_generate_optimized_element_method(
                                        $__w[$wine::LP[1]][0] ?? "",
                                        $__w[$wine::LP[1]][1] ?? "",
                                        $__w[$wine::LP[1]][2],
                                        $__w[$wine::LP[1]][3] ?? false
                                    );
                                }
                                return $init;
                            },
                        ],
                    ]
                ),
                $wine::LP[2] => $cbv ?? null,
                $wine::LP[3] => $cbm ?? null,
                $wine::LP[4] => $cba ?? null,
            ];
        }
        /**
         * @function
         *
         * --------------------------------------------------------------------------------------------
         *
         * Wine method is a primary public method that will use to generate and optimized html
         * you can generate the all element fully optimized tag, it have a parameters such as
         *
         * @string : $tag Which html element are you trying or want to use ??
         * like ex. div, ul, li, p, spane and etc...
         *
         * @string : value this means you can just add a string value to the $content
         * like ex. <div>Your content is string...</div>
         *
         * To do that you just invoke the wine like print wine(div,'Your content is string...');
         *
         * @callable : Means this is a callback function instead of putting dirrectly the value
         * you just assign a string value to make a function return;
         *
         * like ex: prinmt wine(div, 'my_call_back_func');
         *
         * Now you can create your call function
         * like: function my_call_back_func() {
         *
         *   return "Your content is string...";
         *
         * }
         *
         * NOTE: that callable function accept string value only!
         *
         * @array :  This use when you create a child using resevred keyword
         * TO know more about reserve keyword just please checkout our documentation
         * search to searchbox the "Reserve Keywords"
         * Link: https://phpwine.github.io/documents/
         *
         * @bool enable HTML is current false which means the HTML is interfreted
         * by the browser and if you want to enale html just add "true" then wine
         * return you a string version of HTML that you can use for your client approval
         *
         * Defined : public method use optimized html with wine
         * @since: v1.0
         * DT: 10.26.2023 *
         */
        function wine(
            string|null $tag,
            // @param first content string|callable|array
            string|callable|array $content = [],
            // @param second attr array
            string|array $attr = [],
            // @param third < Optional >
            $enable_html = false
        ) {
            if (is_null($tag) || empty($tag)) {
                $tag = local_provider()["dp"];
            }
            // invoke into function version
            $located = "init";
            $optimized = local_provider([
                $located => [
                    $tag, // @param
                    $content, // @param
                    $attr, // @param
                    $enable_html,
                    // @param
                ],
            ])[$located];
            return $optimized;
        }
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
            object|null $class = null,
            // @param second string call back function
            string|callable|null $call_back = null,
            // @param thordly arguments
            mixed ...$args
        ): mixed {
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
            object $class = null,
            // @param second string call back function
            string|callable $call_back = null,
            // @param thordly arguments
            mixed ...$current_value
        ): mixed {
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
        /**
         * @functions
         *
         * --------------------------------------------------------------------------------------------
         * The attr method similar to value the different is the value is become
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
        function attr(
            // @param first Object nullable
            object $class = null,
            // @param second string call back function
            string|callable $call_back = null,
            // @param thordly arguments
            mixed ...$attr
        ) : string|array {
            /**
             *  Init OptimizedHtml
             *  DT: 05.11.2023
             *  Defined: Value method function version
             *
             */
            $located = "attr";
            $optimized = local_provider(
                [
                    $located => [
                        $class, // @param
                        $call_back, // @param
                    ],
                ],
                ...$attr
            )[$located];
            return $optimized;
        }
    } else {
        throw new \Exception("\wine class is already exists!");
        exit();
    }
} else {
    throw new \Exception("\PHPWineOptimizedHtml not found!");
    exit();
}
