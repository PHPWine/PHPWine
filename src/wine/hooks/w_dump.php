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
 * @wine show object 
 *
 * Defined : public method filtered current value and replace/
 * @since: v2.0
 * DT: 12.19.2023 *
 */
 function w_dump($wine) {

    print "<pre>";
    var_dump($wine);
    print "</pre>";

 }

 


