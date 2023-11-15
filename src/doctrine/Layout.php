<?php 

 namespace PHPWineOptimizedHtml\Doctrine;

 /**
 * @copyright (c) 2023 Optimized Html Cooked by nielsoffice
 *
 * MIT License
 *
 * Optimized Html free software: you can redistribute it and/or modify.
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
 * @category   PHPLibrary Optimized HTML
 *
 *
 * @author    Leinner Zednanref <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/PHPWine/PHPWine/tree/main
 * @link      https://github.com/PHPWine/PHPWine/README.md
 * @link      https://phpwine.github.io/documents/
 * @version   v2.0
 * @since     10.26.2023
 * @since     11.05.2023
 *
 */

 Class Layout extends \PHPWineOptimizedHtml\OptimizedHtml {

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : Parent Doctrine container attributes html
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    protected $attributes;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks Doctrine dynamic key for html
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    private $hook;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks Doctrine dynamic row for html
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    protected $x_axis;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks Doctrine dynamic multiple row for html
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    protected $mx_axis;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks Doctrine dynamic col for html
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    protected $y_axis;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks Doctrine dynamic multiple cols for html
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    protected $my_axis;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks Doctrine col key cols for hook cb
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    private $magic;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks top later element
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    protected $top_later;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : hooks bottom later element
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    protected $bottom_later;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : Visibility base on width window 
     * Defined : Responsive base on width window 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    private $window;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : Visibility base on width parent element html 
     * Defined : Responsive base on width parent element html 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    private $parent;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : Visibility rely on mobile 
     * Defined : Responsive rely on mobile 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/

    private $mobile;
    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : Visibility rely on tablet 
     * Defined : Responsive rely on tablet 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    private $tablet;

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : Visibility rely on laptop 
     * Defined : Responsive rely on laptop 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/    
    private $laptop;

    public $screen;
    public $visibility;
    public $responsive;
    public $falsy;

    protected $client = [];

    /**
     * @var String|Array keys Doctrine 
     * @property
     * Defined : Visibility rely on desktop 
     * Defined : Responsive rely on desktop 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/ 
    private $desktop;
     
    public function __construct( array ...$wine_layout )
    { 

      parent::__construct();

    /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : verifying key from client end attributes
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
      $this->attributes = $this->is_defined([
        'DRKEY_ATTR'
      ], 
      ...$wine_layout
      );  

   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : verifying key from client end x_axis
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
      $this->x_axis = $this->is_defined([
        'DRKEY_HOOKS','DRKEY_ROW',
        '','DRKEY_MAGIC'
      ], 
      ...$wine_layout
      );

   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : verifying key from client end multiple x axis
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
      $this->mx_axis = $this->is_defined([
        'DRKEY_HOOKS','DRKEY_ROWS'
      ], 
      ...$wine_layout
      );


   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : verifying key from client end y axis
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
      $this->y_axis = $this->is_defined([
        'DRKEY_HOOKS','DRKEY_COLUMN',
        '','DRKEY_MAGIC'
      ], 
      ...$wine_layout
      );

   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : verifying key from client end multiple y axis
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
      $this->my_axis = $this->is_defined([
        'DRKEY_HOOKS','DRKEY_COLUMNS'
      ], 
      ...$wine_layout
      );
    

   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : verifying key from client end top later hook set in doctrine
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
      $this->top_later = $this->is_defined([
        'DRKEY_TLATER'
      ],
      ...$wine_layout
      );

   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : verifying key from client end bottom top hook set in doctrine
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
      $this->bottom_later = $this->is_defined([
        'DRKEY_BLATER'
      ], 
      ...$wine_layout
      );


   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : sanizited data input and create template
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
      $this->wine_template(...$wine_layout);

    }

    public function screen( array $media_query = []) {

      $this->screen = [
        
        $media_query['mobile']??    320
       ,$media_query['ls_mobile']?? 540
       ,$media_query['tablet']??    768
       ,$media_query['ls_tablet']?? 992
       ,$media_query['laptop']??    1024
       ,$media_query['desktop']??   1280
       ,$media_query['xl_screen']?? 1920

      ];

      return $this;

    }

    public function visibility( 
            
     //string $base  = window,
     array|bool $config = []
        
    ) {
     
      # Grid will base on ! 
      // if( $base !== window) 
      // {
      //  $this->parent = $base; 
      // }

      $this->visibility = [
        
         $config['mobile']??    true
        ,$config['ls_mobile']?? true
        ,$config['tablet']??    true
        ,$config['ls_tablet']?? true 
        ,$config['laptop']??    true
        ,$config['desktop']??   true
        ,$config['xl_screen']?? true
       
      ];

      return $this;
        
    }

    public function responsive( 
        
     // string $base  = window, 
      array|bool $config = [] 
        
    ) {
    # Grid will base on !
    // if( $base !== window) 
    // {
    //   $this->parent = $base; 
    // } 

    $this->responsive = [

       $config['mobile']??    true
      ,$config['ls_mobile']?? true
      ,$config['tablet']??    true
      ,$config['ls_tablet']?? true 
      ,$config['laptop']??    true
      ,$config['desktop']??   true
      ,$config['xl_screen']?? true

    ];

    return $this;

    }
  
   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined create template
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : ''
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
    private function wine_template(...$wine_layout) {


   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined create sanitized falsy value array
     * -------------------------------------------------------------------------------------------- 
     * 
     * @Defined : properties doctrine
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
    
      $wine_mixing = [

        // obviously attribute property from client
        attributes   => isset($wine_layout[0][attributes]),

        // obviously rows  property from client
        xrow         => isset($wine_layout[0][hooks][xrow]),
        
        // obviously rows x12 property from client
        xrows        => isset($wine_layout[0][hooks][xrows]),
        
        // obviously col property from client
        column       => isset($wine_layout[0][hooks][column]),
        
        // obviously check columns property from client
        columns      => isset($wine_layout[0][hooks][columns]),
        
        // hook top and bottom later
        top_later    => isset($wine_layout[0][top_later]),
        bottom_later => isset($wine_layout[0][bottom_later]),
      
      ];


   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined client
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : iterate and made raw into wine
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
      $this->client = [

      'content' => [
        $wine_layout[0][attributes]?? [],

        $wine_layout[0][hooks]?? [],
        
        $wine_layout[0][hooks][xrow]?? [],
        
        $wine_layout[0][hooks][xrows]?? [],
        
        $wine_layout[0][hooks][column]?? [],
        
        $wine_layout[0][hooks][columns]?? [],
        
        $wine_layout[0][top_later]?? [],
        
        $wine_layout[0][bottom_later]?? [],
       ],

       'attr'      => $wine_mixing[attributes],
      
       'hook_top'  => $wine_mixing[top_later],
      
       'hook_bot'  => $wine_mixing[bottom_later],
      
       'condition' => $wine_mixing 

    ];

      return $this;

    }

   /**
     * --------------------------------------------------------------------------------------------
     * @method is defined create layout
     * -------------------------------------------------------------------------------------------- 
     * 
     * @Defined : get dynamic layout
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
    public function layout() 
    {

     $screen_mobile    = $this->screen[0]?? 320;
     $screen_ls_mobile = $this->screen[1]?? 540;
     $screen_tablet    = $this->screen[2]?? 768;
     $screen_ls_tablet = $this->screen[3]?? 992;
     $screen_laptop    = $this->screen[4]?? 1024;
     $screen_desktop   = $this->screen[5]?? 1280;
     $screen_xl_screen = $this->screen[6]?? 1920;

    //  var_dump(
    //   $screen_mobile
    //  .$screen_ls_mobile
    //  .$screen_tablet
    //  .$screen_ls_tablet
    //  .$screen_laptop
    //  .$screen_desktop
    //  .$screen_xl_screen
    // );

     $responsive_mobile    = $this->responsive[0]?? true;
     $responsive_ls_mobile = $this->responsive[1]?? true;
     $responsive_tablet    = $this->responsive[2]?? true;
     $responsive_ls_tablet = $this->responsive[3]?? true;
     $responsive_laptop    = $this->responsive[4]?? true;
     $responsive_desktop   = $this->responsive[5]?? true;
     $responsive_xl_screen = $this->responsive[6]?? true;

  //   var_dump(
  //    $responsive_mobile
  //   .$responsive_ls_mobile
  //   .$responsive_tablet
  //   .$responsive_ls_tablet
  //   .$responsive_laptop
  //   .$responsive_desktop
  //   .$responsive_xl_screen
  //  );
  
       $wine = $this->wine_hook_tag_selections(    
         div,[ 
          child => [
            please => function() {
              $wine = [];
              foreach ($this->client['content'][1] as $wine_key => $wine_val) {
               foreach ($wine_val as $value) {

                 $wine[] = $this->optimized_html(div,null, 
                  $this->wine_callable_hook(
                    $value[0], ...$value[1]?? []
                  )
                 ); 
                }
              }
              
            return $wine;

           }
          ]
         ],
         $this->client['content'][0]
         ,array(
         ["top_"
        .$this->client['content'][6]]
        ,["bottom_"
        .$this->client['content'][7]]
        ),

      );


      if($this->visibility[0]?? true ) {

        $wine_hooks = '';
        
        if(
          $this->client['condition'][xrows] || 
          $this->client['condition'][xrow]) {
          $wine_hooks .= $wine;
        } else if (
          $this->client['condition'][columns] || 
          $this->client['condition'][column]) {
          $wine_hooks .= $wine;
        }

        return $wine_hooks;
        
      } 

      if($this->visibility[1]?? true) {

        $wine_hooks = '';
        
        if(
          $this->client['condition'][xrows] || 
          $this->client['condition'][xrow]) {
          $wine_hooks .= $wine;
        } else if (
          $this->client['condition'][columns] || 
          $this->client['condition'][column]) {
          $wine_hooks .= $wine;
        }

        return $wine_hooks;
      }

      if($this->visibility[2]?? true) {
      
        $wine_hooks = '';
      
        if(
          $this->client['condition'][xrows] || 
          $this->client['condition'][xrow]) {
          $wine_hooks .= $wine;
        } else if (
          $this->client['condition'][columns] || 
          $this->client['condition'][column]) {
          $wine_hooks .= $wine;
        }
      
        return $wine_hooks;

      }
      
      if($this->visibility[3]?? true) {
      
        $wine_hooks = '';
      
        if(
          $this->client['condition'][xrows] || 
          $this->client['condition'][xrow]) {
          $wine_hooks .= $wine;
        } else if (
          $this->client['condition'][columns] || 
          $this->client['condition'][column]) {
          $wine_hooks .= $wine;
        }
      
        return $wine_hooks;

      }
      
      if($this->visibility[4]?? true) {
      
        $wine_hooks = '';
      
        if(
          $this->client['condition'][xrows] || 
          $this->client['condition'][xrow]) {
          $wine_hooks .= $wine;
        } else if (
          $this->client['condition'][columns] || 
          $this->client['condition'][column]) {
          $wine_hooks .= $wine;
        }
      
        return $wine_hooks;
      
      }
      
      if($this->visibility[5]?? true) {
      
        $wine_hooks = '';
      
        if(
          $this->client['condition'][xrows] || 
          $this->client['condition'][xrow]) {
          $wine_hooks .= $wine;
        } else if (
          $this->client['condition'][columns] || 
          $this->client['condition'][column]) {
          $wine_hooks .= $wine;
        }
      
        return $wine_hooks;
      
      }
      
      if($this->visibility[6]?? true) {
      
        $wine_hooks = '';
      
        if(
          $this->client['condition'][xrows] || 
          $this->client['condition'][xrow]) {
          $wine_hooks .= $wine;
        } else if (
          $this->client['condition'][columns] || 
          $this->client['condition'][column]) {
          $wine_hooks .= $wine;
        }
      
        return $wine_hooks;
      
      }

    }

    /**
     * @method is_defined client key ?  
     * Defined : check attribute doctrine 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.12.2023 **/    
    private function is_defined( array $keys = [], array ...$wine_layout ) {

      $wine_registered_valid_keys = wine_valid_keys();

      if(operations($keys, 1, EQLESS)) {

        $is_valid = $keys[0]; 

        $get_valid_key = $this->wine_hooks_filter_assigned(
            $is_valid, 
            $wine_registered_valid_keys
        );

        $get_valid_key = array_values(
            $wine_registered_valid_keys
        )[$get_valid_key];

        if( $get_valid_key == true || !empty($get_valid_key)) {
          return $get_valid_key;
        }

      }  else if(operations($keys, 2, SUPER)) {

        $is_valid = $keys[1];
    
        $get_valid_key = $this->wine_hooks_filter_assigned($is_valid, $wine_registered_valid_keys);
        $get_valid_key = array_values($wine_registered_valid_keys)[$get_valid_key];

        if( $get_valid_key == true || !empty($get_valid_key)) {
          return $get_valid_key;
        }

      } else if(operations($keys, 4, SUPER)) { 

        $is_valid = $keys[1]; 

        $get_valid_key = $this->wine_hooks_filter_assigned(
            $is_valid, 
            $wine_registered_valid_keys
        );
        
        $get_valid_key = array_values(
            $wine_registered_valid_keys
         )[$get_valid_key];
       
        if( $get_valid_key == true || !empty($get_valid_key)) {
          return $get_valid_key;
        }

      }
    }

    /**
     * @method assigned hook to the dynamic element  
     * Defined : check attribute doctrine 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.12.2023 **/    
    private function wine_hooks_filter_assigned( $is_valid , array $valid_keys = [] ) {

      if($this->is_valid_key( $is_valid , $valid_keys)) {
      
        $get_valid_key = array_search($is_valid,
          array_keys($valid_keys)
        );

       } else {

        throw new \Exception("\invalid key from doctrine : 
            $is_valid [phpwine.github.io/documents/]"
        );
        exit;

       }  
      
      if( 
        !is_null($get_valid_key) || 
        !empty($get_valid_key)   || 
        $get_valid_key !== false 
      ) { 

       return $get_valid_key;
      }
      
    }

    /**
     * @method is_valid_key 
     * Defined : validate if valid key from wine.
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.12.2023 **/    
    protected function is_valid_key( string|array $wine_key, array $valid_keys = []) {

      $valid_keys = (count($valid_keys) == 0 ) ? array_values(wine_valid_keys()) : array_keys($valid_keys);

      if(in_array($wine_key,$valid_keys)) { 
        return true;
      }   

    }
    

 }