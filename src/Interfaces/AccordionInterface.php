<?php 

namespace PHPWineOptimizedHtml\Interfaces;

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

interface AccordionInterface
{

  /**
   * --------------------------------------------------------------------------------------------
   * @method accordion
   * -------------------------------------------------------------------------------------------- 
   * This method is a hook to execute the new instance of accordion 
   * 
   * $wine = new WineAccordion([
   *  prefix => 'wine_',
   *  icon => [
   *    'position' => 'right', // right or Left you can also top and bottom via css flex : direction
   *    'default'  => '+',     // default 
   *    'clicked'  => 'X',     // after clicked icon
   *   ],
   *   accordion => (array) $assoc_array
   * ]) 
   * 
   * $wine->accordion();
   * 
   * Make you when you query your data from your Model to Controller it is associated array data to be able to 
   * iterrate the value into accordion
   * 
   * $assoc_array: This variable is a associated of arrays of data 
   * ex.$datas = [
   *   'title'  => 'content',
   *   'menu 2' => 'content 2'
   *   
   * ]
   * 
   * PREVIEW: 
   * 
   * <div class="wine_list-item" id="one">
   *  <span class="wine_one">Only</span>
   *  <span class="wine_icon-left done">+</span>
   *  <span class="wine_icon-left cone" style="display: none;">X</span>
   * </div>
   * <div class="content" style="display: none;">Fear</div>
   * 
   *
   * HOOKS:
   * 
   * function top_defualt_wine_one() { return "icon Top"; }
   * function bottom_defualt_wine_one() { return wine(span,"icon Bottom");}
   * 
   * function top_clicked_wine_one() { return "icon Top clicked"; }
   * function bottom_clicked_wine_one() { return "icon Bottom clicked";}
   * 
   * function Only() { return "One"; }
   * 
   * @Defined : execute new instance accordion
   * @since: v1.0 doctrine
   * @since: v2.5.0 wine */
  
  public function accordion(); 

}
