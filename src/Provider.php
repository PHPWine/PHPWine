<?php

namespace PHPWineOptimizedHtml;

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

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
 * @version   v1.4.0
 * @since     10.26.2023
 * @since     11.05.2023
 *
 */

class Provider
{
    /**
     * @var Array init inline HTML no closing tag
     * @property
     *
     * --------------------------------------------------------------------------------------------
     * These are list of input html tag which having no closing tag
     * These list are being use when the element that you want to use is one of these
     * then wine return to you a condition that automatically remove the closing tag in your
     * html and assign a single closing tag for this inline html
     *
     * The sample of this guys are actually in the array below
     *
     * Instance you are using input data wine will return to you the approriate html
     * <input type="text" />
     *
     * These list means is condition that if one of these array are being call then remove the closing tag
     * like: <div> "</div>"
     *
     * Defined : html entities
     * @since: v1.0
     * DT: 10.26.2023 *
     */
    private $end_tag = [
        "source",
        "track",
        "circle",
        "param",
        "input",
        "meta",
        "link",
        "img",
        "embed",
        "col",
        "base",
        "area",
        "DOCTYPE html",
    ];

    /**
     * @var String init opening html
     * @property
     * Defined : html entities
     * @since: v1.0
     * DT: 10.26.2023 **/
    private $e_open;

    /**
     * @var String init closing html
     * @property
     * Defined : html entities
     * @since: v1.0
     * DT: 10.26.2023 **/
    private $e_close;

    /**
     * @var String init end html
     * @property
     * Defined : html entities
     * @since: v1.0
     * DT: 10.26.2023 **/
    private $e_end;

    /**
     * @var String init collection entity html
     * @property
     * Defined : html entities
     * @since: v1.0
     * DT: 10.26.2023 **/
    private $space;

    /**
     * @var String|Array init erro message
     * @property
     * Defined : html error property
     * @since: v2.0
     * DT: 11.11.2023 **/
    public array $errors = [];

    /**
     * @var Constant|String child html
     * @property
     * Defined : html child array key
     * @since: v1.0
     * DT: 10.26.2023 **/
    public $child;

    /**
     * @var constant|String child value html
     * @property
     * Defined : html child value array key
     * @since: v1.0
     * DT: 10.26.2023 **/
    public $value;

    /**
     * @var Array|String|Constant child html
     * @property
     * Defined : html child attribute array key
     * @since: v1.0
     * DT: 10.26.2023 **/
    public $attr;

    /**
     * @var Constant|String child html
     * @property
     * Defined : magic entity removed parent tag
     * @since: v1.2.2
     * DT: 10.26.2023 **/
    public $mentity;

    /**
     * @var constant|String Try callable
     * @property
     * Defined : callable key word "try" executed condition and statement inside array child html
     * @since: v1.2.0
     * DT: 10.26.2023 **/
    public $please;

    /**
     * @var constant|String Try callable
     * @property
     * Defined : tag assigned default html in wine
     * @since: v1.2.0
     * DT: 10.26.2023 *
     */
    public $tag;

    /**
     * @var String disable html
     * @property
     * Defined : html child attribute array key
     * @since: v1.2.2
     * DT: 10.26.2023 *
     */
    public $disable_html;

    public function __construct(

       string $child,   string $attr,
       string $value,   string $please,
       string $mentity, string $section,
      
       bool $disable_html

    ) {

        /**
         * @var String init remove html
         * @property
         * Defined : Disable html
         * @since: v1.2.2
         * DT: 10.29.2023 **/
        $this->disable_html = $disable_html;

        /**
         * @var String init list html
         * @property
         * Defined : html entities
         * @since: v1.0
         * DT: 10.26.2023 **/
        $entity = ["&lt;", "&gt;", "/", " "];

        /**
         * @var String init property opening html
         * @property
         * Defined : html entities
         * @since: v1.0
         * DT: 10.26.2023 **/
        $this->e_open = $entity[0];

        /**
         * @var String init property opening html
         * @property
         * Defined : html entities
         * @since: v1.0
         * DT: 10.26.2023 **/
        $this->e_close = $entity[1];

        /**
         * @var String init closing html
         * @property
         * Defined : html entities
         * @since: v1.0
         * DT: 10.26.2023 **/
        $this->e_end = $entity[2];

        /**
         * @var String init space html
         * @property
         * Defined : html entities
         * @since: v1.0
         * DT: 10.26.2023 **/
        $this->space = $entity[3];

        /**
         * @var String|Constant init child array
         * @property
         * Defined : html entities
         * @since: v2.0
         * DT: 111.10.2023 **/
        $this->child = $child;

        /**
         * @var String|Constant init attr array
         * @property
         * Defined : html entities
         * @since: v2.0
         * DT: 111.10.2023 **/
        $this->attr = $attr;

        /**
         * @var String|Constant init value array
         * @property
         * Defined : html entities
         * @since: v2.0
         * DT: 111.10.2023 **/
        $this->value = $value;

        /**
         * @var String|Constant init please array
         * @property
         * Defined : html entities
         * @since: v2.0
         * DT: 111.10.2023 **/
        $this->please = $please;

        /**
         * @var String|Constant init mentity array
         * @property
         * Defined : html entities
         * @since: v2.0
         * DT: 111.10.2023 **/
        $this->mentity = $mentity;

        /**
         * @var String|Constant init tag default to section
         * @property
         * Defined : html entities
         * @since: v2.0
         * DT: 111.10.2023 **/
        $this->tag = $section;

    }

