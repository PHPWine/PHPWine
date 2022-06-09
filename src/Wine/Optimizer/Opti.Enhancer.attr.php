<?php 
     
 use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;
 
  $object = new Class extends Enhancers { function  __construct() { function ATTR(

        string $tag  = null
       ,array  $attr = null 
     
      )
      {

      
       return method_exists((new Enhancers), 'ATTR' ) ? 
     
        (new Enhancers)->ATTR($tag, $attr)  : false;
     
      }

  }

};
     