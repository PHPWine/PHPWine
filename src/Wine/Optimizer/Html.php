<?php 

  namespace PHPWineVanillaFlavour\Wine\Optimizer;
  
/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour v1.4.0.0 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.4.0.0 free software: you can redistribute it and/or modify.
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
 * @category   PHPLibrary PHPWine\VanillaFlavour
 * @package    PHPHtml-Optimizer | CodeDesigner/Enhancer | Advance Form Builder | Handling Form Validation | Form Validation v2 | BASIC-Authentication | HtmlMinifier
 *            
 *            
 * @author    Leinner Zednanref <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/nielsofficeofficial/PHPWine
 * @link      https://github.com/nielsofficeofficial/PHPWine/blob/PHPWine_Vanilla_Flavour/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   v1.4.0.0
 * @since     05.16.2022
 *
 */

class Html
{

/**
  * @var @property Array of data
  * defined html names
  * minify optimized html attribute
  *
  * @var @PRIMARY_VARIABLE
  * @var @SECONDAY_VARIABLE
  * @var @LIST_VARIABLE
  * @var @FORMAT_VARIABLE
  * @var @INLINE_VARIABLE
  * @var @STRUCTURE_VARIABLE
  * @var @BREAKTAG_ARRAY
  *
  **/

    protected $htm    = [

     'h1'
    ,'h2'
    ,'h3'
    ,'h4'
    ,'h5'
    ,'h6'
    ,'div'
    ,'p'
    ,'button'
    ,'a'
    ,'iframe'
    ,'main'
    ,'nav'
    ,'select'
    ,'form'
    ,'picture'
    ,'section'
    ,'textarea'
    ,'footer'
    ,'script'
    ,'style'

];

    /**
      * @var __PHPHO_PROP__
      * @property @SECONDARY_VARIABLE
      * defined arrays of data html
      **/
    protected $htm_s  = [

   'audio'
  ,'video'
  ,'address'
  ,'colgroup'
  ,'bdi'
  ,'bdo'
  ,'blockquote'
  ,'caption'
  ,'label'
  ,'datalist'
  ,'details'
  ,'summary'
  ,'dialog'
  ,'option'

];

    /**
      * @var
      * @property @SUPPORT_VARIABLE
      * defined arrays of data html
      **/
    protected $htm_ss = [

  'figure'
  ,'figcaption'
  ,'meter'
  ,'object'
  ,'optgroup'
  ,'output'
  ,'progress'
  ,'svg'
  ,'template'
  ,'time'
  ,'var'

];

    /**
      * @var
      * @property @LIST_VARIABLE
      * defined arrays of data html
      **/
    protected $htm_t  = [

   'ul'
  ,'ol'
  ,'li'
  ,'table'
  ,'tr'
  ,'td'
  ,'th'
  ,'legend'
  ,'fieldset'
  ,'tbody'
  ,'tfoot'
  ,'thead'

];

    /**
      * @var
      * @property @FORMAT_VARIABLE
      * defined arrays of data html
      **/
    protected $htm_f  = [

   'span'
  ,'em'
  ,'b'
  ,'i'
  ,'small'
  ,'strike'
  ,'marquee'
  ,'center'
  ,'code'
  ,'abbr'
  ,'map'
  ,'canvas'
  ,'cite'
  ,'data'
  ,'dl'
  ,'dt'
  ,'dd'
  ,'dfn'
  ,'ins'

];

    /**
      * @var
      * @property @FORMAT_VARIABLE
      * defined arrays of data html
      **/
    protected $htm_fc = [

   'del'
  ,'kbd'
  ,'mark'
  ,'pre'
  ,'rt'
  ,'rp'
  ,'ruby'
  ,'s'
  ,'samp'
  ,'strong'
  ,'sub'
  ,'sup'
  ,'wbr'
  ,'q'

];

    /**
      * @var
      * @property @INLINE_VARIABLE  (NO x HTML TAG)
      * defined arrays of data html
      **/
    protected $htm_L  = [

   'source'
  ,'track'
  ,'circle'
  ,'param'
  ,'input'
  ,'meta'
  ,'link'
  ,'img'
  ,'embed'
  ,'col'
  ,'base'
  ,'area'
  ,'DOCTYPE html'

];

    /**
      * @var
      * @property @STRUCTURE_VARIABLE  (NO x HTML TAG)
      * defined arrays of data html
      **/
    protected $htm_st = [

   'head'
  ,'title'
  ,'body'
  ,'html'

  ];

    /**
      * @var
      * @property @BREAKS_VARIABLE  (NO x HTML TAG)
      * defined arrays of data html
      **/
    protected $hBreak = [

    "\n"
   ,"br"
   ,"hr"

  ];

    private bool $callable = true;

    /**
      * @var @property @static CONST | OPTIMIZER PROP
      * @since 11.05.2020
      * defined Assigned Image Extenstion as ._RTF
      **/
    const __OPTI_PROP__ = __DIR__ . '/prop.php';

    /**
      * @var @property @static CONST | PHPHtml-OPTIMIZER PROP
      * @since 11.05.2020
      * defined Assigned Image Extenstion as ._RTF
      **/
    const __PHPHO_PROP__ =  __DIR__ . '/../../prop.php';
  
    /**
      * @var @property Array of data
      * defined CONST ARRAY EXNTION FILES
      *
      * @var @__getAssEXTENSION__
      *
      **/

    /**
      * @var
      * @property ARRAY_KEY_CHILD
      * defined array key to CHILD Enhancer/Optimizer quick child
      * @since v1.2.0.0
      * @since 02.02.2022
      **/
    const CHILD_MANDATORY_KEY = 'CHILD';

    /**
      * @var
      * @property ARRAY_KEY_ATTR
      * defined array key to CHILD Enhancer/Optimizer quick child
      * @since v1.2.0.0
      * @since 02.02.2022
      **/
    const ATTR_MANDATORY_KEY  = 'ATTR';

    /**
      * @var
      * @property ARRAY_KEY_INNER
      * defined array key to CHILD Enhancer/Optimizer quick child
      * @since v1.2.0.0
      * @since 02.02.2022
      **/
    const INNER_MANDATORY_KEY = 'INNER';

    /**
      * @var
      * @property ARRAY_KEY_VALUE
      * defined array key to CHILD Enhancer/Optimizer quick child
      * @since v1.2.0.0
      * @since 02.02.2022
      **/
    const VALUE_MANDATORY_KEY = 'VALUE';

    /**
      * @var
      * @property ARRAY_KEY_VALUE
      * defined array key to CHILD Enhancer/Optimizer quick child
      * @since v1.2.0.0
      * @since 02.02.2022
      **/
    const PARENT_MANDATORY_KEY = 'PARENT';

    /**
      * @var
      * @property @html_extend  (register_new_html_syntax)
      * defined arrays of data html
      **/
    protected $hextend = [];

    /**
     *
     * @method private function
     * @package @private Method Defined setPath dependency
     *
     **/
    private function cpx_ixb6_proprty_get_path($path)
    {
        return $this->$path = $path;
    }

    /**
     *
     * @method protected function noHTML
     * @ @protected Method Defined HTML FOUNDATION _getBREAK
     *
     **/
    protected function _getBREAK()
    {

  # SET_RETURN_protected_PROPERTY_GET_VALUE_ARRAY_ZERO
        /**
          *
          * @var $hBreak
          * @var protected property array()
          * @method ""
          *
          **/
    
        return  $this->doMinified($this->hBreak[0]);
    }

    /**
     *
     * @method protected function noHTML
     * @ @protected Method Defined HTML FOUNDATION _getBREAK
     *
     **/
    protected function wine_display_errors()
    {

      # SET_RETURN_protected_PROPERTY_GET_VALUE_ARRAY_ZERO
        /**
          *
          * @var $hBreak
          * @var protected property array()
          * @method ""
          *
          **/
       if (    defined('PHPWINE_DEBUG_ERRORS') == true 
            && PHPWINE_DEBUG_ERRORS !== false ) : return '' ; 
             else                               : return exit();
      endif;
        
    }


    /**
     *
     * @method protected function noHTML
     * @ @protected Method Defined HTML FOUNDATION _doBREAK
     *
     **/
    protected function _doBREAK()
    {

  # SET_RETURN_protected_PROPERTY_GET_VALUE_ARRAY_ONE
        /**
          *
          * @var $hBreak
          * @var protected property array()
          * @method ""
          *
          **/

        return   $this->hBreak[1] ;
    }

    /**
     *
     * @method protected function noHTML
     * @ @protected Method Defined HTML FOUNDATION _makeLine
     *
     **/
    protected function _makeLine()
    {

  # SET_RETURN_protected_PROPERTY_GET_VALUE_ARRAY_TWO
        /**
          *
          * @var $hBreak
          * @var protected property array()
          * @method ""
          *
          **/
   
        return  $this->hBreak[2] ;
    }

    /**
     *
     * @method protected function noHTML
     * @ @protected Method Defined HTML FOUNDATION _getSQUOTE
     *
     **/
    protected function _getSQUOTE()
    {

  /**
    *
    * @var protected property \
    * @method _setSQ()
    *
    **/
        return $this->_setSQ();
    }
    protected function _setSQ()
    {
        /**
          *
          * @var protected property $sq
          *
          **/
        return $this->sq = '\'';
    }

    /**
     *
     * @method protected function noHTML
     * @ @protected Method Defined HTML FOUNDATION _getDQUOTE
     *
     **/
    protected function _getDQUOTE()
    {

  /**
    *
    * @var protected property \
    * @method _setDQ()
    *
    **/
        return $this->_setDQ();
    }
    protected function _setDQ()
    {
  
  /**
    *
    * @var protected property $dq
    *
    **/
        return $this->dq = "\"";
    }

    /**
     *
     * @method protected function noHTML
     * @ @protected Method Defined HTML FOUNDATION _getxTAG
     *
     **/
    protected function _getxTAG()
    {

  /**
    *
    * @var protected property >
    * @method _setENDGATE()
    *
    **/
        return $this->_setENDGATE();
    }
    protected function _setENDGATE()
    {

  /**
    *
    * @var protected property $lt
    *
    **/
        return $this->lt = ">";
    }

    /**
     *
     * @method protected function noHTML
     * @ @protected Method Defined HTML FOUNDATION _get_TAG
     *
     **/
    protected function _get_TAG()
    {

  /**
    *
    * @var protected property >
    * @method _setGATE
    *
    **/
        return $this->_setGATE();
    }
    protected function _setGATE()
    {
  
  /**
    *
    * @var protected property $gt
    *
    **/
        return $this->gt = "<";
    }

