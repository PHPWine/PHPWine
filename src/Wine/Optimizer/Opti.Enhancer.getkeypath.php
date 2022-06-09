<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

  $object = new Class extends Enhancers { function  __construct() { function getKeyPath() {

     $Enhancer = new Enhancers; return method_exists($Enhancer, 'GetKeyFolderPath') ? 
    
     $Enhancer->GetKeyFolderPath() : false;
  
   }
   
  }

};
     