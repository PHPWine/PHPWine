<?php namespace PHPWineVanillaFlavour\Wine\System; ?>
<?php 

/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour v1.3.1.0 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.3.1.0 free software: you can redistribute it and/or modify.
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
 * @category   PHPLibrary PHPWine\VanillaFlavour
 * @package    PHPHtml-Optimizer | CodeDesigner/Enhancer | Advance Form Builder | Handling Form Validation | Form Validation v2 | BASIC-Authentication | HtmlMinifier
 *            
 *            
 * @author    Leinner Zednanref <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/nielsofficeofficial/PHPWine
 * @link      https://github.com/nielsofficeofficial/PHPWine/blob/PHPWine_Vanilla_Flavour/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   v1.3.1.0
 * @since     04.13.2022
 *
 */

class WineURL {
       
    /**
     * Defined: Properties valid URL.
     * @var @property $URL
     *
     * @since    1.0.0
     * @since    09.20.2022 */
    private static $URL;

   /**
    * @since v1.0 | 09142022
    * Defined: QuizMatchPages method for processing pages */
    static public function setURL( $url ) {

        /**
         * Defined: Validate restric all string setter.
         * @since    1.0.0
         * @since    09.19.2022 */   
        if (!preg_match("/^[a-zA-Z0-9._-]/", $url)) : return;  endif;
        if (!is_string($url)) : return;  endif;

        // set valid URL
        self::$URL = $url;        
    } 

    /**
     * Defined: Getter URL Validation Booleen.
     *
     * @since    1.0.0
     * @since    09.19.2022 */    
    static public function URL() {
        
        /**
         * Defined: Getter Get valid URL.
         * @since    1.0.0
         * @since    09.19.2022 */  
        if(isset($_REQUEST[self::$URL]) == true ) { return true; } 
        else {
           return false;
        }

    } 

    static public function getCurrentURL( bool $define = false) {

        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')  
    
        {  $__url = 'https://'; } else { $__url = 'http://'; }

           $__url.= $_SERVER['HTTP_HOST'];    
           $__url.= $_SERVER['REQUEST_URI'];    
        
           $__getUrl = ( $__url == TRUE ) ?  $_SERVER['PHP_SELF'] : false;
            
        return ($__getUrl.'?'.$_SERVER['QUERY_STRING']);
    
    }
    

}