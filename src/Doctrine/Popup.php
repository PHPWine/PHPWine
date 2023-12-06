<?php 

namespace PHPWineOptimizedHtml\Doctrine;

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
 
/**
* @copyright (c) 2023 PHPWine App Wine Popup Cooked by nielsoffice
*
* MIT License
*
* PHPWine Wine Popup free software: you can redistribute it and/or modify.
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
* @category   PHPWine Wine Popup
*
*
* @author    Leinner Zednanref <syncdevprojects@gmail.com>
* @license   MIT License
* @link      https://github.com/PHPWine/WinePopup/tree/main
* @link      https://github.com/PHPWine/WinePopup/README.md
* @version   v1.0
* @since     12.07.2023
*
*/

class Popup 
extends \PHPWineOptimizedHtml\Layout { 

  /**
   * @var String keys Accordion 
   * @property
   * Defined : check if prefix exist
   * @since: doctrine v1.0
   * @since: v2.5.0 wine
   * DT: 11.11.2023 **/
  protected $prefix;

  /**
   * @var String|Bool|Array keys Accordion 
   * @property
   * Defined : stored content for accordion
   * @since: doctrine v1.0
   * @since: v2.5.0 wine
   * DT: 11.29.2023 **/
   public $falsy;

  /**
   * @var Array|String keys new instance attribute/ html properties filtered
   * @property
   * Defined : check property icon position in new instance
   * @since: doctrine v1.0
   * @since: v2.5.0 wine
   * DT: 11.29.2023 **/
  protected $hook;  

  /**
   * @var Array|String keys new instance attribute/ html properties filtered
   * @property
   * Defined : check property icon position in new instance
   * @since: doctrine v1.0
   * @since: v2.5.0 wine
   * DT: 11.29.2023 **/
  protected $popup;

  /**
   * @var Array|String keys new instance attribute/ html properties filtered
   * @property
   * Defined : check property icon position in new instance
   * @since: doctrine v1.0
   * @since: v2.5.0 wine
   * DT: 11.29.2023 **/
  protected $content;

 public function __construct($wine_popup)
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
     * DT: 12.07.2023 **/
    $this->prefix = $this->is_defined([
      'DRKEY_PREFIX'
     ], 
     $wine_popup
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
     * DT: 12.07.2023 **/
    $this->popup = $this->is_defined([
      'DRKEY_POPUP'
     ], 
     $wine_popup
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
     * DT: 12.07.2023 **/
    $this->hook = $this->is_defined([
     'DRKEY_HOOKS'
    ],
     $wine_popup
    );
      
    
    $this->wine_falsy_popup($wine_popup);
 }

 protected function wine_falsy_popup($properties) {

    $this->falsy = [
    
      // falsy value from main properties  
      prefix => isset($properties[prefix]),
      popup => isset($properties[popup]),
      hooks => isset($properties[hooks]),   

      // falsy value from sub properties
      'months' => isset($properties[popup]['months']),
      'days'   => isset($properties[popup]['days']),
      'every'  => isset($properties[popup]['every']),
      'event'  => isset($properties[popup]['event']),
      'click'  => isset($properties[popup]['event']['click']),
      'close_id'  => isset($properties[popup]['close_id']),

      // value from properties
      'pops' => [
        $properties[popup]['months']?? [], 
        $properties[popup]['days']?? [],   
        $properties[popup]['every']?? 0,
        $properties[popup]['event']?? 'reload',
        $properties[popup]['event']['click']?? '',
        $properties[popup]['close_id']?? '',
        $properties[hooks][0]?? '', 
        $properties[prefix]?? '', 
      ]

    ];

 }


/**
 * --------------------------------------------------------------------------------------------
 * @method wine_action
 * -------------------------------------------------------------------------------------------- 
 * Is where the main accordion file are stored in order to having icons position 
 * 
 * @Defined : check if winepopup key is valid
 * @since: v1.0 doctrine
 * @since: v2.5.0 wine */
 protected function wine_action() {
  
  $prefix = $this->falsy[prefix]; 
  $popup  = $this->falsy[popup];

  if(!$prefix) {
    throw new \Exception('prefix => (string) "wine_", property WinePopUp require!');
    exit;
  }

  if(!$popup) {
    throw new \Exception('popup => (array) [] property and contents WinePopUp cannot be empty!');
    exit;
  }

  // client id on click event 
  $pop_click_client_id=$this->falsy['pops'][4];
  // reload
  $client_id=$this->falsy['pops'][5];

  // content hook html
  $obj_hook=$this->falsy['pops'][6]; 
  $prefix=$this->falsy['pops'][7]; 

  // valid id for container main
  $valid_id=wine_valid_id($prefix,'parent_id');
  // valid id for child container
  $valid_child_id=wine_valid_id($prefix,'child_id');

  // method hook
  $popup_method=$prefix.$valid_child_id;

  // filter attribute main
  $popup_filter="attr_".$prefix.$valid_id;
  $popup_filter_child="attr_".$prefix.$valid_child_id;

  // html hook
  $popup_hook=$prefix.$valid_id;
  $popup_child_hook=$prefix.$valid_child_id;

  $this->content = wine(div,[
    child=>[

      [__, value=>[wine(div,
       magic($obj_hook,$popup_method),
       attr(
        $obj_hook,
        $popup_filter_child,
        [
          id=>$valid_child_id,
          classes=> 'w-child-popup'
        ],
        $valid_child_id,
        'w-child-popup'
      ),
      [
        ["top_$popup_child_hook"],
        ["bottom_$popup_child_hook"]
      ]
      )]]

    ]
  ],
  attr(
   $obj_hook,
   $popup_filter,
   [
     id=> $valid_id,
     classes=>'w-popup'
   ],
   $valid_id,
   'w-popup'
  ),[
    ["top_$popup_hook"],
    ["bottom_$popup_hook"]
  ]);

  return $this->content.wine(script,[child=>[please=>function()use($valid_id,$client_id,$pop_click_client_id){$script=array();if($this->falsy['event']&&$this->falsy['pops'][3]==='reload'){$months=implode(",",$this->falsy['pops'][0]);$days=implode(",",$this->falsy['pops'][1]);$every=(int) $this->falsy['pops'][2];if($every===0){$interval=1000*59*59;}else{$interval=1000*59*59*$every;}$script[]="let month=[$months];";$script[]="let day=[$days];";$script[]="const isMonths=function(client){";$script[]="if(client.length<=0){";$script[]="client=[1,2,3,4,5,6,7,8,9,10,11,12];}";$script[]="let cM=new Date();";$script[]="let currentM=cM.getMonth();";$script[]="if(currentM===0){currentM=1;}else{currentM=currentM+1;}";$script[]="const cMonth=client.find((element)=>element===currentM);";$script[]="return (cMonth===currentM)? true : false;";$script[]="};";$script[]="const isDays = function(client) {";$script[]="let isMonth = isMonths([1,2]);";$script[]="if(client.length <= 0) {";$script[]="client=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31];";$script[]="} else if(isMonth === 2) {";$script[]="client=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29];";$script[]="}";$script[]="let cD = new Date();";$script[]="let currentD=cD.getDate();";$script[]="const cDay=client.find((element)=>element===currentD);";$script[]="return (cDay===currentD)? true : false;";$script[]="};";$script[]=" let isMonth = isMonths(month); ";$script[]=" let isDay = isDays(day); ";$script[]=" const popMeUp = function(target) { ";$script[]="const idElement=document.getElementById(target);";$script[]="idElement.style.position='fixed';";$script[]="idElement.style.backgroundColor='rgb(0 0 0 / 88%)';";$script[]="idElement.style.top='0';";$script[]="idElement.style.left='0';";$script[]="idElement.style.width='100%';";$script[]="idElement.style.height='100%';";$script[]="idElement.style.color='#fff';";$script[]="idElement.style.zIndex='9';";$script[]="document.addEventListener('keydown',function(e){";$script[]="if(e.key==='Escape'){";$script[]="idElement.style='';";$script[]="}";$script[]="});";if($this->falsy['close_id']){$script[]="const c_$client_id=document.getElementById('$client_id');";$script[]="c_$client_id.addEventListener('click',function(){";$script[]="idElement.style='';";$script[]="});";}$script[]=" };";$script[]=" if(isMonth === true && isDay === true ) {";$script[]=" setInterval(popMeUp('$valid_id'), '$interval', '$valid_id'); ";$script[]="}";}else if($this->falsy['click']){$script[]="const pop_$client_id=document.getElementById('$pop_click_client_id');";$script[]="const idElement=document.getElementById('$valid_id');";$script[]="pop_$client_id.addEventListener('click',function(){";$script[]="idElement.style.position='fixed';";$script[]="idElement.style.backgroundColor='rgb(0 0 0 / 88%)';";$script[]="idElement.style.top='0';";$script[]="idElement.style.left='0';";$script[]="idElement.style.width='100%';";$script[]="idElement.style.height='100%';";$script[]="idElement.style.color='#fff';";$script[]="idElement.style.zIndex='9';";$script[]="});";$script[]="document.addEventListener('keydown',function(e){";$script[]="if(e.key==='Escape'){";$script[]="idElement.style='';";$script[]="}";$script[]="});";if($this->falsy['close_id']){$script[]="const c_$client_id=document.getElementById('$client_id');";$script[]="c_$client_id.addEventListener('click',function(){";$script[]="idElement.style='';";$script[]="});";}}return $script;}]],[classes=>'app-response']); 
 
 }

}