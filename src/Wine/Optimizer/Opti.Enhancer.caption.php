<?php 
     
  use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $Caption = new Class extends Enhancers { function  __construct() {  function Caption( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('caption', $value, $attr, $id, $class);
               
          }

      }

   };
     