    /**
     *
     * @method protected function noHTML
     * @ @protected Method Defined HTML FOUNDATION _getES
     *
     **/
    protected function _getES()
    {

  /**
    *
    * @var protected property =
    * @method  _setES
    *
    **/
        return $this->_setES();
    }
    protected function _setES()
    {

  /**
    *
    * @var protected property $es
    *
    **/
        return $this->es = "=";
    }

    /**
     *
     * @method protected function noHTML
     * @ @protected Method Defined HTML FOUNDATION _getENDS
     *
     **/
    protected function _getENDS()
    {

  /**
    *
    * @var protected property /
    * @method  _setES
    *
    **/
        return $this->_setENDS();
    }
    protected function _setENDS()
    {

  /**
    *
    * @var protected property $ends
    *
    **/
        return $this->ends = "/";
    }

    /**
     *
     * @method protected function noHTML
     * @ @protected Method Defined HTML FOUNDATION _tagSYMBOL
     *
     **/
    protected function _tagSYMBOL()
    {

  /**
    *
    * @var protected property !
    * @method  _set_exSYMBOL()
    *
    **/
        return $this->_set_exSYMBOL();
    }
    protected function _set_exSYMBOL()
    {

  /**
    *
    * @var protected property $exSymbol
    *
    **/
        return $this->exSymbol = "!";
    }

    /**
     *
     * @method protected function noHTML
     * @ @protected Method Defined HTML FOUNDATION _getCOMEND
     *
     **/
    protected function _getCOMEND()
    {

  /**
    *
    * @var protected property -->
    * @method  _setCOMEND
    *
    **/
        return $this->_setCOMEND();
    }
    protected function _setCOMEND()
    {

  /**
    *
    * @var protected property $comEND
    *
    **/
        return $this->comEND = "-->";
    }

    /**
     *
     * @method protected function noHTML
     * @ @protected Method Defined HTML FOUNDATION _getTRING
     *
     **/
    protected function _getTRING($str)
    {

  /**
    *
    * @method  _setSTRING
    *
    **/
        return $this->_setSTRING($str);
    }
    protected function _setSTRING($str)
    {

  /**
    *
    * @var protected property $str
    *
    **/
        return $this->str = $str;
    }

    /**
     *
     * @method protected function noHTML
     * @ @protected Method Defined HTML FOUNDATION _tagSPACER
     *
     **/
    protected function _tagSPACER()
    {

  /**
    *
    * @method  _set_tagSPACER
    *
    **/
        return $this->_set_tagSPACER();
    }
    protected function _set_tagSPACER()
    {

  /**
    *
    * @var protected property $sHTML
    *
    **/
        return $this->sHTML = " ";
    }

    /**
     *
     * @method protected function noHTML
     * @ @protected Method Defined HTML FOUNDATION _getCOMBEGIN
     *
     **/
    protected function _getCOMBEGIN()
    {

  /**
    *
    * @method  _set_tagSPACER
    *
    **/
        return $this->_setCOMBEGIN();
    }
    protected function _setCOMBEGIN()
    {

  /**
    *
    * @var protected property $sHTML
    *
    **/
        return $this->comBEGIN = $this->_get_TAG().$this->_tagSYMBOL()."--";
    }


    /**
      * @method _construct
      * @property @html_extend  load function file
      * defined arrays of data html
      **/
    public function __construct()
    {

/**
  *
  * @method public function cpe_workflow_get_saver load function
  * Defined as require files PHP AUTH
  * @since 18.11.2020
  *
  **/
        // $this->cpe_workflow_get_saver(__GET_PHPAUTH__);

        /**
        * @since Enhancer property 04.11.2020
        **/
        require_once self::__OPTI_PROP__;

        /**
        * @since property file 04.11.2020
        **/
        require_once self::__PHPHO_PROP__;
    }
 
    public function TITLE(
        string        $id      =  null,
        array|string  $value   =  null,
        array|string  $attr    =  null,
        string        $class   =  null,
        string        $label   =  null,
        string        $assoc   =  null
    ) {
        return $this->is_true_assoc_element_inline(
            'STRUCTURE',
            1,
            $value,
            $attr,
            $id,
            $class,
            $label,
            $assoc
        );
    }


    /**
      *
      * @method public function add line html as noHTML
      * Defined as print a "String" line tag no string quotes
      * Neat and clean noHTML
      *
      **/
    public function PERFORM(
        $str    = null,
        $assoc  = null
    ) {
        return $this->is_true_set_string($str, $assoc);
    }

 
    /**
     *
     * Defined GET CHILD PRINT OPTIMIER ARRAY KEYS FOR | CHILD | ATTR | VALUE | INNER
     * @since 02.03.2022
     * @since v1.2.0.0
     *
    **/
    private function get_value_child_optimizer(array|string|callable  $value) : array|string
    {

       // check if the nethod is callable
        $validate_request_api_vanilla_wine = function (callable|string $data) : array {
            if (is_callable($data)) {
                return $data(true);
            }
        };

        // PREPARED EMPTY ARRAY
        $next_child = [];

        # CHECK IF THE CHILD KEY IS EXIST IN ARRAY THE IF TRUE
        # PRINT THE CHILD ARRAY
        if (is_array($value) && $this->check_key_mandatory_array(SELF::CHILD_MANDATORY_KEY, $value)) {
     
           # check if the child element array is not string and not empty then return error handler
            $this->trace_element_child_array_errors(
                $value[SELF::CHILD_MANDATORY_KEY],
                $value[SELF::CHILD_MANDATORY_KEY],
                $value
            );


            # check if the child element array is not string and not empty then return error handler
            $this->trace_element_child_array_errors(
                $value[SELF::CHILD_MANDATORY_KEY][0],
                $value[SELF::CHILD_MANDATORY_KEY][0],
                $value
            );

            # IF THE KEY REQUIRE IS EXIST THEN SELECT THAT KET FOR THE ASSOCIATED OF ARRAY OF DATAS
            # THEN LOOP THE REQUEST DATA ELEMNT HTML
            if ($this->check_key_mandatory_array(SELF::CHILD_MANDATORY_KEY, $value)) :

     # FOR EACH CHILD VALUE THE LOOP AND RETURN THE DATA
     foreach ($value[SELF::CHILD_MANDATORY_KEY] as $key => $values) {

      // If the elemt set as elem_sort AND not callable
         if (isset($values[0]) && $values[0] === 'elem_sort') {
             print "Helper: Array Child Element must be type of callable ex. [ 'elem_sort' => function() { ...  } ] ";
             $this->trace_element_child_array_errors(
                 $values[0],
                 $values[0],
                 $values
             );
         }
      
         if ((isset($values[0])) ? (($values[0] === 'elem_sort') ? $values[0] : '') :  $get_wine = $validate_request_api_vanilla_wine($values['elem_sort'])) {
             for ($i = 0; $i < count($get_wine); $i++) {
               
                 // if the child from return value is empty
                 // return [ [ ] ]
                 // must be return [ ['p'] ]
                 if (isset($get_wine[0])) :

                $this->trace_element_child_array_errors(
                    $get_wine[0],
                    $get_wine[0],
                    $get_wine
                );
               
                 endif;
  
                 $next_child[] =  $this->_setGATE() . strtolower($get_wine[ $i ][0]) . '' ;

                 if ($this->check_key_mandatory_array('ATTR', $get_wine[$i])) {
                     if (isset($get_wine[$i]['ATTR'])) :
                    # check if the child element array is not string and not empty then return error handler
                    (!is_array($get_wine[$i]['ATTR'])) ? $this->errors_array_handler($get_wine) . $this->wine_display_errors() : '';
                     endif;

                     # PROCESSING OF LOOPING
                     foreach ($get_wine[$i]['ATTR'] as $attr => $val) {
                         $next_child[] = $this->_set_tagSPACER() . $attr . $this->_setES() .  $this->_getDQUOTE() . $val .  $this->_getDQUOTE();
                     }
                 }
            
                 # check if the child element array is not string and not empty then return error handler
                 if (isset($get_wine[$i][SELF::VALUE_MANDATORY_KEY])) {
                     $this->trace_element_child_array_errors_isset($get_wine[$i][SELF::VALUE_MANDATORY_KEY], $get_wine[$i]);
                 }

                 # check if the child element array is not string and not empty then return error handler
                 if (isset($get_wine[$i][SELF::INNER_MANDATORY_KEY])) {
                     $this->trace_element_child_array_errors_isset($get_wine[$i][SELF::INNER_MANDATORY_KEY], $get_wine[$i]);
                 }
            
                 # check if the child element array is not string and not empty then return error handler
                 if (isset($get_wine[$i][SELF::INNER_MANDATORY_KEY][0])) {
                     $this->trace_element_child_array_errors_isset($get_wine[$i][SELF::INNER_MANDATORY_KEY][0], $get_wine[$i]);
                 }
          
                 # check if the child element array is not string and not empty then return error handler
                 if (isset($get_wine[$i][SELF::INNER_MANDATORY_KEY][0])) {
                     $this->trace_element_child_array_errors_isset($get_wine[$i][SELF::INNER_MANDATORY_KEY][0], $get_wine[$i]);
                 }

                 // End of elem_sort array validation child elements
                 $next_child[] = $this->_setENDGATE();

                 $elemInlineNon_wClosingTag =  (in_array(strtolower($get_wine[ $i ][0]), $this->htm_L)) ? '' : $this->_setGATE().$this->_setENDS() . strtolower($get_wine[ $i ][0])  . $this-> _setENDGATE() . $this->_getBREAK();
            
                 $next_child[] = $this->get_values_next_child(SELF::VALUE_MANDATORY_KEY, $get_wine[ $i ]);
                 $next_child[] = $this->get_values_next_child_inner(SELF::INNER_MANDATORY_KEY, $get_wine[ $i ]);
                 $next_child[] = (isset($elemInlineNon_wClosingTag))? $elemInlineNon_wClosingTag : '';

             } // end of elem_sort for loop !

         } else {
         
             // if elem_sort return [ empty ]
             if (!isset($values[0])) :

              print "Helper: cannot be empty must be return array child element
              <br /> ex:
              <br /> ['elem_sort' => function() {
              <br />   
              <br />   return [
              <br />     // element goes here ... 
              <br />    ];
              <br />    
              <br /> }]
              " .
              $this->trace_element_child_array_errors(
                  isset($values[0]),
                  isset($values[0]),
                  $values
              );
       
             endif;

             $next_child[] = $this->_setGATE() . strtolower($values[0]) . '';
       
             # CHECK IF THE ATTR IS NOT EMPTY AND IF IT IS ASSOCIATED OF ARRAY ?
             # THEN SINCE ATTR IS TYPE OF MASTER KEY THEN LOOP IT AS CUSTOM ATTR HTML ELEM TAGS
             if ($this->check_key_mandatory_array(SELF::ATTR_MANDATORY_KEY, $values)) {
                 if (isset($value[SELF::CHILD_MANDATORY_KEY][0][SELF::ATTR_MANDATORY_KEY])) :
                   # check if the child element array is not string and not empty then return error handler
                  (!is_array($value[SELF::CHILD_MANDATORY_KEY][0][SELF::ATTR_MANDATORY_KEY])) ? $this->errors_array_handler($value) . $this->wine_display_errors() : '';
                 endif;
         
                 # PROCESSING OF LOOPING
                 foreach ($values[SELF::ATTR_MANDATORY_KEY] as $attr => $val) {
                     $next_child[] = $this->_set_tagSPACER() . $attr . $this->_setES() .  $this->_getDQUOTE() . $val .  $this->_getDQUOTE();
                 }
             }

             # check if the child element array is not string and not empty then return error handler
             if (isset($value[SELF::CHILD_MANDATORY_KEY][0][SELF::VALUE_MANDATORY_KEY])) {
                 $this->trace_element_child_array_errors_isset($value[SELF::CHILD_MANDATORY_KEY][0][SELF::VALUE_MANDATORY_KEY], $value);
             }

             # check if the child element array is not string and not empty then return error handler
             if (isset($value[SELF::CHILD_MANDATORY_KEY][0][SELF::INNER_MANDATORY_KEY])) {
                 $this->trace_element_child_array_errors_isset($value[SELF::CHILD_MANDATORY_KEY][0][SELF::INNER_MANDATORY_KEY], $value);
             }
      
             # check if the child element array is not string and not empty then return error handler
             if (isset($value[SELF::CHILD_MANDATORY_KEY][0][SELF::INNER_MANDATORY_KEY])) {
                 $this->trace_element_child_array_errors_isset($value[SELF::CHILD_MANDATORY_KEY][0][SELF::INNER_MANDATORY_KEY][0], $value);
             }
     
             # check if the child element array is not string and not empty then return error handler
             if (isset($value[SELF::CHILD_MANDATORY_KEY][0][SELF::INNER_MANDATORY_KEY])) {
                 $this->trace_element_child_array_errors_isset($value[SELF::CHILD_MANDATORY_KEY][0][SELF::INNER_MANDATORY_KEY][0], $value);
             }
     
             # SET UP THE NEXT CHILD HTML ELEMENTS # GET THE VALUE NEXT CHILD
             # GET THE NEXT CHILD INNER            # PRINT THE ATTRIBUITE ELEMEN TAG
       
             $next_child[] = $this->_setENDGATE();

             $elemInlineNon_wClosingTag =  (in_array(strtolower($values[0]), $this->htm_L)) ? '' : $this->_setGATE().$this->_setENDS() . strtolower($values[0])  . $this-> _setENDGATE() . $this->_getBREAK();

             $next_child[] =  $this->get_values_next_child(SELF::VALUE_MANDATORY_KEY, $values);
             $next_child[] = $this->get_values_next_child_inner(SELF::INNER_MANDATORY_KEY, $values);
             $next_child[] = (isset($elemInlineNon_wClosingTag))? $elemInlineNon_wClosingTag : '';
         }
     }
     
            // COOKED THE INGREDIENTS
            return implode("", $next_child);
  
            endif;
        }
    }

