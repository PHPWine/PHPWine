<?php 
     
  use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $center = new Class extends Enhancers { function  __construct() {  function center( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('center', $value, $attr, $id, $class);
               
          }

      }

   };
     
