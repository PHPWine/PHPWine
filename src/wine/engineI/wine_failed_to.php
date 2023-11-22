<?php 

 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);

 /**
 * @functions
 *
 * --------------------------------------------------------------------------------------------
 * return failed to try
 *
 * Defined : public method filtered current value and replace/
 * @since: v1.2.8
 * DT: 10.26.2023 *
 */
 function wine_failed_to() {

    return [
      // response
      'try_failed' => "Cannot use please or 'try' accept only string!",

      // response
      'wine_class' => "\wine class is already exists!",
      
      // response
      'provider' => 'Provider Class not found!',
      
      // response
      'index' => '\index file not found!',
      
      // response
      'in_valid' => '\Warning you have invalid content malicious character has found, or cannot use raw html inside wine!'
    ];    

 }

