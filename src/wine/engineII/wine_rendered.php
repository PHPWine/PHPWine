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
 function wine_rendered( array $wine_engine_ii ) : string {

    if (count($wine_engine_ii) < 0) {
        return false;
    } else {
        return implode("", $wine_engine_ii);
    }

 }

 




