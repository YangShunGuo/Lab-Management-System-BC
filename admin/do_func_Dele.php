<?php  
   require_once '../include.php';
   $link = connect();

   if(empty($_POST["login_id"])){
	   echo "<script>alert('输入为空！'); history.go(-1);</script>";
	   exit();
   }
   session_start();
   if($_SESSION["login_id"] == $_POST["login_id"]){
	   echo "<script>alert('你不能删除当前登录用户！'); history.go(-1);</script>"; 
   }
   else{
	  $sql = "select login_id from login_info where login_id = '$_POST[login_id]'"; //SQL语句  
      $result = mysqli_query($link,$sql);    //执行SQL语句 
      $num = mysqli_num_rows($result); //统计执行结果影响的行数  
      if($num){    //如果已经存在该用户 
		  $sql_select = "delete from login_info where login_id='$_POST[login_id]'";
	      $result = mysqli_query($link,$sql_select); 
          if($result){  
              echo "<script>alert('销户成功！'); history.go(-1);</script>";  
          }  
          else{  
              echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
          }  
      }
	   else{
		   echo "<script>alert('该用户不存在！'); history.go(-1);</script>";
	   }
      
   }

   close($link);
?>