    /**
     * @method
     *
     * --------------------------------------------------------------------------------------------
     *
     * Wine method is a primary public method that will use to generate and optimized html
     * you can generate the all element fully optimized tag, it have a parameters such as
     *
     * @string : $tag Which html element are you trying or want to use ??
     * like ex. div, ul, li, p, spane and etc...
     *
     * @string : value this means you can just add a string value to the $content
     * like ex. <div>Your content is string...</div>
     *
     * To do that you just invoke the wine like print wine(div,'Your content is string...');
     *
     * @callable : Means this is a callback function instead of putting dirrectly the value
     * you just assign a string value to make a function return;
     *
     * like ex: prinmt wine(div, 'my_call_back_func');
     *
     * Now you can create your call function
     * like: function my_call_back_func() {
     *
     *   return "Your content is string...";
     *
     * }
     *
     * NOTE: that callable function accept string value only!
     *
     * @array :  This use when you create a child using resevred keyword
     * TO know more about reserve keyword just please checkout our documentation
     * search to searchbox the "Reserve Keywords"
     * Link: https://phpwine.github.io/documents/
     *
     * @bool enable HTML is current false which means the HTML is interfreted
     * by the browser and if you want to enale html just add "true" then wine
     * return you a string version of HTML that you can use for your client approval
     *
     * Defined : public method use optimized html with wine
     * @since: v1.0
     * DT: 10.26.2023 *
     */
    public function wine(

        string $tag = "",
        
        string|callable|array $content = [],
        
        string|array $attr = [],
        
        array $hooks = [],
        
        $enable_html = false

    ) {
        /**
         * @var
         * Defined : check mnandatory element assign for html
         * @since: v1.3.4
         * DT: 11.06.2023 **/
        if (is_null($tag) || empty($tag)) 
        {
          $tag = $this->tag;
        }
        /**
         * @method
         * Defined : Perform wine in browser
         * @since: v1.0
         * DT: 10.26.2023 **/
        return $this->init_method_wine(
          $tag, $content, $attr, $hooks, $enable_html
        );

    }

    /**
     * @method
     *
     * --------------------------------------------------------------------------------------------
     * Do you remember we have a call_back in wine? are you wonder why we need this?
     * you can actually use this to your array value child when you have create a html template
     * or your html is overload on inside the method with this you can extract the inner html
     * inside the method you created
     * Like sample: https://github.com/PHPWine/documents/tree/main/Demo
     *
     * The param first is
     * @class which is the object itself
     *
     * @string || Callable
     *
     * @arguments which is mixed
     *
     * Defined : public method use value /instead value => []/
     * @since: v1.2.6
     * DT: 10.26.2023 *
     */
    public function value(
     
      string|object $class = null,
      
      string|callable $call_back = null,
      
      mixed ...$args

    ): mixed 
    {
        /**
         * @method
         * Defined : call back value from method
         * @since: v1.0
         * DT: 10.26.2023 **/
        return $this->optimized_html(
            $this->mentity,
            null,
            call_user_func(
              [$this->wine_check_object_class($class), $call_back],
              ...$args
            )
        );
    }
    /**
     * @method
     *
     * --------------------------------------------------------------------------------------------
     * The magic method similar to value the different is the value is become
     * areguments once the filter or call back method is already defined.
     *
     * @object
     * @string|callable
     *
     * @argument which is mixed
     *
     * Defined : public method filtered current value and replace/
     * @since: v1.2.8
     * DT: 10.26.2023 *
     */
    public function magic(
      
      string|object $class = null,
      
      string|callable $call_back = null,
      
      mixed ...$current_value

    ): mixed 
    {
      
      return  $this->ini_magic_wine( 
          $class,
          $call_back,
    ...$current_value
        );

    }

