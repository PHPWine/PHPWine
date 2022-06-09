<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $th = new Class extends Enhancers { function  __construct() {  function th( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('th', $value, $attr, $id, $class);
               
          }

      }

   };
     