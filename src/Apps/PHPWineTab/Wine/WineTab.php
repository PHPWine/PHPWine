<?php 

namespace PHPWineVanillaFlavour\Apps\PHPWineTab\Wine;

use \PHPWineVanillaFlavour\Wine\Optimizer\Html as Optimizer;
use \PHPWineVanillaFlavour\Apps\PHPWineTab\Wine\WineTabMake;
use \PHPWineVanillaFlavour\Wine\System\WineURL;

/**
 * @copyright (c) 2022 PHPWine\VanillaFlavour - PHPWineTab (Apps) v1.0 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour - PHPWineTab (Apps) v1.0 free software: you can redistribute it and/or modify.
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
 * @category   PHPWineTab
 * @package    PHPWineTab Apps of PHP Wine extend optimizer to crud features
 *            
 *            
 * @author    Leinner Zednanref <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/nielsofficeofficial/PHPWineTab
 * @link      https://github.com/nielsofficeofficial/PHPWine/blob/PHPWine_Vanilla_Flavour/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   v1.0 wine 2.0
 * @since     10.20.222
 *
 */

Class WineTab Extends Optimizer implements WineTabMake {

        /**
         * Defined: @var @property array_Container_properties
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.20.2022 **/   
        private array  $container = [];

        /**
         * Defined: @var @property titles
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.20.2022 **/   
        private array  $titles__  = [];

        /**
         * Defined: @var @property contents
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.20.2022 **/   
        private array  $values__  = [];

        /**
         * Defined: @var @property contents
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.20.2022 **/   
        private string  $child__;


        /**
         * Defined: @var @property valuetabs
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.20.2022 **/   
        private array  $containerTabValue = [];

        public function __construct(array $winTabs = [], string $child = '', bool $exec = false )
        {   
           // Installing PHPWine Dependecies for Enhancer and DIV
           new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerElem;

           $this->child__ =  $child;

        /**
         * Defined: @var @property inittialized_title_key
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.20.2022 **/   
           $this->titles__     = $winTabs['wt_titles']['title']?? [];

        /**
         * Defined: @var @property inittialized_title_key_attr
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.20.2022 **/   
           $this->titlesAttr__ = $winTabs['wt_titles']['attrs']?? [];

        /**
         * Defined: @var @property inittialized_value_key
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.20.2022 **/   
           $this->values__     = $winTabs['wt_values']['value']?? [];

        /**
         * Defined: @var @property inittialized_value_key_attr
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.20.2022 **/     
           $this->valuesAttr__ = $winTabs['wt_values']['attrs']?? [];

        /**
         * Defined: @var @property executio wine tab !
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.20.2022 **/   
           $this->__method_tab_exec($exec);

        }
    
        /**
         * Defined: Presever Element
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.20.2022 **/   
        public function TabTitle( array $Properties = []) : void
        {

            /**
             * Defined: arrays of propertiesr for tag elements
             * @since 1.0.0.0 supprt PHPWine v2.0
             * @since 10.20.2022 **/  
            $this->container[] = [ 

                /**
                 * Defined: Type_of_element
                 * @since 1.0.0.0 supprt PHPWine v2.0
                 * @since 10.20.2022 **/  
                'get_title'    => $Properties['title']?? []

                /**
                 * Defined: Type_of_element
                 * @since 1.0.0.0 supprt PHPWine v2.0
                 * @since 10.20.2022 **/  
                ,'get_attrs'  => array_merge( $Properties['attr']?? [], $this->wine_tab_menu_attr( $this->child__.$Properties['title']?? []) )

           
                /**
                 * Defined: Type_of_element
                 * @since 1.0.0.0 supprt PHPWine v2.0
                 * @since 10.20.2022 **/  
                ,'get_id'     => $Properties['id']?? []

                /**
                 * Defined: Type_of_element
                 * @since 1.0.0.0 supprt PHPWine v2.0
                 * @since 10.20.2022 **/  
                ,'get_classes' => $Properties['class']?? []
            
            ];
    
        }

        /**
         * Defined: Presever Element
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.20.2022 **/   
        public function TabValue( array $Properties = [] ) : void
        {
         
            /**
             * Defined: arrays of propertiesr for tag elements
             * @since 1.0.0.0 supprt PHPWine v2.0
             * @since 10.20.2022 **/  
            $this->containerTabValue[] = [ 

                /**
                 * Defined: Type_of_element
                 * @since 1.0.0.0 supprt PHPWine v2.0
                 * @since 10.20.2022 **/  
                'get_value'    => $Properties['value']?? []

                /**
                 * Defined: Type_of_element
                 * @since 1.0.0.0 supprt PHPWine v2.0
                 * @since 10.20.2022 **/  
                ,'get_attrs'  => $Properties['attr']?? []

                /**
                 * Defined: Type_of_element
                 * @since 1.0.0.0 supprt PHPWine v2.0
                 * @since 10.20.2022 **/  
                ,'get_id'     => $Properties['id']?? []

                /**
                 * Defined: Type_of_element
                 * @since 1.0.0.0 supprt PHPWine v2.0
                 * @since 10.20.2022 **/  
                ,'get_classes' => $Properties['class']?? []
            
            ];
    
        }

        /**
         * Defined: Set Tab Titles  
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.23.2022 **/  
        private function wine_container_tab_menu() : string
        { 

            $__TabBtn = []; for ($i=0; $i < count($this->container); $i++) 
            
            {
            
            $title__menu = $this->container[$i]['get_title']?? '';

            WineURL::setURL( $title__menu );

            $__TabBtn[] = Elem('a',$title__menu,$this->container[$i]["get_attrs"]?? [],implode("",$this->container[$i]['get_id'])?? '',implode("",$this->container[$i]['get_classes'])?? ''); }
          
             return( implode("", $__TabBtn));
   
        }

        /**
         * Defined: Set Tab Values
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.23.2022 **/  
        private function wine_container_tab_value() : string {

            $__TabValue = []; for ($i=0; $i < count($this->containerTabValue); $i++) 
            
          { 
            
            $__TabValue[] = Elem('div',$this->containerTabValue[$i]['get_value']?? '',$this->containerTabValue[$i]["get_attrs"]?? [],implode("",$this->containerTabValue[$i]['get_id'])?? '',implode("",$this->containerTabValue[$i]['get_classes'])?? ''); }
          
            return( implode("", $__TabValue));
   
        }

        /**
         * Defined: Display wine tabs titles
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.25.2022 **/  
        private function wine_tab_titles( $titles = [], $attr = [] ) : string { $__holder = [];
            
             foreach(  $titles as $title) 
           
          { $__holder[] = $this->TabTitle([ 'title' => $title ]); }

            $__title = (implode("", $__holder)); 
              
            return div(function() use ($__title, $attr) { return ($__title . $this->renderTabsTitle() ); },$attr );

        }

        /**
         * Defined: Display wine tabs contents
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.25.2022 **/  
        private function wine_tab_contents( $values = [], $attr = [] ) : string { $__holder = [];

		    foreach($values as $value) 
			
		      { $__holder[] = $this->TabValue([ 'value' => $value ]);  }

            $__value = (implode("", $__holder));

            return div(function() use ($__value, $attr) { return ($__value . $this->renderTabsValue() ); },$attr );

        }

        private function wine_tab_menu_attr( array|string $title_url =  null) {

          $getCurrentURL = WineURL::getCurrentURL() . $this->child__ . $title_url;

          $getCurrentURLe = explode("&", $getCurrentURL);

           var_dump($getCurrentURLe[0]);

          if( is_null($title_url) || empty($title_url) ) {
            return ;
          } else {
            return [ 'href' => WineURL::getCurrentURL() . $title_url ];
          }
        

        }

        /**
         * Defined: Execute wine tab !
         * @since 1.0.0.0 supprt PHPWine v2.0
         * @since 10.25.2022 **/  
        private function __method_tab_exec( bool $exec = false ) 
        {

          if( $exec === true ) :

            $returnRequest  = '';
            $returnRequest .= $this->wine_tab_titles($this->titles__,$this->titlesAttr__ );
            $returnRequest .= $this->wine_tab_contents($this->values__,$this->valuesAttr__ );

            return($returnRequest);

            else :

            print ($this->wine_tab_titles($this->titles__,$this->titlesAttr__ ));
            print ($this->wine_tab_contents($this->values__,$this->valuesAttr__ ));

          endif;

        }    

      /**
       * Defined: Execute as printed!
       * @since 1.0.0.0 supprt PHPWine v2.0
       * @since 10.20.2022 **/
       public function renderedTabsTitle() : void { print( $this->wine_container_tab_menu() ); }

      /**
       * Defined: Execute as return data!
       * @since 1.0.0.0 supprt PHPWine v2.0
       * @since 10.20.2022 **/
      public function renderTabsTitle() : string { return( $this->wine_container_tab_menu() ); }

      /**
       * Defined: Execute as printed!
       * @since 1.0.0.0 supprt PHPWine v2.0
       * @since 10.20.2022 **/
      public function renderedTabsValue() : void { print( $this->wine_container_tab_value() ); }

      /**
       * Defined: Execute as return data!
       * @since 1.0.0.0 supprt PHPWine v2.0
       * @since 10.20.2022 **/
      public function renderTabsValue() : string { return( $this->wine_container_tab_value() ); }
     
};
    
