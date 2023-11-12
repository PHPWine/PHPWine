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
 function wine_valid_keys()  {

  return [

/**
 * --------------------------------------------------------------------------------------------
 * @array key valid hook for attributes 
 * -------------------------------------------------------------------------------------------- 
 * This key is design for doctrine class to verify if the user input valid key in order to doctrine
 * response properly, in public function store the array to be easily 
 * get in the developer incase needed.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered attr
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.12.2023 
 */
 'DRKEY_ATTR'  => 'DOCTRINE_REGISTERED_KEY_ATTR',

/**
 * --------------------------------------------------------------------------------------------
 * @array key valid hook for main hook 
 * -------------------------------------------------------------------------------------------- 
 * This key is design for doctrine class to verify if the user input valid key in order to doctrine
 * response properly, in public function store the array to be easily 
 * get in the developer incase needed.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered primary hook
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.12.2023 
 */
 'DRKEY_HOOKS' => 'DOCTRINE_REGISTERED_KEY_HOOKS',

/**
 * --------------------------------------------------------------------------------------------
 * @array key valid hook for main row 
 * -------------------------------------------------------------------------------------------- 
 * This key is design for doctrine class to verify if the user input valid key in order to doctrine
 * response properly, in public function store the array to be easily 
 * get in the developer incase needed.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered primary row
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.12.2023 
 */
 'DRKEY_ROW'   => 'DOCTRINE_REGISTERED_KEY_ROW',

/**
 * --------------------------------------------------------------------------------------------
 * @array key valid hook for rows 
 * -------------------------------------------------------------------------------------------- 
 * This key is design for doctrine class to verify if the user input valid key in order to doctrine
 * response properly, in public function store the array to be easily 
 * get in the developer incase needed.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered rows
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.12.2023 
 */
 'DRKEY_ROWS'  => 'DOCTRINE_REGISTERED_KEY_ROWS',


/**
 * --------------------------------------------------------------------------------------------
 * @array key valid hook for singular column dynamic from client hook
 * -------------------------------------------------------------------------------------------- 
 * This key is design for doctrine class to verify if the user input valid key in order to doctrine
 * response properly, in public function store the array to be easily 
 * get in the developer incase needed.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered singular column
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.12.2023 
 */
 'DRKEY_COLUMN'   => 'DOCTRINE_REGISTERED_KEY_COLUMN',


/**
 * --------------------------------------------------------------------------------------------
 * @array key valid hook for plural columns static creation
 * -------------------------------------------------------------------------------------------- 
 * This key is design for doctrine class to verify if the user input valid key in order to doctrine
 * response properly, in public function store the array to be easily 
 * get in the developer incase needed.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered plural columns 
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.12.2023 
 */
 'DRKEY_COLUMNS'  => 'DOCTRINE_REGISTERED_KEY_COLUMNS',

/**
 * --------------------------------------------------------------------------------------------
 * @array key valid hook for dynamic rows or cols 
 * -------------------------------------------------------------------------------------------- 
 * This key is design for doctrine class to verify if the user input valid key in order to doctrine
 * response properly, in public function store the array to be easily 
 * get in the developer incase needed.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered loop data column or rows
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.12.2023 
 */
 'DRKEY_DYNAMIC' => 'DOCTRINE_REGISTERED_KEY_DYNAMIC',


 /**
 * --------------------------------------------------------------------------------------------
 * @array key valid hook for plural columns 
 * -------------------------------------------------------------------------------------------- 
 * This key is design for doctrine class to verify if the user input valid key in order to doctrine
 * response properly, in public function store the array to be easily 
 * get in the developer incase needed.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered plural columns
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.12.2023 
 */
'DRKEY_MAGIC' => 'DOCTRINE_REGISTERED_KEY_MAGIC',

/**
 * --------------------------------------------------------------------------------------------
 * @array key valid hook for top later 
 * -------------------------------------------------------------------------------------------- 
 * This key is design for doctrine class to verify if the user input valid key in order to doctrine
 * response properly, in public function store the array to be easily 
 * get in the developer incase needed.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered top later
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.12.2023 
 */
 'DRKEY_TLATER'  => 'DOCTRINE_REGISTERED_KEY_TOP_LATER',


/**
 * --------------------------------------------------------------------------------------------
 * @array key valid hook for bottom later 
 * -------------------------------------------------------------------------------------------- 
 * This key is design for doctrine class to verify if the user input valid key in order to doctrine
 * response properly, in public function store the array to be easily 
 * get in the developer incase needed.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered bottom later
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.12.2023 
 */
 'DRKEY_BLATER'  => 'DOCTRINE_REGISTERED_KEY_BOTTOM_LATER',


/**
 * --------------------------------------------------------------------------------------------
 * @array key valid hook for mobile 
 * -------------------------------------------------------------------------------------------- 
 * This key is design for doctrine class to verify if the user input valid key in order to doctrine
 * response properly, in public function store the array to be easily 
 * get in the developer incase needed.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered mobile
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.12.2023 
 */
 'DRKEY_MOBILE'  => 'DOCTRINE_REGISTERED_KEY_MOBILE',


/**
 * --------------------------------------------------------------------------------------------
 * @array key valid hook for tablet 
 * -------------------------------------------------------------------------------------------- 
 * This key is design for doctrine class to verify if the user input valid key in order to doctrine
 * response properly, in public function store the array to be easily 
 * get in the developer incase needed.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered tablet
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.12.2023 
 */
 'DRKEY_TABLET'  => 'DOCTRINE_REGISTERED_KEY_TABLET',


/**
 * --------------------------------------------------------------------------------------------
 * @array key valid hook for laptop 
 * -------------------------------------------------------------------------------------------- 
 * This key is design for doctrine class to verify if the user input valid key in order to doctrine
 * response properly, in public function store the array to be easily 
 * get in the developer incase needed.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered laptop
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.12.2023 
 */
 'DRKEY_LAPTOP'  => 'DOCTRINE_REGISTERED_KEY_LAPTOP',


/**
 * --------------------------------------------------------------------------------------------
 * @array key valid hook for desktop 
 * -------------------------------------------------------------------------------------------- 
 * This key is design for doctrine class to verify if the user input valid key in order to doctrine
 * response properly, in public function store the array to be easily 
 * get in the developer incase needed.  
 * 
 * 
 * @Defined : Constant Doctrine Class key Registered desktop
 * @since: v1.0 doctrine
 * @since: v2.0 wine
 * DT: 11.12.2023 
 */
 'DRKEY_DESKTOP'  => 'DOCTRINE_REGISTERED_KEY_DESKTOP',

  ];

 }

 







