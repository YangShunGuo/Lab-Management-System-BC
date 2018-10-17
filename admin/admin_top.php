<!doctype html>
<html>
<head>
<meta  charset="UTF-8">
<title>系统管理-顶部</title>
<style>
	a:hover{
		color: blue;
		border-bottom: blue solid 1px;
	}
</style>
</head>
<body style = "background:url(../images/GDUT_logo_school1.png) no-repeat; background-color:#78a5f1;">
	<p align="center" style="margin-bottom: 0; color:#FFFFFF; font-size: 30px;">实验室管理系统-后台管理</p>
<!--	<br/><br/>-->
    <p style="position:absolute; top: 65%; color:white;font-size:14px;letter-spacing:1px;">您好！ 
       <?php
           session_start();
           echo $_SESSION["login_name"]."(". $_SESSION["login_id"].")";
       ?> 
	   ，欢迎登录！
	   <a href="../index.php" target="_top" style="color:blue;text-decoration: none;" >[重新登录]</a>
	</p>
    <p style = "position:absolute; top: 65%; right:10px; color:white;font-size:14px;letter-spacing:1px;">登录时间: 
		<?php date_default_timezone_set('PRC'); echo date('Y-m-d H:i:s',time())?> 
	</p>
</body>
</html>
