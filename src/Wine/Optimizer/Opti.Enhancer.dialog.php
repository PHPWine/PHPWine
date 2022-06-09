<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;;

   $Dialog = new Class extends Enhancers { function  __construct() {  function Dialog( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('dialog', $value, $attr, $id, $class);
               
          }

      }

   };
     