<?php 

 namespace PHPWineVanillaFlavour\Wine\Merge;

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
 * @method echo html::ELEMENT('H1' );
 * @method echo html::ELEMENT('H2');
 * @method echo html::ELEMENT('H3');
 * @method echo html::ELEMENT('H4');
 * @method echo html::ELEMENT('H5');
 * @method echo html::ELEMENT('H6');
 * @method echo html::ELEMENT('H1');
 * @method echo html::ELEMENT('DIV');
 * @method echo html::ELEMENT('BUTTON');
 * @method echo html::ELEMENT('A');
 * @method echo html::ELEMENT('IFRAME');
 * @method echo html::ELEMENT('MAIN');
 * @method echo html::ELEMENT('NAV');
 * @method echo html::ELEMENT('SELECT');
 * @method echo html::ELEMENT('FORM');
 * @method echo html::ELEMENT('PICTURE');
 * @method echo html::ELEMENT('SECTION');
 * @method echo html::ELEMENT('TEXTAREA');
 * @method echo html::ELEMENT('AUDIO');
 * @method echo html::ELEMENT('VIDEO');
 * @method echo html::ELEMENT('ADDRESS');
 * @method echo html::ELEMENT('COLGROUP');
 * @method echo html::ELEMENT('BDI');
 * @method echo html::ELEMENT('BDO');
 * @method echo html::ELEMENT('CAPTION');
 * @method echo html::ELEMENT('LABEL');
 * @method echo html::ELEMENT('DATALIST');
 * @method echo html::ELEMENT('DETAILS');
 * @method echo html::ELEMENT('SUMMARY');
 * @method echo html::ELEMENT('DIALOG');
 * @method echo html::ELEMENT('OPTION');
 * @method echo html::ELEMENT('FIGURE');
 * @method echo html::ELEMENT('FIGCAPTION');
 * @method echo html::ELEMENT('METER');
 * @method echo html::ELEMENT('OBJECT');
 * @method echo html::ELEMENT('OPTGROUP');
 * @method echo html::ELEMENT('OUTPUT');
 * @method echo html::ELEMENT('PROGRESS');
 * @method echo html::ELEMENT('SVG');
 * @method echo html::ELEMENT('TEMPLATE');
 * @method echo html::ELEMENT('TIME');
 * @method echo html::ELEMENT('VAR');
 * @method echo html::ELEMENT('UL');
 * @method echo html::ELEMENT('OL');
 * @method echo html::ELEMENT('LI');
 * @method echo html::ELEMENT('TABLE');
 * @method echo html::ELEMENT('TR');
 * @method echo html::ELEMENT('TD');
 * @method echo html::ELEMENT('TH');
 * @method echo html::ELEMENT('LEGEND');
 * @method echo html::ELEMENT('FIELDSET');
 * @method echo html::ELEMENT('TBODY');
 * @method echo html::ELEMENT('TFOOT');
 * @method echo html::ELEMENT('THEAD');
 * @method echo html::ELEMENT('SPAN');
 * @method echo html::ELEMENT('EM');
 * @method echo html::ELEMENT('B');
 * @method echo html::ELEMENT('I');
 * @method echo html::ELEMENT('SMALL');
 * @method echo html::ELEMENT('MARQUEE');
 * @method echo html::ELEMENT('CENTER');
 * @method echo html::ELEMENT('CODE');
 * @method echo html::ELEMENT('ABBR');
 * @method echo html::ELEMENT('MAP');
 * @method echo html::ELEMENT('CANVAS');
 * @method echo html::ELEMENT('CITE');
 * @method echo html::ELEMENT('DATA');
 * @method echo html::ELEMENT('DL');
 * @method echo html::ELEMENT('DT');
 * @method echo html::ELEMENT('DD');
 * @method echo html::ELEMENT('INS');
 * @method echo html::ELEMENT('DEL');
 * @method echo html::ELEMENT('KBD');
 * @method echo html::ELEMENT('MARK');
 * @method echo html::ELEMENT('PRE');
 * @method echo html::ELEMENT('RT');
 * @method echo html::ELEMENT('RP');
 * @method echo html::ELEMENT('S');
 * @method echo html::ELEMENT('SAMP');
 * @method echo html::ELEMENT('STRONG');
 * @method echo html::ELEMENT('SUB');
 * @method echo html::ELEMENT('SUP');
 * @method echo html::ELEMENT('WBR');
 * @method echo html::ELEMENT('Q');
 * @method echo html::ELEMENT('HEAD');
 * @method echo html::ELEMENT('TITLE');
 * @method echo html::ELEMENT('BODY');
 * @method echo html::ELEMENT('HTML');
 * @method echo html::ELEMENT('BLOCKQUOTE');
 *
 */

class Html {

/**
  * @var @property Private 
  * defined Properties
  * minify optimized html attribute
  *
  * Each Property dedicated to html
  * Create Beautiful Clean Codes 
  * 
  **/
static private $sq;

/**
  * @var @property Private 
  * defined double quotes
  * minify optimized html attribute 
  **/
static private $dq;

/**
  * @var @property Private 
  * defined less than sign
  * minify optimized html attribute 
  **/
static private $lt; 

/**
  * @var @property Private 
  * defined greather than sign 
  * minify optimized html attribute 
  **/
static private $gt;

/**
  * @var @property Private 
  * defined equal sign
  * minify optimized html attribute 
  **/
static private $es;

/**
  * @var @property Private 
  * defined html end sign
  * minify optimized html attribute 
  **/
static private $ends;

/**
  * @var @property Private 
  * defined comment begin sign
  * minify optimized html attribute 
  **/
static private $comBEGIN;

/**
  * @var @property Private 
  * defined comment end sign
  * minify optimized html attribute 
  **/
static private $comEND;

/**
  * @var @property Private 
  * defined empty space
  * minify optimized html attribute 
  **/
static private $sHTML;

/**
  * @var @property Private 
  * defined exclamation mark sign
  * minify optimized html attribute 
  **/
static private $exSymbol;

/**
  * @var @property Private 
  * defined execute string no tag
  * minify optimized html attribute 
  **/
static private $str;

/**
  * @var 
  * @property ARRAY_KEY_CHILD
  * defined array key to CHILD Enhancer/Optimizer quick child
  * @since v1.2.0.0 
  * @since 02.02.2022
  **/
  CONST CHILD_MANDATORY_KEY = 'CHILD';

  /**
    * @var 
    * @property ARRAY_KEY_ATTR
    * defined array key to CHILD Enhancer/Optimizer quick child
    * @since v1.2.0.0 
    * @since 02.02.2022
    **/
  CONST ATTR_MANDATORY_KEY  = 'ATTR';
  
  /**
    * @var 
    * @property ARRAY_KEY_INNER
    * defined array key to CHILD Enhancer/Optimizer quick child
    * @since v1.2.0.0 
    * @since 02.02.2022
    **/
  CONST INNER_MANDATORY_KEY = 'INNER';
  
  /**
    * @var 
    * @property ARRAY_KEY_VALUE
    * defined array key to CHILD Enhancer/Optimizer quick child
    * @since v1.2.0.0 
    * @since 02.02.2022
    **/
  CONST VALUE_MANDATORY_KEY = 'VALUE';
  
