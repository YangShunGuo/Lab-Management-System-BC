<?php
   session_start();
   $aid = $_GET["aid"]; 
   $bid = $_GET["bid"]; 
   $cid = $_GET["cid"]; 
   require_once '../include.php';
   $link = connect();

   $sql_update = "update lab_info set ordered='是',ordered_userid='$_SESSION[login_id]' where lab_date='$aid' and lab_class='$bid' and lab_address='$cid'";
   $result = mysqli_query($link,$sql_update);

   if($result){  
       echo "<script>alert('预定成功！'); window.location.href='user_func_SelectAll.php';</script>";  
   }  
   else{  
       echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
   } 

   close($link);
?>