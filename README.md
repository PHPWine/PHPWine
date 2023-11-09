# Optimized PHPHtml
Optimized HTML this will use for view section can also be used within your business logic. 

NOTE: Class cannot be extended for security reasons. All properties and methods are private.

```PHP
 /* Installation via composer */ 
 /* required version *v1.4.0 */
 composer require phpwine/optimizedhtml v1.4.0
```
```PHP
 # Installation 
  add_action('init', function() {
     __initActions(' classes ', true ); /* set true second argument if the file is class */
 });

# Structure
 |- init
     |- classes
         |- OptimizedHtml.php  /* If class not found rename to: AOptimizedHtml.php | alphabetical higher is "A" */ 
         |- init-custom-action.php /* Here put all HTML */
            ...

```
 <br /> For more information installation link here : https://github.com/WPExtension/WPSPATheme
 <br /> <a href="https://github.com/WPExtension/WPSPATheme"> Installation guide > </a>


```PHP
 // Procedures:
 // 1) Build your doctrine.
    /* Here you will create a reusable element such as a parent, a parent with a child, it base on layout structure etc...  */
    /* Might be each project or page have own doctrine it depends on consistency of the layout structure  */
    Class YourDoctrineName { ... } 
 
 // 2) Build your main App class 
   /* This is the complete structure of the main component like header, hero section etc... Extend your doctrine so you can supply to your component  */
   Class YourMainApp extends YourDoctrineName { ... }  
   // Class Header extends YourDoctrineName { ... } 
   // Class Hero extends YourDoctrineName { ... }
   ...
 // 3) Build your component      
   /* Here is your component to complete your HTML sections */
   YourComponents Extends YourMainApp { ... } 
   // Branding Extend Header { ... }
   // Menu Extend Header { ... }
   ...

```

```PHP
 // What's New in v1.2.2
 // * Disable HTML into string 
 $wine = OptimizedHtml(true);
 ... 
```
```HTML
 !-- Result @since v1.2.2 --> 
 <div> Hello World </div>
```

```PHP
// Procedural extends app or component | coffee no sugar
print wine(__, [ 
        
  child => [ 
  
  ['div', value => [ please => function() {

    $new = new class () extends \Namespace\Classname {

      public function my_value_in_array() {
        return "Coffee";
      }

      public function my_filter() {
        return "No sugar!";
      }

    };

    return [
      
      ['div', value => [value($new,'my_value_in_array')]],
      ['div', value => [magic($new,'my_filter',value($new,'my_value_in_array'))]]
  
    ];

  }]]
 
]]);
```
<br /> New :
<br /> 
``` PHP
@since v1.4.0OptimizedHtml
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
