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
       new \PHPWineOptimizedHtml\OptimizedHtml();
    }

    public function content($menu_items, $prefix, $obj)
    {
        $tab_content = array();
     
        foreach ($menu_items as $value => $content) {

            //clean up to make vbalid hook
            $valid_hook = $this->valid_hook($value);

            // push array hook val for events 
            array_push($this->events,"$valid_hook");

            // Container and contents
            $tab_con_item_id = wine_valid_id($prefix.$content);
            $tab_con_item_class = $prefix.$valid_hook."_tab";
            // hook for filter attributes
            $tab_method_items = "attr_".$prefix.$tab_con_item_id;
            // hook inert top and bottom
            $tab_hook_insert  = $prefix.$tab_con_item_id;

            // conatiner of contents
            $container_id = wine_valid_id($valid_hook."_tab");
            $containerClass = $prefix."tab-content";
            // hook insert top and bottom
            $con_hook_insert = $prefix.$container_id;

            $tab_content[] = wine(div,
            wine(div,
             $this->wine_get_value(
              $obj,
              $prefix,
              $content,1
            ),
            attr(
              $obj,
              $tab_method_items,
              [
                 id=>$tab_con_item_id,
                 classes=>$tab_con_item_class
              ],
              $tab_con_item_id,
              $tab_con_item_class
            ),[
              ["top_$tab_hook_insert"],
              ["bottom_$tab_hook_insert"]
            ]),[
             id=>$container_id,
             classes=>$containerClass,
            ],[
             ["top_$con_hook_insert"],
             ["bottom_$con_hook_insert"] 
            ]);
           
          }

          // Dynamic vaid ID
          $tab_container_id = wine_valid_id($prefix."tab_content");

          // filter hook attr
          $tab_method_items = "attr_".$prefix.$tab_container_id;

          // hook for top and bottom
          $tab_hook_insert  = $prefix.$tab_container_id;

          return [
            wine(div,implode("",$tab_content),
            attr(
              $obj,
              $tab_method_items,
              [
                id=>$tab_container_id,
                classes=>'t-wine-content'
              ],
              $tab_container_id,
              't-wine-content'
             ),[
              ["top_$tab_hook_insert"],
              ["bottom_$tab_hook_insert"]
         ])];

    }

    public function event(): array
    {
        return $this->event;
    }

}
