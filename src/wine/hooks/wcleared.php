<?php 

 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);

/**
 * @functions
 *
 * --------------------------------------------------------------------------------------------
 * This is use to removed all in valid charaters data from database
 * specially when there is malicious code from your form submitted to your database to wine!
 *
 * @hook
 *
 * @string
 *
 * Defined : public function hook nake wine value safe none breakcable codes
 * @since: v1.2.8
 * DT: 10.26.2023 *
 */
function wcleared( 
 
  string $clean_up_before_wine 
 
 ) : array|string {
    /**
     *  Sanitized only Valid wine content
     *  DT: 11.21.2023
     *  Defined: wcleared means safe to wine accept valid characters
     *
     */
    $located = "wsf";
    $optimized = local_provider([
        $located => [
           $clean_up_before_wine // @param
        ],
      ]
    )[$located];

    return $optimized;
}