<?php 

namespace PHPWineOptimizedHtml\Interfaces;

interface TabAccordionInterface
{


  public function tab_accordion_menus( array $lists_title = [] );
  public function tab_accordion_contents( array $lists_content = [] ); 
  public function tab_to_accordion(); 

}