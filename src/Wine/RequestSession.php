<?php namespace PHPWineVanillaFlavour\Wine; ?>
<?php  

 use \PHPWineVanillaFlavour\Wine\System\Auth;  
 
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

trait RequestSession
{

  /**
    * @var 
    * @property 
    * defined $username on input form tag
    * @since v1.2.0.0 
    * @since 02.12.20222
    **/  
    protected static string|null  $username;

  /**
    * @var 
    * @property 
    * defined $email on input form tag
    * @since v1.2.0.0 
    * @since 02.12.20222
    **/ 
    protected static string|null  $email;

  /**
    * @var 
    * @property 
    * defined $mobile on input form tag
    * @since v1.2.0.0 
    * @since 02.12.20222
    **/ 
    protected static string|null  $mobile;

  /**
    * @var 
    * @property 
    * defined $hashed_password on input form tag
    * @since v1.2.0.0 
    * @since 02.12.20222
    **/ 
    protected static string|null  $hashed_password;

  /**
    * @var 
    * @property 
    * defined $id on input form tag
    * @since v1.2.0.0 
    * @since 02.12.20222
    **/ 
    protected static string|null  $id;

  /**
    * @var 
    * @property 
    * defined $created_at on input form tag
    * @since v1.2.0.0 
    * @since 02.12.20222
    **/ 
    protected static string|null  $created_at;

/**
  *
  * Defined SYSTEMQUERY PREPARED STATEMENTS
  * @since 03.19.21
  * @since v1.0
  * 
 **/
 public static function SYSTEMQUERY(string $USER_REDIRECT, string $NOTASSOCIATED_CREDENTIAL, $PASSWORD_HASCONTAINS, $stmt)
 {

  /**
   * @param _1 $username
   * @param _2 $email
   * @param _3 $mobile
   * @param _4 $hashed_password
   * @param AUTH::BIND( $connection, array $bind_user_data = [] ); 
   * @param Default|CaseSensitive = ["username","email","mobile","password"...etc...]
   * @param 
     AUTH::RETURNSQL('users',[
        "username"
        ,"email"
        ,"mobile"
        ,"password"
        ,"id"
        ,"created_at"
     ]);
  *
  *
  *
  **/
  $stmt->bind_result(SELF::$username, SELF::$email, SELF::$mobile, SELF::$hashed_password, SELF::$id, SELF::$created_at);
  
  if($stmt->fetch()) : 
        
        /**
         * @param _execute veryfied password
        **/
        if(password_verify($PASSWORD_HASCONTAINS, self::$hashed_password)) : 
         
        /**
         *
         * Defined IMPLEMENT USER REMEMBER ME Cookies
         * @since 04.06.21
         * @since v1.0
         *
         **/ 
         $getStamp = AUTH::REMEMBERME( REMEMBER , USERNAME , PASSWORD

          ,self::$username
          ,$PASSWORD_HASCONTAINS
          ,$timeStamp = [

          TIMES_STAMP_COOKIES_IN_TIME => [time() + (10 * 365 * 24 * 60 * 60) , time() + (10 * 365 * 24 * 60 * 60) ]

         ]);
         
        /**
         *
         * Defined password is associated then create seasion id
         * @since 04.06.21
         * @since v1.0
         *
         **/ 
         session_regenerate_id();
                           
         // ADD YOUR SESSION DATA GOES HERE
         $_SESSION["AUTH"]       = true;
         $_SESSION["id"]         = SELF::$id;
    
             
    

         /**
         *
         *
         *
         * Defined if the session is set to be TRUE the redirect to certain page
         * @since 04.06.21
         * @since v1.0
         *
         *
         *
         **/ 
         AUTH::USERAUTH($USER_REDIRECT, true);
        
         // IF SESSION IF FALSE MEANS ERROR RETURN ERROR MSG
         else :

          /**
           *
           * Defined fail credentials error message will return 
           * @since 04.06.21
           * @since v1.0
           *
          **/ 
          return $NOTASSOCIATED_CREDENTIAL;
        
        endif; // verify data

  endif; // fetch data

 }



}



        
