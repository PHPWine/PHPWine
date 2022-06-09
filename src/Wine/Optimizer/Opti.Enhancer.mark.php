<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $kbd = new Class extends Enhancers { function  __construct() {  function mark( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('mark', $value, $attr, $id, $class);
               
          }

      }

   };
     
