<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

  $object = new Class extends Enhancers { function  __construct() { function setElemAttr(

      array $attr_type = null
     ,array $attr_value = null

  )
  {

    $Enhancer = new Enhancers; return method_exists($Enhancer, 'SetElemAttr') ? 

    $Enhancer->SetElemAttr($attr_type, $attr_value) : false;

   }

  }

};
     