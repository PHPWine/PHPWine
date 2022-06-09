<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $table = new Class extends Enhancers { function  __construct() {  function table( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('table', $value, $attr, $id, $class);
               
          }

      }

   };
     