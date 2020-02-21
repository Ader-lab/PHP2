<?php
  //include("textDefine.php"); //沒有once的話還是可以引用
  //include_once("testDefine.php"); //有once引用過就不會再引用一次了

  //require的請求較強 include是沒有的話就不理他 繼續往下跑 require也有once
  require("testDefine.php");
  
  echo test;
?>