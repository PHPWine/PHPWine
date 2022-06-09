<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $dfn = new Class extends Enhancers { function  __construct() {  function dfn( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('dfn', $value, $attr, $id, $class);
               
          }

      }

   };
     
