<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>系统管理-增加实验信息</title>
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">  
<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>

<body>
  <h3 style="text-align:center;">增加实验信息登记表</h3>
  <div align="center">
  <form action="do_lab_info_Insert.php" method="post">
     <table style = "margin:0 auto;">
    
     <tr>
        <div class="input-group" style = "width:300px;  margin-top:30px;">
	      <span class="input-group-addon">日 期</span>
	      <input  name="lab_date" type="text" class="form-control" autocomplete="off" placeholder="输入yyyymmdd格式日期" >
	    </div>
     </tr>
	 <tr>
        <div class="input-group" style = "width:300px; margin-top:20px;">
	      <span class="input-group-addon" style="border: 1px solid #cccccc;">选择课节</span>
			   <select class="form-control" name="lab_class">
                 <option value="1">第1节</option>
                 <option value="2">第2节</option>
                 <option value="3">第3节</option>
                 <option value="4">第4节</option>
                 <option value="5">第5节</option>
				 <option value="6">第6节</option>
				 <option value="7">第7节</option>
				 <option value="8">第8节</option>
				 <option value="9">第9节</option>
               </select>
	    </div>
     </tr>
     <tr>
        <div class="input-group" style = "width:300px; margin-top:20px;">
	      <span class="input-group-addon">教室号</span>
	      <input  name="lab_address" type="text" class="form-control" autocomplete="off" placeholder="输入教室号，如：工1-203" >
	    </div>
     </tr>
     <tr>
        <div class="input-group" style = "width:300px; margin-top:20px;">
	      <span class="input-group-addon">实验室负责人</span>
	      <input name="lab_manager" type="text" class="form-control" autocomplete="off" placeholder="输入负责人姓名" >
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