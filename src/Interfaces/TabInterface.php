<?php 

namespace PHPWineOptimizedHtml\Interfaces;

interface TabInterface
{

  /**
   * --------------------------------------------------------------------------------------------
   * @method accordion
   * -------------------------------------------------------------------------------------------- 
   * This method is a hook to execute the new instance of accordion 
   * 
   * $tab = new WineTab([
   * prefix => 'pro_',
   * icon   => [
   *  'position' => 'left', // right or top_center (top to title [centered]) or bottom_center (bottom to title [centered]) with css flex : direction
   *  'default'  => '+' // default 
   * ],
   * tab => [
   *   'Web Design'    => ' Web Design',
   *   'Flyers Design' => ' Flyers Design',
   *   'Busness Card Design' => 'Bsiness Card',
   *   'Other Design' => 'For you  Lorem',
   * ],
   * hooks => [
   *   \Pro\HookB::class
   * ]
   * 
   * ]);
   * 
   * $tab->tab();
   * 
   * Make you when you query your data from your Model to Controller it is associated array data to be able to 
   * iterrate the value into accordion
   * 
   * $assoc_array: This variable is a associated of arrays of data 
   * ex.$datas = [
   *   'title'  => 'content',
   *   'menu 2' => 'content 2'
   *   
   * ]
   * 
   * PREVIEW: 
   *
   * HOOKS:
   * 
   * ATTR: @method
   * public function attr_prefix_awssscca() {...}
   * 
   * VALUE: @method 
   * public function prefix_awssscca() {...}
   * 
   * TOP and BOTTOM @function
   * function top_prefix_awssscca() {...}
   * function bottom_prefix_awssscca() {...}
   * 
   * @Defined : execute new instance accordion
   * @since: v1.0 doctrine
   * @since: v2.5.0 wine */
  
  public function tab();

}