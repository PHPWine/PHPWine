<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $small = new Class extends Enhancers { function  __construct() {  function small( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('small', $value, $attr, $id, $class);
               
          }

      }

   };
     
