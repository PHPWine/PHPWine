<?php namespace PHPWineVanillaFlavour\Wine\System; ?>
<?php 
 
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
 * @method VALIDATE_V2::MANDATORY();
 * @method VALIDATE_V2::TOOLTIPS();
 * @method VALIDATE_v2::SANITIZED_VALUE();
 * @method VALIDATE_V2::VALIDTYPE();
 *
 */

class Validate_v2 extends System 
{

/**
  * @var 
  * @property MANDATORY
  * defined array key to MANDATORY Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
  protected CONST MANDATORY  = 'mandatory';

/**
  * @var 
  * @property TOOLTIPS
  * defined array key to TOOLTIPS Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
  protected CONST TOOLTIPS   = 'tooltips';

/**
  * @var 
  * @property VALIDTYPE
  * defined array key to VALIDTYPE Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
  protected CONST VALIDTYPE  = 'valid_type';

/**
  * @var 
  * @property BINDDATA
  * defined array key to BINDDATA Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
  protected CONST BINDDATA   = 'bind_data';

  /**
  *
  * Defined : MANDATORY array get from user display tooltip or Tooltips
  * @since 02.05.2022
  * @since v1.2.0.0
  * 
 **/  
static protected function MANDATORY( array|string $tag_name = null , array $request = null )
{
  
  # PREPARE EMPTY ARRAY FOR CONTAINER APPENED
  $mandatory = [];

  # CHECK IF IT IS AN ARRAYS OF DATA THE  IF YES ? 
  # LOOP THE TAG NAME AND PROCESS THE REQUEST DATARETURN BACK TO THE USER AS MANDATORY ERROR MESSAGE !
  if( is_array( $tag_name ) ) {
    
    # LOOPING THE DATA BEGIN HERE !
    foreach ( $tag_name as $value )  
    {
       
      # CHECK IF THE POST VALUE IS NOT EMPTY OR NOT NULL ? !
      if( empty( $_POST[ $value ] ) || is_null( $_POST[ $value ] ) ) 
      {
         
        # CHECK FOR A KEY FILTER ARRAYS FROM REQUEST ARRAY DATA VALIDATION
         if( SYSTEM::CHECK_KEY_MANDATORY_ARRAY(  $value , $request ) ) :  
          # IF SO , THEN PROCESS THE MANDATORY AND RETURN BACK TO THE USERS
          if( SYSTEM::CHECK_KEY_MANDATORY_ARRAY( SELF::MANDATORY , $request[$value] ) )  { $mandatory[] = (SYSTEM::SANITIZEREQUEST($request[$value][SELF::MANDATORY]));  } 
        endif;
      
      } 

    } // END OF for each
    
    # RETURN ALL BACK TO THE USERS AS THEY MISS FILL IN THE MANDATORY 
    return $mandatory;

  } 
   
   # CHECK IF NOT ARRAY OR WHAT IF THIS IS A STRING VALUE MEAN ONE SINGLE VALUE ?
   else {

     # IF THIS IS NOT ARRAY ! 
     if(  SYSTEM::CHECK_KEY_MANDATORY_ARRAY( $tag_name , $request ) ) 
     {
       # CHECK IF ISSET THE POST TAGS OR EMPTY AND ARRAYS
       # IF FALSE OR NOT THEN CHECK THE APPROPRIATE KEYS OF MANDATORY ARRAYS
       # RETURN BACK TO THE USER MANDATORY AS STRING OR SINGLE DATA
       if(  empty( $_POST[$tag_name] ) || !isset( $_POST[$tag_name] ) || is_null( $_POST[$tag_name] ) ) { if( SYSTEM::CHECK_KEY_MANDATORY_ARRAY( SELF::MANDATORY , $request[$tag_name] ) )  { return $request[$tag_name][SELF::MANDATORY]; }
   
    }  
    
      # ELSE RETURN NOTHING MEANS IT'S TOTALLY NULL
      else { return ''; }
    
  } 

 }

}

