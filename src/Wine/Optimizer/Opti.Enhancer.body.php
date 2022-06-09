<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $body = new Class extends Enhancers { function  __construct() {  function body( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('body', $value, $attr, $id, $class);
               
          }

      }

   };
     
