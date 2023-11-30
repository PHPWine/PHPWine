<?php 

namespace PHPWineOptimizedHtml;

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

/**
 * @copyright (c) 2023 Optimized Html [Intialized structure files] Cooked by nielsoffice
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
 * @since     11.14.2023
 * @since     11.14.2023
 *
 */

class Init {
 
  /**
   * @var array init html tag
   * @property
   * Defined : html entity
   * @since: v1.0
   * DT: 11.14.2023 **/  
   private $init;

   public function __construct(...$init) {

     $this->init = $init;  

   } 

   public function init() {

    for ( $each = 0; $each < count($this->init); $each++ ) 
    { 
      
    /**
     * --------------------------------------------------------------------------------------------
     * Defined: Registered file 
     * @property
     * -------------------------------------------------------------------------------------------- 
     * Initialized all structure 
     * 
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
     foreach ($this->init[$each] as $init) {

      if(realpath(__DIR__. "/wine/$init")) {
        
        new \PHPWineOptimizedHtml\DirectoryFile(
          $init
        );

      } else {

        throw new \Exception("\init failed please check structure files...");
        exit();

      }

    }
   }

  }

}