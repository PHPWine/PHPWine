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
   protected $label;

  /**
   * @var String keys Accordion 
   * @property
   * Defined : stored label for accordion
   * @since: doctrine v1.0
   * @since: v2.5.0 wine
   * DT: 11.29.2023 **/
  protected $lists_menu;

  /**
   * @var String keys Accordion 
   * @property
   * Defined : stored content for accordion
   * @since: doctrine v1.0
   * @since: v2.5.0 wine
   * DT: 11.29.2023 **/
   protected $content;

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

        $properties[accordion]?? [],
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
    $is_true_menu = $this->falsy[accordion];
    if($is_true_menu) {
      $this->lists_menu = wine(__,[
        child=>[
          please => function() {
            $prefix       = $this->falsy['content'][1];   
            $iconPosition = strtolower($this->falsy['properties'][0]);    
            if($iconPosition === 'left') {
              $this->left = $iconPosition;
              $menu_items = (array) array_unique($this->falsy['content'][0]);
              $leftIcon_con = new \PHPWineOptimizedHtml\Doctrine\Layouts\LeftIcon;
              $leftIcon     = $leftIcon_con->Position($menu_items, $prefix, $this->falsy);
              $this->events = $leftIcon_con->event();
              return $leftIcon;
          } else if($iconPosition === 'right') {
              $this->right = $iconPosition;
              $menu_items = (array) array_unique($this->falsy['content'][0]);
              $rightIcon_con = new \PHPWineOptimizedHtml\Doctrine\Layouts\RightIcon;
              $rightIcon     = $rightIcon_con->Position($menu_items, $prefix, $this->falsy);
              $this->events  = $rightIcon_con->event();
              return $rightIcon;
          }  
         } 
       ]
     ]);
    }   

   /**
     * --------------------------------------------------------------------------------------------
     * @execute return the accordion with script !
     * -------------------------------------------------------------------------------------------- */
     return $this->lists_menu .
            wine(
                script,
                [
                    child => [
                        please => function () {
                            $script = [];
                            $menu_list = array_unique($this->events);
                            if ($this->left === "\154\145\146\164") {
                                foreach ($menu_list as $list) {
                                    $script[] = "\40\166\x61\x72\x20\x6d\145\x6e\x75{$list}\x20\x3d\x64\157\143\x75\155\145\156\x74\56\147\x65\x74\105\154\x65\155\145\156\x74\x42\171\111\144\x28\47{$list}\47\51\73\x20";
                                    $script[] = "\x20\155\145\156\165{$list}\56\143\x68\151\x6c\x64\x72\x65\x6e\133\61\x5d\56\x73\x74\x79\x6c\x65\x2e\144\x69\163\160\154\141\171\x3d\x27\156\157\x6e\x65\x27\73\x20";
                                    $script[] = "\40\155\x65\156\x75{$list}\x2e\141\x64\x64\x45\x76\145\x6e\164\x4c\151\163\x74\145\x6e\145\x72\50\x27\143\154\x69\x63\x6b\x27\x2c\146\165\156\143\164\x69\x6f\x6e\x28\x29\173\x20";
                                    $script[] = "\40\151\146\x28\155\x65\156\165{$list}\x2e\143\x68\151\154\144\162\x65\156\x5b\x31\135\56\x73\164\x79\154\145\x2e\x64\151\x73\x70\x6c\x61\171\75\75\75\47\156\x6f\156\x65\x27\x29\173\x6d\145\x6e\165{$list}\x2e\143\x68\x69\x6c\144\162\145\x6e\133\61\135\56\x73\x74\x79\154\x65\x2e\x64\x69\163\x70\x6c\141\171\75\x27\x27\73\175\145\x6c\x73\145\173\x6d\145\x6e\x75{$list}\56\x63\150\x69\154\x64\162\x65\156\133\61\x5d\56\x73\x74\x79\154\x65\x2e\x64\151\163\160\154\141\171\x3d\x27\156\157\x6e\x65\47\x3b\x7d\x20";
                                    $script[] = "\40\x69\x66\x28\x6d\x65\x6e\x75{$list}\x2e\143\x68\151\154\144\162\145\x6e\133\60\135\x2e\163\164\x79\154\145\x2e\x64\x69\x73\x70\x6c\141\x79\x3d\x3d\x3d\x27\x27\x29\x7b\155\145\156\x75{$list}\56\143\150\151\154\x64\x72\145\x6e\x5b\60\135\56\163\164\171\154\145\x2e\144\x69\x73\160\154\x61\171\75\x27\156\x6f\156\x65\x27\73\x7d\145\x6c\163\x65\173\x6d\145\156\165{$list}\x2e\x63\150\151\x6c\x64\x72\145\x6e\x5b\x30\135\56\163\164\x79\x6c\145\56\x64\x69\163\x70\154\x61\x79\x3d\x27\47\x3b\175\40";
                                    $script[] = "\40\x7d\x29\73\40";
                                }
                            } else {
                                if ($this->right === "\x72\151\x67\150\x74") {
                                    foreach ($menu_list as $list) {
                                        $script[] = "\x20\166\x61\x72\x20\155\x65\x6e\x75{$list}\x20\75\x64\x6f\143\165\155\145\156\164\56\x67\145\x74\105\154\x65\155\x65\156\x74\102\x79\x49\x64\x28\x27{$list}\47\x29\73\40";
                                        $script[] = "\x20\x6d\145\x6e\x75{$list}\56\143\150\151\x6c\144\162\145\x6e\133\62\x5d\56\163\164\x79\154\x65\x2e\144\x69\x73\x70\x6c\x61\171\40\75\47\x6e\x6f\x6e\x65\47\x3b\x20";
                                        $script[] = "\40\155\145\156\x75{$list}\x2e\141\x64\144\105\x76\x65\156\164\114\151\x73\164\x65\x6e\145\162\x28\x27\143\154\x69\x63\153\x27\54\x66\x75\x6e\143\x74\151\x6f\156\50\51\173\x20";
                                        $script[] = "\x20\x69\x66\x28\x6d\145\x6e\165{$list}\x2e\143\x68\151\154\144\162\x65\156\133\62\135\56\163\164\x79\x6c\x65\56\x64\x69\x73\160\154\x61\171\75\x3d\x3d\47\156\157\x6e\x65\47\x29\x7b\x6d\145\156\165{$list}\x2e\x63\x68\x69\x6c\144\x72\x65\x6e\133\62\x5d\56\163\x74\171\x6c\x65\x2e\144\151\163\x70\x6c\x61\171\x3d\47\x27\73\175\x65\154\x73\x65\x7b\x6d\x65\156\165{$list}\x2e\x63\x68\x69\154\144\x72\x65\x6e\133\62\135\x2e\x73\164\171\154\145\x2e\144\151\x73\160\x6c\141\171\x3d\x27\x6e\x6f\x6e\145\47\73\x7d\x20";
                                        $script[] = "\x20\x69\146\x28\155\145\156\165{$list}\56\x63\x68\x69\x6c\144\162\145\x6e\x5b\61\x5d\56\x73\x74\x79\x6c\145\x2e\144\x69\x73\160\x6c\141\171\75\75\75\x27\x27\51\x7b\155\x65\x6e\165{$list}\x2e\143\150\151\154\x64\162\x65\156\133\x31\x5d\x2e\163\164\171\x6c\145\56\144\151\163\160\x6c\141\x79\x3d\x27\x6e\x6f\156\145\x27\73\175\145\x6c\x73\145\x7b\155\145\156\x75{$list}\x2e\143\150\x69\154\x64\x72\145\156\x5b\x31\135\x2e\163\164\171\154\x65\56\x64\x69\x73\x70\x6c\141\171\75\x27\x27\73\175\x20";
                                        $script[] = "\40\175\51\73\x20";
                                    }
                                }
                            }
                            $script[] =
                                "\x20\x76\x61\x72\40\x61\x63\143\40\75\x20\x64\157\x63\x75\155\x65\x6e\164\56\161\165\145\162\x79\x53\x65\x6c\145\x63\x74\x6f\162\101\x6c\154\50\x27\x2e\x77\151\156\x65\137\x6c\151\x73\x74\55\x69\164\x65\x6d\47\x29\73\x20\166\141\162\40\x77\151\156\x65\73\40\x61\143\143\56\146\157\x72\105\x61\x63\150\x28\146\165\x6e\143\x74\151\x6f\156\x28\166\143\54\x6a\153\x29\173\x76\x63\x2e\x6e\x65\x78\x74\105\x6c\x65\155\x65\x6e\x74\x53\x69\142\154\x69\156\x67\x2e\163\x74\171\154\x65\56\144\151\x73\160\x6c\x61\x79\x20\x3d\47\x6e\x6f\156\145\x27\x3b\40\175\51\73\x20";
                            $script[] =
                                "\x20\146\157\x72\x28\x77\151\x6e\x65\40\x3d\40\x30\x3b\x20\167\151\x6e\145\x20\x3c\x20\x61\143\x63\56\x6c\145\156\147\164\x68\73\x20\x77\151\156\x65\53\x2b\51\x7b\141\143\x63\133\x77\x69\156\145\x5d\56\141\x64\144\x45\166\x65\x6e\x74\x4c\x69\x73\164\x65\x6e\145\162\50\x27\143\x6c\x69\143\x6b\47\54\x66\x75\156\143\164\x69\x6f\156\50\51\x7b\x74\x68\x69\x73\x2e\143\x6c\x61\163\163\x4c\x69\163\x74\x2e\164\x6f\x67\x67\x6c\145\50\x27\x61\x63\x74\x69\166\x65\47\x29\73\40\x76\141\162\x20\143\x6f\x6e\164\145\156\164\x20\x3d\x74\x68\x69\x73\x2e\x6e\x65\170\164\x45\x6c\x65\155\x65\x6e\164\x53\151\x62\x6c\x69\156\x67\73\40";
                            $script[] =
                                "\x20\151\146\50\x63\x6f\156\164\145\156\x74\x2e\163\164\171\154\145\56\144\151\x73\x70\154\x61\x79\x3d\75\75\x27\x62\x6c\157\x63\x6b\x27\x29\173\x63\x6f\156\164\x65\156\164\x2e\x73\x74\171\154\x65\x2e\x64\151\163\160\x6c\x61\171\75\47\156\157\156\145\x27\x3b\x7d\145\x6c\x73\x65\x7b\x63\x6f\x6e\164\145\x6e\x74\56\x73\x74\171\154\x65\56\x64\x69\x73\x70\154\141\x79\75\x27\x62\x6c\157\x63\153\x27\x3b\x7d\40";
                            $script[] = "\40\x7d\51\x3b\40";
                            $script[] = "\x20\175\x20";
                            return $script;
                        },
                    ],
                ],
                [classes => "\141\x70\160\55\x72\x65\163\x70\157\156\163\145"]
            );
    }
}
