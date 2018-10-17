<?php
   session_start();
   $a = $_GET["aa"];  
   require_once '../include.php';
   $link = connect();

   $sql_select = "delete from login_info where login_id='$a'";
   $result = mysqli_query($link,$sql_select);

   if($result){  
       echo "<script>alert('销户成功！'); window.location.href='admin_func_SelectUser.php';</script>";  
   }  
   else{  
       echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
   } 

   close($link);
?>