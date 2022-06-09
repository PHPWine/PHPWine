<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $img = new Class extends Enhancers { function  __construct() {  function img( 

              array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('img', null, $attr, $id, $class);
               
          }

      }

   };
     
