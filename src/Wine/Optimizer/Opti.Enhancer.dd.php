<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $dd = new Class extends Enhancers { function  __construct() {  function dd( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('dd', $value, $attr, $id, $class);
               
          }

      }

   };
     
