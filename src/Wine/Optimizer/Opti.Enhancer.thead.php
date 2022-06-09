<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $thead = new Class extends Enhancers { function  __construct() {  function thead( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('thead', $value, $attr, $id, $class);
               
          }

      }

   };
     
