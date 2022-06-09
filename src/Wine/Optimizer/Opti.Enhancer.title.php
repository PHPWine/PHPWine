<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $title = new Class extends Enhancers { function  __construct() {  function title( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('title', $value, $attr, $id, $class);
               
          }

      }

   };
     
