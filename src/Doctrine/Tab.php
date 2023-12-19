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
* @link      https://github.com/PHPWine/WineTab/tree/main
* @link      https://github.com/PHPWine/WineTab/README.md
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

  protected $hook;

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

    $this->hook = $this->is_defined([
      'DRKEY_HOOKS'
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

              if($this->falsy[hooks]) { $filered_attr = $this->falsy['content'][2][0]; } 
              else {
                $filered_attr = $this;
              }

             if($iconPosition==='left') { 
              $this->left=$iconPosition; 
              $wineIcon = new \PHPWineOptimizedHtml\Doctrine\TabIcons;
              $icon     = $wineIcon->Position(
                 $menu_items,
                 $prefix,
                 $this->falsy,
                 $iconPosition,
                 $filered_attr
              );
              $this->events = $wineIcon->event();
              $left_content = new \PHPWineOptimizedHtml\Doctrine\TabContents;
              $tab = $left_content->content($menu_items, $prefix, $filered_attr);
              $this->events = $left_content->event();
              return [$icon[0] . $tab[0]];

            } else if($iconPosition==='right') {
               $this->right=$iconPosition;
               $wineIcon = new \PHPWineOptimizedHtml\Doctrine\TabIcons;
               $icon     = $wineIcon->Position(
                  $menu_items,
                  $prefix,
                  $this->falsy,
                  $iconPosition,
                  $filered_attr
               );
               $this->events = $wineIcon->event();
               $right_content = new \PHPWineOptimizedHtml\Doctrine\TabContents;
               $tab = $right_content->content($menu_items, $prefix, $filered_attr);
               $this->events = $right_content->event();
               return [$icon[0] . $tab[0]];

             } else {
 
              $tab_list=array();
              $tab_content=array();

              if($this->falsy[hooks]) { $filered_attr = $this->falsy['content'][2][0]; } 
              else {
                $filered_attr = $this;
              }

              $tab_lists_id  =wine_valid_id($prefix,"tab_item");
              $tab_content_id=wine_valid_id($prefix,"tab_content");
  
              foreach ($menu_items as $value => $content) {

               // clean up to make vbalid hook
               $valid_hook = wine_valid_hook($value,3);

               array_push($this->events,"$valid_hook");

                // iDs for dynamic container and values
               $tab_lists_ids=wine_valid_id($prefix,$value);
               $tab_parent_lists_ids=wine_valid_id(null,$valid_hook);

               // iDs for dynamic container and contents
               $tab_contents_ids=wine_valid_id($prefix,$content);
               $tab_content_ids=wine_valid_id($valid_hook,"_tab");

               // hook for attr filter
               $tab_contents_method_ids = "attr_".$prefix.$tab_contents_ids;
               $tab_content_method_ids  = "attr_".$prefix.$tab_content_ids;

               // hook for insert top and bottom
               $tab_contents_hook = $prefix.$tab_contents_ids;
               $tab_content_hook  = $prefix.$tab_content_ids;

               // hook for attri filter
               $tab_list_method = "attr_".$prefix.$tab_lists_ids;
               $tab_cons_method = "attr_".$prefix.$tab_parent_lists_ids;

               // hook for insert top ad bottom
               $tab_list_hook = $prefix.$tab_lists_ids;
               $tab_cons_hook = $prefix.$tab_parent_lists_ids;
               
               $tab_list[] = wine(div,
                wine(
                  span,
                  $this->wine_get_value(
                    $filered_attr,
                    $prefix,
                    $value,1
                  ),
                  attr(
                   $filered_attr,
                   $tab_list_method,
                   [
                     id=>$tab_lists_ids,
                     classes=>$prefix.$valid_hook
                   ],
                   $tab_lists_ids,
                   $prefix.$valid_hook
                  ), [
                    ["top_$tab_list_hook"],
                    ["bottom_$tab_list_hook"]
                  ]
                  ),
                  attr(
                   $filered_attr,
                   $tab_cons_method,
                   [
                    id=>$tab_parent_lists_ids,
                    classes=>$prefix."tab-item"
                   ],
                   $tab_parent_lists_ids,
                   $prefix."tab-item"
                  ),[
                    ["top_$tab_cons_hook"],
                    ["bottom_$tab_cons_hook"]
                  ]);

               $tab_content[] = wine(div,
                wine(
                 div,
                 $this->wine_get_value(
                  $filered_attr,
                  $prefix,
                  $content,1
                ),
                attr(
                  $filered_attr,
                  $tab_contents_method_ids,
                  [
                    id=>$tab_contents_ids,
                    classes=>$prefix.$valid_hook."_tab"
                  ],
                  $tab_contents_ids,
                  $prefix.$valid_hook."_tab"
                ),[
                  ["top_$tab_contents_hook"],
                  ["bottom_$tab_contents_hook"]
                ]),
                 attr(
                  $filered_attr,
                  $tab_content_method_ids,
                  [
                    id=>$tab_content_ids,
                    classes=>$prefix."tab-content"                 
                  ],
                  $tab_content_ids,
                  $prefix."tab-content"
                ),[
                  ["top_$tab_content_hook"],
                  ["bottom_$tab_content_hook"]
                ]);
              
             }

             if($this->falsy[hooks]) { $filered_attr = $this->falsy['content'][2][0]; } 
             else {
               $filered_attr = $this;
             }

              // filter method hookf for attr
              $tab_method_lists = "attr_".$prefix.$tab_lists_id;
              $tab_method_items = "attr_".$prefix.$tab_content_id;

              // hooks for top and bottom
              $tab_hook_lists = $prefix.$tab_lists_id;
              $tab_hook_items = $prefix.$tab_content_id;

             return [
               wine(div,implode("",$tab_list),
               attr(
                $filered_attr,
                $tab_method_lists,
                [
                  id=>$tab_lists_id,
                  classes=>'t-wine-lists'
                ],
                $tab_lists_id,
                't-wine-lists'
               )
               ,[
                ["top_$tab_hook_lists"],
                ["bottom_$tab_hook_lists"]
               ])
               .wine(div,implode("",$tab_content),
               attr(
                $filered_attr,
                $tab_method_items,
                [
                  id=>$tab_content_id,
                  classes=>'t-wine-content'
                ],
                $tab_content_id,
                't-wine-content'
               )
               ,[
                ["top_$tab_hook_items"],
                ["bottom_$tab_hook_items"]
              ]) 
            ];
           } 
          } 
        ]
      ]);

      } else {
        return false;   
      }

      return $this->lists_menu . wine(script,[ child => [ please => function() { $script = array(); $menu_list = array_unique($this->events); $parent = wine_valid_id($this->falsy['content'][1],'tab_item'); $container = wine_valid_id($this->falsy['content'][1],'tab_content'); if($this->falsy[icon]) { if($this->left === 'left'){ foreach ($menu_list as $list){ $list=wine_valid_id(null,"$list"); $script[] = "var menu$list=document.getElementById('$list');";} } else { if($this->right === 'right') { foreach ($menu_list as $list){ $list=wine_valid_id(null,"$list"); $script[] = " var menu$list =document.getElementById('$list'); "; } }} $script[] = "const childTab=function(e,n){e.childNodes.forEach((function(e,t){t!==n&&(e.style.display='none')}))},parentTab=function(e,n){let t=document.getElementById(e),d=document.getElementById(n);t.childNodes.forEach((function(e,n){e.addEventListener('click',(function(e){e.preventDefault(),childTab(d,n),d.childNodes[n].style.display=''})),childTab(d,n),d.childNodes[0].style.display=''}))};parentTab('$parent','$container');"; } else { $script[] = "const childTab=function(e,n){e.childNodes.forEach((function(e,t){t!==n&&(e.style.display='none')}))},parentTab=function(e,n){let t=document.getElementById(e),d=document.getElementById(n);t.childNodes.forEach((function(e,n){e.addEventListener('click',(function(e){e.preventDefault(),childTab(d,n),d.childNodes[n].style.display=''})),childTab(d,n),d.childNodes[0].style.display=''}))};parentTab('$parent','$container');"; } return $script; } ]],[classes=>'app-response']);
    
    }
  
  }
  