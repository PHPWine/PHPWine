<?php 

 namespace PHPWineOptimizedHtml\doctrine;

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

 Class Doctrine extends \PHPWineOptimizedHtml\Doctrine\Layout  {
  
    public function __construct(array $wine_layout = [])
    {

      parent::__construct(
      $wine_layout
    );
      
  /**
   * --------------------------------------------------------------------------------------------
   * @condition
   * @wine_compare function
   * -------------------------------------------------------------------------------------------- 
   * check current key and validate if true attributes property 
   * 
   * @Defined : return : attemp invalid key! 
   * @since: v1.0 doctrine
   * @since: v2.0 wine
   * DT: 11.12.2023 */
      if ( 
       !wine_compare(

          $this->attributes,
        
         'DOCTRINE_REGISTERED_KEY_ATTR') 
      ) {
      throw new \Exception("attempt invalid key : ".$this->attributes."!");
      exit;
     }

  /**
   * --------------------------------------------------------------------------------------------
   * @condition
   * @wine_compare function
   * -------------------------------------------------------------------------------------------- 
   * check current key and validate if true x_axis property 
   * 
   * @Defined : return : attemp invalid key! 
   * @since: v1.0 doctrine
   * @since: v2.0 wine
   * DT: 11.12.2023 */
  if ( 
    !wine_compare(

       $this->x_axis,
      
      'DOCTRINE_REGISTERED_KEY_ROW') 
   ) {
   throw new \Exception("attempt invalid key : ".$this->my_axis."!");
   exit;
  }


  /**
   * --------------------------------------------------------------------------------------------
   * @condition
   * @wine_compare function
   * -------------------------------------------------------------------------------------------- 
   * check current key and validate if true my_axis property 
   * 
   * @Defined : return : attemp invalid key! 
   * @since: v1.0 doctrine
   * @since: v2.0 wine
   * DT: 11.12.2023 */
  if ( 
    !wine_compare(

       $this->mx_axis,
      
      'DOCTRINE_REGISTERED_KEY_ROWS') 
   ) {
   throw new \Exception("attempt invalid key : ".$this->y_axis."!");
   exit;
  }

  /**
   * --------------------------------------------------------------------------------------------
   * @condition
   * @wine_compare function
   * -------------------------------------------------------------------------------------------- 
   * check current key and validate if true my_axis property 
   * 
   * @Defined : return : attemp invalid key! 
   * @since: v1.0 doctrine
   * @since: v2.0 wine
   * DT: 11.12.2023 */
  if ( 
    !wine_compare(

       $this->y_axis,
      
      'DOCTRINE_REGISTERED_KEY_COLUMN') 
   ) {
   throw new \Exception("attempt invalid key : ".$this->my_axis."!");
   exit;
  }


  /**
   * --------------------------------------------------------------------------------------------
   * @condition
   * @wine_compare function
   * -------------------------------------------------------------------------------------------- 
   * check current key and validate if true my_axis property 
   * 
   * @Defined : return : attemp invalid key! 
   * @since: v1.0 doctrine
   * @since: v2.0 wine
   * DT: 11.12.2023 */
  if ( 
    !wine_compare(

       $this->my_axis,
      
      'DOCTRINE_REGISTERED_KEY_COLUMNS') 
   ) {
   throw new \Exception("attempt invalid key : ".$this->y_axis."!");
   exit;
  }


  /**
   * --------------------------------------------------------------------------------------------
   * @condition
   * @wine_compare function
   * -------------------------------------------------------------------------------------------- 
   * check current key and validate if true top later hook 
   * 
   * @Defined : return : attemp invalid key! 
   * @since: v1.0 doctrine
   * @since: v2.0 wine
   * DT: 11.12.2023 */
     if ( 
      !wine_compare(

         $this->top_later,
        
        'DOCTRINE_REGISTERED_KEY_TOP_LATER')
      ) {
      throw new \Exception("attempt invalid key : ".$this->top_later."!");
      exit;
     }


  /**
   * --------------------------------------------------------------------------------------------
   * @condition
   * @wine_compare function
   * -------------------------------------------------------------------------------------------- 
   * check current key and validate if true bottom later hook
   * 
   * @Defined : return : attemp invalid key! 
   * @since: v1.0 doctrine
   * @since: v2.0 wine
   * DT: 11.12.2023 */
     if ( 
      !wine_compare(

         $this->bottom_later,
        
        'DOCTRINE_REGISTERED_KEY_BOTTOM_LATER') 
     ) {

      throw new \Exception("attempt invalid key : ".$this->bottom_later."!");
      exit;
     }

  }     


 }

    