<?php 
     
   use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;

  $object = new Class extends Enhancers { function  __construct() { function isbelongs(

         array|string $page               = null 
        ,array|string $GetKeyFolderPath   = [] 
     
     )
     {
   
       $Enhancer = new Enhancers; return method_exists($Enhancer, 'belongs_to') ? 

       $Enhancer->belongs_to($page, $GetKeyFolderPath = [1,2,3,4,5,6,7,8] ) : false;
    
     }

  }

};
     