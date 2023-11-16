<?php 

 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);

 /**
 * @functions
 *
 * --------------------------------------------------------------------------------------------
 * check wine count elements in doctrine
 *
 * @key array length
 *
 * @return int
 *
 * Defined : public method filtered current value and replace/
 * @since: v2.0
 * DT: 11.16.2023 **/

 function wine_doctrine_counts(array $doctrine_elements) : int {
 
  $doctrine_count_value = array(); 

  foreach ($doctrine_elements as $doctrine_count) {
  
    $doctrine_count_value[] = count($doctrine_count);
  
  }

  return implode("",$doctrine_count_value);
  
 }

 


