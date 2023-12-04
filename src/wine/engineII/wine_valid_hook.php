<?php 

 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);

 /**
 * @functions
 *
 * --------------------------------------------------------------------------------------------
 * check wine generate unique valid ID
 *
 * @key array length
 *
 * @id mixed 
 *
 * Defined : public method return valid id
 * @since: v2.0
 * DT: 12.01.2023 *
 */
 function wine_valid_hook( mixed $hook_name, int $countString) : string {

    $wine_vaid_hook = str_replace(' ', '_', $hook_name); 
    
    $wine_vaid_hook = preg_replace('/[^A-Za-z\-]/', '', $wine_vaid_hook); 
    
    $wine_vaid_hook = trim(strtolower($wine_vaid_hook));
    
    $wine_vaid_hook = mb_substr($wine_vaid_hook,0,$countString);

    return (string) $wine_vaid_hook;

 }

 


