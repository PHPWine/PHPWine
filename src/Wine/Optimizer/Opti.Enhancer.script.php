<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $Script = new Class extends Enhancers { function  __construct() {  function Script( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('script', $value, $attr, $id, $class);
               
          }

      }

   };
     
