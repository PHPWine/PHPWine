<img src="https://img.shields.io/badge/license-MIT-blue"> <img src="https://www.code-inspector.com/project/29588/score/svg"> <img src="https://www.code-inspector.com/project/29588/status/svg"> 
![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/nielsofficeofficial/PHPWine) 
![GitHub repo size](https://img.shields.io/github/repo-size/nielsofficeofficial/PHPWine) 
![Lines of code](https://img.shields.io/tokei/lines/github/nielsofficeofficial/PHPWine) 
![GitHub Release Date](https://img.shields.io/github/release-date/nielsofficeofficial/PHPWine)
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://github.com/nielsofficeofficial/PHPWine/graphs/commit-activity) 
![Maintainer](https://img.shields.io/badge/maintainer-NielsOffice-green) 
![GitHub contributors](https://img.shields.io/github/contributors/nielsofficeofficial/PHPWine?color=blue)
[![GitHub Release](https://img.shields.io/github/release/nielsofficeofficial/PHPWine.svg?style=flat)](https://github.com/nielsofficeofficial/PHPWine/releases) 
![Packagist Version (custom server)](https://img.shields.io/packagist/v/phpwinevanillaflavour/phpwine?color=orange)
![GitHub last commit](https://img.shields.io/github/last-commit/nielsofficeofficial/PHPWine)
[![Issues](https://img.shields.io/github/issues-raw/nielsofficeofficial/PHPWine.svg?maxAge=25000)](https://github.com/nielsofficeofficial/PHPWine/issues) 
[![Active](http://img.shields.io/badge/Status-Active-green.svg)](https://nielsofficeofficial.github.io/PHPWine/) 
[![Ask Me Anything !](https://img.shields.io/badge/Ask%20me-anything-1abc9c.svg)](https://github.com/nielsofficeofficial/PHPWine/issues/new) 
# PHPWine - (Vanilla Flavour) 
Support PHP v8 and future++ 

PHPWine (Vanilla Flavour) is a PHP Library design cross PHP Platform and frameworks Cloud system application development.  <br />
<br />
<i>Vanilla Flavour: Vanilla flavour means you can use methods outside the class precisely as native PHP functions.</i>

- PHPHtml-Optimizer / Code Designer
- Advance Form Builder 
- Handling Form Validation
- Form Validation_V2 ```@since v1.2```
- BASIC Authentication
- HTMLMinifier ```@since v1.2```

<h3>Downloading Library/Dependencies:</h3>
 
```PHP
// Download Repository via Composer | Packagist
 composer require phpwinevanillaflavour/phpwine 
```
<h3>Library Installation:</h3>

```PHP
  # Install on header.php
  // WordPress Theme/Plugins Installation 
  # On the very top of functions.php or plugin-index.
  
  $PHPWine = new class {
        
    public function __construct() {
      
      $this->php_wine('autoload');

      new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerElem; // this is mandatory when dev use merge !
      new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlH1;  // follow by merge version HTML_H1 and so on!...
      new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlDiv;
      
    }

    private function php_wine(string $autoload) : void {

      require dirname(__FILE__) . DIRECTORY_SEPARATOR .'vendor/' . $autoload.'.'.'php';

    }

 }; 
```

<h3>Dependencies Installation:</h3>

```PHP
# Namespace / Dependencies
use \PHPWineVanillaFlavour\Wine\Optimizer\Html;
use \PHPWineVanillaFlavour\Wine\Optimizer\Enhancers;
use \PHPWineVanillaFlavour\Wine\Optimizer\Form;
use \PHPWineVanillaFlavour\Wine\Merge\Html;
use \PHPWineVanillaFlavour\Wine\System\Auth;
use \PHPWineVanillaFlavour\Wine\System\Request;
use \PHPWineVanillaFlavour\Wine\System\Validate;
use \PHPWineVanillaFlavour\Wine\System\Validate_v2;
```
```PHP
// Installing Enhancer PHPWine Functions
new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerElem;
new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerAttr;
new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerBreak;
new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerDoElse;
new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerDoIf;
new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerGetKeyPath;
new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerHLine;
new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerIsBelongs;
new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerPerform;
new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerSetElemAttr;
new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerSpace;
new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerString;
```
```PHP
# Using Enhancer Installation 
new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerElem; // then follow by other dependencies

# HTML Tags using ( Merge Version PHPWine v1.3.0.0 )
new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlH1;
new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlH2;
new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlH3;
new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlH4;
new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlH5;
new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlH6;

// Merge HTML Definition 
H1( array|string [ $value ] , array|string [ $attr ] , string $id , string $class );
// execution 
echo H1('Hello World!', [['style'],['color: blue;']], 'id', 'class' );
```
```HTML
<!-- End result -->
<h1 style='color: blue;' id='id' class='class'> Hello World </h1> 

<!-- Browser result -->
Hello World
```
```PHP
// Callable value data type @since v1.3.0.3
function Div( 

    array|string|callable  $value  =  null
   ,array|string  $attr   =  null
   ,string        $id     =  null
   ,string        $class  =  null
  
) : string 
{}
           
 echo div( function() {

   return H1('Hi Call back', [['attr'],['value']] , 'id' , 'class');

 }, [['attr_div'],['val_div']] );
 
 // variable loop arrays of data inside of div element
 $data  = array('Hello','World','From','PHP');

 echo div( function() use ( $data ) { 
 
  return UL((new Class {

   private array $container = [];
   private array $holder = [];

   public function menu_items( array $data) : string  { $this->container = $data;

     if( is_array($this->container) ) { 
       
       foreach ($this->container  as $value) { 
           
        $this->holder[] = li( alink($value, [['href'],['#']]) );  
       
       } 
    
     }

       return implode(" ", $this->holder);
   }

  })->menu_items($data));

 }, [['attr_div'],['val_div']] );
```
```HTML
<!-- End result | Loop array menu_items Callable @since v1.3.0.3 -->
<div attr_div="val_div">
  <ul>
    <li> <a href="#"> Hello  </a> </li>
    <li> <a href="#"> World </a> </li>
    <li> <a href="#"> From </a> </li>
    <li> <a href="#"> PHP </a> </li>
  </ul>
</div>

```
```PHP
// Installing dependecies HTML Elements 
new \HtmlSelect; [ select(); ]  |  new \HtmlAbbr; [ abbr(); ]     |  new \HtmlAddress; [ address(); ]
new \HtmlAudio;  [ audio(); ]   |  new \HtmlDbi;  [ bdi(); ]      |  new \HtmlDbo; [ bdo(); ]
new \HtmlBody;   [ body(); ]    |  new \HtmlBold; [ bold(); ]     |  new \HtmlBlockQuote; [ blockquote(); ]
new \HtmlButton; [ button(); ]  |  new \HtmlCode; [ code(); ]     |  new \HtmlCanvas; [ canvas(); ]
new \HtmlData;   [ data(); ]    |  new \HtmlDd;   [ dd();  ]      |  new \HtmlCaption; [ caption(); ]
new \HtmlCenter; [ center(); ]  |  new \HtmlDel;  [ del(); ]      |  new \HtmlColGroup; [ colgroup(); ]
new \HtmlDfn;    [ dfn(); ]     |  new \HtmlDiv;  [ div(); ]      |  new \HtmlDatalist; [ datalist(); ]
new \HtmlDl;     [ dl(); ]      |  new \HtmlDt;   [ dt(); ]       |  new \HtmlEm; [ em(); ]
new \HtmlForm;   [ form(); ]    |  new \HtmlImg;  [ img(); ]      |  new \HtmlFooter;  [ footer(); ]
new \HtmlIns;    [ ins(); ]     |  new \HtmlHead; [ head(); ]     |  new \HtmlKbd; [ kbd(); ]
new \HtmlLi;     [ li(); ]      |  new \HtmlLink; [ alink(); ]   |  new \HtmlFigCaption; [ figcaption(); ] 
new \HtmlMain;   [ main(); ]    |  new \HtmlLabel;[ label(); ]    |  new \HtmlDialog; [ dialog(); ] 
new \HtmlMark;   [ mark(); ]    |  new \HtmlOl;   [ ol(); ]       |  new \HtmlLegend; [ legend(); ]
new \HtmlQ;      [ q(); ]       |  new \HtmlPre;  [ pre(); ]      |  new \HtmlOptGroup; [ optgroup(); ]
new \HtmlNav;    [ nav(); ]     |  new \HtmlPara; [ para(); ]     |  new \HtmlFieldset; [ fieldset(); ]
new \HtmlRt;     [ rt(); ]      |  new \HtmlSamp; [ samp(); ]     |  new \HtmlProgress; [ progress(); ]
new \HtmlS;      [ s(); ]       |  new \HtmlSpan; [ span(); ]     |  new \HtmlPicture; [ picture(); ]
new \HtmlSmall;  [ small(); ]   |  new \HtmlTh;   [ th();  ]      |  new \HtmlMeter; [ meter(); ]
new \HtmlTd;     [ td(); ]      |  new \HtmlSub;  [ sub(); ]      |  new \HtmlDetails; [ details(); ]
new \HtmlSup;    [ sup(); ]     |  new \HtmlStyle;[ style(); ]    |  new \HtmlMarquee; [ marquee(); ]
new \HtmlTr;     [ tr(); ]      |  new \HtmlUl;   [ ul(); ]         | new \HtmlWbr; [ wbr(); ]
new \HtmlTable;  [ table(); ]   |  new \HtmlFigure;  [ figure(); ]  | new \HtmlIframe; [ iframe(); ] 
new \HtmlItalic; [ italic(); ]  |  new \HtmlObject;  [ object(); ]  | new \HtmlTextarea; [ textarea(); ]
new \HtmlScript; [ script(); ]  |  new \HtmlSection; [ section(); ] | new \HtmlTitle; [ title(); ]
new \HtmlTbody;  [ tbody(); ]   |  new \HtmlThead;   [ thead(); ]   | new \HtmlVideo; [ video(); ]
new \HtmlTemplate; [ template(); ]  |  new \HtmlStrong;  [ strong(); ] 
new \HtmlSummary;[ summary(); ] |  new \HtmlTfooter  [ tfooter(); ];
```

<h3> Child Element Array keys: CHILD | ATTR | VALUE | INNER :</h3>

```PHP

  $childElement = [ CHILD => [
  
    ['div', ATTR  => ['class' =>'demo'] , VALUE => [ H1('Hello!') ]],  
    ['div', VALUE => ["This is the array values!"] 
          , INNER => [

        ['p'   , VALUE => ["Hello"] , ATTR => ['class' =>'demo'] ],
        ['SPAN', VALUE => ["World"] , ATTR => ['class' =>'demo'] ]

    ]],

    ['div', VALUE => ["Say hi! "]    , ATTR => [ 'class' =>'demo'] ],
    ['div', VALUE => ["Say hello! "] , ATTR => [ 'class' =>'demo'] ]

  ]]
  
  echo div($childElement , [['attr'],['value']], 'id' , 'class');
```

<h3>Helper: [ 'elem_sort' ] Child Element Array keys: CHILD and INNER Layer :</h3>


```PHP
 // @since wine v 1.4 
 ['elem_sort' => function() { 

   return [
      
      ['element']

   ];

 }]
```

```PHP
    // @since wine v 1.4 
    echo div([ CHILD => [

        ['elem_sort' => function() { 

            $one = ['div', ATTR => ['class'=>'demo', 'id'=>'my_id'], VALUE => [ div(function() {

                // condition
                return 'Helo';
        
            })]];

            $two = ['div', INNER => [

                ['elem_sort' => function() {

                $inner_one = ['p'   , VALUE => ["Hello"], ATTR => ['class' =>'demo_inner_a'] ];
                $inner_two = ['SPAN', VALUE => ["World"], ATTR => ['class' =>'demo_inner_b'] ];

                return  [ ( false ) ?  $inner_one : $inner_two ]; 

                }]

            ]];

            return [

            ( false ) ? $one : $two

            ];
        
        }],

    ]]);
```

<h3>Functions and Constant:</h3>
<p>Support only plain PHPWine ``` @since v1.2.1.0 ```. </p>

```PHP
 // Functions
 isbelongs( array|string $page_name ); 
  
 // Constant
 define('PHPWINE_MINIFIED', true );
 define('PHPWINE_DEBUG_ERRORS', true );  // @since v1.4
 define('PHPCRUD_DEBUG_ERRORS', true ); 
```

<h3>PHPWine Plugins + (FrontEnd Frameworks) :</h3>
<h5>Wants to become a contributor in PHPWine Plugins?, Let's talk email me at: syncdevprojects@gmail.com</h5>
 <ul>
  <li><a href="https://github.com/nielsofficeofficial/PHPCrud">PHPCRUD: </a><span> Extend PHPWine Features crud </span>
      <sup style="font-size: 10px;"><i>Contributed by: <a href="https://nielsoffice197227997.wordpress.com/">Leinner</a></i></sup>
  </li>
    <li><a href="https://github.com/nielsofficeofficial/PHPCrud-sample-data">PHPCrud-sample-data >=+ v1.3.1  </a><span> Sample data PHPCrud snippet </span>
      <sup style="font-size: 10px;"><i>Contributed by: <a href="https://nielsoffice197227997.wordpress.com/">Leinner</a></i></sup>
  </li>
   <li><a href="https://github.com/nielsofficeofficial/PHPCrud_RESTAPI-Template">PHPCRUD_RESTAPI-Template: >=+ v1.3.1 </a><span> Rest-api using PHPCrud snippet </span>
      <sup style="font-size: 10px;"><i>Contributed by: <a href="https://nielsoffice197227997.wordpress.com/">Leinner</a></i></sup>
  </li>
 
   <li><a href="https://github.com/nielsofficeofficial/PHPPortal">PHPPortal : </a><span> Wine Portal/Login System snippet. </span>
    <sup style="font-size: 10px;"><i>Contributed by: <a href="https://nielsoffice197227997.wordpress.com/">Leinner</a></i></sup>
   </li>

</ul>

<hr /> 

<h2>Installing PHPWine v1.4 : | <a href="https://www.youtube.com/watch?v=QcwzWYupqd0&list=PLz1uhXS-qzpR3zRoq0IXvBmPofuTyR87J&index=1"> Watch PHPWine Playlist Click here > </a>
</h2>
<center>

[![IMAGE ALT TEXT HERE](https://img.youtube.com/vi/svSWQ3ESKPg/0.jpg)](https://www.youtube.com/watch?v=svSWQ3ESKPg&list=PLz1uhXS-qzpR3zRoq0IXvBmPofuTyR87J&index=3)

</center>
<hr /> 

<h2>Thanks To:</h2>
<h5>
Github : To allow me to upload my PHP Library PHPWine Vanilla Flavour to repository<br /> 
php.net : To oppurtunity Develop web application using corePHP - PHPFrameworks<br />
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


[![GitHub stars](https://img.shields.io/github/stars/nielsofficeofficial/PHPWine.svg?style=social&label=Star)](https://github.com/nielsofficeofficial/PHPWine/)
[![GitHub watchers](https://img.shields.io/github/watchers/nielsofficeofficial/PHPWine.svg?style=social&label=Watch)](https://github.com/nielsofficeofficial/PHPWine/)
[![GitHub forks](https://img.shields.io/github/forks/nielsofficeofficial/PHPWine.svg?style=social&label=Fork)](https://github.com/nielsofficeofficial/PHPWine/)
[![GitHub followers](https://img.shields.io/github/followers/nielsofficeofficial.svg?style=social&label=Follow)](https://github.com/nielsofficeofficial)
