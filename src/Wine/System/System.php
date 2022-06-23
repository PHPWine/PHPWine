<?php namespace PHPWineVanillaFlavour\Wine\System; ?>
<?php 

 use \PHPWineVanillaFlavour\Wine\System\Auth;
 use \PHPWineVanillaFlavour\Wine\System\Request;

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
 *
 */
 
 class System extends Request
{
   
  protected CONST DataRequest = [
     
    'AUTH'

  ];  

 
/**
 *
 * Defined SAVE SECONDARY FUNCTION PHP GET ARRAY KEY 
 * @since 02.03.2022
 * @since v1.2.0.0
 *
**/
protected static function check_key_mandatory_array( string $key_array, array $value_array  )
{
  return array_key_exists( $key_array,  $value_array );
} 

 /**
  *
  * Defined POSTDATA Request array of data that return error handler msg
  * @since 03.19.21
  * @since v1.0
  * 
 **/
 protected static function POSTDATA($POST_DATA)
 {

    $data = [];  foreach ($POST_DATA as $dataKey => $dataValue) : $data[] = $dataValue; endforeach;  return  $data;
 
 }

 /**
  *
  * Defined sanitize request into String | set true if remove special charac.
  * @since 03.19.21
  * @since v1.0
  * 
 **/
 protected static function SANITIZEREQUEST( $dataRequest, bool $specialCharRemove = false ) 
 {

   /**
    * sanitation source:
    * @source https://www.w3schools.com/php/php_form_validation.asp
    **/
    $dataRequest = trim($dataRequest);
    $dataRequest = stripslashes($dataRequest);
    $dataRequest = htmlspecialchars($dataRequest);
    /**
     * sanitation source: @source end
    **/
    
    if($specialCharRemove == true ) :
      return preg_replace('/[^a-z0-9]/i', '', $dataRequest);
    else :
      return $dataRequest;

    endif;

}

 /**
  *
  * Defined Dependencies error messages
  * @since 10.15.21
  * @since v1.3
  * 
 **/
private static function HANDLER_DEPENDENCIES( string $dependecies = 'CLASS')
{

  if(!empty($dependecies) === 'CLASS')       :   return "Missing dependencies Class is not exist or deleted Request.php";
  elseif(!empty($dependecies) === 'METHOD')  :   return "Missing dependencies CATCH_ERROR_PARAM_HANDLER is not exist or deleted at Class Request.php";
  endif;

}

 /**
  *
  * Defined BIND_SESSION_ENCRYPTDATA_REQUEST() method validate password register new user
  * @since 04.12.21
  * @since v1.0
  * 
 **/
protected static function BIND_SESSION_ENCRYPTDATA_REQUEST($BIND_SESSION_ENCRYPTDATA_REQUEST) 
{    
  $BSER                              = $BIND_SESSION_ENCRYPTDATA_REQUEST;
  $REGPASS_HASCONTAINS               = isset($BIND_SESSION_ENCRYPTDATA_REQUEST['REGPASS_HASCONTAINS']);  
  $REGPASS_HASERROR                  = isset($BIND_SESSION_ENCRYPTDATA_REQUEST['REGPASS_HASERROR']); 

  if((!is_null($BSER )      || !empty($BSER )) && $REGPASS_HASERROR == true )         : return $BIND_SESSION_ENCRYPTDATA_REQUEST['REGPASS_HASCONTAINS'];
   elseif((!is_null($BSER ) || !empty($BSER )) && $REGPASS_HASCONTAINS == true )      : return $BIND_SESSION_ENCRYPTDATA_REQUEST['REGPASS_HASERROR'] ;

  endif;
   
}

 /**
  *
  * Defined BIND_SESSION_ENCRYPTCONFIRM_REQUEST() method validate confirm password register new user
  * @since 04.12.21
  * @since v1.0
  * 
 **/
 protected static function BIND_SESSION_ENCRYPTCONFIRM_REQUEST($BIND_SESSION_ENCRYPTCONFIRM_REQUEST) 
 {
 
  $BSER                              = $BIND_SESSION_ENCRYPTCONFIRM_REQUEST;
  $CONFIRMPASS_HASCONTAINS           = isset($BIND_SESSION_ENCRYPTCONFIRM_REQUEST['CONFIRMPASS_HASCONTAINS']);    
  $CONFIRMPASS_ERROR                 = isset($BIND_SESSION_ENCRYPTCONFIRM_REQUEST['CONFIRMPASS_HASERROR']);   
 
  if((!is_null($BSER )      || !empty($BSER )) &&  $CONFIRMPASS_ERROR == true )            : return $BIND_SESSION_ENCRYPTCONFIRM_REQUEST['CONFIRMPASS_HASERROR'];
   elseif((!is_null($BSER ) || !empty($BSER )) &&  $CONFIRMPASS_HASCONTAINS == true )      : return $BIND_SESSION_ENCRYPTCONFIRM_REQUEST['CONFIRMPASS_HASCONTAINS'];  

  endif;

 }

