<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $template = new Class extends Enhancers { function  __construct() {  function template( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('template', $value, $attr, $id, $class);
               
          }

      }

   };
     