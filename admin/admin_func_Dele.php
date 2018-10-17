<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>系统管理—销户</title>
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">  
<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>
<body class="container-fluid">
  <h3 style = "text-align:center;">输入用户ID销户</h3>
  <form action="do_func_Dele.php" method="post">
	  <div align="center">
          <div class="input-group">
             <input name="login_id" type="text" autocomplete="off" class="form-control">
          </div>
		  <p>
             <button class="btn btn-primary" type="submit" style="margin-top:20px;">确定</button>
          </p>
          <span style="color:red;font-size:18px;">
			  注意：该操作不可逆，请谨慎操作！<br/>
			  该状态下可以删除系统管理员信息！
		  </span>
      </div>
  </form>
</body>
</html>
