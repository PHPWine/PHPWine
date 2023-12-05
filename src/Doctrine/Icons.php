<?php

namespace PHPWineOptimizedHtml\Doctrine;

/**
* @copyright (c) 2023 PHPWine Component Cooked by nielsoffice
*
* MIT License
*
* PHPWine Component free software: you can redistribute it and/or modify.
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
* @category   PHPWine Component 
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

class Icons extends \PHPWineOptimizedHtml\Doctrine\Accordion
{
    public $event = [];

    public function __construct()
    {
        $wine = new \PHPWineOptimizedHtml\OptimizedHtml();
    }

    public function Position($menu_items, $prefix, $falsy, $iconPosition, $attr)
    {

        $acdn_menu = [];

        foreach ($menu_items as $value => $content) {
            
            // clean up to make vbalid hook
            $valid_hook = $this->valid_hook($value);     

            if(isset($attr)) { $filered_attr = $attr; } 
            else {
              $filered_attr = $this;
            }

            $left_list_id = wine_valid_id($valid_hook);
            $left_list_classes = $prefix . "list-item";
            $left_list_method  = "attr_".$prefix . $left_list_id;

            array_push($this->event, "$valid_hook");

            $acdn_menu[] = wine(div,[
              child => [
          
                [__, value=>[
                   wine(__, [
                     child=>[
                        please => function() use (
                            $prefix,
                            $valid_hook,
                            $value,
                            $iconPosition,
                            $attr
                         ) {

                          if(isset($attr)) { $filered_attr = $attr; } 
                          else {
                            $filered_attr = $this;
                          }

                          // menu lists title items
                          $right_id = wine_valid_id($prefix.$value);
                          $right_class = $prefix.$valid_hook;
                          $right_methods = "attr_".$prefix.$right_id;

                          if($iconPosition === 'right') {
                              return [
                              wine(span, $this->wine_get_value(
                                $filered_attr,
                                $prefix,
                                $value,1
                               ),
                              attr(
                                $filered_attr,
                                $right_methods,
                                [ 
                                  id=>$right_id,
                                  classes=>$right_class
                                ],
                                $right_id,
                                $right_class
                               ),[
                                ["top_$right_methods"],
                                ["bottom_$right_methods"]
                               ])
                             ];
                          } else {
                             return [];
                          }
                       }
                     ]
                   ]) 
                ]],
                [__, 
                
                value =>[
                    
                    wine(__, [
                        child => [
                            please => function () use (
                                $prefix,
                                $valid_hook,
                                $falsy
                            ) {

                                // static hook collections
                                $hooks_data = [
                                  'top_defualt_',
                                  'bottom_defualt_',
                                  'top_clicked_',
                                  'bottom_clicked_'
                                ];
  
                                // Hook for icon before click
                                $hook_icon_default_top=$hooks_data[0].$prefix.$valid_hook;
                                $hook_icon_default_bot=$hooks_data[1].$prefix.$valid_hook;

                                // after clicked
                                $hook_icon_clicked_top=$hooks_data[2].$prefix.$valid_hook;
                                $hook_icon_clicked_bot=$hooks_data[3].$prefix.$valid_hook;

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
                    ])
                ]],
                [__, value=>[
                   wine(__, [
                     child=>[
                        please => function() use (
                            $prefix,
                            $valid_hook,
                            $value,
                            $iconPosition,
                            $attr
                          ) {

                            if(isset($attr)) { $filered_attr = $attr; } 
                            else {
                              $filered_attr = $this;
                            }

                            // menu lists title items
                            $left_id = wine_valid_id($prefix.$value);
                            $left_class = $prefix.$valid_hook;
                            $left_methods = "attr_".$prefix.$left_id;

                            if($iconPosition === 'left') {
                              return [
                                wine( span, $this->wine_get_value(
                                   $filered_attr,
                                   $prefix,
                                   $value,1
                                ),
                                attr(
                                  $filered_attr,
                                  $left_methods,
                                  [
                                    id=>$left_id,
                                    classes=>$left_class
                                  ],
                                  $left_id,
                                  $left_class
                                 ),[
                                  ["top_$left_methods"],
                                  ["bottom_$left_methods"]
                                 ])
                              ];
                            } else {
                              return [];
                            }
                        }
                     ]
                   ]) 
                ]]
              ] 
            ],attr(
              $attr,
              $left_list_method,
              [ 
                id=>$left_list_id,
                classes=>$left_list_classes
              ],
              $left_list_id,
              $left_list_classes
            ),
            [
             ["top_$left_list_method"],
             ["bottom_$left_list_method"]
           ]);

            if(isset($attr)) { $filered_attr = $attr; } 
            else {
              $filered_attr = $this;
            }

             // contents attr hook
             $icon_id = wine_valid_id($content);
             $icon_class = "content";
             $icon_methods = "attr_".$prefix.$icon_id;

             $acdn_menu[] = wine(
              div,$this->wine_get_value(
                $filered_attr,
                $prefix,
                $content
              ),
              attr(
               $filered_attr,
               $icon_methods,
               [id=>$icon_id,classes=>$icon_class],
               $icon_id,
               $icon_class
              ),[
               ["top_$icon_methods"], 
               ["bottom_$icon_methods"]
             ]);

        }

        if(isset($attr)) { $filered_attr = $attr; } 
        else {
          $filered_attr = $this;
        }

        $id    = wine_valid_id($prefix."menu_item");
        $class = 'a-wine';
        $icon_method = "attr_".$prefix.$id;
        
        return [
         wine(div,implode("",$acdn_menu),attr(
           $filered_attr,
           $icon_method, 
           [id=>$id,classes=>$class],
           $id,
           $class
         ),[
          ["top_$icon_method"],
          ["bottom_$icon_method"]
         ])
        ];

    }
    
    public function event(): array
    {
        return $this->event;
    }

}
