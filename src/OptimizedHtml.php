<?php 
 
 namespace PHPWineOptimizedHtml;

 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);

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
 * @version   v2.0
 * @since     10.26.2023
 * @since     11.05.2023
 *
 */

 class OptimizedHtml extends \PHPWineOptimizedHtml\Provider {
   
  public function __construct( bool $disable_html = false)
  {

 /**
   * --------------------------------------------------------------------------------------------
   * @var constant|String 
   * @property
   * -------------------------------------------------------------------------------------------- 
   * Initialized Dicrectory registered for layout all constant  
   * 
   * @Defined : Constant Layout
   * @since: v1.0 doctrine
   * @since: v2.0 wine
   * DT: 11.10.2023 
   */
   $require = dirname( __DIR__ ) .'/src/index.php';

   if(file_exists($require)) {

    require_once ($require);

   } else {
    
    throw new \Exception(wine_failed_to()['index']);
    exit();

   }

  
 /**
   * --------------------------------------------------------------------------------------------
   * @var Array 
   * @property
   * -------------------------------------------------------------------------------------------- 
   * Initialized injection bypassing wine   
   * 
   * @Defined : throw array exception
   * @since: v1.0 doctrine
   * @since: v2.0 wine
   * DT: 11.11.2023 
   */
  array_push(
    
    // Init array error handler
    $this->errors,
    
    // passing message 
    wine_handler_response()['e_warning'],

    wine_handler_response()['e_scan'],
    
    wine_handler_response()['e_wine']
 
   );
   
  /**
   * --------------------------------------------------------------------------------------------
   * @var constant|String 
   * @property
   * -------------------------------------------------------------------------------------------- 
   * Initialized PHPWine optimizedHtml provider construct  
   * 
   * @Defined : Constant Wine
   * @since: v1.0 doctrine
   * @since: v2.0 wine
   * DT: 11.10.2023 
   */
   parent::__construct(
     child, 
     attr, 
     value, 
     please, 
     __, 
     section, 
     $disable_html
   );

  }

 }