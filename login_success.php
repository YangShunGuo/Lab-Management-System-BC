<?php
  require_once 'include.php';
  $link = connect();

  session_start();
  $userid = $_SESSION["login_id"];
  $username = $_SESSION["login_name"];
//  setcookie('login_id',$userid);
//  setcookie('login_name',$username);
  
  $sql = "select flag from login_info where login_id = '$userid'"; //SQL语句
  $result = mysqli_query($link,$sql);    //执行SQL语句
  $array = mysqli_fetch_array($result);

  echo $array['flag'];
  if($array['flag'] == 0){
	  header("Location: user/user_control.php");
  }
  else if($array['flag'] == 1){
	  header("Location: admin/admin_control.php");
  }

  close($link);
?>
