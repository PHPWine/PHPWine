<?php 

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

  
/**
  *
  * Defined Set DIR PATH Default
  * @since 11.02.2021
  * @since v1.0
  *
  **/ 
  define('__PATH__',  __DIR__ . DIRECTORY_SEPARATOR ); 

/**
  *
  * Defined Get Root file DIR 
  * @since 11.02.2021
  * @since v1.0
  *
  **/ 
  define('__ROOTPATH__',__PATH__ . '../../' );

/**
  *
  * Defined  Get Extension
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__PHPFILE__','.php');

/**
  *
  * Defined Get SELF_REQUEST
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__SELF_REQUEST__', explode('/', $_SERVER['PHP_SELF'] !== null ? $_SERVER['PHP_SELF'] : false )); 

/**
  *
  * Defined Set Empty
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__EMPTY__',  '');   

/**
  *
  * Defined Return Map Path
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__GET_KEY_FOLDER_PATH__','GetKeyFolderPath'); 

/**
  *
  * Defined Set Function ISBELONG
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__ISBELONG__','isbelongs' ); 

/**
  *
  * Defined Set Function MAP PATH
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__KEYPATH__','GetKeyPath' ); 

/**
  *
  * Defined Set Function Break Tag
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__BR__','__BR' );

/**
  *
  * Defined Set Function HR Tag
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__HR__','__HR' ); 

/**
  *
  * Defined Set Function space
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__SPACE__','__space' ); 

/**
  *
  * Defined Set Function SetFileEx  
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__FILEEXTENSION__','setFileExT' );  
  
/**
  *
  * Defined Set PARAM META 
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__META__','META' );

/**
  *
  * Defined Set PARAM LNIKS 
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__LINK__','LINK' ); 

/**
  *
  * Defined Set PARAM SCRIPTS
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__SCRIPT__','SCRIPT' ); 

/**
  *
  * Defined Set PARAM TITLE
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__TITLE__','TITLE' ); 

/**
  *
  * Defined Set PARAM CUSTOM_END
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__CUSTOM_END__','CUSTOM_END' );

/**
  *
  * Defined Set PARAM BEGIN_CUSTOM_END  
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__BEGIN_CUSTOM_END__','BEGIN_CUSTOM_END' ); 

/**
  *
  * Defined Set PARAM MERGE
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__MERGE__','MERGE' ); 

/**
  *
  * Defined Set PARAM SetElemAttr
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__SetElemAttr__','setElemAttr' ); 

/**
  *
  * Defined Set PARAM DOELSE
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__DOELSE__','DOELSE' ); 

/**
  *
  * Defined Set PARAM DOIF
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__DOIF__','DOIF' ); 

/**
  *
  * Defined Set PARAM PERFORM
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__PERFORM__','PERFORM' ); 

/**
  *
  * Defined Set PARAM STRING
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__STRING__','STRING' );

/**
  *
  * Defined Set PARAM ATTR
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__ATTR__','ATTR' ); 

/**
  *
  * Defined Set PARAM ELEM
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__ELEM__','ELEM' ); 

/**
  *
  * Defined Set PARAM GETFROM
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__GETFROM__','GETFROM' ); 

/**
  *
  * Defined Set PARAM GETFROM
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__BRINGTO__','bring_to' ); 

/**
  *
  * Defined Set Param GETFROM
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__VIEWSTO__','view_to' ); 

/**
  *
  * Defined Set redirect to
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__SENDTO__','send_to' ); 

/**
  *
  * Defined Set PARAM SET_PATH_DIR
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__SETDIRPATH__','SET_DIR_PATH' ); 

/**
  *
  * Defined Set PARAM ELEM
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__DOCTYPE__','DOCTYPE' ); 

/**
  *
  * Defined Set PARAM __REPLACE_ABSOLUTE_PATH__ SET_PAT_DIR
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__REPLACE_ABSOLUTE_PATH__', ['\library\PHPWine\src\Wine\Optimizer', 'library/PHPWine/src/Wine/Optimizer'] );

/**
  *
  * Defined Set PARAM SWICTH TO OPTIONAL INCLUDES
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__INC__','INCLUDE' );

/**
  *
  * Defined Set PARAM SWICTH TO OPTIONAL INCLUDES ONCE 
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__INCONCE__','INCLUDE_ONCE' );
  
/**
  *
  * Defined Set PARAM SWICTH TO OPTIONAL REQUIRE
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__REQUIRE__','REQUIRE' ); 

/**
  *
  * Defined Set PARAM ARRAY RURI valid/supported global variable
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('LOCALHOST','LOCALHOST' ); 

/**
  *
  * Defined Set PARAM ARRAY PATH valid/supported global variable
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__ARRPATH__','path' ); 

/**
  *
  * Defined Set PARAM ARRAY VIEWS valid/supported global variable
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__ARRVIEWS__','dir' ); 

/**
  *
  * Defined Set PARAM ARRAY RURI valid/supported global variable
  * @since 11.02.2021
  * @since v1.0
  *
  **/
  define('__ARRVRURI__','ruri' ); 
  
/**
  *
  * Defined Set PARAM ARRAY CHILD Optimizer/Enhancer 
  * @since 02.07.2022
  * @since v1.2.0.0
  *
  **/
  define('CHILD' , 'CHILD' ); 

/**
  *
  * Defined Set PARAM ARRAY ATTR Optimizer/Enhancer 
  * @since 02.07.2022
  * @since v1.2.0.0
  *
  **/
  define('ATTR' ,'ATTR' ); 

/**
  *
  * Defined Set PARAM ARRAY VALUE Optimizer/Enhancer 
  * @since 02.07.2022
  * @since v1.2.0.0
  *
  **/
  define('VALUE' , 'VALUE' );

/**
  *
  * Defined Set PARAM ARRAY INNER Optimizer/Enhancer 
  * @since 02.07.2022
  * @since v1.2.0.0
  *
  **/
  define('INNER' , 'INNER' ); 
  