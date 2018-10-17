<?php
   session_start();
   $aid = $_GET["aid"]; 
   $bid = $_GET["bid"]; 
   $cid = $_GET["cid"];
   
   require_once '../include.php';
   $link = connect();

   if(empty($_POST["lab_date"])|| empty($_POST["lab_class"]) || empty($_POST["lab_address"]) || empty($_POST["lab_manager"])) {  
      echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
   }
   else{
	  $sql = "select * from lab_info where lab_date = '$_POST[lab_date]' and lab_class = '$_POST[lab_class]' and lab_address = '$_POST[lab_address]'"; //SQL语句  
		 
      $result = mysqli_query($link,$sql);    //执行SQL语句 
      $num = mysqli_num_rows($result); //统计执行结果影响的行数  
      if($num){    //如果已经存在该实验信息              
         echo "<script>alert('冲突！该实验信息已存在！'); history.go(-1);</script>";  
      }  
      else{
         $sql_update = "update lab_info set lab_date='$_POST[lab_date]',lab_date='$_POST[lab_date]',lab_class='$_POST[lab_class]',lab_address='$_POST[lab_address]',lab_manager='$_POST[lab_manager]',ordered='否',ordered_userid='' where lab_date='$aid' and lab_class='$bid' and lab_address='$cid'";
	   
         $result = mysqli_query($link,$sql_update);

         if($result){  
             echo "<script>alert('修改成功！'); window.location.href='lab_info_Update.php';</script>";  
         }  
         else{  
             echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
         }
	  }
   }


   close($link);
?>