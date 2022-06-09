<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $tr = new Class extends Enhancers { function  __construct() {  function tr( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('tr', $value, $attr, $id, $class);
               
          }

      }

   };
     