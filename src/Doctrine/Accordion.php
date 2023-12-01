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
   * @var String|Array keys new instance Accordion Right
   * @property
   * Defined : check property icon position in new instance
   * @since: doctrine v1.0
   * @since: v2.5.0 wine
   * DT: 11.29.2023 **/
   protected  $width;

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
    
    $is_true_menu   = $this->falsy[accordion];
    $is_true_prefix = $this->falsy[prefix];

    if(!$is_true_prefix) {
      throw new \Exception('prefix => (string) "wine_", property WineAccordion require!');
      exit;
    }

    if(!$is_true_menu) {
      throw new \Exception('accordion = (array) [] property and contents WineAccordion cannot be empty!');
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
            $wineIcon = new \PHPWineOptimizedHtml\Doctrine\AccordionIcons;
            $icon     = $wineIcon->Position($menu_items,$prefix,$this->falsy,$iconPosition);
            $this->events = $wineIcon->event();
            return $icon;
           } else if($iconPosition==='right') {
             $this->right=$iconPosition;
             $wineIcon = new \PHPWineOptimizedHtml\Doctrine\AccordionIcons;
             $icon     = $wineIcon->Position($menu_items,$prefix,$this->falsy,$iconPosition);
             $this->events = $wineIcon->event();
             return $icon;
           } else {
            $none_menu = [];

            foreach ($menu_items as $value => $content) {

             // clean up to make vbalid hook
             $valid_hook = $this->valid_hook($value);

             // Hook for list item
             $hook_item_top="top_item_list".$valid_hook;
             $hook_item_bot="bottom_item_list".$valid_hook;

             // Hook for list item content
             $hook_content_top="top_content".$valid_hook;
             $hook_content_bot="bottom_content".$valid_hook;

             array_push($this->events, "$valid_hook");

             $none_menu[] = wine(div,[
               child => [
                    
                 [ span, 
                   attr=>[[classes=>$prefix.$valid_hook]], 
                   value=>[$value]
                 ]

               ] 
             ],[
              classes=>$prefix."list-item",
              id=>$valid_hook,
             ],
              [[$hook_item_top],[$hook_item_bot]])  
              . wine( div,
                 $content,
                [classes=>"content"],
                [[$hook_content_top],[$hook_content_bot]]
              );
            }

           return [
             wine(div,
              implode("",$none_menu),
              [id=>$prefix."menu_item"]
           )];

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
    return $this->lists_menu .
        wine(
            script,
            [
                child => [
                    please => function () {
                      if($this->falsy[icon]) {
                        $script = [];
                        $menu_list = array_unique($this->events);
                        $script[] =
                            "\40\143\x6f\156\163\x74\x20\143\165\x72\162\145\156\x74\x49\x63\157\156\117\x6e\x65\40\75\40\x66\x75\x6e\x63\164\151\157\x6e\x28\154\151\163\x74\x29\40\173\40";
                        $script[] =
                            "\x20\151\x66\50\x6c\151\163\164\x2e\x63\x68\151\154\x64\x72\145\156\133\x31\135\x2e\x73\164\x79\x6c\x65\56\144\151\163\160\x6c\x61\171\75\75\75\x27\x6e\x6f\x6e\x65\47\51\x7b\154\x69\x73\164\x2e\x63\x68\151\x6c\x64\162\145\156\x5b\61\x5d\x2e\x73\x74\171\x6c\145\56\144\151\x73\160\x6c\x61\171\x3d\x27\x27\x3b\175\x65\154\x73\145\173\x6c\x69\x73\x74\x2e\143\x68\151\154\144\162\x65\156\133\x31\135\x2e\x73\x74\171\154\145\x2e\x64\x69\163\160\154\141\171\x3d\47\156\157\156\x65\x27\x3b\x7d\40";
                        $script[] =
                            "\40\151\x66\50\154\x69\x73\x74\x2e\143\150\151\154\x64\162\145\156\133\x30\x5d\x2e\163\x74\x79\x6c\145\x2e\144\x69\163\160\x6c\x61\171\75\75\75\x27\x27\x29\x7b\154\151\x73\x74\x2e\x63\150\151\x6c\144\162\x65\x6e\x5b\60\135\56\163\x74\171\x6c\x65\56\144\x69\163\160\x6c\141\x79\x3d\47\x6e\x6f\156\x65\47\x3b\x7d\x65\154\x73\145\173\154\x69\163\x74\56\x63\150\151\x6c\144\x72\145\x6e\x5b\60\x5d\x2e\163\164\171\x6c\x65\56\144\x69\163\160\154\141\x79\75\47\47\x3b\175\x20";
                        $script[] = "\40\x7d\x3b\40";
                        $script[] =
                            "\x20\x63\x6f\156\163\164\40\143\165\x72\162\145\156\164\111\x63\157\156\x54\x77\x6f\x20\75\40\146\x75\x6e\143\164\x69\x6f\156\50\154\x69\x73\x74\x29\40\173\40";
                        $script[] =
                            "\40\x69\146\50\154\151\x73\x74\x2e\143\150\151\x6c\x64\x72\145\156\x5b\62\135\x2e\163\164\171\x6c\145\x2e\x64\x69\x73\160\154\x61\171\x3d\x3d\x3d\x27\x6e\x6f\156\x65\47\x29\x7b\x6c\151\x73\164\56\143\150\151\x6c\x64\162\145\x6e\133\x32\x5d\56\163\164\171\x6c\145\x2e\144\151\x73\160\x6c\141\171\75\47\47\73\x7d\x65\x6c\163\145\x7b\x6c\x69\163\164\x2e\143\x68\x69\154\x64\162\x65\x6e\x5b\x32\x5d\x2e\x73\164\x79\154\145\x2e\x64\x69\163\160\x6c\141\x79\x3d\x27\156\157\x6e\145\x27\73\175\40";
                        $script[] =
                            "\x20\x69\146\50\154\x69\x73\x74\56\x63\x68\151\x6c\144\162\145\156\133\61\135\56\163\x74\171\154\x65\56\144\x69\163\x70\154\141\x79\x3d\x3d\75\x27\47\x29\173\x6c\x69\163\164\x2e\143\150\x69\154\x64\162\x65\156\x5b\61\x5d\56\163\164\x79\154\145\x2e\x64\x69\x73\x70\154\141\171\75\x27\x6e\x6f\x6e\x65\47\73\x7d\x65\x6c\163\145\173\154\151\x73\x74\56\x63\150\151\x6c\x64\162\x65\156\x5b\61\135\56\163\x74\171\x6c\x65\56\144\x69\163\x70\154\141\171\75\x27\x27\73\x7d\40";
                        $script[] = "\x20\x7d\73\x20";
                        if ($this->left === "\x6c\145\x66\164") {
                            foreach ($menu_list as $list) {
                                $script[] = "\x20\166\x61\162\40\155\145\156\165{$list}\x3d\144\x6f\143\x75\155\145\x6e\164\x2e\147\x65\164\x45\154\x65\155\x65\x6e\164\x42\171\x49\144\x28\x27{$list}\47\x29\73\40";
                                $script[] = "\40\x6d\x65\x6e\x75{$list}\56\143\150\151\154\x64\162\x65\156\x5b\61\x5d\56\x73\x74\171\x6c\145\56\144\151\163\160\154\141\x79\75\47\156\157\156\145\47\73\40";
                                $script[] = "\40\155\145\x6e\x75{$list}\56\x61\x64\144\105\166\145\x6e\164\114\x69\163\x74\x65\x6e\145\x72\50\47\x63\x6c\x69\143\153\47\54\146\165\156\143\164\x69\x6f\x6e\50\x29\x7b\x63\165\x72\x72\x65\x6e\x74\x49\143\157\156\117\x6e\145\x28\x6d\x65\x6e\x75{$list}\51\x3b\x7d\51\73\40";
                            }
                        } else {
                            if ($this->right === "\x72\151\x67\150\x74") {
                                foreach ($menu_list as $list) {
                                    $script[] = "\40\166\x61\x72\40\x6d\145\x6e\165{$list}\40\x3d\x64\157\143\x75\x6d\x65\156\x74\56\147\145\164\x45\154\x65\x6d\x65\156\x74\102\x79\111\144\50\x27{$list}\x27\x29\x3b\40";
                                    $script[] = "\40\x6d\145\x6e\165{$list}\56\143\150\151\x6c\144\x72\145\156\133\x32\x5d\x2e\163\164\x79\154\x65\56\x64\x69\x73\x70\154\x61\x79\x20\x3d\x27\156\157\156\145\47\x3b\x20";
                                    $script[] = "\40\155\145\x6e\165{$list}\56\x61\x64\x64\x45\166\x65\x6e\164\x4c\151\163\164\145\x6e\x65\x72\x28\x27\143\x6c\151\x63\x6b\x27\x2c\x66\165\156\143\x74\x69\157\x6e\x28\x29\173\x63\165\x72\x72\145\156\164\x49\143\x6f\156\124\x77\x6f\x28\x6d\145\156\165{$list}\51\175\x29\x3b\x20";
                                }
                            }
                        }
                        $script[] =
                            "\40\166\141\x72\40\141\x63\143\x20\x3d\40\144\157\143\x75\155\145\156\x74\56\161\x75\145\162\x79\123\145\x6c\145\x63\164\157\162\x41\x6c\x6c\x28\47\56\167\151\156\145\137\154\151\x73\164\55\x69\164\145\x6d\47\x29\73\40\x76\141\x72\x20\167\151\x6e\145\x3b\x20\x61\143\143\x2e\146\x6f\162\x45\141\143\x68\50\x66\165\156\x63\164\151\x6f\x6e\50\x76\143\54\152\153\x29\x7b\x76\x63\56\156\x65\x78\164\105\x6c\x65\155\x65\x6e\x74\123\x69\142\x6c\x69\156\147\x2e\x73\164\x79\154\x65\56\x64\x69\x73\x70\x6c\141\171\x20\75\x27\x6e\x6f\x6e\145\x27\73\40\x7d\x29\73\x20";
                        $script[] =
                            "\x20\146\157\162\50\x77\x69\x6e\x65\40\x3d\40\x30\x3b\x20\167\151\x6e\145\40\x3c\40\141\143\x63\x2e\x6c\x65\x6e\147\x74\150\x3b\40\167\x69\156\145\x2b\x2b\x29\173\x61\x63\x63\x5b\x77\151\x6e\x65\x5d\x2e\141\144\x64\x45\x76\145\x6e\x74\114\151\x73\x74\x65\x6e\x65\162\x28\47\x63\x6c\x69\143\x6b\47\54\146\165\156\x63\164\151\x6f\156\x28\51\173\164\x68\x69\163\56\x63\154\x61\163\163\x4c\x69\x73\x74\56\x74\x6f\x67\147\154\x65\50\x27\x61\143\164\151\x76\x65\47\x29\73\40\x76\141\x72\x20\143\x6f\x6e\164\145\x6e\x74\x20\x3d\x74\150\151\x73\x2e\156\145\170\164\x45\154\x65\x6d\145\156\164\x53\x69\x62\154\x69\x6e\147\x3b\x20";
                        $script[] =
                            "\40\151\146\x28\x63\157\156\x74\x65\x6e\x74\x2e\163\x74\x79\x6c\x65\56\144\151\163\160\x6c\x61\171\75\x3d\x3d\x27\x62\154\157\x63\153\x27\51\x7b\143\157\156\x74\145\156\164\56\x73\164\171\x6c\145\56\x64\151\163\160\x6c\141\x79\x3d\47\156\157\x6e\x65\x27\x3b\175\x65\154\163\x65\x7b\x63\157\156\x74\145\156\x74\x2e\163\164\x79\154\x65\56\x64\x69\x73\160\154\x61\171\75\x27\x62\154\157\x63\x6b\x27\73\x7d\x20";
                        $script[] = "\40\x7d\x29\73\40";
                        $script[] = "\40\x7d\40";
                      } else {
                        $script[] =
                            "\40\166\141\x72\40\141\x63\143\x20\x3d\40\144\157\143\x75\155\145\156\x74\56\161\x75\145\162\x79\123\145\x6c\145\x63\164\157\162\x41\x6c\x6c\x28\47\56\167\151\156\145\137\154\151\x73\164\55\x69\164\145\x6d\47\x29\73\40\x76\141\x72\x20\167\151\x6e\145\x3b\x20\x61\143\143\x2e\146\x6f\162\x45\141\143\x68\50\x66\165\156\x63\164\151\x6f\x6e\50\x76\143\54\152\153\x29\x7b\x76\x63\56\156\x65\x78\164\105\x6c\x65\155\x65\x6e\x74\123\x69\142\x6c\x69\156\147\x2e\x73\164\x79\154\x65\56\x64\x69\x73\x70\x6c\141\171\x20\75\x27\x6e\x6f\x6e\145\x27\73\40\x7d\x29\73\x20";
                        $script[] =
                            "\x20\146\157\162\50\x77\x69\x6e\x65\40\x3d\40\x30\x3b\x20\167\151\x6e\145\40\x3c\40\141\143\x63\x2e\x6c\x65\x6e\147\x74\150\x3b\40\167\x69\156\145\x2b\x2b\x29\173\x61\x63\x63\x5b\x77\151\x6e\x65\x5d\x2e\141\144\x64\x45\x76\145\x6e\x74\114\151\x73\x74\x65\x6e\x65\162\x28\47\x63\x6c\x69\143\x6b\47\54\146\165\156\x63\164\151\x6f\156\x28\51\173\164\x68\x69\163\56\x63\154\x61\163\163\x4c\x69\x73\x74\56\x74\x6f\x67\147\154\x65\50\x27\x61\143\164\151\x76\x65\47\x29\73\40\x76\141\x72\x20\143\x6f\x6e\164\145\x6e\x74\x20\x3d\x74\150\151\x73\x2e\156\145\170\164\x45\154\x65\x6d\145\156\164\x53\x69\x62\154\x69\x6e\147\x3b\x20";
                        $script[] =
                            "\40\151\146\x28\x63\157\156\x74\x65\x6e\x74\x2e\163\x74\x79\x6c\x65\56\144\151\163\160\x6c\x61\171\75\x3d\x3d\x27\x62\154\157\x63\153\x27\51\x7b\143\157\156\x74\145\156\164\56\x73\164\171\x6c\145\56\x64\151\163\160\x6c\141\x79\x3d\47\156\157\x6e\x65\x27\x3b\175\x65\154\163\x65\x7b\x63\157\156\x74\145\156\x74\x2e\163\164\x79\154\x65\56\x64\x69\x73\160\154\x61\171\75\x27\x62\154\157\x63\x6b\x27\73\x7d\x20";
                        $script[] = "\40\x7d\x29\73\40";
                        $script[] = "\40\x7d\40";                        
                      }
                     return $script;
                   },
               ],
            ],
        [classes => "\141\x70\160\x2d\162\x65\x73\x70\x6f\156\x73\x65"]
    );

  }

}
