<?php namespace PHPWineVanillaFlavour\Wine\System; ?>
<?php
  
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
 */
  

   
 Class Request {
 
 /**
  * @param _Processing user activate session
 **/ 
CONST SESSION_PORTAL_REQUEST          = 'DO_USER_BEGIN_SESSION';

/**
 * @param _Processing user activate new register user
**/ 
CONST SESSION_REGISTERDATA_REQUEST    = 'DO_USER_ADD_NEW_REGISTER';

/**
 * @param _Processing user activate encrypt data session
**/ 
CONST SESSION_ENCRYPTDATA_REQUEST     = 'DO_USER_ENCRYPTDATA_REGISTER';

/**
 * @param _Processing user activate confirm encrypt data session
**/
CONST SESSION_ENCRYPTCONFIRM_REQUEST  = 'DO_USER_ENCRYPTCONFIRM_REGISTER';

/**
 * @param _Processing user email session
**/
CONST VALIDATE_EMAIL_REQUEST          = 'DO_USER_VALIDATE_EMAIL';

/**
 * @param _Processing user validate string type
**/
CONST VALIDATE_STRINGTYPE_REQUEST     = 'DO_USER_VALIDATE_STRINGTYPE';

/**
 * @param _Processing user validate numeric type
**/ 
CONST VALIDATE_NUMERICTYPE_REQUEST    = 'DO_USER_VALIDATE_NUMERICTYPE';

/**
 * @param _Processing user validate float type
**/ 
CONST VALIDATE_FLOATTYPE_REQUEST      = 'DO_USER_VALIDATE_FLOATTYPE';

/**
 * @param _Processing user validate Min Length type
**/
CONST VALIDATE_MINLENGTH_REQUEST      = 'DO_USER_VALIDATE_MINLENGTH';

/**
 * @param _Processing user validate Max Length type
**/
CONST VALIDATE_MAXLENGTH_REQUEST      = 'DO_USER_VALIDATE_MAXLENGTH';

/**
 * @param _Processing user validate confirm password request 
**/
CONST VALIDATE_CONFIRMPASSORD_REQUEST = 'DO_USER_VALIDATE_CONFIRMPASSORD';

 /**
 * @param _Processing user eCatch error message
**/
CONST ERROR_DEVELOPER_CONCERN          = 'Contact your system developer for more info. Please try again later.'; 

/**
 * @var 
 * @property ARRAY_KEY_CHILD
 * defined array key to CHILD Enhancer/Optimizer quick child
 * @since v1.2.0.0 
 * @since 02.02.2022
 **/
 CONST CHILD = 'CHILD';

 /**
   * @var 
   * @property ARRAY_KEY_ATTR
   * defined array key to CHILD Enhancer/Optimizer quick child
   * @since v1.2.0.0 
   * @since 02.02.2022
   **/
 CONST ATTR  = 'ATTR';
 
 /**
   * @var 
   * @property ARRAY_KEY_INNER
   * defined array key to CHILD Enhancer/Optimizer quick child
   * @since v1.2.0.0 
   * @since 02.02.2022
   **/
 CONST INNER = 'INNER';
 
 /**
   * @var 
   * @property ARRAY_KEY_VALUE
   * defined array key to CHILD Enhancer/Optimizer quick child
   * @since v1.2.0.0 
   * @since 02.02.2022
   **/
 CONST VALUE = 'VALUE';


/**
 *
 * Defined CHECKER CATCH  TYPE error messages
 * @since 10.15.21
 * @since v1.3
 * 
**/
public static function CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null)
{
  
 if(empty($requestArgument) && empty($dataError))   : 
   
   return [
    
     'FIRST_LESS_THAN'      => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>First parameter must be</span> - String Data type <br /><hr /> <i> 
     
       Expect : LESS_THAN   => [ @param_1 must be : string, @param_2 must be : Intiger, @param_3 must be : string ] </i><br /><hr /> 
       Expect : LESS_THAN   => [ <b>'inputname'</b>, 6 , 'This is error message' ] </td></tr></table>"
     
   ],

     'SECOND_LESS_THAN'     => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Second parameter must be</span> - Intiger Data type <br /><hr /> <i>

       Expect : LESS_THAN   => [ @param_1 must be : string, @param_2 must be : Intiger, @param_3 must be : string ] </i><br /><hr /> 
       Expect : LESS_THAN   => [ 'inputname', <b> 6 </b> , 'This is error message' ] </td></tr></table>"

   ],

    'THIRD_LESS_THAN'      =>  ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Third parameter must be</span> - String Data type <br /><hr /> <i> 

      Expect : LESS_THAN   => [ @param_1 must be : string, @param_2 must be : Intiger, @param_3 must be : string ] </i><br /><hr /> 
      Expect : LESS_THAN   => [ 'inputname', 6 , <b>'This is error message'</b> ] </td></tr></table>"
 
   ],
         
     'FIRST_GREATER_THAN'      => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>First parameter must be</span> - String Data type <br /><hr /> <i> 
               
       Expect : GREATER_THAN   => [ @param_1 must be : string, @param_2 must be : Intiger, @param_3 must be : string ] </i><br /><hr /> 
       Expect : GREATER_THAN   => [ <b>'inputname'</b>, 6 , 'This is error message' ] </td></tr></table>"

   ],

      'SECOND_GREATER_THAN'    => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Second parameter must be</span> - Intiger Data type <br /><hr /> <i>

       Expect : GREATER_THAN   => [ @param_1 must be : string, @param_2 must be : Intiger, @param_3 must be : string ] </i><br /><hr /> 
       Expect : GREATER_THAN   => [ 'inputname', <b> 6 </b> , 'This is error message'] </td></tr></table>"

   ],

      'THIRD_GREATER_THAN'      =>  ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Third parameter must be</span> - String Data type <br /><hr /> <i> 

        Expect : GREATER_THAN   => [ @param_1 must be : string, @param_2 must be : Intiger, @param_3 must be : string ] </i><br /><hr /> 
        Expect : GREATER_THAN   => [ 'inputname', 6 , <b>'This is error message'</b> ] </td></tr></table>"

   ],
         
     'FIRST_MINLENGTH'       => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>First parameter must be</span> - String Data type <br /><hr /> <i> 
             
        Expect : MINLENGTH   => [ @param_1 must be : string, @param_2 must be : Intiger, @param_3 must be : string ] </i><br /><hr /> 
        Expect : MINLENGTH   => [ <b>'inputname'</b>, 6 , 'This is error message' ] </td></tr></table>"

   ],

     'SECOND_MINLENGTH'     => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Second parameter must be</span> - Intiger Data type <br /><hr /> <i>

       Expect : MINLENGTH   => [ @param_1 must be : string, @param_2 must be : Intiger, @param_3 must be : string ] </i><br /><hr /> 
       Expect : MINLENGTH   => [ 'inputname', <b> 6 </b> , 'This is error message'] </td></tr></table>"

   ],

     'THIRD_MINLENGTH'      =>  ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Third parameter must be</span> - String Data type <br /><hr /> <i> 

       Expect : MINLENGTH   => [ @param_1 must be : string, @param_2 must be : Intiger, @param_3 must be : string ] </i><br /><hr /> 
       Expect : MINLENGTH   => [ 'inputname', 6 , <b>'This is error message'</b> ] </td></tr></table>"

   ],
         
     'FIRST_MAXLENGTH'       => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>First parameter must be</span> - String Data type <br /><hr /> <i> 
           
        Expect : MAXLENGTH   => [ @param_1 must be : string, @param_2 must be : Intiger, @param_3 must be : string ] </i><br /><hr /> 
        Expect : MAXLENGTH   => [ <b>'inputname'</b>, 6 , 'This is error message' ] </td></tr></table>"

    ],

     'SECOND_MAXLENGTH'     => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Second parameter must be</span> - Intiger Data type <br /><hr /> <i>

       Expect : MAXLENGTH   => [ @param_1 must be : string, @param_2 must be : Intiger, @param_3 must be : string ] </i><br /><hr /> 
       Expect : MAXLENGTH   => [ 'inputname', <b> 6 </b> , 'This is error message'] </td></tr></table>"

    ],

      'THIRD_MAXLENGTH'      =>  ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Third parameter must be</span> - String Data type <br /><hr /> <i> 

        Expect : MAXLENGTH   => [ @param_1 must be : string, @param_2 must be : Intiger, @param_3 must be : string ] </i><br /><hr /> 
        Expect : MAXLENGTH   => [ 'inputname', 6 , <b>'This is error message'</b> ] </td></tr></table>"

    ],
         
      'FIRST_EQUALTO'      => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>First parameter must be</span> - String Data type <br /><hr /> <i> 
         
        Expect : EQUALTO   => [ @param_1 must be : string, @param_2 must be : Intiger, @param_3 must be : string ] </i><br /><hr /> 
        Expect : EQUALTO   => [ <b>'inputname'</b>, 6 , 'This is error message' ] </td></tr></table>"

    ],

      'SECOND_EQUALTO'     => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Second parameter must be</span> - Intiger Data type <br /><hr /> <i>

        Expect : EQUALTO   => [ @param_1 must be : string, @param_2 must be : Intiger, @param_3 must be : string ] </i><br /><hr /> 
        Expect : EQUALTO   => [ 'inputname', <b> 6 </b> , 'This is error message'] </td></tr></table>"

    ],

      'THIRD_EQUALTO'     =>  ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Third parameter must be</span> - String Data type <br /><hr /> <i> 

       Expect : EQUALTO   => [ @param_1 must be : string, @param_2 must be : Intiger, @param_3 must be : string ] </i><br /><hr /> 
       Expect : EQUALTO   => [ 'inputname', 6 , <b>'This is error message'</b> ] </td></tr></table>"

    ],
         
      'FIRST_EQUAL_STRICT'      => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>First parameter must be</span> - String Data type <br /><hr /> <i> 
       
        Expect : EQUAL_STRICT   => [ @param_1 must be : string, @param_2 must be : Intiger, @param_3 must be : string ] </i><br /><hr /> 
        Expect : EQUAL_STRICT   => [ <b>'inputname'</b>, 6 , 'This is error message' ] </td></tr></table>"

    ],

      'SECOND_EQUAL_STRICT'    => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Second parameter must be</span> - Intiger Data type <br /><hr /> <i>

       Expect : EQUAL_STRICT   => [ @param_1 must be : string, @param_2 must be : Intiger, @param_3 must be : string ] </i><br /><hr /> 
       Expect : EQUAL_STRICT   => [ 'inputname', <b> 6 </b> , 'This is error message'] </td></tr></table>"

    ],

      'THIRD_EQUAL_STRICT'     =>  ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Third parameter must be</span> - String Data type <br /><hr /> <i> 

       Expect : EQUAL_STRICT   => [ @param_1 must be : string, @param_2 must be : Intiger, @param_3 must be : string ] </i><br /><hr /> 
       Expect : EQUAL_STRICT   => [ 'inputname', 6 , <b>'This is error message'</b> ] </td></tr></table>"

     ],
         
      'FIRST_VALID_EMAIL'      => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>First parameter must be</span> - String Data type <br /><hr /> <i> 
      
        Expect : VALID_EMAIL   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
        Expect : VALID_EMAIL   => [ <b>'inputname'</b>, 'This is error message' ] </td></tr></table>"

     ],

      'SECOND_VALID_EMAIL'     => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Second parameter must be</span> - String Data type <br /><hr /> <i>

        Expect : VALID_EMAIL   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
        Expect : VALID_EMAIL   => [ 'inputname', <b>'This is error message'</b> ] </td></tr></table>"

      ],
         
     'FIRST_STRINGTYPE'      => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>First parameter must be</span> - String Data type <br /><hr /> <i> 
     
       Expect : STRINGTYPE   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
       Expect : STRINGTYPE   => [ <b>'inputname'</b>, 'This is error message' ] </td></tr></table>"

     ],

      'SECOND_STRINGTYPE'     => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Second parameter must be</span> - String Data type <br /><hr /> <i>

        Expect : STRINGTYPE   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
        Expect : STRINGTYPE   => [ 'inputname', <b>'This is error message'</b> ] </td></tr></table>"

     ],
         
      'FIRST_NUMERICTYPE'     => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>First parameter must be</span> - String Data type <br /><hr /> <i> 
    
       Expect : NUMERICTYPE   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
       Expect : NUMERICTYPE   => [ <b>'inputname'</b>, 'This is error message' ] </td></tr></table>"

     ],

       'SECOND_NUMERICTYPE'    => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Second parameter must be</span> - String Data type <br /><hr /> <i>

        Expect : NUMERICTYPE   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
        Expect : NUMERICTYPE   => [ 'inputname', <b>'This is error message'</b> ] </td></tr></table>"

     ],
         
       'FIRST_INTEGERTYPE'      => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>First parameter must be</span> - String Data type <br /><hr /> <i> 
   
         Expect : INTEGERTYPE   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
         Expect : INTEGERTYPE   => [ <b>'inputname'</b>, 'This is error message' ] </td></tr></table>"

     ],

      'SECOND_INTEGERTYPE'     => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Second parameter must be</span> - String Data type <br /><hr /> <i>

        Expect : INTEGERTYPE   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
        Expect : INTEGERTYPE   => [ 'inputname', <b>'This is error message'</b> ] </td></tr></table>"

     ],
         
       'FIRST_FLOATTYPE'     => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>First parameter must be</span> - String Data type <br /><hr /> <i> 
  
        Expect : FLOATTYPE   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
        Expect : FLOATTYPE   => [ <b>'inputname'</b>, 'This is error message' ] </td></tr></table>"

     ],

       'SECOND_FLOATTYPE'   => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Second parameter must be</span> - String Data type <br /><hr /> <i>

       Expect : FLOATTYPE   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
       Expect : FLOATTYPE   => [ 'inputname', <b>'This is error message'</b> ] </td></tr></table>"

     ],
         
       'FIRST_CONFIRMPASSWORD'     => ['<table border="1" width="100%"><tr><td> Invalid Parameter : <span class="par_error">First parameter must be</span> - String Data type <br /><hr /> <i> 
  
        Expect : CONFIRMPASSWORD   => [ @param_1 must be : string $password , @param_2 must be : string  $confirm_password , @param_3 must be : string ] </i><br /><hr /> 
        Expect : CONFIRMPASSWORD   => [ <b>$password</b>, $confirm_password , "This is error message" ] </td></tr></table>'

     ],

       'SECOND_CONFIRMPASSWORD'    => ['<table border="1" width="100%"><tr><td> Invalid Parameter : <span class="par_error">Second parameter must be</span> - String Data type <br /><hr /> <i> 
  
        Expect : CONFIRMPASSWORD   => [ @param_1 must be : string $password , @param_2 must be : string  $confirm_password , @param_3 must be : string ] </i><br /><hr /> 
        Expect : CONFIRMPASSWORD   => [ $password, <b> $confirm_password </b> , "This is error message" ] </td></tr></table>'

     ],
  
      'THIRD_CONFIRMPASSWORD'      => ['<table border="1" width="100%"><tr><td> Invalid Parameter : <span class="par_error">Third parameter must be</span> - String Data type <br /><hr /> <i> 
  
        Expect : CONFIRMPASSWORD   => [ @param_1 must be : string $password , @param_2 must be : string  $confirm_password , @param_3 must be : string ] </i><br /><hr /> 
        Expect : CONFIRMPASSWORD   => [ $password, $confirm_password , <b> "This is error message" </b>] </td></tr></table>'

   ], 
   
      'FIRST_VALIDPASSWORD'      => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>First parameter must be</span> - String Data type <br /><hr /> <i> 
  
        Expect : VALIDPASSWORD   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
        Expect : VALIDPASSWORD   => [ <b>'inputname'</b>, 'Requere password has at least 8 characters + one number + one upper case letter + one lower case letter and one special character.' ] </td></tr></table>"

    ],

     'SECOND_VALIDPASSWORD'     => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Second parameter must be</span> - String Data type <br /><hr /> <i>

       Expect : VALIDPASSWORD   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
       Expect : VALIDPASSWORD   => [ 'inputname', <b>'Requere password has at least 8 characters + one number + one upper case letter + one lower case letter and one special character.'</b> ] </td></tr></table>"

    ], 
   
    'FIRST_CONTAIN_UPPERCASE'       => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>First parameter must be</span> - String Data type <br /><hr /> <i> 

       Expect : CONTAIN_UPPERCASE   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
       Expect : CONTAIN_UPPERCASE   => [ <b>'inputname'</b>, 'This is error message' ] </td></tr></table>"

    ],

     'SECOND_CONTAIN_UPPERCASE'    => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Second parameter must be</span> - String Data type <br /><hr /> <i>

      Expect : CONTAIN_UPPERCASE   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
      Expect : CONTAIN_UPPERCASE   => [ 'inputname', <b>'This is error message'</b> ] </td></tr></table>"

    ], 
   
     'FIRST_CONTAIN_LOWERCASE'      => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>First parameter must be</span> - String Data type <br /><hr /> <i> 

       Expect : CONTAIN_LOWERCASE   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
       Expect : CONTAIN_LOWERCASE   => [ <b>'inputname'</b>, 'This is error message' ] </td></tr></table>"

    ],

    'SECOND_CONTAIN_LOWERCASE'     => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Second parameter must be</span> - String Data type <br /><hr /> <i>

      Expect : CONTAIN_LOWERCASE   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
      Expect : CONTAIN_LOWERCASE   => [ 'inputname', <b>'This is error message'</b> ] </td></tr></table>"

    ], 
   
    'FIRST_CONTAIN_NUMBER'      => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>First parameter must be</span> - String Data type <br /><hr /> <i> 

      Expect : CONTAIN_NUMBER   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
      Expect : CONTAIN_NUMBER   => [ <b>'inputname'</b>, 'This is error message' ] </td></tr></table>"

    ],

     'SECOND_CONTAIN_NUMBER'    => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Second parameter must be</span> - String Data type <br /><hr /> <i>

      Expect : CONTAIN_NUMBER   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
      Expect : CONTAIN_NUMBER   => [ 'inputname', <b>'This is error message'</b> ] </td></tr></table>"

    ], 
    
     'FIRST_CONTAIN_SPECIALCHAR'     => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>First parameter must be</span> - String Data type <br /><hr /> <i> 

      Expect : CONTAIN_SPECIALCHAR   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
      Expect : CONTAIN_SPECIALCHAR   => [ <b>'inputname'</b>, 'This is error message' ] </td></tr></table>"

    ],

     'SECOND_CONTAIN_SPECIALCHAR'    => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Second parameter must be</span> - String Data type <br /><hr /> <i>

      Expect : CONTAIN_SPECIALCHAR   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
      Expect : CONTAIN_SPECIALCHAR   => [ 'inputname', <b>'This is error message'</b> ] </td></tr></table>"

   ], 
    
   'FIRST_INPUTFIELD_EMPTY'     => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>First parameter must be</span> - String Data type <br /><hr /> <i> 

    Expect : INPUTFIELD_EMPTY   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
    Expect : INPUTFIELD_EMPTY   => [ <b>'inputname'</b>, 'This is error message' ] </td></tr></table>"

   ],

    'SECOND_INPUTFIELD_EMPTY'    => ["<table border='1' width='100%'><tr><td> Invalid Parameter : <span class='par_error'>Second parameter must be</span> - String Data type <br /><hr /> <i>

     Expect : INPUTFIELD_EMPTY   => [ @param_1 must be : string, @param_2 must be : string ] </i><br /><hr /> 
     Expect : INPUTFIELD_EMPTY   => [ 'inputname', <b>'This is error message'</b> ] </td></tr></table>"

   ]
  
  
   ]; 

 else                                                                 :

  switch($requestArgument)
  {
     
     case ($requestArgument == 'FIRST_LESS_THAN' || $requestArgument == 'SECOND_LESS_THAN' || $requestArgument == 'THIRD_LESS_THAN' ) : 
          
         switch ($requestArgument) 
         {

           case 'FIRST_LESS_THAN' :
                return [ 'FIRST_LESS_THAN'  => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>"] ];
                break;

           case 'SECOND_LESS_THAN' :
                return [ 'SECOND_LESS_THAN' =>  ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
                break;

           case 'THIRD_LESS_THAN' :
                return [ 'THIRD_LESS_THAN'  => [ "<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
                break;
           
           default:
           return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : LESS_THAN ';
           break;

         } 

   break; // END OF LESS THAN CASE
     
   case ($requestArgument == 'FIRST_GREATER_THAN' || $requestArgument == 'SECOND_GREATER_THAN' || $requestArgument == 'THIRD_GREATER_THAN' ) : 
          
         switch ($requestArgument) 
         {
 
           case 'FIRST_GREATER_THAN' :
                 return [ 'FIRST_GREATER_THAN'  => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>"] ];
                 break;
 
           case 'SECOND_GREATER_THAN' :
                 return [ 'SECOND_GREATER_THAN' => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
                 break;
 
           case 'THIRD_GREATER_THAN' :
                 return [ 'THIRD_GREATER_THAN' => [ "<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
                 break;
             
             default:
             return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : GREATER_THAN';
             break;

           } 
 
    break; // END OF GREATER_THAN CASE
    
    case ($requestArgument == 'FIRST_MINLENGTH' || $requestArgument == 'SECOND_MINLENGTH' || $requestArgument == 'THIRD_MINLENGTH' ) : 
          
       switch ($requestArgument) 
       {

         case 'FIRST_MINLENGTH' :
              return [ 'FIRST_MINLENGTH'  => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>"] ];
              break;

         case 'SECOND_MINLENGTH' :
              return [ 'SECOND_MINLENGTH' => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
              break;

        case 'THIRD_MINLENGTH' :
              return [ 'THIRD_MINLENGTH'  => [ "<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
              break;
         
         default:
         return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : MINLENGTH';
         break;

       } 

     break; // END OF MINLENGTH CASE

     case ($requestArgument == 'FIRST_MAXLENGTH' || $requestArgument == 'SECOND_MAXLENGTH' || $requestArgument == 'THIRD_MAXLENGTH' ) : 
          
       switch ($requestArgument) 
       {

         case 'FIRST_MAXLENGTH' :
               return [ 'FIRST_MAXLENGTH'  => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>"] ];
           break;

         case 'SECOND_MAXLENGTH' :
              return [ 'SECOND_MAXLENGTH' => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
              break;

         case 'THIRD_MAXLENGTH' :
              return [ 'THIRD_MAXLENGTH'  => [ "<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
              break;
         
         default:
         return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : MAXLENGTH ';
         break;

       } 

     break; // END OF MAXLENGTH CASE

     case ($requestArgument == 'FIRST_EQUALTO' || $requestArgument == 'SECOND_EQUALTO' || $requestArgument == 'THIRD_EQUALTO' ) : 
          
       switch ($requestArgument) 
       {

         case 'FIRST_EQUALTO' :
              return [ 'FIRST_EQUALTO'  =>  ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>"] ];
              break;

         case 'SECOND_EQUALTO' :
              return [ 'SECOND_EQUALTO' => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
              break;

         case 'THIRD_EQUALTO' :
              return [ 'THIRD_EQUALTO'  => [ "<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
              break;
         
         default:
         return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : EQUALTO ';
         break;

       } 

     break; // END OF EQUALTO CASE

     case ($requestArgument == 'FIRST_EQUAL_STRICT' || $requestArgument == 'SECOND_EQUAL_STRICT' || $requestArgument == 'THIRD_EQUAL_STRICT' ) : 
          
       switch ($requestArgument) 
       {

         case 'FIRST_EQUAL_STRICT' :
              return [ 'FIRST_EQUAL_STRICT'    => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>"] ];
              break;

         case 'SECOND_EQUAL_STRICT' :
               return [  'SECOND_EQUAL_STRICT' =>  ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
               break;

         case 'THIRD_EQUAL_STRICT' :
              return [ 'THIRD_EQUAL_STRICT'    => [ "<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
              break;
         
         default:
         return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : EQUAL_STRICT ';
         break;

       } 

     break; // END OF EQUAL_STRICT CASE

     case ($requestArgument == 'FIRST_VALID_EMAIL' || $requestArgument == 'SECOND_VALID_EMAIL' ) : 
          
       switch ($requestArgument) 
       {

         case 'FIRST_VALID_EMAIL' :
              return [ 'FIRST_VALID_EMAIL'  => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>"] ];
              break;

         case 'SECOND_VALID_EMAIL' :
              return [ 'SECOND_VALID_EMAIL' => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
              break;
         
         default:
         return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : VALID_EMAIL';
         break;

       } 

     break; // END OFVALID_EMAIL CASE

     case ($requestArgument == 'FIRST_STRINGTYPE' || $requestArgument == 'SECOND_STRINGTYPE' ) : 
          
       switch ($requestArgument) 
       {

         case 'FIRST_STRINGTYPE' :
               return [ 'FIRST_STRINGTYPE'  =>  ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>"] ];
               break;

         case 'SECOND_STRINGTYPE' :
               return [ 'SECOND_STRINGTYPE' => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
               break;
         
         default:
         return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : STRINGTYPE ';
         break;

       } 

     break; // END STRINGTYPE CASE

     case ($requestArgument == 'FIRST_NUMERICTYPE' || $requestArgument == 'SECOND_NUMERICTYPE' ) : 
          
       switch ($requestArgument) 
       {

         case 'FIRST_NUMERICTYPE' :
               return [ 'FIRST_NUMERICTYPE'  => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>"] ];
               break;

         case 'SECOND_NUMERICTYPE' :
               return [ 'SECOND_NUMERICTYPE' => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
               break;
         
         default:
         return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : NUMERICTYPE ';
         break;

       } 

     break; // END NUMERICTYPE CASE

     case ($requestArgument == 'FIRST_INTEGERTYPE' || $requestArgument == 'SECOND_INTEGERTYPE' ) : 
          
       switch ($requestArgument) 
       {

         case 'FIRST_INTEGERTYPE' :
               return [ 'FIRST_INTEGERTYPE'  => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>"] ];
               break;

         case 'SECOND_INTEGERTYPE' :
               return [ 'SECOND_INTEGERTYPE' => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
               break;
         
         default:
         return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : INTEGERTYPE ';
         break;

       } 

     break; // END INTEGERTYPE CASE

     case ($requestArgument == 'FIRST_FLOATTYPE' || $requestArgument == 'SECOND_FLOATTYPE' ) : 
          
       switch ($requestArgument) 
       {

         case 'FIRST_FLOATTYPE' :
               return [ 'FIRST_FLOATTYPE'  => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>"] ];
               break;

         case 'SECOND_FLOATTYPE' :
               return [ 'SECOND_FLOATTYPE' => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
               break;
         
         default:
         return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : INTEGERTYPE ';
         break;

       } 

     break; // END FLOATTYPE CASE

     case ($requestArgument == 'FIRST_CONTAIN_UPPERCASE' || $requestArgument == 'SECOND_CONTAIN_UPPERCASE' ) : 
          
       switch ($requestArgument) 
       {

         case 'FIRST_CONTAIN_UPPERCASE' :
               return [ 'FIRST_CONTAIN_UPPERCASE'  => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>"] ];
               break;

         case 'SECOND_CONTAIN_UPPERCASE' :
               return [ 'SECOND_CONTAIN_UPPERCASE' => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
               break;
         
         default:
         return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : CONTAIN_UPPERCASE ';
         break;

       } 

     break; // END CONTAIN_UPPERCASE

     case ($requestArgument == 'FIRST_CONTAIN_LOWERCASE' || $requestArgument == 'SECOND_CONTAIN_LOWERCASE' ) : 
          
       switch ($requestArgument) 
       {

         case 'FIRST_CONTAIN_LOWERCASE' :
               return [ 'FIRST_CONTAIN_LOWERCASE'  => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>"] ];
               break;

         case 'SECOND_CONTAIN_LOWERCASE' :
               return [ 'SECOND_CONTAIN_LOWERCASE' => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
               break;
         
         default:
         return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : CONTAIN_LOWERCASE ';
         break;

       } 

     break; // END CONTAIN_LOWERCASE

     case ($requestArgument == 'FIRST_CONTAIN_NUMBER' || $requestArgument == 'SECOND_CONTAIN_NUMBER' ) : 
          
       switch ($requestArgument) 
       {

         case 'FIRST_CONTAIN_NUMBER' :
               return [ 'FIRST_CONTAIN_NUMBER'  => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>"] ];
               break;

         case 'SECOND_CONTAIN_NUMBER' :
               return [ 'SECOND_CONTAIN_NUMBER' => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
               break;
         
         default:
         return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : CONTAIN_NUMBER ';
         break;

       } 

     break; // END CONTAIN_NUMBER

     case ($requestArgument == 'FIRST_CONTAIN_SPECIALCHAR' || $requestArgument == 'SECOND_CONTAIN_SPECIALCHAR' ) : 
          
       switch ($requestArgument) 
       {

         case 'FIRST_CONTAIN_SPECIALCHAR' :
               return [ 'FIRST_CONTAIN_SPECIALCHAR'  => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>"] ];
               break;

         case 'SECOND_CONTAIN_SPECIALCHAR' :
               return [ 'SECOND_CONTAIN_SPECIALCHAR' => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
               break;
         
         default:
         return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : CONTAIN_SPECIALCHAR ';
         break;

       } 

     break; // END CONTAIN_SPECIALCHAR

     case ($requestArgument == 'FIRST_INPUTFIELD_EMPTY' || $requestArgument == 'SECOND_INPUTFIELD_EMPTY' ) : 
          
       switch ($requestArgument) 
       {

         case 'FIRST_INPUTFIELD_EMPTY' :
               return [ 'FIRST_INPUTFIELD_EMPTY'  => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>"] ];
               break;

         case 'SECOND_INPUTFIELD_EMPTY' :
               return [ 'SECOND_INPUTFIELD_EMPTY' => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
               break;
         
         default:
         return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : INPUTFIELD_EMPTY ';
         break;

       } 

     break; // END CONTAIN_SPECIALCHAR

     case ($requestArgument == 'FIRST_VALIDPASSWORD' || $requestArgument == 'SECOND_VALIDPASSWORD' ) : 
          
       switch ($requestArgument) 
       {

         case 'FIRST_VALIDPASSWORD' :
               return [ 'FIRST_VALIDPASSWORD'  => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>"] ];
               break;

         case 'SECOND_VALIDPASSWORD' :
               return [ 'SECOND_VALIDPASSWORD' => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
               break;
         
         default:
         return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : VALIDPASSWORD ';
         break;

       } 

     break; // END VALID PASSWORD CASE

     case ($requestArgument == 'FIRST_CONFIRMPASSWORD' || $requestArgument == 'SECOND_CONFIRMPASSWORD' || $requestArgument == 'THIRD_CONFIRMPASSWORD' ) : 
          
       switch ($requestArgument) 
       {

         case 'FIRST_CONFIRMPASSWORD' :
               return [ 'FIRST_CONFIRMPASSWORD'  => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>"] ];
               break;

         case 'SECOND_CONFIRMPASSWORD' :
               return [ 'SECOND_CONFIRMPASSWORD' => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
               break;

         case 'THIRD_CONFIRMPASSWORD' :
               return [ 'THIRD_CONFIRMPASSWORD' => ["<table border='1' width='100%'><tr><td> " . $dataError . "</td></tr></table>" ] ];
               break;
         
         default:
         return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : INTEGERTYPE ';
         break;

       } 

     break; // END CONFIRM PASSWORD CASE

     // Default of Parent swicth
     default:
     return 'Invalid or Missing Argument at : CATCH_ERROR_PARAM_HANDLER(String $requestArgument = null, string $dataError = null) : ? ';
     break;


  }  // END PARENT SWITCH 
      
 endif;

} // END OF ELSE

public static function erorrMessage() : string {

 return "Class can Extends but cannot be modify" . __BR();

}


/**
 *
 * Defined report dump error messages
 * @since 10.15.21
 * @since v1.3
 * 
**/
public static function report_dump($valid_type, $FIRS_ARGUMENT)
{

  print ("<style> span.par_error {  color: #cc4242; }  span.par_right{ color: #64D215;}
   body {
    background-color: #1c1d12;
    color: #9a9a97;
    padding: 1% 5%;
   }
  </style>");
    
  print("<h3> Current VALUES </h3>");
  print "<table border='1' width='100%' ></table><tr><td>";
  print "<pre style='padding: 2% 2%;'>";
  print_r($valid_type);
  print "</pre>";
  print "<br />";
  print "</td></tr></table>";

  print("<h3> Current DATA TYPE & VALUES </h3>");
  print "<table border='1' width='100%' padding ='2% 5%'><tr><td>";
  print "<pre style='padding: 2% 2%;'>";
  var_dump($valid_type[ $FIRS_ARGUMENT ]);
  print "</pre>";
  print "</td></tr></table>";
  print "<br />";

  foreach($valid_type[ $FIRS_ARGUMENT ] as $val ) :  
    
    if(is_integer($val))          :  print "Data Type int|numeric : {$val} <br /> ";
       elseif(is_string($val))    :  print "Data Type String : {$val} <br /> ";
       else                       :  print "Invalid Parameters Check your CATCH Method";
       endif;

  endforeach;

}

  /**
   *
   * Defined CURRENT_VALUE_REQUEST() RETURN CURRENT USER VALUE
   * @since 10.06.21
   * @since v1.2
   *
  **/ 
 public static function CURRENT_VALUE_REQUEST($bind_user_data)
 {

   print("<h3> Current VALUES </h3>");
   print "<table border='1' width='100%'></table>";
   print "<pre style='padding: 2% 2%;'>";
   print_r( $bind_user_data );
   print "</pre>";
 

   print("<h3> Current DATA TYPE & VALUES </h3>");
   print "<table border='1' width='100%' padding ='2% 5%'><tr><td>";
   print "<pre style='padding: 2% 2%;'>";
   var_dump( $bind_user_data );
   print "</pre>";
   print "</td></tr></table>";

 }

 /**
   *
   * Defined BIND_PORTAL_PARAMS() RETURN PARAM LIST
   * @since 10.06.21
   * @since v1.2
   *
  **/ 
 public static function BIND_PORTAL_PARAMS($bind_user_data)
 {
  
   print ("<style> span.par_error {  color: #cc4242; }
     body {
      background-color: #1c1d12;
      color: #9a9a97;
      padding: 1% 5%;
    }
  </style>");

  Print "<h3>Current parameters: </h3>";
  
  foreach($bind_user_data as $val => $params) : print  $val . "<br />"; endforeach;

 }

 

}

