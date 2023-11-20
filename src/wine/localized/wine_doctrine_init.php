<?php 

 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);

/**
  * --------------------------------------------------------------------------------------------
  * Defined: Script init screen and visibility
  * @property
  * -------------------------------------------------------------------------------------------- 
  * display all query next before end body html
  * 
  * @since: v1.0 doctrine
  * @since: v2.0 wine
  * DT: 11.18.2023 
  */
 function wine_doctrine_init() : void {

  print wine(script,
  " var docID=document.body.id='app_id',childElem=document.getElementById('app_id'),appData=document.querySelectorAll('.app-response');appData.forEach((e,d)=>{childElem.insertAdjacentElement('beforeend',e)}); "
  ,[ classes =>'app-response']);

 }

 



