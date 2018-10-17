<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>系统管理-修改实验信息</title>
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">  
<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>

<body class="container-fluid">
  <h3 style="text-align:center;"text>原实验室信息</h3>
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
		  预订人ID
      </th>
    </tr>
  <?php
	    $aid = $_GET["aid"]; 
        $bid = $_GET["bid"]; 
        $cid = $_GET["cid"];  
	  
        require_once '../include.php';
	    $link = connect();
	  
        $sql_select = "select * from lab_info where lab_date='$aid' and lab_class='$bid' and lab_address='$cid'";
	    $result = mysqli_query($link,$sql_select);
	    while($row = mysqli_fetch_array($result)){
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
				  <td> "
				     .$row['ordered_userid']."
				  </td>
				</tr>";
		}   
	    close($link);
  ?>
  </table>
<?php
   $aid = $_GET["aid"]; 
   $bid = $_GET["bid"]; 
   $cid = $_GET["cid"];  
echo "
  <h3 style='text-align:center;'>填写新信息修改</h3>
  <div align='center'>
  <form action='do_func_Update.php ? aid=".$aid." & bid=".$bid." & cid=".$cid."' method='post'>
     <table style = 'margin:0 auto;'>
    
     <tr>
        <div class='input-group' style = 'width:300px;  margin-top:30px;'>
	      <span class='input-group-addon'>新 日 期</span>
	      <input  name='lab_date' type='text' class='form-control' autocomplete='off' placeholder='输入yyyymmdd格式日期' >
	    </div>
     </tr>
	 <tr>
        <div class='input-group' style = 'width:300px; margin-top:20px;'>
	      <span class='input-group-addon' style='border: 1px solid #cccccc;'>新 课 节</span>
			   <select class='form-control' name='lab_class'>
                 <option value='1'>第1节</option>
                 <option value='2'>第2节</option>
                 <option value='3'>第3节</option>
                 <option value='4'>第4节</option>
                 <option value='5'>第5节</option>
				 <option value='6'>第6节</option>
				 <option value='7'>第7节</option>
				 <option value='8'>第8节</option>
				 <option value='9'>第9节</option>
               </select>
	    </div>
     </tr>
     <tr>
        <div class='input-group' style = 'width:300px; margin-top:20px;'>
	      <span class='input-group-addon'>新教室号</span>
	      <input  name='lab_address' type='text' class='form-control' autocomplete='off' placeholder='输入教室号，如：工1-203' >
	    </div>
     </tr>
     <tr>
        <div class='input-group' style = 'width:300px; margin-top:20px;'>
	      <span class='input-group-addon'>新实验室负责人</span>
	      <input name='lab_manager' type='text' class='form-control' autocomplete='off' placeholder='输入负责人姓名' >
	    </div>
     </tr>
     </table>
     <p>
        <button type='submit' class='btn btn-primary' style = 'margin-top:20px;'> 修 改 </button>
        <button type='reset' class='btn btn-primary' style = 'margin-left:20px; margin-top:20px;'> 重 置 </button>
		<a href='lab_info_Update.php' class='btn btn-primary' style = 'margin-left:20px; margin-top:20px;'> 返 回 </a>
     </p>
     <span style='color:red;font-size:18px;'>
		注意：修改信息后预定状态将置为'否'<br/>
		需用户重新预定，操作不可逆！
	 </span>
  </form>
  </div>"
?>
</body>
</html>