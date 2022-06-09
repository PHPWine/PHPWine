<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $ins = new Class extends Enhancers { function  __construct() {  function ins( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('ins', $value, $attr, $id, $class);
               
          }

      }

   };
     
