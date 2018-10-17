<?php
     require_once '../include.php';
     $link = connect();

     if(empty($_POST["login_id"])|| empty($_POST["login_name"]) || empty($_POST["login_password"]) || empty($_POST["confirm"])) {  
         echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
	 }
     else{  
         if($_POST["login_password"] == $_POST["confirm"]){ 
             $sql = "select login_name from login_info where login_name = '$_POST[login_name]' or login_id = '$_POST[login_id]'"; //SQL语句  
             $result = mysqli_query($link,$sql);    //执行SQL语句 
             $num = mysqli_num_rows($result); //统计执行结果影响的行数  
             if($num){    //如果已经存在该用户              
                 echo "<script>alert('该用户已存在！'); history.go(-1);</script>";  
             }  
             else{    //不存在当前注册用户名称    
                 $res_insert = InsertUser($link,$_POST["login_id"],$_POST["login_password"],$_POST["login_name"],'1');
                 if($res_insert){  
                     echo "<script>alert('开户成功！'); history.go(-1);</script>";  
                 }  
                 else{  
                     echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
                 }  
             }  
        }  
        else{  
             echo "<script>alert('密码不一致！'); history.go(-1);</script>";  
        }  

    }
    close($link);
?>
