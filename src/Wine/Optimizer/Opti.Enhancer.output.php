<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $output = new Class extends Enhancers { function  __construct() {  function output( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('output', $value, $attr, $id, $class);
               
          }

      }

   };
     