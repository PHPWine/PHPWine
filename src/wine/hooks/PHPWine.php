<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

 $require_file = dirname(dirname(__DIR__)) . '/Provider.php';

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
 * @version   v1.4.0
 * @since     10.26.2023
 * @since     11.05.2023
 *
 */

if (file_exists( $require_file)) {
           
    require_once $require_file;

    /**
     * @init
     * Defined : Check if the main file is exits!
     * @since: v1.3.4
     * DT: 11.05.2023 **/

    if (!class_exists("wine")) {
        /**
         * @init
         * Defined : function wine
         * @since: v1.3.4
         * DT: 11.06.2023 *
         */
        function local_provider(array $__w = [], mixed ...$vm)
        {
            $wine = new class extends \PHPWineOptimizedHtml\Provider {
                
                public $wine;
                public const LP = ["dp", "init", "cbv", "cbm","attr","wpd","wsf"];
                /**
                 *  Init local provider wine
                 *  DT: 06.11.2023
                 *  Defined: constract access main wine optimizedHtml
                 *
                 */
                public function __construct()
                {

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

                    parent::__construct(
                        child, 
                        attr, 
                        value, 
                        please, 
                        __, 
                        section, 
                        false 
                    );


                }
                // get section
                public $element = section;
                /**
                 *  Init local provider wine
                 *  DT: 06.11.2023
                 *  Defined: publi function set section
                 *
                 */
                public function get_section_element_from_provider()
                {
                    return $this->element;
                }
                /**
                 *  Init local provider wine
                 *  DT: 06.11.2023
                 *  Defined: wine method
                 **/
                public function wine_generate_optimized_element_method(
                   string $t = '',
                   string|callable|array $c = [],
                   string|array $a = [],
                   array $h = [],
                   bool $e = false
                    
                ) {

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
                return $this->init_method_wine(
                    $t, $c, $a, $h, $e
                   );
                   
                }
                /**
                 *  Init local provider value /content
                 *  DT: 06.11.2023
                 *  Defined: wine method ***/
                public function wine_local_provider_assigned_hook(
                    object|string $t = null,
                    string|callable $c = null,
                    mixed ...$a
                ) {
                    return $this->optimized_html(
                       __,
                       null,
                       $this->wine_attribute_hook(false, $t, $c, ...$a)
                    );

                
                }
                /**
                 *  Init local provider magic filter
                 *  DT: 06.11.2023
                 *  Defined: wine method ***/
                public function wine_local_provider_filter_hook(
                    object|string $t = null,
                    string|callable $c = null,
                    mixed ...$a
                ) {

                 return $this->ini_magic_wine(
                      $t,
                      $c,
                   ...$a
                  );

                }
                /**
                 *  Init local provider magic filter
                 *  DT: 06.11.2023
                 *  Defined: wine method ***/
                public function wine_local_provider_attr_hook(
                    string|object $t = null,
                    string|callable $c = null,
                    mixed ...$a
                ) {
                    if (method_exists($t, $c)) {
                        /**
                         * @method
                         * Defined : call back value from method if exist and current value as argument
                         * @since: v1.0
                         * DT: 10.30.2023 *
                         */
                        return $this->wine_attribute_hook(true, $t, $c, ...$a);
                        
                    } elseif(function_exists($c)) {

                    /**
                     * @condition
                     * Defined : call back value from function if exist and current value as argument
                     * @since: v1.3.7
                     * DT: 11.08.2023 *
                     */
                       return call_user_func($this->optimized_html(
                            __,
                            [],
                            $c
                         )
                       ,...$a);

                    } else {
                        
                    /**
                     * @method
                     * Defined : Only if the emthod is not exist then this is the current value
                     * @since: v1.0
                     * DT: 10.30.2023 *
                     * If the attribute in hook is a string then print as is
                     */
                    if( is_string($a) ) 
                        {
                        return implode("",$a); 
                        } 
                        elseif( is_array($a[0])) 
                        {
                        return $this->set_attributes_html($a[0]);
                        }

                    }
                }

                /**
                 * @method
                 * Defined : wine_sanitized valid content
                 * @since: v2.0
                 * DT: 11.21.2023 
                 **/
                public function wine_cleaned_sanitized(string $to_clean = null ) : array|string {
                    
                /**
                 * --------------------------------------------------------------------------------------------
                 * @var Array
                 * @property
                 * -------------------------------------------------------------------------------------------- 
                 * filter and removed special char invalid for html  
                 * 
                 * @Defined : filter lists
                 * @since: v1.0 doctrine
                 * @since: v2.0 wine
                 * DT: 11.22.2023 
                 */
                    $find_lists = array(

                       "&lt;/"
                      ,"&lt;"
                      ,"&gt;"
                      ,"/"
                      ,"/&gt;"
                      ,"/&gt;"
                      ,"&lt;"
                      ,"&lt;/"
                      ,"&lt;/ "
                      ,"&lt; /"
                      ,"&lt; / "

                     );
                
                    /**
                     * -----------------------------------------------------------------
                     * @Defined : convert those entries into entitites
                     * ----------------------------------------------------------------- */
                     $converted = htmlentities($to_clean);

                     /**
                      * -----------------------------------------------------------------
                      * @Defined : sanitized varchar list into valid entities
                      * ----------------------------------------------------------------- */
                      $__content_type = "%s"; $entity_decode = sprintf($__content_type, $converted);
                     /**
                      * -----------------------------------------------------------------
                      * @Defined : Prevented output
                      * ----------------------------------------------------------------- */
                      $wcleared = str_ireplace($find_lists,'',$converted);
                     /**
                      * -----------------------------------------------------------------
                      * @Defined : falsy status there is malicious
                      * ----------------------------------------------------------------- */
                      $is_valid = str_contains(str_ireplace($find_lists,'true',$converted),'true');

                    /**
                     * -----------------------------------------------------------------
                     * @Defined : check if there any of those are being present then 
                     * return error message !
                     * ----------------------------------------------------------------- */              
                    if($is_valid) {

                      return [
                         // get Origin result 
                         WINE_ORIGIN  => $entity_decode,
    
                         // get prevent result
                         WINE_PREVENT => $wcleared,
    
                         // get status result                       
                         WINE_STATUS  => (bool) $is_valid,

                         // get status result                       
                         WINE_ERROR  => wine_failed_to()['in_valid']

                      ];
                      
            
                    } else {

                       return (string) $wcleared;

                    }     

                }

                /**
                 * @method
                 * Defined : wine local provder hook functions
                 * @since: v2.0
                 * DT: 11.21.2023 
                 **/
                public function wine_local_provider(
                    string|callable $func_provider = null,
                    mixed ...$args 
                ) : mixed {
            
                   if(function_exists($func_provider)) {
            
                     return $this->optimized_html(
                       __,
                       [],
                       $this->wine_callable_hook($func_provider,...$args)
                     );                    
                
                   }  else {
                    
                    return false;
                   }
                 
                }
                
            };
           
            /**
             * Defined : filter local provider public value
             * @since: v1.3.7
             * DT: 11.08.2023 *
             */            
            if (array_key_exists($wine::LP[2], $__w)) {
                $cbv = $wine->wine_local_provider_assigned_hook(
                    $__w[$wine::LP[2]][0] ?? "",
                    $__w[$wine::LP[2]][1] ?? "",
                    ...$vm
                );
            }

           /**
             * Defined : filter local provider public magic
             * @since: v1.3.7
             * DT: 11.08.2023 *
             */   
            if (array_key_exists($wine::LP[3], $__w)) {
                $cbm = $wine->wine_local_provider_filter_hook(
                    $__w[$wine::LP[3]][0] ?? "",
                    $__w[$wine::LP[3]][1] ?? "",
                    ...$vm
                );
            }

           /**
             * Defined : filter local provider public attr
             * @since: v1.3.7
             * DT: 11.08.2023 *
             */   
            if (array_key_exists($wine::LP[4], $__w)) {
                $cba = $wine->wine_local_provider_attr_hook(
                    $__w[$wine::LP[4]][0] ?? "",
                    $__w[$wine::LP[4]][1] ?? "",
                    ...$vm
                );
            }

            /**
             * Defined : local provider function
             * @since: v1.3.7
             * DT: 11.08.2023 *
             */  
            if (array_key_exists($wine::LP[5], $__w)) {
                $cpd = $wine->wine_local_provider(
                    $__w[$wine::LP[5]][0] ?? "",
                    ...$vm
                );
            }

            /**
             * Defined : local provider function hook winer safe value
             * @since: v1.3.7
             * DT: 11.08.2023 *
             */  
            $wsf = $wine->wine_cleaned_sanitized(
                $__w[$wine::LP[6]][0] ?? ""
            );

            // provider
            $pdr = $wine->get_section_element_from_provider();

           /**
             * Defined : filter local provider public wine
             * @since: v1.3.7
             * DT: 11.08.2023 *
             */   
            $win = $wine->wine_generate_optimized_element_method(__, [
                child => [
                    please => function () use ($wine, $__w) {
                        $init = [];
                        if (array_key_exists($wine::LP[1], $__w)) {
                            $init[] = $wine->wine_generate_optimized_element_method(
                                $__w[$wine::LP[1]][0] ?? '',
                                $__w[$wine::LP[1]][1] ?? [],
                                $__w[$wine::LP[1]][2] ?? [],
                                $__w[$wine::LP[1]][3] ?? [],
                                $__w[$wine::LP[1]][4] ?? false
                            );
                        }
                        return $init;
                    },
                ],
            ]);

          return [
            
            $wine::LP[0] => $pdr ?? null,
            $wine::LP[1] => $win ?? null,
            $wine::LP[2] => $cbv ?? null,
            $wine::LP[3] => $cbm ?? null,
            $wine::LP[4] => $cba ?? null,
            $wine::LP[5] => $cpd ?? null,
            $wine::LP[6] => $wsf ?? null
            
          ];

        }

    } else {
        throw new \Exception(wine_failed_to()['wine_class']);
        exit();
    }

} else {
    throw new \Exception(wine_failed_to()['provider']);
    exit();
}
