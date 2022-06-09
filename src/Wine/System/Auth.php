<?php namespace PHPWineVanillaFlavour\Wine\System; ?>
<?php 

 use \PHPWineVanillaFlavour\Wine\RequestSession;
 use \PHPWineVanillaFlavour\Wine\System\Request;
 use \PHPWineVanillaFlavour\Wine\System\System;

/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour v1.3.1.0 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.3.1.0 free software: you can redistribute it and/or modify.
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
 * @version   v1.3.1.0
 * @since     04.13.2022
 *
 * @method AUTH::SESSION();
 * @method AUTH::USERAUTH();
 * @method AUTH::LOGOUT();
 * @method AUTH::REDIRECT();
 * @method AUTH::HASCONTAINS();
 * @method AUTH::ERROR();
 * @method AUTH::IS_LOGGEDIN();
 * @method deprecated @since 1.1.4 AUTH::CATCH();
 * 
 */

class Auth Extends System 
{

   use RequestSession;

    /*
     * Set propery static class
     * Usage: print AUTH::$data1;
     * Output: true
     */
    public static $data1 = 'true';
    
    /**
    *
    * Defined DATA Form array handler 
    * HTML field and error msg
    * @since 04.13.21
    * @since v1.0
    *
    **/
    public static $DATAFORM   = [];

    /**
    *
    * Defined Program error handler 
    * @since 04.13.21
    * @since v1.0
    *
    **/
    public static $PROGRAM_MSG = '';

    /**
    *
    * Defined SESSION START STATIC AUTH VERSION
    * @since 04.05.21
    * @since v1.0
    *
    **/
    public static function SESSION(array $option =  null ) 
    {
       if(!isset($option) || is_null($option)) : return session_start();
       else                                    : return session_start($option);

       endif;
    }
   
    /**
    *
    * Defined USERAUTH() Check if the user current active session then redirec to certain page
    * @param _1 redirect to page if session is not active
    * @param _2 false by default set to TRUE if session is activate then redirect to page.php if session is a live
    * @since 04.05.21
    * @since v1.0
    *
    **/ 
    public static function USERAUTH(string $pageRequestTo, bool $activeSession = false)
    {
        
        $dataSession = SYSTEM::DataRequest;
        
        foreach ($dataSession as $dataRequest) :
            
          if($activeSession == 0 ) : if(!isset($_SESSION[$dataRequest]) ||  is_null($_SESSION[$dataRequest])) : SYSTEM::REDIRECTTO($pageRequestTo); endif;
          else                     : if( isset($_SESSION[$dataRequest]) && !is_null($_SESSION[$dataRequest])) : SYSTEM::REDIRECTTO($pageRequestTo); endif;
          
          endif;

        endforeach;
       
    }

   /**
    * Defined AUTH::IS_LOGGEDIN() Check if the user current active session then it set as true do whatever you wish on it !
    * @since 02.09.2022
    * @since v1.2.0.0
    *
    **/ 
    public static function IS_LOGGEDIN()
    {
        
      $dataSession = SYSTEM::DataRequest;  foreach ($dataSession as $dataRequest) : if( isset($_SESSION[$dataRequest]) && !is_null($_SESSION[$dataRequest])) : return true; endif; endforeach;

    }
    
