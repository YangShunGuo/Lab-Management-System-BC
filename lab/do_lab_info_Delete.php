<?php
     require_once '../include.php';
     $link = connect();
     
     if(empty($_POST["lab_date"])|| empty($_POST["lab_class"]) || empty($_POST["lab_address"])) {  
         echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
	 }
     else{     
         $sql = "select * from lab_info where lab_date = '$_POST[lab_date]' and lab_class = '$_POST[lab_class]' and lab_address = '$_POST[lab_address]'"; //SQL语句  
		 
         $result = mysqli_query($link,$sql);    //执行SQL语句 
         $num = mysqli_num_rows($result); //统计执行结果影响的行数  
         if($num){    //如果已经存在该实验信息              
             $sql_delete = "delete from lab_info where lab_date = '$_POST[lab_date]' and lab_class = '$_POST[lab_class]' and lab_address = '$_POST[lab_address]'";
			 
			 $res_delete = mysqli_query($link,$sql_delete);
             if($res_delete){  
                  echo "<script>alert('删除成功！'); history.go(-1);</script>";  
             }  
             else{  
                  echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
             } 			 
               
         }  
         else{    //不存在   
             echo "<script>alert('该实验信息不存在！'); history.go(-1);</script>";
         }  
    }
    close($link);
?>