 /**
  *
  * Defined : @method SANITIZED_VALUE return fromuser goes to database
  * @since 02.05.2022
  * @since v1.2.0.0
  * 
 **/ 
static protected function SANITIZED_VALUE( array|string $tag_name = null )
{
  
  # PREPARE EMPTY ARRAY FOR CONTAINER APPENED
  $mandatory = [];
  
  #CHECK IF IT IS AN ARRAYS FO DATA THE  IF YES ? 
  # LOOP THE TAG NAME AND PROCESS THE REQUEST DATA SANITATION BEFORE INSERTING ON DATABASES !
  if( is_array( $tag_name ) )
  {
    # LOOP THE DATA THAT REQUEST FROM USERS
     foreach ($tag_name as $value ) { $mandatory[] =  SYSTEM::SANITIZEREQUEST( $_POST[$value] ); }
    # RETURN THE VALUE FROM BASE ON ARRAY VALUE TO PREPARE INSERTING INTO DATABASES
     return  $mandatory;
  }
  
  # ELSE STILL DO SANITIZE WHATEVER HAPPEN EVEN THOUGH IT IS NULL OR EMPTY VALUE!
  else {
    # RETURN SANITATION !
    return  SYSTEM::SANITIZEREQUEST( $_POST[ $tag_name ] );
  } 

}

 /**
  *
  * Defined : @method TOOLTIPS return tips data for users
  * @since 02.05.2022
  * @since v1.2.0.0
  * 
 **/  
static protected function TOOLTIPS( array|string $tag_name = null , array $request = null ) { $valid_type = $request[$tag_name][SELF::TOOLTIPS]; return SELF::v2Validation( $tag_name , $request , $valid_type ); }

 /**
  *
  * Defined : @method VALIDTYPE return valid type data from users
  * @since 02.05.2022
  * @since v1.2.0.0
  * 
 **/  
static protected function VALIDTYPE( string $tag_name = null , array $request = null ) { $validation = $request[$tag_name][SELF::VALIDTYPE]; return (empty($_POST[$tag_name])) ?  false : SELF::v2Validation( $tag_name , $request , $validation); }

