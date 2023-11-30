<?php

namespace PHPWineOptimizedHtml\Doctrine\Layouts;

class RightIcon extends \PHPWineOptimizedHtml\Doctrine\Accordion
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

                    wine(span, $value, [classes => $prefix . $valid_hook]) .
                        wine(__, [
                            child => [
                                please => function () use (
                                    $prefix,
                                    $valid_hook,
                                    $falsy,
                                    $content
                                ) {
                                    // Hook for icon item
                                    $hook_icon_default_top =
                                        "top_defualt_" . $prefix . $valid_hook;
                                    $hook_icon_default_bot =
                                        "bottom_defualt_" .
                                        $prefix .
                                        $valid_hook;

                                    $hook_icon_clicked_top =
                                        "top_clicked_" . $prefix . $valid_hook;
                                    $hook_icon_clicked_bot =
                                        "bottom_clicked_" .
                                        $prefix .
                                        $valid_hook;

                                    //  $hook_value_content = mb_substr($content, 0, 3);
                                    //  $iconHook = $this->valid_hook($hook_value_content);

                                    $default = $falsy["properties"][1] ?? false;
                                    $clicked = $falsy["properties"][2] ?? false;

                                    // $default
                                    $iconLeft = [];

                                    $iconLeft[] = wine(
                                        span,
                                        $default,
                                        [
                                            classes =>
                                                $prefix .
                                                "icon-left d$valid_hook",
                                        ],
                                        [
                                            [$hook_icon_default_top],
                                            [$hook_icon_default_bot],
                                        ]
                                    );

                                    if (
                                        function_exists($hook_icon_default_top)
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
                                        function_exists(
                                            $hook_icon_default_top
                                        ) ||
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
                        ]),
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