  /**
    *
    * Defined REDIRECT() redirect method
    * @since 04.05.21
    * @since v1.0
    *
   **/ 
  static protected function REDIRECTTO(string $pageRequestTo)
  {
  
      header("location: {$pageRequestTo}.php");
      exit;
  }

  /**
    *
    * Defined BIND_VALIDATE_PORTAL_KEYS() RETURN ERROR VALUES AND EXPECTED
    * @since 10.06.21
    * @since v1.2
    *
   **/ 
  protected static function BIND_VALIDATE_PORTAL_KEYS( $PARAM_PORTAL_VALIDATION, $PARAM_REQUEST, $eCatch_errors)
  {

    if( is_null( $PARAM_PORTAL_VALIDATION ) || empty(  $PARAM_PORTAL_VALIDATION ) || $PARAM_PORTAL_VALIDATION !== $PARAM_REQUEST ) : return $eCatch_errors;  endif;

  }

  /**
    *
    * Defined BIND_VALIDATION_PARAMS() VALIDATE PARAMS VALUE
    * @since 10.06.21
    * @since v1.2
    *
   **/ 
  protected static function BIND_VALIDATION_PARAMS( $QUERY_STATEMENT_PORTAL_ERROR , $eCatch_errors )
  {

    if( !isset( $QUERY_STATEMENT_PORTAL ) && empty( $QUERY_STATEMENT_PORTAL ) ) : print $eCatch_errors . "<br />"; endif;

  }
 
 /**
  *
  * Defined secondary function vanilla into array error messages
  * @since 10.15.21
  * @since v1.3
  * 
 **/
  protected static function RETURN_ARRAY_AS_STRING($request)
  {
    return implode($request);
  }
  
 /**
  *
  * Defined validatte post from v2 
  * @since 10.15.21
  * @since v1.3
  * 
 **/
  private static function VALIDATE_POST( mixed $VALIDATE_POST ) { return ($_POST[$VALIDATE_POST]);}

