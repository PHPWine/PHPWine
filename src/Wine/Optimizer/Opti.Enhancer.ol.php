<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $ol = new Class extends Enhancers { function  __construct() {  function ol( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('ol', $value, $attr, $id, $class);
               
          }

      }

   };
     