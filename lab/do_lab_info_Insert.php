<?php
     require_once '../include.php';
     $link = connect();
     
     if(empty($_POST["lab_date"])|| empty($_POST["lab_class"]) || empty($_POST["lab_address"]) || empty($_POST["lab_manager"])) {  
         echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
	 }
     else{     
         $sql = "select * from lab_info where lab_date = '$_POST[lab_date]' and lab_class = '$_POST[lab_class]' and lab_address = '$_POST[lab_address]'"; //SQL语句  
		 
         $result = mysqli_query($link,$sql);    //执行SQL语句 
         $num = mysqli_num_rows($result); //统计执行结果影响的行数  
         if($num){    //如果已经存在该实验信息              
             echo "<script>alert('冲突！该实验信息已存在！'); history.go(-1);</script>";  
         }  
         else{    //不存在就往数据库增加    
             $sql_insert = "insert into lab_info values('$_POST[lab_date]','$_POST[lab_class]','$_POST[lab_address]','$_POST[lab_manager]','否','')";
			 
			 $res_insert = mysqli_query($link,$sql_insert);
             if($res_insert){  
                  echo "<script>alert('增加成功！'); history.go(-1);</script>";  
             }  
             else{  
                  echo "<script>alert('增加失败，请重新检查信息！'); history.go(-1);</script>";  
                 }  
         }  
    }
    close($link);
?>
