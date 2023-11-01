# Optimized PHPHtml
Optimized HTML this will use for view section can also be used within your business logic. 

NOTE: Class cannot be extended for security reasons. All properties and methods are private.

```PHP
 // @stable v1.2.8
 // Reserve keyword constant 
 child | value | attr | __ | please | "try" | < all valid HTML 5 element & HTML attribute like ex. < class > and < id > >

 // Methods 
 // This method generates HTML ( string|callable|array )
 wine( string $tag, string|callable|array $content = [], string|array $attr = [], $enable_html = false );

 // This method accept call-back function and arguments 
 // Demo Callback method : https://github.com/WPExtension/OptimizedHtml/blob/main/Demo/componentLogo.php
 value( object $class, string|callable $call_back, mixed ...$args );

 // This method filter current assigned value and replace
 magic( object $class, string|callable $call_back, mixed ...$current_value );

```

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
// What's New in v1.2.6 & v1.2.7 & v1.2.8

...{
 [div, value => [$this->elem->magic($this, 'replace_value_fromt_method', 'current_value_assigned_or_argument_from_filter' )]]  
}
... 
// If replace_value_fromt_method exists then remove the current value and replace
public function replace_value_fromt_method( $amount ) {  //  $amount > (  current_value_assigned_or_argument_from_filter )
 
return $this->elem->wine(__, [ 
 $this->elem::child => [
   [div, value => ['Yes Hello There! : ' . $amount], attr =>[ 'class' => 'f1'] ]  
 ]]);
    
}
```

```PHP
 # USAGE samples: 

 $elem = new OptimizedHtml();

 // Current approach 
 print $elem->wine('div','This is content',['class' => 'p-12']);

 # OR
 print $elem->wine('div',function() {
 
   return 'This is content';

 }," class='p-12' id='elem_id' ");

 #Like 
 $wine = $this->elem; /* insde the class */
 print $elem->wine('div',function() use ($wine) {
 
   return $wine->wine('h1', 'Can also like this');

 }," class='p-12' id='elem_id' ");

 # OR 
 print $elem->wine('div','my_call_back',['class' => 'p-12']);
 function my_call_back() {
   // $hope = new Something;
   // return $hope->property;
   return 'This is content';
 }

 # OR 
 print $elem->wine('div',function() use ($elem) {
 
   return $elem->wine('h2','Hello World');

 },['class' => 'p-12']);

 # OR Nested  /* If you have condition or statement inside your HTML use "try" have sample below */
...{ /* @since v1.2.7 */
 return $this->elem->wine(div,[
   child => [
    [div, attr => [class =>'m-faq-left'], 
         value => [
          $this->elem->wine(h1,'The title')
         .$this->elem->wine(div,'The long description')
    ]],
    [div, attr  => [class =>'m-faq-left'], 
          value => [$this->elem->wine(div,[
          child => [
            [h1,  value=> ['Hey']],
            [div, value=> ['Description hey']],
            [div, value=> [
              $this->elem->wine(h1,'The Hey third title')
             .$this->elem->wine(div,'The long description from third')
           ]]
         ]
       ])
     ]]   
   ]
 ],[class =>'y-grid']);

}
```

```PHP

 // Array Child [ VALUE | ATTR ]
 $elem = new OptimizedHtml();

 print $elem->wine('div', [ $elem::child => [  

   ['h1', 
      $elem::value => ["Hello Heading"], 
      $elem::attr  => ["class"=>"w-full"]
   ],
   ['h2', 
     $elem::value => ["Sub Hello Heading"], 
     $elem::attr  => ["class"=>"w-full"]
   ],
   ['div', 
     $elem::value => $elem->wine('span','Testing'), 
     $elem::attr  => ["class"=>"p-3", "id" =>"parent" ]
   ]

 ]]);

```

```PHP
 // Array USING "try" or $this->elem::please callable function

 # Inside child array value 
