<?php 

namespace PHPWineVanillaFlavour\Apps\PHPWineElement\Wine;

/**
 * @copyright (c) 2022 PHPWine\VanillaFlavour - PHPWineElement (Apps) v1.0 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour - PHPWineElement (Apps) v1.0 free software: you can redistribute it and/or modify.
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
 * @category   PHPWineElement 
 * @package    PHPWineElement Apps of PHP Wine extend optimizer to crud features
 *            
 *            
 * @author    Leinner Zednanref <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/nielsofficeofficial/PHPDynamicColumn
 * @link      https://github.com/nielsofficeofficial/PHPWine/blob/PHPWine_Vanilla_Flavour/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   v1.0 wine 2.0
 * @since     10.20.222
 *
 */

Class WineElement {

        /**
         * Defined: @var @property array_Container_properties
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.20.2022 **/   
        private array  $container  = [];

        /**
         * Defined: @var @property String_Element_tag
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.20.2022 **/   
        private string $elementTag; 

        public function __construct()
        {   

            // Installing PHPWine Dependecies for Enhancer and DIV
            new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerElem;
            new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlDiv;

        }
    
        /**
         * Defined: Presever Element
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.20.2022 **/   
        public function Element( array $ElementProperties = []) 
        {
         
            /**
             * Defined: If there is no set attr 'elem' then return 'div' by default
             * @since 1.0.0.0 supprt PHPWine v2.0
             * @since 10.20.2022 **/  
            $this->elementTag  = $Elem?? 'div';

            /**
             * Defined: arrays of propertiesr for tag elements
             * @since 1.0.0.0 supprt PHPWine v2.0
             * @since 10.20.2022 **/  
            $this->container[] = [ 

                /**
                 * Defined: Type_of_element
                 * @since 1.0.0.0 supprt PHPWine v2.0
                 * @since 10.20.2022 **/  
                'get_elem'    => $ElementProperties['elem']??  [],  

                /**
                 * Defined: array|string|callable value
                 * @since 1.0.0.0 supprt PHPWine v2.0
                 * @since 10.20.2022 **/  
                'get_value'   => $ElementProperties['value']?? [],  

                /**
                 * Defined: Element custom attributes 
                 * @since 1.0.0.0 supprt PHPWine v2.0
                 * @since 10.20.2022 **/
                'get_attrs'   => $ElementProperties['attr']??  [],  

                /**
                 * Defined: Element default key for ID attributes 
                 * @since 1.0.0.0 supprt PHPWine v2.0
                 * @since 10.20.2022 **/
                'get_ids'     => $ElementProperties['id']??    [],  

                /**
                 * Defined: Element default key for CLASS attributes 
                 * @since 1.0.0.0 supprt PHPWine v2.0
                 * @since 10.20.2022 **/
                'get_classes' => $ElementProperties['class']?? []   
            
            ];
    
        }

        /**
         * Defined: Preparing ELements Attributes 
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.20.2022 **/        
        private function prepareDivElements() 
        {

          $__rendredData = [];  

        /**
         * Defined: Loop properties 
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.20.2022 **/ 
          for ( $i = 0 ; $i < count($this->container); $i++) 
          { 

            /**
             * Defined: Dealing with condition by default it's all dive else it's elem you set!
             * @since 1.0.0.0 supprt PHPWine v2.0
             * @since 10.20.2022 **/
            $elemTag = (!empty($this->container[$i]['get_elem']) ? $this->container[$i]['get_elem'] : $this->elementTag);
                    
            /**
             * Defined: Perform set Element!
             * @since 1.0.0.0 supprt PHPWine v2.0
             * @since 10.20.2022 **/
            $__rendredData[] = (ELEM($elemTag, 
             $this->container[$i]['get_value'],
             $this->container[$i]["get_attrs"],
             $this->container[$i]['get_ids'], 
             $this->container[$i]['get_classes']));
          }
          
          return(implode("",$__rendredData));
            
       }

      /**
       * Defined: Execute as printed!
       * @since 1.0.0.0 supprt PHPWine v2.0
       * @since 10.20.2022 **/
       public function renderedElements() : void { print($this->prepareDivElements()); }

      /**
       * Defined: Execute as return data!
       * @since 1.0.0.0 supprt PHPWine v2.0
       * @since 10.20.2022 **/
      public function renderElements() : string { return($this->prepareDivElements()); }
     
};
    