    /**
     * @method
     *
     * --------------------------------------------------------------------------------------------
     * The attri method|hook similar to value the different is the value is become
     * areguments once the filter or call back method is already defined.
     *
     * @object
     *
     * @string|callable
     *
     * @argument which is mixed
     *
     * Defined : public method filtered current value and replace/
     * @since: v1.2.8
     * DT: 10.26.2023 **/
    public function attr(

      string|object $object = null,
      
      string|callable $call_back = null,
      
      mixed ...$attr

    ): string|array {
        /**
         * @return
         * Defined : reutrn the value if the attribute method or function exists!
         * @since: v1.3.7
         * DT: 11.08.2023 **/
        return $this->wine_attribute_hook(

            true,
            
            $this->wine_check_object_class($object),
            
            $call_back,
            
            ...$attr
        );
    }

    /**
     * @method
     * Defined : protected object to string ?
     * @since: v1.3.4
     * DT: 11.10.2023 **/
    protected function wine_check_object_class($class)
    {

       return wine_object($class);

    }

    /**
     * @method
     * Defined  Protected register_reserved_keyword
     * @since: v1.0
     * DT: 11.10.2023 *
     */
    protected function register_reserved_keyword(

      string $key_name,
      
      string $default = null
    
    ): void 
    {

        if (is_null($default)) 
        {
          $key_name = $key_name;
        } 
        else
        {
          $key_name = $default;
        }

        if (!defined($key_name)) 
        {
          define($key_name, $key_name);
        }
    }

