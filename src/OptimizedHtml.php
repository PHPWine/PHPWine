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
 * @link      https://github.com/WPExtension/WPOptimizedHtml/
 * @link      https://github.com/WPExtension/blob/WPOptimizedHtml/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   v1.2.8
 * @since     10.26.2023
 * @since     10.30.2023
 *
 */

class OptimizedHtml
{
    /**
     * @var Array init inline HTML no closing tag
     * @property
     * Defined : html entities
     * @since: v1.0
     * DT: 10.26.2023 **/
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
     * @var Constant|Array
     * Defined : public constant for child array key
     * @since: v1.2.5
     * DT: 10.29.2023 **/
    protected const __CHILDKEY = [
        // filter child array html element
        "CK" => "ARRAY_FIRST_CHILD_ELEMENT",

        // filter value array html element
        "CV" => "ARRAY_VALUE_CHILD_ELEMENT",

        // filter attr array html element
        "CA" => "ARRAY_ATTR_CHILD_ELEMENT",
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
    private $collected;

    /**
     * @var String init content value
     * @property
     * Defined : html entities
     * @since: v1.0
     * DT: 10.26.2023 **/
    private $content;

    /**
     * @var constant|Array child html
     * @property
     * Defined : html child array key
     * @since: v1.0
     * DT: 10.26.2023 **/
    public const child = self::__CHILDKEY["CK"];

    /**
     * @var constant|Array child value html
     * @property
     * Defined : html child value array key
     * @since: v1.0
     * DT: 10.26.2023 **/
    public const value = self::__CHILDKEY["CV"];

    /**
     * @var constant|Array child html
     * @property
     * Defined : html child attribute array key
     * @since: v1.0
     * DT: 10.26.2023 **/
    public const attr = self::__CHILDKEY["CA"];

    /**
     * @var String disable html
     * @property
     * Defined : html child attribute array key
     * @since: v1.2.2
     * DT: 10.26.2023 **/
    public $disable_html;

    /**
     * @var constant|String child html
     * @property
     * Defined : removed parent element when "try" is being warp with wine method
     * @since: v1.2.2
     * DT: 10.26.2023 **/
    public const __ = "__";

    /**
     * @var constant|String Try callable
     * @property
     * Defined : callable key word "try" executed condition and statement inside array child html
     * @since: v1.2.0
     * DT: 10.26.2023 **/
    public const please = "try";

    public function __construct(bool $disable_html = false)
    {
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
        $entity = ["&lt;", "&gt;", "/"];

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
         * @contant
         * Defined : public constant for child array key child
         * @since: v1.2.5
         * DT: 10.29.2023 **/
        if (!defined("child")) {
            define("child", self::__CHILDKEY["CK"]);
        }

        /**
         * @contant
         * Defined : public constant for child array key attributes
         * @since: v1.2.5
         * DT: 10.29.2023 **/
        if (!defined("attr")) {
            define("attr", self::__CHILDKEY["CA"]);
        }

        /**
         * @contant
         * Defined : public constant for child array key value
         * @since: v1.2.5
         * DT: 10.29.2023 **/
        if (!defined("value")) {
            define("value", self::__CHILDKEY["CV"]);
        }

        /**
         * @contant
         * Defined : public constant for child array key please
         * @since: v1.2.5
         * DT: 10.29.2023 **/
        if (!defined("please")) {
            define("please", "try");
        }

        /**
         * @constant
         * Defined : public constant magic entity
         * removed parent element in wine method
         * @since: v1.2.5
         * DT: 10.29.2023 **/
        if (!defined("__")) {
            define("__", "__");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("a")) {
            define("a", "&#97;");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("abbr")) {
            define("abbr", "abbr");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("address")) {
            define("address", "address");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("article")) {
            define("article", "article");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("aside")) {
            define("aside", "aside");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("audio")) {
            define("audio", "audio");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("controls")) {
            define("controls", "controls");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("src")) {
            define("src", "src");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("type ")) {
            define("type ", "type");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("p")) {
            define("p", "p");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("b")) {
            define("b", "b");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("base")) {
            define("base", "base ");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("target")) {
            define("target", "target");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("href")) {
            define("href", "href");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("width")) {
            define("width", "width");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("height")) {
            define("height", "height");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("alt")) {
            define("alt", "alt");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("style")) {
            define("style", "style");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("script")) {
            define("script", "script");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("ul")) {
            define("ul", "ul");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("li")) {
            define("li", "li");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("bdi")) {
            define("bdi", "bdi");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("bdo")) {
            define("bdo", "bdo");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("dir")) {
            define("dir", "dir");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("blockquote")) {
            define("blockquote", "blockquote");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("cite")) {
            define("cite", "cite");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("body")) {
            define("body", "body");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("head")) {
            define("head", "head");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("title")) {
            define("title", "title");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("br")) {
            define("br", "br");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("button")) {
            define("button", "button");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("canvas")) {
            define("canvas", "canvas");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("caption")) {
            define("caption", "caption");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("code")) {
            define("code", "code");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("col")) {
            define("col", "col");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("colgroup")) {
            define("colgroup", "colgroup");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("data")) {
            define("data", "data");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("value")) {
            define("value", "value");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("datalist")) {
            define("datalist", "datalist");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("for")) {
            define("for", "for");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("list")) {
            define("list", "list");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("name")) {
            define("name", "name");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("id")) {
            define("id", "id");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("classes")) {
            define("classes", "class");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("dl")) {
            define("dl", "dl");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("dt")) {
            define("dt", "dt");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("del")) {
            define("del", "del");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("ins")) {
            define("ins", "ins");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("details")) {
            define("details", "details");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("summary")) {
            define("summary", "summary");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("dfn")) {
            define("dfn", "dfn");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("dialog")) {
            define("dialog", "dialog");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("open")) {
            define("open", "open");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("div")) {
            define("div", "div");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("em")) {
            define("em", "em");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("embed")) {
            define("embed", "embed");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("fieldset")) {
            define("fieldset", "fieldset");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("figure")) {
            define("figure", "figure");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("figcaption")) {
            define("figcaption", "figcaption");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("footer")) {
            define("footer", "footer");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("form")) {
            define("form", "form");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("action")) {
            define("action", "action");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("method")) {
            define("method", "method");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("h1")) {
            define("h1", "h1");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("h2")) {
            define("h2", "h2");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("h3")) {
            define("h3", "h3");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("h4")) {
            define("h4", "h4");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("h5")) {
            define("h5", "h5");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("h6")) {
            define("h6", "h6");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("html")) {
            define("html", "html");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("lang")) {
            define("lang", "lang");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("hr")) {
            define("hr", "hr");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("br")) {
            define("br", "br");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("i")) {
            define("i", "i");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("iframe")) {
            define("iframe", "iframe");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("title")) {
            define("title", "title");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("img")) {
            define("img", "img");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("input")) {
            define("input", "input");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("del")) {
            define("del", "del");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("kbd")) {
            define("kbd", "kbd");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("label")) {
            define("label", "label");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("legend")) {
            define("legend", "legend");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("link")) {
            define("link", "link");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("main")) {
            define("main", "main");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("map")) {
            define("map", "map");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("usemap")) {
            define("usemap", "usemap");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("coords")) {
            define("coords", "coords");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("shape")) {
            define("shape", "shape");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("area")) {
            define("area", "area");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("mark")) {
            define("mark", "mark");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("meta")) {
            define("meta", "meta");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("content")) {
            define("content", "content");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("meter")) {
            define("meter", "meter");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("min")) {
            define("min", "min");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("max")) {
            define("max", "max");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("nav")) {
            define("nav", "nav");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("noscript")) {
            define("noscript", "noscript");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("object")) {
            define("object", "object");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("ol")) {
            define("ol", "ol");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("optgroup")) {
            define("optgroup", "optgroup");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("select")) {
            define("select", "select");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("option")) {
            define("option", "option");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("output")) {
            define("output", "output");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("oninput")) {
            define("oninput", "oninput");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("param")) {
            define("param", "param");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("picture")) {
            define("picture", "picture");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("srcset")) {
            define("srcset", "srcset");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("media")) {
            define("media", "media");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("source")) {
            define("source", "source");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("pre")) {
            define("pre", "pre");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("progress")) {
            define("progress", "progress");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("q")) {
            define("q", "q");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("ruby")) {
            define("ruby", "ruby");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("rp")) {
            define("rp", "rp");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("rt")) {
            define("rt", "rt");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("s")) {
            define("s", "s");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("samp")) {
            define("samp", "samp");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("small")) {
            define("small", "small");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("span")) {
            define("span", "span");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("strong")) {
            define("strong", "strong");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("sub")) {
            define("sub", "sub");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("summary")) {
            define("summary", "summary");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("sup")) {
            define("sup", "sup");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("svg")) {
            define("svg", "svg");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("circle")) {
            define("circle", "circle");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("cx")) {
            define("cx", "cx");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("cy")) {
            define("cy", "cy");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("r")) {
            define("r", "r");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("stroke")) {
            define("stroke", "stroke");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("stroke-width")) {
            define("stroke-width", "stroke-width");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("fill")) {
            define("fill", "fill");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("table")) {
            define("table", "table");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("tbody")) {
            define("tbody", "tbody");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("td")) {
            define("td", "td");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("template")) {
            define("template", "template");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("textarea")) {
            define("textarea", "textarea");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("rows")) {
            define("rows", "rows");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("cols")) {
            define("cols", "cols");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("tfoot")) {
            define("tfoot", "tfoot");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("th")) {
            define("th", "th");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("thead")) {
            define("thead", "thead");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("time")) {
            define("time", "time");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("datetime")) {
            define("datetime", "datetime");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("tr")) {
            define("tr", "tr");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("track")) {
            define("track", "track");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("tt")) {
            define("tt", "tt");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("u")) {
            define("u", "u");
        }


        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("var")) {
            define("var", "var");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("video")) {
            define("video", "video");
        }

        /**
         * @constant
         * Defined : public element constant HTML
         * @since: v1.2.7
         * DT: 10.30.2023 **/
        if (!defined("wbr")) {
            define("wbr", "wbr");
        }
    }

