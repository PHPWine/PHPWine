<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $samp = new Class extends Enhancers { function  __construct() {  function samp( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('samp', $value, $attr, $id, $class);
               
          }

      }

   };
     
