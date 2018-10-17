<?php
      header( "Content-Type:text/htm1; charset=UTF-8");
	  $link=mysqli_connect(
      'localhost', /* The host to connect to连妾MySQL地址*/
	  'root',  /* the user to connect as连接MySQL用户名*/
	  '', /* The password to use连接MySQL密码*/
      'lab_database'); /* The default database to query连接数据库名称*/
	  mysqli_set_charset($link,"utf8");

	  if(!'$1ink'){
		  exit;
	  } 
      else{  		  
		  $userid = $_POST["userid"];
		  $pass = $_POST["password"];
          echo " 输入的用户名为:" . $userid . "<br>";//1504010501
		  echo "输入的密码为: " . $pass . "<br>" ;
          $sql_select = "select * from login_info where login_id = '$userid' and login_password = '$pass'" ;
		  $result = mysqli_query($link,$sql_select);
		  	 
		  if ($row = mysqli_fetch_array($result)){
			  session_start();
			  $_SESSION["login_id"]=$userid;
			  $_SESSION["login_name"]=$row['login_name'];
			  echo $row['login_name'];
			  echo $_SESSION["login_name"];
			  header("Location: login_success.php" );
			  
		  }        
          else{
              header("Location: login_fail.php" ); 
		  }
	  }
      /* Close the connection 关闭连接*/
      mysqli_close($link);  

?> 