  /**
    * @var 
    * @property ARRAY_KEY_VALUE
    * defined array key to CHILD Enhancer/Optimizer quick child
    * @since v1.2.0.0 
    * @since 02.02.2022
    **/
    CONST PARENT_MANDATORY_KEY = 'PARENT';

/**
  * @var @property Array of data 
  * defined CONST ARRAY EXNTION FILES
  *
  * @var @__getAssEXTENSION__ 
  *
  **/
 CONST __FILEEXTENSION__  = [ 

  __PHP__  => 'php'
 ,__HTML__ => 'html'
 ,__CSS__  => 'css'
 ,__JS__   => 'js'
 ,__JPG__  => 'jpg'
 ,__JPEG__ => 'jpeg'
 ,__PNG__  => 'png'
 ,__GIF__  => 'gif'
 ,__BMP__  => 'bmp'
 ,__TEX__  => 'tex'
 ,__XLS__  => 'xls'
 ,__XLSX__ => 'xlsx'
 ,__DOCX__ => 'doc'
 ,__DOCX__ =>'docx'
 ,__PPT__  => 'ppt'
 ,__PPTX__ => 'pptx'
 ,__ODT__  => 'odt'
 ,__TXT__  => 'txt'
 ,__RTF__  =>'rtf'

]; 

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
static protected $htm    = [

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

];

/**
  * @var 
  * @property @SECONDARY_VARIABLE 
  * defined arrays of data html 
  **/
static protected $htm_s  = [

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
static protected $htm_ss = [

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
static protected $htm_t  = [

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
static protected $htm_f  = [

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
static protected $htm_fc = [

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
static protected $htm_L  = [

   'source'
  ,'track'
  ,'circle'
  ,'param'
  ,'input'
  ,'meta'
  ,'link'
  ,'img'
  ,'embed'
  ,'option'
  ,'col'
  ,'base'
  ,'aside'
  ,'area'
  ,'DOCTYPE html'

];

/**
  * @var 
  * @property @STRUCTURE_VARIABLE  (NO x HTML TAG)
  * defined arrays of data html 
  **/
static protected $htm_st = [

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
static protected $hBreak = [

    "\n"
   ,"br"
   ,"hr"

];

/**
  * @var 
  * @property @html_extend  (register_new_html_syntax)
  * defined arrays of data html 
  **/
static protected $hextend = [];

/**
  *
  * @method public function add breaktag html as noHTML
  * Defined as break tag no string quotes 
  * Neat and clean noHTML
  *
  **/
  static public function BREAK(

    $assoc     =  null

  )
  { 

      return self::_isTrueBREAK_assoc($assoc); 

  }

/**
  *
  * @method public function add line html as noHTML
  * Defined as horizontal line tag no string quotes 
  * Neat and clean noHTML
  *
  **/
  static public function LINE(

     mixed $assoc    =  null

  )
  { 
  
      return self::_isTrueLine_assoc($assoc);

  }

/**
  *
  * @method public function add add Space between text/String
  * Defined as horizontal line tag no string quotes 
  * Neat and clean noHTML
  *
  **/
  static public function SPACE(

      mixed $assoc    =  null

  )
  { 
  
      return self::_tagSPACER(); 
  
  }

/**
  *
  * @method public function add line html as noHTML
  * Defined as print a "String" && execute function with another "" (string) line tag no string quotes
  * echo x"x"x | html::PERFORM(function()); 
  * Neat and clean noHTML
  *
  **/
  static public function PERFORM(

       mixed $str     =  null
      ,mixed $assoc   =  null

  )
  { 

      return self::_isTrue_SET_STRING($str, $assoc); 

  }

/**
  *
  * @method public function add line html as noHTML
  * Defined as print a "String" && execute function with another "" (string) line tag no string quotes
  * echo x"x"x | html::_exe(function()); 
  * Neat and clean noHTML
  *
  **/
   static public function _MERGE(

      mixed $func_merge     =  null 

   )
   { 

       return self::_isTrue_SET_Merge($func_merge); 

   }

/**
  *
  * @method public Method Set File Asstes Extension within custom att HTML 
  * Defined File Image Extension | __getAssEXTENSION__
  * $extension = Html::SetExtension($argu); 
  
    function getMeIMG($src,$path, $argu=null) 
    {

       $extension = Html::SetImageExtension($argu);
        
       return $sets = [
         
           $attr_name = [$src],
           $attr_val  = [$path.$extension]
        
        ];

    }

  * Build Beautiful and Maintainable
  *
  **/  
   static public function SetFileExtension(

       string $argu    =  null

   )
   { 

       return self::Validate_extension_assets_files($argu); 

   }
  
  /**
  *
  * @method public function SetElementHeaderAttr noHTML
  * @static Method Defined Element Header MEta attributes HTML  
  * Neat and clean noHTML
  * Html::_noHTML(SetElemAttr(['lang'],['en']));
  * Html::_HEAD();
  * Html::_ELEMENT('GPS-Site','meta', SetElemAttr(['charset'],['utf-8']));
  * Html::_ELEMENT('http-equiv','meta', SetElemAttr(['http-equiv','content'],['X-UA-Compatible','IE=edge']));
  *
  **/ 
  static public function setElemAttr(

     array $attr_type
    ,array $array_set_2

  )
  { 

       return self::Set_Element_Attr($attr_type,$array_set_2); 

  }

/**
  *
  * @method public function __magicELEMENT noHTML
  * @static Method Defined single call through param html element no closing tag  
  * Neat and clean noHTML
  * $elem  = 'HTML ELEMENT' ex. p, ul, li etc..
  * $label = 'MAGIC' output: <p> | _ any tag elements html
  * $label = 'MAGIC_END' output: </p> | x any tag elements html
  *
  **/
  static public function __magicELEMENT(

      mixed  $elem     =  null
     ,string $label    =  null
     ,array  $attr     =  []
     ,string $id       =  null
     ,string $class    =  null

)
{
 
  return  self::_setReturnELEMENT(self::_setELEMENTS($elem), null, $attr, $id, $class, $label); 

} 

/**
  *
  * @method public function __magicELEMENT noHTML
  * @static Method Defined single call through param html element no closing tag  
  * Neat and clean noHTML
  * .__magicELSE( $par == TRUE ,'Yes','NO','FUNC_ASSOC'); // within the function
  * html::PERFORM(__magicELSE( $par == TRUE ,'Yes','NO','FUNC_ASSOC')); // without the function 
  *
  **/
  static public function __magicELSE(

      bool  $condition    =  null
     ,mixed $if_result    =  null
     ,mixed $else_result  =  null
     ,mixed $assoc        =  null

  )
  { 

    return self::return_method_concat_else( 
      
      $condition, 
      $if_result, 
      $else_result, 
      $assoc
    
    ); 

 }

/**
  *
  * @method public function __magicELEMENT noHTML
  * @static Method Defined single call through param html element no closing tag  
  * Neat and clean noHTML
  * .__magicIF( $par == TRUE ,'Yes','FUNC_ASSOC'); // within the function
  * html::PERFORM(__magicIF( $par == TRUE ,'Yes','FUNC_ASSOC')); // without the function 
  *
  **/
  static public function __magicIF(

      bool  $condition    =  null
     ,mixed $if_result    =  null
     ,mixed $assoc        =  null  

  )
  { 

    return self::return_method_concat_else(
      
      $condition,
      $if_result,
      NULL,
      $assoc
    
    ); 

 }

/**
  *
  * @method public function _ELEMENT noHTML
  * @static Method Defined single html element no closing tag  
  * Neat and clean noHTML
  *
  **/
  static public function ELEM(

     string $id     = null
    ,string $class  = null
    ,mixed  $elem   = null
    ,array  $attr   = null
    ,string $inline = null
    ,mixed  $assoc  = null

 )
 { 
   
     return self::HtmlELements_Optimizer(
       
      $inline, 
      $elem, 
      $attr, 
      $id, 
      $class, 
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
  static public function STRING(

    mixed $str    = null
   ,mixed $assoc  = null

  )
  { 

     return self::_isTrue_SET_STRING(
       
      $str, 
      $assoc
    
    ); 

  }

/**
  *
  * @method public function ELEMENT noHTML
  * @static Method Defined single call through param html element no closing tag  
  * Neat and clean noHTML
  *
  **/
  static public function ELEMENT(

      string $elem      =  null
     ,mixed  $value     =  null
     ,array  $attr      =  null
     ,string $id        =  null
     ,string $class     =  null
     ,string $label     =  null

  )
  {
 
     return  self::_setReturnELEMENT(
       
      self::_setELEMENTS($elem),
      $value, 
      $attr, 
      $id, 
      $class, 
      $label
    
    ); 

 } 

 /**
  *
  * @method public function noHTML
  * @static Method Defined HTML TEXTAREA TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
  static public function TEXTAREA(

    string        $id      =  null 
   ,array|string  $value   =  null 
   ,array|string  $attr    =  null 
   ,string        $class   =  null 
   ,string        $label   =  null 
   ,string        $assoc   =  null  

)
{
 
  return self::_istrue_assoc_ELEMENTINLINE(
    
   'PRIMARY', 
   17, 
   $value, 
   $attr, 
   $id, 
   $class, 
   $label, 
   $assoc
  
  );

 }

 static public function SELECT(

  string        $id      =  null 
 ,array|string  $value   =  null 
 ,array|string  $attr    =  null 
 ,string        $class   =  null 
 ,string        $label   =  null 
 ,string        $assoc   =  null  

)
{

return self::_istrue_assoc_ELEMENTINLINE(
  
 'PRIMARY', 
 13, 
 $value, 
 $attr, 
 $id, 
 $class, 
 $label, 
 $assoc

);

}

static public function OPTION(

  string        $id      =  null 
 ,array|string  $value   =  null 
 ,array|string  $attr    =  null 
 ,string        $class   =  null 
 ,string        $label   =  null 
 ,string        $assoc   =  null  

)
{

return self::_istrue_assoc_ELEMENTINLINE(
  
   'SECONDARY', 
   13, 
   $value, 
   $attr, 
   $id, 
   $class, 
   $label, 
   $assoc

);

}

static public function OPTGROUP(

  string        $id      =  null 
 ,array|string  $value   =  null 
 ,array|string  $attr    =  null 
 ,string        $class   =  null 
 ,string        $label   =  null 
 ,string        $assoc   =  null  

)
{

 return self::_istrue_assoc_ELEMENTINLINE(
   
   'SUPPORT', 
   4, 
   $value, 
   $attr, 
   $id, 
   $class, 
   $label, 
   $assoc

 );

}

static public function FIELDSET(

  string        $id      =  null 
 ,array|string  $value   =  null 
 ,array|string  $attr    =  null 
 ,string        $class   =  null 
 ,string        $label   =  null 
 ,string        $assoc   =  null  

)
{

return self::_istrue_assoc_ELEMENTINLINE(
  
 'LIST', 
 8, 
 $value, 
 $attr, 
 $id, 
 $class, 
 $label, 
 $assoc

);

}

static public function LABEL(

  string        $id      =  null 
 ,array|string  $value   =  null 
 ,array|string  $attr    =  null 
 ,string        $class   =  null 
 ,string        $label   =  null 
 ,string        $assoc   =  null   


)
{

return self::_istrue_assoc_ELEMENTINLINE(
  
   'SECONDARY', 
   8, 
   $value, 
   $attr, 
   $id, 
   $class, 
   $label, 
   $assoc
 
 );

}

static public function OUTPUT(

  string        $id      =  null 
 ,array|string  $value   =  null 
 ,array|string  $attr    =  null 
 ,string        $class   =  null 
 ,string        $label   =  null 
 ,string        $assoc   =  null  

)
{

 return self::_istrue_assoc_ELEMENTINLINE(
   
    'SUPPORT', 
    5, 
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
  * @method private function noHTML
  * @static @private Method Defined  return_inline_element
  * RETURN NODE HTML _ noHTML TAG
  * 
  **/
static private function return_inline_element($elem_val, $elem_key, $attr, $id, $class, $assoc) {

   return self::get_inline__HTML($elem_val, $elem_key, $attr, $id, $class, $assoc);    
}

/**
 *
 * Defined SAVE SECONDARY FUNCTION PHP GET ARRAY KEY 
 * @since 02.03.2022
 * @since v1.2.0.0
 *
**/
static private function check_key_mandatory_array( string $key_array, array $value_array  )
{
  return array_key_exists( $key_array,  $value_array );
}

static private function get_value_child_optimizer( $value )
{
  
  // PREPARED EMPTY ARRAY
  $next_child = [];
  
   # CHECK IF THE CHILD KEY IS EXIST IN ARRAY THE IF TRUE 
   # PRINT THE CHILD ARRAY
  if( is_array( $value ) && self::check_key_mandatory_array( SELF::CHILD_MANDATORY_KEY,  $value ) )  
  {
  
   # IF THE KEY REQUIRE IS EXIST THEN SELECT THAT KET FOR THE ASSOCIATED OF ARRAY OF DATAS
   # THEN LOOP THE REQUEST DATA ELEMNT HTML
   if ( self::check_key_mandatory_array( SELF::CHILD_MANDATORY_KEY , $value ) ) :
    
    # SANITIZED ARRAY CHILD IF ZERO OR EMPTY CHILD !
    if( (count( $value[SELF::CHILD_MANDATORY_KEY] ) == 0 ) || ( count( $value[SELF::CHILD_MANDATORY_KEY][0] ) == 0 ) )
    {    
        
      self::errors_array_handler( $value );
      die;

      # SANITIZED ARRAY INNER AND ITS CHILD IF ZERO OR EMPTY CHILD !
      if( count( $value[SELF::CHILD_MANDATORY_KEY][0][SELF::INNER_MANDATORY_KEY] ) == 0  ) { self::errors_array_handler( $value ); }   

    }

     # FOR EACH CHILD VALUE THE LOOP AND RETURN THE DATA
     foreach (  $value[SELF::CHILD_MANDATORY_KEY] as $key => $values ) 
     {
       
       $next_child[] = self::_setGATE() . $values[0] . ' ';

       # CHECK IF THE ATTR IS NOT EMPTY AND IF IT IS ASSOCIATED OF ARRAY ?
       # THEN SINCE ATTR IS TYPE OF MASTER KEY THEN LOOP IT AS CUSTOM ATTR HTML ELEM TAGS
       if (  self::check_key_mandatory_array( SELF::ATTR_MANDATORY_KEY ,  $values ) ) 
       {
           
          # PROCESSING OF LOOPING
          foreach ($values[SELF::ATTR_MANDATORY_KEY] as $attr => $val) { $next_child[] = self::_set_tagSPACER() . $attr . self::_setES() .  self::_getDQUOTE() . $val .  self::_getDQUOTE();  }
                             
       }
       
       # SET UP THE NEXT CHILD HTML ELEMENTS # GET THE VALUE NEXT CHILD
       # GET THE NEXT CHILD INNER            # PRINT THE ATTRIBUITE ELEMEN TAG
       $next_child[] = self::_setENDGATE()
                     . self::get_values_next_child(       SELF::VALUE_MANDATORY_KEY , $values )
                     . self::get_values_next_child_inner( SELF::INNER_MANDATORY_KEY , $values )
                     . self::_setGATE().self::_setENDS() . $values[0] . self::_setENDGATE();
       
     }
     
    // COOKED THE INGREDIENTS 
    return implode("", $next_child);
  
    endif;

 }

}

static protected function get_values_next_child_inner( $getInner, $array )
{
   // set an emtpy array for tag implode
   $next_child = [];

   # IF THE KEY REQUIRE IS EXIST THEN SELECT THAT KET FOR THE ASSOCIATED OF ARRAY OF DATAS
   # THEN LOOP THE REQUEST DATA ELEMNT HTML
 if ( self::check_key_mandatory_array( $getInner , $array ) )
  {
    
    # LOOP THE ARRAY WITH DATA INTO HTML ELEMENT TAGS
    # GET THE VALUE OF THE ARRAY KEY        
    foreach ($array[$getInner] as $key => $values) 
    {

       // APPENED CHILD 
       $next_child[] = self::_setGATE() . $values[0] . ' ';
       
       # LOOP THE ATTRIBUTE OF ELEMENT HTML TAG
       # BASE ON ARRAY OF DATA
       if(  self::check_key_mandatory_array( SELF::ATTR_MANDATORY_KEY , $values ) ) {  foreach ( $values[SELF::ATTR_MANDATORY_KEY] as $attr => $val) { $next_child[] = self::_set_tagSPACER() . $attr . self::_setES() .  self::_getDQUOTE() . $val .  self::_getDQUOTE();  }}
       
       # APPEND ON THE ENDGATE HTML
       $next_child[] = self::_setENDGATE();

       # GET THE VALUE IF IS HAS SET
       if ( self::check_key_mandatory_array( SELF::VALUE_MANDATORY_KEY ,  $values  ) ) { $next_child[] = implode("",  $values[SELF::VALUE_MANDATORY_KEY] ); }
       
       # CLOSE THE HTML ELEMENT TAG
       $next_child[] = self::_setGATE().self::_setENDS() . $values[0] . self::_setENDGATE();

   }  
  
  // COOKED AND DESIGNATE THE DATA REQUEST  
  return implode("", $next_child);
       
 }
  
} 

static protected function get_values_next_child($valueKey,  $array)
{
   
  // CHECK IF THE KEY IS EXISTING THEN IMPLODE !
  if (array_key_exists($valueKey,  $array ) ) {
       
      return implode("", $array[$valueKey] );

  }

}

static private function errors_array_handler( array|string $value)
{
      
     // installing request error handler for instances
     $request    = NEW \PHPWineVanillaFlavour\Wine\System\Request();   
    
     $request->CURRENT_VALUE_REQUEST( $value );
    die;
}
/**
  *
  * @method private function noHTML
  * @static @private  Method Defined  if TRUE ELEMENT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function _istrue_assoc_ELEMENTINLINE($elem_val, $elem_key, $value, $attr, $id, $class, $label, $assoc) {
    
   # CHECK IF THE VALUE IS ARRAY AND MANDATORY KEY IS EXIST THEN CHILD KEY SET
   if ( is_array( $value ) && self::check_key_mandatory_array( SELF::CHILD_MANDATORY_KEY,  $value )  ) 
   {
     # IF PLAN OR CHILD IS TRUE ? 
     # EXECUTE THE PLAN BASE ON ARRAY KEY MANDATORY
      
      $value = self::get_value_child_optimizer( $value );
 
   } 
   
   # IF THAT IS JUST AN ARRRAY OF DATA THEN
   elseif( is_array($value) ) 
   {
   
     // EXECUTE THE PLAN
     self::errors_array_handler( $value );
     die;
 
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
   $attr = ( is_array($attr) ) ? $attr : $attr;
    

    # CHECK_IF_THE_ELEMENT_REPLACE_TO_BE_ASSOCIATED
    # SET_TO_NULL_VALUE_BY_THE_DEFAULT
    if( 
      
      /*
       * PHPWine @since version 1.1.2 
       * @since 11.06.2021  
      */
       # CHECK_ATTRIBUTES_IF_NOT_ARRAY_THEN_RETURN_APPRPRIATE
       # IF_THE_ATTRTIBUTE_SET_AS_FUNCTION_ASSOCIATED_THEN_RETURN_APPROPRIATE
       # DEFINED_ATTRIBUTE_AS_NULL

       ( !is_array($attr)  || !is_null($attr) || !empty($attr) ) &&  ( $attr  === FUNC_ASSOC || $attr  === CLASS_ASSOC || $attr  === METHOD_ASSOC )  
      
      ) :  

        # RETURN_ELEMENT_WHERE_ATTRIBITE_IS_SET_AS_NULL
        return self::_elemenHTMLINLINE($elem_val, $elem_key, $value, NULL, $id, $class, $label);   

      /*
       * PHPWine @since version 1.1.2 
       * @since 11.06.2021  
      */
       # CHECK_ID_IF_NOT_ANY_STRING_THEN_RETURN_APPRPRIATE
       # IF_THE_ID_SET_AS_FUNCTION_ASSOCIATED_THEN_RETURN_APPROPRIATE
       # DEFINED_ID_AS_NULL

      elseif(
        
        $id === FUNC_ASSOC || $id    === CLASS_ASSOC || $id    === METHOD_ASSOC 
        
        ) : 
    
        # RETURN_ELEMENT_WHERE_ID_IS_SET_AS_NULL
        return self::_elemenHTMLINLINE($elem_val, $elem_key, $value, $attr, NULL, $class, $label);

      /*
       * PHPWine @since version 1.1.2 
       * @since 11.06.2021  
      */
       # CHECK_CLASS_IF_NOT_ANY_STRING_THEN_RETURN_APPRPRIATE
       # IF_THE_CLASS_SET_AS_FUNCTION_ASSOCIATED_THEN_RETURN_APPROPRIATE
       # DEFINED_CLASS_AS_NULL
       elseif( 
         
        $class === FUNC_ASSOC || $class === CLASS_ASSOC || $class === METHOD_ASSOC 
        
        ) : 

        # RETURN_ELEMENT_WHERE_CLASS_IS_SET_AS_NULL
        return self::_elemenHTMLINLINE($elem_val, $elem_key, $value, $attr, $id, NULL, $label);   

      /*
       * PHPWine @since version 1.1.2 
       * @since 11.06.2021  
      */
       # CHECK_LABEL_IF_NOT_ANY_STRING_THEN_RETURN_APPRPRIATE
       # IF_THE_LABEL_SET_AS_FUNCTION_ASSOCIATED_THEN_RETURN_APPROPRIATE
       # DEFINED_LABEL_AS_NULL

       elseif( 
         
          $label === FUNC_ASSOC || $label === CLASS_ASSOC || $label === METHOD_ASSOC 
          
       ) : 
    
        # RETURN_ELEMENT_WHERE_LABEL_IS_SET_AS_NULL
        return self::_elemenHTMLINLINE($elem_val, $elem_key, $value, $attr, $id, $class, NULL ); 
        
       # INLINE_OR_ANY_LABEL_REQUIRED 
       # ELSEIF_ASSOCU_===_FUNC_ASSOC_||_CLASS_ASSOC_||_METHOD_ASSOC
       elseif( 
    
         $assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC 
    
       )  :

      /**
        * THEN_IF_IT_IS TRUE_RETURN!
        * @var  $elem_val, $elem_key, $value, $attr, $id, $class, $label
        * @method function _elemenHTMLINLINE()
        *
        **/
      return self::_elemenHTMLINLINE($elem_val, $elem_key, $value, $attr, $id, $class, $label );  

  # INLINE_OR_ANY_LABEL_REQUIRED
  # CHECK_IF_THE_PARAM_REQUIRED_IS_NOT_NULL
  # IF_IT_IS_NULL_RETURN_FLASE  
  elseif ( 
     
    is_array( $attr ) && ( $attr  !== FUNC_ASSOC || $attr  !== CLASS_ASSOC || $attr  !== METHOD_ASSOC)    
  
       )   :
      
       # RETURN_INLINE_ELEMENT_NO_HTML_CLOSING_TAG 
     /**
       *
       * @var $elem_val, $elem_key, $value, $attr, $id, $class, $label
       * @method function return_elementINLINE()
       *
       **/
      self::PERFORM( self::return_elementINLINE($elem_val, $elem_key, $value, $attr, $id, $class, $label) );
      
   elseif ( 
     
     $assoc == FALSE || $assoc == NULL || $assoc == 'DEFAULT' 
     
     ) :
      
    # RETURN_INLINE_ELEMENT_NO_HTML_CLOSING_TAG 
  /**
    *
    * @var $elem_val, $elem_key, $value, $attr, $id, $class, $label
    * @method function return_elementINLINE()
    *
    **/
    self::PERFORM( self::return_elementINLINE($elem_val, $elem_key, $value, $attr, $id, $class, $label) );
  
   endif;
  
} 

/**
  *
  * @method private function noHTML
  * @static @private  Method Defined  if TRUE ELEMENT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function return_elementINLINE($elem_val, $elem_key, $value, $attr, $id, $class, $label) {
   
    # IF_INLINE_ELEMENT_IS_EQUAL_TRUE_THE_RETURN_ECHO_STATIC_noHTML
    # RETURN_GET___HTML_METHOD_INCLUDED_ 
  /**
    *
    * @var | Defined var $elem_val, $elem_key, $attr, $id, $class  
    * @method function get__HTML
    *
    **/ 
   self::PERFORM( $return_elementINLINE  = self::get__HTML($elem_val, $elem_key, $attr, $id, $class) );  
   
   # WHEN_THE_LOOP_IS_TRUE_THEN
   # DO_CONTENT
   self::PERFORM( $return_elementINLINE  = (!empty($value) && $value !== NULL) ? $value : FALSE ); 
   
     # IF_INLINE_ELEMENT_IS_EQUAL_TRUE_THE_RETURN_ECHO_STATIC_noHTML
     # RETURN_GET___HTML_METHOD_INCLUDED_ 
   /**
     *
     * @var | Defined var $elem_val, $elem_key, $label  
     * @method function get_xHTML()
     *
     **/ 
   self::PERFORM( $return_elementINLINE  = self::get_xHTML($elem_val, $elem_key, $label) ); 

}

/**
  *
  * @method private function noHTML
  * @static @private  Method Defined  if newELEMENT TRUE ELEMENT TAG noHTML  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function _elemenHTMLINLINE($elem_val, $elem_key, $value, $attr, $id, $class, $label) {
   
  if ( $label == TRUE && $label === 'MAGIC') {
     
     # IF_INLINE_ELEMENT_IS_EQUAL_NEW_ELEMENT_AND_TRUE_THE_RETURN_ECHO_STATIC_noHTML
     # RETURN_GET___HTML_METHOD_INCLUDED_ 
   /**
     *
     * @var | Defined var $elem_val, $elem_key, $attr, $id, $class
     * @method function new_get__HTML();
     *
     **/ 
     
     return $return_elementINLINE = self::new_get__HTML($elem_val, $elem_key, $attr, $id, $class);  

   } elseif ($label == TRUE && $label === 'MAGIC_END') {
     
      # IF_INLINE_ELEMENT_IS_EQUAL_TRUE_THE_RETURN_ECHO_STATIC_noHTML
      # RETURN_GET___HTML_METHOD_INCLUDED_ 
    /**
      *
      * @var | Defined var $elem_val, $elem_key, $label  
      * @method function new_get__HTML();
      * 
      **/    
     return $return_elementINLINE  = self::new_get_xHTML($elem_val, $elem_key, $label); 

   } else {

      # CHECK IF THE VALUE IS ARRAY AND MANDATORY KEY IS EXIST THEN CHILD KEY SET
      if ( is_array( $value ) && self::check_key_mandatory_array( SELF::CHILD_MANDATORY_KEY,  $value )  ) 
      {
        # IF PLAN OR CHILD IS TRUE ? 
        # EXECUTE THE PLAN BASE ON ARRAY KEY MANDATORY
         
         $value = self::get_value_child_optimizer( $value );
    
      } 
      
      # IF THAT IS JUST AN ARRRAY OF DATA THEN
      elseif( is_array($value) ) 
      {
      
        // EXECUTE THE PLAN
        self::errors_array_handler( $value );
        die;
    
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
    $return_elementINLINE   = self::new_get__HTML($elem_val, $elem_key, $attr, $id, $class);  
  
  

     # WHEN_THE_LOOP_IS_TRUE_THEN
     # DO_CONTENT
     $return_elementINLINE  .= (!empty($value) && $value !== NULL) ? $value : FALSE ; 
   
     # IF_INLINE_ELEMENT_IS_EQUAL_TRUE_THE_RETURN_ECHO_STATIC_noHTML_setELEMENT
     # RETURN_GET___HTML_METHOD_INCLUDED_ 
   /**
     *
     * @var | Defined var $elem_val, $elem_key, $label  
     * @method function new_get__HTML();
     * 
     **/    
    $return_elementINLINE  .= self::new_get_xHTML($elem_val, $elem_key, $label); 
  
    # get_ELEMENT_RETURN!
    return $return_elementINLINE;

   }

}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined if get_inline__HTML assoc TRUE  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function get_inline__HTML($elem_val, $elem_key, $attr, $id, $class, $assoc) {
  
  # ÌF_ASSOC_IS_SET_AS_NULL_THEN_RETURN_DATA_SET_ECHO
  # CHECK_IF_ASSOC_IS_FALSE_NULL_DEFAULT
  if ($assoc == FALSE || $assoc == NULL || $assoc == 'DEFAULT') 
  {
       # SET_DATA_ECHO_FOR_STATIC_DISPLAY_HTML
       # IF_DATA_IS_NOT_ASSOC_WITH_CLASS_METHOD_FUNCTION
     /**
       * 
       * @method function _setELEMENT()
       * @var $elem_val, $elem_key
       * @method function _setinLINEHTMLattr
       * @var $attr, $id, $class, NULL
       *
       **/
     self::PERFORM( $get_inline__HTML  = self::_setELEMENT($elem_val, $elem_key) );
     self::PERFORM( $get_inline__HTML  = self::_setinLINEHTMLattr($attr, $id, $class, NULL) );   
  
  }
  # CHECK_ASSOC_IF_IT_IS_TRUE_THEN
  # IF_ASSOC_IS_TRUE_SET_AS_FUNC_ASSC_OR_CLASS_ASSOC_OR_MTHOD_ASSOC
  # THEN_RETURN_SET_AS_IT_IS_ASSOC_WITH_CLASS-AND_METHOD_AND_FUNCTION  
  elseif( 
    
    $assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC 
  
   ){
     /**
       *
       * SET_FUNCTION-CONCAT_THEN_RETURN
       * @method function _setELEMENT()
       * @method function _setinLINEHTMLattr
       *
       **/ 
     $get_inline__HTML   = self::_setELEMENT($elem_val, $elem_key);
     $get_inline__HTML  .= self::_setinLINEHTMLattr($attr, $id, $class, $assoc); 

     return $get_inline__HTML;    
  }
    
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined get__HTML   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function get__HTML($elem_val, $elem_key, $attr, $id, $class) {
       
      # RETURN_GET__HTML_CONTAINS_OFSET_ELEMENTS_SET_HTML_ATTR
      # SET___HTML_AS_PRINT_STATIC_HTML
    /**
      *
      * SET_FUNCTION-CONCAT_THEN_RETURN
      * @method function _setELEMENT()
      * @method function _setHTMLattr()
      *
      **/     
    self::PERFORM( $get__HTML  = self::_setELEMENT($elem_val, $elem_key) );
    self::PERFORM( $get__HTML  = self::_setHTMLattr($attr, $id, $class) );   

}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined new_get__HTML   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function new_get__HTML($elem_val, $elem_key, $attr, $id, $class) {
  
      # RETURN_GET__HTML_CONTAINS_OFSET_ELEMENTS_SET_HTML_ATTR
      # SET___HTML_AS_RETURN_DYNAMIC_ASSOC_HTML
    /**
      *
      * SET_FUNCTION-CONCAT_THEN_RETURN
      * @method function _setELEMENT()
      * @method function new_setHTMLattr()
      *
      **/      
   $get__HTML   = self::_setELEMENT($elem_val, $elem_key);
   $get__HTML  .= self::new_setHTMLattr($attr, $id, $class);   
   
   return $get__HTML;

}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined get_xHTML   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function get_xHTML($elem_val, $elem_key, $label) {
   
   # SET_VALUE_IS_TRUE_ELEMENT
   # ASIGNED-TO_SET_VAR_ELEMENT 
   $set             = self::_isTRUELEM($elem_val); 
   
   # DEFINE_ELEMENTS_AND_EMTHODS
   # ASSIGNED_GET___TAG_SET_GETENDS_RETURN-SET_ARRAY_KEY
   # EGT_x_HTML_ASSIGNED_BREAK_TAG
   $defined_htm     = self::_get_TAG().self::_getENDS()
                    
                       .$set[$elem_key]
                       .self::_getxTAG()
                       .self::_getBREAK();
   
   # CHECK_IF_LABEL_IS_TRUE_AFTER_NODE
   # IF_LABEL_IS_TRUE_THEN_RETURN_LABEL_AFTER_NODE
   # SET_COMMENTS_AS LABEL                  
   if ($label == TRUE )  {

   $defined_htm    .= self::_getCOMBEGIN()." ".$label." "
                    
                       .self::_getCOMEND()
                       .self::_getBREAK();    
   } else {

     # IF-IT_IS_FALSE_THEN
     # ELSE RETURN EMPTY_COMMENT
     self::PERFORM( "" );
   
   }
     # IF_TRUE_EXECUTE_DEFINED
     self::PERFORM( $defined_htm ); 
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined new_get_xHTML   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function new_get_xHTML($elem_val, $elem_key, $label) {
   
   $defined_htm       = "";

   $set               = self::_isTRUELEM($elem_val); 
   
   # SAMETHING_SET_AS_RETURN
   $defined_htm       = self::_get_TAG().self::_getENDS()

                       .$set[$elem_key]
                       .self::_getxTAG()
                       .self::_getBREAK();

   # CHECK_IF_LABEL_IS_TRUE_AFTER_NODE
   # IF_LABEL_IS_TRUE_THEN_RETURN_LABEL_AFTER_NODE
   # SET_COMMENTS_AS LABEL     
   if ($label == TRUE )  {
   
   $defined_htm       .= self::_getCOMBEGIN()." ".$label." "
                       
                       .self::_getCOMEND()
                       .self::_getBREAK();    
   } 
   
   # IF_DEFINE_EXECUTRE_RETURN_AS_SET
   return $defined_htm; 
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined  _setHTMLattr   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function _setHTMLattr($attr = [], $id=NULL, $class=NULL) {

      # DEFINE_STATIC_SET_RETURN_TO_HTML
    # METHOD_SET_AS_PRINT
    /**
      *
      * SET_FUNCTION-CONCAT_THEN_RETURN
      * @method function _isJStrue()
      * @method function _getxTAG()
      *
      **/     
    self::PERFORM( $_setHTMLattr  = self::_isJStrue($attr, $id, $class) );  

   if( defined('PHPWINE_BEAUTIFY') == true && PHPWINE_BEAUTIFY !== false  )  : self::PERFORM( self::_getxTAG() );
   else                                                                      : self::PERFORM( self::_getxTAG().self::_getBREAK() );
  endif;
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined  _setHTMLattr   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function new_setHTMLattr($attr = [], $id=NULL, $class=NULL) {
      
      # DEFINE_STATIC_SET_RETURN_TO_HTML
    # METHOD_sET_AS_RETURN
    /**
      *
      * SET_FUNCTION-CONCAT_THEN_RETURN
      * @method function new_isJStrue()
      * @method function _getxTAG()
      *
      **/ 
    $_setHTMLattr  = self::new_isJStrue($attr, $id, $class);
    $_setHTMLattr .= self::_getxTAG().self::_getBREAK();

    return $_setHTMLattr;
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined  _setinLINEHTMLattr  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function _setinLINEHTMLattr($attr = [], $id=NULL, $class=NULL, $assoc=NULL) {
   
  # CHECK_IF_ASSOC_IS_NULL_OR_FLASE_DEFAULT
  # IF_ASSOC_IS_FALSE_THEN_SET_AS_PRINT_STATIC  
  if ($assoc == FALSE || $assoc == NULL || $assoc === 'DEFAULT') 
  {
      
      # DEFINE_STATIC_SET_AS_PRINT
    /**
      *
      * SET_FUNCTION-CONCAT_THEN_RETURN
      * @method function _isJStrue()
      * @method function _set_tagSPACER()
      *
      **/     
    self::PERFORM( $_setinLINEHTMLattr = self::_isJStrue($attr, $id, $class) );
    self::PERFORM( $_setinLINEHTMLattr = self::_set_tagSPACER().self::_setENDS().self::_getxTAG().self::_getBREAK() );  

  } /**
      *
      * SET_FUNCTION-CONCAT_THEN_RETURN
      * @method function isJStrue_assoc()
      * @method function _set_tagSPACER_setENDS_getxTAG_getBREAK
      *
      **/     
  elseif( 

  $assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC 

   ) {

# ELSE_CHECK_IF_THE_ASSOC_IS_TRUE_OR_FUNC_ASSOC_OR_CLASS_ASSOC_METHOD_ASSOC
# SET_AS_DYNAMIC_ASSOCIATED_WITH_METHOD_CLASS_FUNC_ASSOC      
$_setinLINEHTMLattr  = self::isJStrue_assoc($attr, $id, $class, $assoc);
$_setinLINEHTMLattr .= self::_set_tagSPACER().self::_setENDS().self::_getxTAG().self::_getBREAK();  

return $_setinLINEHTMLattr;  

}
   
}

/**
  *
  * @method protected function aut file form type
  * @static @protected Method Defined  auto form type  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function formType( $attr, $type, $typeValue )
{
 
/**
  * @static @protected Method Defined  auto form type  
  * CHECK IF THE PARAMETER IS SET TO ANY ASSOCIATED THEN RETURN APPROPRIATE
  * @since v1.1.2
  **/
 if(  $attr === FUNC_ASSOC  ||  $attr === METHOD_ASSOC ||  $attr === CLASS_ASSOC  ) : return [[$type,  FUNC_ASSOC ],[ $typeValue, '' ]];

/**
  * @static @protected Method Defined  auto form type  
  * CHECK IF THE PARAMETER IS nNOT SET TO ANY ASSOCIATED AND NOT ARRAY ! THEN RETURN APPROPRIATE
  * @since v1.1.2
  **/ 
  elseif( (  !isset( $attr ) || is_null( $attr ) || empty( $attr ) ) ||  (!is_array( $attr ) && ( $attr  !== FUNC_ASSOC || $attr  !== CLASS_ASSOC || $attr  !== METHOD_ASSOC )) ) : return [[ $type ],[ $typeValue ]];  
   else :

/**
  * @static @protected Method Defined  auto form type  
  * GO TO PUSH
  * @since v1.1.2
  **/ 
    $attr   = $attr;  
    array_push($attr[0], $type);
    array_push($attr[1], $typeValue);
    
    return $attr;

endif;

}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined  isJStrue_assoc  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function isJStrue_assoc($attr, $id, $class, $assoc) {

  # CHECKK_IF_JS-ASSOC_IS_TRUE_THE_RETURN_SET_AS_PRINT
  # IF_ASSOC_IS_FALSE_IF_IS_NULL_IF_IS_DEFAULT  
  if ($assoc == FALSE || $assoc == NULL || $assoc == 'DEFAULT') 
  {  
     # RETURN_DEFAULT_SET_PRINT_DO_EXECUTE
   /**
     *
     * SET_FUNCTION-CONCAT_THEN_RETURN
     * @method function new_isJStrue
     *
     **/      
     $attr_false = self::_isJStrue($attr, $id, $class);
     self::PERFORM( $attr_false );
  } 
    # ELSE_IF_IT_IS_NOT_NULL_NOT_FALSE_NOT_DEFAULT_OR_IT_IS_SET_AS_TRUE_THEN
    # CHECK_IF_IT_IS_FUNCASSOC_CLASSASSOC_METHOD_ASSOC_THE_SET_RETURN
  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function new_isJStrue
    *
    **/   
  elseif( $assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC ) { 

     return self::new_isJStrue($attr, $id, $class);    
  
  }

}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined  _isJStrue  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function _isJStrue($attr, $id, $class) {
  
  # SET_STATIC_PRINT_IF_THE_JS_IS_NOT_ASSOC_WITH_METHOD
  # CHECK_IF_PARAM_JS_HAVE_TRUE_THEN  
  if ( $attr == TRUE ) 
    {
        
       # GET_ARRAY_OF_DATA_FROM_APPS_ATT
     /**
       *
       * SET_FUNCTION-CONCAT_THEN_RETURN
       * @method function apps_att
       *
       **/          
       $apps_attributes = self::apps_att($attr);
       
       # GET_DATA_OF_ASSOCIATED_OF_ARRAY_FOR_EACH_DATA_COMBINE
       # IF_THE_JS_RETURN_TRUE_THEN_LOOP_COMBINE_DATA
       foreach ( $apps_attributes as $attr_name => $attr_value )  
       {
         
         # SET_PRINT_DATA_STATIC_LOOPING  
         self::PERFORM( self::_tagSPACER().$attr_name
      
                      .self::_getES()
                      .self::_getDQUOTE()
      
                      .$attr_value
      
                      .self::_getDQUOTE()
                      .self::_tagSPACER() );
        }
    }
    
    # SET_JOIN_HTML_ATTRIBUTE_AT_THE_SAME_TIME
  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function html_attr
    *
    **/        
    self::PERFORM( $html_attributes = self::html_attr($id, $class) );
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined  _isJStrue  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function new_isJStrue($attr, $id, $class) {
   
  # SET_EMPTY_ARRAY_OF_DATA_IF_DATA_IS_ASSOC
  # CHECK_DATA_IF_ASSOC_WITH_METHOD_AND_CLASS 
  $htmlattr = [];
  
  # SET_STATIC_PRINT_IF_THE_JS_IS_NOT_ASSOC_WITH_METHOD
  # CHECK_IF_PARAM_JS_HAVE_TRUE_THEN
  if ( $attr == TRUE ) 
    {
        # GET_ARRAY_OF_DATA_FROM_APPS_ATT_COMBINE
      /**
        *
        * SET_FUNCTION_CONCAT_THEN_RETURN
        * @method function apps_att
        *
        **/  
        $apps_attributes = self::apps_att($attr);

        foreach ( $apps_attributes as $attr_name => $attr_value )  
        {
         
         # SET_RETUNR_DATA_EMPTY_ARRAY
         $htmlattr[] = self::_tagSPACER().$attr_name
                      
                      .self::_getES()
                      .self::_getDQUOTE()
   
                      .$attr_value
                      
                      .self::_getDQUOTE()
                      .self::_tagSPACER();
        }
    }

    # SET_JOIN_HTML_ATTRIBUTE_AT_THE_SAME_TIME
  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function new_html_attr
    *
    **/      
    $html_attributes = self::new_html_attr($id, $class);
    
    #THE_RETURN_DATA_OF_ARRAY_WITH_ASSOC-IN_CLASS_METHOD
    return implode('', $htmlattr).$html_attributes;
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined  _setELEMENT  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function _setELEMENT($_variable, $set_tag) {
   # CHECK_ELEMENT_IF_IT_IS_TRUE
   # SET_RETURN_IF_TRUE
  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function _isTRUELEM
    * @method function _get_TAG
    *
    **/     
   $set =  self::_isTRUELEM($_variable);
   return  self::_get_TAG().$set[$set_tag];

}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined  apps_att  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function apps_att($attr = []) {
    
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
    return array_combine($set_apps_names, $set_apps_value); 
}

/**
  *
  * @method private function HtmlELements_Optimizer noHTML
  * @ @private Method Defined new_html_attr 
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function HtmlELements_Optimizer($inline, $elem, $attr, $id, $class, $assoc) {
  
    /*
    * PHPWine @since version 1.1.2 
    * @since 11.06.2021  
    */
    $attr   = ( is_array($attr) ) ? $attr : $attr ;  
  
    # CHECK_IF_THE_ELEMENT_REPLACE_TO_BE_ASSOCIATED
    # SET_TO_NULL_VALUE_BY_THE_DEFAULT
    if (
      
       isset($attr[0][1]) === 'FUNC_ASSOC' 
       
    )  : 
      
      /*
       * PHPWine @since version 1.1.2 
       * @since 11.06.2021  
      */
       # CHECK_ATTRIBUTES_IF_NOT_ARRAY_THEN_RETURN_APPRPRIATE
       # IF_THE_ATTRTIBUTE_SET_AS_FUNCTION_ASSOCIATED_THEN_RETURN_APPROPRIATE
       # DEFINED_ATTRIBUTE_AS_NULL

      $type   =  'type';
      $value  =  implode( $attr[1]);
      $attr   =  [[$type],[$value]];

     # RETURN_ELEMENT_WHERE_ATTRIBITE_IS_SET_AS_TRUE-CBASE-TYPE
      return  self::_setReturnINLINELEMENT(self::_setINLINELEMENTS($elem), $attr , $id , $class, METHOD_ASSOC );

      /*
       * PHPWine @since version 1.1.2 
       * @since 11.06.2021  
      */
       # CHECK_ID_IF_NOT_ANY_STRING_THEN_RETURN_APPRPRIATE
       # IF_THE_ID_SET_AS_FUNCTION_ASSOCIATED_THEN_RETURN_APPROPRIATE
       # DEFINED_ID_AS_NULL
    elseif( 
    
        $id === FUNC_ASSOC || $id    === CLASS_ASSOC || $id    === METHOD_ASSOC
     
    )  :  
    
    # RETURN_ELEMENT_WHERE_ID_IS_SET_AS_NULL
    return  self::_setReturnINLINELEMENT(self::_setINLINELEMENTS($elem), $attr , NULL , $class, METHOD_ASSOC );


      /*
       * PHPWine @since version 1.1.2 
       * @since 11.06.2021  
      */
       # CHECK_CLASS_IF_NOT_ANY_STRING_THEN_RETURN_APPRPRIATE
       # IF_THE_CLASS_SET_AS_FUNCTION_ASSOCIATED_THEN_RETURN_APPROPRIATE
       # DEFINED_CLASS_AS_NULL

    elseif( 
      
      $class === FUNC_ASSOC || $class === CLASS_ASSOC || $class === METHOD_ASSOC 
      
    )  :  
    
        # RETURN_ELEMENT_WHERE_CLASS_IS_SET_AS_NULL
    return  self::_setReturnINLINELEMENT(self::_setINLINELEMENTS($elem), $attr , $id, NULL , METHOD_ASSOC );
    
      /*
       * PHPWine @since version 1.1.2 
       * @since 11.06.2021  
      */
       # CHECK_CLASS_IF_NOT_ANY_STRING_THEN_RETURN_APPRPRIATE
       # IF_THE_CLASS_SET_AS_FUNCTION_ASSOCIATED_THEN_RETURN_APPROPRIATE
       # DEFINED_CLASS_AS_NULL
     elseif(  
       
      $assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC 
      
      ) :

      # INLINE_OR_ANY_LABEL_REQUIRED
      # CHECK_IF_THE_PARAM_REQUIRED_IS_NOT_NULL
      # IF_IT_IS_NULL_RETURN_FLASE   

      # RETURN_INLINE_ELEMENT_NO_HTML_CLOSING_TAG 
      return  self::_setReturnINLINELEMENT(self::_setINLINELEMENTS($elem),$attr, $id, $class, $assoc);      
   
    # INLINE_OR_ANY_LABEL_REQUIRED
    # CHECK_IF_THE_PARAM_REQUIRED_IS_NOT_NULL
    # IF_IT_IS_NULL_RETURN_FLASE 
     elseif(
       
       $assoc == FALSE || $assoc == NULL || $assoc == 'DEFAULT'
       
    )  :          
      
      # INLINE_OR_ANY_LABEL_REQUIRED
      # CHECK_IF_THE_PARAM_REQUIRED_IS_NOT_NULL
      # IF_IT_IS_NULL_RETURN_FLASE  
      self::PERFORM(self::HtmlELements_Optimizer_error_handler( $inline, $elem ));  
    
      # RETURN_INLINE_ELEMENT_NO_HTML_CLOSING_TAG 
      self::PERFORM( self::_setReturnINLINELEMENT(self::_setINLINELEMENTS($elem),$attr, $id, $class, NULL) ); 

     endif; 

}

static private function  HtmlELements_Optimizer_error_handler( $inline, $elem )
{
  if ( ($inline == FALSE || $inline == NULL) && ($elem == FALSE || $elem == NULL) ) 
  {
    
  # RETURN_REQUIRED_FIELD_PARAM
  # IF_FALSE_RUN_IF_TRUE    

  $ERROR_MSG  = " ";
  $ERROR_MSG .= " Required _Element 'inLINE' & HTML Element : e.g: _ELEMENT('INLINE','input') <br />";
  $ERROR_MSG .= " For Developer support visit github submit issue: ".self::ELEMENT('a','Submit Github Support',self::IssueSubmitAttr()) . "<br />";   
  $ERROR_MSG .= " Recomendation: ".self::ELEMENT('a','Read Documentation Click Here',self::DocxSubmitAttr()) . "<br />";        

  return ($ERROR_MSG);  


  }
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined html_attr  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function html_attr($id=null, $class=null) {
   
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
   if ($id == TRUE && $class == TRUE)         {   self::PERFORM(  self::_tagSPACER().self::have_id_class($id, $class) ); 
   }  

  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function haveId
    *
    **/       
    elseif ($id == TRUE  && $class == FALSE )  {   self::PERFORM(  self::_tagSPACER().self::haveId($id) );
   }

 /**
   *
   * SET_FUNCTION-CONCAT_THEN_RETURN
   * @method function haveClass
   *
   **/       
   elseif ($id == FALSE && $class == TRUE  )    {   self::PERFORM(  self::_tagSPACER().self::haveClass($class) ); 
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
  * @static @private Method Defined new_html_attr 
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function new_html_attr($id=null, $class=null) {
   
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
   if ($id == TRUE && $class == TRUE)          {   return  self::_tagSPACER().self::have_id_class($id, $class); 
   } 

  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function haveId | METHOD_ASSOC
    *
    **/ 
   elseif ($id == TRUE  && $class == FALSE )   {   return  self::_tagSPACER().self::haveId($id);
   }  

  /**
    *
    * SET_FUNCTION-CONCAT_THEN_RETURN
    * @method function haveClass | METHOD_ASSOC
    *
    **/ 
   elseif ($id == FALSE && $class == TRUE  )   {   return  self::_tagSPACER().self::haveClass($class); 
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
  * @static @private Method Defined _isTRUELEM 
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static protected function _isTRUELEM($elements) {
   
   if ($elements == 'PRIMARY')            
    {
      return  self::$htm; 
    } 

   /**
     *
     * @var elements 
     * @method _isTRUELEM
     * RETURN NODE HTML _ noHTML TAG
     *
     **/
    elseif  ($elements == 'SECONDARY') 
    {
      return  self::$htm_s; 
    } 

   /**
     *
     * @var elements 
     * @var $htm_ss 
     * @method _isTRUELEM
     * RETURN NODE HTML _ noHTML TAG
     *
     **/
    elseif  ($elements == 'SUPPORT')   
    {
      return  self::$htm_ss;  
    }

   /**
     *
     * @var elements 
     * @var $htm_t
     * @method _isTRUELEM
     * RETURN NODE HTML _ noHTML TAG
     *
     **/ 
    elseif  ($elements == 'LIST')      
    {
      return  self::$htm_t;   
    } 

   /**
     *
     * @var elements 
     * @var $htm_f
     * @method _isTRUELEM
     * RETURN NODE HTML _ noHTML TAG
     *
     **/
    elseif  ($elements == 'FORMAT')    
    {
      return  self::$htm_f; 
    }

   /**
     *
     * @var elements
     * @var $htm_fc 
     * @method _isTRUELEM
     * RETURN NODE HTML _ noHTML TAG
     *
     **/
     elseif  ($elements == 'FORMATC')   
    {
      return  self::$htm_fc;    
    } 

   /**
     *
     * @var elements 
     * @var $htm_L
     * @method _isTRUELEM
     * RETURN NODE HTML _ noHTML TAG
     *
     **/

    elseif  ($elements == 'INLINE')    
    {
      return  self::$htm_L;     
    } 

   /**
     *
     * @var elements
     * @var $htm_st 
     * @method _isTRUELEM
     * RETURN NODE HTML _ noHTML TAG
     *
     **/
    elseif  ( $elements == 'STRUCTURE') 
    {
      return  self::$htm_st;
    }
} 

/**
  *
  * @method private function noHTML
  * @static @private Method Defined haveClass   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function haveClass($class) {

 return  $gethtml_attr = "class".self::_getES().self::_getDQUOTE().$class.self::_getDQUOTE()."";
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined haveId   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function haveId($id) {

 return  $gethtml_attr = "id".self::_getES().self::_getDQUOTE().$id.self::_getDQUOTE()."";
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined have_id_class   
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function have_id_class($id, $class) {
  
  # IF_HAVE_CLASS_RETURN_VALUE_SET
  # CHECK_IF_BOTH_PARA_IS_TRUE  
  $gethtml_attr   = "id".self::_getES().self::_getDQUOTE().$id.self::_getDQUOTE().self::_tagSPACER()."";
  $gethtml_attr  .= "class".self::_getES().self::_getDQUOTE().$class.self::_getDQUOTE()."";

  return $gethtml_attr;
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined _isTrueBREAK_assoc  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function _isTrueBREAK_assoc($assoc) {
  
  if ($assoc == NULL || $assoc == FALSE || $assoc == 'DEFUALT') 
   {
     
    # CHECK_IF_aSSOC_IS_NOT_TRUE_OR_IF_IT_IS_FALSE
    # SET_AS_PRINT_STATIC_HTML 
    self::PERFORM( self::_get_TAG().self::_doBREAK().self::_tagSPACER().self::_getENDS().self::_getxTAG().self::_getBREAK() ); 
   } 

    # ELSE_IF_THE_ASSOC_PARA_IS_TRUE_THEN_SET_RETURN 
    elseif ($assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC) {
    # RETURN_METHOD_ASSOC
    return self::_get_TAG().self::_doBREAK().self::_tagSPACER().self::_getENDS().self::_getxTAG().self::_getBREAK();       
   }
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined _isTrueLine_assoc  
  * RETURN NODE HTML _ noHTML TAG
  *
  **/
static private function _isTrueLine_assoc($assoc) {
  
  if ($assoc == NULL || $assoc == FALSE || $assoc == 'DEFUALT') 
   {

    # CHECK_IF_aSSOC_IS_NOT_TRUE_OR_IF_IT_IS_FALSE
    # SET_AS_PRINT_STATIC_HTML    
    self::PERFORM( self::_get_TAG().self::_makeLine().self::_tagSPACER().self::_getENDS().self::_getxTAG().self::_getBREAK() );
      
   } 
    
    # ELSE_IF_THE_ASSOC_PARA_IS_TRUE_THEN_SET_RETURN 
    elseif ($assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC) {
    # RETURN_METHOD_ASSOC
    return self::_get_TAG().self::_makeLine().self::_tagSPACER().self::_getENDS().self::_getxTAG().self::_getBREAK();      
   
   }
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined __magicELSE() // use alternaive if else statement inside function
  *
  **/
static private function return_method_concat_else($con,$res1,$res2,$as) {
 
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
  if ( ($assoc == TRUE || $assoc !== NULL) && ($assoc === FUNC_ASSOC || $assoc === METHOD_ASSOC || $assoc === CLASS_ASSOC) ) 
  {
    
    if ($condition_statements) 
    {  return $get_if_result_;   } else  { return $get_else_result_; }      
 
  } elseif ($assoc == FALSE || $assoc == NULL ) {
     
    if ($condition_statements) 
    {  self::PERFORM($get_if_result_); } else { self::PERFORM($get_else_result_); } 
  }

} 

/**
  *
  * @method private function noHTML
  * @static @private Method Defined __magicELSE() // use alternaive if else statement inside function
  *
  **/
static private function return_method_concat_if($con,$res1,$as) {
 
  # SET_FOR_IF_CONDITION  
  $condition_statements = $con;
  
  # SET_FOR_IF_RESULT
  $get_if_result_       = $res1;
  
  # SET_FANC_ASSOC
  $assoc                = $as;
  
  # CHECK_IF_THE_FUNCTION_IS_WITHIN_METHOD
  # THEN SET RETURN
  if ( ($assoc == TRUE || $assoc !== NULL) && ($assoc === FUNC_ASSOC || $assoc === METHOD_ASSOC || $assoc === CLASS_ASSOC) ) 
  {
    
    if ($condition_statements) 
    {  return $get_if_result_;   }      
 
  } elseif ($assoc == FALSE || $assoc == NULL ) {
     
    if ($condition_statements) 
    {  self::PERFORM($get_if_result_); } 
  }

} 

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _getBREAK
  *
  **/
static protected function _getBREAK()      { 

   # SET_RETURN_PRIVATE_PROPERTY_GET_VALUE_ARRAY_ZERO
   /**
     *
     * @var $hBreak
     * @var private property array() 
     * @method ""
     *
     **/   
  return self::doMinified( self::$hBreak[0] );
  
  }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _doBREAK 
  *
  **/
static protected function _doBREAK()       { 

   # SET_RETURN_PRIVATE_PROPERTY_GET_VALUE_ARRAY_ONE
   /**
     *
     * @var $hBreak
     * @var private property array() 
     * @method ""
     *
     **/  
    return  self::$hBreak[1] ;    }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _makeLine 
  *
  **/
static protected function _makeLine()      { 

   # SET_RETURN_PRIVATE_PROPERTY_GET_VALUE_ARRAY_TWO
   /**
     *
     * @var $hBreak
     * @var private property array() 
     * @method ""
     *
     **/    
    return  self::$hBreak[2] ;    }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _getSQUOTE 
  *
  **/
static protected function _getSQUOTE()     { 

   /**
     *
     * @var private property \
     * @method _setSQ()
     *
     **/  
    return self::_setSQ();      }
static private function _setSQ()         { 
   /**
     *
     * @var private property $sq
     *
     **/  
    return self::$sq = '\'';    }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _getDQUOTE 
  *
  **/
static protected function _getDQUOTE()     { 

   /**
     *
     * @var private property \ 
     * @method _setDQ()
     *
     **/  
    return self::_setDQ();      }
static private function _setDQ()         { 
   
   /**
     *
     * @var private property $dq 
     *
     **/
    return self::$dq = "\"";    }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _getxTAG 
  *
  **/
static protected function _getxTAG()   { 

   /**
     *
     * @var private property >
     * @method _setENDGATE()
     *
     **/  
    return self::_setENDGATE();     }
static private function _setENDGATE()    { 

   /**
     *
     * @var private property $lt
     *
     **/  
    return self::$lt = ">";         }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _get_TAG 
  *
  **/
static protected function _get_TAG()    { 

   /**
     *
     * @var private property >
     * @method _setGATE
     *
     **/
    return self::_setGATE();        }
static private function _setGATE()       { 
   
   /**
     *
     * @var private property $gt
     *
     **/
    return self::$gt = "<";         }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _getES 
  *
  **/
static protected function _getES()         { 

   /**
     *
     * @var private property =  
     * @method  _setES
     *
     **/  
    return self::_setES();          }
static private function _setES()         { 

   /**
     *
     * @var private property $es
     *
     **/
    return self::$es = "=";         }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _getENDS
  *
  **/
static protected function _getENDS()       { 

   /**
     *
     * @var private property / 
     * @method  _setES
     *
     **/  
    return self::_setENDS();        }
static private function _setENDS()       { 

   /**
     *
     * @var private property $ends
     *
     **/
    return self::$ends = "/";       }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _tagSYMBOL
  *
  **/
static private function _tagSYMBOL()     { 

   /**
     *
     * @var private property !
     * @method  _set_exSYMBOL()
     *
     **/
    return self::_set_exSYMBOL();   }
static private function _set_exSYMBOL()  { 

   /**
     *
     * @var private property $exSymbol
     *
     **/  
    return self::$exSymbol = "!";   }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _getCOMEND
  *
  **/
static protected function _getCOMEND()     {

   /**
     *
     * @var private property -->
     * @method  _setCOMEND
     *
     **/ 
    return self::_setCOMEND();      } 
static private function _setCOMEND()     {

   /**
     *
     * @var private property $comEND
     *
     **/  
    return self::$comEND = "-->";   }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _getTRING
  *
  **/
static protected function _getTRING($str)  { 

   /**
     *
     * @method  _setSTRING
     *
     **/  
    return self::_setSTRING($str);  } 
static private function _setSTRING($str) {

   /**
     *
     * @var private property $str
     *
     **/
    return self::$str = $str;   }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _tagSPACER
  *
  **/
static protected function _tagSPACER()     { 

   /**
     *
     * @method  _set_tagSPACER
     *
     **/    
    return self::_set_tagSPACER();  }
static private function _set_tagSPACER() {

   /**
     *
     * @var private property $sHTML
     *
     **/
    return self::$sHTML = " ";
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _getCOMBEGIN
  *
  **/
static protected function _getCOMBEGIN() { 

   /**
     *
     * @method  _set_tagSPACER
     *
     **/  
     return self::_setCOMBEGIN();  }
static private function _setCOMBEGIN() { 

   /**
     *
     * @var private property $sHTML
     *
     **/
     return self::$comBEGIN = self::_get_TAG().self::_tagSYMBOL()."--";
}

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _isTrue_SET_STRING
  *
  **/
static private function _isTrue_SET_STRING($str=null, $assoc=null) {

   if ($assoc == NULL || $assoc == FALSE || $assoc == 'DEFUALT') 
   {

     echo  ( self::_getTRING($str) );
   
   } 
   
   # CHECK_IF_INLINE_IS_ASSOC_WITH_FUNC_ASSOC_OR_CLASS_ASSOC_OR_METHOD_ASSOC
   elseif ($assoc === FUNC_ASSOC || $assoc === CLASS_ASSOC || $assoc === METHOD_ASSOC) 
   { 
   
     return ( self::_getTRING($str) );  
   
   } 
 
 }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _isTrue_SET_STRING
  *
  **/
static private function _isTrue_SET_Merge($argument) {
    
    #_GET_RESUKT_SET_AS_RETURN_TO_MERGE
    return !empty($argument) && $argument !== NULL ? $argument : FALSE;

 }

// Attrbute for redirect github submit issue 
static private function IssueSubmitAttr() {

    return $sets = [
         
      $attr_name = ['href'],
      $attr_val  = ['https://github.com/nielsofficeofficial/PHPHtml-Optimizer/issues']
        
   ];
}

// Attrbute for redirect github submit issue 
static private function DocxSubmitAttr() {

    return $sets = [
         
      $attr_name = ['href'],
      $attr_val  = ['https://github.com/nielsofficeofficial/PHPHtml-Optimizer']
        
   ];
}

/**
  *
  * @method protected function Validate_extension_file_Img
  * @static @protected Method Defined IMAGE FILE EXTENSION
  *
  **/
static protected function Validate_extension_assets_files($Extension__) {
  
  // GET_ALL_AVAILABLE_EXTENSION_FILES 
  $currentSet_Ext     = self::__FILEEXTENSION__;

  // SET_DONT_EXTENSION_POINT
  $InsertDotOperation = '.';

  // CHECK_IF_THE_CONSTANT_KEY_IS_IN_ARRAY
  if ($getArray = array_key_exists($Extension__, $currentSet_Ext))  
  {
      
      // IF_KEY_IS_TRUE_OR_IN_ARRAY
      // RETURN_SELECTED_KET_CCORDING_TO_PARAM
      foreach ($currentSet_Ext as $SetExtensionKey__ => $SetExtensionValue__) 
      {
        
        // IF_IT_IS_TRUE_THEN_GET_ARRAY
        if ( $SetExtensionKey__ === $Extension__ ) 
        {
         
         // STORE_AND_DO_MERGE 
         $merge = $InsertDotOperation.$SetExtensionValue__;
         
         // RETURN_MERGE_VARIABLE
         return $merge;
         break;

        } 
      
      }
  
  } else {

      self::PERFORM('Extention is not yet registered or undefine!').self::BREAK();
      self::PERFORM('For Developer support visit github submit issue: '.self::ELEMENT('a','Submit Github Support',self::IssueSubmitAttr())); 
      self::PERFORM('Recomendation: '.self::ELEMENT('a','Read Documentation Click Here',self::DocxSubmitAttr()));     
      exit();
    
  }
  
}  

 /**
  *
  * @method private function Set_Element_Header_Attr noHTML
  * @ @private Method Defined HTML return element array
  *
  **/
static private function Set_Element_Attr($attr_name,$attr_val) {

    return $Set_Element_Header_Attr = [

      $attr_name = $attr_name,
      $attr_val  = $attr_val  

    ];

}

/**
  *
  * @method private function doMinified
  * @private Method Defined set to TRUE to make minified HTML
  * @since 1.31.2022
  *
  **/
  static private function doMinified( $html_optimized ) {
   
    if( defined('PHPWINE_MINIFIED') == true && PHPWINE_MINIFIED !== false  )  : return false; 
    else                                                                      : return $html_optimized; 
   endif;
  
  }

/**
  *
  * @method private function noHTML
  * @static @private Method Defined HTML FOUNDATION _setELEMENTS
  *
  **/
static protected function _setELEMENTS($elem) {
  
   if ($elem === 'p' || $elem === 'P' || $elem === 'parangrap' || $elem === 'PARANGRAP' || $elem === 'para' || $elem === 'PARA' ) { return $elem = 'p'; } 
  /*  @var SET RETURN ELEMT_AS_DIV */ elseif ($elem === 'div' || $elem === 'DIV') { return $elem = 'div';  } 
  /*  @var SET RETURN ELEMT_AS_H1 */  elseif ($elem === 'h1'  || $elem === 'H1' ) { return $elem = 'h1';   } 
  /*  @var SET RETURN ELEMT_AS_H2 */  elseif ($elem === 'h2'  || $elem === 'H2' ) { return $elem = 'h2';   } 
  /*  @var SET RETURN ELEMT_AS_H3 */  elseif ($elem === 'h3'  || $elem === 'H3' ) { return $elem = 'h3';   } 
  /*  @var SET RETURN ELEMT_AS_H4 */  elseif ($elem === 'h4'  || $elem === 'H4' ) { return $elem = 'h4';   } 
  /*  @var SET RETURN ELEMT_AS_H5 */  elseif ($elem === 'h5'  || $elem === 'H5' ) { return $elem = 'h5';   } 
  /*  @var SET RETURN ELEMT_AS_H6 */  elseif ($elem === 'h6'  || $elem === 'H6' ) { return $elem = 'h6';   } 
  /*  @var SET RETURN ELEMT_AS_BUTTON */ elseif ($elem === 'button' || $elem === 'BUTTON' ) { return $elem = 'button'; } 
  /*  @var SET RETURN ELEMT_AS_LINK */   elseif ($elem === 'a' || $elem === 'A' || $elem == 'LINK' || $elem === 'hyperlink' || $elem === 'HYPERLINK') { return $elem = 'a';} 
  /*  @var SET RETURN ELEMT_AS_IFRAME */ elseif ($elem === 'iframe' || $elem === 'IFRAME' ) { return $elem = 'iframe'; } 
  /*  @var SET RETURN ELEMT_AS_MAIN */ elseif ($elem === 'main'   || $elem === 'MAIN' ) { return $elem = 'main'; } 
  /*  @var SET RETURN ELEMT_AS_NAV */ elseif ($elem === 'nav' || $elem === 'NAV' || $elem === 'NAVIGATION' ) { return $elem = 'nav'; } 
  /*  @var SET RETURN ELEMT_AS_SELECT */ elseif ($elem === 'select' || $elem === 'SELECT' ) { return $elem = 'select'; } 
  /*  @var SET RETURN ELEMT_AS_FORM */ elseif ($elem === 'form'   || $elem === 'FORM' ) { return $elem = 'form'; } 
  /*  @var SET RETURN ELEMT_AS_PICTURE */ elseif ($elem === 'picture'  || $elem === 'PICTURE' ) { return $elem = 'picture'; } 
  /*  @var SET RETURN ELEMT_AS_SECTION */ elseif ($elem === 'section'  || $elem === 'SECTION' ) { return $elem = 'section'; } 
  /*  @var SET RETURN ELEMT_AS_TEXTAREA */ elseif ($elem === 'textarea' || $elem === 'TEXTAREA' ) { return $elem = 'textarea'; } 
  /*  @var SET RETURN ELEMT_AS_AUDIO */  elseif ($elem === 'audio' || $elem === 'AUDIO' ) { return $elem = 'audio'; } 
  /*  @var SET RETURN ELEMT_AS_VIDEO */  elseif ($elem === 'video' || $elem === 'VIDEO' ) { return $elem = 'video'; } 
  /*  @var SET RETURN ELEMT_AS_ADDRESS */ elseif ($elem === 'address'  || $elem === 'ADDRESS' ) { return $elem = 'address'; } 
  /*  @var SET RETURN ELEMT_AS_COLGROUP */ elseif ($elem === 'colgroup' || $elem === 'COLGROUP' ) { return $elem = 'colgroup'; } 
  /*  @var SET RETURN ELEMT_AS_BDI */ elseif ($elem === 'bdi' || $elem === 'BDI' ) { return $elem = 'bdi'; } 
  /*  @var SET RETURN ELEMT_AS_BDO */ elseif ($elem === 'bdo' || $elem === 'BDO' ) { return $elem = 'bdo'; } 
  /*  @var SET RETURN ELEMT_AS_BLOCKQUOTE */ elseif ($elem === 'blockquote' || $elem === 'BLOCKQUOTE' ) { return $elem = 'blockquote'; } 
  /*  @var SET RETURN ELEMT_AS_CAPTION */ elseif ($elem === 'caption' || $elem === 'CAPTION' ) { return $elem = 'caption'; } 
  /*  @var SET RETURN ELEMT_AS_LABEL */ elseif ($elem === 'label' || $elem === 'LABEL' ) { return $elem = 'label'; } 
  /*  @var SET RETURN ELEMT_AS_DATALIST */ elseif ($elem === 'datalist' || $elem === 'DATALIST' ) {  return $elem = 'datalist'; } 
  /*  @var SET RETURN ELEMT_AS_DETAILS */ elseif ($elem === 'details' || $elem === 'DETAILS' ) { return $elem = 'details'; } 
  /*  @var SET RETURN ELEMT_AS_SUMMARY */ elseif ($elem === 'summary' || $elem === 'SUMMARY' ) { return $elem = 'summary'; } 
  /*  @var SET RETURN ELEMT_AS_DIALOG */ elseif ($elem === 'dialog' || $elem === 'DIALOG' ) { return $elem = 'dialog'; } 
  /*  @var SET RETURN ELEMT_AS_OPTION */ elseif ($elem === 'option' || $elem === 'OPTION' ) { return $elem = 'option'; } 
  /*  @var SET RETURN ELEMT_AS_FIGURE */ elseif ($elem === 'figure' || $elem === 'FIGURE' ) { return $elem = 'figure'; } 
  /*  @var SET RETURN ELEMT_AS_FIGCAPTION */ elseif ($elem === 'figcaption' || $elem === 'FIGCAPTION' ) { return $elem = 'figcaption'; } 
  /*  @var SET RETURN ELEMT_AS_METER */ elseif ($elem === 'meter' || $elem === 'METER' ) { return $elem = 'meter'; } 
  /*  @var SET RETURN ELEMT_AS_OBJECT */ elseif ($elem === 'object' || $elem === 'OBJECT' ) { return $elem = 'object'; } 
  /*  @var SET RETURN ELEMT_AS_OPTGROUP */ elseif ($elem === 'optgroup' || $elem === 'OPTGROUP' ) { return $elem = 'optgroup'; } 
  /*  @var SET RETURN ELEMT_AS_OUTPUT */ elseif ($elem === 'output' || $elem === 'OUTPUT' ) { return $elem = 'output'; } 
  /*  @var SET RETURN ELEMT_AS_PROGRESS */ elseif ($elem === 'progress' || $elem === 'PROGRESS' ) { return $elem = 'progress'; } 
  /*  @var SET RETURN ELEMT_AS_SVG */ elseif ($elem === 'svg' || $elem === 'SVG' ) { return $elem = 'svg'; } 
  /*  @var SET RETURN ELEMT_AS_TEMPLATE */ elseif ($elem === 'template' || $elem === 'TEMPLATE' ) { return $elem = 'template'; } 
  /*  @var SET RETURN ELEMT_AS_TIME */ elseif ($elem === 'time' || $elem === 'TIME' ) { return $elem = 'time'; } 
  /*  @var SET RETURN ELEMT_AS_VAR */ elseif ($elem === 'var' || $elem === 'VAR' ) { return $elem = 'var'; } 
  /*  @var SET RETURN ELEMT_AS_UL */ elseif ($elem === 'ul' || $elem === 'UL' ) { return $elem = 'ul';  } 
  /*  @var SET RETURN ELEMT_AS_OL */ elseif ($elem === 'ol' || $elem === 'OL' ) { return $elem = 'ol'; } 
  /*  @var SET RETURN ELEMT_AS_LI */ elseif ($elem === 'li' || $elem === 'LI' ) { return $elem = 'li'; } 
  /*  @var SET RETURN ELEMT_AS_TABLE */ elseif ($elem === 'table' || $elem === 'TABLE' ) { return $elem = 'table'; } 
  /*  @var SET RETURN ELEMT_AS_TR */ elseif ($elem === 'tr' || $elem === 'TR' ) { return $elem = 'tr'; } 
  /*  @var SET RETURN ELEMT_AS_TD */ elseif ($elem === 'td' || $elem === 'TD' ) { return $elem = 'td'; } 
  /*  @var SET RETURN ELEMT_AS_TH */ elseif ($elem === 'th' || $elem === 'TH' ) { return $elem = 'th'; } 
  /*  @var SET RETURN ELEMT_AS_LEGEND */ elseif ($elem === 'legend' || $elem === 'LEGEND' ) { return $elem = 'legend'; } 
  /*  @var SET RETURN ELEMT_AS_LEGEND */ elseif ($elem === 'fieldset' || $elem === 'FIELDSET' ) { return $elem = 'fieldset'; } 
  /*  @var SET RETURN ELEMT_AS_TBODY */ elseif ($elem === 'tbody' || $elem === 'TBODY' ) { return $elem = 'tbody'; } 
  /*  @var SET RETURN ELEMT_AS_TFOOT */ elseif ($elem === 'tfoot' || $elem === 'TFOOT' ) { return $elem = 'tfoot'; } 
  /*  @var SET RETURN ELEMT_AS_THEAD */ elseif ($elem === 'thead' || $elem === 'THEAD' ) { return $elem = 'thead'; } 
  /*  @var SET RETURN ELEMT_AS_THEAD */ elseif ($elem === 'span' || $elem === 'SPAN' ) { return $elem = 'span'; } 
  /*  @var SET RETURN ELEMT_AS_EM */ elseif ($elem === 'em' || $elem === 'EM' ) { return $elem = 'em'; } 
  /*  @var SET RETURN ELEMT_AS_BOLD */ elseif ($elem === 'b' || $elem === 'B' || $elem === 'BOLD' ) { return $elem = 'b'; } 
  /*  @var SET RETURN ELEMT_AS_ITALIC */ elseif ($elem === 'i' || $elem === 'I' || $elem === 'ITALIC' ) { return $elem = 'i'; } 
  /*  @var SET RETURN ELEMT_AS_SMALL */ elseif ($elem === 'small' || $elem === 'SMALL' ) { return $elem = 'small';} 
  /*  @var SET RETURN ELEMT_AS_STRIKE */ elseif ($elem === 'strike' || $elem === 'STRIKE' ) { return $elem = 'strike'; } 
  /*  @var SET RETURN ELEMT_AS_MARQUEE */ elseif ($elem === 'marquee' || $elem === 'MARQUEE' ) { return $elem = 'marquee'; } 
  /*  @var SET RETURN ELEMT_AS_CENTER */ elseif ($elem === 'center' || $elem === 'CENTER' ) { return $elem = 'center'; } 
  /*  @var SET RETURN ELEMT_AS_CODE */ elseif ($elem === 'code' || $elem === 'CODE' ) { return $elem = 'code'; } 
  /*  @var SET RETURN ELEMT_AS_ABBR */ elseif ($elem === 'abbr' || $elem === 'ABBR' ) { return $elem = 'abbr'; } 
  /*  @var SET RETURN ELEMT_AS_MAP */ elseif ($elem === 'map' || $elem === 'MAP' ) { return $elem = 'map'; } 
  /*  @var SET RETURN ELEMT_AS_CANVAS */ elseif ($elem === 'canvas' || $elem === 'CANVAS' ) { return $elem = 'canvas'; } 
  /*  @var SET RETURN ELEMT_AS_CITE */ elseif ($elem === 'cite' || $elem === 'CITE' ) { return $elem = 'cite'; } 
  /*  @var SET RETURN ELEMT_AS_DATA */ elseif ($elem === 'data' || $elem === 'DATA' ) { return $elem = 'data'; } 
  /*  @var SET RETURN ELEMT_AS_DL */ elseif ($elem === 'dl' || $elem === 'DL' ) { return $elem = 'dl'; } 
  /*  @var SET RETURN ELEMT_AS_DT */ elseif ($elem === 'dt' || $elem === 'DT' ) { return $elem = 'dt'; } 
  /*  @var SET RETURN ELEMT_AS_DD */ elseif ($elem === 'dd' || $elem === 'DD' ) { return $elem = 'dd'; } 
  /*  @var SET RETURN ELEMT_AS_DFN */ elseif ($elem === 'dfn' || $elem === 'DFN' ) { return $elem = 'dfn'; } 
  /*  @var SET RETURN ELEMT_AS_DFN */ elseif ($elem === 'ins' || $elem === 'INS' ) { return $elem = 'ins'; } 
  /*  @var SET RETURN ELEMT_AS_DEL */ elseif ($elem === 'del' || $elem === 'DEL' ) {  return $elem = 'del'; } 
  /*  @var SET RETURN ELEMT_AS_KBD */ elseif ($elem === 'kbd' || $elem === 'KBD' ) { return $elem = 'kbd'; } 
  /*  @var SET RETURN ELEMT_AS_MARK */ elseif ($elem === 'mark' || $elem === 'MARK' ) { return $elem = 'mark'; } 
  /*  @var SET RETURN ELEMT_AS_PRE */ elseif ($elem === 'pre' || $elem === 'PRE' ) { return $elem = 'pre'; } 
  /*  @var SET RETURN ELEMT_AS_RT */ elseif ($elem === 'rt' || $elem === 'RT' ) { return $elem = 'rt'; } 
  /*  @var SET RETURN ELEMT_AS_RP */ elseif ($elem === 'rp' || $elem === 'RP' ) {  return $elem = 'rp'; } 
  /*  @var SET RETURN ELEMT_AS_RUBY */ elseif ($elem === 'ruby' || $elem === 'RUBY' ) { return $elem = 'ruby'; } 
  /*  @var SET RETURN ELEMT_AS_S */ elseif ($elem === 's' || $elem === 'S' ) { return $elem = 's'; } 
  /*  @var SET RETURN ELEMT_AS_SAMP */ elseif ($elem === 'samp' || $elem === 'SAMP' ) { return $elem = 'samp'; } 
  /*  @var SET RETURN ELEMT_AS_STRONG */ elseif ($elem === 'strong' || $elem === 'STRONG' ) { return $elem = 'strong'; } 
  /*  @var SET RETURN ELEMT_AS_SUB */ elseif ($elem === 'sub' || $elem === 'SUB' ) { return $elem = 'sub'; } 
  /*  @var SET RETURN ELEMT_AS_SUP */ elseif ($elem === 'sup' || $elem === 'SUP' ) { return $elem = 'sup'; } 
  /*  @var SET RETURN ELEMT_AS_WBR */ elseif ($elem === 'wbr' || $elem === 'WBR' ) { return $elem = 'wbr'; } 
  /*  @var SET RETURN ELEMT_AS_Q */ elseif ($elem === 'q' || $elem === 'Q' ) { return $elem = 'q'; } 
  /*  @var SET RETURN ELEMT_AS_HEAD */ elseif ($elem === 'head' || $elem === 'HEAD' ) { return $elem = 'head'; } 
  /*  @var SET RETURN ELEMT_AS_TITLE */ elseif ($elem === 'title' || $elem === 'TITLE' ) { return $elem = 'title'; } 
  /*  @var SET RETURN ELEMT_AS_BODY */ elseif ($elem === 'body' || $elem === 'BODY' ) { return $elem = 'body'; } 
  /*  @var SET RETURN ELEMT_AS_HTML */ elseif ($elem === 'html' || $elem === 'HTML' ) { return $elem = 'html'; }

}

// VALIDATE HTML ELEMENTS THE RETURN BASE ON ELEMENT HTML !
static protected function _setINLINELEMENTS($elem) {

  /*  @var SET RETURN ELEMT_AS_SOURCE */ if ($elem === 'source' || $elem === 'SOURCE' ) { return $elem = 'source';  } 
  /*  @var SET RETURN ELEMT_AS_TRACK */ elseif ($elem === 'track'   || $elem === 'TRACK') { return $elem = 'track';   } 
  /*  @var SET RETURN ELEMT_AS_CIRCLE */ elseif ($elem === 'circle' || $elem === 'CIRCLE') { return $elem = 'circle';  } 
  /*  @var SET RETURN ELEMT_AS_PARAM */ elseif ($elem === 'param' || $elem === 'PARAM') {  return $elem = 'param';   } 
  /*  @var SET RETURN ELEMT_AS_INPUT */ elseif ($elem === 'input' || $elem === 'INPUT') { return $elem = 'input';   } 
  /*  @var SET RETURN ELEMT_AS_META */ elseif ($elem === 'meta' || $elem === 'META') { return $elem = 'meta';    } 
  /*  @var SET RETURN ELEMT_AS_LINK */ elseif ($elem === 'link' || $elem === 'LINK') { return $elem = 'link';    } 
  /*  @var SET RETURN ELEMT_AS_IMG */ elseif ($elem === 'img' || $elem === 'IMG') {  return $elem = 'img';     } 
  /*  @var SET RETURN ELEMT_AS_EMBED */ elseif ($elem === 'embed' || $elem === 'EMBED') { return $elem = 'embed';   } 
  /*  @var SET RETURN ELEMT_AS_OPTION */ elseif ($elem === 'option' || $elem === 'OPTION') { return $elem = 'option';  } 
  /*  @var SET RETURN ELEMT_AS_COL */ elseif ($elem === 'col' || $elem === 'COL') { return $elem = 'col';     } 
  /*  @var SET RETURN ELEMT_AS_BASE */ elseif ($elem === 'base' || $elem === 'BASE') { return $elem = 'base';    } 
  /*  @var SET RETURN ELEMT_AS_ASIDE */ elseif ($elem === 'aside' || $elem === 'ASIDE') { return $elem = 'aside';   }
  /*  @var SET RETURN ELEMT_AS_AREA */ elseif ($elem === 'area' || $elem === 'AREA') { return $elem = 'area';    }
  /*  @var SET RETURN ELEMT_AS_DOCTYPE */ elseif ($elem === 'doctype' || $elem === 'DOCTYPE' ) { return $elem = 'DOCTYPE'; } 

} # END OF SET ELEMENTS

static protected function _setReturnELEMENT($elem, $value, $attr, $id, $class, $label) { $elem = self::_setELEMENTS($elem); switch ($elem) {

    /*  @var SET RETURN ELEMT_AS_ARRAY_TITLE_STRUCTURE_0 */ case "head":  return self::_elemenHTMLINLINE('STRUCTURE', 0, $value, $attr, $id, $class, $label); break;  
    /*  @var SET RETURN ELEMT_AS_ARRAY_TITLE_STRUCTURE_1 */ case "title": return self::_elemenHTMLINLINE('STRUCTURE', 1, $value, $attr, $id, $class, $label); break;  
    /*  @var SET RETURN ELEMT_AS_ARRAY_TITLE_STRUCTURE_2 */ case "body":  return self::_elemenHTMLINLINE('STRUCTURE', 2, $value, $attr, $id, $class, $label); break;  
    /*  @var SET RETURN ELEMT_AS_ARRAY_TITLE_STRUCTURE_3 */ case "html":  return self::_elemenHTMLINLINE('STRUCTURE', 3, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_MARK_FORMATC_0 */ case "del":   return self::_elemenHTMLINLINE('FORMATC', 0, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_MARK_FORMATC_1 */ case "kbd":   return self::_elemenHTMLINLINE('FORMATC', 1, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_MARK_FORMATC_2 */ case "mark": return self::_elemenHTMLINLINE('FORMATC', 2, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_PRE_FORMATC_3 */ case "pre": return self::_elemenHTMLINLINE('FORMATC', 3, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_RT_FORMATC_4 */ case "rt": return self::_elemenHTMLINLINE('FORMATC', 4, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_RP_FORMATC_5 */ case "rp": return self::_elemenHTMLINLINE('FORMATC', 5, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_RUBY_FORMATC_6 */ case "ruby": return self::_elemenHTMLINLINE('FORMATC', 6, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_S_FORMATC_7 */ case "s": return self::_elemenHTMLINLINE('FORMATC', 7, $value, $attr, $id, $class, $label); break;        
    /*  @var SET RETURN ELEMT_AS_ARRAY_SAMP_FORMATC_8 */ case "samp": return self::_elemenHTMLINLINE('FORMATC', 8, $value, $attr, $id, $class, $label); break; 
    /*  @var SET RETURN ELEMT_AS_ARRAY_STRONG_FORMATC_9 */ case "strong": return self::_elemenHTMLINLINE('FORMATC', 9, $value, $attr, $id, $class, $label); break; 
    /*  @var SET RETURN ELEMT_AS_ARRAY_SUB_FORMATC_10 */ case "sub": return self::_elemenHTMLINLINE('FORMATC', 10, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_SUP_FORMATC_11 */ case "sup": return self::_elemenHTMLINLINE('FORMATC', 11, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_WBR_FORMATC_12 */ case "wbr": return self::_elemenHTMLINLINE('FORMATC', 12, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_WBR_FORMATC_13 */ case "q": return self::_elemenHTMLINLINE('FORMATC', 13, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_SPAN_FORMAT_0 */ case "span": return self::_elemenHTMLINLINE('FORMAT', 0, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_SPAN_FORMAT_1 */ case "em": return self::_elemenHTMLINLINE('FORMAT', 1, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_SPAN_FORMAT_2 */ case "b": return self::_elemenHTMLINLINE('FORMAT', 2, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_I_FORMAT_3 */ case "i":return self::_elemenHTMLINLINE('FORMAT', 3, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_SMALL_FORMAT_4 */ case "small": return self::_elemenHTMLINLINE('FORMAT', 4, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_STRIKE_FORMAT_5 */ case "strike": return self::_elemenHTMLINLINE('FORMAT', 5, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_MARQUEE_FORMAT_6 */ case "marquee": return self::_elemenHTMLINLINE('FORMAT', 6, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_CENTER_FORMAT_7 */ case "center": return self::_elemenHTMLINLINE('FORMAT', 7, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_CODE_FORMAT_8 */ case "code": return self::_elemenHTMLINLINE('FORMAT', 8, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_ABBR_FORMAT_9 */ case "abbr": return self::_elemenHTMLINLINE('FORMAT', 9, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_MAP_FORMAT_10 */ case "map": return self::_elemenHTMLINLINE('FORMAT', 10, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_CANVAS_FORMAT_11 */ case "canvas": return self::_elemenHTMLINLINE('FORMAT', 11, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_CITE_FORMAT_12 */ case "cite": return self::_elemenHTMLINLINE('FORMAT', 12, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_DATA_FORMAT_13 */ case "data": return self::_elemenHTMLINLINE('FORMAT', 13, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_DL_FORMAT_14 */ case "dl": return self::_elemenHTMLINLINE('FORMAT', 14, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_DT_FORMAT_15 */ case "dt": return self::_elemenHTMLINLINE('FORMAT', 15, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_DD_FORMAT_16 */ case "dd": return self::_elemenHTMLINLINE('FORMAT', 16, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_DFN_FORMAT_17 */ case "dfn": return self::_elemenHTMLINLINE('FORMAT', 17, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_INS_FORMAT_18 */ case "ins": return self::_elemenHTMLINLINE('FORMAT', 18, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_INS_LIST_19 */ case "ul": return self::_elemenHTMLINLINE('LIST', 0, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_OL_LIST_1 */ case "ol": return self::_elemenHTMLINLINE('LIST', 1, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_LI_LIST_2 */ case "li": return self::_elemenHTMLINLINE('LIST', 2, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_TABLE_LIST_3 */ case "table": return self::_elemenHTMLINLINE('LIST', 3, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_TR_LIST_4 */ case "tr": return self::_elemenHTMLINLINE('LIST', 4, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_TD_LIST_5 */ case "td": return self::_elemenHTMLINLINE('LIST', 5, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_TH_LIST_6 */ case "th": return self::_elemenHTMLINLINE('LIST', 6, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_LEGEND_LIST_7 */ case "legend": return self::_elemenHTMLINLINE('LIST', 7, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_FIELDSET_LIST_8 */ case "fieldset": return self::_elemenHTMLINLINE('LIST', 8, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_TBODY_LIST_9 */ case "tbody": return self::_elemenHTMLINLINE('LIST', 9, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_TFOOT_LIST_10 */ case "tfoot": return self::_elemenHTMLINLINE('LIST', 10, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_THEAD_LIST_11 */ case "thead": return self::_elemenHTMLINLINE('LIST', 11, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_FIGURE_SUPPORT_0 */ case "figure": return self::_elemenHTMLINLINE('SUPPORT', 0, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_FIGCAPTION_SUPPORT_1 */ case "figcaption": return self::_elemenHTMLINLINE('SUPPORT', 1, $value, $attr, $id, $class, $label); break;      
    /*  @var SET RETURN ELEMT_AS_ARRAY_METER_SUPPORT_2 */ case "meter": return self::_elemenHTMLINLINE('SUPPORT', 2, $value, $attr, $id, $class, $label); break;      
    /*  @var SET RETURN ELEMT_AS_ARRAY_OBJECT_SUPPORT_3 */ case "object": return self::_elemenHTMLINLINE('SUPPORT', 3, $value, $attr, $id, $class, $label); break;     
    /*  @var SET RETURN ELEMT_AS_ARRAY_OPTGROUP_SUPPORT_4 */ case "optgroup": return self::_elemenHTMLINLINE('SUPPORT', 4, $value, $attr, $id, $class, $label); break;     
    /*  @var SET RETURN ELEMT_AS_ARRAY_OPTGROUP_SUPPORT_5 */ case "output": return self::_elemenHTMLINLINE('SUPPORT', 5, $value, $attr, $id, $class, $label); break;  
    /*  @var SET RETURN ELEMT_AS_ARRAY_PROGRESS_SUPPORT_6 */ case "progress": return self::_elemenHTMLINLINE('SUPPORT', 6, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_SVG_SUPPORT_7 */ case "svg": return self::_elemenHTMLINLINE('SUPPORT', 7, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_TEMPLATE_SUPPORT_8 */ case "template": return self::_elemenHTMLINLINE('SUPPORT', 8, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_TIME_SUPPORT_9 */ case "time": return self::_elemenHTMLINLINE('SUPPORT', 9, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_VAR_SUPPORT_10 */ case "var": return self::_elemenHTMLINLINE('SUPPORT', 10, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_AUDIO_SECONDARY_0 */ case "audio": return self::_elemenHTMLINLINE('SECONDARY', 0, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_VIDEO_SECONDARY_1 */ case "video": return self::_elemenHTMLINLINE('SECONDARY', 1, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_ADDRESS_SECONDARY_2 */ case "address": return self::_elemenHTMLINLINE('SECONDARY', 2, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_COLGROUP_SECONDARY_3 */ case "colgroup": return self::_elemenHTMLINLINE('SECONDARY', 3, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_BDI_SECONDARY_4 */ case "bdi": return self::_elemenHTMLINLINE('SECONDARY', 4, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_BDO_SECONDARY_5 */ case "bdo": return self::_elemenHTMLINLINE('SECONDARY', 5, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_BLOCKQUOTE_SECONDARY_6 */ case "blockquote": return self::_elemenHTMLINLINE('SECONDARY', 6, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_CAPTION_SECONDARY_7 */ case "caption": return self::_elemenHTMLINLINE('SECONDARY', 7, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_LABEL_SECONDARY_8 */ case "label": return self::_elemenHTMLINLINE('SECONDARY', 8, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_DATALIST_SECONDARY_9 */ case "datalist": return self::_elemenHTMLINLINE('SECONDARY', 9, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_DETAILS_SECONDARY_10 */ case "details": return self::_elemenHTMLINLINE('SECONDARY', 10, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_SUMMARY_SECONDARY_11 */ case "summary": return self::_elemenHTMLINLINE('SECONDARY', 11, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_DIALOG_SECONDARY_12 */ case "dialog": return self::_elemenHTMLINLINE('SECONDARY', 12, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_OPTION_SECONDARY_13 */ case "option": return self::_elemenHTMLINLINE('SECONDARY', 13, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_H1_SECONDARY_0 */ case "h1": return self::_elemenHTMLINLINE('PRIMARY', 0, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_H2_SECONDARY_1 */ case "h2": return self::_elemenHTMLINLINE('PRIMARY', 1, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_H3_SECONDARY_2 */ case "h3": return self::_elemenHTMLINLINE('PRIMARY', 2, $value, $attr, $id, $class, $label); break; 
    /*  @var SET RETURN ELEMT_AS_ARRAY_H4_SECONDARY_3 */ case "h4": return self::_elemenHTMLINLINE('PRIMARY', 3, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_H5_SECONDARY_4 */ case "h5": return self::_elemenHTMLINLINE('PRIMARY', 4, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_H6_SECONDARY_5 */ case "h6": return self::_elemenHTMLINLINE('PRIMARY', 5, $value, $attr, $id, $class, $label); break;                 
    /*  @var SET RETURN ELEMT_AS_ARRAY_H6_SECONDARY_6 */ case "div": return self::_elemenHTMLINLINE('PRIMARY', 6, $value, $attr, $id, $class, $label); break;       
    /*  @var SET RETURN ELEMT_AS_ARRAY_PARAGRAPH_SECONDARY_7 */ case "p": return self::_elemenHTMLINLINE('PRIMARY', 7, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_BUTTON_SECONDARY_8 */ case "button": return self::_elemenHTMLINLINE('PRIMARY', 8, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_A_SECONDARY_9 */ case "a": return self::_elemenHTMLINLINE('PRIMARY', 9, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_IFRAME_SECONDARY_10 */ case "iframe": return self::_elemenHTMLINLINE('PRIMARY', 10, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_MAIN_SECONDARY_11 */ case "main": return self::_elemenHTMLINLINE('PRIMARY', 11, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_NAV_SECONDARY_12 */ case "nav": return self::_elemenHTMLINLINE('PRIMARY', 12, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_SELECT_SECONDARY_13 */ case "select": return self::_elemenHTMLINLINE('PRIMARY', 13, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_FORM_SECONDARY_14 */ case "form": return self::_elemenHTMLINLINE('PRIMARY', 14, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_PICTURE_SECONDARY_15 */ case "picture": return self::_elemenHTMLINLINE('PRIMARY', 15, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_SECTION_SECONDARY_16 */ case "section": return self::_elemenHTMLINLINE('PRIMARY', 16, $value, $attr, $id, $class, $label); break;
    /*  @var SET RETURN ELEMT_AS_ARRAY_TEXTAREA_SECONDARY_17 */ case "textarea": return self::_elemenHTMLINLINE('PRIMARY', 17, $value, $attr, $id, $class, $label); break;

    default:

      # RETURN_DEFUALT_IF_EXCECUTED_BUT_NOT_SET
      $ERROR_MSG  = " ";
      $ERROR_MSG .= " Required Element HTML: e.g: html::ELEMENT('p'); ";
      $ERROR_MSG .= " For Developer support visit github submit issue: ".self::ELEMENT('a','Submit Github Support',self::IssueSubmitAttr()); 
      $ERROR_MSG .= " Recomendation: ".self::ELEMENT('a','Read Documentation Click Here',self::DocxSubmitAttr()); 
   
      return $ERROR_MSG;  

  }

} # END OF SET ELEMENT

static protected function _setReturnINLINELEMENT($elem, $attr, $id, $class,$assoc) { $elem = self::_setINLINELEMENTS($elem);

   switch ($elem) {

    /* @var SET RETURN ELEMT_AS_ARRAY_TRACK_INLINE_0 */ case "source": return self::return_inline_element('INLINE', 0, $attr, $id, $class, $assoc); break;
    /* @var SET RETURN ELEMT_AS_ARRAY_TRACK_INLINE_1 */ case "track": return self::return_inline_element('INLINE', 1, $attr, $id, $class, $assoc); break;
    /* @var SET RETURN ELEMT_AS_ARRAY_TRACK_INLINE_2 */ case "circle": return self::return_inline_element('INLINE', 2, $attr, $id, $class, $assoc); break;
    /* @var SET RETURN ELEMT_AS_ARRAY_TRACK_INLINE_3 */ case "param": return self::return_inline_element('INLINE', 3, $attr, $id, $class, $assoc); break;
    /* @var SET RETURN ELEMT_AS_ARRAY_TRACK_INLINE_4 */ case "input": return self::return_inline_element('INLINE', 4, $attr, $id, $class, $assoc); break;
    /* @var SET RETURN ELEMT_AS_ARRAY_TRACK_INLINE_5 */ case "meta": return self::return_inline_element('INLINE', 5, $attr, $id, $class, $assoc); break;
    /* @var SET RETURN ELEMT_AS_ARRAY_LINK_INLINE_6 */ case "link": return self::return_inline_element('INLINE', 6, $attr, $id, $class, $assoc); break;
    /* @var SET RETURN ELEMT_AS_ARRAY_IMG_INLINE_7 */ case "img": return self::return_inline_element('INLINE', 7, $attr, $id, $class, $assoc); break;      
    /* @var SET RETURN ELEMT_AS_ARRAY_EMBED_INLINE_8 */ case "embed": return self::return_inline_element('INLINE', 8, $attr, $id, $class, $assoc); break;
    /* @var SET RETURN ELEMT_AS_ARRAY_OPTION_INLINE_9 */ case "option": return self::return_inline_element('INLINE', 9, $attr, $id, $class, $assoc); break;
    /* @var SET RETURN ELEMT_AS_ARRAY_COL_INLINE_10 */ case "col": return self::return_inline_element('INLINE', 10, $attr, $id, $class, $assoc); break;
    /* @var SET RETURN ELEMT_AS_ARRAY_BASE_INLINE_11 */ case "base": return self::return_inline_element('INLINE', 11, $attr, $id, $class, $assoc); break;
    /* @var SET RETURN ELEMT_AS_ARRAY_ASIDE_INLINE_12 */ case "aside": return self::return_inline_element('INLINE', 12, $attr, $id, $class, $assoc); break;
    /* @var SET RETURN ELEMT_AS_ARRAY_AREA_INLINE_13 */ case "area": return self::return_inline_element('INLINE', 13, $attr, $id, $class, $assoc); break;
    /* @var SET RETURN ELEMT_AS_DOCTYPE */ case "DOCTYPE": return self::return_inline_element('INLINE', 14, $attr, $id, $class, $assoc);
      break;
    default:
    
      # RETURN_DEFAULT_INLINE_HTML_ELEMENT
      $ERROR_MSG  = " ";
      $ERROR_MSG .= " Required _Element 'inLINE' & HTML Element : e.g: _ELEMENT('inLINE','input'); ";
      $ERROR_MSG .= " For Developer support visit github submit issue: ".self::ELEMENT('a','Submit Github Support',self::IssueSubmitAttr());   
      $ERROR_MSG .= " Recomendation: ".self::ELEMENT('a','Read Documentation Click Here',self::DocxSubmitAttr());   
     
      return $ERROR_MSG;   

  }

 } #END OF SET RETURN ELEMENT

}  