    /**
     * @method
     * Defined : public method use optimized html with wine
     * @since: v1.0
     * DT: 10.26.2023 **/
    public function wine(
        string $tag,
        string|callable|array $content = [],
        string|array $attr = [],
        $enable_html = false
    ) {
        /**
         * @var
         * Defined : check mnandatory element assign for html
         * @since: v1.0
         * DT: 10.26.2023 **/
        if (empty($tag)) {
            throw new \Exception(
                "HTML Element not found as the first argument of wine method"
            );
            exit();
        }

        /**
         * @method
         * Defined : Perform wine in browser
         * @since: v1.0
         * DT: 10.26.2023 **/
        return $this->optimized_html($tag, $attr, $content, $enable_html);
    }

    /**
     * @method
     * Defined : public method use value /instead value => []/
     * @since: v1.2.6
     * DT: 10.26.2023 **/
    public function value(
        object $class,
        string|callable $call_back,
        mixed ...$args
    ) {
        /**
         * @method
         * Defined : call back value from method
         * @since: v1.0
         * DT: 10.26.2023 **/
        return $this->optimized_html(
            self::__,
            null,
            call_user_func([$class, $call_back], ...$args)
        );
    }

    /**
     * @method
     * Defined : public method filtered current value and replace/
     * @since: v1.2.8
     * DT: 10.26.2023 **/
    public function magic(
      object $class,
      string|callable $call_back,
      mixed ...$current_value
    ) {

      if( method_exists($class, $call_back)) {
        /**
         * @method
         * Defined : call back value from method if exist and current value as argument
         * @since: v1.0
         * DT: 10.30.2023 **/
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
         * DT: 10.30.2023 **/
         return $this->optimized_html(
            self::__,
            null,
            ...$current_value
        );
      } 
  
   }
  

