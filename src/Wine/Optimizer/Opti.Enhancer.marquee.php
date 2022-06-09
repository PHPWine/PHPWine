<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $marquee = new Class extends Enhancers { function  __construct() {  function marquee( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('marquee', $value, $attr, $id, $class);
               
          }

      }

   };
     
