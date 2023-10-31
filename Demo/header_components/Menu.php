<?php
  
   require_once __DIR__ .'/CHeader.php';

   Class Menu extends CHeader {

    public function component_nav( $menus ) : string { 

      return $this->elem->wine(__,[
        child => [
          [ul, 
            value => [ $this->elem->wine(__, [
              child => [
                please => function() use ($menus) { 
                  
                  $dd =[]; foreach ( $menus as $value) {
                    $dd[] = $this->elem->wine(li, 
                       $this->elem->value($this, 'menu_and_links', $value) 
                    );
                  }
                return $dd;
              }]
            ])
          ]] 
        ]
     ]);

    }

   public function menu_and_links($menu) {

    return $this->elem->wine(a, $menu); 

   }

}
 