    /**
     * @method
     * Defined : Private method assigned set attribute html dynamic
     * @since: v1.0
     * DT: 10.26.2023 **/
    private function set_attributes_html(string|array $attr = null)
    {
        // Can be string or array
        // If any of those data type will accept and print into the browser
        if (is_array($attr) && !is_null($attr)) {
            // Loop it if this is an array then assigned to you html tag
            $html_attr = [];
            foreach ($attr as $attr_name => $attr_value) {
                // sanitized removed spacing extra!
                $attr_set_element = preg_replace("/\s+/", "", '%s="%s"');
                $html_attr[] = sprintf(
                    $attr_set_element,
                    $attr_name,
                    $attr_value
                );
            }
            return implode("", $html_attr);
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
     * DT: 10.26.2023 **/
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
     * DT: 10.26.2023 **/
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
                if (!is_array($child_key_array[self::please]()[0])) {
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

                    ###### END TRY METHOD
                }
            } else {
                $array_child_entities = [];
                // Iterate value and attributes
                foreach ($child_key_array as $ca_key) {
                    #### try first layert

                    if (
                        array_key_exists(self::please, $ca_key) &&
                        is_callable($ca_key[self::please])
                    ) {
                        if (!is_array($ca_key[self::please]()[0])) {
                            return implode("", $ca_key[self::please]());
                        } else {
                            #### try first layer

                            // I should use array element child ['div', attr => [] ... ]
                            $array_child_entities = $this->array_child_element(
                                $ca_key
                            );

                            // If the array is 0 length then return string empty!
                            if (count($array_child_entities) < 0) {
                                return "";
                            }
                            // elseimplode array to string!
                            else {
                                return implode("", $array_child_entities);
                            }

                            ### END try first layer
                        }
                    }

                    ### end try
                    // Get attribute assign from child array
                    $data_elem_attr = [];       
                    if (array_key_exists(self::attr, $ca_key)) {
                        foreach ($ca_key[self::attr] as $key_attr => $v) {
                            $data_elem_attr[] = " ".$key_attr . "=\"$v\"";
                        }
                    } else if(!array_key_exists(self::attr, $ca_key)) {
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
                    } else {
                        // appened if the value is array do implode
                        $array_child_entities[] =
                            $this->e_open .
                            $ca_key[0] .
                            $prepare_openingf .
                            $this->e_close;

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
                                ### try in value

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
                                    // elseimplode array to string!
                                    else {
                                        return implode(
                                            "",
                                            $array_child_entities
                                        );
                                    }
                                }

                                ### end of try in value
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
                        }

                        // close html markup
                        $array_child_entities[] =
                            $this->e_open .
                            $this->e_end .
                            $ca_key[0] .
                            $this->e_close;
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
     * DT: 10.29.2023 **/
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
     * DT: 10.29.2023 **/
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
                // appened if the value is array do implode
                $array_child_entities[] =
                    $this->e_open .
                    $try_val[0] .
                    $prepare_openingf .
                    $this->e_close;

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
                $array_child_entities[] =
                    $this->e_open . $this->e_end . $try_val[0] . $this->e_close;
            }
        } /** / end of foreac */

        return $array_child_entities;
    }

    /**
     * @method
     * Defined : private optmized content
     * @since: v1.0
     * DT: 10.26.2023 **/
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
