<?php
     require_once 'include.php';
     $link = connect();
     $userid = $_POST["userid"];
     $username  =  $_POST["username"];
     $psw = $_POST["password"]; 
     $psw_confirm = $_POST["confirm"];

     if($userid == "" || $username  =="" || $psw == "" || $psw_confirm == "") {  
         echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
	 }
     else{  
         if($psw == $psw_confirm){ 
             $sql = "select login_name from login_info where login_name = '$username' or login_id = '$userid'"; //SQL语句  
             $result = mysqli_query($link,$sql);    //执行SQL语句 
             $num = mysqli_num_rows($result); //统计执行结果影响的行数  
             if($num){    //如果已经存在该用户              
                 echo "<script>alert('用户已存在，请使用已有账号登录！'); history.go(-1);</script>";  
             }  
             else{    //不存在当前注册用户名称    
//                 $sql_insert = "insert into login_info (login_id,login_password,login_name,flag) values('$userid','$psw', '$_POST[username]','0')"; //普通用户注册，插入flag=0
//                 $res_insert = mysqli_query($link,$sql_insert);  
                 $res_insert = InsertUser($link,$userid,$psw,$username,'0');
                 if($res_insert){  
                     echo "<script>alert('注册成功！将返回登录！'); window.location.href='index.php';</script>";  
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
