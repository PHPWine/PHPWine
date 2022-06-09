<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $dl = new Class extends Enhancers { function  __construct() {  function dl( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('dl', $value, $attr, $id, $class);
               
          }

      }

   };
     
