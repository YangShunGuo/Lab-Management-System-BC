<!doctype html>
<html>
<head>
<meta http- equiv= "Content- Type" content=" text/html; charset=UTF8">
<title>系统管理-查询系统管理员</title>
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">  
<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>
	
<body class="container-fluid">
  <h3 style="text-align:center;"text>系统管理员信息表</h3>
  <br/>
  <table class="table table-striped table-bordered table-hover table-condensed" align="center">
    <tr>
      <th>
		  用户ID
      </th>
	  <th>
		  用户密码
      </th>
	  <th>
		  用户名字
      </th>

    </tr>
	<?php
        require_once '../include.php';
	    $link = connect();
	    SelectUser($link,'1');
	  
//        $sql_select = "select * from  login_info where flag='1'";
//	    $result = mysqli_query($link,$sql_select);
//	    while($row = mysqli_fetch_array($result)){
//			echo
//				"<tr>
//				  <td> "
//				     .$row['login_id']."
//				  </td>
//				  <td> "
//				     .$row['login_password']."
//				  </td>
//				  <td> "
//				     .$row['login_name']."
//				  </td>
//
//				</tr>";
//		}   
	    close($link);
    ?>
  </table>
</body>
</html>