...{
   return $this->elem->wine('div', [ 
        
        $this->elem::child => [ 
          
          ['div', $this->elem::value => [ 'try' => function() {
  
            $dd   = [];
            $dd[] = $this->elem->wine('h1', 'Hello!' );
            //$dd[] = ['h1',  value => ['Hello World'] ];
            foreach([1,2,3] as $data ) {
    
             $dd[] =  $this->elem->wine('div', $data);
             // $dd[] =  ['div', $this->elem::value => [$data] , $this->elem::attr => ['class' => 'w-full'] ];
              
            }
          return $dd;
        }
     ]]
  }     
  ]]); 

}

# KEEP "try" inside of your method wine! 
# version 2 
...{
 return $this->elem->wine('div', [ 
        
   $this->elem::child => [ 
            
    ['div', $this->elem::value => [ $this->elem->wine('span', [
      $this->elem::child => [
       'try' => function() { $dd   = [];

         $dd[] = $this->elem->wine('h1', 'Hello!' );
         //$dd[] = ['h1',  $this->elem::value => ['Hello World'] ];
         foreach([1,2,3] as $data ) {
        
         $dd[] =  $this->elem->wine('div', $data);
         // $dd[] =  ['div', $this->elem::value => [$data] , $this->elem::attr => ['class' => 'w-full'] ];
                  
         }
        $dd[] = $this->elem->wine('h1',[ $this->elem::child => [
          ['div', $this->elem::value => ['asdfasd']]
       ]
       ]);
      return $dd;
     }
    ]
    ])
  ]],
  ['div', $this->elem::value => ['DFGHJK<L></L>:'] ]
         
]]);
 
}
```

```PHP
   
 # Second Layer with CHILD key 
...{
  return $this->elem->wine('div', [ 
    $this->elem::child => [ 
      ['try' => function() { ... } ],
     ]
 ]);

}
```

```PHP
 # First Layer with CHILD key 
...{ 
 return $this->elem->wine('div', [ 
   child => [        
    $this->elem::please => function() { ... },
   ]
]);

}
```

```PHP
 // Nested try keep wrap inside of wine method
...{ 
  return $this->elem->wine('div', [ 
     $this->elem::child => [
      ['div', value => ['try' => function() { $dd =[];

        $dd[]= ['p', $this->elem::value => ["Today is Saturday!"]];
        $dd[]= ['p', $this->elem::value => [ $this->elem->wine('span',[
          $this->elem::child => [
          'try' => function() { $kk =[];

             $kk[]= ['span', $this->elem::value => ["The para1"] ];
    
             return $kk;
            }
          ]
       ])]];

     return $dd;
    }
   ]]  
 ]]);

}
```

```PHP
 // Magic entity  double underscore ( __ ) remove parent element wine method
...{ 
 return $this->elem->wine($this->elem::__,[
   $this->elem::child => [
    ['div', $this->elem::attr =>['class'=>'m-faq-left'], $this->elem::value => [
       $this->elem->wine('h1','The title')
      .$this->elem->wine('div','The long description')
    ]]   
   ]
 ],['class'=>'y-grid']);

}
```

```HTML
<!-- Result -->
<div class="m-faq-left"> 
  <h1>The title</h1>
  <div>The long description</div>
</div>
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
 // What's New in v1.2.5
 * Optimized Core file
 * Redefined constant availability outside of class
 // ex. 
 child | attr | value | please | string with "try" 
...{

 return $this->elem->wine( __, [ 
   child => [[
    'div', 
    attr  => ['class'=>'m-faq-left'], 
    value => [
      $this->elem->wine('h1','The title')
     .$this->elem->wine('div','The long description')
   ]]   
  ]
]);

}

```
```PHP
// What's New in v1.2.6 & v1.2.7

...{
 [div, value => [$this->elem->value($this, 'MyCallbackMethod', 50 )]]  
}
... 
public function MyCallbackMethod( $amount ) {
 
return $this->elem->wine(__, [ 
 $this->elem::child => [
   [div, value => ['Yes Hello There! : ' . $amount], attr =>[ 'class' => 'f1'] ]  
 ]]);
    
}
```

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
