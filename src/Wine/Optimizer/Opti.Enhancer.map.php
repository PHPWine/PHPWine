<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $map = new Class extends Enhancers { function  __construct() {  function map( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('map', $value, $attr, $id, $class);
               
          }

      }

   };
     