    /**
     * @method
     *
     * --------------------------------------------------------------------------------------------
     * Protected hook element selection preperation
     *
     * The param first is
     * @class which is the object itself
     *
     * @string || Callable
     *
     * @arguments which is mixed
     *
     *  array $hooks = [
     *    'top_later'    => ['', []],
     *    'bottom_later' => ['', []]
     *  ],
     *
     * Defined : public method use value /instead value => []/
     * @since: v1.2.6
     * DT: 10.26.2023 *
     */
    protected function wine_hook_tag_selections(

       string $tag = "",
       
       string|callable|array $content = [],
       
       string|array $attr = [],
       
       array $hooks = [],
       
       $enable_html = false

    ) {
        /**
         * @var
         * Defined : check wine hook top and bottom later
         * @since: v2.0
         * DT: 11.11.2023 *
         */
        if (count($hooks) > 0) 
        {
        
           if (
              !is_string($hooks[0][0] ?? "") ||
              !is_string($hooks[1][0] ?? "")
            ) {
                // processing look like
                throw new \Exception(
             '\Hooks must be string inside array ,$hooks = [
              ["top_later_name",[...$arg]],
              ["bot_later_name",[...$arg]]
             ]');

             exit();

            } 
            
            else 
            
            {            
                
                $wine_hooks = "";

            /**
             * --------------------------------------------------------------------------------------------
             * @var: filter default checker top position 
             * @property
             * -------------------------------------------------------------------------------------------- 
             * variable verifier
             * 
             * @since: v1.0 doctrine
             * @since: v2.0 wine
             * DT: 11.10.2023 
             */
                $top_text = "top_";

            /**
             * --------------------------------------------------------------------------------------------
             * @var: filter default checker bottom position 
             * @property
             * -------------------------------------------------------------------------------------------- 
             * variable verifier
             * 
             * @since: v1.0 doctrine
             * @since: v2.0 wine
             * DT: 11.10.2023 
             */
                $bottom_text = "bottom_"; 

            /**
             * --------------------------------------------------------------------------------------------
             * @var: filter content replace empty 
             * @property
             * -------------------------------------------------------------------------------------------- 
             * variable verifier
             * 
             * @since: v1.0 doctrine
             * @since: v2.0 wine
             * DT: 11.10.2023 
             */
                $spacing_empty = "";

            /**
             * --------------------------------------------------------------------------------------------
             * @var: filter is ? bottom_ in top then replace
             * @property
             * -------------------------------------------------------------------------------------------- 
             * variable verifier
             * 
             * @since: v1.0 doctrine
             * @since: v2.0 wine
             * DT: 11.10.2023 
             */
                $__do_bot   = str_replace(
                   $bottom_text, 
                   $spacing_empty,

                   strtolower($hooks[0][0] ?? "")
                );

            /**
             * --------------------------------------------------------------------------------------------
             * @var: filter if not then default
             * @property
             * -------------------------------------------------------------------------------------------- 
             * variable verifier
             * 
             * @since: v1.0 doctrine
             * @since: v2.0 wine
             * DT: 11.10.2023 
             */
                $__dfault   = str_replace(
                    $bottom_text, 
                    $spacing_empty,
 
                    strtolower($hooks[1][0] ?? "")
                 );

            /**
             * --------------------------------------------------------------------------------------------
             * @var: filter else do top on hook
             * @property
             * -------------------------------------------------------------------------------------------- 
             * variable verifier
             * 
             * @since: v1.0 doctrine
             * @since: v2.0 wine
             * DT: 11.10.2023 
             */
                $__do_top   = str_replace(
                    $top_text, 
                    $spacing_empty,
 
                    strtolower($hooks[0][0] ?? "")
                 );
                
            /**
             * --------------------------------------------------------------------------------------------
             * @var: verifier concat content filer top
             * @property
             * -------------------------------------------------------------------------------------------- 
             * variable verifier
             * 
             * @since: v1.0 doctrine
             * @since: v2.0 wine
             * DT: 11.10.2023 
             */
                $__get_top = $top_text.$__do_top;
            /**
             * --------------------------------------------------------------------------------------------
             * @var: verifier concat content filer bottom
             * @property
             * -------------------------------------------------------------------------------------------- 
             * variable verifier
             * 
             * @since: v1.0 doctrine
             * @since: v2.0 wine
             * DT: 11.10.2023 
             */
                $__get_bot  = $bottom_text.$__do_bot;
            /**
             * --------------------------------------------------------------------------------------------
             * @var: else default position array
             * @property
             * -------------------------------------------------------------------------------------------- 
             * variable verifier
             * 
             * @since: v1.0 doctrine
             * @since: v2.0 wine
             * DT: 11.10.2023 
             */ 
                $__get_dfault = $bottom_text.$__dfault;

            /**
             * --------------------------------------------------------------------------------------------
             * @define: check if those position are in place? means is top and bottom container true?
             * @condition
             * -------------------------------------------------------------------------------------------- 
             * variable verifier
             * 
             * @since: v1.0 doctrine
             * @since: v2.0 wine
             * DT: 11.10.2023 
             */
                if(  $__get_top === $hooks[0][0]?? "" && $__get_dfault === $hooks[1][0]?? "" ) 
                { 
  
                   if (function_exists($hooks[0][0]?? false)) 
                   {
                       $wine_hooks .= $this->optimized_html( $this->mentity, null,
                         $this->wine_callable_hook(
                            $hooks[0][0]?? "",      
                         ...$hooks[0][1]?? []
                          )
                       );
                   }
                     
                   $wine_hooks .= $this->optimized_html( $tag, $attr, $content, $enable_html );
                   if (function_exists($hooks[1][0]?? false)) 
                   {
                       $wine_hooks .= $this->optimized_html( $this->mentity, null,
                           $this->wine_callable_hook(
                           $hooks[1][0]?? "", 
                        ...$hooks[1][1]?? []
                         )
                      );
                    }

                   return (string) $wine_hooks;

                } else {

                /**
                 * --------------------------------------------------------------------------------------------
                 * @function
                 * Callable
                 * --------------------------------------------------------------------------------------------
                 * Position top
                 *
                 * @Defined : hook top later
                 * @since: v1.0 doctrine
                 * @since: v2.0 wine
                 * DT: 11.10.2023
                 */
               
                if( $__get_top == $hooks[0][0]) 
                {
                   if (function_exists($hooks[0][0]?? false)) 
                   {
                        $wine_hooks .= $this->optimized_html( $this->mentity,null,
                        $this->wine_callable_hook(
                           $hooks[0][0]?? "", 
                        ...$hooks[0][1]?? []
                          )
                       );
                   }

                   $wine_hooks .= $this->optimized_html( $tag, $attr, $content,  $enable_html );

                    return (string) $wine_hooks;

                } else if ( $__get_bot === $hooks[0][0]) {

               /**
                 * --------------------------------------------------------------------------------------------
                 * @condition
                 * defined: position bottom
                 * --------------------------------------------------------------------------------------------
                 * verifying if the hook top later element @IF is active
                 *
                 * @Defined : hook top later
                 * @since: v1.0 doctrine
                 * @since: v2.0 wine
                 * DT: 11.10.2023
                 */
                    $wine_hooks .= $this->optimized_html( $tag, $attr, $content, $enable_html);
                    if (function_exists($hooks[0][0]?? false)) 
                    {
                    
                      $wine_hooks .= $this->optimized_html( $this->mentity, null,
                      $this->wine_callable_hook(
                        $hooks[0][0]?? "", 
                        ...$hooks[0][1]?? []
                      )
                    );
                   
                    }

                    return (string) $wine_hooks;

               }  
            }
          }
       }
    }

