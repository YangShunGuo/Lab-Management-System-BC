<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>广东工业大学-欢迎注册</title>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<!--<link href="images/Logo.ico" type="img/x-ico" rel="icon"/>-->
<style>
	.container-fluid .logo{
		text-align: center;
		line-height: 100px;
		background-color: #f9f9f9;
	}
	.container-fluid .content{		
		height: 445px;
        font-size: 16px;
        line-height: 22px;
		margin: 100px 0;
		background-color: #89cadd;
		opacity: 0.8;
    }
	.container-fluid .content .title{
		color: #FFFFFF;
		font-size: 23px;
		margin: 20px 45px 0;
	}
	.container-fluid .user, .container-fluid .powss{
        margin-top: 5px;
    }
	.container-fluid .user span, .container-fluid .powss span{
		font-size: 16px;
        display: block;
        margin-bottom: 5px;
    }
	.container-fluid input{
        height: 45px;
        line-height: 50px;
        border: 1px solid #d4d4d4;
        display: block;
        width: 100%;
        border-radius: 4px;
        padding-left: 10px;
    }
	.link-submit{
        text-align: center;
        font-size: 18px;
    }
	.link-submit:hover{
        background: #6abeed;
    }

</style>	
</head>

<body>
<div class="container-fluid">
	<div class="logo"><img src="images/GDUT_logo_school1.png"/></div>
	<div style="background: url(images/GDUT_library.png) no-repeat; background-size: 100% 100%;">
		<div class="row">
		<div class="col-md-8 a"></div> 
        <div class="col-md-3 a content">
			<form action="doregister.php" method="post"> 
				<div style="text-align: center;"><p class="title">欢迎注册</p></div>
				<div class="user">
					<span>用户名<em style="color:red;">*</em></span>
					<input type="text" name="username" autocomplete="off" placeholder="请输入名字" />
				</div>  
				<div class="user">
					<span>用户ID<em style="color:red;">*</em></span>
					<input type="text" name="userid" autocomplete="off" placeholder="请输入学号或工号" />
				</div>  
 
				<div class="powss">
					<span>密码<em style="color:red;">*</em></span>
					<input type="password" name="password" placeholder="请设置密码"/> 
				</div> 
				<div class="powss">
					<span>确认密码<em style="color:red;">*</em></span>
					<input type="password" name="confirm" placeholder="请再次输入密码"/> 
				</div> 
				<br/>  
				<input class="link-submit" type="submit" name="submit" value="注册" />
				
				<div style="font-size: 14px;margin-top: 5px;"><a href="index.php">返回登录</a>  </div>			
			</form>
		</div>
	    </div>
	</div>

</div>

  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>	
</body>
</html>