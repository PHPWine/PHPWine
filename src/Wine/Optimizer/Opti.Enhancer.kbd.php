<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $kbd = new Class extends Enhancers { function  __construct() {  function kbd( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('kbd', $value, $attr, $id, $class);
               
          }

      }

   };
     
