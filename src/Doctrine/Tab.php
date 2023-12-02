<?php 

namespace PHPWineOptimizedHtml\Doctrine;

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

/**
* @copyright (c) 2023 PHPWine App Tab Cooked by nielsoffice
*
* MIT License
*
* PHPWine App Tab free software: you can redistribute it and/or modify.
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

class Tab 
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

  public function __construct($wine_tab)
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
     $wine_tab
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
     $wine_tab
    );
      
    $this->wine_actions_template($wine_tab);

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
          tab => isset($properties[tab]),
        
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
          $properties[icon]['default'] ?? false,
         /**
          * -------------------------------------------------------------------------------------------
          * @properties new instance accordion Clicked icon that will show when the accordion had been clicked 
          * ------------------------------------------------------------------------------------------- */
          $properties[icon]['clicked'] ?? false
        ],
   
        /**
         * -------------------------------------------------------------------------------------------
         * @properties new instance accordion Content of accordion must be associated of array
         * key value pair 
         * ------------------------------------------------------------------------------------------- */
         'content' => [
   
           $properties[tab]?? [],
           // prefix required in every new ionstance
           $properties[prefix]?? false,
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
        
      $is_true_menu   = $this->falsy[tab];
      $is_true_prefix = $this->falsy[prefix];
  
      if(!$is_true_prefix) {
        throw new \Exception('prefix => (string) "wine_", property WineTab require!');
        exit;
      }
  
      if(!$is_true_menu) {
        throw new \Exception('tab => (array) [] property and contents WineTab cannot be empty!');
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
              $wineIcon = new \PHPWineOptimizedHtml\Doctrine\TabIcons;
              $icon     = $wineIcon->Position(
                 $menu_items,
                 $prefix,
                 $this->falsy,
                 $iconPosition
              );
              $this->events = $wineIcon->event();
              $left_content = new \PHPWineOptimizedHtml\Doctrine\TabContents;
              $tab = $left_content->content($menu_items, $prefix);
              $this->events = $left_content->event();
              return [$icon[0] . $tab[0]];

            } else if($iconPosition==='right') {
               $this->right=$iconPosition;
               $wineIcon = new \PHPWineOptimizedHtml\Doctrine\TabIcons;
               $icon     = $wineIcon->Position(
                  $menu_items,
                  $prefix,
                  $this->falsy,
                  $iconPosition
               );
               $this->events = $wineIcon->event();
               $right_content = new \PHPWineOptimizedHtml\Doctrine\TabContents;
               $tab = $right_content->content($menu_items, $prefix);
               $this->events = $right_content->event();
               return [$icon[0] . $tab[0]];

             } else {

              $tab_list = array();
              $tab_content = array();
  
              foreach ($menu_items as $value => $content) {
  
                $hook_data = [
                  'top_tab_',
                  'bottom_tab_',
                  'top_main_',
                  'bottom_main_'
                ];

               // clean up to make vbalid hook
               $valid_hook = $this->valid_hook($value);
               
               $hook_tab_item = wine_valid_hook($value,3);
               $hook_tab_content = wine_valid_hook($content,3);

               // Hook for list item
               $hook_item_top=$hook_data[0].$hook_tab_item;
               $hook_item_bot=$hook_data[1].$hook_tab_item;
               // Hook for list item content
               $hook_content_top=$hook_data[0].$hook_tab_content;
               $hook_content_bot=$hook_data[1].$hook_tab_content;
               // Hook for main tab and lists containers
               $hook_btn_container_top=$hook_data[2].wine_valid_id($prefix."tab_item");
               $hook_btn_container_bot=$hook_data[3].wine_valid_id($prefix."tab_item");
               $hook_con_container_top=$hook_data[2].wine_valid_id($prefix."tab_content");
               $hook_con_container_bot=$hook_data[3].wine_valid_id($prefix."tab_content");

               array_push($this->events,"$valid_hook");
               
               $tab_list[] = wine(div,[
                 child => [
                   
                  [ __,
                    value =>[later(
                     $hook_item_top,
                     $valid_hook,
                     $value,
                     $content
                    )]
                  ],
                  [ span, 
                    attr =>[[classes=>$prefix.$valid_hook]], 
                    value=>[$value]
                  ],
                  [ __,
                    value =>[later(
                      $hook_item_bot,
                      $valid_hook,
                      $value,
                      $content
                    )]
                  ]
  
               ]],[
                 classes=>$prefix."tab-item",id=>wine_valid_id(
                   $valid_hook
                 ),
               ]);

                $tab_content[] = wine(div,[
                child => [
                     
                  [ __,
                    value =>[later(
                     $hook_content_top,
                     $valid_hook,
                     $value,
                     $content
                    )]
                  ],
                  [ div, 
                    attr =>[[classes=>$prefix.$valid_hook."_tab"]], 
                    value=>[$content]
                  ],
                  [ __,
                    value =>[later(
                     $hook_content_bot,
                     $valid_hook,
                     $value,
                     $content
                    )]
                  ]

                ] 
               ],[
                 classes=>$prefix."tab-content",
                 id=>wine_valid_id($valid_hook."_tab"),
               ]);
              
             }
  
             return [
               wine(div,implode("",$tab_list),[id=>wine_valid_id(
                $prefix."tab_item"
              )],[
                [$hook_btn_container_top],
                [$hook_btn_container_bot]
              ])
              .wine(div,implode("",$tab_content),[id=>wine_valid_id(
                $prefix."tab_content"
              )],[
                [$hook_con_container_top],
                [$hook_con_container_bot]
              ]) 
            ];
           } 
          } 
        ]
      ]);

      } else {
        return false;   
      }

      return $this->lists_menu . wine(script,[ child => [ please => function() { $script = array(); $menu_list = array_unique($this->events); $parent = wine_valid_id($this->falsy['content'][1].'tab_item'); $container = wine_valid_id($this->falsy['content'][1].'tab_content'); if($this->falsy[icon]) { if($this->left === 'left'){ foreach ($menu_list as $list){ $list=wine_valid_id("$list"); $script[] = "var menu$list=document.getElementById('$list');";} } else { if($this->right === 'right') { foreach ($menu_list as $list){ $list=wine_valid_id("$list"); $script[] = " var menu$list =document.getElementById('$list'); "; } }} $script[] = "const childTab=function(e,n){e.childNodes.forEach((function(e,t){t!==n&&(e.style.display='none')}))},parentTab=function(e,n){let t=document.getElementById(e),d=document.getElementById(n);t.childNodes.forEach((function(e,n){e.addEventListener('click',(function(e){e.preventDefault(),childTab(d,n),d.childNodes[n].style.display=''})),childTab(d,n),d.childNodes[0].style.display=''}))};parentTab('$parent','$container');"; } else { $script[] = "const childTab=function(e,n){e.childNodes.forEach((function(e,t){t!==n&&(e.style.display='none')}))},parentTab=function(e,n){let t=document.getElementById(e),d=document.getElementById(n);t.childNodes.forEach((function(e,n){e.addEventListener('click',(function(e){e.preventDefault(),childTab(d,n),d.childNodes[n].style.display=''})),childTab(d,n),d.childNodes[0].style.display=''}))};parentTab('$parent','$container');"; } return $script; } ]],[classes=>'app-response']);
    
    }
  
  }
  