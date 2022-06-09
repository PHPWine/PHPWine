<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $strong = new Class extends Enhancers { function  __construct() {  function strong( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('strong', $value, $attr, $id, $class);
               
          }

      }

   };
     
