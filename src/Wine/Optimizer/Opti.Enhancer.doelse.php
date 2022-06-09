<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $object = new Class extends Enhancers { function  __construct() { function DOELSE(

         bool   $condition     =  null
        ,string $if_result     =  null
        ,string $else_result   =  null

   )
   {
 
    $Enhancer = new Enhancers; return method_exists($Enhancer, '__magicELSE') ? 

    $Enhancer->__magicELSE($condition, $if_result, $else_result, METHOD_ASSOC) : false;

   }
 
 } 

};
     