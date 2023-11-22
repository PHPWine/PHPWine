<?php 

 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);

 /**
 * @functions
 *
 * --------------------------------------------------------------------------------------------
 * return response 
 *
 * Defined : public method filtered current value and replace/
 * @since: v1.2.8
 * DT: 10.26.2023 *
 */
 function wine_handler_response() {

    return [
      'e_warning' => 'warning anonymouse attemp inject!',
      'e_scan' => 'scan enable set $disable_html = true',
      'e_wine' => 'new \PHPWineOptimizedHtml\OptimizedHtml(true)',
    ];    

 }

