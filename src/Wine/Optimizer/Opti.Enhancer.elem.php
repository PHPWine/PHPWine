<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

   $object = new Class extends Enhancers { function  __construct() { function ELEM(

          string        $elem   =  null
         ,array|string|callable  $value  =  null
         ,array|string  $attr   =  null
         ,string        $id     =  null
         ,string        $class  =  null

  )
  { 

   $Enhancer = new Enhancers; return method_exists($Enhancer, 'ELEM') ? $Enhancer->ELEM($elem, $value, $attr, $id, $class) : false;
 
  }
 
 } 

};
     