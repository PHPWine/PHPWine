<img src="https://img.shields.io/badge/license-MIT-blue">  [![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://github.com/PHPWine/PHPWine/graphs/commit-activity) [![GitHub Release](https://img.shields.io/github/release/PHPWine/PHPWine.svg?style=flat)](https://github.com/PHPWine/PHPWine/releases) ![Packagist Version (custom server)](https://img.shields.io/packagist/v/phpwine/optimizedhtml?color=orange) ![GitHub Release Date](https://img.shields.io/github/release-date/PHPWine/PHPWine) ![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/PHPWine/PHPWine) ![GitHub repo size](https://img.shields.io/github/repo-size/PHPWine/PHPWine) [![Issues](https://img.shields.io/github/issues-raw/PHPWine/PHPWine.svg?maxAge=25000)](https://github.com/PHPWine/PHPWine/issues) ![Maintainer](https://img.shields.io/badge/maintainer-LeinnerZednanref-green) ![GitHub last commit](https://img.shields.io/github/last-commit/PHPWine/PHPWine) [![Ask Me Anything !](https://img.shields.io/badge/Ask%20me-anything-1abc9c.svg)](https://github.com/PHPWine/PHPWine/issues/new) 


# Optimized PHPHtml
Optimized HTML this will use for view section can also be used within your business logic. 

NOTE: Class cannot be extended for security reasons. All properties and methods are private.

```PHP
/* Installation via composer */ 
/* required version *v2.0 */
composer require phpwine/optimizedhtml v2.0
```

<br /> New :
<br /> 
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
``` @since v1.3.9 later(); no object require, call back function hook ```
<br />
<hr />

Logs :
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
