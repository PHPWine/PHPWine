<?php
namespace PHPWineOptimizedHtml;
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
 * @version   v1.3.4
 * @since     10.26.2023
 * @since     11.05.2023
 *
 */
class OptimizedHtml
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
     * @var Array|Constant
     * @property
     *
     * Note: This provides list of array are the constant that registered available to the front end
     * without using the class itself
     *
     * --------------------------------------------------------------------------------------------
     *  ex. $tag = new OptimizedHtml();
     *  $tag::div < these are elements that will available for us to use the html element >
     *  but still required to init the class PHPWine in order this to works as this lists are
     *  only available in public __construct() method
     *
     * before you will use string which seems not good in layout but as these lists are being
     * registered you can use the constant as follow
     *
     * ex. calling the elements
     * wine('element', $value);
     *
     * You can now use the tag without string that look and feel merge as wine
     * link wine(div, $value)
     *
     * --------------------------------------------------------------------------------------------
     *
     * Also you can do that in child array method these list is not only available to the wine method
     * this also can be use to child array of wine method itself
     *
     * ex. instead of assigning the array child of string element? you can use this constant providers
     * registered already within the class of PHPWine or OptimizedHtml
     *
     * like: [
     *   child => [
     *    / FROM ['div'] /
     *     TO [div]
     *  ]
     * ]
     *
     * Which look nice and clean feel like it is merging with the layout of youre codes
     * you can check to documentation which are avaialable registered providers for you
     * link: https://phpwine.github.io/documents/
     *
     * Also you can submit your concers and request with the submit bug in documentation menu
     * Link: https://github.com/PHPWine/PHPWine/issues/new
     *
     * Defined : html constant providers for arrays and wine element
     *
     * @since: v1.3.1
     * DT: 11.03.2023 *
     */
    protected $providers = [
        "alt",
        "controls",
        "dir",
        "for",
        "href",
        "height",
        "id",
        "list",
        "max",
        "min",
        "name",
        "style",
        "script",
        "src",
        "type",
        "target",
        "val",
        "width",
        "a",
        "action",
        "area",
        "abbr",
        "address",
        "article",
        "aside",
        "audio",
        "base",
        "b",
        "bdi",
        "bdo",
        "blockquote",
        "br",
        "button",
        "body",
        "coords",
        "content",
        "cite",
        "canvas",
        "caption",
        "code",
        "col",
        "cols",
        "colgroup",
        "circle",
        "cx",
        "cy",
        "del",
        "div",
        "dfn",
        "dialog",
        "details",
        "data",
        "datalist",
        "dl",
        "dt",
        "datetime",
        "em",
        "embed",
        "fill",
        "fieldset",
        "figure",
        "figcaption",
        "footer",
        "form",
        "hr",
        "h1",
        "h2",
        "h3",
        "h4",
        "h5",
        "h6",
        "head",
        "html",
        "img",
        "input",
        "i",
        "iframe",
        "ins",
        "kbd",
        "legend",
        "label",
        "link",
        "lang",
        "li",
        "media",
        "meter",
        "mark",
        "meta",
        "main",
        "method",
        "map",
        "nav",
        "noscript",
        "oninput",
        "optgroup",
        "option",
        "output",
        "object",
        "ol",
        "open",
        "p",
        "param",
        "picture",
        "pre",
        "progress",
        "q",
        "r",
        "ruby",
        "rp",
        "rt",
        "rows",
        "section",
        "samp",
        "small",
        "span",
        "strong",
        "sub",
        "summary",
        "sup",
        "svg",
        "s",
        "select",
        "shape",
        "summary",
        "src",
        "source",
        "stroke",
        "stroke-width",
        "tfoot",
        "th",
        "thead",
        "tr",
        "track",
        "tt",
        "title",
        "table",
        "tbody",
        "td",
        "template",
        "textarea",
        "ul",
        "usemap",
        "u",
        "var",
        "video",
        "wbr",
    ];
    /**
     * @var Constant|Array
     * Defined : public constant for child array key
     * @since: v1.2.5
     * DT: 10.29.2023 *
     */
    protected const __CHILDKEY = [
        // filter child array html element
        "CK" => "ARRAY_FIRST_CHILD_ELEMENT",
        // filter value array html element
        "CV" => "ARRAY_VALUE_CHILD_ELEMENT",
        // filter attr array html element
        "CA" => "ARRAY_ATTR_CHILD_ELEMENT",
    ];
    /**
     * @var Array extras
     * @property
     * Defined : app assets function version
     * @since: v1.3.4
     * DT: 11.05.2023 *
     */
    private $extras = ["func" => __DIR__ . "/wine/PHPWine.php"];
    /**
     * @var String init opening html
     * @property
     * Defined : html entities
     * @since: v1.0
     * DT: 10.26.2023 *
     */
    private $e_open;
    /**
     * @var String init closing html
     * @property
     * Defined : html entities
     * @since: v1.0
     * DT: 10.26.2023 *
     */
    private $e_close;
    /**
     * @var String init end html
     * @property
     * Defined : html entities
     * @since: v1.0
     * DT: 10.26.2023 *
     */
    private $e_end;
    /**
     * @var String init collection entity html
     * @property
     * Defined : html entities
     * @since: v1.0
     * DT: 10.26.2023 *
     */
    private $collected;
    /**
     * @var String init content value
     * @property
     * Defined : html entities
     * @since: v1.0
     * DT: 10.26.2023 *
     */
    private $content;
    /**
     * @var constant|Array child html
     * @property
     * Defined : html child array key
     * @since: v1.0
     * DT: 10.26.2023 *
     */
    public const child = self::__CHILDKEY["CK"];
    /**
     * @var constant|Array child value html
     * @property
     * Defined : html child value array key
     * @since: v1.0
     * DT: 10.26.2023 *
     */
    public const value = self::__CHILDKEY["CV"];
    /**
     * @var constant|Array child html
     * @property
     * Defined : html child attribute array key
     * @since: v1.0
     * DT: 10.26.2023 *
     */
    public const attr = self::__CHILDKEY["CA"];
    /**
     * @var String disable html
     * @property
     * Defined : html child attribute array key
     * @since: v1.2.2
     * DT: 10.26.2023 *
     */
    public $disable_html;
    /**
     * @var constant|String child html
     * @property
     * Defined : removed parent element when "try" is being warp with wine method
     * @since: v1.2.2
     * DT: 10.26.2023 *
     */
    public const __ = "__";
    /**
     * @var constant|String Try callable
     * @property
     * Defined : callable key word "try" executed condition and statement inside array child html
     * @since: v1.2.0
     * DT: 10.26.2023 *
     */
    public const please = "try";
    public function __construct(bool $disable_html = false)
    {
        /**
         * @var String init remove html
         * @property
         * Defined : Disable html
         * @since: v1.2.2
         * DT: 10.29.2023 *
         */
        $this->disable_html = $disable_html;
        /**
         * @var Constant providers list
         * @property
         * Defined : Registered constant
         * @since: v1.3.1
         * DT: 11.03.2023 *
         */
        $this->providers($this->providers);
        /**
         * @var String init list html
         * @property
         * Defined : html entities
         * @since: v1.0
         * DT: 10.26.2023 *
         */
        $entity = ["&lt;", "&gt;", "/"];
        /**
         * @var String init property opening html
         * @property
         * Defined : html entities
         * @since: v1.0
         * DT: 10.26.2023 *
         */
        $this->e_open = $entity[0];
        /**
         * @var String init property opening html
         * @property
         * Defined : html entities
         * @since: v1.0
         * DT: 10.26.2023 *
         */
        $this->e_close = $entity[1];
        /**
         * @var String init closing html
         * @property
         * Defined : html entities
         * @since: v1.0
         * DT: 10.26.2023 *
         */
        $this->e_end = $entity[2];
        /**
         * @contant
         * Defined : public constant for child array key child
         * @since: v1.2.5
         * DT: 10.29.2023 *
         */
        if (!defined("child")) {
            define("child", self::__CHILDKEY["CK"]);
        }
        /**
         * @contant
         * Defined : public constant for child array key attributes
         * @since: v1.2.5
         * DT: 10.29.2023 *
         */
        if (!defined("attr")) {
            define("attr", self::__CHILDKEY["CA"]);
        }
        /**
         * @contant
         * Defined : public constant for child array key value
         * @since: v1.2.5
         * DT: 10.29.2023 *
         */
        if (!defined("value")) {
            define("value", self::__CHILDKEY["CV"]);
        }
        /**
         * @contant
         * Defined : public constant for child array key please
         * @since: v1.2.5
         * DT: 10.29.2023 *
         */
        if (!defined("please")) {
            define("please", "try");
        }
        /**
         * @constant
         * Defined : public constant magic entity
         * removed parent element in wine method
         * @since: v1.2.5
         * DT: 10.29.2023 *
         */
        if (!defined("__")) {
            define("__", "__");
        }
        /**
         * @constant
         * Defined : public constant attr class
         * @since: v1.3.2
         * DT: 10.29.2023 *
         */
        if (!defined("classes")) {
            define("classes", "class");
        }
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
        string $tag = null,
        string|callable|array $content = null,
        string|array $attr = null,
        $enable_html = false
    ) {
        /**
         * @var
         * Defined : check mnandatory element assign for html
         * @since: v1.3.4
         * DT: 11.06.2023 *
         */
        if (is_null($tag) || empty($tag)) {
            $tag = "section";
        }
        /**
         * @method
         * Defined : Perform wine in browser
         * @since: v1.0
         * DT: 10.26.2023 *
         */
        return $this->optimized_html($tag, $attr, $content, $enable_html);
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
        object $class = null,
        string|callable $call_back = null,
        mixed ...$args
    ) {
        /**
         * @method
         * Defined : call back value from method
         * @since: v1.0
         * DT: 10.26.2023 *
         */
        return $this->optimized_html(
            self::__,
            null,
            call_user_func([$class, $call_back], ...$args)
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
     *
     * @string|callable
     *
     * @argument which is mixed
     *
     * Defined : public method filtered current value and replace/
     * @since: v1.2.8
     * DT: 10.26.2023 *
     */
    public function magic(
        object $class = null,
        string|callable $call_back = null,
        mixed ...$current_value
    ) {
        if (method_exists($class, $call_back)) {
            /**
             * @method
             * Defined : call back value from method if exist and current value as argument
             * @since: v1.0
             * DT: 10.30.2023 *
             */
            return $this->optimized_html(
                self::__,
                null,
                call_user_func([$class, $call_back], ...$current_value)
            );
        } else {
            /**
             * @method
             * Defined : Only if the emthod is not exist then this is the current value
             * @since: v1.0
             * DT: 10.30.2023 *
             */
            return $this->optimized_html(self::__, null, ...$current_value);
        }
    }
    /**
     * @method
     * Defined : Private method provider constant html tag
     * @since: v1.0
     * DT: 10.26.2023 *
     */
    private function providers($providers): void
    {
        foreach ($providers as $element) {
            if (!defined($element)) {
                define($element, $element);
            }
        }
        if (file_exists($this->extras["func"])) {
            require_once $this->extras["func"];
        }
    }
    /**
     * @method
     * Defined : Private method assigned set attribute html dynamic
     * @since: v1.0
     * DT: 10.26.2023 *
     */
    private function set_attributes_html(string|array $attr = null)
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
     * Defined : Private method Optimized html
     * @since: v1.0
     * DT: 10.26.2023 *
     */
    private function optimized_html(
        string $tag,
        string|array $attr = null,
        string|callable|array $content,
        $disable_html = false
    ) {
        // Verifying tag element required to assign!
        $element = (string) strtolower($tag);
        // Sanitizes content from the method
        $value = $this->optimized_content($content, $disable_html);
        // Sanitized array data attr from the method
        $attr_element = $this->set_attributes_html($attr);
        /* Opening html */
        if (empty($attr_element) || is_null($attr_element)) {
            $__sanitizeString = preg_replace("/\s+/", "", "%s %s");
        } else {
            $__sanitizeString = "%s %s";
        }
        $__value = "%s";
        $value_prepared = sprintf($__value, $value);
        // print to string
        $prepare_openingf = sprintf($__sanitizeString, $element, $attr_element);
        if (in_array($element, $this->end_tag)) {
            return $this->e_open . $prepare_openingf . " /" . $this->e_close;
        } elseif ($element === self::__) {
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
            return $__prepare;
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
        if (array_key_exists(self::child, $content)) {
            // If there is then do loop those child and assign attr to the html
            $child_key_array = $content[self::child];
            // Check if the try is exist and callable ? means it is a function array
            if (
                array_key_exists(self::please, $child_key_array) &&
                is_callable($child_key_array[self::please])
            ) {
                // if this key [0] which is "div" or element is not array
                // means I can use method wine();
                if (!is_array($child_key_array[self::please]()[0] ?? false)) {
                    return implode("", $child_key_array[self::please]());
                } else {
                    // I should use array element child ['div', attr => [] ... ]
                    $array_child_entities = $this->array_child_element(
                        $child_key_array
                    );
                    // If the array is 0 length then return string empty!
                    if (count($array_child_entities) < 0) {
                        return "";
                    }
                    // elseimplode array to string!
                    else {
                        return implode("", $array_child_entities);
                    }
                    // End try
                }
            } else {
                $array_child_entities = [];
                // Iterate value and attributes
                foreach ($child_key_array as $ca_key) {
                    // try first layer
                    if (
                        array_key_exists(self::please, $ca_key) &&
                        is_callable($ca_key[self::please])
                    ) {
                        if (!is_array($ca_key[self::please]()[0])) {
                            return implode("", $ca_key[self::please]());
                        } else {
                            // One layer
                            // I should use array element child ['div', attr => [] ... ]
                            $array_child_entities = $this->array_child_element(
                                $ca_key
                            );
                            // If the array is 0 length then return string empty!
                            if (count($array_child_entities) < 0) {
                                return "";
                            }
                            // else implode array to string!
                            else {
                                return implode("", $array_child_entities);
                            }
                            // END try first layer
                        }
                    }
                    // end try
                    // Get attribute assign from child array
                    $data_elem_attr = [];
                    if (array_key_exists(self::attr, $ca_key)) {
                        foreach ($ca_key[self::attr] as $key_attr => $v) {
                            $data_elem_attr[] = " " . $key_attr . "=\"$v\"";
                        }
                    } elseif (!array_key_exists(self::attr, $ca_key)) {
                        $data_elem_attr[] = "";
                    }
                    // Sanitized and print string
                    $__sanitizeString = "%s";
                    $prepare_openingf = sprintf(
                        $__sanitizeString,
                        implode("", $data_elem_attr)
                    );
                    if (in_array($ca_key[0], $this->end_tag)) {
                        $array_child_entities[] =
                            $this->e_open .
                            $ca_key[0] .
                            $prepare_openingf .
                            " /" .
                            $this->e_close;
                        // array element tag m-entity
                    } else {
                        // appened if the value is array do implode
                        if (empty($ca_key[0]) || is_null($ca_key[0])) {
                            $designated = $this->providers[47];
                        } else {
                            $designated = $ca_key[0];
                        }
                        if ($ca_key[0] !== self::__) {
                            $array_child_entities[] =
                                $this->e_open .
                                $designated .
                                $prepare_openingf .
                                $this->e_close;
                        }
                        // sanitized value to string all child re-rendered
                        $__childElementValue = "%s";
                        if (array_key_exists(self::value, $ca_key)) {
                            if (
                                array_key_exists(
                                    self::please,
                                    $ca_key[self::value]
                                ) &&
                                is_callable($ca_key[self::value][self::please])
                            ) {
                                // try third layer
                                if (
                                    !is_array(
                                        $ca_key[self::value][self::please]()[0]
                                    )
                                ) {
                                    return implode(
                                        "",
                                        $ca_key[self::value][self::please]()
                                    );
                                } else {
                                    // I should use array element child ['div', attr => [] ... ]
                                    $array_child_entities = $this->array_child_element(
                                        $ca_key[self::value]
                                    );
                                    // If the array is 0 length then return string empty!
                                    if (count($array_child_entities) < 0) {
                                        return "";
                                    }
                                    // else implode array to string!
                                    else {
                                        return implode(
                                            "",
                                            $array_child_entities
                                        );
                                    }
                                }
                                // end of try third
                            } elseif (is_array($ca_key[self::value])) {
                                $array_child_entities[] = sprintf(
                                    $__childElementValue,
                                    implode("", $ca_key[self::value])
                                );
                            } else {
                                $array_child_entities[] = sprintf(
                                    $__childElementValue,
                                    $ca_key[self::value]
                                );
                            }
                        } elseif ($ca_key[0] === self::__) {
                            if (count($array_child_entities) < 0) {
                                return "";
                            } else {
                                return implode("", $array_child_entities);
                            }
                        }
                        if ($ca_key[0] !== self::__) {
                            // close html markup
                            $array_child_entities[] =
                                $this->e_open .
                                $this->e_end .
                                $ca_key[0] .
                                $this->e_close;
                        }
                    }
                }
                if (count($array_child_entities) < 0) {
                    return "";
                } else {
                    return implode("", $array_child_entities);
                }
            }
        } /* END Else from array try func! */
    }
    /**
     * @method
     * Defined : private inner Html method hand;er
     * @since: v1.2.2
     * DT: 10.29.2023 *
     */
    private function wineHTML(
        string $elem = "",
        $value = null,
        $inline = false
    ): string {
        // Male inline html
        if ($inline !== false) {
            return "<$elem / >";
        } else {
            // return closing tag
            return "<$elem>$value</$elem>";
        }
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
        foreach ($child_key_array[self::please]() as $try_val) {
            // Get attribute assign from child array
            $data_elem_attr = [];
            if (array_key_exists(self::attr, $try_val)) {
                foreach ($try_val[self::attr] as $key_attr => $v) {
                    $data_elem_attr[] = $key_attr . "=\"$v\"";
                }
            }
            // Sanitized and print string
            $__sanitizeString = "%s";
            $prepare_openingf = sprintf(
                $__sanitizeString,
                implode("", $data_elem_attr)
            );
            if (in_array($try_val[0], $this->end_tag)) {
                $array_child_entities[] =
                    $this->e_open .
                    $try_val[0] .
                    $prepare_openingf .
                    " /" .
                    $this->e_close;
            } else {
                if (empty($try_val[0]) || is_null($try_val[0])) {
                    $designated = $this->providers[47];
                } else {
                    $designated = $try_val[0];
                }
                if ($try_val[0] !== self::__) {
                    $array_child_entities[] =
                        $this->e_open .
                        $designated .
                        $prepare_openingf .
                        $this->e_close;
                }
                // sanitized value to string all child re-rendered
                $__childElementValue = "%s";
                if (array_key_exists(self::value, $try_val)) {
                    if (is_array($try_val[self::value])) {
                        $array_child_entities[] = sprintf(
                            $__childElementValue,
                            implode("", $try_val[self::value])
                        );
                    } else {
                        $array_child_entities[] = sprintf(
                            $__childElementValue,
                            $try_val[self::value]
                        );
                    }
                }
                // close html markup
                if ($try_val[0] !== self::__) {
                    $array_child_entities[] =
                        $this->e_open .
                        $this->e_end .
                        $try_val[0] .
                        $this->e_close;
                }
            }
        }
        /** / end of foreac */
        return $array_child_entities;
    }
    /**
     * @method
     * Defined : private optmized content
     * @since: v1.0
     * DT: 10.26.2023 *
     */
    private function optimized_content(
        string|callable|array $content = [],
        $disable_html = false
    ) {
        // verify if content is array to create array child
        if (is_array($content)) {
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
}
