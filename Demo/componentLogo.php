<?php
  
   require_once __DIR__ .'/OptimizedHtml.php';

   Class Logo {

    protected $elem;

    public function __construct() {

      $this->elem = new OptimizedHtml();       
     
    }

    public function componentLogo() : void { 

       print $this->elem->wine(div,[ 
        child => [
         [div, value => [
           $this->elem->value(
              $this,
             'component_placeholder',
             'https://placehold.co/150x50'
           )]
         ]] 
       ],['class'=>'branding']);

     }

     private function component_placeholder( $url ) : string {

       return $this->elem->wine(__,[
         child => [
           [img, attr => [src=>$url, 'class'=>'p-[10px]'] ] 
          ]
       ]);

     }

  }  
 
  (new Logo)->componentLogo();
 
     


 
 ?>

