<?php 

 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);

/**
 * @var
 * @property
 * @constant
 * 
 * Note: This provides list of array are the constant that registered available to the front end
 * without using the class itself
 *
 * --------------------------------------------------------------------------------------------
 *  ex. $tag = new OptimizedHtml();
 *  $tag::div < these are elements that will available for us to use the html element >
 *  but still required to init the class PHPWine in order this to works as this lists are
 *  only available in public __construct() method
 *
 * before you will use string which seems not good in layout but as these lists are being
 * registered you can use the constant as follow
 *
 * ex. calling the elements
 * wine('element', $value);
 *
 * You can now use the tag without string that look and feel merge as wine
 * link wine(div, $value)
 *
 * --------------------------------------------------------------------------------------------
 *
 * Also you can do that in child array method these list is not only available to the wine method
 * this also can be use to child array of wine method itself
 *
 * ex. instead of assigning the array child of string element? you can use this constant providers
 * registered already within the class of PHPWine or OptimizedHtml
 *
 * like: [
 *   child => [
 *    / FROM ['div'] /
 *     TO [div]
 *  ]
 * ]
 *
 * Which look nice and clean feel like it is merging with the layout of youre codes
 * you can check to documentation which are avaialable registered providers for you
 * link: https://phpwine.github.io/documents/
 *
 * Also you can submit your concers and request with the submit bug in documentation menu
 * Link: https://github.com/PHPWine/PHPWine/issues/new
 *
 * Defined : html constant providers for arrays and wine element
 *
 * @since: v1.3.1
 * DT: 11.03.2023 *
 */

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

   $alt = 'alt';

  /**
   * This is reserved keyword for doctrine class attribute will use to key for element tag
   * The main use is for localized the function in array.  
   * 
   * 
   * @Defined : Constant Doctrine Class key Registered alt
   * @since: v1.0 doctrine
   * @since: v2.0 wine
   * DT: 11.10.2023 
   */
  if(!defined($alt)) 
  { 
    
    define('alt',$alt); 

  }

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$controls = 'controls';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered controls
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($controls)) 
{ 
  
  define('controls',$controls); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$dir = 'dir';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered dir
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($dir)) 
{ 
  
  define('dir',$dir); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$for = 'for';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered for
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($for)) 
{ 
  
  define('for',$for); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$href = 'href';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered href
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($href)) 
{ 
  
  define('href',$href); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$height = 'height';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered height
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($height)) 
{ 
  
  define('height',$height); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$id = 'id';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered id
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($id)) 
{ 
  
  define('id',$id); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$list = 'list';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered list
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($list)) 
{ 
  
  define('list',$list); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$max = 'max';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered max
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($max)) 
{ 
  
  define('max',$max); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$min = 'min';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered min
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($min)) 
{ 
  
  define('min',$min); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$name = 'name';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered name
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($name)) 
{ 
  
  define('name',$name); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$style = 'style';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered style
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($style)) 
{ 
  
  define('style',$style); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$script = 'script';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered script
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($script)) 
{ 
  
  define('script',$script); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$src = 'src';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered src
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($src)) 
{ 
  
  define('src',$src); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$type = 'type';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered type
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($type)) 
{ 
  
  define('type',$type); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$target = 'target';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered target
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($target)) 
{ 
  
  define('target',$target); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$val = 'value';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered val
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($val)) 
{ 
  
  define('val',$val); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$width = 'width';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered width
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($width)) 
{ 
  
  define('width',$width); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$a = 'a';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered a
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($a)) 
{ 
  
  define('a',$a); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$action = 'action';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered action
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($action)) 
{ 
  
  define('action',$action); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$area = 'area';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered area
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($area)) 
{ 
  
  define('area',$area); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$abbr = 'abbr';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered abbr
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($abbr)) 
{ 
  
  define('abbr',$abbr); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$address = 'address';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered address
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($address)) 
{ 
  
  define('address',$address); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$article = 'article';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered article
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($article)) 
{ 
  
  define('article',$article); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$aside = 'aside';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered aside
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($aside)) 
{ 
  
  define('aside',$aside); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$audio = 'audio';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered audio
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($audio)) 
{ 
  
  define('audio',$audio); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$base = 'base';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered base
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($base)) 
{ 
  
  define('base',$base); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$b = 'b';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered b
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($b)) 
{ 
  
  define('b',$b); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$bdi = 'bdi';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered bdi
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($bdi)) 
{ 
  
  define('bdi',$bdi); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$bdo = 'bdo';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered bdo
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($bdo)) 
{ 
  
  define('bdo',$bdo); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$blockquote = 'blockquote';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered blockquote
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($blockquote)) 
{ 
  
  define('blockquote',$blockquote); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$br = 'br';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered br
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($br)) 
{ 
  
  define('br',$br); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$button = 'button';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered button
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($button)) 
{ 
  
  define('button',$button); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$body = 'body';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered body
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($body)) 
{ 
  
  define('body',$body); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$coords = 'coords';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered coords
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($coords)) 
{ 
  
  define('coords',$coords); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$content = 'content';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered content
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($content)) 
{ 
  
  define('content',$content); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$cite = 'cite';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered cite
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($cite)) 
{ 
  
  define('cite',$cite); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$canvas = 'canvas';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered canvas
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($canvas)) 
{ 
  
  define('canvas',$canvas); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$caption = 'caption';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered caption
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($caption)) 
{ 
  
  define('caption',$caption); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$code = 'code';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered code
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($code)) 
{ 
  
  define('code',$code); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$col = 'col';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered col
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($col)) 
{ 
  
  define('col',$col); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$cols = 'cols';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered cols
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($cols)) 
{ 
  
  define('cols',$cols); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$colgroup = 'colgroup';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered colgroup
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($colgroup)) 
{ 
  
  define('colgroup',$colgroup); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$circle = 'circle';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered circle
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($circle)) 
{ 
  
  define('circle',$circle); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$cx = 'cx';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered cx
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($cx)) 
{ 
  
  define('cx',$cx); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$cy = 'cy';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered cy
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($cy)) 
{ 
  
  define('cy',$cy); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$del = 'del';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered del
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($del)) 
{ 
  
  define('del',$del); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$div = 'div';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered div
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($div)) 
{ 
  
  define('div',$div); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$dfn = 'dfn';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered dfn
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($dfn)) 
{ 
  
  define('dfn',$dfn); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$dialog = 'dialog';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered dialog
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($dialog)) 
{ 
  
  define('dialog',$dialog); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$details = 'details';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered details
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($details)) 
{ 
  
  define('details',$details); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$data = 'data';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered data
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($data)) 
{ 
  
  define('data',$data); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$datalist = 'datalist';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered datalist
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($datalist)) 
{ 
  
  define('datalist',$datalist); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$dl = 'dl';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered dl
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($dl)) 
{ 
  
  define('dl',$dl); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$dt = 'dt';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered dt
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($dt)) 
{ 
  
  define('dt',$dt); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$datetime = 'datetime';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered datetime
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($datetime)) 
{ 
  
  define('datetime',$datetime); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$em = 'em';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered em
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($em)) 
{ 
  
  define('em',$em); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$embed = 'embed';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered embed
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($embed)) 
{ 
  
  define('embed',$embed); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$fill = 'fill';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered fill
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($fill)) 
{ 
  
  define('fill',$fill); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$fieldset = 'fieldset';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered fieldset
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($fieldset)) 
{ 
  
  define('fieldset',$fieldset); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$figure = 'figure';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered figure
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($figure)) 
{ 
  
  define('figure',$figure); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$figcaption = 'figcaption';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered figcaption
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($figcaption)) 
{ 
  
  define('figcaption',$figcaption); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$footer = 'footer';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered footer
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($footer)) 
{ 
  
  define('footer',$footer); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$form = 'form';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered form
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($form)) 
{ 
  
  define('form',$form); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$hr = 'hr';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered hr
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($hr)) 
{ 
  
  define('hr',$hr); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$h1 = 'h1';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered h1
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($h1)) 
{ 
  
  define('h1',$h1); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$h2 = 'h2';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered h2
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($h2)) 
{ 
  
  define('h2',$h2); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$h3 = 'h3';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered h3
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($h3)) 
{ 
  
  define('h3',$h3); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$h4 = 'h4';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered h4
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($h4)) 
{ 
  
  define('h4',$h4); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$h5 = 'h5';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered h5
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($h5)) 
{ 
  
  define('h5',$h5); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$h6 = 'h6';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered h6
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($h6)) 
{ 
  
  define('h6',$h6); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$head = 'head';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered head
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($head)) 
{ 
  
  define('head',$head); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$html = 'html';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered html
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($html)) 
{ 
  
  define('html',$html); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$img = 'img';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered img
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($img)) 
{ 
  
  define('img',$img); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$input = 'input';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered input
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($input)) 
{ 
  
  define('input',$input); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$i = 'i';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered i
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($i)) 
{ 
  
  define('i',$i); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$iframe = 'iframe';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered iframe
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($iframe)) 
{ 
  
  define('iframe',$iframe); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$ins = 'ins';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered ins
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($ins)) 
{ 
  
  define('ins',$ins); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$kbd = 'kbd';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered kbd
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($kbd)) 
{ 
  
  define('kbd',$kbd); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$legend = 'legend';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered legend
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($legend)) 
{ 
  
  define('legend',$legend); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$label = 'label';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered label
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($label)) 
{ 
  
  define('label',$label); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$link = 'link';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered link
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($link)) 
{ 
  
  define('link',$link); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$lang = 'lang';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered lang
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($lang)) 
{ 
  
  define('lang',$lang); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$li = 'li';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered li
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($li)) 
{ 
  
  define('li',$li); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$media = 'media';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered media
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($media)) 
{ 
  
  define('media',$media); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$meter = 'meter';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered meter
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($meter)) 
{ 
  
  define('meter',$meter); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$mark = 'mark';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered mark
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($mark)) 
{ 
  
  define('mark',$mark); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$meta = 'meta';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered meta
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($meta)) 
{ 
  
  define('meta',$meta); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$main = 'main';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The main use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered main
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($main)) 
{ 
  
  define('main',$main); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$method = 'method';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The method use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered method
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($method)) 
{ 
  
  define('method',$method); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$map = 'map';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The map use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered map
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($map)) 
{ 
  
  define('map',$map); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$nav = 'nav';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The nav use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered nav
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($nav)) 
{ 
  
  define('nav',$nav); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$noscript = 'noscript';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered noscript
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($noscript)) 
{ 
  
  define('noscript',$noscript); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$oninput = 'oninput';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered oninput
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($oninput)) 
{ 
  
  define('oninput',$oninput); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$optgroup = 'optgroup';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered optgroup
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($optgroup)) 
{ 
  
  define('optgroup',$optgroup); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$option = 'option';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered option
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($option)) 
{ 
  
  define('option',$option); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$output = 'output';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered output
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($output)) 
{ 
  
  define('output',$output); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$object = 'object';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered object
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($object)) 
{ 
  
  define('object',$object); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$ol = 'ol';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered ol
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($ol)) 
{ 
  
  define('ol',$ol); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$open = 'open';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered open
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($open)) 
{ 
  
  define('open',$open); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$p = 'p';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered p
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($p)) 
{ 
  
  define('p',$p); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$param = 'param';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered p
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($param)) 
{ 
  
  define('param',$param); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$picture = 'picture';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered p
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($picture)) 
{ 
  
  define('picture',$picture); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$pre = 'pre';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered pre
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($pre)) 
{ 
  
  define('pre',$pre); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$progress = 'progress';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered progress
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($progress)) 
{ 
  
  define('progress',$progress); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$q = 'q';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered q
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($q)) 
{ 
  
  define('q',$q); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$r = 'r';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered r
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($r)) 
{ 
  
  define('r',$r); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$ruby = 'ruby';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered ruby
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($ruby)) 
{ 
  
  define('ruby',$ruby); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$rp = 'rp';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered rp
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($rp)) 
{ 
  
  define('rp',$rp); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$rt = 'rt';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered rt
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($rt)) 
{ 
  
  define('rt',$rt); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$rows = 'rows';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered rows
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($rows)) 
{ 
  
  define('rows',$rows); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$section = 'section';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered section
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($section)) 
{ 
  
  define('section',$section); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$samp = 'samp';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered samp
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($samp)) 
{ 
  
  define('samp',$samp); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$small = 'small';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered small
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($small)) 
{ 
  
  define('small',$small); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$span = 'span';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered span
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($span)) 
{ 
  
  define('span',$span); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$strong = 'strong';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered strong
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($strong)) 
{ 
  
  define('strong',$strong); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$sub = 'sub';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered sub
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($sub)) 
{ 
  
  define('sub',$sub); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$summary = 'summary';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered summary
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($summary)) 
{ 
  
  define('summary',$summary); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$sup = 'sup';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered sup
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($sup)) 
{ 
  
  define('sup',$sup); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$svg = 'svg';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered svg
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($svg)) 
{ 
  
  define('svg',$svg); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$s = 's';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered s
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($s)) 
{ 
  
  define('s',$s); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$select = 'select';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered s
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($select)) 
{ 
  
  define('select',$select); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$shape = 'shape';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered s
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($shape)) 
{ 
  
  define('shape',$shape); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$summary = 'summary';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered s
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($summary)) 
{ 
  
  define('summary',$summary); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$src = 'src';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered s
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($src)) 
{ 
  
  define('src',$src); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$source = 'source';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered s
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($source)) 
{ 
  
  define('source',$source); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$stroke = 'stroke';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered s
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($stroke)) 
{ 
  
  define('stroke',$stroke); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$tfoot = 'tfoot';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered tfoot
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($tfoot)) 
{ 
  
  define('tfoot',$tfoot); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$thead = 'thead';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered thead
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($thead)) 
{ 
  
  define('thead',$thead); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$tr = 'tr';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered tr
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($tr)) 
{ 
  
  define('tr',$tr); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$track = 'track';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered track
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($track)) 
{ 
  
  define('track',$track); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$tt = 'tt';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered tt
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($tt)) 
{ 
  
  define('tt',$tt); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$title = 'title';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered title
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($title)) 
{ 
  
  define('title',$title); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$table = 'table';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered table
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($table)) 
{ 
  
  define('table',$table); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$tbody = 'tbody';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered tbody
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($tbody)) 
{ 
  
  define('tbody',$tbody); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$td = 'td';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered td
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($td)) 
{ 
  
  define('td',$td); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$template = 'template';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered template
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($template)) 
{ 
  
  define('template',$template); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$textarea = 'textarea';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered textarea
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($textarea)) 
{ 
  
  define('textarea',$textarea); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$ul = 'ul';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered ul
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($ul)) 
{ 
  
  define('ul',$ul); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$usemap = 'usemap';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered usemap
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($usemap)) 
{ 
  
  define('usemap',$usemap); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$u = 'u';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered u
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($u)) 
{ 
  
  define('u',$u); 

}


/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$var = 'var';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered var
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($var)) 
{ 
  
  define('var',$var); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$video = 'video';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered video
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($video)) 
{ 
  
  define('video',$video); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$wbr = 'wbr';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered wbr
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($wbr)) 
{ 
  
  define('wbr',$wbr); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$origin = 'origin';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered wbr
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($origin)) 
{ 
  
  define('PREVENT_GET_FAILED',$origin); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$prevent = 'prevent';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered wbr
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($prevent)) 
{ 
  
  define('WINE_CLEARED',$prevent); 

}

/**
 * --------------------------------------------------------------------------------------------
 * @var constant|String 
 * @property
 * -------------------------------------------------------------------------------------------- */

$status = 'status';

/**
 * This is reserved keyword for doctrine class attribute will use to key for element tag
 * The noscript use is for localized the function in array.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered wbr
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.10.2023 
 */
if(!defined($status)) 
{ 
  
  define('WINE_BOOL',$status); 

}