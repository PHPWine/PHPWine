<img src="https://img.shields.io/badge/license-MIT-blue">  [![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://github.com/PHPWine/PHPWine/graphs/commit-activity) [![GitHub Release](https://img.shields.io/github/release/PHPWine/PHPWine.svg?style=flat)](https://github.com/PHPWine/PHPWine/releases) ![Packagist Version (custom server)](https://img.shields.io/packagist/v/phpwine/optimizedhtml?color=orange) ![GitHub Release Date](https://img.shields.io/github/release-date/PHPWine/PHPWine) ![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/PHPWine/PHPWine) ![GitHub repo size](https://img.shields.io/github/repo-size/PHPWine/PHPWine) ![Maintainer](https://img.shields.io/badge/maintainer-nielsoffice-green) ![GitHub last commit](https://img.shields.io/github/last-commit/PHPWine/PHPWine) [![Ask Me Anything !](https://img.shields.io/badge/Ask%20me-anything-1abc9c.svg)](https://github.com/PHPWine/PHPWine/issues/new) [![Issues](https://img.shields.io/github/issues-raw/PHPWine/PHPWine.svg?maxAge=25000)](https://github.com/PHPWine/PHPWine/issues)


# PHPWine (OptimizedHtml)
HTML Frontend Framework Design for Backend OptimizedHTML PHPWine written in PHP (Hypertext Preprocessor).

PHPWine doesn't force developers not to use native HTML, in fact if you feel super comfortable with native HTML you can stick to it,
the main goal is to lessen, minimize, optimize, and organize both HTML and workload.

There are a lot of ways to use Wine but I highly recommend using OOP for HTML applications with Doctrine and Components, through that you can easily
add and update HTML that separates from your data.

<strong>DOCTRINE:</strong> This files and classes is the main source where the data are being used multiple times in single or different pages, for instance, 
your branding source file. That is possible to use in the main header and footer or menu arrays of data that are used both in the navigation and footer section
you can store them in doctrine properties and send back to your hooks as your arguments. <i> In addition Doctrine is powerful enough to handle the visibility of elements based of the specific screen size you set, especially using the reserved key "those" Those having the class you assigned the visibility will respond based on your doctrine declaration. </i>



<strong>APPS:</strong> These are the main public classes that will invoke in public pages that display HTML and data to browser, With these files and classes you will
prepared the layout of your HTML application base on your key hooks for column or columns and xrow or xrows as the HTML is not visible to you at least you have a proper 
pointers that human-readable that can help you to analyze your codes in php to HTML.   

<strong>COMPONENTS:</strong> These are HTML that hold data information from your controller or classes like ul, li, img files that take care of specific data. 
most of the time this is an inner second or third child of HTML and data.

In addition: I don't recommend wine having more of a third child HTML in case I highly recommend to add a hook and creating a new method for the value of that child.

```PHP
 // Structure 
 views
  |- Apps
  |- Components
  |- Doctrines
```
```PHP
/* Installation via composer */ 
/* required version *v2.2.2 */
composer require phpwine/optimizedhtml v2.2.2
```

```PHP
 /** Local file PHPWine **/
 require_once __DIR__ . '/vendor/autoload.php';

 new \PHPWineOptimizedHtml\OptimizedHtml;
```

```PHP
// Function Hooks @since v2.0
wine(  
  string $tag = '',
  string|callable|array $content = [],
  string|array $attr = []
  array $hooks = []
);

source: https://github.com/PHPWine/PHPWine/blob/main/src/wine/hooks/wine.php

```

```PHP
// Function Hooks @since v2.0
wcleared()
Source: https://github.com/PHPWine/PHPWine/blob/main/src/wine/hooks/wcleared.php

wine_doctrine_init();
Source: https://github.com/PHPWine/PHPWine/blob/main/src/wine/hooks/wine_doctrine_init.php
```

```PHP
// Method Hooks @since v2.0
attr( 
  object|string $class = null,
  string|callable $call_back = null,
  mixed ...$attr
);

source: https://github.com/PHPWine/PHPWine/blob/main/src/wine/hooks/attr.php

```

```PHP
// Method Hooks @since v2.0
magic(
 object|string $class = null,
 string|callable $call_back = null,
 mixed ...$current_value
);

source: https://github.com/PHPWine/PHPWine/blob/main/src/wine/hooks/magic.php

```

```PHP
// Method Hooks @since v2.0
value(
 object|string|null $class = null,
 string|callable|null $call_back = null,
 mixed ...$args
);

source: https://github.com/PHPWine/PHPWine/blob/main/src/wine/hooks/value.php

```

Collections : 
<br /> <a href="https://phpwine.github.io/documents/#w_quickstart">Quick Start </a>
<br /> <a href="https://github.com/PHPWine/WineWPMenuWalker"> WP WineWPMenuWalker (Custom Menu w/Hooks) <sup>@since v2.0</sup> </a>
<br /> <a href="https://github.com/PHPWine/WineAccordion"> WineAccordion <sup>@since v2.2.0</sup> </a>
<br /> <a href="https://github.com/PHPWine/WineTab"> WineTab <sup>@since v2.2.0</sup> </a>
<br /> <a href="https://github.com/PHPWine/WinePopup"> WinePopup <sup>@since v2.2.0</sup> </a>

<br /> New :
```PHP
// New in v2.0 soon Hooks 
echo wine(h1,'Hello World', [ id => 'wine_id'], $hooks = [
  ['top_your_hook_name_add_html_top',[ $one = 2, $two = 4] ],
  ['bottom_your_hook_name_add_html_bottom',[ $one = 'A', $two = 'B']]
 ]  
);

// You can now | Using key "string" top_ OR bottom_ followed by your hook name ... 
// ex. [  bottom_your_hook_name_add_html_bottom, [ $argu_1, .... ] ]
$hooks = [
 ['bottom_your_hook_name_add_html_bottom',[ $one = 'A', $two = 'B']] /* this will display in the bottom element html */
]  
```
``` PHP
@since v1.4.0 OptimizedHtml
$this->wine::child => [
/*  ['div', $this->wine::value=>[ $this->wine->value((new Branding),'component_top_logo_header')]], this still works anyway */
    ['div', $this->wine::value=>[ $this->wine->value(MenuList::class,'component_top_right_menu', $this->links ) ]]
  ]
 ]);
```

Features :
<br /> ``` @since v1.3.9 later(); no object require, call back function hook ```
<br />
Logs :
<br /> ``` v2.2.2 [FIXED] : Doctrine namespace to Doctrine from doctrine | 09.12.2023 ```
<br /> ``` v2.2.1 [FIXED] : Dynamic prefix accordion | 08.12.2023 ```
<br /> ``` v1.3.8 [FIXED] : Class name attribute space child array | 08.11.2023 ```

<hr /> 

<h2>Thanks To:</h2>
<h5>
Github : To allow me to upload my PHP Library PHPWine Vanilla Flavour to repository<br /> 
php.net : The opportunity to develop web applications using corePHP - PHPFrameworks<br />
</h5>

__LICENSE BY MIT__

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
<br />

<hr />
Would you like me to treat a cake and coffee ? <br />
Become a donor, Because with you! We can build more... 

Donate: <br />
GCash : +639650332900 <br /> 
Paypal account: syncdevprojects@gmail.com
<hr />
<br />
Thanks and good luck! 