    /**
    *
    * Defined RETURNSQL() method
    * @since 04.05.21
    * @since v1.0
    *
   **/ 
  public static function CHECKQUERY(string $table, array $col_id, array $col_name = null)
  {
     return  [

      [$table]
     ,[$col_id]
     ,[$col_name]

    ];

  }
  
/**
 *
 * Defined INSERT SQL CLEANUP !
 * @since 04.06.21
 * @since v1.0
 *
**/
public static function BINDQUERY(string $connection, array $datas , array $values )  
{
 /**
 *
 * Defined GET RETURN CURRENT QUERY
 * @since 04.06.21
 * @since v1.0
 *
**/ 
$getCurrent     = current($datas );

/**
 *
 * Defined GET REMOVE FIRST QUERY RETURN SECOND INSTEAD
 * @since 04.06.21
 * @since v1.0
 *
**/
 $removeCurrent = array_shift( $datas  );

/**
 *
 * Defined THE LOOP REMOVE SHIFT ARRAY
 * @since 04.06.21
 * @since v1.0
 *
**/
 $_xeQueryRequestClientData = [];

 foreach ( $datas  as $value) : $_xeQueryRequestClientData[] = ", ".$value; endforeach;
 
 /**
  * @param _DEFINED DEFINED MERGE DATA ARRAY
  **/
  $_xeQueryRequestClientData = implode("",$_xeQueryRequestClientData);
 /**
  * @param _DEFINED DEFINED MERGE DATA ARRAY
  **/
  $_xeQueryRequestClientData = $getCurrent . $_xeQueryRequestClientData;

/**
 *
 * Defined GET RETURN CURRENT QUERY
 * @since 04.06.21
 * @since v1.0
 *
**/ 
 $getCurrentVal       = current($values );

/**
 *
 * Defined GET REMOVE FIRST QUERY RETURN SECOND INSTEAD
 * @since 04.06.21
 * @since v1.0
 *
**/
 $removeCurrentValue  = array_shift( $values );

/**
 *
 * Defined THE LOOP REMOVE SHIFT ARRAY
 * @since 04.06.21
 * @since v1.0
 *
**/
 $_xeQueryRequestCurrentVal = [];
 
 foreach ( $values as $value) :  $_xeQueryRequestCurrentVal[] = ", ".$value; endforeach;

 /**
  * @param _DEFINED DEFINED MERGE DATA ARRAY
  **/
 $_xeQueryRequestCurrentVal = implode("", $_xeQueryRequestCurrentVal);
 /**
  * @param _DEFINED DEFINED MERGE DATA ARRAY
  **/
 $_xeQueryRequestCurrentVal = $getCurrentVal . $_xeQueryRequestCurrentVal;
  
 /**
  * @param Prepare an insert statement 
  **/
  $returnSQL = "";
  /**
   * @param _insert statement
   **/
  $returnSQL .= " INSERT "; 
  /**
   * @param _into statement
   **/
  $returnSQL .= " INTO "; 
  /**
   * @param _table statement
   **/
  $returnSQL .= " {$connection} "; 
  /**
   * @param _db_col_data statement
   **/
  $returnSQL .= " ( ";
  $returnSQL .= " {$_xeQueryRequestClientData} ";
  $returnSQL .= " ) ";
 /**
  * @param _values statement
  **/
  $returnSQL .= "  VALUES ";
 /**
  * @param _values_content statement
  **/
  $returnSQL .= " ( ";
  $returnSQL .= " {$_xeQueryRequestCurrentVal} ";
  $returnSQL .= " ) ";

  return $returnSQL;

 }

