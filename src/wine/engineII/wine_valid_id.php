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
 function wine_valid_id( $prefix, $value) : string {

    $wine_temp_val = mb_substr($value,0,6); 

    $wine_vaid_id = hash('sha256',$prefix.$wine_temp_val);

    $wine_vaid_id = str_replace(' ', '-', $wine_vaid_id); 
    
    $wine_vaid_id = preg_replace('/[^A-Za-z\-]/', '', $wine_vaid_id); 
   
    $wine_vaid_id = trim(strtolower($wine_vaid_id));
    
    $wine_vaid_id = mb_substr($wine_vaid_id,0,9);    
        
    $wine_vaid_id = preg_replace('/\s+/','',$wine_vaid_id);

    return (string) $wine_vaid_id;

 }

 


