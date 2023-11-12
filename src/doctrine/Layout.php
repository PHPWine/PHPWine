<?php 

 namespace PHPWineOptimizedHtml\Doctrine;

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

 Class Layout  {

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : Parent Doctrine container attributes html
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    private $attributes;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks Doctrine dynamic key for html
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    private $hook;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks Doctrine dynamic row for html
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    private $x_axis;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks Doctrine dynamic multiple row for html
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    private $mx_axis;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks Doctrine dynamic col for html
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    private $y_axis;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks Doctrine dynamic multiple cols for html
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    private $my_axis;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks Doctrine col key cols for hook cb
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    private $magic;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks top later element
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    private $top_later;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks bottom later element
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    private $bottom_later;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : Visibility base on width window 
     * Defined : Responsive base on width window 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    private $window;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : Visibility base on width parent element html 
     * Defined : Responsive base on width parent element html 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    private $parent;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : Visibility rely on mobile 
     * Defined : Responsive rely on mobile 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/

    private $mobile;
    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : Visibility rely on tablet 
     * Defined : Responsive rely on tablet 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    private $tablet;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : Visibility rely on laptop 
     * Defined : Responsive rely on laptop 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/    
    private $laptop;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : Visibility rely on desktop 
     * Defined : Responsive rely on desktop 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/ 
    private $desktop;
     
    public function __construct( array ...$wine_layout )
    {
     

    }


    /**
     * --------------------------------------------------------------------------------------------
     * @method visibility 
     * @public
     * -------------------------------------------------------------------------------------------- 
     * This method desifn for client to choose visibility of element in different size screen 
     * might be select base on parent element or window grid  
     * 
     * @Defined : Constant Layout
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
    public function visibility( 
            
        string $base  = window,
        array $config = [] 
        
    ) 
    
    {
    # Grid will base on ! 
    if( $base !== window) 
    {
        $this->parent = $base; 
    }
        

    }

  
    /**
     * --------------------------------------------------------------------------------------------
     * @method responsive 
     * @public
     * -------------------------------------------------------------------------------------------- 
     * This method desifn for client to choose responsive of element in different size screen 
     * might be select base on parent element or window grid  
     * 
     * @Defined : Constant Layout
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
    public function responsive( 
        
        string $base  = window, 
        array $config = [] 
        
    ) 
    
    {
    # Grid will base on !
    if( $base !== window) 
    {
        $this->parent = $base; 
    } 

    }
  
    private function layout() {
      

    
         
    }

    /**
     * @method is_defined client key ?  
     * Defined : check attribute doctrine 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.12.2023 **/    
    private function is_defined( array $keys = [], array ...$wine_layout ) {

      $wine_registered_valid_keys = wine_valid_keys();

      if(operations($keys, 1, EQLESS)) {

        $is_valid = $keys[0]; 

        $get_valid_key = $this->wine_hooks_filter_assigned(
            $is_valid, 
            $wine_registered_valid_keys
        );

        $get_valid_key = array_values(
            $wine_registered_valid_keys
        )[$get_valid_key];

        if( $get_valid_key == true || !empty($get_valid_key)) {
          return $wine_layout[0][$is_valid];
        }


      }  else if(operations($keys, 2, SUPER)) {

        $is_valid = $keys[1];
    
        $get_valid_key = $this->wine_hooks_filter_assigned($is_valid, $wine_registered_valid_keys);
        $get_valid_key = array_values($wine_registered_valid_keys)[$get_valid_key];

        if( $get_valid_key == true || !empty($get_valid_key)) {

            $wine_key = []; 
        
            for ( $wine_set = 0; $wine_set < count($keys); $wine_set++) {  
                
               $wine_key[] = $keys[$wine_set]; 
            
            };
    
            $kk = []; 
         if(isset($wine_layout[0][$wine_key[0]][xrows])) {
           return [
            'row_static'  => $wine_layout[0][$wine_key[0]][xrows],
            'row_dynamic' => $wine_layout[0][$wine_key[0]][xrows][0][1] 
           ];
 
         } else { $kk[] = null; }
 
         if(isset($wine_layout[0][$wine_key[0]][columns])) {
            return [
            'col_static'  => $wine_layout[0][$wine_key[0]][columns],
            'col_dynamic' => $wine_layout[0][$wine_key[0]][columns][0][1] 
           ];
 
         } else { $kk[] = null; }
 
         return $kk;
           
        }

      } else if(operations($keys, 4, SUPER)) { 

        $is_valid = $keys[1]; 

        $get_valid_key = $this->wine_hooks_filter_assigned(
            $is_valid, 
            $wine_registered_valid_keys
        );
        
        $get_valid_key = array_values(
            $wine_registered_valid_keys
         )[$get_valid_key];
       
        if( $get_valid_key == true || !empty($get_valid_key)) {

        $wine_key = []; 
        
        for ( $wine_set = 0; $wine_set < count($keys); $wine_set++) {  
            
           $wine_key[] = $keys[$wine_set]; 
        
        };

        $kk = []; 
        
        if(isset($wine_layout[0][$wine_key[0]][xrow])) {
           return [
           'row_magic'  => $wine_layout[0][$wine_key[0]][xrow][0][0],
           'row_action' => $wine_layout[0][$wine_key[0]][xrow][0][1] 
          ];

        } else {
           $kk[] = null;
        }

        if(isset($wine_layout[0][$wine_key[0]][column])) {
           return [
           'col_magic'  => $wine_layout[0][$wine_key[0]][column][0][0],
           'col_action' => $wine_layout[0][$wine_key[0]][column][0][1] 
          ];

        } else {
            $kk[] = null;
        }

        return $kk;
  
       }
      }
    }

    /**
     * @method assigned hook to the dynamic element  
     * Defined : check attribute doctrine 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.12.2023 **/    
    private function wine_hooks_filter_assigned( $is_valid , array $valid_keys = [] ) {

      if($this->is_valid_key( $is_valid , $valid_keys)) {
      
        $get_valid_key = array_search($is_valid,
          array_keys($valid_keys)
        );

       } else {

        throw new \Exception("\invalid key from doctrine : 
            $is_valid [phpwine.github.io/documents/]"
        );
        exit;

       }  
      
      if( 
        !is_null($get_valid_key) || 
        !empty($get_valid_key)   || 
        $get_valid_key !== false 
      ) { 

       return $get_valid_key;
      }
      
    }

    /**
     * @method is_valid_key 
     * Defined : validate if valid key from wine.
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.12.2023 **/    
    private function is_valid_key( string|array $wine_key, array $valid_keys = []) {

      if(in_array($wine_key,array_keys($valid_keys))) { 
        return true;
      }   

    }
         

 }