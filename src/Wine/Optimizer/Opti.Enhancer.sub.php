<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $sub = new Class extends Enhancers { function  __construct() {  function sub( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('sub', $value, $attr, $id, $class);
               
          }

      }

   };
     
