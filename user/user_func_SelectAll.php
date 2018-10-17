<!doctype html>
<html>
<head>
<meta http- equiv= "Content- Type" content=" text/html; charset=UTF8">
<title>系统管理-查询实验信息</title>
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">  
<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>
	
<body class="container-fluid">
  <h3 style="text-align:center;"text>可选实验室信息总览</h3>
  <br/>
  <table class="table table-striped table-bordered table-hover table-condensed" align="center">
    <tr>
      <th>
		  日期
      </th>
	  <th>
		  实验课节
      </th>
	  <th>
		  教室
      </th>
	  <th>
		  实验室负责人
      </th>
	  <th>
		  是否预定
      </th>
	  <th>
		  预订操作
      </th>
    </tr>
	<?php
        require_once '../include.php';
	    $link = connect();
	  
        $sql_select = "select * from lab_info";
	    $result = mysqli_query($link,$sql_select);
	    while($row = mysqli_fetch_array($result)){
			
		   if($row['ordered']=='否'){
			  echo
				"<tr>
				  <td> "
				     .$row['lab_date']."
				  </td>
				  <td> "
				     .$row['lab_class']."
				  </td>
				  <td> "
				     .$row['lab_address']."
				  </td>
				  <td> "
				     .$row['lab_manager']."
				  </td>
				  <td> "
				     .$row['ordered']."
				  </td>
				  <td>
				     <a class='btn btn-default btn-sm' href='do_func_Ordered.php ? aid=".$row['lab_date']." & bid=".$row['lab_class']." & cid=".$row['lab_address']."'>预定</a>
				  </td>
				</tr>";
		   }
		   else{
			  echo
				"<tr>
				  <td> "
				     .$row['lab_date']."
				  </td>
				  <td> "
				     .$row['lab_class']."
				  </td>
				  <td> "
				     .$row['lab_address']."
				  </td>
				  <td> "
				     .$row['lab_manager']."
				  </td>
				  <td> "
				     .$row['ordered']."
				  </td>
				  <td>
				  
				  </td> 
				</tr>";
			}

		}   
	    close($link);
    ?>
  </table>
</body>
</html>