 /**
  *
  * Defined : @method v2Validation return tooltips and valid type of datas 
  * @since 02.05.2022
  * @since v1.2.0.0
  * 
 **/  
static private function v2Validation( array|string $tag_name = null , array $request = null , $valid_type )
{

    # CHECK OF THIS IS AN ARRAY THEN DO IT AN ARRAYS !
    # THIS IS NOT ARRAY ! 
    
    if(  SYSTEM::CHECK_KEY_MANDATORY_ARRAY( $tag_name , $request ) ) 
    { 
      $RequestErrorHandler = NEW \PHPWineVanillaFlavour\Wine\System\Validate();

         /**
          * Defined CHECK VALID LESS THAN
          * @since 04.10.21
          * @since v1.2.0.0
          * 
          **/
          if(isset($valid_type[LESS_THAN])) :

            error_reporting(0);
                
              $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
            
              $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $tag_name , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_LESS_THAN']));
              $REH_SP2 = $RequestErrorHandler::INTEGERTYPE( $valid_type[LESS_THAN][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_LESS_THAN']));
              $REH_SP3 = $RequestErrorHandler::STRINGTYPE(  $valid_type[LESS_THAN][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_LESS_THAN']));
            
 
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
            
             $VALIDLESSTHAN_ID             =  $tag_name;
             $VALIDLESSTHAN_ARG            =  $valid_type[LESS_THAN][0];
             $VALIDERROR_VALIDLESSTHAN_MSG =  $valid_type[LESS_THAN][1];
             $VALIDLESSTHAN                =  $_POST[$VALIDLESSTHAN_ID];
 
             if( strlen($VALIDLESSTHAN) < $VALIDLESSTHAN_ARG ) : return $VALIDERROR_VALIDLESSTHAN_MSG;   endif;
     
           endif; // VALIDATE_LENGTH_LESS_THAN_REQUEST 

        /**
          *
          * Defined CHECK VALID LENGTH GREATER THAN
          * @since 04.10.21
          * @since v1.2.0.0
          * 
        **/
        if (isset($valid_type[GREATER_THAN])) :

          error_reporting(0);

          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $tag_name  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_GREATER_THAN']));
          $REH_SP2 = $RequestErrorHandler::INTEGERTYPE( $valid_type[GREATER_THAN][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_GREATER_THAN']));
          $REH_SP3 = $RequestErrorHandler::STRINGTYPE(  $valid_type[GREATER_THAN][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_GREATER_THAN']));

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

          $VALIDGREATER_THAN_ID        =  $tag_name;
          $VALIDGREATER_THAN_ID_ARG    =  $valid_type[GREATER_THAN][0];
          $VALIDERROR_GREATER_THAN_MGS =  $valid_type[GREATER_THAN][1];
          $VALIDGREATER_THAN           =  $_POST[$VALIDGREATER_THAN_ID];
 
          if(strlen( $VALIDGREATER_THAN  ) > $VALIDGREATER_THAN_ID_ARG)  : return $VALIDERROR_GREATER_THAN_MGS; endif;
 
         endif; // CHECK VALID LENGTH GREATER THAN         

         /**
          * Defined CHECK VALID MIN LENGTH
          * @since 02.09.2022
          * @since v1.2.0.0
          * 
          **/
      if( isset($valid_type[MINLENGTH])) :

        error_reporting(0);

        $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
       

        $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $tag_name                  , SYSTEM::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_MINLENGTH']));
        $REH_SP2 = $RequestErrorHandler::INTEGERTYPE( $valid_type[MINLENGTH][0]  , SYSTEM::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_MINLENGTH']));
        $REH_SP3 = $RequestErrorHandler::STRINGTYPE(  $valid_type[MINLENGTH][1]  , SYSTEM::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_MINLENGTH']));

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
        
        $VALIDMINLENGTH_ID      =  $tag_name;
        $VALIDMINLENGTH_ARG     =  $valid_type[MINLENGTH][0];
        $VALIDERROR_MINLENGTH   =  $valid_type[MINLENGTH][1];
        $VALIDMINLENGTH         =  $_POST[$VALIDMINLENGTH_ID];

        if(strlen($VALIDMINLENGTH) <= $VALIDMINLENGTH_ARG) : return $VALIDERROR_MINLENGTH; endif;

      endif; // VALIDATE_MINLENGTH_REQUEST MINLENGTH

         /**
          * Defined CHECK VALID MAX LENGTH
          * @since 02.09.2022
          * @since v1.2.0.0
          * 
          **/
          if ( isset($valid_type[MAXLENGTH])) :

            error_reporting(0); 

            $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
            
            $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $tag_name  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_MAXLENGTH']));
            $REH_SP2 = $RequestErrorHandler::INTEGERTYPE( $valid_type[MAXLENGTH][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_MAXLENGTH']));
            $REH_SP3 = $RequestErrorHandler::STRINGTYPE(  $valid_type[MAXLENGTH][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_MAXLENGTH']));

  
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
           
            $VALIDMAXLENGTH_ID      =  $tag_name;
            $VALIDMAXLENGTH_ARG     =  $valid_type[MAXLENGTH][0];
            $VALIDERROR_MAXLENGTH   =  $valid_type[MAXLENGTH][1];
            $VALIDMAXLENGTH         =  $_POST[$VALIDMAXLENGTH_ID];

           if(strlen($VALIDMAXLENGTH) >= $VALIDMAXLENGTH_ARG)  : return $VALIDERROR_MAXLENGTH; endif;

         endif; // VALIDATE_MAXLENGTH_REQUEST MAX LENGTH

         /**
          *
          * Defined CHECK VALID LENGTH EQUALTO
          * @since 02.09.2022
          * @since v1.2.0.0
          * 
          **/
          if (isset($valid_type[EQUALTO])) :

            error_reporting(0);
  
            $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
            
            $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $tag_name  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_EQUALTO']));
            $REH_SP2 = $RequestErrorHandler::INTEGERTYPE( $valid_type[EQUALTO][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_EQUALTO']));
            $REH_SP3 = $RequestErrorHandler::STRINGTYPE(  $valid_type[EQUALTO][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_EQUALTO']));
  
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
            
              $EQUALTO_ID          =  $tag_name;
              $EQUALTO_ARG         =  $valid_type[EQUALTO][0];
              $VALIDERROR_EQUALTO  =  $valid_type[EQUALTO][1];
              $EQUALTO             =  $_POST[$EQUALTO_ID];
  
            if(strlen($EQUALTO) == $EQUALTO_ARG)  : return  $VALIDERROR_EQUALTO; endif;
  
           endif;

        /**
         *
         * Defined CHECK VALID LENGTH EQUALTO STRICT
         * @since 02.09.2022
         * @since v1.2.0.0
         * 
         **/
        if (isset($valid_type[EQUAL_STRICT])) :

          error_reporting(0);

          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $tag_name  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_EQUAL_STRICT']));
          $REH_SP2 = $RequestErrorHandler::INTEGERTYPE( $valid_type[EQUAL_STRICT][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_EQUAL_STRICT']));
          $REH_SP3 = $RequestErrorHandler::STRINGTYPE(  $valid_type[EQUAL_STRICT][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_EQUAL_STRICT']));

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

          $EQUAL_STRICT_ID         =  $tag_name;
          $EQUAL_STRICT_ARG        =  $valid_type[EQUAL_STRICT][0];
          $VALIDERROR_EQUAL_STRICT =  $valid_type[EQUAL_STRICT][1];
          $EQUAL_STRICT            =  $_POST[$EQUAL_STRICT_ID];

          if(strlen($EQUAL_STRICT) === $EQUAL_STRICT_ARG )  : return $VALIDERROR_EQUAL_STRICT; endif;

        endif;

        /**
         *
         * Defined CHECK VALID EMAIL with @mail.com
         * @since 02.09.2022
         * @since v1.2.0.0
         * 
        **/
        if( isset($valid_type[VALID_EMAIL]) ) :

          error_reporting(0);

          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $tag_name  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_VALID_EMAIL']));
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[VALID_EMAIL][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_VALID_EMAIL']));

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
    
          $VALID_EMAIL_ID         =  $tag_name;
          $VALIDERROR_VALID_EMAIL =  $valid_type[VALID_EMAIL][0];
          $VALID_EMAIL            =  $_POST[$VALID_EMAIL_ID];
    
          if(!filter_var($VALID_EMAIL , FILTER_VALIDATE_EMAIL)) : return  $VALIDERROR_VALID_EMAIL; endif;

        endif;

        /**
         *
         * Defined CHECK VALID STRING DATA TYPE
         * @since 02.09.2022
         * @since v1.2.0.0
         * 
        **/
        if ( isset($valid_type[STRINGTYPE])) :

          error_reporting(0);

          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $tag_name  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_STRINGTYPE']));
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[STRINGTYPE][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_STRINGTYPE']));

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

          $VALIDSTRING_ID       =  $tag_name;
          $VALIDERROR_STRING    =  $valid_type[STRINGTYPE][0];
          $VALIDSTRING          =  $_POST[$VALIDSTRING_ID];

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
        
        $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $tag_name  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_NUMERICTYPE']));
        $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[NUMERICTYPE][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_NUMERICTYPE']));

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

         $VALIDNUMERIC_ID      =  $tag_name;
         $VALIDERROR_NUMERIC   =  $valid_type[NUMERICTYPE][0];
         $VALIDNUMERIC         =  $_POST[$VALIDNUMERIC_ID];

        if (!is_numeric($VALIDNUMERIC)) : return $VALIDERROR_NUMERIC; 
        endif;

      endif;

       /**
        *
        * Defined CHECK VALID NUMERIC DATA TYPE
        * @since 02.09.2022
        * @since v1.2.0.0
        * 
       **/
      if ( isset($valid_type[INTEGERTYPE]) ) :

        error_reporting(0);

        $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
        
        $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $tag_name  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_INTEGERTYPE'])  );
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
       
         $VALIDINTIGERTYPE_ID      =  $tag_name;
         $VALIDERROR_INTIGERTYPE   =  $valid_type[INTEGERTYPE][0];
         $VALIDINTIGERTYPE         =  $_POST[$VALIDINTIGERTYPE_ID];

        if(!is_integer( $VALIDINTIGERTYPE)) : return $VALIDERROR_INTIGERTYPE; 
        endif;
      
      endif;

       /**
        *
        * Defined CHECK VALID FLOAT DATA TYPE
        * @since 02.09.2022
        * @since v1.2.0.0
        * 
        **/
        if (isset($valid_type[FLOATTYPE])) :

          error_reporting(0);
  
          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $tag_name  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_FLOATTYPE'])  );
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[FLOATTYPE][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_FLOATTYPE']) );
  
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
  
           $VALIDFLOAT_ID         =  $tag_name;
           $VALIDERROR_FLOAT      =  $valid_type[FLOATTYPE][0];
           $VALIDFLOAT            =  $_POST[$VALIDFLOAT_ID];
  
           if(!is_float($VALIDFLOAT)) : return $VALIDERROR_FLOAT; 
           endif;
  
         endif;

      /**
        *
        * Defined CHECK CONTAIN UPPER CASE TYPE
        * @since 02.09.2022 
        * @since v1.2.0.0
        * 
        **/
        if (isset($valid_type[CONTAIN_UPPERCASE])) :

          error_reporting(0);
  
          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $tag_name  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_CONTAIN_UPPERCASE'])  );
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[CONTAIN_UPPERCASE][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_CONTAIN_UPPERCASE']) );
  
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
  
           $VALIDCONTAIN_UPPERCASE_ID         =  $tag_name;
           $VALIDERROR_CONTAIN_UPPERCASE      =  $valid_type[CONTAIN_UPPERCASE][0];
           $VALIDCONTAIN_UPPERCASE            =  $_POST[$VALIDCONTAIN_UPPERCASE_ID];
  
           if(!preg_match('@[A-Z]@', $VALIDCONTAIN_UPPERCASE)) : return $VALIDERROR_CONTAIN_UPPERCASE; 
           endif;
  
         endif;

       /**
        *
        * Defined CHECK CONTAIN LOWER CASE TYPE
        * @since 02.09.2022 
        * @since v1.2.0.0
        * 
        **/
        if (isset($valid_type[CONTAIN_LOWERCASE])) :

          error_reporting(0);
  
          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $tag_name  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_CONTAIN_LOWERCASE'])  );
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[CONTAIN_LOWERCASE][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_CONTAIN_LOWERCASE']) );
  
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
  
           $VALIDCONTAIN_LOWERCASE_ID         =  $tag_name;
           $VALIDERROR_CONTAIN_LOWERCASE      =  $valid_type[CONTAIN_LOWERCASE][0];
           $VALIDCONTAIN_LOWERCASE            =  $_POST[$VALIDCONTAIN_LOWERCASE_ID ];
  
           if(!preg_match('@[a-z]@',  $VALIDCONTAIN_LOWERCASE)) : return  $VALIDERROR_CONTAIN_LOWERCASE ; 
           endif;
  
         endif;

       /**
        *
        * Defined CHECK CONTAIN CONTAIN_NUMBER TYPE
        * @since 02.09.2022
        * @since v1.2.0.0
        * 
        **/
        if (isset($valid_type[CONTAIN_NUMBER])) :

          error_reporting(0);
  
          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $tag_name  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_CONTAIN_NUMBER'])  );
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[CONTAIN_NUMBER][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_CONTAIN_NUMBER']) );
  
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
  
           $VALIDCONTAIN_NUMBER_ID         =  $tag_name;
           $VALIDERROR_CONTAIN_NUMBER      =  $valid_type[CONTAIN_NUMBER][0];
           $VALIDCONTAIN_NUMBER            =  $_POST[ $VALIDCONTAIN_NUMBER_ID ];
  
           if(!preg_match('@[0-9]@', $VALIDCONTAIN_NUMBER )) : return   $VALIDERROR_CONTAIN_NUMBER ; 
           endif;
  
         endif;

      /**
        *
        * Defined CHECK CONTAIN CONTAIN_SPECIALCHAR TYPE
        * @since 02.09.2022 
        * @since v1.2.0.0
        * 
        **/
        if (isset($valid_type[CONTAIN_SPECIALCHAR])) :

          error_reporting(0);
  
          $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
          
          $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $tag_name                            , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_CONTAIN_SPECIALCHAR'])  );
          $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[CONTAIN_SPECIALCHAR][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_CONTAIN_SPECIALCHAR']) );
  
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
  
           $VALIDCONTAIN_SPECIALCHAR_ID         =  $tag_name;
           $VALIDERROR_CONTAIN_SPECIALCHAR      =  $valid_type[CONTAIN_SPECIALCHAR][0];
           $VALIDCONTAIN_SPECIALCHAR            =  $_POST[ $VALIDCONTAIN_SPECIALCHAR_ID  ];
  
           if( !preg_match('@[^\w]@', $VALIDCONTAIN_SPECIALCHAR )) : return   $VALIDERROR_CONTAIN_SPECIALCHAR; 
           endif;
  
         endif;

      /**
       *
       * Defined CHECK VALID STRONG PASSWORD
       * @since 02.09.2022
       * @since v1.2.0.0
       * 
      **/
      if ( isset($valid_type[VALIDPASSWORD]) ) :

        error_reporting(0);

        $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
        
        $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $tag_name  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_VALIDPASSWORD'])  );
        $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[VALIDPASSWORD][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_VALIDPASSWORD']) );

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

        $VALIDATE_VALIDPASSORD_REQUEST_DEFAULT   =  $tag_name;
        $VALIDATE_VALIDPASSORD_REQUEST_ERROR     =  $valid_type[VALIDPASSWORD][0];
        $VALIDATE_VALIDPASSWORD                  =  $_POST[$VALIDATE_VALIDPASSORD_REQUEST_DEFAULT];
    
        if( !preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $VALIDATE_VALIDPASSWORD )) : return $VALIDATE_VALIDPASSORD_REQUEST_ERROR; 
        endif;
     
      endif;            

      /**
       *
       * Defined CHECK NULL_OR_EMPTY
       * @since 02.09.2022
       * @since v1.2.0.0
       * 
      **/
      if ( isset($valid_type[INPUTFIELD_EMPTY]) ) :

        error_reporting(0);

        $CATCH_ERROR_PARAM_HANDLER = $RequestErrorHandler::CATCH_ERROR_PARAM_HANDLER();
        
        $REH_SP1 = $RequestErrorHandler::STRINGTYPE(  $tag_name  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_INPUTFIELD_EMPTY'])  );
        $REH_SP2 = $RequestErrorHandler::STRINGTYPE(  $valid_type[INPUTFIELD_EMPTY][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_INPUTFIELD_EMPTY']) );

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

        $VALIDATE_NULL_OR_EMPTY_ID        =  $tag_name;
        $VALIDATE_NULL_OR_EMPTY_ERROR     =  $valid_type[INPUTFIELD_EMPTY][0];
        $VALIDATE_NULL_OR_EMPTY           =  $_POST[ $VALIDATE_NULL_OR_EMPTY_ID ];
    
        if(  !isset( $VALIDATE_NULL_OR_EMPTY ) || empty( $VALIDATE_NULL_OR_EMPTY ) || is_null( $VALIDATE_NULL_OR_EMPTY ) ) : return $VALIDATE_NULL_OR_EMPTY_ERROR; 
        endif;
     
      endif;     
      
      /**
       *
       * Defined CHECK VALID CONFIRM PASSWORD
       * @since 02.09.2022
       * @since v1.2.0.0
       * 
      **/
      if ( isset($valid_type[CONFIRMPASSWORD]) ) :

        error_reporting(0);
               
        $CATCH_ERROR_PARAM_HANDLER = REQUEST::CATCH_ERROR_PARAM_HANDLER();
      
        $REH_SP1 = VALIDATE::STRINGTYPE(  $tag_name  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['FIRST_CONFIRMPASSWORD']));
        $REH_SP2 = VALIDATE::STRINGTYPE(  $valid_type[CONFIRMPASSWORD][0]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['SECOND_CONFIRMPASSWORD']));
        $REH_SP3 = VALIDATE::STRINGTYPE(  $valid_type[CONFIRMPASSWORD][1]  , self::RETURN_ARRAY_AS_STRING($CATCH_ERROR_PARAM_HANDLER['THIRD_CONFIRMPASSWORD']));
      

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

        $VALIDATE_CONFIRMPASSORD_REQUEST_DEFAULT   =  $tag_name;
        $VALIDATE_CONFIRMPASSORD_REQUEST_CONFIRM   =  $valid_type[CONFIRMPASSWORD][0];
        $VALIDATE_CONFIRMPASSORD_REQUEST_ERROR     =  $valid_type[CONFIRMPASSWORD][1];
        
        if( $VALIDATE_CONFIRMPASSORD_REQUEST_DEFAULT !== $VALIDATE_CONFIRMPASSORD_REQUEST_CONFIRM ) : return $VALIDATE_CONFIRMPASSORD_REQUEST_ERROR; 
        endif;
     
      endif;  

    } 


}



}