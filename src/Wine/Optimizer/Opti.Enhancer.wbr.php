<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $wbr = new Class extends Enhancers { function  __construct() {  function wbr( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('wbr', $value, $attr, $id, $class);
               
          }

      }

   };
     
