<?php 

namespace PHPWineOptimizedHtml\Doctrine;

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
 
/**
* @copyright (c) 2023 PHPWine Component Accordion Cooked by nielsoffice
*
* MIT License
*
* PHPWine Component Accordion free software: you can redistribute it and/or modify.
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
*
* The above copyright notice and this permission notice shall be included in all
* copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
* SOFTWARE.
*
* @category   PHPWine Component Accordion
*
*
* @author    Leinner Zednanref <syncdevprojects@gmail.com>
* @license   MIT License
* @link      https://github.com/PHPWine/WineAccordion/tree/main
* @link      https://github.com/PHPWine/WineAccordion/README.md
* @version   v1.0
* @since     11.29.2023
*
*/

class Accordion 
extends \PHPWineOptimizedHtml\Layout {

  /**
   * @var String|Array keys Accordion 
   * @property
   * Defined : check if icon exist
   * @since: doctrine v1.0
   * @since: v2.5.0 wine
   * DT: 11.11.2023 **/
   protected $icon;

  /**
   * @var String keys Accordion 
   * @property
   * Defined : check if prefix exist
   * @since: doctrine v1.0
   * @since: v2.5.0 wine
   * DT: 11.11.2023 **/
  protected $prefix;

  /**
   * @var String keys Accordion 
   * @property
   * Defined : stored label for accordion
   * @since: doctrine v1.0
   * @since: v2.5.0 wine
   * DT: 11.29.2023 **/
  protected $lists_menu;

  /**
   * @var String|Bool|Array keys Accordion 
   * @property
   * Defined : stored content for accordion
   * @since: doctrine v1.0
   * @since: v2.5.0 wine
   * DT: 11.29.2023 **/
   public $falsy;

  /**
   * @var Array keys Accordion 
   * @property
   * Defined : stored content for accordion
   * @since: doctrine v1.0
   * @since: v2.5.0 wine
   * DT: 11.29.2023 **/
  protected $events = [];

  /**
   * @var String keys new instance Accordion Left
   * @property
   * Defined : check property icon position in new instance
   * @since: doctrine v1.0
   * @since: v2.5.0 wine
   * DT: 11.29.2023 **/
  protected  $left;

  /**
   * @var String keys new instance Accordion Right
   * @property
   * Defined : check property icon position in new instance
   * @since: doctrine v1.0
   * @since: v2.5.0 wine
   * DT: 11.29.2023 **/
  protected  $right;

  /**
   * @var Array|String keys new instance attribute/ html properties filtered
   * @property
   * Defined : check property icon position in new instance
   * @since: doctrine v1.0
   * @since: v2.5.0 wine
   * DT: 11.29.2023 **/
  protected $hook;  

   public function __construct($wine_accordion)
   {

   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : check if accordion key is valid
     * @since: v1.0 doctrine
     * @since: v2.5.0 wine
     * DT: 11.29.2023 **/
    $this->icon = $this->is_defined([
      'DRKEY_ICON'
    ], 
     $wine_accordion
    );

   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : check if accordion key is valid
     * @since: v1.0 doctrine
     * @since: v2.5.0 wine
     * DT: 11.29.2023 **/
    $this->prefix = $this->is_defined([
      'DRKEY_PREFIX'
    ], 
     $wine_accordion
    );

    $this->hook = $this->is_defined([
     'DRKEY_HOOKS'
    ],
     $wine_accordion
    );
      
    $this->wine_actions_template($wine_accordion);

  }

   /**
     * --------------------------------------------------------------------------------------------
     * @method Templates
     * -------------------------------------------------------------------------------------------- 
     * This method preparing stuff
     * 
     * @since: v1.0 doctrine
     * @since: v2.5.0 wine
     * DT: 11.29.2023 **/
   private function wine_actions_template($properties) {


   /**
     * --------------------------------------------------------------------------------------------
     * @condition falsy value 
     * -------------------------------------------------------------------------------------------- */
    $this->falsy = [

     // IF this is set the return true not return false 
     prefix => isset($properties[prefix]),
     icon   => isset($properties[icon]),
     accordion => isset($properties[accordion]),
     hooks => isset($properties[hooks]),
     
     /**
      * -------------------------------------------------------------------------------------------
      * @properties new instance accordion properties 
      * ------------------------------------------------------------------------------------------- */
      'properties' => [

     /**
      * -------------------------------------------------------------------------------------------
      * @properties new instance accordion Position | Left or Right [You can Top and Bottom with css flex direction ]
      * ------------------------------------------------------------------------------------------- */
       $properties[icon]['position']?? false,
     /**
      * -------------------------------------------------------------------------------------------
      * @properties new instance accordion Default icon this is when the page load icon 
      * ------------------------------------------------------------------------------------------- */
       $properties[icon]['default']?? false,
     /**
      * -------------------------------------------------------------------------------------------
      * @properties new instance accordion Clicked icon that will show when the accordion had been clicked 
      * ------------------------------------------------------------------------------------------- */
       $properties[icon]['clicked']?? false

      ],

     /**
      * -------------------------------------------------------------------------------------------
      * @properties new instance accordion Content of accordion must be associated of array
      * key value pair 
      * ------------------------------------------------------------------------------------------- */
      'content' => [

        $properties[accordion]?? [],
        $properties[prefix]?? false,
        $properties[hooks]?? []

      ]
    
    ];

   }

   /**
     * --------------------------------------------------------------------------------------------
     * @method wine_action
     * -------------------------------------------------------------------------------------------- 
     * Is where the main accordion file are stored in order to having icons position 
     * 
     * @Defined : check if accordion key is valid
     * @since: v1.0 doctrine
     * @since: v2.5.0 wine */
   protected function wine_action() { 
    
    $is_true_menu   = $this->falsy[accordion];
    $is_true_prefix = $this->falsy[prefix];

    if(!$is_true_prefix) {
      throw new \Exception('prefix => (string) "wine_", property WineAccordion require!');
      exit;
    }

    if(!$is_true_menu) {
      throw new \Exception('accordion => (array) [] property and contents WineAccordion cannot be empty!');
      exit;
    }

    if($is_true_menu) {
      $this->lists_menu = wine(__,[
        child=>[
          please => function() {

            $prefix       = $this->falsy['content'][1];   
            $iconPosition = strtolower($this->falsy['properties'][0]);    
            $menu_items   = (array) array_unique($this->falsy['content'][0]);
 
           if($iconPosition==='left') { 
            $this->left=$iconPosition; 
            $wineIcon = new \PHPWineOptimizedHtml\Doctrine\Icons;
            $icon     = $wineIcon->Position(
                $menu_items,
                $prefix,
                $this->falsy,
                $iconPosition,
                $this->falsy['content'][2][0]
             );
            $this->events = $wineIcon->event();
            return $icon;
           } else if($iconPosition==='right') {
             $this->right=$iconPosition;
             $wineIcon = new \PHPWineOptimizedHtml\Doctrine\Icons;
             $icon     = $wineIcon->Position(
                 $menu_items,
                 $prefix,
                 $this->falsy,
                 $iconPosition,
                 $this->falsy['content'][2][0]
             );
             $this->events = $wineIcon->event();
             return $icon;

           } else {

            $menu_accordion = array();

            foreach ($menu_items as $value => $content) {

             // clean up to make valid hook
             $valid_hook = $this->valid_hook($value);

             array_push($this->events, "$valid_hook");

             $obj_filtered = $this->falsy['content'][2][0];

             if(isset($obj_filtered)) { $filered_attr = $obj_filtered; } 
             else {
               $filered_attr = $this;
             }

             // filteer attr lists menu
             $id     = wine_valid_id($valid_hook);
             $class  = $prefix."list-item";
             $methods = $prefix.$id;

             // filter attr Container 
             $con_id = wine_valid_id($content);
             $con_class = "content";
             $con_methods = $prefix.$con_id;

             // menu lists title items
             $title_id = wine_valid_id($prefix.$value);
             $title_class = $prefix.$valid_hook;
             $title_methods = $prefix.$title_id;

             $menu_accordion[] = wine(div,[
               child => [
                    
               [ __, 
                 value=>[wine(span,$this->hook_inside($prefix,$value,1),attr(
                  $filered_attr,
                  $title_methods,
                  [ 
                    id=>$title_id,
                    classes=>$title_class
                  ],
                  $title_id,
                  $title_class
                ),[
                  ["top_$title_methods"],["bottom_$title_methods"]
                 ])]
               ]

             ]],attr(
               $filered_attr,
               $methods,
               [ 
                 id=>$id,
                 classes=>$class
               ],
               $id,
               $class
              ),
             [["top_$methods"],["bottom_$methods"]]) .

              wine(div,$this->hook_inside($prefix,$content),
               attr(
                 $filered_attr,
                 $con_methods,
                 [ 
                   id =>$con_id,
                   classes=>$con_class
                 ],
                 $con_id,
                 $con_class
                ),[
               ["top_$con_methods"],
               ["bottom_$con_methods"]
              ]);

           }

           // filter accordion main and parent container
           $obj_filtered = $this->falsy['content'][2][0];
           $id    = wine_valid_id($prefix."menu_item");
           $class = 'a-wine cz';
           $main_method = $prefix.$id;
           

           if(isset($obj_filtered)) { $filered_attr = $obj_filtered; } 
           else {
             $filered_attr = $this;
           }

            return [
             wine(div,implode("",$menu_accordion),attr(
              $filered_attr,
              $main_method,
              [
                id=>$id,
                classes=>$class
              ],
              $id,
              $class
            ),[
              ["top_$main_method"],
              ["bottom_$main_method"]
            ]),
           ];

          } 
         } 
       ]
     ]);
    } else {
      return false;   
    }
 
   /**
     * --------------------------------------------------------------------------------------------
     * @execute return the accordion with script !
     * -------------------------------------------------------------------------------------------- */
   return $this->lists_menu.wine(script,[child=>[please=>function(){$script=[];$menu_list=array_unique($this->events);if($this->falsy[icon]){$script[]=" const currentIconOne = function(list) { ";$script[]=" if(list.children[1].style.display==='none' || list.children[0].style.display===''){list.children[1].style.display=''; list.children[0].style.display='none';}else{list.children[1].style.display='none'; list.children[0].style.display='';} ";$script[]=" }; ";$script[]=" const currentIconTwo = function(list) { ";$script[]=" if(list.children[2].style.display==='none' || list.children[1].style.display===''){list.children[2].style.display=''; list.children[1].style.display='none'; }else{list.children[2].style.display='none'; list.children[1].style.display='';} ";$script[]=" }; ";if($this->left==="left"){foreach($menu_list as $list){$list=wine_valid_id("{$list}");$script[]=" var menu{$list}=document.getElementById('{$list}'); ";$script[]=" menu{$list}.children[1].style.display='none'; ";$script[]=" menu{$list}.addEventListener('click',function(){currentIconOne(menu{$list});}); ";}}else{if($this->right==="right"){foreach($menu_list as $list){$list=wine_valid_id("{$list}");$script[]=" var menu{$list} =document.getElementById('{$list}'); ";$script[]=" menu{$list}.children[2].style.display ='none'; ";$script[]=" menu{$list}.addEventListener('click',function(){currentIconTwo(menu{$list})}); ";}}}$script[]=" var acc = document.querySelectorAll('.wine_list-item'); var wine; acc.forEach(function(vc,jk){vc.nextElementSibling.style.display ='none'; }); ";$script[]=" for(wine = 0; wine < acc.length; wine++){acc[wine].addEventListener('click',function(){this.classList.toggle('w-active'); var content =this.nextElementSibling; ";$script[]=" if(content.style.display==='block'){content.style.display='none';}else{content.style.display='block';} ";$script[]=" }); ";$script[]=" } ";}else{$script[]=" var acc = document.querySelectorAll('.wine_list-item'); var wine; acc.forEach(function(vc,jk){vc.nextElementSibling.style.display ='none'; });";$script[]="for(wine = 0; wine < acc.length; wine++){acc[wine].addEventListener('click',function(){this.classList.toggle('w-active'); var content =this.nextElementSibling;";$script[]="if(content.style.display==='block'){content.style.display='none';}else{content.style.display='block';}";$script[]="});";$script[]="}";}return $script;},],],[classes=>"app-response"]);

  }

}
