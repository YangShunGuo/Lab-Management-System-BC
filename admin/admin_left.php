<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>系统管理—左侧</title>
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">  
<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<style>
	a,a:hover{
        color: #282828;
		text-decoration: none;
    }
</style>
</head>
<body>
  <div style="border-right:2px solid #78a5f1;height:475px;">
  <table class = "table table-condensed table-hover" style = "text-align:center; font-size:16px; text-decoration:none;">
    <caption style = "text-align:center;font-size:20px;color:blue;">功能面板</caption>
    <tr >
        <td ><a href = "../lab/lab_info_Select.php" target="right">查询实验室信息</a></td>
    </tr>
    <tr >
        <td ><a href = "../lab/lab_info_Insert.php" target="right">增加实验室信息</a></td>
    </tr>
    <tr >
        <td ><a href = "../lab/lab_info_Delete.php" target="right">删除实验室信息</a></td>
    </tr>
    <tr >
        <td ><a href = "../lab/lab_info_Update.php" target="right">修改实验室信息</a></td>
    </tr>

	<tr>
        <td ><span style = "text-align:center;font-size:20px;color:blue;">用户管理</span></td>
    </tr>
	  
    <tr >
        <td ><a href = "admin_func_SelectAdmin.php" target="right">查询系统管理员</a></td>
    </tr>
    <tr>
        <td ><a href = "admin_func_SelectUser.php" target="right">查询普通用户</a></td>
    </tr>
    <tr>
        <td ><a href = "admin_func_AddAdmin.php" target="right">开户（系统管理员）</a></td>
    </tr>
     <tr>
        <td ><a href = "admin_func_Dele.php" target="right">删除用户</a></td>
    </tr>
	<tr>
        <td ><a href = "change_Password .php" target="right">修改密码</a></td>
    </tr>
  </table>
  </div>
</body>
</html>
