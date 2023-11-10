<?php 

 namespace PHPWineOptimizedHtml;

 use \PHPWineOptimizedHtml\OptimizedHtml as DataRequest;
 use \PHPWineOptimizedHtml\DirectoryHandlerError;
  
 /**
 * @copyright (c) 2023 Optimized Html Cooked by nielsoffice
 *
 * MIT License
 *
 * Optimized Html free software: you can redistribute it and/or modify.
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @category   PHPLibrary Optimized HTML
 *
 *
 * @author    Leinner Zednanref <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/PHPWine/PHPWine/tree/main
 * @link      https://github.com/PHPWine/PHPWine/README.md
 * @link      https://phpwine.github.io/documents/
 * @version   v2.0
 * @since     10.26.2023
 * @since     11.05.2023
 *
 */

 class DirectoryFetchFile extends DataRequest {
     
    public bool $stype;
    public function __construct( 
       string $directory = null, 
       $st = false
    ) {
        $this->stype = $st;
        $this->wine_check_compare_directory($directory);
    }
    
  /**
   * --------------------------------------------------------------------------------------------
   * @method protected 
   * @protected 
   * -------------------------------------------------------------------------------------------- 
   * wine check directory for default  
   * 
   * @Defined : Get source directory
   * @since: v1.0 doctrine
   * @since: v2.0 wine
   * DT: 11.10.2023 
   */
    protected function wine_check_default_directory( 
      string $init_wine
    ) : string {
    
      return $this->wine_directory_root('wine/' . $init_wine);
     
    }
     
  /**
   * --------------------------------------------------------------------------------------------
   * @method protected 
   * @protected 
   * -------------------------------------------------------------------------------------------- 
   * wine check directory for filtered directory  
   * 
   * @Defined : replace source directory
   * @since: v1.0 doctrine
   * @since: v2.0 wine
   * DT: 11.10.2023 
   */
    protected function wine_check_filtered_directory( 

       string $init_wine
 
    ) : string {
   
      $filter_init = $this->magic(

          $this,

         'init_directory',

          "wine/" 
      );
   
      $wine_check_filtered_directory = $this->wine_directory_root(

        $filter_init.$init_wine

      );
   
      return $wine_check_filtered_directory;
   
     }
   
  /**
   * --------------------------------------------------------------------------------------------
   * @method protected 
   * @protected 
   * -------------------------------------------------------------------------------------------- 
   * wine check directory for default  
   * 
   * @Defined : Get source directory
   * @since: v1.0 doctrine
   * @since: v2.0 wine
   * DT: 11.10.2023 
   */
   private function wine_check_compare_directory( 

       string $init_wine

   )  {

  /**
   * --------------------------------------------------------------------------------------------
   * @check verifying 
   * @protected 
   * -------------------------------------------------------------------------------------------- 
   * verifying both source file directory  
   * 
   * @Defined : Get source directory
   * @since: v1.0 doctrine
   * @since: v2.0 wine
   * DT: 11.10.2023 
   */
     $hookDeault     = str_replace($init_wine, "", $this->wine_check_default_directory($init_wine));
       
     $hookedFiltired = str_replace($init_wine, "", $this->wine_check_filtered_directory($init_wine)); 
              
      if( file_exists($hookedFiltired)  ) {
      
        // The set filtered if being filtered
        $___wine_directory = $this->wine_check_filtered_directory($init_wine);
      
    } else if( ($hookDeault !== $hookedFiltired)  ) {
                  
        // Execute error report
        new DirectoryHandlerError( [$hookDeault, $hookedFiltired] );
        print( 'Folder dictory name ' .$init_wine . ' NOT Found!' ); 
        exit;
                    
      } else {
      
        // Else do default!
        $___wine_directory = $this->wine_check_default_directory($init_wine);
    
      }
    
      /**
       * --------------------------------------------------------------------------------------------
       * @method Directory Iterator class 
       * @protected 
       * -------------------------------------------------------------------------------------------- 
       * localized file  
       * 
       * @Defined : Get source files
       * @since: v1.0 doctrine
       * @since: v2.0 wine
       * DT: 11.10.2023 
       */     
        $___wineAllRun = new \DirectoryIterator( $___wine_directory );  
        foreach ($___wineAllRun as $appRequest) {  
        
        // remove all spacing !  
        $__filen = preg_replace('/\s+/', '', ($___wine_directory . $appRequest->getFilename()) );

        // the hook all file provided
        if (!$appRequest->isDot() && $this->stype != true ) { require ($__filen); } 
        else if (!$appRequest->isDot() && $this->stype == true ) { 
        require_once($__filen); 
        } 
  
      }
    
     }

  /**
   * --------------------------------------------------------------------------------------------
   * @method public 
   * @public 
   * -------------------------------------------------------------------------------------------- 
   * config default directory  
   * 
   * @Defined : Get source directory
   * @since: v1.0 doctrine
   * @since: v2.0 wine
   * DT: 11.10.2023 
   */
    public function wine_directory_root( string $get_file_child ) {
  
      $get_file_child = ltrim($get_file_child);
      return dirname(__DIR__) .'/src/' . $get_file_child ."/";
  
    }    

 }
