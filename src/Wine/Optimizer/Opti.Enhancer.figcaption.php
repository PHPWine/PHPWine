<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $Figcaption = new Class extends Enhancers { function  __construct() {  function figcaption( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('figcaption', $value, $attr, $id, $class);
               
          }

      }

   };
     