    /**
     * @method
     * Defined : init method wine
     * @since: v2.0
     * DT: 11.11.2023 *
     */
    protected function init_method_wine(

        string $tag = "section",

        string|callable|array $content = [],
        
        string|array $attr = [],
        
        array $hooks = [],
        
        $enable_html = false

    ) {


        if (count($hooks) > 0) 
        {
        
          return $this->wine_hook_tag_selections( $tag, $content, $attr, $hooks, $enable_html );

        } else {
            /**
             * --------------------------------------------------------------------------------------------
             * @defined: return only wine
             * @condition
             * --------------------------------------------------------------------------------------------
             * Initialized without hook, single wine
             *
             * @since: v1.0 doctrine
             * @since: v2.0 wine
             * DT: 11.10.2023
             */
          return $this->optimized_html($tag, $attr, $content, $enable_html);

        }

    }

    /**
     * @method
     * Defined : init magic wine
     * @since: v2.0
     * DT: 11.11.2023 *
     */
    protected function ini_magic_wine(

       string|object $class = null,
       
       string|callable $call_back = null,
       
       mixed ...$current_value

    ) : mixed 
    {

        if (method_exists($class, $call_back)) 
        {
            /**
             * @method
             * Defined : call back value from method if exist and current value as argument
             * @since: v1.0
             * DT: 10.30.2023 *
             */
            return $this->optimized_html(
                $this->mentity,
                [],
                call_user_func(
                    [$this->wine_check_object_class($class), $call_back],
                    ...$current_value
                )
            );
        } elseif (function_exists($call_back)) {
            /**
             * @condition
             * Defined : call back value from function if exist and current value as argument
             * @since: v1.3.7
             * DT: 11.08.2023 *
             */
            return call_user_func(
                $this->optimized_html($this->mentity, null, $call_back),
                ...$current_value
            );
        } else {
            /**
             * @method
             * Defined : Only if the emthod is not exist then this is the current value
             * @since: v1.0
             * DT: 10.30.2023 *
             */
            return $this->optimized_html(
                $this->mentity ?? "",
                [],
                ...$current_value
            );
        }

    }

