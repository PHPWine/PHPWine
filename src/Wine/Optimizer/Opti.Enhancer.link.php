<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $Link = new Class extends Enhancers { function  __construct() {  function aLink( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('a', $value, $attr, $id, $class);
               
          }

      }

   };
     
