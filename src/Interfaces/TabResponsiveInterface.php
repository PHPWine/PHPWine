<?php 

namespace PHPWineOptimizedHtml\Interfaces;

interface TabResponsiveInterface
{

  public function tab_resposive_menus( array $lists_title = [] );
  public function tab_resposive_contents( array $lists_content = [] ); 
  public function wine_tab_resposive();

}