    /**
     * @method
     * Defined : Private method Optimized html
     * @since: v1.0
     * DT: 10.26.2023 *
     */
    protected function optimized_html(

        string $tag = "section",
        
        string|array|null $attr = [],
        
        string|callable|array $content = null,
        
        bool $disable_html = false

    ) {
        // Verifying tag element required to assign!
        $element = (string) strtolower($tag);
        // Sanitizes content from the method
        $value =  $this->optimized_content($content, $disable_html);
        // Sanitized array data attr from the method
        $attr_element = $this->set_attributes_html($attr);
        // secured html
        $_xmgs_anti = count($this->errors);
        /* Opening html */
        if (empty($attr_element) || is_null($attr_element)) 
        {
          $__sanitizeString = preg_replace("/\s+/", "", "%s %s");
        } else {
          $__sanitizeString = "%s %s";
        }

        $__value = "%s";
        
        $value_prepared = sprintf($__value, $value);
        
        // print to string
        $prepare_openingf = sprintf($__sanitizeString, $element, $attr_element);
        
        if (in_array($element, $this->end_tag)) 
        {
          return $this->___ilHtml($element, $attr_element);
        } elseif ($element === $this->mentity) {
            // append html content to string or html entity
            $prepare = "";
            ob_start();
            // return value when "Try" is being wrap with wine method
            if ($disable_html !== false || $this->disable_html === true) {
                $prepare .= $value_prepared;
            } else {
                $prepare .= html_entity_decode($value_prepared);
            }
            ob_end_clean();
            return $prepare;
        } else {
            $__prepare = "";
            $__prepare_open = html_entity_decode(
                $this->e_open . $prepare_openingf . $this->e_close
            );
            $__prepare_close = html_entity_decode(
                $this->e_open . $this->e_end . $element . $this->e_close
            );

            // clean object to print html on the browser
            ob_start();
            // append on it each
            if ($disable_html !== false || $this->disable_html === true) {
                $__prepare .= $this->wineHTML(
                    "pre",
                    $this->wineHTML(
                        "code",
                        $this->e_open . $prepare_openingf . $this->e_close
                    ) .
                        $this->wineHTML("code", $value_prepared) .
                        $this->wineHTML(
                            "code",
                            $this->e_open .
                                $this->e_end .
                                $element .
                                $this->e_close
                        ) .
                        $this->wineHTML("hr", null, true) .
                        $this->wineHTML("br", null, true)
                );
            } else {
                $__prepare .= $__prepare_open;
                $__prepare .= html_entity_decode($value_prepared);
                $__prepare .= $__prepare_close;
            }
            ob_end_clean();
            if (!is_string($__prepare)) {
                for ($__xmsg = 0; $__xmsg < $_xmgs_anti; $__xmsg++) {
                    throw new \Exception("\"" . $_xmgs_anti[$__xmsg]);
                    exit;
                }
            } else {
                filter_var($__prepare,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                return (string) $__prepare;
            }
        }
    }

    /**
     * @method
     * Defined : Private method reserved keyword checker
     * @since: v1.0
     * DT: 11.08.2023 *
     */
    protected function wine_reserved_keyword_verifier(
        string|array $key = "",
        array $containers = []
    ): bool {
      return wine_key_verifier($key, $containers);
    }

    /**
     * @method
     * Defined : Private method attribute loop
     * @since: v1.0
     * DT: 11.08.2023 *
     */
    private function wine_element_attribute_provider( array $attribute_hooks): array
    {
        $data_elem_attr = [];

        foreach ($attribute_hooks as $key_attr => $output_rendered) {
            $data_elem_attr[] =
                $this->space . $key_attr . "=\"$output_rendered\"";
        }

        return $data_elem_attr;
    }
    /**
     * @method
     * Defined : Private method rendered result string return!
     * @since: v1.0
     * DT: 11.08.2023 *
     */
    private function wine_provide_rendered_result_string(
        array $array_child_entities
    ): string {

        return wine_rendered($array_child_entities);
    }
    /**
     * @method
     * Defined : Private method asset check if the value string return!
     * @since: v1.0
     * DT: 11.08.2023 **/
    private function wine_verifyer_inspector_layer(
       
       string $wine_key, 
       
       array $data_containers

    ) : string {
        $array_child_entities = [];

        if (!is_array($data_containers[$wine_key]()[0] ?? "")) {
            return implode("", $data_containers[$wine_key]());
        } else {
            // I should use array element child ['div', attr => [] ... ]
            $array_child_entities = $this->array_child_element(
                $data_containers
            );
            // If the array is 0 length then return string empty!
            return $this->wine_provide_rendered_result_string(
                $array_child_entities
            );
        }
    }
    /**
     * @method
     * Defined : Private method filter array child html
     * @since: v1.0
     * DT: 10.26.2023 *
     */
    private function optimized_child_array(array $content): string
    {
        // Verify mandatory array key to make array child
        if ($this->wine_reserved_keyword_verifier($this->child, $content)) {
            // If there is then do loop those child and assign attr to the html
            $child_key_array = $content[$this->child];
            // Check if the try is exist and callable ? means it is a function array
            if (
                $this->wine_reserved_keyword_verifier(
                    $this->please,
                    $child_key_array
                ) &&
                is_callable($child_key_array[$this->please])
            ) {
                // if this key [0] which is "div" or element is not array
                // means I can use method wine();
                return $this->wine_verifyer_inspector_layer(
                    $this->please,
                    $child_key_array
                );
            } else {
                $array_child_entities = [];
                // Iterate value and attributes
                foreach ($child_key_array as $ca_key) {
                    // try first layer
                    if (
                        $this->wine_reserved_keyword_verifier(
                            $this->please,
                            $ca_key
                        ) &&
                        is_callable($ca_key[$this->please])
                    ) {
                        return $this->wine_verifyer_inspector_layer(
                            $this->please,
                            $ca_key
                        );
                    }

                    // Get attribute assign from child array
                    $data_elem_attr = [];
                    if (
                        $this->wine_reserved_keyword_verifier(
                            $this->attr,
                            $ca_key
                        )
                    ) {
                        if (isset($ca_key[$this->attr][0])) {
                            $attribute_hooks = $ca_key[$this->attr][0];
                        } else {
                            $attribute_hooks = $ca_key[$this->attr];
                        }

                         if (is_array($attribute_hooks)) {
                        
                         foreach ($attribute_hooks as $key_attr => $output_rendered) {
                          $data_elem_attr[] = $this->space . $key_attr . "=\"$output_rendered\"";
                         }

                        } else {
                            $data_elem_attr[] = $this->space . $attribute_hooks;
                        }
                    } elseif (
                        !$this->wine_reserved_keyword_verifier(
                            $this->attr,
                            $ca_key
                        )
                    ) {
                        $data_elem_attr[] = "";
                    }

                    // Sanitized and print string
                    $__sanitizeString = "%s";
                    $prepare_openingf = sprintf(
                        $__sanitizeString,
                        implode("", $data_elem_attr)
                    );
                    if (in_array($ca_key[0], $this->end_tag)) {
                        $array_child_entities[] = $this->___ilHtml(
                            $ca_key[0],
                            $prepare_openingf
                        );
                        // array element tag m-entity
                    } else {
                        // appened if the value is array do implode
                        if (empty($ca_key[0]) || is_null($ca_key[0])) {
                            $designated = div;
                        } else {
                            $designated = $ca_key[0];
                        }
                        if ($ca_key[0] !== $this->mentity) {
                            $array_child_entities[] = $this->___opHtml(
                                $designated,
                                $prepare_openingf
                            );
                        }
                        // sanitized value to string all child re-rendered
                        $__childElementValue = "%s";

                        if (
                            $this->wine_reserved_keyword_verifier(
                                $this->value,
                                $ca_key
                            )
                        ) {
                            if (
                                $this->wine_reserved_keyword_verifier(
                                    $this->please,
                                    $ca_key[$this->value]
                                ) 
                            ) {

                               if(is_callable($ca_key[$this->value][$this->please])) {

                                throw new \Exception(wine_failed_to()['try_failed']);
                                exit();

                               }
                           
                              // I should use array element child ['div', attr => [] ... ]
                              $array_child_entities = $this->array_child_element(
                                $ca_key[$this->value][$this->please]() 
                              );

                              // If the array is 0 length then return string empty!
                              return $this->wine_provide_rendered_result_string(
                                $array_child_entities
                              );  

                             // end of  Tthird
                            } elseif (is_array($ca_key[$this->value])) {
                                $array_child_entities[] = sprintf(
                                    $__childElementValue,
                                    implode("", $ca_key[$this->value])
                                );
                            } else {
                                $array_child_entities[] = sprintf(
                                    $__childElementValue,
                                    $ca_key[$this->value]
                                );
                            }
                        } elseif ($ca_key[0] === $this->mentity) {
                            return $this->wine_provide_rendered_result_string(
                                $array_child_entities
                            );
                        }
                        if ($ca_key[0] !== $this->mentity) {
                            // close html markup
                            $array_child_entities[] = $this->___cxHtml(
                                $ca_key[0]
                            );
                        }
                    }
                }
                return $this->wine_provide_rendered_result_string(
                    $array_child_entities
                );
            }
        } else {
            return false;
        } /* END Else from array try func! */
    }

    /**
     * @method
     * Defined : private assets html
     * @since: v1.0
     * DT: 11.07.2023 *
     */
    protected function ___ilHtml(
        string $element_tag,
        string $element_attr
    ): string {
        $__element =
            $this->e_open .
            $element_tag  .
            $this->space  .
            $element_attr .
            $this->space .
            $this->e_end .
            $this->e_close;
        return $__element;
    }
    /**
     * @method
     * Defined : private assets html
     * @since: v1.0
     * DT: 11.07.2023 *
     */
    protected function ___cxHtml(string $element_tag): string
    {
        $__element =
            $this->e_open . $this->e_end . $element_tag . $this->e_close;
        return $__element;
    }
    /**
     * @method
     * Defined : private assets html
     * @since: v1.0
     * DT: 11.07.2023 *
     */
    protected function ___opHtml(
        string $element_tag,
        string $element_attr
    ): string {
        $__element =
            $this->e_open . $element_tag . $element_attr . $this->e_close;
        return $__element;
    }

    /**
     *
     * @method
     * Defined : protected extension provider
     * @since: v1.3.6
     * DT: 11.7.2023 **/
    protected function wine_attribute_hook(

       bool $development = false,
       
       string|object $object = null,
       
       string|callable $method = null,
       
       mixed ...$args

    ) {
        if ($development === true) 
        {
        
           if (method_exists($object, $method)) 
           {
                /**
                 * @method
                 * Defined : call back value from method if exist and current value as argument
                 * @since: v1.0
                 * DT: 10.30.2023 *
                 */
                /* hooks argment turn into value like magic wine */
                return call_user_func(
                    [$this->wine_check_object_class($object), $method],
                    ...$args
                );

            } elseif (function_exists($method)) {
                /**
                 * @condition
                 * Defined : call back value from function if exist and current value as argument
                 * @since: v1.3.7
                 * DT: 11.08.2023 *
                 */
                return call_user_func(
                    $this->optimized_html($this->mentity, null, $method),
                    ...$args
                );

            } else {

                /**
                 * @method
                 * Defined : Only if the emthod is not exist then this is the current value
                 * @since: v1.0
                 * DT: 10.30.2023 **/
                //If the attribute in hook is a string then print as is
                if (is_string(...$args)) 
                {

                  return implode("", $args);

                } elseif (is_array($args[0])) {

                  return $this->set_attributes_html($args[0]);

                }

            }

        } else {

            return $this->optimized_html(
                $this->mentity,
                null,
                call_user_func(
                    [$this->wine_check_object_class($object), $method],
                    ...$args
                )
            );

        }
    }

    /**
     * @method
     * Defined : private inner Html method handler
     * @since: v1.2.2
     * DT: 10.29.2023 *
     */
    private function wineHTML(

        string $elem = "",
        
        $value = null,
        
        $inline = false

    ): string {

       // Male inline html
       return wine_checker(
          $inline, 
          $elem, 
          $value
       );

    }

    /**
     * @method
     * Defined : private array_child_element content
     * @since: v1.2.3
     * DT: 10.29.2023 *
     */
    private function array_child_element(string|array $child_key_array): array
    {
        // I should use array element child ['div', attr => [] ... ]
        $array_child_entities = [];

        foreach ($child_key_array as $try_val) {
            // Get attribute assign from child array
            $data_elem_attr = [];

            if ($this->wine_reserved_keyword_verifier($this->attr, $try_val)) {
                $data_elem_attr[] = $this->wine_element_attribute_provider(
                    $try_val[$this->attr]
                )[0];
            }
            // Sanitized and print string
            $__sanitizeString = "%s";
            $prepare_openingf = sprintf(
                $__sanitizeString,
                implode("", $data_elem_attr)
            );
            if (in_array($try_val[0], $this->end_tag)) {
                $array_child_entities[] = $this->___ilHtml(
                    $try_val[0],
                    $prepare_openingf
                );
            } else {
                if (empty($try_val[0]) || is_null($try_val[0])) {
                    $designated = div;
                } else {
                    $designated = $try_val[0];
                }
                if ($try_val[0] !== $this->mentity) {
                    $array_child_entities[] = $this->___opHtml(
                        $designated,
                        $prepare_openingf
                    );
                }
                // sanitized value to string all child re-rendered
                $__childElementValue = "%s";
                if (
                    $this->wine_reserved_keyword_verifier(
                        $this->value,
                        $try_val
                    )
                ) {
                    if (is_array($try_val[$this->value])) {
                        $array_child_entities[] = sprintf(
                            $__childElementValue,
                            implode("", $try_val[$this->value])
                        );
                    } else {
                        $array_child_entities[] = sprintf(
                            $__childElementValue,
                            $try_val[$this->value]
                        );
                    }
                }
                // close html markup
                if ($try_val[0] !== $this->mentity) {
                    $array_child_entities[] = $this->___cxHtml($try_val[0]);
                }
            }
        }
        /** / end of foreac */
        return $array_child_entities;
    }

    /**
     * @method
     * Defined : Private method assigned set attribute html dynamic
     * @since: v1.0
     * DT: 10.26.2023 *
     */
    protected function set_attributes_html(string|array|null $attr)
    {
        // Can be string or array
        // If any of those data type will accept and print into the browser
        if (is_array($attr) && !is_null($attr)) {
            // Loop it if this is an array then assigned to you html tag
            $html_attr = [];
            foreach ($attr as $attr_name => $attr_value) {
                // sanitized removed spacing extra!
                $attr_set_element = '%s="%s"';
                $html_attr[] = sprintf(
                    $attr_set_element,
                    $attr_name,
                    $attr_value
                );
            }

            return implode(" ", $html_attr);
        } else {
            // Else print the string as is!
            $element_attr = preg_replace("/\s+/", "", "%s");
            $html_attr = sprintf($element_attr, $attr);
            return $html_attr;
        }
    }

    /**
     * @method
     * Defined : private optmized content
     * @since: v1.0
     * DT: 10.26.2023 *
     */
    private function optimized_content(

      string|callable|array|null $content,
     
      bool $disable_html = false

    ) {
        // verify if content is array to create array child
        if (is_array($content)) {
            // var_dump($content);
            // If that so then return array rendred as html
            return $this->optimized_child_array($content);
            // Else if not array and IF callable
        } elseif (is_callable($content)) {
            // append html callable string
            $the_contents = "";
            $__content_type = "%s";
            $content = sprintf($__content_type, $content($content));
            ob_start();
            $the_contents .= $content;
            ob_end_clean();
            return $the_contents;
        } else {
            ob_start();
            $content_string_type = "%s";
            $content = sprintf($content_string_type, $content);
            $__content = "";
            // else surely that is a string!
            if ($disable_html !== false || $this->disable_html === true) {
                $__content .= $content;
            } else {
                $__content .= html_entity_decode($content);
            }
            ob_end_clean();
            return $__content;
        }
    }

    /**
     * @method
     *
     * --------------------------------------------------------------------------------------------
     * Determined if the wine elment active the hookk by the client if thet so
     * then return the element according to designated hook
     *
     * The param first is
     * @class which is the object itself
     *
     * @string || Callable
     *
     * @arguments which is mixed
     *
     * Defined : public method use value /instead value => []/
     * @since: v2.0
     * DT: 11.11.2023 *
     */
    protected function wine_callable_hook(

      string|callable $func_provider = null,
      
      mixed ...$args

    ): mixed {
       
     return wine_callable($func_provider, ...$args);
        
    }
}
