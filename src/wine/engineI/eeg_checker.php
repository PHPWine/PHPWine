<?php 

 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);

 /**
 * @functions
 *
 * --------------------------------------------------------------------------------------------
 * check wine run text debug engine 1
 *
 * @key array length
 *
 * @count int
 *
 * @operation formed
 *
 * Defined : public method filtered current value and replace/
 * @since: v1.2.8
 * DT: 10.26.2023 *
 */
 function eeg_checker($inline, $elem, $value) {

    if ($inline !== false) 
    { return "<$elem />";} else {
    // return closing tag
    return "<$elem>$value</$elem>";

   }

 }

 
