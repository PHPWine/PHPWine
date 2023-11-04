<?php

use PHPWineOptimizedHtml\OptimizedHtml;

$require_file = dirname(__DIR__) .'/OptimizedHtml.php';

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
 * @version   v1.3.4
 * @since     10.26.2023
 * @since     11.05.2023
 *
 */
  
if(file_exists($require_file)) {

  /**
  * @init
  * Defined : Check if the main file is exits!
  * @since: v1.3.4 
  * DT: 11.05.2023 **/
  require_once  $require_file;

} else {
  print "\PHPWineOptimizedHtml not found!";
  exit;
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
 * DT: 10.26.2023 **/

  function wine(string $tag,

  // @param first content string|callable|array
  string|callable|array $content = [],
  
  // @param second attr array
  string|array $attr = [],
 
  // @param third < Optional >  
  $enable_html = false
 
  ) {

    /**
     *  Init OptimizedHtml
     *  DT: 05.11.2023
     *  Defined: Wine method function version
     **/   
    $function_wine = new OptimizedHtml;

    // invoke into function version 
    $wine = $function_wine->wine($tag,
     
     $content, // @param
     $attr, // @param
     $enable_html // @param
  
    );

    return $wine;
    
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
 * DT: 10.26.2023 **/

  function value(
  
  // @param first Object nullable
  object $class = null,
 
  // @param second string call back function
  string|callable $call_back = null,
 
  // @param thordly arguments
  mixed ...$args 
 
  ) {

    /**
     *  Init OptimizedHtml
     *  DT: 05.11.2023
     *  Defined: Value method function version
     **/   
    $function_wine = new OptimizedHtml;

    // invoke into function version 
    $wine = $function_wine->value($class,
 
     $call_back, // @param
     $args // @param
    
    );

    return $wine;
    
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
 * DT: 10.26.2023 **/

  function magic( 
  
  // @param first Object nullable
  object $class = null,

  // @param second string call back function
  string|callable $call_back = null,

  // @param thordly arguments
  mixed ...$current_value
 
   ) {

    /**
     *  Init OptimizedHtml
     *  DT: 05.11.2023
     *  Defined: Value method function version
     **/ 
    $function_wine = new OptimizedHtml;

    // invoke into function version 
    $wine = $function_wine->magic($class,
   
     $call_back, // @param
     $current_value // @param
   
    );

    return $wine;
    
  }