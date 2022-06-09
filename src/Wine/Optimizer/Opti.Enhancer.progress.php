<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $progress = new Class extends Enhancers { function  __construct() {  function progress( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('progress', $value, $attr, $id, $class);
               
          }

      }

   };
     