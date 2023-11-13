<?php 

 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);

 /**
 * @functions
 *
 * --------------------------------------------------------------------------------------------
 * check wine check key compare
 *
 * @key string
 *
 * @ckecker string
 *
 * @operation formed
 *
 * Defined : public method check compare
 * @since: v2.0
 * DT: 10.12.2023 *
 */
 function wine_compare(string $source, string $checker) : bool {

   if($source === $checker) {
    return true;
    
   } else {
    return false;
   }

 }

 


