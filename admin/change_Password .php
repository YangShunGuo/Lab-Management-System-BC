<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>系统管理—修改密码</title>
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">  
<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
  <h3 style = "text-align: center;" >修改密码</h3>
  <div align="center">
  <form action="do_change_Password.php" method="post">
     <table style = "margin:0 auto;">
    
     <tr>
        <div class="input-group" style = "width:300px; margin-top:20px;">
	      <span class="input-group-addon">新 密 码</span>
	      <input  name="new_password" type="password" class="form-control" placeholder="输入密码" >
	    </div>
     </tr>
     <tr>
        <div class="input-group" style = "width:300px; margin-top:20px;">
	      <span class="input-group-addon">确认密码</span>
	      <input name="confirm" type="password" class="form-control" placeholder="重复密码" >
	    </div>
     </tr>
     </table>
     <p>
        <button type="submit" class="btn btn-primary" style = "margin-top:20px;"> 提 交 </button>
        <button type="reset" class="btn btn-primary" style = "margin-left:20px; margin-top:20px;"> 重 置 </button>
     </p>
  </form>
  </div>

</body>
</html>