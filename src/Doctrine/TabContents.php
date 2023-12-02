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

class TabContents extends \PHPWineOptimizedHtml\Doctrine\Tab
{
    public $event = [];

    public function __construct()
    {
        $wine = new \PHPWineOptimizedHtml\OptimizedHtml();
    }

    public function content($menu_items, $prefix)
    {
        $tab_content = array();
     
        foreach ($menu_items as $value => $content) {

          // static hoook function
           $hook_data = [
            'top_tab_',
            'bottom_tab_'
           ];
  
           $hook_tab_item    = wine_valid_hook($value,3);
           $hook_tab_content = wine_valid_hook($content,3);

           // clean up to make vbalid hook
            $valid_hook = $this->valid_hook($value);
            // Hook for list item
            $hook_item_top=$hook_data[0].$hook_tab_item;
            $hook_item_bot=$hook_data[1].$hook_tab_item;
            // Hook for list item content
            $hook_content_top=$hook_data[0].$hook_tab_content;
            $hook_content_bot=$hook_data[1].$hook_tab_content;

            array_push($this->events,"$valid_hook");

            $none_menu[] = wine(div,[
              child => [
                   
                [ __,
                value =>[later(
                 $hook_item_top,
                 $valid_hook,
                 $value,
                 $content
                )]
                ],
                [ span, 
                  attr =>[[classes=>$prefix.$valid_hook]], 
                  value=>[$value]
                ],
                [ __,
                 value =>[later(
                  $hook_item_bot,
                  $valid_hook,
                  $value,
                  $content
                )]
                ]

            ]],[
              classes=>$prefix."tab-item",id=>wine_valid_id(
               $valid_hook
            )]);

            $tab_content[] = wine(div,[
             child => [
                  
               [ __,
                value =>[later(
                 $hook_content_top,
                 $valid_hook,
                 $value,
                 $content
                )]
               ],
               [ div, 
                 attr =>[[classes=>$prefix.$valid_hook."_tab"]], 
                 value=>[$content]
               ],
               [ __,
                value =>[later(
                 $hook_content_bot,
                 $valid_hook,
                 $value,
                 $content
                )]
               ],

             ] 
            ],[
             classes=>$prefix."tab-content",
             id=>wine_valid_id(
              $valid_hook."_tab"
            )]);
           
          }

          return [
            wine(div,implode("",$tab_content),[id=>wine_valid_id(
             $prefix."tab_content"
           )])
          ];

    }

    public function event(): array
    {
        return $this->event;
    }

}
