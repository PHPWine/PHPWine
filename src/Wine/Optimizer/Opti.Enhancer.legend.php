<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $legend = new Class extends Enhancers { function  __construct() {  function legend( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('legend', $value, $attr, $id, $class);
               
          }

      }

   };
     