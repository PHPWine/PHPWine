<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $Colgroup = new Class extends Enhancers { function  __construct() {  function Colgroup( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('colgroup', $value, $attr, $id, $class);
               
          }

      }

   };
     
