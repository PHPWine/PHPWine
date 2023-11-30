<?php 

namespace PHPWineOptimizedHtml\Doctrine;

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

class TabAccordion 
extends \PHPWineOptimizedHtml\Layout {

   public function __construct( $wine_config )
   {
      

   }
    
   protected function tab_accordion_menus( array $lists_title = [] ) {}
   
   protected function tab_accordion_contents( array $lists_content = [] ) {}

   protected function tab_to_accordion() {}

}