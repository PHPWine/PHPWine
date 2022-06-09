<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $pre = new Class extends Enhancers { function  __construct() {  function pre( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('pre', $value, $attr, $id, $class);
               
          }

      }

   };
     
