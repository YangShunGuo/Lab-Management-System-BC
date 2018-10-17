<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>销户警告</title>
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">  
<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>

<body>
<!--弹框效果-->
<?php
session_start();
$a = $_GET["aa"]; 
echo "
<div class='modal show' id='myModal' tabindex='-1'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <a href='admin_func_SelectUser.php' class='close' >&times;</a>
                <h4 class='modal-title'>
                     警告！
                </h4>
            </div>
            <div class='modal-body' style='color:red;font-size:17px;'>
                是否确认删除【".$a."】用户信息？此操作不可逆！
            </div>
            <div class='modal-footer'>
                <a href='do_func_DeleClick.php ? aa=".$a."' type='button' class='btn btn-default pull-left'>确定</a>
                <a href='admin_func_SelectUser.php' class='btn btn-info'>取消</a>
            </div>
        </div>
    </div>
</div>
	"
?>
</body>
</html>