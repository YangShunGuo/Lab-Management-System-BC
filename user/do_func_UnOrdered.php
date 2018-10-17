<?php
   session_start();
   $aid = $_GET["aid"]; 
   $bid = $_GET["bid"]; 
   $cid = $_GET["cid"]; 
   require_once '../include.php';
   $link = connect();

   $sql_update = "update lab_info set ordered='否',ordered_userid='' where lab_date='$aid' and lab_class='$bid' and lab_address='$cid'";
   $result = mysqli_query($link,$sql_update);

   if($result){  
       echo "<script>alert('退订成功！'); window.location.href='user_func_MyOrdered.php';</script>";  
   }  
   else{  
       echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
   } 

   close($link);
?>