   /**
    *
    * Defined BIND() process session log in system !
    * @since 04.06.21
    * @since v1.0
    *
   **/ 
    public static function BIND( $connection, array $bind_user_data = null , string $request = null )
    {
  
    switch ($request) 
    {

    /**
     *
     * Defined CONSTANT SESSION_REGISTERDATA_REQUEST > process new user request register
     * @since 04.06.21
     * @since v1.0
     *
     **/
    case ($request == 'SESSION_REGISTERDATA_REQUEST' || $request == 'DO_USER_ADD_NEW_REGISTER') ? $request : false;

    /**
     *
     * Defined Validate BIND_VALIDATE_PORTAL_KEYS !
     * @since 10.07.21
     * @since v1.2
     *
    **/

  /**
     *
     * Defined Validate BIND_VALIDATE_PORTAL_KEYS !
     * @since 10.07.21
     * @since v1.2
     *
    **/

    $requestKeysReturnData = array_keys($bind_user_data);

    $portalKeys_QS  = SYSTEM::BIND_VALIDATE_PORTAL_KEYS( $requestKeysReturnData[0], 'QUERY_STATEMENT'      ,"<table border='1' width='100%'><tr><td> Invalid PARAMETER : <span class='par_error'> " . $requestKeysReturnData[0] . " </span> <br /><hr /> <i>Expect:</i> <b>'QUERY_STATEMENT' => AUTH::RETURNSQL(' string database',['id'],['input_name'])  </b><br /> <hr /> <i>Expect:</i> <b>'QUERY_STATEMENT'  </b><br /> </td></tr></table>' ");
    $portalKeys_IH  = SYSTEM::BIND_VALIDATE_PORTAL_KEYS( $requestKeysReturnData[1], 'INPUT_HASCONTAINS'    ,"<table border='1' width='100%'><tr><td> Invalid PARAMETER : <span class='par_error'> " . $requestKeysReturnData[1] . " </span> <br /><hr /> <i>Expect:</i> <b>'INPUT_HASCONTAINS' => AUTH::HASCONTAINS();  </b><br /> <hr /> <i>Expect:</i> <b>'INPUT_HASCONTAINS' </b><br /> </td></tr></table>' ");
    $portalKeys_ID  = SYSTEM::BIND_VALIDATE_PORTAL_KEYS( $requestKeysReturnData[2], 'INPUT_DATAEXIST'      ,"<table border='1' width='100%'><tr><td> Invalid PARAMETER : <span class='par_error'> " . $requestKeysReturnData[2] . " </span> <br /><hr /> <i>Expect:</i> <b>'INPUT_DATAEXIST' => 'error_message'   </b><br /><hr /> <i>Expect:</i> <b>'INPUT_DATAEXIST' </b><br /> </td></tr></table>' ");
    
    if(  ( isset( $portalKeys_QS ) || isset(  $portalKeys_IH ) || isset( $portalKeys_ID ) ) == true )  : 

      error_reporting(0);
      print ("<h3>BIND_REGISTER_DATA_ARRAY_KEYS Values</h3>"); 
    
    endif;

    if(  ( isset( $portalKeys_QS )  ) == true )
    {

      REQUEST::CURRENT_VALUE_REQUEST( $bind_user_data );
      REQUEST::BIND_PORTAL_PARAMS( $bind_user_data );
      print ( $portalKeys_QS );

    }
    if(  ( isset(  $portalKeys_IH ) ) == true )
    {
     
      REQUEST::CURRENT_VALUE_REQUEST( $bind_user_data );
      REQUEST::BIND_PORTAL_PARAMS( $bind_user_data );
      print ( $portalKeys_IH );

    }
    if(  ( isset( $portalKeys_ID ) ) == true )
    {

      REQUEST::CURRENT_VALUE_REQUEST( $bind_user_data );
      REQUEST::BIND_PORTAL_PARAMS( $bind_user_data );
      print ( $portalKeys_ID );

    }

    if(  ( isset( $portalKeys_QS ) || isset(  $portalKeys_IH ) || isset( $portalKeys_ID ) ) == true )  : die;
    endif;
   
     // FETCH VALIDATE FIELD EMPTY
     $INPUT_HASCONTAINS               = (isset($bind_user_data['INPUT_HASCONTAINS'])) ? $bind_user_data['INPUT_HASCONTAINS'] : false;
     // FETCH VALIDATE IF EXIST OR ALREADY REGISTERED
     $INPUT_HASERROR                  = $bind_user_data['INPUT_DATAEXIST'];

     /**
      *  _DEFINED table 
      *  BIND SESSION_REGISTERDATA_REQUEST
      * @since 04.12.21
      * @version 1.0
     **/
     $_xeQueryTable        = [];
     /** 
      *  _DEFINED user id  
      *  BIND SESSION_REGISTERDATA_REQUEST
      * @since 04.12.21
      * @version 1.0
     **/
     $_xeInputFormRequest  = [];
     /**
      *  _DEFINED col name  
      *  BIND SESSION_REGISTERDATA_REQUEST
      * @since 04.12.21
      * @version 1.0
     **/
     $_xeDbTableColRequest = [];

    /**
      *  _DEFINED table
      *  BIND SESSION_REGISTERDATA_REQUEST
      * @since 04.12.21
      * @version 1.0
     **/
     foreach ($bind_user_data['QUERY_STATEMENT'][0]    as $value) : $_xeQueryTable[]         = $value;  endforeach;
     /**
      *  _DEFINED user id
      *  BIND SESSION_REGISTERDATA_REQUEST
      * @since 04.12.21
      * @version 1.0
     **/
     foreach ($bind_user_data['QUERY_STATEMENT'][1][0] as $value) : $_xeInputFormRequest[]   = $value;  endforeach;
     /**
      *  _DEFINED col name
      *  BIND SESSION_REGISTERDATA_REQUEST
      * @since 04.12.21
      * @version 1.0
     **/
     foreach ($bind_user_data['QUERY_STATEMENT'][2][0] as $value) : $_xeDbTableColRequest[]  = $value;  endforeach;

    /**
     * @param _DEFINED ARRAY TO STRING DATA
     **/
     $_xeQueryTable        = implode("", $_xeQueryTable);
    /**
     * @param _DEFINED ARRAY TO STRING DATA
     **/
     $_xeInputFormRequest  = implode("", $_xeInputFormRequest);
    /**
     * @param _DEFINED ARRAY TO STRING DATA
     **/
     $_xeDbTableColRequest = implode("", $_xeDbTableColRequest);
     
     $returnSQL = "";

    /**
     * @param _select query statement
     **/
     $returnSQL .= " SELECT ";
    /**
     * @param _table statement
     **/
     $returnSQL .= " {$_xeInputFormRequest} ";
    /**
     * @param _from statement
     **/
     $returnSQL .= " FROM  ";
    /**
     * @param _table statement
     **/
     $returnSQL .= " {$_xeQueryTable} ";
    /**
     * @param _where statement
     **/
     $returnSQL .= " WHERE ";
    /**
     * @param _? condition statement
     **/
     $returnSQL .= " ( ";
     $returnSQL .= " {$_xeDbTableColRequest} = ? ";
     $returnSQL .= " ) ";
       
    /**
     *
     * Defined Prepare statement
     * @since 04.12.21
     * @since v1.0
     *
     **/
    if($stmt = $connection->prepare($returnSQL) ) :

    /**
     * @param _select Bind variables to the prepared statement as parameters
     **/
     $stmt->bind_param("s", $INPUT_HASCONTAINS );      

     /**
     * @param _select Attempt to execute the prepared statement
     **/
     if($stmt->execute())  : 
        $stmt->store_result();
           if($stmt->num_rows == 1) : return $INPUT_HASERROR;  endif; 
           else                     : return ERROR_DEVELOPER_CONCERN;
     endif;
       $stmt->close();

   endif;

   
    break;
      
    /**
     *
     * Defined CONSTANT SESSION_ENCRYPTDATA_REQUEST > process valid password 
     * @since 04.06.21
     * @since v1.0
     *
     **/
    case ($request == 'SESSION_ENCRYPTDATA_REQUEST' || $request == 'DO_USER_ENCRYPTDATA_REGISTER') ? $request : false;  

   /**
     *
     * Defined Validate BIND_VALIDATE_PORTAL_KEYS !
     * @since 10.07.21
     * @since v1.2
     *
    **/

    $requestKeysReturnData = array_keys($bind_user_data);

    $portalKeys_RHC  = SYSTEM::BIND_VALIDATE_PORTAL_KEYS( $requestKeysReturnData[0], 'REGPASS_HASCONTAINS'  ,"<table border='1' width='100%'><tr><td> Invalid PARAMETER : <span class='par_error'>" . $requestKeysReturnData[0] . " </span> <br /><hr /> <i>Expect:</i> <b>'REGPASS_HASCONTAINS'  </b><br /> </td></tr></table>' ");
    $portalKeys_RH   = SYSTEM::BIND_VALIDATE_PORTAL_KEYS( $requestKeysReturnData[1], 'REGPASS_HASERROR'     ,"<table border='1' width='100%'><tr><td> Invalid PARAMETER : <span class='par_error'>" . $requestKeysReturnData[1] . " </span> <br /><hr /> <i>Expect:</i> <b>'REGPASS_HASERROR'     </b><br /> </td></tr></table>' ");

    if(  ( isset( $portalKeys_RHC  ) || isset( $portalKeys_RH ) ) == true )  : 

      error_reporting(0);
      print ("<h3>BIND_REGISTER_DATA_ARRAY_KEYS Values</h3>"); 
    
    endif;
    if(  ( isset( $portalKeys_RHC )  ) == true )
    {

      REQUEST::CURRENT_VALUE_REQUEST( $bind_user_data );
      REQUEST::BIND_PORTAL_PARAMS( $bind_user_data );
      print ( $portalKeys_RHC );

    }
    if(  (  isset( $portalKeys_RH ) ) == true )
    {

      REQUEST::CURRENT_VALUE_REQUEST( $bind_user_data );
      REQUEST::BIND_PORTAL_PARAMS( $bind_user_data );
      print ( $portalKeys_RH );

    }

    if(  ( isset( $portalKeys_RHC  ) || isset( $portalKeys_RH ) ) == true )  : die;
    endif;

      $SESSION_STATEMENT_REGPASS_HASERROR   = (isset($bind_user_data['REGPASS_HASERROR'])) ? $bind_user_data['REGPASS_HASERROR'] : false; 
      $SESSION_ENCRYPTDATA_REQUEST          = SYSTEM::BIND_SESSION_ENCRYPTDATA_REQUEST( $bind_user_data ); 

      if($SESSION_STATEMENT_REGPASS_HASERROR  == $SESSION_ENCRYPTDATA_REQUEST) : return $SESSION_ENCRYPTDATA_REQUEST;
       else                                                                    : $SESSION_ENCRYPTDATA_REQUEST = $SESSION_ENCRYPTDATA_REQUEST;
      
     endif;

    break;

    /**
     *
     * Defined CASE CONSTANT SESSION_ENCRYPTCONFIRM_REQUEST > process confirmvalid password
     * @since 04.06.21
     * @since v1.0
     *
     **/
     case ($request == 'SESSION_ENCRYPTCONFIRM_REQUEST' || $request == 'DO_USER_ENCRYPTCONFIRM_REGISTER') ? $request : false;

   /**
     *
     * Defined Validate BIND_VALIDATE_PORTAL_KEYS !
     * @since 10.07.21
     * @since v1.2
     *
    **/

    $requestKeysReturnData = array_keys($bind_user_data);

    $portalKeys_CHC  = SYSTEM::BIND_VALIDATE_PORTAL_KEYS( $requestKeysReturnData[0], 'CONFIRMPASS_HASCONTAINS'  ,"<table border='1' width='100%'><tr><td> Invalid PARAMETER :<span class='par_error'> " . $requestKeysReturnData[0] . " </span> <br /><hr /> <i>Expect:</i> <b>'CONFIRMPASS_HASCONTAINS'  </b><br /> </td></tr></table>' ");
    $portalKeys_CH   = SYSTEM::BIND_VALIDATE_PORTAL_KEYS( $requestKeysReturnData[1], 'CONFIRMPASS_HASERROR'     ,"<table border='1' width='100%'><tr><td> Invalid PARAMETER :<span class='par_error'> " . $requestKeysReturnData[1] . " </span> <br /><hr /> <i>Expect:</i> <b>'CONFIRMPASS_HASERROR'     </b><br /> </td></tr></table>' ");

    if(  ( isset( $portalKeys_CHC  ) || isset(  $portalKeys_CH  ) ) == true )  : 

      error_reporting(0);
      print ("<h3>BIND_REGISTER_DATA_ARRAY_KEYS Values</h3>"); 
    
    endif;
    if(  ( isset( $portalKeys_CHC )  ) == true )
    {

      REQUEST::CURRENT_VALUE_REQUEST( $bind_user_data );
      REQUEST::BIND_PORTAL_PARAMS( $bind_user_data );
      print ( $portalKeys_CHC );

    }
    if(  (  isset(  $portalKeys_CH  ) ) == true )
    {

      REQUEST::CURRENT_VALUE_REQUEST( $bind_user_data );
      REQUEST::BIND_PORTAL_PARAMS( $bind_user_data );
      print (  $portalKeys_CH  );

    }

    if(  ( isset( $portalKeys_CHC ) || isset($portalKeys_CH  ) ) == true )  : die;
    endif;

      $SESSION_STATEMENT_ENCRYPTCONFIRM       = (isset($bind_user_data['CONFIRMPASS_HASCONTAINS'])) ? $bind_user_data['CONFIRMPASS_HASCONTAINS'] : false; 
      $SESSION_ENCRYPTCONFIRM_REQUEST         = SYSTEM::BIND_SESSION_ENCRYPTCONFIRM_REQUEST( $bind_user_data );
 
      if($SESSION_STATEMENT_ENCRYPTCONFIRM  == $SESSION_ENCRYPTCONFIRM_REQUEST) : return $SESSION_ENCRYPTCONFIRM_REQUEST;
       else                                                                     : $SESSION_ENCRYPTCONFIRM_REQUEST = $SESSION_ENCRYPTCONFIRM_REQUEST;
      
     endif;

    break;

   /**
     *
     * Defined CONSTANT SESSION_PORTAL_REQUEST > process access user loginng in
     * @since 04.06.21
     * @since v1.0
     *
     **/
    case ($request == 'SESSION_PORTAL_REQUEST' || $request == 'DO_USER_BEGIN_SESSION') ? $request : false;
        
    #
    # BEGIN OF PORTAL REQUEST
    #  
    /**
     *
     * Defined Validate BIND_VALIDATE_PORTAL_KEYS !
     * @since 10.06.21
     * @since v1.2
     *
    **/

    $requestKeysReturnData = array_keys($bind_user_data);

    $portalKeys_QS  = SYSTEM::BIND_VALIDATE_PORTAL_KEYS( $requestKeysReturnData[0], 'QUERY_STATEMENT'           ,"<table border='1' width='100%'><tr><td> Invalid PARAMETER : <span class='par_error'>" . $requestKeysReturnData[0] . " </span> <br /><hr /> <i>Expect:</i> <b>'QUERY_STATEMENT'           </b><br /> </td></tr></table>' ");
    $portalKeys_UH  = SYSTEM::BIND_VALIDATE_PORTAL_KEYS( $requestKeysReturnData[1], 'USERNAME_HASCONTAINS'      ,"<table border='1' width='100%'><tr><td> Invalid PARAMETER : <span class='par_error'>" . $requestKeysReturnData[1] . " </span> <br /><hr /> <i>Expect:</i> <b>'USERNAME_HASCONTAINS'      </b><br /> </td></tr></table>' ");
    $portalKeys_UE  = SYSTEM::BIND_VALIDATE_PORTAL_KEYS( $requestKeysReturnData[2], 'USERNAME_ERROR'            ,"<table border='1' width='100%'><tr><td> Invalid PARAMETER : <span class='par_error'>" . $requestKeysReturnData[2] . " </span> <br /><hr /> <i>Expect:</i> <b>'USERNAME_ERROR'            </b><br /> </td></tr></table>' ");
    $portalKeys_PH  = SYSTEM::BIND_VALIDATE_PORTAL_KEYS( $requestKeysReturnData[3], 'PASSWORD_HASCONTAINS'      ,"<table border='1' width='100%'><tr><td> Invalid PARAMETER : <span class='par_error'>" . $requestKeysReturnData[3] . " </span> <br /><hr /> <i>Expect:</i> <b>'PASSWORD_HASCONTAINS'      </b><br /> </td></tr></table>' ");
    $portalKeys_PE  = SYSTEM::BIND_VALIDATE_PORTAL_KEYS( $requestKeysReturnData[4], 'PASSWORD_ERROR'            ,"<table border='1' width='100%'><tr><td> Invalid PARAMETER : <span class='par_error'>" . $requestKeysReturnData[4] . " </span> <br /><hr /> <i>Expect:</i> <b>'PASSWORD_ERROR'            </b><br /> </td></tr></table>' ");
    $portalKeys_NC  = SYSTEM::BIND_VALIDATE_PORTAL_KEYS( $requestKeysReturnData[5], 'NOTEXIST_CREDENTIAL'       ,"<table border='1' width='100%'><tr><td> Invalid PARAMETER : <span class='par_error'>" . $requestKeysReturnData[5] . " </span> <br /><hr /> <i>Expect:</i> <b>'NOTEXIST_CREDENTIAL'       </b><br /> </td></tr></table>' ");
    $portalKeys_NAC = SYSTEM::BIND_VALIDATE_PORTAL_KEYS( $requestKeysReturnData[6], 'NOTASSOCIATED_CREDENTIAL'  ,"<table border='1' width='100%'><tr><td> Invalid PARAMETER : <span class='par_error'>" . $requestKeysReturnData[6] . " </span> <br /><hr /> <i>Expect:</i> <b>'NOTASSOCIATED_CREDENTIAL'  </b><br /> </td></tr></table>' ");
    $portalKeys_UR  = SYSTEM::BIND_VALIDATE_PORTAL_KEYS( $requestKeysReturnData[7], 'USER_REDIRECT'             ,"<table border='1' width='100%'><tr><td> Invalid PARAMETER : <span class='par_error'>" . $requestKeysReturnData[7] . " </span> <br /><hr /> <i>Expect:</i> <b>'USER_REDIRECT'             </b><br /> </td></tr></table>' ");
      
    if(  ( isset( $portalKeys_QS ) || isset( $portalKeys_UH) || isset( $portalKeys_UE ) || isset( $portalKeys_PH ) || isset( $portalKeys_PE ) || isset( $portalKeys_NC ) || isset(  $portalKeys_NAC ) || isset( $portalKeys_UR ) ) == true )
    {

      error_reporting(0);
      print ("<h3>BIND_PORTAL_ARRAY_KEYS Values</h3>");

    }
    if(  ( isset( $portalKeys_QS )  ) == true )
    {

      REQUEST::CURRENT_VALUE_REQUEST( $bind_user_data );
      REQUEST::BIND_PORTAL_PARAMS( $bind_user_data );
      print ($portalKeys_QS );

    }
    if(  ( isset( $portalKeys_UH )  ) == true )
    {

      REQUEST::CURRENT_VALUE_REQUEST( $bind_user_data );
      REQUEST::BIND_PORTAL_PARAMS( $bind_user_data );
      print ( $portalKeys_UH );

    }
    if(  ( isset($portalKeys_UE )  ) == true )
    {

      REQUEST::CURRENT_VALUE_REQUEST( $bind_user_data );
      REQUEST::BIND_PORTAL_PARAMS( $bind_user_data );
      print ( $portalKeys_UE );

    }
    if(  ( isset( $portalKeys_PH )  ) == true )
    {

      REQUEST::CURRENT_VALUE_REQUEST( $bind_user_data );
      REQUEST::BIND_PORTAL_PARAMS( $bind_user_data );
      print (  $portalKeys_PH );

    }
    if(  ( isset( $portalKeys_PE )  ) == true )
    {

      REQUEST::CURRENT_VALUE_REQUEST( $bind_user_data );
      REQUEST::BIND_PORTAL_PARAMS( $bind_user_data );
      print (  $portalKeys_PE );

    }
    if(  ( isset( $portalKeys_NC )  ) == true )
    {

      REQUEST::CURRENT_VALUE_REQUEST( $bind_user_data );
      REQUEST::BIND_PORTAL_PARAMS( $bind_user_data );
      print (  $portalKeys_NC );

    }
    if(  ( isset(  $portalKeys_NAC  )  ) == true )
    {

      REQUEST::CURRENT_VALUE_REQUEST( $bind_user_data );
      REQUEST::BIND_PORTAL_PARAMS( $bind_user_data );
      print (  $portalKeys_NAC  );

    }
    if(  ( isset(  $portalKeys_UR  )  ) == true )
    {

      REQUEST::CURRENT_VALUE_REQUEST( $bind_user_data );
      REQUEST::BIND_PORTAL_PARAMS( $bind_user_data );
      print (   $portalKeys_UR  );

    }

    if(  ( isset( $portalKeys_QS ) || isset( $portalKeys_UH) || isset( $portalKeys_UE ) || isset( $portalKeys_PH ) || isset( $portalKeys_PE ) || isset( $portalKeys_NC ) || isset(  $portalKeys_NAC ) || isset( $portalKeys_UR ) ) == true ) : die;
    endif;

     /**
     *
     * Defined CONSTANT BIND METHOD ARRAY
     * @since 04.06.21
     * @since v1.0
     *
    **/ 
    // ASSIGNED QUERY FOR BINDING METHOD
    $QUERY_STATEMENT_PORTAL   =     (!is_null($bind_user_data['QUERY_STATEMENT'][1][0])) ? $bind_user_data['QUERY_STATEMENT'][1][0] : false; 

    // ASSIGNED CONTSTANT USERFORM HAVE VALUE METHOD
    $USERNAME_HASCONTAINS     =     isset($bind_user_data['USERNAME_HASCONTAINS']) ? $bind_user_data['USERNAME_HASCONTAINS'] : '';

    // ASSIGNED CONTSTANT USERFORM ERROR FOR EMPTY FORM VALUE METHOD
    $USERNAME_ERROR           =     $bind_user_data['USERNAME_ERROR'];

    // ASSIGNED CONTSTANT PASSWORD HAVE VALUE METHOD
    $PASSWORD_HASCONTAINS     =     $bind_user_data['PASSWORD_HASCONTAINS'];

    // ASSIGNED CONTSTANT PASSWORD ERROR FOR EMPTY FORM VALUE METHOD
    $PASSWORD_ERROR           =     $bind_user_data['PASSWORD_ERROR'];

    // ASSIGNED CONTSTANT USERNAME OR PASSWORD IS NOT SYSTEM ASSOCIATED FORM VALUE METHOD
    $NOTEXIST_CREDENTIAL      =     $bind_user_data['NOTEXIST_CREDENTIAL'];

    // ASSIGNED CONTSTANT USERNAME OR PASSWORD IS NOT EXIST SYSTEM ASSOCIATED FORM VALUE METHOD
    $NOTASSOCIATED_CREDENTIAL =     $bind_user_data['NOTASSOCIATED_CREDENTIAL'];

    // ASSIGNED REDIRECT TO A CERTAIN PAGE FORM VALUE METHOD
    $USER_REDIRECT            =     $bind_user_data['USER_REDIRECT'];   

    /**
     *
     * Defined GET USER TABLE QUERY !
     * @since 04.06.21
     * @since v1.0
     *
    **/
    $_xeQueryTable = [];

    foreach ($bind_user_data['QUERY_STATEMENT'][0] as $value) : $_xeQueryTable[] = $value;  endforeach;
    
    // DEFINED ARRAY TO STRING DATA
    $_xeQueryTable = implode("", $_xeQueryTable);

    /**
     *
     * Defined GET RETURN CURRENT QUERY
     * @since 04.06.21
     * @since v1.0
     *
    **/ 
     $getCurrent    = current( $QUERY_STATEMENT_PORTAL);
 
    /**
     *
     * Defined GET REMOVE FIRST QUERY RETURN SECOND INSTEAD
     * @since 04.06.21
     * @since v1.0
     *
    **/
     $removeCurrent = array_shift( $bind_user_data['QUERY_STATEMENT'][1][0] );
  
   /**
     *
     * Defined THE LOOP REMOVE SHIFT ARRAY
     * @since 04.06.21
     * @since v1.0
     *
    **/
     $_xeQueryRequest = [];

     foreach ($bind_user_data['QUERY_STATEMENT'][1][0] as $value) : $_xeQueryRequest[] = ", ".$value; endforeach;
     
     // DEFINED MERGE DATA ARRAY
     $_xeQueryRequestData = implode("", $_xeQueryRequest);
     // DEFINED MERGE DATA ARRAY
     $_xeQueryRequestData = $getCurrent . $_xeQueryRequestData;
 
   /**
     *
     * Defined SESSION ACTIVE IF ERROR ARE EMPTY !
     * @since 04.06.21
     * @since v1.0
     *
    **/
     if(empty($USERNAME_ERROR) && empty($PASSWORD_ERROR)) : 

       /**
        *
        * Defined QUERY TO ACTIVE SESSION AUTHENTICATION !
        * @since 04.06.21
        * @since v1.0
        *
       **/
        $returnSQL  = "";

       /**
        * @param _select statement
        **/
        $returnSQL .= " SELECT "; 
       /**
        * @param _colData statement
        **/
        $returnSQL .= " {$_xeQueryRequestData} ";
       /**
        * @param _from statement
        **/
        $returnSQL .= " FROM  ";
       /**
        * @param _valData statement
        **/
        $returnSQL .= " {$_xeQueryTable} ";
       /**
        * @param _where statement
        **/
        $returnSQL .= " WHERE ";
       /**
        * @param _colVal statement
        **/
        $returnSQL .= " ( ";
       /**
        * @param _username statement
        **/
        $returnSQL .= " username    = ? "; 
       /**
        * @param _email statement
        **/
        $returnSQL .= " OR email    = ? "; 
       /**
        * @param _mobile statement
        **/
        $returnSQL .= " OR mobile   = ? "; 
       /**
        * @param _end statement
        **/
        $returnSQL .= " ) "; 

       // Initialize bind going to be empty variables
       $auth_username = $auth_email = $auth_mobile   =  "";
          
       /**
        *
        * Defined PREPARE SQL STATEMENT!
        * @since 04.06.21
        * @since v1.0
        *
       **/
        if($stmt = $connection->prepare($returnSQL)) : 
     
          /**
           *
           * Defined BIND SQL STATEMENTS PARAMETERS
           * @since 04.06.21
           * @since v1.0
           *
          **/
          $stmt->bind_param(
               
               "sss" // Accept innsert only string value
             , $auth_username
             , $auth_email
             , $auth_mobile 
          
          );

          /**
           *
           * Defined PREPARE CONSTANT DEFAULT ACCESS SESSION ACTIVATION 
           * @since 04.06.21
           * @since v1.0
           *
          **/
          $auth_username = $USERNAME_HASCONTAINS;
          $auth_email    = $USERNAME_HASCONTAINS;
          $auth_mobile   = $USERNAME_HASCONTAINS;

            /**
             *
             * Defined ATTEMP PREPARE EXECUTE STATEMENT 
             * @since 04.06.21
             * @since v1.0
             *
            **/
            if($stmt->execute()) :
 
               /**
                *
                * Defined STORE DATA ATTEMP 
                * @since 04.06.21
                * @since v1.0
                *
               **/
               $stmt->store_result();
                
               /**
                *
                * Defined CHECK IF USER EXIST AND VERIFY VALID ACCOUNT 
                * @since 04.06.21
                * @since v1.0
                *
               **/
               if($stmt->num_rows == 1) : 
                   
                 /**
                  *
                  * Defined CHECK SYSTEMQUERY AND SESSION VARIABLE 
                  * @since 04.06.21
                  * @since v1.0
                  *
                 **/
                 return REQUESTSESSION::SYSTEMQUERY($USER_REDIRECT, $NOTASSOCIATED_CREDENTIAL, $PASSWORD_HASCONTAINS, $stmt);   
            
               else : 
   
                   /**
                    *
                    * Defined CHECK IF ALL FAILS THEN ERROR MSG 
                    * @since 04.06.21
                    * @since v1.0
                    *
                   **/
                   return  $NOTEXIST_CREDENTIAL;

                endif;

             else :

                 /**
                  *
                  * Defined CHECK CONTACT YOUR DEVELOPER SUPPORT 
                  * @since 04.06.21
                  * @since v1.0
                  *
                 **/
                 return self::$PROGRAM_MSG = ERROR_DEVELOPER_CONCERN;
             
            endif;

           /**
            *
            * Defined CLOSED DATA PREPARED STATEMENT
            * @since 04.06.21
            * @since v1.0
            *
           **/
            $stmt->close();
      
         endif;
    
      endif;

      
   
  /**
   *
   * Defined CLOSED CONNECTION DATABASE
   * @since 04.06.21
   * @since v1.0
   *
  **/
   $connection->close();

    #
    # END OF PORTAL REQUEST
    #  
    break;

  /**
   *
   * Defined Default missing bind @param 
   * @since 04.06.21
   * @since v1.0
   *
  **/
    default:
    return self::$PROGRAM_MSG = BIND_ERROR_DEVELOPER_CONCERN;
    break;

    }

 }


