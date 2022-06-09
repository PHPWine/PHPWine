<?php namespace PHPWineVanillaFlavour\Wine\System; ?>
<?php 

use \PHPWineVanillaFlavour\Wine\System\Auth;
 
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
 
 class Validate extends System
{
    
  /**
   *
   * Defined DATA Form array handler 
   * HTML field and error msg
   * @since 04.13.21
   * @since v1.0.0.0
   *
  **/
  public static $DATAFORM   = [];

 /**
  *
  * Defined HASCONTAINS() check data if not empty !
  * @since 04.05.21
  * @since v1.0.0.0
  *
 **/ 
public static function HASCONTAINS(array $input ) 
{
        
 $data    = SYSTEM::POSTDATA( $input );
 $request = SYSTEM::SANITIZEREQUEST($_POST[$data[0]]);
 if( !isset($request) || empty($request) || is_null($request) ) : return SYSTEM::SANITIZEREQUEST($data[1]); 
 else                                                           : return $request; 
 endif;

}
   
/**
 *
 * Defined ERROR() check error message !
 * @since 04.05.21
 * @since v1.0.0.0
 *
**/ 
 public static function ERROR(string  $result, array $require )
 {
 
   $data = SYSTEM::POSTDATA( $require ); 
   if( $result !== $data[1] ) : return ''; 
   else                       : return $result; 
   endif;

 }

    /**
    *
    * Defined RETURNSQL() method
    * @since 04.05.21
    * @since v1.0.0.0
    *
   **/ 
  public static function CHECKQUERY(string $table, array $col_id, array $col_name = null)
  {
     return  [

      [$table]
     ,[$col_id]
     ,[$col_name]

    ];

  }

 /**
   *
   * Defined CHECK STRING TYPE error messages
   * @since 10.15.21
   * @since v1.1.3.0
   * 
  **/
  public static function STRINGTYPE(   $tag_name , $eCatch_errors) { if(!is_string( $tag_name ))   : return $eCatch_errors; endif;  }

 /**
  *
  * Defined CHECK INTEGER TYPE error messages
  * @since 10.15.21
  * @since v1.3
  * 
 **/
 public static function INTEGERTYPE(  $tag_name  , $eCatch_errors) { if(!is_integer( $tag_name ))  : return $eCatch_errors; endif;  }

 /**
  *
  * Defined CHECK FLOAT TYPE error messages
  * @since 10.15.21
  * @since v1.1.3
  * 
 **/
 public static function FLOATTYPE(    $tag_name  , string $eCatch_errors = null ) { if(!is_float( $tag_name ))    : return $eCatch_errors; endif;  }

 /**
  *
  * Defined CHECK NUMERIC TYPE error messages
  * @since 10.15.21
  * @since v1.1.3
  * 
 **/
 public static function NUMERICTYPE( $tag_name  , string $eCatch_errors = null ) { if(!is_numeric( $tag_name ))  : return $eCatch_errors; endif;  }

 /**
  *
  * Defined  FORM VAlidation error messages
  * @since 10.21.21
  * @since v1.1.4
  * 
 **/
 public static function FORM( string $input_result = null , array $valid_type = null ) { return self::VALIDATION(  $input_result, $valid_type );  }
 
 /**
  *
  * Defined CATCH() method is restrict only single data type for registration field !
  * @since 04.10.21
  * @since v1.0.0.0
  *
 **/ 
  public static function CATCH(string $input_result = null, string $bind_result = null, array $valid_type = null ) { return SYSTEM::RETURN_RESTRICTED_DATA($input_result, $bind_result, $valid_type);  }

/**
 *
 * Defined BIND() check error message !
 * @since 04.05.21
 * @since v1.0.0.0
 *
**/ 
public static function BIND( $connection, array $bind_user_data = null  ) { return AUTH::BIND( $connection , $bind_user_data  , SESSION_REGISTERDATA_REQUEST ); }

 /**
  *
  * Defined  FORM  VALIDATION system error messages
  * @since 10.21.21
  * @since v1.1.4.0
  * 
 **/
 private static function VALIDATION( string $input_result = null , array $valid_type = null ) { return SYSTEM::RETURN_RESTRICTED_DATA( $input_result, NULL,  $valid_type ); }
 

}