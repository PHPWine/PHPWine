<?php 

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
   /**
   * @function
   *
   * --------------------------------------------------------------------------------------------
   * function provider no object require similar as magic | procedural
   *
   * The param first is
   * @string || Callable
   *
   * @arguments which is mixed
   *
   * Defined : public method use value /instead value => []/
   * @since: v1.2.6
   * DT: 11.09.2023 
   */
   function later(
   // @param first Object nullable
   string|callable $function_name = null,
   // @param thordly arguments
   mixed ...$args
) : string|array {
   /**
    *  Init OptimizedHtml
      *  DT: 05.11.2023
      *  Defined: Value method function version
      *
      */
   $located = "wpd";
   $optimized = local_provider(
         [
         $located => [
            $function_name, // @param
         ],
         ],
         ...$args
   )[$located];
   return $optimized;
}