 /**
  *
  * Defined RETURN_ERRORS() methods catch single data type for form file registration.
  * @since 03.19.21
  * @since v1.0
  * 
 **/
 protected static function RETURN_RESTRICTED_DATA($bind_error, $input_error, $valid_type)
 {

  /**
   *
   * Defined CATCH METHOD ARGUNMENT ERROR HANDLER
   * @since 04.10.21
   * @since v1.0
   * 
  **/
  

   if( !empty( $bind_error))             :  return $bind_error;
   elseif( empty( $bind_error ) )        : 

      if( !empty($input_error) )         : return $input_error;
      else                               : 
        
         if ( new \PHPWineVanillaFlavour\Wine\System\Request() !== false)    :  $RequestErrorHandler = NEW \PHPWineVanillaFlavour\Wine\System\Validate();
        else                                                                 :  print( self::HANDLER_DEPENDENCIES( 'CLASS' ) ); 
        endif;
         
         /**
          * 
          * Defined CHECK VALID MIN LENGTH
          * @since 04.10.21
          * @since v1.2
          * 
          **/
          if(isset($valid_type[LESS_THAN])) :

           error_reporting(0);
               
             $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
           
             $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $valid_type[LESS_THAN][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_LESS_THAN']));
             $REH_SP2 = $RequestErrorHandler::INTEGERTYPE( $valid_type[LESS_THAN][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_LESS_THAN']));
             $REH_SP3 = $RequestErrorHandler::STRINGTYPE(  $valid_type[LESS_THAN][2]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_LESS_THAN']));
           

             if(  ( isset( $REH_SP1 )) == true )
             {
              
               print( $RequestErrorHandler::report_dump($valid_type, LESS_THAN));
               print( $REH_SP1 );
               print( "<br />" );
              
             }
             if( ( isset(  $REH_SP2 ) ) == true )
             {
              
               print( $RequestErrorHandler::report_dump($valid_type, LESS_THAN));
               print( $REH_SP2 );
              
            }

             if(  ( isset(  $REH_SP3  ) ) == true )
             {

              print( $RequestErrorHandler::report_dump($valid_type, LESS_THAN));
              print( $REH_SP3 );
              print( "<br />" );

            }

            if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ||  isset(  $REH_SP3  ) ) :  die; endif;
           
            $VALIDLESSTHAN_ID             =  $valid_type[LESS_THAN][0];
            $VALIDLESSTHAN_ARG            =  $valid_type[LESS_THAN][1];
            $VALIDERROR_VALIDLESSTHAN_MSG =  $valid_type[LESS_THAN][2];
            $VALIDLESSTHAN                =  self::VALIDATE_POST($VALIDLESSTHAN_ID); 

            if( strlen($VALIDLESSTHAN) < $VALIDLESSTHAN_ARG ) : return $VALIDERROR_VALIDLESSTHAN_MSG;   endif;
    
          endif; // VALIDATE_LENGTH_LESS_THAN_REQUEST 

         /**
          *
          * Defined CHECK VALID LENGTH GREATER THAN
          * @since 04.10.21
          * @since v1.2
          * 
        **/
         if (isset($valid_type[GREATER_THAN])) :

          error_reporting(0);

          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $valid_type[GREATER_THAN][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_GREATER_THAN']));
          $REH_SP2 = $RequestErrorHandler::INTEGERTYPE( $valid_type[GREATER_THAN][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_GREATER_THAN']));
          $REH_SP3 = $RequestErrorHandler::STRINGTYPE(  $valid_type[GREATER_THAN][2]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_GREATER_THAN']));

          if(  ( isset( $REH_SP1 )) == true )
           {
             
             print( $RequestErrorHandler::report_dump($valid_type, GREATER_THAN));
             print( $REH_SP1 );
             print( "<br />" );
             
           }
           if( ( isset(  $REH_SP2 ) ) == true )
           {
             
             print( $RequestErrorHandler::report_dump($valid_type, GREATER_THAN));
             print( $REH_SP2 );
             
           }

           if(  ( isset(  $REH_SP3  ) ) == true )
           {

             print( $RequestErrorHandler::report_dump($valid_type, GREATER_THAN));
             print( $REH_SP3 );
             print( "<br />" );

           }

           if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ||  isset(  $REH_SP3  ) ) :  die; 
          endif;

          $VALIDGREATER_THAN_ID        =  $valid_type[GREATER_THAN][0];
          $VALIDGREATER_THAN_ID_ARG    =  $valid_type[GREATER_THAN][1];
          $VALIDERROR_GREATER_THAN_MGS =  $valid_type[GREATER_THAN][2];
          $VALIDGREATER_THAN           =  self::VALIDATE_POST($VALIDGREATER_THAN_ID);
          if(strlen( $VALIDGREATER_THAN  ) > $VALIDGREATER_THAN_ID_ARG)  : return $VALIDERROR_GREATER_THAN_MGS; endif;
 
         endif; // CHECK VALID LENGTH GREATER THAN

          /**
           * 
           * Defined CHECK VALID MIN LENGTH
           * @since 04.10.21
           * @since v1.0
           * 
           **/
          if( isset($valid_type[MINLENGTH])) :

            error_reporting(0);

            $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
            
            $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $valid_type[MINLENGTH][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_MINLENGTH']));
            $REH_SP2 = $RequestErrorHandler::INTEGERTYPE( $valid_type[MINLENGTH][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_MINLENGTH']));
            $REH_SP3 = $RequestErrorHandler::STRINGTYPE(  $valid_type[MINLENGTH][2]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_MINLENGTH']));

             if(  ( isset( $REH_SP1 )) == true )
             {
               
               print( $RequestErrorHandler::report_dump($valid_type, MINLENGTH));
               print( $REH_SP1 );
               print( "<br />" );
               
             }
             if( ( isset(  $REH_SP2 ) ) == true )
             {
               
               print( $RequestErrorHandler::report_dump($valid_type, MINLENGTH));
               print( $REH_SP2 );
               
             }
  
             if(  ( isset(  $REH_SP3  ) ) == true )
             {
  
               print( $RequestErrorHandler::report_dump($valid_type, MINLENGTH));
               print( $REH_SP3 );
               print( "<br />" );
  
             }
  
             if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ||  isset(  $REH_SP3  ) ) :  die; 
            endif;
            
            $VALIDMINLENGTH_ID      =  $valid_type[MINLENGTH][0];
            $VALIDMINLENGTH_ARG     =  $valid_type[MINLENGTH][1];
            $VALIDERROR_MINLENGTH   =  $valid_type[MINLENGTH][2];
            $VALIDMINLENGTH         =  self::VALIDATE_POST($VALIDMINLENGTH_ID);
  
            if(strlen($VALIDMINLENGTH) <= $VALIDMINLENGTH_ARG) : return $VALIDERROR_MINLENGTH; endif;

          endif; // VALIDATE_MINLENGTH_REQUEST LESS THAN EQUAL

         /**
          *
          * Defined CHECK VALID MAX LENGTH
          * @since 04.10.21
          * @since v1.0
          * 
          **/
          if ( isset($valid_type[MAXLENGTH])) :

            error_reporting(0); 

            $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
            
            $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $valid_type[MAXLENGTH][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_MAXLENGTH']));
            $REH_SP2 = $RequestErrorHandler::INTEGERTYPE( $valid_type[MAXLENGTH][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_MAXLENGTH']));
            $REH_SP3 = $RequestErrorHandler::STRINGTYPE(  $valid_type[MAXLENGTH][2]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_MAXLENGTH']));

  
             if(  ( isset( $REH_SP1 )) == true )
             {
               
               print( $RequestErrorHandler::report_dump($valid_type, MAXLENGTH));
               print( $REH_SP1 );
               print( "<br />" );
               
             }
             if( ( isset(  $REH_SP2 ) ) == true )
             {
               
               print( $RequestErrorHandler::report_dump($valid_type, MAXLENGTH));
               print( $REH_SP2 );
               
             }
  
             if(  ( isset(  $REH_SP3  ) ) == true )
             {
  
               print( $RequestErrorHandler::report_dump($valid_type, MAXLENGTH));
               print( $REH_SP3 );
               print( "<br />" );
  
             }
  
             if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ||  isset(  $REH_SP3  ) ) :  die; 
            endif;
           
            $VALIDMAXLENGTH_ID      =  $valid_type[MAXLENGTH][0];
            $VALIDMAXLENGTH_ARG     =  $valid_type[MAXLENGTH][1];
            $VALIDERROR_MAXLENGTH   =  $valid_type[MAXLENGTH][2];
            $VALIDMAXLENGTH         =  self::VALIDATE_POST($VALIDMAXLENGTH_ID);

           if(strlen($VALIDMAXLENGTH) >= $VALIDMAXLENGTH_ARG)  : return $VALIDERROR_MAXLENGTH; endif;

         endif; // VALIDATE_MAXLENGTH_REQUEST GREATER THAN EQUAL

         /**
          *
          * Defined CHECK VALID LENGTH EQUALTO
          * @since 04.10.21
          * @since v1.2
          * 
          **/
         if (isset($valid_type[EQUALTO])) :

          error_reporting(0);

          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $valid_type[EQUALTO][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_EQUALTO']));
          $REH_SP2 = $RequestErrorHandler::INTEGERTYPE( $valid_type[EQUALTO][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_EQUALTO']));
          $REH_SP3 = $RequestErrorHandler::STRINGTYPE(  $valid_type[EQUALTO][2]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_EQUALTO']));

           if(  ( isset( $REH_SP1 )) == true )
           {
             
             print( $RequestErrorHandler::report_dump($valid_type, EQUALTO));
             print( $REH_SP1 );
             print( "<br />" );
             
           }
           if( ( isset(  $REH_SP2 ) ) == true )
           {
             
             print( $RequestErrorHandler::report_dump($valid_type, EQUALTO));
             print( $REH_SP2 );
             
           }

           if(  ( isset(  $REH_SP3  ) ) == true )
           {

             print( $RequestErrorHandler::report_dump($valid_type, EQUALTO));
             print( $REH_SP3 );
             print( "<br />" );

           }

           if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ||  isset(  $REH_SP3  ) ) :  die; 
          endif;
          
            $EQUALTO_ID          =  $valid_type[EQUALTO][0];
            $EQUALTO_ARG         =  $valid_type[EQUALTO][1];
            $VALIDERROR_EQUALTO  =  $valid_type[EQUALTO][2];
            $EQUALTO             =  self::VALIDATE_POST($EQUALTO_ID);

          if(strlen($EQUALTO) == $EQUALTO_ARG)  : return  $VALIDERROR_EQUALTO; endif;

         endif;

        /**
         *
         * Defined CHECK VALID LENGTH EQUALTO STRICT
         * @since 04.10.21
         * @since v1.2
         * 
         **/
        if (isset($valid_type[EQUAL_STRICT])) :

          error_reporting(0);

          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $valid_type[EQUAL_STRICT][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_EQUAL_STRICT']));
          $REH_SP2 = $RequestErrorHandler::INTEGERTYPE( $valid_type[EQUAL_STRICT][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_EQUAL_STRICT']));
          $REH_SP3 = $RequestErrorHandler::STRINGTYPE(  $valid_type[EQUAL_STRICT][2]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_EQUAL_STRICT']));

           if(  ( isset( $REH_SP1 )) == true )
           {
             
             print( $RequestErrorHandler::report_dump($valid_type, EQUAL_STRICT));
             print( $REH_SP1 );
             print( "<br />" );
             
           }
           if( ( isset(  $REH_SP2 ) ) == true )
           {
             
             print( $RequestErrorHandler::report_dump($valid_type, EQUAL_STRICT));
             print( $REH_SP2 );
             
           }

           if(  ( isset(  $REH_SP3  ) ) == true )
           {

             print( $RequestErrorHandler::report_dump($valid_type, EQUAL_STRICT));
             print( $REH_SP3 );
             print( "<br />" );

           }

           if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ||  isset(  $REH_SP3  ) ) :  die; 
          endif;

          $EQUAL_STRICT_ID         =  $valid_type[EQUAL_STRICT][0];
          $EQUAL_STRICT_ARG        =  $valid_type[EQUAL_STRICT][1];
          $VALIDERROR_EQUAL_STRICT =  $valid_type[EQUAL_STRICT][2];
          $EQUAL_STRICT            =  self::VALIDATE_POST($EQUAL_STRICT_ID);

          if(strlen($EQUAL_STRICT) === $EQUAL_STRICT_ARG )  : return $VALIDERROR_EQUAL_STRICT; endif;

        endif;

        /**
         *
         * Defined CHECK VALID EMAIL with @mail.com
         * @since 04.10.21
         * @since v1.2
         * 
        **/
        if( isset($valid_type[VALID_EMAIL]) ) :

          error_reporting(0);

          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $valid_type[VALID_EMAIL][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_VALID_EMAIL']));
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[VALID_EMAIL][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_VALID_EMAIL']));

           if(  ( isset( $REH_SP1 )) == true )
           {
             
             print( $RequestErrorHandler::report_dump($valid_type, VALID_EMAIL));
             print( $REH_SP1 );
             print( "<br />" );
             
           }
           if( ( isset(  $REH_SP2 ) ) == true )
           {
             
             print( $RequestErrorHandler::report_dump($valid_type, VALID_EMAIL));
             print( $REH_SP2 );
             
           }

           if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
          endif;
    
          $VALID_EMAIL_ID         =  $valid_type[VALID_EMAIL][0];
          $VALIDERROR_VALID_EMAIL =  $valid_type[VALID_EMAIL][1];
          $VALID_EMAIL            =  self::VALIDATE_POST($VALID_EMAIL_ID);
    
          if(!filter_var($VALID_EMAIL , FILTER_VALIDATE_EMAIL)) : return  $VALIDERROR_VALID_EMAIL; endif;

        endif;

        /**
         *
         * Defined CHECK VALID STRING DATA TYPE
         * @since 04.10.21
         * @since v1.0
         * 
        **/
        if ( isset($valid_type[STRINGTYPE])) :

          error_reporting(0);

          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $valid_type[STRINGTYPE][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_STRINGTYPE']));
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[STRINGTYPE][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_STRINGTYPE']));

          if(  ( isset( $REH_SP1 )) == true )
           {
             
             print( $RequestErrorHandler::report_dump($valid_type, STRINGTYPE));
             print( $REH_SP1 );
             print( "<br />" );
             
           }
           if( ( isset(  $REH_SP2 ) ) == true )
           {
             
             print( $RequestErrorHandler::report_dump($valid_type, STRINGTYPE));
             print( $REH_SP2 );
             
           }

           if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
          endif;

          $VALIDSTRING_ID       =  $valid_type[STRINGTYPE][0];
          $VALIDERROR_STRING    =  $valid_type[STRINGTYPE][1];
          $VALIDSTRING          =  self::VALIDATE_POST($VALIDSTRING_ID);

        if(!preg_match("/^[a-zA-Z-' ]*$/", $VALIDSTRING)) : return $VALIDERROR_STRING; endif;

        endif;

       /**
        *
        * Defined CHECK VALID NUMERIC DATA TYPE
        * @since 04.10.21
        * @since v1.0
        * 
       **/
       if ( isset($valid_type[NUMERICTYPE]) ) :

        error_reporting(0);

        $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
        
        $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $valid_type[NUMERICTYPE][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_NUMERICTYPE']));
        $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[NUMERICTYPE][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_NUMERICTYPE']));

         if(  ( isset( $REH_SP1 )) == true )
         {
           
           print( $RequestErrorHandler::report_dump($valid_type, NUMERICTYPE));
           print( $REH_SP1 );
           print( "<br />" );
           
         }
         if( ( isset(  $REH_SP2 ) ) == true )
         {
           
           print( $RequestErrorHandler::report_dump($valid_type, NUMERICTYPE));
           print( $REH_SP2 );
           
         }

         if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
        endif;

         $VALIDNUMERIC_ID      =  $valid_type[NUMERICTYPE][0];
         $VALIDERROR_NUMERIC   =  $valid_type[NUMERICTYPE][1];
         $VALIDNUMERIC         =  self::VALIDATE_POST($VALIDNUMERIC_ID);

        if (!is_numeric($VALIDNUMERIC)) : return $VALIDERROR_NUMERIC; 
        endif;

       endif;

       /**
        *
        * Defined CHECK VALID NUMERIC DATA TYPE
        * @since 04.10.21
        * @since v1.0
        * 
       **/
      if ( isset($valid_type[INTEGERTYPE]) ) :

        error_reporting(0);

        $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
        
        $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $valid_type[INTEGERTYPE][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_INTEGERTYPE'])  );
        $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[INTEGERTYPE][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_INTEGERTYPE']) );

         if(  ( isset( $REH_SP1 )) == true )
         {
           
           print( $RequestErrorHandler::report_dump($valid_type, INTEGERTYPE));
           print( $REH_SP1 );
           print( "<br />" );
           
         }
         if( ( isset(  $REH_SP2 ) ) == true )
         {
           
           print( $RequestErrorHandler::report_dump($valid_type, INTEGERTYPE));
           print( $REH_SP2 );
           
         }

        if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
        endif;
       
         $VALIDINTIGERTYPE_ID      =  $valid_type[INTEGERTYPE][0];
         $VALIDERROR_INTIGERTYPE   =  $valid_type[INTEGERTYPE][1];
         $VALIDINTIGERTYPE         =  self::VALIDATE_POST($VALIDINTIGERTYPE_ID);

        if(!is_integer( $VALIDINTIGERTYPE)) : return $VALIDERROR_INTIGERTYPE; 
        endif;
      
      endif;

       /**
        *
        * Defined CHECK VALID FLOAT DATA TYPE
        * @since 04.10.21
        * @since v1.0
        * 
        **/
       if (isset($valid_type[FLOATTYPE])) :

        error_reporting(0);

        $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
        
        $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $valid_type[FLOATTYPE][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_FLOATTYPE'])  );
        $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[FLOATTYPE][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_FLOATTYPE']) );

         if(  ( isset( $REH_SP1 )) == true )
         {
           
           print( $RequestErrorHandler::report_dump($valid_type, FLOATTYPE));
           print( $REH_SP1 );
           print( "<br />" );
           
         }
         if( ( isset(  $REH_SP2 ) ) == true )
         {
           
           print( $RequestErrorHandler::report_dump($valid_type, FLOATTYPE));
           print( $REH_SP2 );
           
         }

         if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
        endif;

         $VALIDFLOAT_ID         =  $valid_type[FLOATTYPE][0];
         $VALIDERROR_FLOAT      =  $valid_type[FLOATTYPE][1];
         $VALIDFLOAT            =  self::VALIDATE_POST($VALIDFLOAT_ID);

         if(!is_float($VALIDFLOAT)) : return $VALIDERROR_FLOAT; 
         endif;

       endif;

      /**
        *
        * Defined CHECK CONTAIN UPPER CASE TYPE
        * @since 10.21.21 
        * @since v1.4
        * 
        **/
        if (isset($valid_type[CONTAIN_UPPERCASE])) :

          error_reporting(0);
  
          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $valid_type[CONTAIN_UPPERCASE][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_CONTAIN_UPPERCASE'])  );
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[CONTAIN_UPPERCASE][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_CONTAIN_UPPERCASE']) );
  
           if(  ( isset( $REH_SP1 )) == true )
           {
             
             print( $RequestErrorHandler::report_dump($valid_type, CONTAIN_UPPERCASE));
             print( $REH_SP1 );
             print( "<br />" );
             
           }
           if( ( isset(  $REH_SP2 ) ) == true )
           {
             
             print( $RequestErrorHandler::report_dump($valid_type, CONTAIN_UPPERCASE));
             print( $REH_SP2 );
             
           }
  
           if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
          endif;
  
           $VALIDCONTAIN_UPPERCASE_ID         =  $valid_type[CONTAIN_UPPERCASE][0];
           $VALIDERROR_CONTAIN_UPPERCASE      =  $valid_type[CONTAIN_UPPERCASE][1];
           $VALIDCONTAIN_UPPERCASE            =  self::VALIDATE_POST($VALIDCONTAIN_UPPERCASE_ID);
  
           if(!preg_match('@[A-Z]@', $VALIDCONTAIN_UPPERCASE)) : return $VALIDERROR_CONTAIN_UPPERCASE; 
           endif;
  
         endif;

       /**
        *
        * Defined CHECK CONTAIN LOWER CASE TYPE
        * @since 10.21.21 
        * @since v1.4
        * 
        **/
        if (isset($valid_type[CONTAIN_LOWERCASE])) :

          error_reporting(0);
  
          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $valid_type[CONTAIN_LOWERCASE][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_CONTAIN_LOWERCASE'])  );
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[CONTAIN_LOWERCASE][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_CONTAIN_LOWERCASE']) );
  
           if(  ( isset( $REH_SP1 )) == true )
           {
             
             print( $RequestErrorHandler::report_dump($valid_type, CONTAIN_LOWERCASE ));
             print( $REH_SP1 );
             print( "<br />" );
             
           }
           if( ( isset(  $REH_SP2 ) ) == true )
           {
             
             print( $RequestErrorHandler::report_dump($valid_type, CONTAIN_LOWERCASE ));
             print( $REH_SP2 );
             
           }
  
           if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
          endif;
  
           $VALIDCONTAIN_LOWERCASE_ID         =  $valid_type[CONTAIN_LOWERCASE][0];
           $VALIDERROR_CONTAIN_LOWERCASE      =  $valid_type[CONTAIN_LOWERCASE][1];
           $VALIDCONTAIN_LOWERCASE            =  self::VALIDATE_POST($VALIDCONTAIN_LOWERCASE_ID);
  
           if(!preg_match('@[a-z]@',  $VALIDCONTAIN_LOWERCASE)) : return  $VALIDERROR_CONTAIN_LOWERCASE ; 
           endif;
  
         endif;

       /**
        *
        * Defined CHECK CONTAIN CONTAIN_NUMBER TYPE
        * @since 10.21.21 
        * @since v1.4
        * 
        **/
        if (isset($valid_type[CONTAIN_NUMBER])) :

          error_reporting(0);
  
          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $valid_type[CONTAIN_NUMBER][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_CONTAIN_NUMBER'])  );
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[CONTAIN_NUMBER][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_CONTAIN_NUMBER']) );
  
           if(  ( isset( $REH_SP1 )) == true )
           {
             
             print( $RequestErrorHandler::report_dump($valid_type, CONTAIN_NUMBER ));
             print( $REH_SP1 );
             print( "<br />" );
             
           }
           if( ( isset(  $REH_SP2 ) ) == true )
           {
             
             print( $RequestErrorHandler::report_dump($valid_type, CONTAIN_NUMBER ));
             print( $REH_SP2 );
             
           }
  
           if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
          endif;
  
           $VALIDCONTAIN_NUMBER_ID         =  $valid_type[CONTAIN_NUMBER][0];
           $VALIDERROR_CONTAIN_NUMBER      =  $valid_type[CONTAIN_NUMBER][1];
           $VALIDCONTAIN_NUMBER            =  self::VALIDATE_POST($VALIDCONTAIN_NUMBER_ID);
  
           if(!preg_match('@[0-9]@', $VALIDCONTAIN_NUMBER )) : return   $VALIDERROR_CONTAIN_NUMBER ; 
           endif;
  
         endif;

       /**
        *
        * Defined CHECK CONTAIN CONTAIN_SPECIALCHAR TYPE
        * @since 10.21.21 
        * @since v1.4
        * 
        **/
        if (isset($valid_type[CONTAIN_SPECIALCHAR])) :

          error_reporting(0);
  
          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $valid_type[CONTAIN_SPECIALCHAR][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_CONTAIN_SPECIALCHAR'])  );
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[CONTAIN_SPECIALCHAR][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_CONTAIN_SPECIALCHAR']) );
  
           if(  ( isset( $REH_SP1 )) == true )
           {
             
             print( $RequestErrorHandler::report_dump($valid_type, CONTAIN_SPECIALCHAR ));
             print( $REH_SP1 );
             print( "<br />" );
             
           }
           if( ( isset(  $REH_SP2 ) ) == true )
           {
             
             print( $RequestErrorHandler::report_dump($valid_type, CONTAIN_SPECIALCHAR ));
             print( $REH_SP2 );
             
           }
  
           if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
          endif;
  
           $VALIDCONTAIN_SPECIALCHAR_ID         =  $valid_type[CONTAIN_SPECIALCHAR][0];
           $VALIDERROR_CONTAIN_SPECIALCHAR      =  $valid_type[CONTAIN_SPECIALCHAR][1];
           $VALIDCONTAIN_SPECIALCHAR            =  self::VALIDATE_POST($VALIDCONTAIN_SPECIALCHAR_ID);
  
           if( !preg_match('@[^\w]@', $VALIDCONTAIN_SPECIALCHAR )) : return   $VALIDERROR_CONTAIN_SPECIALCHAR; 
           endif;
  
         endif;

      /**
       *
       * Defined CHECK VALID STRONG PASSWORD
       * @since 10.21.21
       * @since v1.4
       * 
      **/
      if ( isset($valid_type[VALIDPASSWORD]) ) :

        error_reporting(0);

        $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
        
        $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $valid_type[VALIDPASSWORD][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_VALIDPASSWORD'])  );
        $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[VALIDPASSWORD][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_VALIDPASSWORD']) );

         if(  ( isset( $REH_SP1 )) == true )
         {
           
           print( $RequestErrorHandler::report_dump($valid_type, VALIDPASSWORD));
           print( $REH_SP1 );
           print( "<br />" );
           
         }
         if( ( isset(  $REH_SP2 ) ) == true )
         {
           
           print( $RequestErrorHandler::report_dump($valid_type, VALIDPASSWORD));
           print( $REH_SP2 );
           
         }

         if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
        endif;

        $VALIDATE_VALIDPASSORD_REQUEST_DEFAULT   =  $valid_type[VALIDPASSWORD][0];
        $VALIDATE_VALIDPASSORD_REQUEST_ERROR     =  $valid_type[VALIDPASSWORD][1];
        $VALIDATE_VALIDPASSWORD                  =  self::VALIDATE_POST($VALIDATE_VALIDPASSORD_REQUEST_DEFAULT);
    
        if( !preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $VALIDATE_VALIDPASSWORD )) : return $VALIDATE_VALIDPASSORD_REQUEST_ERROR; 
        endif;
     
      endif;    


      /**
       *
       * Defined CHECK NULL_OR_EMPTY
       * @since 10.21.21
       * @since v1.4
       * 
      **/
      if ( isset($valid_type[INPUTFIELD_EMPTY]) ) :

        error_reporting(0);

        $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
        
        $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $valid_type[INPUTFIELD_EMPTY][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_INPUTFIELD_EMPTY'])  );
        $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[INPUTFIELD_EMPTY][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_INPUTFIELD_EMPTY']) );

         if(  ( isset( $REH_SP1 )) == true )
         {
           
           print( $RequestErrorHandler::report_dump($valid_type, INPUTFIELD_EMPTY ));
           print( $REH_SP1 );
           print( "<br />" );
           
         }
         if( ( isset(  $REH_SP2 ) ) == true )
         {
           
           print( $RequestErrorHandler::report_dump($valid_type, INPUTFIELD_EMPTY ));
           print( $REH_SP2 );
           
         }

         if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ) :  die; 
        endif;

        $VALIDATE_NULL_OR_EMPTY_ID        =  $valid_type[INPUTFIELD_EMPTY][0];
        $VALIDATE_NULL_OR_EMPTY_ERROR     =  $valid_type[INPUTFIELD_EMPTY][1];
        $VALIDATE_NULL_OR_EMPTY           =  self::VALIDATE_POST($VALIDATE_NULL_OR_EMPTY_ID);
    
        if(  !isset( $VALIDATE_NULL_OR_EMPTY ) || empty( $VALIDATE_NULL_OR_EMPTY ) || is_null( $VALIDATE_NULL_OR_EMPTY ) ) : return $VALIDATE_NULL_OR_EMPTY_ERROR; 
        endif;
     
      endif;   

      /**
       *
       * Defined CHECK VALID CONFIRM PASSWORD
       * @since 04.10.21
       * @since v1.0
       * 
      **/
      if ( isset($valid_type[CONFIRMPASSWORD]) ) :

        error_reporting(0);
               
        $CATCH_ERROR_PARAM_HANDLER = REQUEST::CATCH_ERROR_PARAM_HANDLER();
      
        $REH_SP1 = VALIDATE::STRINGTYPE(  $valid_type[CONFIRMPASSWORD][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_CONFIRMPASSWORD']));
        $REH_SP2 = VALIDATE::STRINGTYPE(  $valid_type[CONFIRMPASSWORD][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_CONFIRMPASSWORD']));
        $REH_SP3 = VALIDATE::STRINGTYPE(  $valid_type[CONFIRMPASSWORD][2]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_CONFIRMPASSWORD']));
      

        if(  ( isset( $REH_SP1 )) == true )
        {
         
          print( $RequestErrorHandler::report_dump($valid_type, CONFIRMPASSWORD ));
          print( $REH_SP1 );
          print( "<br />" );
         
        }
        if( ( isset(  $REH_SP2 ) ) == true )
        {
         
          print( $RequestErrorHandler::report_dump($valid_type, CONFIRMPASSWORD ));
          print( $REH_SP2 );
         
        }
        if(  ( isset(  $REH_SP3  ) ) == true )
        {

         print( $RequestErrorHandler::report_dump($valid_type, CONFIRMPASSWORD ));
         print( $REH_SP3 );
         print( "<br />" );

        }

       if( isset( $REH_SP1 ) ||  isset(  $REH_SP2  ) ||  isset(  $REH_SP3  ) ) :  die; 
      endif;

        $VALIDATE_CONFIRMPASSORD_REQUEST_DEFAULT   =  $valid_type[CONFIRMPASSWORD][0];
        $VALIDATE_CONFIRMPASSORD_REQUEST_CONFIRM   =  $valid_type[CONFIRMPASSWORD][1];
        $VALIDATE_CONFIRMPASSORD_REQUEST_ERROR     =  $valid_type[CONFIRMPASSWORD][2];
        
    
        if( $VALIDATE_CONFIRMPASSORD_REQUEST_DEFAULT !== $VALIDATE_CONFIRMPASSORD_REQUEST_CONFIRM ) : return $VALIDATE_CONFIRMPASSORD_REQUEST_ERROR; 
        endif;
     
      endif;    

     /**
      *
      * Defined USER_REDIRECT
      * @since 04.10.21
      * @since v1.0
      * 
      **/
     if( isset($valid_type[USER_REDIRECT])) :

       $USER_REDIRECT         =  $valid_type[USER_REDIRECT][0];
       $USER_SESSIONTRUE      =  $valid_type[USER_REDIRECT][1];

      if(isset($USER_SESSIONTRUE) == true) : AUTH::USERAUTH($USER_REDIRECT, $USER_SESSIONTRUE);  else : AUTH::USERAUTH($USER_REDIRECT); 
      endif;

     endif;

    endif;

  endif;
  
 }

} // Class end
