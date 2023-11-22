<?php 

 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);

/**
 * @var constant|String Register condition  
 * @property
 * Defined : filter bool condition form less than
 * @since: doctrine v1.0
 * @since: wine 2.0
 * DT: 11.11.2023 **/ 
 define('LESS', "<" );

/**
 * @var constant|String Register condition  
 * @property
 * Defined : filter bool condition form greather than
 * @since: doctrine v1.0
 * @since: wine 2.0
 * DT: 11.11.2023 **/ 
 define('GREATHER', ">" );
 
/**
 * @var constant|String Register condition  
 * @property
 * Defined : filter bool condition form equal
 * @since: doctrine v1.0
 * @since: wine 2.0
 * DT: 11.11.2023 **/ 
 define('EQUAL', "==" );
 
/**
 * @var constant|String Register condition  
 * @property
 * Defined : filter bool condition form super equal
 * @since: doctrine v1.0
 * @since: wine 2.0
 * DT: 11.11.2023 **/ 
 define('SUPER', "===" ); 
 
/**
 * @var constant|String Register condition  
 * @property
 * Defined : filter bool condition form less than equal
 * @since: doctrine v1.0
 * @since: wine 2.0
 * DT: 11.11.2023 **/  
 define('EQLESS', "<=" );
 
/**
 * @var constant|String Register condition  
 * @property
 * Defined : filter bool condition form greather than equal
 * @since: doctrine v1.0
 * @since: wine 2.0
 * DT: 11.11.2023 **/ 
 define('EQGREATHER', ">=" );  


/**
 * @functions
 *
 * --------------------------------------------------------------------------------------------
 * check wine operation clean up inside classes
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
 function operations( string|array $key , int $count, string $operation = null ) : bool {

   $count_key_lenght = count($key);

   switch ($operation) {

      case LESS :
        return ($count_key_lenght < $count)? true : false;
        break;

      case GREATHER :
        return ($count_key_lenght > $count)? true : false;
        break;

      case EQLESS :
        return ($count_key_lenght <= $count)? true : false;
        break;

      case EQGREATHER :
        return ($count_key_lenght >= $count)? true : false;
        break;

    case SUPER :
        return ($count_key_lenght === $count)? true : false;
        break;

        break;
      default:
        return ($count_key_lenght == $count) ? true : false;

   }   

  }