   /**
    *
    * Defined LOGOUT() logout method
    * @since 04.05.21
    * @since v1.0
    *
    **/ 
    public static function LOGOUT()
    {
        self::SESSION() . $_SESSION = array() . session_destroy();
    }

   /**
    *
    * Defined REMEMBERME() set cookies timestamp method
    * @since 04.05.21
    * @since v1.0
    *
   **/ 
   public static function REMEMBERME(string $remember, string $username, string $password, $USER_NAME, $PASS_WORD, array $timeStamp = null ) {
     
    $TIMES_STAMP_COOKIES_IN_TIME_USERNAME = (isset($timeStamp[TIMES_STAMP_COOKIES_IN_TIME][0])) ? $timeStamp[TIMES_STAMP_COOKIES_IN_TIME][0] : false;
    $TIMES_STAMP_COOKIES_IN_TIME_PASSWORD = (isset($timeStamp[TIMES_STAMP_COOKIES_IN_TIME][1])) ? $timeStamp[TIMES_STAMP_COOKIES_IN_TIME][1] : false;

    if(!empty($_POST[$remember]))  :  
  
     setcookie($username, $USER_NAME, $TIMES_STAMP_COOKIES_IN_TIME_USERNAME );  
     setcookie($password, $PASS_WORD, $TIMES_STAMP_COOKIES_IN_TIME_PASSWORD );
   
    else :
 
     if(isset($_COOKIE[$username]))  : setcookie($username,"");  endif;
     if(isset($_COOKIE[$password]))  : setcookie($password,"");  endif;
     
    endif;
 
 }

 static public function REDIRECT(string $pageRequestTo)
 {
   
  return  SYSTEM::REDIRECTTO($pageRequestTo);

 }
/**
    *
    * Defined REDIRECT() redirect method
    * @since 04.05.21
    * @since v1.0
    *
   **/ 
  public static function BINDEXECUTE(string $redirect, mixed $report = '')
  {
   
  global $stmt;

   if($stmt->execute()) : SYSTEM::REDIRECTTO($redirect);
    else : 

      if(empty($report)) {
        return ERROR_DEVELOPER_CONCERN;
      } else {
        return $report;
      }

   endif;

  }


}