    /**
      *
      * @method private function noHTML
      * @ @private  Method Defined  if TRUE ELEMENT TAG noHTML
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    private function is_true_assoc_element_inline(array|string  $elem_val = null, array|string  $elem_key = null, array|string  $value = null, array|string  $attr = null, string $id = null, string $class = null, string $label = null, string $assoc = null)
    {
  
  # CHECK IF THE VALUE IS ARRAY AND MANDATORY KEY IS EXIST THEN CHILD KEY SET
        if (is_array($value) && $this->check_key_mandatory_array(SELF::CHILD_MANDATORY_KEY, $value)) {
            # IF PLAN OR CHILD IS TRUE ?
            # EXECUTE THE PLAN BASE ON ARRAY KEY MANDATORY
     
            $value = $this->get_value_child_optimizer($value);
        }
  
        # IF THAT IS JUST AN ARRRAY OF DATA THEN
        elseif (is_array($value)) {
  
         // EXECUTE THE PLAN
            $this->errors_array_handler($value);
            $this->wine_display_errors();
        }
  
        # ELSE VALUE RETURN AS VALUE AS IT IS SET AS STRING !
        else {
   
           # OPTIMIZED THE VALUE ON THE PLAN !
            $value = $value;
        }

        /*
         * PHPWine @since version 1.1.2
         * @since 11.06.2021
        */
        $attr = (is_array($attr)) ? $attr : $attr;

        # CHECK_IF_THE_ELEMENT_REPLACE_TO_BE_ASSOCIATED
        # SET_TO_NULL_VALUE_BY_THE_DEFAULT
        if (
      
      /*
       * PHPWine @since version 1.1.2
       * @since 11.06.2021
      */
       # CHECK_ATTRIBUTES_IF_NOT_ARRAY_THEN_RETURN_APPRPRIATE
       # IF_THE_ATTRTIBUTE_SET_AS_FUNCTION_ASSOCIATED_THEN_RETURN_APPROPRIATE
       # DEFINED_ATTRIBUTE_AS_NULL

       (!is_array($attr)  || !is_null($attr) || !empty($attr)) &&  ($attr  === FUNC_ASSOC || $attr  === CLASS_ASSOC || $attr  === METHOD_ASSOC)
      
      ) :

        # RETURN_ELEMENT_WHERE_ATTRIBITE_IS_SET_AS_NULL
        return $this->assoc_element_inline($elem_val, $elem_key, $value, null, $id, $class, $label);

        /*
         * PHPWine @since version 1.1.2
         * @since 11.06.2021
        */
        # CHECK_ID_IF_NOT_ANY_STRING_THEN_RETURN_APPRPRIATE
        # IF_THE_ID_SET_AS_FUNCTION_ASSOCIATED_THEN_RETURN_APPROPRIATE
        # DEFINED_ID_AS_NULL

        elseif (
        
        $id === FUNC_ASSOC || $id    === CLASS_ASSOC || $id    === METHOD_ASSOC
        
        ) :
    
        # RETURN_ELEMENT_WHERE_ID_IS_SET_AS_NULL
        return $this->assoc_element_inline($elem_val, $elem_key, $value, $attr, null, $class, $label);

        /*
         * PHPWine @since version 1.1.2
         * @since 11.06.2021
        */
        # CHECK_CLASS_IF_NOT_ANY_STRING_THEN_RETURN_APPRPRIATE
        # IF_THE_CLASS_SET_AS_FUNCTION_ASSOCIATED_THEN_RETURN_APPROPRIATE
        # DEFINED_CLASS_AS_NULL
        elseif (
         
        $class === FUNC_ASSOC || $class === CLASS_ASSOC || $class === METHOD_ASSOC
        
        ) :

        # RETURN_ELEMENT_WHERE_CLASS_IS_SET_AS_NULL
        return $this->assoc_element_inline($elem_val, $elem_key, $value, $attr, $id, null, $label);

        /*
         * PHPWine @since version 1.1.2
         * @since 11.06.2021
        */
        # CHECK_LABEL_IF_NOT_ANY_STRING_THEN_RETURN_APPRPRIATE
        # IF_THE_LABEL_SET_AS_FUNCTION_ASSOCIATED_THEN_RETURN_APPROPRIATE
        # DEFINED_LABEL_AS_NULL

        elseif (
         
          $label === FUNC_ASSOC || $label === CLASS_ASSOC || $label === METHOD_ASSOC
          
       ) :
    
        # RETURN_ELEMENT_WHERE_LABEL_IS_SET_AS_NULL
        return $this->assoc_element_inline($elem_val, $elem_key, $value, $attr, $id, $class, null);

        # INLINE_OR_ANY_LABEL_REQUIRED
        # ELSEIF_ASSOCU_===_FUNC_ASSOC_||_CLASS_ASSOC_||_METHOD_ASSOC
        elseif (
    
    $assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC
    
  )  :

      
    /**
      * THEN_IF_IT_IS TRUE_RETURN!
      * @var  $elem_val, $elem_key, $value, $attr, $id, $class, $label
      * @method function assoc_element_inline()
      *
      **/
    return $this->assoc_element_inline($elem_val, $elem_key, $value, $attr, $id, $class, $label);

        # INLINE_OR_ANY_LABEL_REQUIRED
        # CHECK_IF_THE_PARAM_REQUIRED_IS_NOT_NULL
        # IF_IT_IS_NULL_RETURN_FLASE
        elseif (
    
        is_array($attr) && ($attr  !== FUNC_ASSOC || $attr  !== CLASS_ASSOC || $attr  !== METHOD_ASSOC)
  
       )   :
      
       # RETURN_INLINE_ELEMENT_NO_HTML_CLOSING_TAG
     /**
       *
       * @var $elem_val, $elem_key, $value, $attr, $id, $class, $label
       * @method function perform_assoc_element_inline()
       *
       **/
      $this->PERFORM($this->perform_assoc_element_inline($elem_val, $elem_key, $value, $attr, $id, $class, $label)); elseif (
     
      $assoc == false || $assoc == null || $assoc == 'DEFAULT'
      
      ) :
       
     # RETURN_INLINE_ELEMENT_NO_HTML_CLOSING_TAG
   /**
     *
     * @var $elem_val, $elem_key, $value, $attr, $id, $class, $label
     * @method function perform_assoc_element_inline()
     *
     **/
    $this->PERFORM($this->perform_assoc_element_inline($elem_val, $elem_key, $value, $attr, $id, $class, $label));
  
