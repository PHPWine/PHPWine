<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $head = new Class extends Enhancers { function  __construct() {  function head( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('head', $value, $attr, $id, $class);
               
          }

      }

   };
     
