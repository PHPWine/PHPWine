<?php 

/**
  * @var constant|array Register Directory
  * @property
  * Defined : file structure
  * @since: v2.0
  * DT: 11.10.2023 *
  */    
  const DIRECTORY = [
    'layouts',
    'localized'  
  ]; 
 
  /**
   * --------------------------------------------------------------------------------------------
   * @var constant|String 
   * @property
   * -------------------------------------------------------------------------------------------- 
   * Initialized Dicrectory registered for layout all constant  
   * 
   * @Defined : Constant Layout
   * @since: v1.0 doctrine
   * @since: v2.0 wine
   * DT: 11.10.2023 
   */
  new \PHPWineOptimizedHtml\DirectoryFetchFile(
    DIRECTORY[0]
  );

 /**
  * --------------------------------------------------------------------------------------------
  * @var constant|String 
  * @property
  * -------------------------------------------------------------------------------------------- 
  * Initialized Dicrectory registered for localized all constant  
  * 
  * @Defined : Constant functions
  * @since: v1.0 doctrine
  * @since: v2.0 wine
  * DT: 11.10.2023 
  */
  new \PHPWineOptimizedHtml\DirectoryFetchFile(
    DIRECTORY[1]
  ); 
