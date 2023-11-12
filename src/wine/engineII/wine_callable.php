<?php 

 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);

 /**
 * @functions
 *
 * --------------------------------------------------------------------------------------------
 * check wine check object
 *
 * @key array length
 *
 * @count int
 *
 * @operation formed
 *
 * Defined : public method filtered current value and replace/
 * @since: v2.0
 * DT: 10.26.2023 *
 */
 function wine_callable($wine_filter, ...$args) {

    if (function_exists($wine_filter)) 
    {
      return call_user_func($wine_filter, ...$args);
    }
 }

 




