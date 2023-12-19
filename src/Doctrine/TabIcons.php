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
* @link      https://github.com/PHPWine/WineTab/tree/main
* @link      https://github.com/PHPWine/WineTab/README.md
* @version   v1.0
* @since     11.29.2023
*
*/

class TabIcons extends \PHPWineOptimizedHtml\Doctrine\Accordion
{
    public $event = [];

    public function __construct()
    {
       new \PHPWineOptimizedHtml\OptimizedHtml();
    }

    public function Position($menu_items, $prefix, $falsy, $iconPosition, $obj)
    {
        $acdn_menu = [];

        if($obj) { $filered_attr = $obj; } 
        else {
          $filered_attr = $this;
        }

        foreach ($menu_items as $value => $content) {

            $hook_data = [
              'top_tab_',
              'bottom_tab_',
            ];

            // clean up to make vbalid hook
            $valid_hook = wine_valid_hook($value,3);
              
            $hook_tab_item = wine_valid_hook($value,3);
    
            // Hook for list item
            $hook_item_top=$hook_data[0].$hook_tab_item;
            $hook_item_bot=$hook_data[1].$hook_tab_item;

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
                            $filered_attr
                         ) {

                          // menu lists title items
                          $right_id = wine_valid_id($prefix,$value);
                          $right_class = $prefix.$valid_hook;
                          $right_methods = "attr_".$prefix.$right_id;

                          if($iconPosition === 'right') {

                              return [
                               wine(span,$this->wine_get_value(
                                $filered_attr,
                                $prefix,
                                $value,1
                               ), 
                              attr(
                                $filered_attr,
                                $right_methods,
                                [
                                  id =>$right_id,
                                  classes=> $right_class
                                ],
                                $right_id,
                                $right_class
                               ),[
                                ["top_$right_methods"],
                                ["bottom_$right_methods"]
                              ])];

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
                                // Hook for icon item
                                $hook_icon_default_top =
                                    "top_defualt_" . $prefix . $valid_hook;
                                $hook_icon_default_bot =
                                    "bottom_defualt_" . $prefix . $valid_hook;

                                $default = $falsy["properties"][1] ?? false;

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
                            $filered_attr
                          ) {

                            // menu lists title items
                            $left_id = wine_valid_id($prefix,$value);
                            $left_class = $prefix.$valid_hook;
                            $left_methods = "attr_".$prefix.$left_id;

                            if($iconPosition === 'left') {
                              return [
                                wine( span,
                                 $this->wine_get_value(
                                   $filered_attr,
                                   $prefix,
                                   $value,1
                                ),[
                                  id => $left_id,  
                                  classes=>$left_class 
                                ],[
                                 ["top_$left_methods"],
                                 ["bottom_$left_methods"]   
                             ])];
                            } else {
                               return [];
                            }
                        }
                     ]
                   ]) 
                ]]
              ] 
            ],[
                id => wine_valid_id(null,$valid_hook),
                classes => $prefix . "list-item",
            ],
            [[$hook_item_top], [$hook_item_bot]]);

        }

        $tab_lists_id = wine_valid_id($prefix,"tab_item");
        $tab_method_lists = "attr_".$prefix.$tab_lists_id;
        
        return [
          wine(div,implode("",$acdn_menu),
           attr(
            $filered_attr,
            $tab_method_lists,
            [  
               id=>$tab_lists_id, 
               classes=>'t-wine-lists'
            ],
            $tab_lists_id,
            't-wine-lists'
        ),[
         ["top_$tab_method_lists"],
         ["bottom_$tab_method_lists"] 
       ])];
        
    }

    public function event(): array
    {
        return $this->event;
    }

}
