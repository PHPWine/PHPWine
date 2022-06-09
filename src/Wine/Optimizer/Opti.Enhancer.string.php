<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

  $object = new Class extends Enhancers { function  __construct() { function STRING(

         string $str   =  null

  )
  {

     $Enhancer = new Enhancers; return method_exists($Enhancer, 'STRING') ? 

     $Enhancer->STRING($str, METHOD_ASSOC) : false;

   }
   
  } 

};
     