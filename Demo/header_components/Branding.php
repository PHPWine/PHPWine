<?php
  
   require_once __DIR__ .'/CHeader.php';

   Class Branding extends CHeader {

    public function component_brading( $url ) : string { 

      return $this->elem->wine(__,[
        child => [
         [img, attr => [ src => $url , "class" => 'p-[10px]' ]] 
        ]
      ]);

     }

  }  
    

