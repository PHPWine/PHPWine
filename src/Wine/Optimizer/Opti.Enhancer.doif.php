<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $object = new Class extends Enhancers { function  __construct() { function DOIF(

        bool  $condition      =  null
       ,string $if_result     =  null
   
    )
    {
     
    return method_exists((new Enhancers), '__magicIF') ? (new Enhancers)->__magicIF($condition, $if_result, METHOD_ASSOC) : false;
   
   }

 } 

};
     