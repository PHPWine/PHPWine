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
      'try_failed' => "Cannot use please or 'try' accept only string!",
      'wine_class' => "\wine class is already exists!",
      'provider' => 'Provider Class not found!',
      'index' => '\index file not found!',
      'inValid' => 'This is not valid content special character has found!'
    ];    

 }

