<?php
  
   require_once __DIR__ .'/OptimizedHtml.php';
   require_once __DIR__ . '/Branding.php';
   require_once __DIR__ . '/Menu.php';

    Class CHeader {

    protected $elem;

    protected string $url = 'https://placehold.co/150x50';

    /* static demo only */
    protected array $menus = [
      'Home',
      'About',
      'Services',
      'Contact Us'
    ];

    public function __construct() {
      
      $this->elem = new OptimizedHtml();  
  
    }
  
    public function main_header() : void { 

       print $this->elem->wine(div, [
        child => [
          [div, value => [ $this->elem->value((new Branding),'component_brading', $this->url )]],
          [div, value => [ $this->elem->value((new Menu),'component_nav', $this->menus )]]
        ] 
       ],[id =>'component_header']);

     }

  }  

 // Execute the component main header
 (new CHeader)->main_header();

