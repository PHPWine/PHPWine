<?php 

namespace PHPWineOptimizedHtml;

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
 
 /**
 * @copyright (c) 2023 Optimized Html [Wine HTML Elements] Cooked by nielsoffice
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
 * @version   v1.4.0
 * @since     10.26.2023
 * @since     11.05.2023
 *
 */

class Element extends \PHPWineOptimizedHtml\Provider {
      
  // default count entity registered
  const count = 153;  
    
  /**
   * @var array
   * @property
   * Defined :element
   * @since: v2.0
   * DT: 11.14.2023 **/  
    public $tag;

  /**
   * @var array
   * @property
   * Defined :element
   * @since: v2.0
   * DT: 11.14.2023 **/  
    private $entity;

  /**
     * --------------------------------------------------------------------------------------------
     * Defined: initialized html verifier
     * @property
     * -------------------------------------------------------------------------------------------- 
     * Initialized all structure 
     * 
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.14.2023 
     */
    public function __construct(array $elements = [])
    {
       $this->tag = $elements;  
       $this->entity = wine_html();
    }
  
  /**
     * --------------------------------------------------------------------------------------------
     * Defined: execute failed to if tag has beed modified! 
     * @property
     * -------------------------------------------------------------------------------------------- 
     * html tags/ element
     * 
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
    public function failed_to() {
      
      if( count(wine_html()) !== self::count ) {
  
        self::restricted();
        throw new \Exception("element had been modified !");
        exit;
  
      } else {
  
       /**
         * --------------------------------------------------------------------------------------------
         * Defined: validate html wine element 
         * @property
         * -------------------------------------------------------------------------------------------- 
         * valid element tag html to wine 
         * 
         * @since: v1.0 doctrine
         * @since: v2.0 wine
         * DT: 11.14.2023 
         */
        foreach ($this->tag as $key_value) {
          if(!in_array(strtolower($key_value), $this->entity)) {
            throw new \Exception("\invalid attemp to modify or this is not valid element : ".strtolower($key_value));
            exit;
          } 
         }
  
      }
  
    }
  
    /**
     * --------------------------------------------------------------------------------------------
     * Defined: Registered tags 
     * @property
     * -------------------------------------------------------------------------------------------- 
     * Initialized all html valid tags 
     * 
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.14.2023 
     */
    static private function restricted() {
  
      echo "<pre>";
      print_r(wine_html());
      echo "</pre>";
  
    }
    
  }