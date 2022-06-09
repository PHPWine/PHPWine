<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $H2 = new Class extends Enhancers { function  __construct() {  function H2( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('h2', $value, $attr, $id, $class);
               
          }

      }

   };
     
