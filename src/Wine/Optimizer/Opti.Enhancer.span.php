<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $span = new Class extends Enhancers { function  __construct() {  function span( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('span', $value, $attr, $id, $class);
               
          }

      }

   };
     
