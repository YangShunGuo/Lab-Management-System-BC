<?php  
   require_once '../include.php';
   $link = connect();

   session_start();

   if(empty($_POST["new_password"]) || empty($_POST["confirm"])){
	   echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
	   exit();
   }
   else if($_POST["new_password"] == $_POST["confirm"]){
	   
	  $sql_select = "update login_info set login_password='$_POST[new_password]' where login_id='$_SESSION[login_id]'";
      $result = mysqli_query($link,$sql_select); 
	  if($result){  
         echo "<script>alert('密码修改成功！下次登录将使用新密码！'); history.go(-1);</script>";  
      }  
      else{  
         echo "<script>alert('修改失败，请重试！'); history.go(-1);</script>";  
      } 
   }
   else{
	  echo "<script>alert('密码不一致！'); history.go(-1);</script>";  
   }

   close($link);
?>