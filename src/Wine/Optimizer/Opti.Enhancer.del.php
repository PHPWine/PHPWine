<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $del = new Class extends Enhancers { function  __construct() {  function del( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('del', $value, $attr, $id, $class);
               
          }

      }

   };
     