        endif;
    }

    /**
     * Defined  trace_element_child_array_errors ARRAY KEYS FOR | CHILD | ATTR | VALUE | INNER
     * @since 04.10.2022
     * @since v1.3.1.0
     *
    **/
    private function trace_element_child_array_errors(array|string $array_str = null, array|string $array_str_opt = null, array|string  $value = null) : void
    {
        (!is_array($array_str) || count($array_str_opt) == 0) ? $this->errors_array_handler($value) . $this->wine_display_errors() : '';
    }
 
    /**
     * Defined  trace_element_child_array_errors_isset ARRAY KEYS FOR | CHILD | ATTR | VALUE | INNER
     * @since 04.10.2022
     * @since v1.3.1.0
     *
    **/
    private function trace_element_child_array_errors_isset(array|string $array_str_opt = null, array|string  $value = null) : void
    {
        (is_string($array_str_opt)) ? $this->errors_array_handler($value) . $this->wine_display_errors() : '';
    }

    /**
      *
      * @method private function noHTML
      * @ @private  Method Defined  if TRUE ELEMENT TAG noHTML
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    private function perform_assoc_element_inline(array|string $elem_val = null, array|string  $elem_key = null, array|string  $value = null, array|string  $attr = null, string $id = null, string $class = null, string $label = null)
    {
   
    # IF_INLINE_ELEMENT_IS_EQUAL_TRUE_THE_RETURN_ECHO_STATIC_noHTML
        # RETURN_GET___HTML_METHOD_INCLUDED_
        /**
          *
          * @var | Defined var $elem_val, $elem_key, $attr, $id, $class
          * @method function get__HTML
          *
          **/
        $this->PERFORM($return_elementINLINE  = $this->get__HTML($elem_val, $elem_key, $attr, $id, $class));
   
        # WHEN_THE_LOOP_IS_TRUE_THEN
        # DO_CONTENT
        $this->PERFORM($return_elementINLINE  = (!empty($value) && $value !== null) ? $value : false);
   
        # IF_INLINE_ELEMENT_IS_EQUAL_TRUE_THE_RETURN_ECHO_STATIC_noHTML
        # RETURN_GET___HTML_METHOD_INCLUDED_
        /**
          *
          * @var | Defined var $elem_val, $elem_key, $label
          * @method function get_xHTML()
          *
          **/
        $this->PERFORM($this->get_xHTML($elem_val, $elem_key, $label));
    }

    /**
      *
      * @method private function noHTML
      * @ @private  Method Defined  if newELEMENT TRUE ELEMENT TAG noHTML
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    protected function assoc_element_inline(array|string $elem_val = null, array|string  $elem_key = null, array|string  $value = null, array|string  $attr = null, string $id = null, string $class = null, string $label = null)
    {
        if ($label == true && $label === 'MERGE') {
     
     # IF_INLINE_ELEMENT_IS_EQUAL_NEW_ELEMENT_AND_TRUE_THE_RETURN_ECHO_STATIC_noHTML
            # RETURN_GET___HTML_METHOD_INCLUDED_
            /**
              *
              * @var | Defined var $elem_val, $elem_key, $attr, $id, $class
              * @method function new_get__HTML();
              *
              **/
     
            return $return_elementINLINE = $this->new_get__HTML($elem_val, $elem_key, $attr, $id, $class);
        } elseif ($label == true && $label === 'MERGE_END') {
     
      # IF_INLINE_ELEMENT_IS_EQUAL_TRUE_THE_RETURN_ECHO_STATIC_noHTML
            # RETURN_GET___HTML_METHOD_INCLUDED_
            /**
              *
              * @var | Defined var $elem_val, $elem_key, $label
              * @method function new_get__HTML();
              *
              **/
            return $return_elementINLINE  = $this->new_get_xHTML($elem_val, $elem_key, $label);
        } else {
    
      # CHECK IF THE VALUE IS ARRAY AND MANDATORY KEY IS EXIST THEN CHILD KEY SET
            if (is_array($value) && $this->check_key_mandatory_array(SELF::CHILD_MANDATORY_KEY, $value)) {
                # IF PLAN OR CHILD IS TRUE ?
                # EXECUTE THE PLAN BASE ON ARRAY KEY MANDATORY
     
                $value = $this->get_value_child_optimizer($value);
            }
  
            # IF THAT IS JUST AN ARRRAY OF DATA THEN
            elseif (is_array($value)) {
  
    // EXECUTE THE PLAN
                $this->errors_array_handler($value);
                $this->wine_display_errors();
            }
   
            # ELSE VALUE RETURN AS VALUE AS IT IS SET AS STRING !
            else {
   
   # OPTIMIZED THE VALUE ON THE PLAN !
                $value = $value;
            }

            # IF_INLINE_ELEMENT_IS_EQUAL_NEW_ELEMENT_AND_TRUE_THE_RETURN_ECHO_STATIC_noHTML
            # RETURN_GET___HTML_METHOD_INCLUDED_
            /**
              *
              * @var | Defined var $elem_val, $elem_key, $attr, $id, $class
              * @method function new_get__HTML();
              *
              **/
            $return_elementINLINE   = $this->new_get__HTML($elem_val, $elem_key, $attr, $id, $class);
  
            # WHEN_THE_LOOP_IS_TRUE_THEN
            # DO_CONTENT
            $return_elementINLINE  .= (!empty($value) && $value !== null) ? $value : false ;
   
            # IF_INLINE_ELEMENT_IS_EQUAL_TRUE_THE_RETURN_ECHO_STATIC_noHTML
            # RETURN_GET___HTML_METHOD_INCLUDED_
            /**
              *
              * @var | Defined var $elem_val, $elem_key, $label
              * @method function new_get__HTML();
              *
              **/
            $return_elementINLINE  .= $this->new_get_xHTML($elem_val, $elem_key, $label);
  
            # get_ELEMENT_RETURN!
            return $return_elementINLINE;
        }
    }

    /**
      *
      * @method private function noHTML
      * @ @private Method Defined get__HTML
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    protected function get__HTML(array|string  $elem_val = null, array|string  $elem_key  = null, array|string  $attr  = null, string $id  = null, string $class  = null) : void
    {
       
      # RETURN_GET__HTML_CONTAINS_OFSET_ELEMENTS_SET_HTML_ATTR
        # SET___HTML_AS_PRINT_STATIC_HTML
        /**
          *
          * SET_FUNCTION-CONCAT_THEN_RETURN
          * @method function _setELEMENT()
          * @method function _setHTMLattr()
          *
          **/
        $this->PERFORM($get__HTML  = $this->_setELEMENT($elem_val, $elem_key));
        $this->PERFORM($get__HTML  = $this->_setHTMLattr($attr, $id, $class));
    }

    /**
      *
      * @method private function noHTML
      * @ @private Method Defined new_get__HTML
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    protected function new_get__HTML(array|string $elem_val = null, array|string $elem_key = null, array|string  $attr = null, string $id = null, string $class = null) : string
    {
  
      # RETURN_GET__HTML_CONTAINS_OFSET_ELEMENTS_SET_HTML_ATTR
        # SET___HTML_AS_RETURN_DYNAMIC_ASSOC_HTML
        /**
          *
          * SET_FUNCTION-CONCAT_THEN_RETURN
          * @method function _setELEMENT()
          * @method function new_setHTMLattr()
          *
          **/
        $get__HTML   = $this->_setELEMENT($elem_val, $elem_key);
        $get__HTML  .= $this->new_setHTMLattr($attr, $id, $class);
   
        return $get__HTML;
    }

    /**
      *
      * @method private function noHTML
      * @ @private Method Defined get_xHTML
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    protected function get_xHTML(array|string  $elem_val = null, array|string  $elem_key = null, string $label = null)
    {
   
   # SET_VALUE_IS_TRUE_ELEMENT
        # ASIGNED-TO_SET_VAR_ELEMENT
        $set             = $this->is_true_element_exist($elem_val);
   
        # DEFINE_ELEMENTS_AND_EMTHODS
        # ASSIGNED_GET___TAG_SET_GETENDS_RETURN-SET_ARRAY_KEY
        # EGT_x_HTML_ASSIGNED_BREAK_TAG
        $defined_htm     = $this->_get_TAG().$this->_getENDS()
                    
                       .$set[$elem_key]
                       .$this->_getxTAG()
                       .$this->_getBREAK();
                                      
        # CHECK_IF_LABEL_IS_TRUE_AFTER_NODE
        # IF_LABEL_IS_TRUE_THEN_RETURN_LABEL_AFTER_NODE
        # SET_COMMENTS_AS LABEL
        if ($label == true) {
            $defined_htm    .= $this->_getCOMBEGIN()." ".$label." "
                    
                       .$this->_getCOMEND()
                       .$this->_getBREAK();
        } else {

     # IF-IT_IS_FALSE_THEN
            # ELSE RETURN EMPTY_COMMENT
            $this->PERFORM("");
        }
        # IF_TRUE_EXECUTE_DEFINED
        $this->PERFORM($defined_htm);
    }

    /**
      *
      * @method private function noHTML
      * @ @private Method Defined new_get_xHTML
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    protected function new_get_xHTML(array|string $elem_val = null, array|string $elem_key = null, string $label = null) : string
    {
        $set               = $this->is_true_element_exist($elem_val);
   
        # SAMETHING_SET_AS_RETURN
        $defined_htm       = $this->_get_TAG().$this->_getENDS()

                       .$set[$elem_key]
                       .$this->_getxTAG()
                       .$this->_getBREAK();
                       

        # CHECK_IF_LABEL_IS_TRUE_AFTER_NODE
        # IF_LABEL_IS_TRUE_THEN_RETURN_LABEL_AFTER_NODE
        # SET_COMMENTS_AS LABEL
        if ($label == true) {
            $defined_htm      .= $this->_getCOMBEGIN()." ".$label." "
                       
                       .$this->_getCOMEND()
                       .$this->_getBREAK();
        }
   
        # IF_DEFINE_EXECUTRE_RETURN_AS_SET
        return $defined_htm;
    }

    /**
      *
      * @method private function noHTML
      * @ @private Method Defined  _setHTMLattr
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    protected function _setHTMLattr(array|string  $attr = null, string  $id=null, string $class=null) : void
    {

    # DEFINE_STATIC_SET_RETURN_TO_HTML
        # METHOD_SET_AS_PRINT
        /**
          *
          * SET_FUNCTION-CONCAT_THEN_RETURN
          * @method function _isJStrue()
          * @method function _getxTAG()
          *
          **/
        $this->PERFORM($this->_isJStrue($attr, $id, $class));

        if (defined('PHPWINE_BEAUTIFY') == true && PHPWINE_BEAUTIFY !== false) : $this->PERFORM($this->_getxTAG()); else                                                                     : $this->PERFORM($this->_getxTAG()  . $this->_getBREAK());
        endif;
    }

    /**
      *
      * @method private function noHTML
      * @ @private Method Defined  _setHTMLattr
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    protected function new_setHTMLattr(array|string  $attr = null, string  $id=null, string  $class=null) : string
    {
      
    # DEFINE_STATIC_SET_RETURN_TO_HTML
        # METHOD_sET_AS_RETURN
        /**
          *
          * SET_FUNCTION-CONCAT_THEN_RETURN
          * @method function new_isJStrue()
          * @method function _getxTAG()
          *
          **/
        $_setHTMLattr  = $this->new_isJStrue($attr, $id, $class);
        $_setHTMLattr .= $this->_getxTAG().$this->_getBREAK();

        return $_setHTMLattr;
    }

    /**
      *
      * @method private function noHTML
      * @ @private Method Defined  _setinLINEHTMLattr
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    protected function set_inline_tag_attr(array|string  $attr = null, string $id=null, string $class=null, string  $assoc=null) : string
    {
   
  # CHECK_IF_ASSOC_IS_NULL_OR_FLASE_DEFAULT
        # IF_ASSOC_IS_FALSE_THEN_SET_AS_PRINT_STATIC
        if ($assoc == false || $assoc == null || $assoc === 'DEFAULT') {
      
      # DEFINE_STATIC_SET_AS_PRINT
            /**
              *
              * SET_FUNCTION-CONCAT_THEN_RETURN
              * @method function _isJStrue()
              * @method function _set_tagSPACER()
              *
              **/
            $this->PERFORM($_setinLINEHTMLattr = $this->_isJStrue($attr, $id, $class));
            $this->PERFORM($_setinLINEHTMLattr = $this->_set_tagSPACER().$this->_setENDS().$this->_getxTAG().$this->_getBREAK());
        } /**
      *
      * SET_FUNCTION-CONCAT_THEN_RETURN
      * @method function isJStrue_assoc()
      * @method function _set_tagSPACER_setENDS_getxTAG_getBREAK
      *
      **/
        elseif ($assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC) {
    
      # ELSE_CHECK_IF_THE_ASSOC_IS_TRUE_OR_FUNC_ASSOC_OR_CLASS_ASSOC_METHOD_ASSOC
            # SET_AS_DYNAMIC_ASSOCIATED_WITH_METHOD_CLASS_FUNC_ASSOC
            $_setinLINEHTMLattr  = $this->isJStrue_assoc($attr, $id, $class, $assoc);
            $_setinLINEHTMLattr .= $this->_set_tagSPACER().$this->_setENDS().$this->_getxTAG().$this->_getBREAK();

            return $_setinLINEHTMLattr;
        }
    }

    /**
      *
      * @method private function noHTML
      * @ @private Method Defined  isJStrue_assoc
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    private function isJStrue_assoc(array|string  $attr = null, string $id = null, string $class = null, string $assoc = null)
    {

  # CHECKK_IF_JS-ASSOC_IS_TRUE_THE_RETURN_SET_AS_PRINT
        # IF_ASSOC_IS_FALSE_IF_IS_NULL_IF_IS_DEFAULT
        if ($assoc == false || $assoc == null || $assoc == 'DEFAULT') {
            # RETURN_DEFAULT_SET_PRINT_DO_EXECUTE
            /**
              *
              * SET_FUNCTION-CONCAT_THEN_RETURN
              * @method function new_isJStrue
              *
              **/
            $attr_false = $this->_isJStrue($attr, $id, $class);
            $this->PERFORM($attr_false);
        }
        # ELSE_IF_IT_IS_NOT_NULL_NOT_FALSE_NOT_DEFAULT_OR_IT_IS_SET_AS_TRUE_THEN
        # CHECK_IF_IT_IS_FUNCASSOC_CLASSASSOC_METHOD_ASSOC_THE_SET_RETURN
        /**
          *
          * SET_FUNCTION-CONCAT_THEN_RETURN
          * @method function new_isJStrue
          *
          **/
        elseif ($assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC) {
            return $this->new_isJStrue($attr, $id, $class);
        }
    }

    /**
      *
      * @method private function noHTML
      * @ @private Method Defined  _isJStrue
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    private function _isJStrue(array|string  $attr = null, string $id = null, string $class = null)
    {
  
  # SET_STATIC_PRINT_IF_THE_JS_IS_NOT_ASSOC_WITH_METHOD
        # CHECK_IF_PARAM_JS_HAVE_TRUE_THEN
        if ($attr == true) {
        
       # GET_ARRAY_OF_DATA_FROM_APPS_ATT
            /**
              *
              * SET_FUNCTION-CONCAT_THEN_RETURN
              * @method function apps_att
              *
              **/
            $apps_attributes = $this->apps_att($attr);
       
            # GET_DATA_OF_ASSOCIATED_OF_ARRAY_FOR_EACH_DATA_COMBINE
            # IF_THE_JS_RETURN_TRUE_THEN_LOOP_COMBINE_DATA
            foreach ($apps_attributes as $attr_name => $attr_value) {
         
         # SET_PRINT_DATA_STATIC_LOOPING
                $this->PERFORM($this->_tagSPACER().$attr_name
      
                      .$this->_getES()
                      .$this->_getDQUOTE()
      
                      .$attr_value
      
                      .$this->_getDQUOTE());
            }
        }
    
        # SET_JOIN_HTML_ATTRIBUTE_AT_THE_SAME_TIME
        /**
          *
          * SET_FUNCTION-CONCAT_THEN_RETURN
          * @method function html_attr
          *
          **/
        $this->PERFORM($html_attributes = $this->html_attr($id, $class));
    }

    /**
      *
      * @method private function noHTML
      * @ @private Method Defined  _isJStrue
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    private function new_isJStrue(array $attr = null, string $id = null, string $class = null)
    {
   
  # SET_EMPTY_ARRAY_OF_DATA_IF_DATA_IS_ASSOC
        # CHECK_DATA_IF_ASSOC_WITH_METHOD_AND_CLASS
        $htmlattr = [];
  
        # SET_STATIC_PRINT_IF_THE_JS_IS_NOT_ASSOC_WITH_METHOD
        # CHECK_IF_PARAM_JS_HAVE_TRUE_THEN
        if ($attr == true) {
            # GET_ARRAY_OF_DATA_FROM_APPS_ATT_COMBINE
            /**
              *
              * SET_FUNCTION_CONCAT_THEN_RETURN
              * @method function apps_att
              *
              **/
            $apps_attributes = $this->apps_att($attr);

            foreach ($apps_attributes as $attr_name => $attr_value) {
         
         # SET_RETUNR_DATA_EMPTY_ARRAY
                $htmlattr[] = $this->_tagSPACER().$attr_name
                      
                      .$this->_getES()
                      .$this->_getDQUOTE()
   
                      .$attr_value
                      
                      .$this->_getDQUOTE();
            }
        }

        # SET_JOIN_HTML_ATTRIBUTE_AT_THE_SAME_TIME
        /**
          *
          * SET_FUNCTION-CONCAT_THEN_RETURN
          * @method function new_html_attr
          *
          **/
        $html_attributes = $this->new_html_attr($id, $class);
    
        #THE_RETURN_DATA_OF_ARRAY_WITH_ASSOC-IN_CLASS_METHOD
        return implode('', $htmlattr).$html_attributes;
    }


    /**
      *
      * @method private function noHTML
      * @ @private Method Defined  _setELEMENT
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    protected function _setELEMENT(array|string $_variable = null, array|string  $set_tag = null) : array|string
    {
        # CHECK_ELEMENT_IF_IT_IS_TRUE
        # SET_RETURN_IF_TRUE
        /**
          *
          * SET_FUNCTION-CONCAT_THEN_RETURN
          * @method function is_true_element_exist
          * @method function _get_TAG
          *
          **/
        $set =  $this->is_true_element_exist($_variable);
        return  $this->_get_TAG().$set[$set_tag];
    }

    /**
      *
      * @method private function noHTML
      * @ @private Method Defined  apps_att
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    protected function apps_att(array $attr = null) : array
    {
    
    # COLLECT_DATA_ARRAY_ATTRIBUTE_CALL_BACK_FUNCTION
        # IF_CALL_BACK_IS_TRUE_THEN_SET_ARRAY_aSSOC
        $set_apps_names = $attr[0];
        $set_apps_value = $attr[1];
    
        /**
          *
          * SET_FUNCTION-CONCAT_THEN_RETURN
          * @PHP function array_combine
          *
          **/
        return $combineSet = array_combine($set_apps_names, $set_apps_value);
    }

    /**
      *
      * @method private function noHTML
      * @ @private Method Defined html_attr
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    private function html_attr(string $id=null, string $class=null)
    {
   
   # CHECK_HTML_ATTR_IF_ID_AND_CLASS_IF_TRUE_STATIC
        # IF_ID_SET_AS_TRUE_THEN_RETURN_ID
        # IF_CLASS_SET_AS_TRUE_THEN_RETURN_CLASS
        # IF_BOT_SET_AS_TRUE_THEN_RETURN_BOTH
        /**
          *
          * SET_FUNCTION-CONCAT_THEN_RETURN
          * @method function have_id_class
          *
          **/
        if ($id == true && $class == true) {
            $this->PERFORM($this->_tagSPACER().$this->have_id_class($id, $class));
        }

        /**
          *
          * SET_FUNCTION-CONCAT_THEN_RETURN
          * @method function haveId
          *
          **/
        elseif ($id == true  && $class == false) {
            $this->PERFORM($this->_tagSPACER().$this->haveId($id));
        }

        /**
          *
          * SET_FUNCTION-CONCAT_THEN_RETURN
          * @method function haveClass
          *
          **/
        elseif ($id == false && $class == true) {
            $this->PERFORM($this->_tagSPACER().$this->haveClass($class));
        }
  
        /**
          *
          * SET_FUNCTION-CONCAT_THEN_RETURN
          * @method function "" | EMPTY
          *
          **/
        else {
            return "";
        }
    }

    /**
      *
      * @method private function noHTML
      * @ @private Method Defined new_html_attr
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    private function new_html_attr(string $id=null, string $class=null) : string
    {
   
   # CHECK_HTML_ATTR_IF_ID_AND_CLASS_IF_TRUE_METHOD_ASSOC
        # IF_ID_SET_AS_TRUE_THEN_RETURN_ID
        # IF_CLASS_SET_AS_TRUE_THEN_RETURN_CLASS
        # IF_BOT_SET_AS_TRUE_THEN_RETURN_BOTH
        /**
          *
          * SET_FUNCTION-CONCAT_THEN_RETURN | METHOD_ASSOC
          * @method function have_id_class
          *
          **/
        if ($id == true && $class == true) {
            return  $this->_tagSPACER().$this->have_id_class($id, $class);
        }

        /**
          *
          * SET_FUNCTION-CONCAT_THEN_RETURN
          * @method function haveId | METHOD_ASSOC
          *
          **/
        elseif ($id == true  && $class == false) {
            return  $this->_tagSPACER().$this->haveId($id);
        }

        /**
          *
          * SET_FUNCTION-CONCAT_THEN_RETURN
          * @method function haveClass | METHOD_ASSOC
          *
          **/
        elseif ($id == false && $class == true) {
            return  $this->_tagSPACER().$this->haveClass($class);
        }
        /**
          *
          * SET_FUNCTION-CONCAT_THEN_RETURN
          * @method function "" | EMPTY
          *
          **/
        else {
            return "";
        }
    }

    /**
      *
      * @method private function noHTML
      * @ @private Method Defined is_true_element_exist
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    protected function is_true_element_exist(string $elements = null) : string|array
    {
        if ($elements == 'PRIMARY') {
            return  $this->htm;
        }

        /**
          *
          * @var elements
          * @method is_true_element_exist
          * RETURN NODE HTML _ noHTML TAG
          *
          **/
        elseif ($elements == 'SECONDARY') {
            return  $this->htm_s;
        }

        /**
          *
          * @var elements
          * @var $htm_ss
          * @method is_true_element_exist
          * RETURN NODE HTML _ noHTML TAG
          *
          **/
        elseif ($elements == 'SUPPORT') {
            return  $this->htm_ss;
        }

        /**
          *
          * @var elements
          * @var $htm_t
          * @method is_true_element_exist
          * RETURN NODE HTML _ noHTML TAG
          *
          **/
        elseif ($elements == 'LIST') {
            return  $this->htm_t;
        }

        /**
          *
          * @var elements
          * @var $htm_f
          * @method is_true_element_exist
          * RETURN NODE HTML _ noHTML TAG
          *
          **/
        elseif ($elements == 'FORMAT') {
            return  $this->htm_f;
        }

        /**
          *
          * @var elements
          * @var $htm_fc
          * @method is_true_element_exist
          * RETURN NODE HTML _ noHTML TAG
          *
          **/
        elseif ($elements == 'FORMATC') {
            return  $this->htm_fc;
        }

        /**
          *
          * @var elements
          * @var $htm_L
          * @method is_true_element_exist
          * RETURN NODE HTML _ noHTML TAG
          *
          **/

        elseif ($elements == 'INLINE') {
            return  $this->htm_L;
        }

        /**
          *
          * @var elements
          * @var $htm_st
          * @method is_true_element_exist
          * RETURN NODE HTML _ noHTML TAG
          *
          **/
        elseif ($elements == 'STRUCTURE') {
            return  $this->htm_st;
        }
    }

    /**
      *
      * @method private function noHTML
      * @ @private Method Defined haveClass
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    private function haveClass(string $class = null) : string
    {
        return  $gethtml_attr = "class".$this->_getES().$this->_getDQUOTE().$class.$this->_getDQUOTE()."";
    }

    /**
      *
      * @method private function noHTML
      * @ @private Method Defined haveId
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    private function haveId(string $id = null) : string
    {
        return  $gethtml_attr = "id".$this->_getES().$this->_getDQUOTE().$id.$this->_getDQUOTE()."";
    }

    /**
      *
      * @method private function noHTML
      * @ @private Method Defined have_id_class
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    private function have_id_class(string $id = null, string $class = null) : string
    {
  
  # IF_HAVE_CLASS_RETURN_VALUE_SET
        # CHECK_IF_BOTH_PARA_IS_TRUE
        $gethtml_attr   = "id".$this->_getES().$this->_getDQUOTE().$id.$this->_getDQUOTE().$this->_tagSPACER()."";
        $gethtml_attr  .= "class".$this->_getES().$this->_getDQUOTE().$class.$this->_getDQUOTE()."";

        return $gethtml_attr;
    }


    /**
      *
      * @method private function noHTML
      * @ @private Method Defined _isTrueLine_assoc
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    protected function _isTrueLine_assoc(string $assoc = null) : string
    {
        if ($assoc == null || $assoc == false || $assoc == 'DEFUALT') {

    # CHECK_IF_aSSOC_IS_NOT_TRUE_OR_IF_IT_IS_FALSE
            # SET_AS_PRINT_STATIC_HTML
            $this->PERFORM($this->_get_TAG().$this->_makeLine().$this->_tagSPACER().$this->_getENDS().$this->_getxTAG().$this->_getBREAK());
        }
    
        # ELSE_IF_THE_ASSOC_PARA_IS_TRUE_THEN_SET_RETURN
        elseif ($assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC) {
            # RETURN_METHOD_ASSOC
            return $this->_get_TAG().$this->_makeLine().$this->_tagSPACER().$this->_getENDS().$this->_getxTAG().$this->_getBREAK();
        }
    }

    /**
      *
      * @method private function noHTML
      * @static @private Method Defined is_true_break_assoc
      * RETURN NODE HTML _ noHTML TAG
      *
      **/
    protected function is_true_break_assoc(string $assoc = null) : string
    {
        if ($assoc == null || $assoc == false || $assoc == 'DEFUALT') {
     
    # CHECK_IF_aSSOC_IS_NOT_TRUE_OR_IF_IT_IS_FALSE
            # SET_AS_PRINT_STATIC_HTML
            $this->PERFORM($this->_get_TAG().$this->_doBREAK().$this->_tagSPACER().$this->_getENDS().$this->_getxTAG().$this->_getBREAK());
        }

        # ELSE_IF_THE_ASSOC_PARA_IS_TRUE_THEN_SET_RETURN
        elseif ($assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC) {
            # RETURN_METHOD_ASSOC

            return $this->_get_TAG().$this->_doBREAK().$this->_tagSPACER().$this->_getENDS().$this->_getxTAG().$this->_getBREAK();
        }
    }

    /**
      *
      * @method private function noHTML
      * @static @private Method Defined cpe_FileJandler_meta
      * RETURN meta
      *
      **/
    protected function cpe_FileJandler_meta(array|string $metaQS__ = null, array|string $metaPar__ = null) : string
    {
        $attr = [];

        # LOOP THE MULTI DIMENTIONAL ARRAY INTO FOR EACH LOOP
        $cpe_FileHander_keys = array_keys($metaQS__);
    
        # BEGIN FROM ZERO THEN RETURN COUNT QUICKSTART ++
        for ($quick_start = 0; $quick_start < count($metaQS__); $quick_start++) {
     
     # BEGIN PERFORM HTML
            $attr[] .= ($this->_setGATE().strtolower($metaPar__)." ");
     
            # LOOP WITHIN MULTI ASSOC ARRAY INTO FORMS OF VALUE INTO HTML
            foreach ($metaQS__[$cpe_FileHander_keys[$quick_start]] as $ATTR_NAME => $ATTR_VALUE) {
     
      #RETURN ALL VALUE IF IT IS TRUE
                $attr[] .= ($ATTR_NAME."=\"".$ATTR_VALUE."\""." ");
            }
    
            # END PERFORM
            $attr[] .= (">".$this->_getBREAK());
        }
   
        return implode("", $attr);
    }

    /**
      *
      * @method private function noHTML
      * @static @private Method Defined cpe_FileJandler_link
      * RETURN link
      *
      **/
    protected function cpe_FileJandler_link(array|string $linkQt__ = null, string $linkPara__ = null) : string
    {

   # BEGIN FROM ZERO THEN RETURN COUNT QUICKSTART ++
        $cpe_FileHander_keys = array_keys($linkQt__);

        $attr = [];
   
        # BEGIN FROM ZERO THEN RETURN COUNT QUICKSTART ++
        for ($quick_start = 0; $quick_start < count($linkQt__); $quick_start++) {
     
     # BEGIN PERFORM HTML
            $attr[] .= ($this->_setGATE().strtolower($linkPara__)." ");

            # LOOP WITHIN MULTI ASSOC ARRAY INTO FORMS OF VALUE INTO HTML
            foreach ($linkQt__[$cpe_FileHander_keys[$quick_start]] as $ATTR_NAME => $ATTR_VALUE) {

      #RETURN ALL VALUE IF IT IS TRUE
                $attr[] .= ($ATTR_NAME."=\"".$ATTR_VALUE."\""." ");
            }

            # END PERFORM
            $attr[] .= ("/>".$this->_getBREAK());
        }

        return implode("", $attr);
    }

    /**
      *
      * @method private function noHTML
      * @static @private Method Defined cpe_FileJandler_script
      * RETURN script
      *
      **/
    protected function cpe_FileJandler_script(array|string $scriptQS__ = null, array|string $scripPara__ = null) : string
    {
        $attr = [];

        # BEGIN FROM ZERO THEN RETURN COUNT QUICKSTART ++
        $cpe_FileHander_keys = array_keys($scriptQS__);
   
        # BEGIN FROM ZERO THEN RETURN COUNT QUICKSTART ++
        for ($quick_start = 0; $quick_start < count($scriptQS__); $quick_start++) {

     # BEGIN PERFORM HTML
            $attr[] .= ($this->_setGATE().strtolower($scripPara__)." ");

            # LOOP WITHIN MULTI ASSOC ARRAY INTO FORMS OF VALUE INTO HTML
            foreach ($scriptQS__[$cpe_FileHander_keys[$quick_start]] as $ATTR_NAME => $ATTR_VALUE) {

      #RETURN ALL VALUE IF IT IS TRUE
                $attr[] .= ($ATTR_NAME."=\"".$ATTR_VALUE."\""." ");
            }

            # END PERFORM
            $attr[] .= (">".$this->_setGATE()."/".strtolower($scripPara__).">".$this->_getBREAK());
        }
   
        return implode("", $attr);
    }

    /**
      *
      * @method private function noHTML
      * @static @private Method Defined cpe_FileJandler_cutom_elem_inline
      * RETURN inline elem
      *
      **/
    protected function file_handler_custom_element_inline(array|string $elem_inlineQS__ = null, array|string $tag = null) : string
    {
        $attr = [];

        # IF THE PARAMETERS IS CUTOM END THEN CUSTOM HTML WILL RETURN
        $cpe_FileHander_keys = array_keys($elem_inlineQS__);
   
        # BEGIN FROM ZERO THEN RETURN COUNT QUICKSTART ++
        for ($quick_start = 0; $quick_start < count($elem_inlineQS__); $quick_start++) {

     # BEGIN PERFORM HTML
            $attr[] .= ($this->_setGATE().strtolower($cpe_FileHander_keys[$quick_start])." ");

            # LOOP WITHIN MULTI ASSOC ARRAY INTO FORMS OF VALUE INTO HTML
            foreach ($elem_inlineQS__[$cpe_FileHander_keys[$quick_start]] as $ATTR_NAME => $ATTR_VALUE) {

      #RETURN ALL VALUE IF IT IS TRUE
                $attr[] .= ($ATTR_NAME."=\"".$ATTR_VALUE."\""." ");
            }

            # END PERFORM
            $attr[] .= (">".$this->_getBREAK());
        }

        return implode("", $attr);
    }

    /**
      *
      * @method private function noHTML
      * @static @private Method Defined cpe_FileJandler_cutom_elem_inline
      * RETURN inline elem
      *
      **/
    protected function cpe_FileJandler_doctype(string $tag = null) : string
    {
        $attr = '';
        # IF THE PARAMETERS IS CUTOM END THEN CUSTOM HTML WILL RETURN
        # BEGIN PERFORM HTML
        $attr .= ($this->_setGATE().'!'.strtolower($tag).' html');

        # END PERFORM
        $attr .= (">".$this->_getBREAK());

        return ($attr);
    }

    /**
      *
      * @method private function noHTML
      * @static @private Method Defined file_handler_custom_element_closing_tag
      * RETURN inline closing tag
      *
      **/
    protected function file_handler_custom_element_closing_tag(array|string $attr = null, string $tag = null) : string
    {
        $attr = [];

        # IF THE PARAMETERS IS CUTOM END THEN CUSTOM HTML WILL RETURN
        $cpe_FileHander_keys = array_keys($attr);
   
        # BEGIN FROM ZERO THEN RETURN COUNT QUICKSTART ++
        for ($quick_start = 0; $quick_start < count($attr); $quick_start++) {

     # BEGIN PERFORM HTML
            $attr[] .= ($this->_setGATE().strtolower($cpe_FileHander_keys[$quick_start])." ");

            # LOOP WITHIN MULTI ASSOC ARRAY INTO FORMS OF VALUE INTO HTML
            foreach ($attr[$cpe_FileHander_keys[$quick_start]] as $ATTR_NAME => $ATTR_VALUE) {

      #RETURN ALL VALUE IF IT IS TRUE
                $attr[] .= ($ATTR_NAME."=\"".$ATTR_VALUE."\""." ");
            }

            # END PERFORM
            $attr[] .= (">".$this->_setGATE()."/".strtolower($cpe_FileHander_keys[$quick_start]).">".$this->_getBREAK());
        }

        return implode("", $attr);
    }

    /**
      *
      * @method private function cpe_custom_elements
      * @package @private Method Defined cpe_custom_elements() // use custom HTML
      *
      **/
    protected function cpe_custom_elements(string $elem = null, array|string|callable $value = null, array|string $attr = null, string $id = null, string $class = null)
    {
  
   # GET STRING_ELEMENT_THEN_RETURN
        $elem     = strtolower($elem);

        # GET STRING_ELEMENT_ATTR_RETURN
        $ElementAttr__ = $this->new_setHTMLattr($attr, $id, $class);
   
        # THEN RETURN ALL TRUE? RETURN FUNCTION CUSTOM MODIFIED HTML
        return $this->cpe_Filehandler_Val($value, $elem, $ElementAttr__);
    }

    /**
      *
      * @method private function cpe_FileHandler_html_type()
      * @package @private Method Defined cpe_FileHandler_html_type() // use custom HTML
      *
      **/
    private function cpe_FileHandler_html_type(array|string $attr = null, string $id = null, string $class = null) : string
    {
        $Enhancer = new \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers();
    
        return $Enhancer->ATTR('_xhtml_modify', 'doctype').$this->get__HTML('STRUCTURE', 3, $attr, $id, $class);
    }

    /**
      *
      * @method private function noHTML
      * @package @private Method Defined __magicELSE() // use alternaive if else statement inside function
      *
      **/
    protected function assoc_method_concat_else(bool $con = null, string $res1 = null, string $res2 = null, string $as = null) : bool|string
    {
 
  # SET_FOR_IF_CONDITION
        $condition_statements = $con;
  
        # SET_FOR_IF_RESULT
        $get_if_result_       = $res1;
  
        # SET_FOR_ELSE_RESULT
        $get_else_result_     = $res2;
  
        # SET_FANC_ASSOC
        $assoc                = $as;
  
        # CHECK_IF_THE_FUNCTION_IS_WITHIN_METHOD
        # THEN SET RETURN
        if (($assoc == true || $assoc !== null) && ($assoc === FUNC_ASSOC || $assoc === METHOD_ASSOC || $assoc === CLASS_ASSOC)) {
            if ($condition_statements) {
                return $get_if_result_;
            } else {
                return $get_else_result_;
            }
        } elseif ($assoc == false || $assoc == null) {
            if ($condition_statements) {
                $this->PERFORM($get_if_result_);
            } else {
                $this->PERFORM($get_else_result_);
            }
        }
    }


    /**
      *
      * @method private function noHTML
      * @package @private Method Defined HTML FOUNDATION _isTrue_SET_STRING
      *
      **/
    protected function is_true_set_merge($argument = null)
    {
    
    #_GET_RESUKT_SET_AS_RETURN_TO_MERGE
        return !empty($argument) && $argument !== null ? $argument : false;
    }

    // Attrbute for redirect github submit issue
    protected function IssueSubmitAttr() : array
    {
        return $sets = [
         
      $attr_name = ['href'],
      $attr_val  = ['https://github.com/nielsofficeofficial/PHPWine/issues']
        
   ];
    }

    // Attrbute for redirect github submit issue
    protected function DocxSubmitAttr() : array
    {
        return $sets = [
         
      $attr_name = ['href'],
      $attr_val  = ['https://github.com/nielsofficeofficial/PHPWine']
        
   ];
    }

    // Attrbute for redirect github submit issue
    protected function DocxEnahncerSubmitAttr() : array
    {
        return $sets = [
         
      $attr_name = ['href'],
      $attr_val  = ['https://github.com/nielsofficeofficial/PHPWine']
        
   ];
    }

    /**
      *
      * @method protected function PHPFileEnhancer
      * @static Method Defined cpe_xib6_FileHandler_mulipage_array()
      * RETURN FOLDER CONFIG FROM FCONFIG.PHP
      *
      * @since 03.11.2020
      *
      **/
    protected function cpe_xib6_FileHandler_mulipath_array($MultiPagefile__ = null, $CheckCP__ = null, $Pf__ = null)
    {
   
        // ASSIGNED_VARIABLE_ARRAY
        $GetPagePath__ = [];
  
        // CHECK_IF_IT_IS_ARRAY_THEN_ // $MultiPagefile__
        // CHECK_THE_PATH
        if (is_array($MultiPagefile__)) {
     
           // LOOP_THE_PATH_ASSIGN_IN_ARRAY_VALUES
            foreach ($MultiPagefile__ as $CurrentPath__) {
       
               // CHECK_AND_RETURN_VALUE_FROM_ARRAY_IF_LAST_KEY_IS_EQUAL_TO_VALUE_CURRENTPATH
                $CurrentPath__ == array_key_last($CheckCP__) ?  $GetPagePath__[] = $CurrentPath__ : false;
            }
     
            // ASSIGNED_IN_VAR_THEN_IMPLODE_RETURN_PATH
            $TheCurrentPage__ =  $CheckCP__[implode('', $GetPagePath__)];
     
        // ELSE PATH_AS_SINGLE_PATH
        } else {
            $TheCurrentPage__  = $CheckCP__[$Pf__];
        }
   
        // RETURN_ASSGINED _BASE_PATH
        return $TheCurrentPage__;
    }  // cpe_xib6_FileHandler_mulipath_array
 
    /**
      *
      * @method protected function PHPFileEnhancer
      * @static Method Defined cpe_xib6_FileHandler_mulipage_array()
      * RETURN FOLDER CONFIG FROM FCONFIG.PHP
      *
      * @since 03.11.2020
      *
      **/
    protected function cpe_xib6_FileHandler_MultiPage_array(array|string $GMultiP__ = null, array|string $GTCP__ = null)
    {
  
        // ASSIGNED VARIABLE ARRAY CONTAINER EMPTY
        $GetPage__ = [];

        // CHECK_IF_IT_IS_TRUE // THEN_IF_IT_IS_TRUE_THE_RETURN_TRUE
        // return $ReturnTrue = $GetTheCurrentPage__ === $GetMultiPage__ ? TRUE : FALSE;
        if (is_array($GMultiP__)) {
    
            // LOOP_THE_PATH_ASSIGN_IN_ARRAY_VALUES
            foreach ($GMultiP__ as $GetAssigned) {
     
                // CHECK_AND_RETURN_VALUE_FROM_ARRAY_IF_EQUAL_TO_VAUE_WHICH_$GetAssigned
                // STORE IN EMPTY ARRAY VARIABLE  $GetPage__[]
                // IF_TRUE THE RETURN TRUE ELSE RETURN FALSE
                $GetPage__[] = $GTCP__ === $GetAssigned ? true : false;
            }
    
            // IMPLODE THEN RETURN VALUE ARRAY
            return implode('', $GetPage__);

        } else {

            // ELSE RETURN TRUE NON ARRAY VALUE
            return $GTCP__ === $GMultiP__ ? true : false;
        }

    } // END OF THE METHOD cpe_xib6_FileHandler_getMultiPage_array

    /**
     *
     * @method private function Set_Element_Header_Attr noHTML
     * @private Method Defined HTML return element array
     *
     **/
    protected function set_Element_Attr(array $attr_name = null, array $attr_val = null) : array
    {
        return $Set_Element_Header_Attr = [ $attr_name = $attr_name, $attr_val  = $attr_val  ];
    }
 
    /**
      *
      * @method private function
      * @package @private Method Defined  ModifiedHTML
      *
      **/
    private function set_assoc_element_modified_tag(string $modifiedHTMLE_ = null) : string
    {
        return $this->_setGATE().$this->_setENDS().strtolower($modifiedHTMLE_).$this->_setENDGATE().$this->_getBREAK();
    }

    /**
      *
      * Defined get_values_next_child()
      * @method Print array as child tag HTML ELements
      * @since 02.01.2022
      * @since v1.2.0.0
      *
     **/
    protected function get_values_next_child(string $valueKey = null, array $array = null)
    {
   
       // CHECK IF THE KEY IS EXISTING THEN IMPLODE !
        if (array_key_exists($valueKey, $array)) {
            return implode("", $array[$valueKey]);
        }
  
        return false;
    }

    /**
      *
      * Defined get_values_next_child_inner()
      * @method Print array as child tag HTML ELements INNER keys
      * @since 02.01.2022
      * @since v1.2.0.0
      *
     **/
    protected function get_values_next_child_inner(string $getInner = null, array $array = null)
    {
        $validate_request_api_vanilla_wine_inner = function (callable|string $data) : array {
            if (is_callable($data)) {
                return $data(true); } else { return [];  }
        };

        // set an emtpy array for tag implode
        $next_child = [];

        # IF THE KEY REQUIRE IS EXIST THEN SELECT THAT KET FOR THE ASSOCIATED OF ARRAY OF DATAS
        # THEN LOOP THE REQUEST DATA ELEMNT HTML
        if ($this->check_key_mandatory_array($getInner, $array)) {
    
            # LOOP THE ARRAY WITH DATA INTO HTML ELEMENT TAGS
            # GET THE VALUE OF THE ARRAY KEY
            foreach ($array[$getInner] as $key => $values) {

              if (isset($values[0]) && $values[0] === 'elem_sort') {
                    print "Helper: Array Child Element must be type of callable ex. [ 'elem_sort' => function() { ...  } ] ";
                    $this->trace_element_child_array_errors(
                        $values[0],
                        $values[0],
                        $values
                    );
                }

                if (!isset($values['elem_sort'])  && is_null($values[0])) {
                    print "<pre> Helper: INNER => [  ] !cannot be empty : 
                    <br/> 
                    <br/> ex. [ 'elem_sort' => function() { 
                    <br/>     
                    <br/>       ['div', INNER => [
                    <br/>
                    <br/>          [] <i> // must be [ 'element' ] </i>
                    <br/>  
                    <br/>       ]]
                    <br/>  
                    <br/>     }] 
                    </pre> " .
                    $this->trace_element_child_array_errors(
                        $values,
                        $values,
                        $values
                    );
                }

                if ((isset($values[0])) ? (($values[0] === 'elem_sort') ? $values[0] : '') :  $get_wine = $validate_request_api_vanilla_wine_inner($values['elem_sort'])) {
                    for ($i = 0; $i < count($get_wine); $i++) {
        
                        // if the child from return value is empty
                        // return [ [ ] ]
                        // must be return [ ['p'] ]
                        if (!isset($get_wine[$i][0])) :

                       print "<pre> Helper:  !cannot be empty : INNER => [ 
                          
                       ['elem_sort' =>function() {
                              
                        return [
                            []  <i> // must be [ 'element' ] </i>
                        ]

                        }]  ] ";
                        $this->trace_element_child_array_errors(
                            $get_wine[0],
                            $get_wine[0],
                            $get_wine
                        );
           
                        endif;
        
                        // APPENED CHILD
                        $next_child[] = $this->_setGATE() . strtolower($get_wine[$i][0]);
       
                        # LOOP THE ATTRIBUTE OF ELEMENT HTML TAG
                        # BASE ON ARRAY OF DATA
                        if ($this->check_key_mandatory_array(SELF::ATTR_MANDATORY_KEY, $get_wine[ $i ])) {
                            $next_child[] = '';
                            # check if the inner attribute is not array then return error handler
                            (!is_array($get_wine[ $i ][SELF::ATTR_MANDATORY_KEY])) ? $this->errors_array_handler($get_wine[ $i ]) . $this->wine_display_errors() : '' ;
  
                            foreach ($get_wine[ $i ][SELF::ATTR_MANDATORY_KEY] as $attr => $val) {
                                $next_child[] = ' ' . $attr . $this->_setES() . $this->_getDQUOTE() . $val .  $this->_getDQUOTE();
                            }
                        }
       
                        # APPEND ON THE END HTML
                        $next_child[] =  $this->_setENDGATE();

                        # GET THE VALUE IF IS HAS SET
                        if ($this->check_key_mandatory_array(SELF::VALUE_MANDATORY_KEY, $get_wine[ $i ])) {

                            # check if the inner value is not array then return error handler
                            (is_string($get_wine[ $i ][SELF::VALUE_MANDATORY_KEY])) ? $this->errors_array_handler($get_wine[ $i ]) . $this->wine_display_errors() : '';
                            (!isset($get_wine[ $i ][SELF::VALUE_MANDATORY_KEY])) ? $this->errors_array_handler($get_wine[ $i ]) . $this->wine_display_errors() : '';
 
                            $next_child[] = implode("", $get_wine[ $i ][SELF::VALUE_MANDATORY_KEY]);
                        }
       
                        # CLOSE THE HTML ELEMENT TAG
                        $next_child[] = (in_array(strtolower($get_wine[ $i ][0]), $this->htm_L)) ? '' :  $this->_setGATE().$this->_setENDS() . strtolower($get_wine[ $i ][0])  . $this-> _setENDGATE() . $this->_getBREAK();
                    }

                } else {

                  // if elem_sort return [ empty ]
                  if (!isset($values[0])) :  // if( !isset( $values[0] ) ) :

                    print "<pre>Helper: cannot be empty must be return array child element
                    <br /> ex:
                    <br /> ['elem_sort' => function() {
                    <br />   
                    <br />   return [
                    <br />     // element goes here ... 
                    <br />    ];
                    <br />    
                    <br /> }]
                    </pre>" .
                    $this->trace_element_child_array_errors(
                        isset($values[0]),
                        isset($values[0]),
                        $values
                    );
                  
                    endif;
        
                    // APPENED CHILD
                    $next_child[] = $this->_setGATE() . strtolower($values[0]);
       
                    # LOOP THE ATTRIBUTE OF ELEMENT HTML TAG
                    # BASE ON ARRAY OF DATA
                    if ($this->check_key_mandatory_array(SELF::ATTR_MANDATORY_KEY, $values)) {
                        $next_child[] = ' ';
                        # check if the inner attribute is not array then return error handler
                        (!is_array($values[SELF::ATTR_MANDATORY_KEY])) ? $this->errors_array_handler($values) . $this->wine_display_errors() : '' ;
  
                        foreach ($values[SELF::ATTR_MANDATORY_KEY] as $attr => $val) {
                            $next_child[] =  $attr . $this->_setES() . $this->_getDQUOTE() . $val .  $this->_getDQUOTE();
                        }
                    }
       
                    # APPEND ON THE END HTML
                    $next_child[] =  $this->_setENDGATE();

                    # GET THE VALUE IF IS HAS SET
                    if ($this->check_key_mandatory_array(SELF::VALUE_MANDATORY_KEY, $values)) {

                        # check if the inner value is not array then return error handler
                        (is_string($values[SELF::VALUE_MANDATORY_KEY])) ? $this->errors_array_handler($values) . $this->wine_display_errors() : '';
                        (!isset($values[SELF::VALUE_MANDATORY_KEY])) ? $this->errors_array_handler($values) . $this->wine_display_errors() : '';
 
                        $next_child[] = implode("", $values[SELF::VALUE_MANDATORY_KEY]);
                    }
       
                    # CLOSE THE HTML ELEMENT TAG
                    $next_child[] = (in_array(strtolower($values[0]), $this->htm_L)) ? '' :  $this->_setGATE().$this->_setENDS() . strtolower($values[0])  . $this-> _setENDGATE() . $this->_getBREAK();
                }
            }
  
            // COOKED AND DESIGNATE THE DATA REQUEST
            return implode("", $next_child);
        }
    }

    /**
      *
      * @method private function
      * @package @private Method Defined  ModifiedHTML Val
      *
      **/
    private function cpe_Filehandler_Val(array|string|callable $tagVHtml__ = null, string $ValElem__ = null, array|string $ValEAttr__ = null) : bool|string
    {
  
       // installing request error handler for instances
        $request    = new \PHPWineVanillaFlavour\Wine\System\Request();
  
        # CHECK IF THERE IS ARRAY AND IF THERE IS A REQUIRE ARAAY KEY NEXT_CHILD ?
        # THEN GET THE VALUE AND LOOP IT THROUGH AN ARRAY AND RETURN THE DATAS
        if (is_array($tagVHtml__) && array_key_exists(SELF::CHILD_MANDATORY_KEY, $tagVHtml__)) {
           
      // COOKED THE INGREDIENTS
            $tagVHtml__ = $this->get_value_child_optimizer($tagVHtml__);

            // DESIGNATE THE DATA APPROPRIATELY
            return $this->getValueCallableStringArray($tagVHtml__, $ValElem__, $ValEAttr__);
        }
        # ELSE IF  ? NOT EXIST THE NEXT_CHILD
        # THEN PRINT WITH REQUEST CLASS ERROR HANDLER MESSAGE TO SEE THE DATA OF CURRETN ARRAY
        elseif (is_array($tagVHtml__)) {
            // EXECUTE TO TERMINATE THE PLAN
            $request->CURRENT_VALUE_REQUEST($tagVHtml__);
            $this->wine_display_errors();
        } elseif (is_callable($tagVHtml__)) {
            // EXECUTE CALLABLE
            if ($tagVHtml__($this->callable) && ($tagVHtml__ == false  ||  $tagVHtml__ == null)) {
                return false ;
            } else {
                return  $this->getValueCallableStringArray($tagVHtml__($this->callable), $ValElem__, $ValEAttr__);
            }
        } else {

        # DO THE DEFAULT PROCESSING IF THE VALUE IS NOT ARRAY
            # RETURN APPROPRIATE THE STRING DATA
            return $this->getValueCallableStringArray($tagVHtml__, $ValElem__, $ValEAttr__);
        }
    }

    private function getValueCallableStringArray(array|string|callable $tagVHtml__ = null, string $ValElem__ = null, array|string $ValEAttr__ = null) : bool|string
    {
        if (in_array($ValElem__, $this->htm_L)) {
            return $this->_setGATE().$ValElem__.$ValEAttr__;
        } else {
            $next_child_array  = "";
            $next_child_array  .= $this->_setGATE().$ValElem__.$ValEAttr__;
            $next_child_array  .= (!empty($tagVHtml__) && $tagVHtml__ !== null) ? $tagVHtml__ : false ;
            $next_child_array  .= $this->set_assoc_element_modified_tag($ValElem__);
  
            return((string) $next_child_array);
        }
    }

    /**
      *
      * @method protected function noHTML_isTrue_SET_STRING
      * @protected Method Defined HTML FOUNDATION _isTrue_SET_STRING
      *
      **/
    protected function is_true_set_string(string $str = null, string $assoc = null)
    {
        if ($assoc == null || $assoc == false || $assoc == 'DEFUALT') {
            print  $this->_getTRING($str);
        }
   
        # CHECK_IF_INLINE_IS_ASSOC_WITH_FUNC_ASSOC_OR_CLASS_ASSOC_OR_METHOD_ASSOC
        elseif ($assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC) {
            return $this->_getTRING($str);
        }
    }

    /**
     *
     * Defined SAVE SECONDARY FUNCTION PHP GET ARRAY KEY
     * @since 02.03.2022
     * @since v1.2.0.0
     *
    **/
    private function check_key_mandatory_array(string $key_array = null, array $value_array = null) : bool
    {
        return array_key_exists($key_array, $value_array);
    }

    /**
      *
      * @method private function doMinified
      * @private Method Defined set to TRUE to make minified HTML
      * @since 1.31.2022
      *
      **/
    private function doMinified($html_optimized)
    {
        if (defined('PHPWINE_MINIFIED') == true && PHPWINE_MINIFIED !== false) : return false; else  : return $html_optimized;
        endif;
    }

    /**
      * @method private function errors_array_handler
      * @since 02.09.2022
      * @since v1.2.0.1
      *
      **/
    private function errors_array_handler(array|string $value = null) : void
    {
        
       // installing request error handler for instances
        $request    = new \PHPWineVanillaFlavour\Wine\System\Request();
      
        $request->CURRENT_VALUE_REQUEST($value);
        $this->wine_display_errors();
    }
}
