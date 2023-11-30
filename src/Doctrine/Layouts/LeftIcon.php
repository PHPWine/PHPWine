<?php

namespace PHPWineOptimizedHtml\Doctrine\Layouts;

/**
* @copyright (c) 2023 PHPWine Component Accordion Cooked by nielsoffice
*
* MIT License
*
* PHPWine Component Accordion free software: you can redistribute it and/or modify.
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
* @category   PHPWine Component Accordion
*
*
* @author    Leinner Zednanref <syncdevprojects@gmail.com>
* @license   MIT License
* @link      https://github.com/PHPWine/WineAccordion/tree/main
* @link      https://github.com/PHPWine/WineAccordion/README.md
* @version   v1.0
* @since     11.29.2023
*
*/

class LeftIcon extends \PHPWineOptimizedHtml\Doctrine\Accordion
{
    public $event = [];

    public function __construct()
    {
        $wine = new \PHPWineOptimizedHtml\OptimizedHtml();
    }

    public function Position($menu_items, $prefix, $falsy)
    {
        $acdn_menu = [];

        foreach ($menu_items as $value => $content) {
            // clean up to make vbalid hook
            $valid_hook = $this->valid_hook($value);

            // Hook for list item
            $hook_item_top = "top_item_list" . $valid_hook;
            $hook_item_bot = "bottom_item_list" . $valid_hook;

            // Hook for list item content
            $hook_content_top = "top_content" . $valid_hook;
            $hook_content_bot = "bottom_content" . $valid_hook;

            array_push($this->event, "$valid_hook");

            $acdn_menu[] =
                wine(
                    div,

                    wine(__, [
                        child => [
                            please => function () use (
                                $prefix,
                                $valid_hook,
                                $falsy
                            ) {
                                // Hook for icon item
                                $hook_icon_default_top =
                                    "top_defualt_" . $prefix . $valid_hook;
                                $hook_icon_default_bot =
                                    "bottom_defualt_" . $prefix . $valid_hook;

                                $hook_icon_clicked_top =
                                    "top_clicked_" . $prefix . $valid_hook;
                                $hook_icon_clicked_bot =
                                    "bottom_clicked_" . $prefix . $valid_hook;

                                $default = $falsy["properties"][1] ?? false;
                                $clicked = $falsy["properties"][2] ?? false;

                                // $default
                                $iconLeft = [];

                                $iconLeft[] = wine(
                                    span,
                                    $default,
                                    [
                                        classes =>
                                            $prefix . "icon-left d$valid_hook",
                                    ],
                                    [
                                        [$hook_icon_default_top],
                                        [$hook_icon_default_bot],
                                    ]
                                );

                                if (function_exists($hook_icon_default_top)) {
                                    $iconLeft[] = wine(
                                        span,
                                        $clicked,
                                        [
                                            classes =>
                                                $prefix .
                                                "icon-left c$valid_hook",
                                        ],
                                        [
                                            [$hook_icon_default_top],
                                            [$hook_icon_clicked_bot],
                                        ]
                                    );
                                } elseif (
                                    function_exists($hook_icon_default_bot)
                                ) {
                                    $iconLeft[] = wine(
                                        span,
                                        $clicked,
                                        [
                                            classes =>
                                                $prefix .
                                                "icon-left c$valid_hook",
                                        ],
                                        [
                                            [$hook_icon_clicked_top],
                                            [$hook_icon_default_bot],
                                        ]
                                    );
                                } elseif (
                                    function_exists($hook_icon_default_top) ||
                                    function_exists($hook_icon_default_bot)
                                ) {
                                    $iconLeft[] = wine(
                                        span,
                                        $clicked,
                                        [
                                            classes =>
                                                $prefix .
                                                "icon-left c$valid_hook",
                                        ],
                                        [
                                            [$hook_icon_default_top],
                                            [$hook_icon_default_bot],
                                        ]
                                    );
                                } else {
                                    $iconLeft[] = wine(
                                        span,
                                        $clicked,
                                        [
                                            classes =>
                                                $prefix .
                                                "icon-left c$valid_hook",
                                        ],
                                        [
                                            [$hook_icon_clicked_top],
                                            [$hook_icon_clicked_bot],
                                        ]
                                    );
                                }

                                return $iconLeft;
                            },
                        ],
                    ]) . wine(span, $value, [classes => $prefix . $valid_hook]),
                    [
                        classes => $prefix . "list-item",
                        id => $valid_hook,
                    ],
                    [[$hook_item_top], [$hook_item_bot]]
                ) .
                wine(
                    div,
                    $content,
                    [classes => "content"],
                    [[$hook_content_top], [$hook_content_bot]]
                );
        }

        return [
            wine(div, implode("", $acdn_menu), [id => $prefix . "menu_item"]),
        ];
    }

    public function event(): array
    {
        return $this->event;
    }
}
