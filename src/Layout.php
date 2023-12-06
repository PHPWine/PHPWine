<?php 

 namespace PHPWineOptimizedHtml;

 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);

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
     * @var String keys Doctrine 
     * @property
     * Defined : Sekect all Doctrine container those html
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.11.2023 **/
    protected $those;

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
     * @var String|Array media set for visibility 
     * @property
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.16.2023 **/
    public $screen;

    /**
     * @var Mixed doctrine child container 
     * @property
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.16.2023 **/
    public $screen_object;

    /**
     * @var Array|Bool media set for visibility 
     * @property
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.16.2023 **/
    public $visibility;

    /**
     * @var Array|Bool condition 
     * @property
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.16.2023 **/
    public $falsy;

    /**
     * @var Mixed object content
     * @property
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.16.2023 **/
    public $content_object;

    /**
     * @var Array config
     * @property
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.16.2023 **/
    public $client = [];
     
    public function __construct( array $wine_layout )
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
        $wine_layout
      );  

    /**
     * --------------------------------------------------------------------------------------------
     * @method is defined check client end 
     * -------------------------------------------------------------------------------------------- 
     * Wine check if there's anonymouse keyword or invalid key the user use in doctrine
     * this will help to figureout which and where is mistake from client
     * 
     * @Defined : verifying key from client end those
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.10.2023 
     */
    $this->those = $this->is_defined([
      'DRKEY_THOSE'
    ], 
      $wine_layout
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
        $wine_layout
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
       $wine_layout
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
       $wine_layout
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
        $wine_layout
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
        $wine_layout
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
        $wine_layout
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
      $this->wine_template($wine_layout);

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
    private function wine_template(array $wine_layout = []) {

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

      /**
       * -----------------------------------------------------------------
       * @Defined client/Dev: falsy value obviously attribute property from client
       * ----------------------------------------------------------------- */
        attributes => isset($wine_layout[attributes]),
      
      /**
       * -----------------------------------------------------------------
       * @Defined client/Dev: falsy value  obviously those property from client
       * ----------------------------------------------------------------- */
        those => isset($wine_layout[those]),

      /**
       * -----------------------------------------------------------------
       * @Defined client/Dev: falsy value obviously rows  property from client
       * ----------------------------------------------------------------- */
        xrow => isset($wine_layout[hooks][xrow]),
        
      /**
       * -----------------------------------------------------------------
       * @Defined client/Dev: falsy value obviously rows x12 property from client
       * ----------------------------------------------------------------- */
        xrows => isset($wine_layout[hooks][xrows]),
        
      /**
       * -----------------------------------------------------------------
       * @Defined client/Dev: falsy value obviously col property from client
       * ----------------------------------------------------------------- */
        column => isset($wine_layout[hooks][column]),

      /**
       * -----------------------------------------------------------------
       * @Defined client/Dev: falsy value obviously check columns property from client
       * ----------------------------------------------------------------- */
        columns => isset($wine_layout[hooks][columns]),

      /**
       * -----------------------------------------------------------------
       * @Defined client/Dev: falsy value hook top and bottom later
       * ----------------------------------------------------------------- */
        top_later => isset($wine_layout[top_later]),
        bottom_later => isset($wine_layout[bottom_later]),
      
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

      /**
       * -----------------------------------------------------------------
       * @Defined client/Dev: Contents doctrine 
       * ----------------------------------------------------------------- */
      'content' => [
        
        $wine_layout[attributes]?? [],
        $wine_layout[hooks]?? [],      
        $wine_layout[hooks][xrow]?? [],
        $wine_layout[hooks][xrows]?? [], 
        $wine_layout[hooks][column]?? [],
        $wine_layout[hooks][columns]?? [],
        $wine_layout[top_later][0]?? false,
        $wine_layout[bottom_later][0]?? false,
        $wine_layout[top_later][1]?? [],
        $wine_layout[bottom_later][1]?? [],
        $wine_layout[those]?? false
       ],

      /**
       * -----------------------------------------------------------------
       * @Defined client/Dev:  function_hooks later attributes
       * ----------------------------------------------------------------- */
       'attr'      => $wine_mixing[attributes],
      
      /**
       * -----------------------------------------------------------------
       * @Defined client/Dev:  function_hooks later top
       * ----------------------------------------------------------------- */ 
       'hook_top'  => $wine_mixing[top_later]?? false,

      /**
       * -----------------------------------------------------------------
       * @Defined client/Dev:  function_hooks later bottom
       * ----------------------------------------------------------------- */ 
       'hook_bot'  => $wine_mixing[bottom_later]?? false,
      
      /**
       * -----------------------------------------------------------------
       * @Defined client/Dev:  falsy value
       * ----------------------------------------------------------------- */ 
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
    protected function wine_action_visible( 
            
      array $config = []
         
     ) {
      
    /**
     * --------------------------------------------------------------------------------------------
     * @properties 
     * @array 
     * -------------------------------------------------------------------------------------------- 
     * front end visivility properties
     * 
     * @Defined : make doctraine container visible to screen size
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.16.2023 
     */
       $this->visibility = [

        /**
         * -----------------------------------------------------------------
         * @Defined screen: obviously by default doctrain container visibily to mobie super small devices
         * ----------------------------------------------------------------- */
         $config['sm_mobile']?? true    

        /**
         * -----------------------------------------------------------------
         * @Defined screen: obviously by default doctrain container visibily to mobie
         * ----------------------------------------------------------------- */      
        ,$config['mobile']?? true

        /**
         * -----------------------------------------------------------------
         * @Defined screen: obviously by default doctrain container visibily to landscape mobile
         * ----------------------------------------------------------------- */  
        ,$config['ls_mobile']?? true

        /**
         * -----------------------------------------------------------------
         * @Defined screen:  obviously by default doctrain container visibily to tablet
         * ----------------------------------------------------------------- */ 
        ,$config['tablet']?? true

        /**
         * -----------------------------------------------------------------
         * @Defined screen:  obviously by default doctrain container visibily to landscape teblet
         * ----------------------------------------------------------------- */ 
        ,$config['ls_tablet']?? true 

        /**
         * -----------------------------------------------------------------
         * @Defined screen:  obviously by default doctrain container visibily to laptop
         * ----------------------------------------------------------------- */ 
        ,$config['laptop']?? true

        /**
         * -----------------------------------------------------------------
         * @Defined screen:  obviously by default doctrain container visibily to desktop
         * ----------------------------------------------------------------- */ 
        ,$config['desktop']?? true

        /**
         * -----------------------------------------------------------------
         * @Defined screen:  obviously by default doctrain container visibily to large screen size
         * ----------------------------------------------------------------- */ 
        ,$config['xl_screen']?? true
        
       ];

    /**
     * --------------------------------------------------------------------------------------------
     * @object 
     * @main doctrine content
     * -------------------------------------------------------------------------------------------- 
     * child doctrain container
     * 
     * @Defined : makes a columns colum row and rows structure
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.16.2023 
     */

     $this->content_object = $this->wine_hook_tag_selections(    
        // set by default for div
        ($this->client['condition'][those]) ? __ : div,[ 
          child => [
            please => function() {
              // we gonna loop through it
              $wine = [];

              /**
               * --------------------------------------------------------------------------------------------
               * @hook default 
               * @implement please condition to before hooks
               * -------------------------------------------------------------------------------------------- 
               * This will run a method call back from doctrine base on condition before hook
               * 
               * @Defined : doctrine hooks for [ xrow xrows, column, columns ]
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.19.2023 
               */
              if( $this->wine_reserved_keyword_verifier(please,$this->client['content'][1]) && 
              is_callable($this->client['content'][1][please])) {
                 
                return $this->wine_doctrine_magic_content($this->client['content'][1][please]());

              } else {

              /**
               * --------------------------------------------------------------------------------------------
               * @hook xrow 
               * @implement please condition to xrow 
               * -------------------------------------------------------------------------------------------- 
               * This will run a method call back from doctrine base on condition
               * 
               * @Defined : doctrine xrow
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.19.2023 
               */
                  if(
                      $this->wine_reserved_keyword_verifier(please, $this->client['content'][2]) &&
                      is_callable($this->client['content'][2][please])
                  ) {

                   return $this-> wine_doctrine_magic_content($this->client['content'][2][please]());

              /**
               * --------------------------------------------------------------------------------------------
               * @hook xrows 
               * @implement please condition to xrows 
               * -------------------------------------------------------------------------------------------- 
               * This will run a method call back from doctrine base on condition
               * 
               * @Defined : doctrine xrows
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.19.2023 
               */
                  } elseif(
                      $this->wine_reserved_keyword_verifier(please, $this->client['content'][3]) &&
                      is_callable($this->client['content'][3][please])
                  ) {

                    return $this-> wine_doctrine_magic_content($this->client['content'][3][please]());

              /**
               * --------------------------------------------------------------------------------------------
               * @hook column 
               * @implement please condition to column 
               * -------------------------------------------------------------------------------------------- 
               * This will run a method call back from doctrine base on condition
               * 
               * @Defined : doctrine column
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.19.2023 
               */
                  } elseif(
                      $this->wine_reserved_keyword_verifier(please, $this->client['content'][4]) &&
                      is_callable($this->client['content'][4][please])
                  ) {

                    return $this-> wine_doctrine_magic_content($this->client['content'][4][please]());

              /**
               * --------------------------------------------------------------------------------------------
               * @hook columns 
               * @implement please condition to columns 
               * -------------------------------------------------------------------------------------------- 
               * This will run a method call back from doctrine base on condition
               * 
               * @Defined : doctrine columns
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.19.2023 
               */
                  } elseif(

                      $this->wine_reserved_keyword_verifier(please, $this->client['content'][5]) &&
                      is_callable($this->client['content'][5][please])

                  ) {

                     return $this-> wine_doctrine_magic_content($this->client['content'][5][please]());

                  } else {

              /**
               * --------------------------------------------------------------------------------------------
               * @default hook execution 
               * -------------------------------------------------------------------------------------------- 
               * This will run a method call back from doctrine without condition
               * 
               * @Defined : doctrine default 
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.19.2023 
               */
                      foreach ($this->client['content'][1] as $wine_key => $wine_val) {

                        foreach ($wine_val as $value) {

                            if(is_object($value[0] ?? false) || class_exists($value[0] ?? false)) {
                                $wine[] = $this->optimized_html(
                                  __,
                                  null,
                                  $this->value(
                                    $value[0] ?? '',
                                    $value[1] ?? false,
                                    ...$value[2] ?? []
                                  )
                               );
                            } else {
                              $wine[] = $this->optimized_html(
                                   __,
                                  null,
                                  $this->wine_callable_hook(
                                    $value[0] ?? '',
                                    ...$value[1] ?? []
                                  )
                              );
                            }

                       }
                    }
                  }
               }

            return $wine;

           }
          ]
         ],

        /**
         * -----------------------------------------------------------------
         * @Defined attributes:  hook 
         * Here your attributes goes in you can esily add attribute in client side 
         * doctrine class dynamically
         * ----------------------------------------------------------------- */ 
         $this->client['content'][0] /* set prperties */
         ,array(

        /**
         * -----------------------------------------------------------------
         * @Defined hook: top_ hook 
         * Doctrine remove the "top_" keyword from client and assigned itself
         * but you have to add this key when you create a call back function
         * ex. top_followed_by_your_hook_name 
         * ----------------------------------------------------------------- */  
         [
         "top_"
         .$this->client['content'][6]?? '',[...$this->client['content'][8]?? []]
         ] /* set prperties */

        /**
         * -----------------------------------------------------------------
         * @Defined hook: bottom_ hook 
         * Doctrine remove the "bottom_" keyword from client and assigned itself
         * but you have to add this key when you create a call back function
         * ex. bottom_followed_by_your_hook_name 
         * ----------------------------------------------------------------- */ 
        ,[
        "bottom_"
        .$this->client['content'][7]?? '',[...$this->client['content'][9]?? []]
        ] /* set prperties */
        ),

      );
     
      return $this;

    }

    /**
     * --------------------------------------------------------------------------------------------
     * @object 
     * @main doctrine screen size 
     * -------------------------------------------------------------------------------------------- 
     * we have 320 and 540px also 540 to 768px and  768 to 992
     * we have 992 to 1024px we have also 1024 to 1280px
     * 1280 to 1920 last but not the least is 1920px above
     * 
     * @Defined : those screen size are available by default to make out doctrine content visibility
     * @since: v1.0 doctrine
     * @since: v2.0 wine
     * DT: 11.16.2023 
     */
    protected function wine_action_screen( array $media_query = []) { 

      $this->screen_object = wine(script,[

          child => [

             please => function() use ($media_query) {

              $this->screen = [
             
              /**
               * -----------------------------------------------------------------
               * @Defined screen: is max 375 for mobile [max-width]
               * @from 375 screen to 0 media size doctrine implemented...
               * @media_key : sm_mobile
               * ----------------------------------------------------------------- */
               $media_query['sm_mobile']?? 375

              /**
               * -----------------------------------------------------------------
               * @Defined screen: is min 375 for mobile [min-width]
               * @from 375 screen to 540 media size doctrine implemented...
               * @between 375, 390, 393, 412, 414, 428 and 480 to 540
               * @media_key : mobile
               * ----------------------------------------------------------------- */
               ,$media_query['mobile']?? 375
        
              /**
               * -----------------------------------------------------------------
               * @Defined screen: is max 540 for mobile [min-width] of 375 & [min-width]
               * @from 540 screen to 768 media size doctrine implemented...
               * @between 540, 600, 653, 667, 720, 740 to 768
               * @media_key : ls_mobile
               * ----------------------------------------------------------------- */
               ,$media_query['ls_mobile']?? 540 
                
              /**
               * -----------------------------------------------------------------
               * @Defined screen: is max 768 for mobile [min-width] of 540 & [min-width]
               * @from 768 screen to 992 media size doctrine implemented...
               * @between 768, 800, 820, 844, 851, 896, 915 to 992
               * @media_key : tablet
               * ----------------------------------------------------------------- */
               ,$media_query['tablet']?? 768
 
              /**
               * -----------------------------------------------------------------
               * @Defined screen: is max 992 for mobile [min-width] of 768 & [min-width]
               * @from 992 screen to 1024 media size doctrine implemented...
               * @between 992 to 1024
               * @media_key : ls_tablet
               * ----------------------------------------------------------------- */  
               ,$media_query['ls_tablet']?? 992
              
              /**
               * -----------------------------------------------------------------
               * @Defined screen: is max 1024 for mobile [min-width] of 992 & [min-width]
               * @from 1024 screen to 1280 media size doctrine implemented...
               * @between 1024, 1100, 1180 to 12800
               * @media_key : laptop
               * ----------------------------------------------------------------- */   
               ,$media_query['laptop']?? 1024
                
              /**
               * -----------------------------------------------------------------
               * @Defined screen: is max 1280 for mobile [min-width] of 1024 & [min-width]
               * @from 12800 screen to 1920 media size doctrine implemented...
               * @between 12800, 1300, 1386, 1400 to 1920
               * @media_key : desktop
               * ----------------------------------------------------------------- */   
               ,$media_query['desktop']?? 1280
                
              /**
               * -----------------------------------------------------------------
               * @Defined screen: is only min 1920 for mobile larger like 2k or 4k screen and higher
               * @from 1920 screen to 4k or higher media size doctrine implemented...
               * @between 1920, 2k, 4k, or higher
               * @media_key : xl_screen
               * ----------------------------------------------------------------- */     
               ,$media_query['xl_screen']?? 1920   
        
              ];

             $script = [];
             $script[] = "";
             
             // get doctrine child id container
             $doctrine_id  = (string) (isset($this->client['content'][0]['id']))? $this->client['content'][0]['id'] : null;
             $doctrine_idt = (string) (isset($this->client['content'][10]))? $this->client['content'][10] : null;
 
           /**
             * --------------------------------------------------------------------------------------------
             * @globalVariable 
             * @visibility GLOBAL VARAIBLE return size modified restricted to be intigers 
             * -------------------------------------------------------------------------------------------- */
             $GLOBALS['w_sm_mobile'] = $sm_mobile_id = (int) $this->screen[0];
             $GLOBALS['w_mobile']    = $mobile_id    = (int) $this->screen[1];
             $GLOBALS['w_ls_mobile'] = $xl_mobile_id = (int) $this->screen[2];
             $GLOBALS['w_tablet']    = $tablet_id    = (int) $this->screen[3];
             $GLOBALS['w_ls_tablet'] = $xl_tablet_id = (int) $this->screen[4];
             $GLOBALS['w_laptop']    = $laptop_id    = (int) $this->screen[5];
             $GLOBALS['w_desktop']   = $desktop_id   = (int) $this->screen[6];
             $GLOBALS['w_xl_screen'] = $xl_screen_id = (int) $this->screen[7];

           /**
             * --------------------------------------------------------------------------------------------
             * @globalVariable 
             * @visibility GLOBAL VARAIBLE visibility boolean 
             * -------------------------------------------------------------------------------------------- */
             $GLOBALS['w_v_sm_mobile'] = $v_sm_mobile_id = (bool) $this->visibility[0];
             $GLOBALS['w_v_mobile']    = $v_mobile_id    = (bool) $this->visibility[1];
             $GLOBALS['w_v_ls_mobile'] = $v_xl_mobile_id = (bool) $this->visibility[2];
             $GLOBALS['w_v_tablet']    = $v_tablet_id    = (bool) $this->visibility[3];
             $GLOBALS['w_v_ls_tablet'] = $v_xl_tablet_id = (bool) $this->visibility[4];
             $GLOBALS['w_v_laptop']    = $v_laptop_id    = (bool) $this->visibility[5];
             $GLOBALS['w_v_desktop']   = $v_desktop_id   = (bool) $this->visibility[6];
             $GLOBALS['w_v_xl_screen'] = $v_xl_screen_id = (bool) $this->visibility[7];
              
             // enable visibility in front end
             if(
               !$v_sm_mobile_id || !$v_mobile_id || !$v_xl_mobile_id || !$v_tablet_id    ||
               !$v_xl_tablet_id || !$v_laptop_id || !$v_desktop_id   || !$v_xl_screen_id  
              ) { 

                $doctrine_idot   = str_replace(".","",$doctrine_idt);
                $doctrine_idhush = str_replace("#","",$doctrine_idot);  
                $doctrine_all    = str_replace("-","_",$doctrine_idhush); 
                
                if($doctrine_idt) { 
                  $script[] = "var those_$doctrine_all=document.querySelectorAll('$doctrine_idt');"; } 
                 else if(!is_null($doctrine_id)) {
                  $script[] = "var __t_$doctrine_id=document.getElementById('$doctrine_id');"; 
                }
             }

              /**
               * --------------------------------------------------------------------------------------------
               * @visibility mobile 
               * @main media size screen max 375 to 0 screen such watch and super small devices 
               * -------------------------------------------------------------------------------------------- 
               * This will run when you set false which means to hide in mobile screen
               * 
               * @Defined : mobile screen
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.16.2023 
               */
              if(!$v_sm_mobile_id) {
                $script[] = "var wm=window.matchMedia('(max-width:".$sm_mobile_id."px)');";
                $script[] = "function e(e){ if(e.matches){";
                          if($doctrine_idt) { $script[] = "those_$doctrine_all.forEach(function(v,k){v.style.display='none';});";}
                          else if(!is_null($doctrine_id)) { $script[] = "__t_$doctrine_id.style.display='none';"; }
                $script[] = "}else{";
                          if($doctrine_idt){ $script[] = "those_$doctrine_all.forEach(function(v,k){v.style.display='';});";}
                          else if(!is_null($doctrine_id)) { $script[] = "__t_$doctrine_id.style.display='';"; }
                $script[] = "}}wm.addListener(e);e(wm);";
              }
              
              /**
               * --------------------------------------------------------------------------------------------
               * @visibility mobile 
               * @main media size screen 320 
               * -------------------------------------------------------------------------------------------- 
               * This will run when you set false which means to hide in mobile screen
               * 
               * @Defined : mobile screen
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.16.2023 
               */
               if(!$v_mobile_id) {
                 $script[] = "var wm=window.matchMedia('(min-width:".$mobile_id."px) and (max-width:".$xl_mobile_id."px)');";
                 $script[] = "function e(e){ if(e.matches){";
                           if($doctrine_idt) { $script[] = "those_$doctrine_all.forEach(function(v,k){v.style.display='none';});";}
                           else if(!is_null($doctrine_id)) { $script[] = "__t_$doctrine_id.style.display='none';"; }
                 $script[] = "}else{";
                           if($doctrine_idt){ $script[] = "those_$doctrine_all.forEach(function(v,k){v.style.display='';});";}
                           else if(!is_null($doctrine_id)) { $script[] = "__t_$doctrine_id.style.display='';"; }
                 $script[] = "}}wm.addListener(e);e(wm);";
               }
            
              /**
               * --------------------------------------------------------------------------------------------
               * @visibility mobile large 
               * @main media size screen 540 
               * -------------------------------------------------------------------------------------------- 
               * This will run when you set false which means to hide in mobile screen
               * 
               * @Defined : mobile screen
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.16.2023 
               */
               if(!$v_xl_mobile_id) {
                 $script[] = "var wmlg=window.matchMedia('(min-width:".$xl_mobile_id."px) and (max-width:".$tablet_id."px)'); ";
                 $script[] = "function e(e){ if(e.matches){";
                            if($doctrine_idt) { $script[] = "those_$doctrine_all.forEach(function(v,k){v.style.display='none';});";}
                            else if(!is_null($doctrine_id))  { $script[] = "__t_$doctrine_id.style.display='none';"; }
                 $script[] = "}else{";
                            if($doctrine_idt) { $script[] = "those_$doctrine_all.forEach(function(v,k){v.style.display='';});";}
                            else if(!is_null($doctrine_id)) { $script[] = "__t_$doctrine_id.style.display='';"; }
                 $script[] = "}}wmlg.addListener(e);e(wmlg);";
            
                }

              /**
               * --------------------------------------------------------------------------------------------
               * @visibility tablet 
               * @main media size screen 768 
               * -------------------------------------------------------------------------------------------- 
               * This will run when you set false which means to hide in tablet screen
               * 
               * @Defined : tablet screen
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.16.2023 
               */
               if(!$v_tablet_id) {
                $script[] = "var wt=window.matchMedia('(min-width:".$tablet_id."px) and (max-width:".$xl_tablet_id ."px)');";
                $script[] = "function e(e){ if(e.matches){";
                          if($doctrine_idt) { $script[] = "those_$doctrine_all.forEach(function(v,k){v.style.display='none';});";}
                          else if(!is_null($doctrine_id))  { $script[] = "__t_$doctrine_id.style.display='none';"; }
                $script[] = "}else{";
                          if($doctrine_idt){ $script[] = "those_$doctrine_all.forEach(function(v,k){v.style.display='';});";}
                          else if(!is_null($doctrine_id)) { $script[] = "__t_$doctrine_id.style.display='';"; }
                $script[] = "}}wt.addListener(e);e(wt);";
              }

              /**
               * --------------------------------------------------------------------------------------------
               * @visibility tablet large 
               * @main media size screen 992 
               * -------------------------------------------------------------------------------------------- 
               * This will run when you set false which means to hide in tablet screen
               * 
               * @Defined : mobile screen
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.16.2023 
               */
               if(!$v_xl_tablet_id) {
                 $script[] = "var wlgt=window.matchMedia('(min-width:".$xl_tablet_id ."px) and (max-width:".$laptop_id."px)'); ";
                 $script[] = "function e(e){if(e.matches){";
                          if($doctrine_idt) { $script[] = "those_$doctrine_all.forEach(function(v,k){v.style.display='none';});";}
                          else if(!is_null($doctrine_id))  { $script[] = "__t_$doctrine_id.style.display='none';"; }
                $script[] = "}else{";
                          if($doctrine_idt){ $script[] = "those_$doctrine_all.forEach(function(v,k){v.style.display='';});";}
                          else if(!is_null($doctrine_id)) { $script[] = "__t_$doctrine_id.style.display='';"; }
                $script[] = "}}wlgt.addListener(e);e(wlgt);";
              }

              /**
               * --------------------------------------------------------------------------------------------
               * @visibility laptop large 
               * @main media size screen 1024 
               * -------------------------------------------------------------------------------------------- 
               * This will run when you set false which means to hide in laptop screen
               * 
               * @Defined : laptop screen
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.16.2023 
               */
              if(!$v_laptop_id) {
                $script[] = "var wlap=window.matchMedia('(min-width:".$laptop_id."px) and (max-width:".$desktop_id."px)'); ";
                $script[] = "function e(e){if(e.matches){";
                          if($doctrine_idt) { $script[] = "those_$doctrine_all.forEach(function(v,k){v.style.display='none';});";}
                          else if(!is_null($doctrine_id))  { $script[] = "__t_$doctrine_id.style.display='none';"; }
                $script[] = "}else{";
                          if($doctrine_idt){ $script[] = "those_$doctrine_all.forEach(function(v,k){v.style.display='';});";}
                          else if(!is_null($doctrine_id)) { $script[] = "__t_$doctrine_id.style.display='';"; }
                $script[] = "}}wlap.addListener(e);e(wlap);";
              }

              /**
               * --------------------------------------------------------------------------------------------
               * @visibility desktop large 
               * @main media size screen 1280 
               * -------------------------------------------------------------------------------------------- 
               * This will run when you set false which means to hide in desktop screen
               * 
               * @Defined : desktop screen
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.16.2023 
               */
              if(!$v_desktop_id) {
                $script[] = "var wdtp=window.matchMedia('(min-width:".$desktop_id."px) and (max-width:". $xl_screen_id."px)'); ";
                $script[] = "function e(e){if(e.matches){";
                          if($doctrine_idt) { $script[] = "those_$doctrine_all.forEach(function(v,k){v.style.display='none';});";}
                          else if(!is_null($doctrine_id))  { $script[] = "__t_$doctrine_id.style.display='none';"; }
                $script[] = "}else{";
                          if($doctrine_idt){$script[] = "those_$doctrine_all.forEach(function(v,k){v.style.display='';});";}
                          else if(!is_null($doctrine_id)) { $script[] = "__t_$doctrine_id.style.display='';"; }
                $script[] = "}}wdtp.addListener(e);e(wdtp);";
              }

              /**
               * --------------------------------------------------------------------------------------------
               * @visibility large screen  
               * @main media size screen 1920 >  
               * -------------------------------------------------------------------------------------------- 
               * This will run when you set false which means to hide in large screen screen
               * 
               * @Defined : large screen
               * @since: v1.0 doctrine
               * @since: v2.0 wine
               * DT: 11.16.2023 
               */
              if(!$v_xl_screen_id) {
                $script[] = "var wxls=window.matchMedia('(min-width:".$xl_screen_id."px)'); ";
                $script[] = "function e(e){if(e.matches){";
                           if($doctrine_idt) { $script[] = "those_$doctrine_all.forEach(function(v,k){v.style.display='none';});";}
                           else if(!is_null($doctrine_id))  { $script[] = "__t_$doctrine_id.style.display='none';"; }
                $script[] = "}else{";
                           if($doctrine_idt){ $script[] = "those_$doctrine_all.forEach(function(v,k){v.style.display='';});";}
                           else if(!is_null($doctrine_id)) { $script[] = "__t_$doctrine_id.style.display='';"; }
                $script[] = "}}wxls.addListener(e);e(wxls);";
              }

             return $script;
             
          }
        ]
      ],[classes=>'app-response']);

      return $this;    
   
    }

     protected function wine_action_layout() : string {
     
      return $this->content_object . $this->screen_object;

     } 

    /**
     * @method doctrine please and try ?  
     * Defined : check condition at doctrine layout
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.19.2023 **/   
     private function wine_doctrine_magic_content( ...$wine_result ) : array {

      for ($please = 0; $please < count($wine_result[0]); $please++) {

        foreach ($wine_result[$please]?? [] as $value) {

          if(is_object($value[0] ?? false) || class_exists($value[0] ?? false)) {
            $wine[] = $this->optimized_html(
                __,
                null,
                $this->value(
                $value[0] ?? '',
                $value[1] ?? false,
             ...$value[2]?? []
            )
          );

        } else {
         $wine[] = $this->optimized_html(
            __,
            null,
            $this->wine_callable_hook(
              $value[0] ?? '',
          ...$value[1] ?? []
            )
          );
         }
       }
      }

    return (array) $wine;

  }

    /**
     * @method is_defined client key ?  
     * Defined : check attribute doctrine 
     * @since: doctrine v1.0
     * @since: wine 2.0
     * DT: 11.12.2023 **/    
    protected function is_defined( array $keys = [], array ...$wine_layout ) {

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
   
   protected function wine_get_value($obj, $prefix, $value, $states = 0, $not = false) : string {

    $p = $prefix;
    if($not === true) {
      return wine_valid_id(null,$value);
    } else {

      $wine_valid_hook = '';

      if($states === 0) { $wine_valid_hook = $prefix.wine_valid_id(null,$value);
      } else if($states === 1)  { $wine_valid_hook = $prefix.wine_valid_id($prefix,$value);
      } else if($states === 2)  { $wine_valid_hook = $prefix.wine_valid_id($prefix,$p.$value);
      } else if($states === 3)  { $wine_valid_hook = $prefix.wine_valid_id($prefix,$p.$p.$value);
      } else if($states === 4)  { $wine_valid_hook = $prefix.wine_valid_id($prefix,$p.$p.$p.$value);
      } else if($states === 5)  { $wine_valid_hook = $prefix.wine_valid_id($prefix,$p.$p.$p.$p.$value);
      } else if($states === 6)  { $wine_valid_hook = $prefix.wine_valid_id($prefix,$p.$p.$p.$p.$p.$value);
      } else if($states === 7)  { $wine_valid_hook = $prefix.wine_valid_id($prefix,$p.$p.$p.$p.$p.$p.$value);
      } else if($states === 8)  { $wine_valid_hook = $prefix.wine_valid_id($prefix,$p.$p.$p.$p.$p.$p.$p.$value);
      } else if($states === 9)  { $wine_valid_hook = $prefix.wine_valid_id($prefix,$p.$p.$p.$p.$p.$p.$p.$p.$value);
      } else if($states === 10) { $wine_valid_hook = $prefix.wine_valid_id($prefix,$p.$p.$p.$p.$p.$p.$p.$p.$p.$value);}
 
      if($obj) {
        if(method_exists($obj,$wine_valid_hook)) {
          $value=magic($obj,$wine_valid_hook,$value);
        }
      }

     return (string) $value;

    } 
   
   }
    

 }