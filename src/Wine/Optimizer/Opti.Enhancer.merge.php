<?php 
     
  use \PHPWineVanillaFlavour\Wine\Optimizer\Html AS MergeElements; 

  $abbr = new Class extends MergeElements { function  __construct() {  function _MERGE(

          string        $id     =  null
         ,string        $elem   =  null
         ,string        $class  =  null
         ,array         $attr   =  null

     )  
    { $Html = NEW MergeElements(); return method_exists($Html,'__magicMERGE') ? $Html->__magicMERGE(
   
       $elem 
      ,'MERGE' 
      ,$attr 
      ,$id 
      ,$class
   
      ) : false; } function xMERGE(  string $elem =  null  ) { $Html = NEW MergeElements(); return method_exists($Html,'__magicMERGE') ?  $Html->__magicMERGE(
  
      $elem 
     ,'MERGE_END'

      ) : false;
  
    }

  }

};
     
