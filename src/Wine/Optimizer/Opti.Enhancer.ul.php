<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $ul = new Class extends Enhancers { function  __construct() {  function ul( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('ul', $value, $attr, $id, $class);
               
          }

      }

   };
     