<?php 

  require dirname(__FILE__) . DIRECTORY_SEPARATOR .'./PHPAutoloader.php';
  require dirname(__FILE__) . DIRECTORY_SEPARATOR .'./vendor/autoload.php';
  
  $method = $_SESSION['ACTIVE'] = false;

  $wine = new \PHPWineOptimizedHtml\OptimizedHtml;
  $new  = new \PHPAutoloader\Classes\Apps\HeaderApp;

 print $new->MainHeader($method);
 
  print wine(h1,'TRELL',[],[
    ['top_testing_hook'], 
    ['bottom_testing_hook']  
 ]);
   

 function top_testing_hook() {
  return [
    child => [
      ['div', value => ["This is hook goes to top TRELL"] ]
    ]
    ];
 }

 function bottom_testing_hook() {
  return [
    child => [
      ['div', value => ["This is hook goes to bottom TRELL"] ]
    ]
    ];
 }
 
   print wine(__, [
    child => [
      [h1, value=>["ELO"]]
    ]
   ]);

 print $wine->wine(h1,'Hello');

  echo $wine->wine(h1,'Testing', [],[
   ['top_func',[$one = 2, $two = 4]],
   ['bot_func',[$one = 'A', $two = 'B']]
  ]
  
 );

 function top_func( $one, $teo ) {
      return [
        child => [
          ['div', value => [  "FUNC_CONTENT : ". $one + $teo ]]
        ]
      ];
    }


    function bot_func( $one, $teo ) {
      return [
        child => [
          ['div', value => [  "FUNC_CONTENT : ". $one .' : '. $teo ]]
        ]
      ];
    }


  print wine(h1,'HELOCAL');
  
  print $wine->wine(h1,'Hello');
  print $wine->wine(div,[
    child => [
     [div, value=>["ASD"], attr=>[id=>'myID']]
    ]
  ]);

