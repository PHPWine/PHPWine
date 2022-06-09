<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;
   
   $Video = new Class extends Enhancers { function  __construct() {  function Video( 

              array|string|callable  $value  =  null
             ,array|string  $attr   =  null
             ,string        $id     =  null
             ,string        $class  =  null
       
           ) { 

            $Enhancer = new Enhancers;  return $Enhancer->ELEM('video', $value, $attr, $id, $class);
               
          }

      }

   };
     
