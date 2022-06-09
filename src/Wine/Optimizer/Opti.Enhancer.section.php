<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $Section = new Class extends Enhancers { function  __construct() {  function Section( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('section', $value, $attr, $id, $class);
               
          }

      }

   };
     
