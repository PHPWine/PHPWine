<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $abbr = new Class extends Enhancers { function  __construct() {  function abbr( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('abbr', $value, $attr, $id, $class);
               
          }

      }

   };
     
